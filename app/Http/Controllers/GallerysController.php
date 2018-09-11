<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryType;
use App\Gallery;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
use Image;
class GallerysController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request) 
    {
        $gallerys= Gallery::orderBy('id','DESC')->paginate(10);
        return view('gallerys.gallery_list',compact('gallerys'))
                  ->with('i', ($request->input('page', 1) - 1) * 10);
            
    }
    public function create()
    {
        $galleryTypes = GalleryType::all();
        //print_r($galleryTypes);exit;
        return view('gallerys.gallery_create',compact('galleryTypes'));
    }
    public function store(Request $request)
    {
        $rules = array(
            'gallery_type_id' => 'required',
            'image_tilte' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ); 
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::to('/admin/creategallery')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
        $image = Input::file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/latest-projects/' . $imageName);
        Image::make($image->getRealPath())->resize(500, 313)->save($path);
            //Material Request Table Data
            $gallery = new Gallery;
            $gallery->image       = $imageName;
            $gallery->gallery_type_id    = Input::get('gallery_type_id');
            $gallery->image_tilte    = Input::get('image_tilte');
            $gallery->description    = Input::get('description');
            $gallery->save();
                       Session::flash('msg_success', 'successfully created gallerys');
            return Redirect::to('/admin/gallerys');
      }
              
} 
    public function edit($id)
    {    
        $galleryTypes = GalleryType::all();
        $gallerys= Gallery::find($id);
        //print_r($gallerys);exit;
        return view('gallerys.gallery_edit',compact('gallerys','galleryTypes'));
    }

    public function update($id ,Request $request)
    {        
      //  print_r($_POST);exit;
        $this->validate($request, [
        ]);
            if(!empty($request->image)){
    
            $image = Input::file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/latest-projects/' . $imageName);
        Image::make($image->getRealPath())->resize(500, 313)->save($path);

            $gallerys = Gallery::find($id);
            $gallerys->image       = $imageName;
            $gallerys->gallery_type_id    = Input::get('gallery_type_id');
            $gallerys->image_tilte    = Input::get('image_tilte');
            $gallerys->description    = Input::get('description');
            $gallerys->update();
        
            return redirect()->to('/admin/gallerys')
                        ->with('msg_update','Gallery updated successfully');
        }
        else{

            Gallery::find($id)->update($request->all());
            return redirect()->to('/admin/gallerys')
                        ->with('msg_update','Galley updated successfully');
        }
    }
   public function delete($id)
    {    
        
        Gallery::find($id)->delete();
    
    return redirect('/admin/gallerys')
         ->with('msg_delete','gallerys sussifully deleted');
    }
}
