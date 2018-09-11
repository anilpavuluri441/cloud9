<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner; 
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
use Image;


class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) 
    {   
        $banners= Banner::orderBy('id','DESC')->paginate(10);
        return view('banners.banners_list',compact('banners'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('banners.banners_create');
    }

    public function store(Request $request)
    { 
         $image = Input::file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/main-slider/' . $imageName);
        Image::make($image->getRealPath())->resize(500, 313)->save($path);
            $banner = new Banner;
            $banner->image = $imageName;
            $banner->description = Input::get('description');
            $banner->title = Input::get('title');
            $banner->save();  
      
       return Redirect::to('admin/banners')
         ->with('msg_success','Banner created successfully');
    }

  public function edit($id)
    {
        $banner = Banner::find($id);
        return view('banners.banners_edit',compact('banner'));
    }

    public function update(Request $request,$id)
    { 
           $image= Input::file('image');
          if(!empty( $image)) {
          	
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/main-slider/' . $imageName);
        Image::make($image->getRealPath())->resize(500, 313)->save($path);
            $banner =Banner::find($id);
            $banner->image = $imageName;
            $banner->description = Input::get('description');
            $banner->title = Input::get('title');
            $banner->is_active = Input::get('is_active');

            $banner->update();
          }else{
          	$banner =Banner::find($id);
            $banner->is_active = Input::get('is_active');
            $banner->description = Input::get('description');
            $banner->title = Input::get('title');
            $banner->update();
           } 
      
       return Redirect::to('admin/banners')
         ->with('msg_update','Banner updated successfully');
          
    }

  public function destroy($id)
  {

    Banner::find($id)->delete();
    Session::flash('delete','banner sussifully deleted');
    return redirect('admin/banners');
    }
}
