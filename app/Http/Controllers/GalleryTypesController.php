<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryType;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
class GalleryTypesController extends Controller
{
    //
    //

    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('gallerys.gallery_type_create');
    }

    public function store(Request $request)
    {
       $rules = array(
          'type' => 'required',
        );
      
        $validator = Validator::make(Input::all(), $rules);

        
        if ($validator->fails()) 
        {
            return Redirect::to('/admin/creategallerytype')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
            $gallerytypes = new GalleryType;
            $gallerytypes->type       = Input::get('type');
            $gallerytypes->save();
            // redirect
           return redirect()->to('/admin/gallerytypeindex')
                       ->with('msg_success','gallerytypes created successfully');
   }

}

public function index(Request $request){

$gallerytypes = GalleryType::orderBy('id','DESC')->paginate(10);
return view('gallerys.gallery_type_list',compact('gallerytypes'))
->with('i', ($request->input('page', 1) - 1) * 10);
}

public function edit($id){

 $gallerytypes= GalleryType::find($id);
        return view('gallerys.gallery_type_edit',compact('gallerytypes'));

}

public function update($id,Request $request){


  
               $id=$request->input('id');

   
      GalleryType::find($id)->update($request->all());
      return Redirect::to('/admin/gallerytypeindex')
                        ->with('msg_update','gallerytypes  updated successfully');


}
public function delete($id)
    {    
        
        GalleryType::find($id)->delete();
    
    return redirect('/admin/gallerytypeindex')
         ->with('msg_delete','gallerytypes sussifully deleted');
    }
}
