<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType,App\Attachments;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
use Image;
class ServiceTypeController extends Controller
{
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
        return view('service_type.service_type_create');
    }

    public function store(Request $request)
    {
       $rules = array(
          'service_type' => 'required',
          'description' => 'required',
        );
      
        $validator = Validator::make(Input::all(), $rules);

        $files= Input::file('image'); 
            $destinationPath= 'images/banner';
       
        if ($validator->fails()) 
        {
            return Redirect::to('/admin/createservicetype')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
            $image = Input::file('smallimage');
            
            $servicetypes = new ServiceType;
            $servicetypes->service_type       = Input::get('service_type');
            $servicetypes->description       = Input::get('description');
            if(!empty($image)){
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/our-services/' . $imageName);
            Image::make($image->getRealPath())->resize(600, 600)->save($path);
            $servicetypes->image       = $imageName;
            }
            $str = strtolower(Input::get('service_type'));
             $servicetypes->slug = preg_replace('/[^a-z0-9]+/i', '-', $str);
            $servicetypes->save();
            if(!empty($files)){
             foreach($files as $file){
            $fullname= $file->getClientOriginalName(); 
            $hashname  = $fullname; 
            $upload_success   =$file->move($destinationPath, $hashname);
            $mimetype =$file->getClientMimeType();
            //print_r($mimetype);exit;
            $attachment = new Attachments;
            $attachment->attachment_path = $hashname;
            $attachment->attachment_type = $mimetype;
            $attachment->attachment_url = $hashname;
            $attachment->attachment_url_target = '_blank';
            $servicetypes->attachments()->save($attachment);
          }
        }

            // redirect
           return redirect()->to('/admin/servicetypes')
                       ->with('msg_success','Servicetypes created successfully');
   }

}

    public function index(Request $request){

          $servicetypes = ServiceType::orderBy('id','DESC')->paginate(10);
          return view('service_type.service_type_list',compact('servicetypes'))
              ->with('i', ($request->input('page', 1) - 1) * 10);
}

public function edit($id){

 $servicetypes= ServiceType::find($id);
 $attachments = $servicetypes->attachments()->get();
 //echo "<pre>";
 //print_r($attachments);exit;
        $count = $attachments->count();
        return view('service_type.service_type_edit',compact('servicetypes','attachments','count'));

}

public function update($id,Request $request){
       
        $rules = array(
           'service_type' => 'required',
           'description' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
              $input = input::all();
        } 
        else 
        {
         
           if(!empty(Input::file('image'))){
             if(!empty($request->smallimage)){
             $image = Input::file('smallimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/our-services/' . $imageName);
        Image::make($image->getRealPath())->resize(600, 600)->save($path);
            $servicetypes = Servicetype::find($id);
            $servicetypes->service_type       = Input::get('service_type');
             $str = strtolower(Input::get('service_type'));
             $servicetypes->slug = preg_replace('/[^a-z0-9]+/i', '-', $str);
            $servicetypes->description       = Input::get('description');
            $servicetypes->image       = $imageName;
            $servicetypes->is_active = Input::get('is_active');
            $servicetypes->update();
          

            $lastid=$servicetypes->id;
            $files= Input::file('image');
            $destinationPath= 'images/banner/';
            foreach($files as $file){
 
            $fullname= $file->getClientOriginalName(); 
            $hashname  = $fullname; 
            $upload_success   =$file->move($destinationPath, $hashname);
            $mimetype =$file->getClientMimeType();

            $attachment = new Attachments;
            $attachment->attachment_path = $hashname;
            $attachment->attachment_type = $mimetype;
            $attachment->attachment_url = $hashname;
            $attachment->attachment_url_target = '_blank';
            $servicetypes->attachments()->save($attachment);
          }
}
else{

 $servicetypes = Servicetype::find($id);
            $servicetypes->service_type       = Input::get('service_type');
             $str = strtolower(Input::get('service_type'));
             $servicetypes->slug = preg_replace('/[^a-z0-9]+/i', '-', $str);
            $servicetypes->description       = Input::get('description');
            $servicetypes->is_active = Input::get('is_active');
            $servicetypes->update();
          

            $lastid=$servicetypes->id;
            $files= Input::file('image');
            $destinationPath= 'images/banner/';
            foreach($files as $file){
 
            $fullname= $file->getClientOriginalName(); 
            $hashname  = $fullname; 
            $upload_success   =$file->move($destinationPath, $hashname);
            $mimetype =$file->getClientMimeType();

            $attachment = new Attachments;
            $attachment->attachment_path = $hashname;
            $attachment->attachment_type = $mimetype;
            $attachment->attachment_url = $hashname;

            $attachment->attachment_url_target = '_blank';
            $servicetypes->attachments()->save($attachment);
          }
}
          }
          else{
             if(!empty($request->smallimage)){
             $image = Input::file('smallimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/our-services/' . $imageName);
        Image::make($image->getRealPath())->resize(600, 600)->save($path);
            $servicetypes = Servicetype::find($id);
            $servicetypes->service_type       = Input::get('service_type');
             $servicetypes->image       = $imageName;
            $str = strtolower(Input::get('service_type'));
            $servicetypes->is_active = Input::get('is_active');
             $servicetypes->slug = preg_replace('/[^a-z0-9]+/i', '-', $str);
            $servicetypes->description       = Input::get('description');
            $servicetypes->update(); 
          }
          else{
             $servicetypes = Servicetype::find($id);
            $servicetypes->service_type       = Input::get('service_type');
            $str = strtolower(Input::get('service_type'));
            $servicetypes->is_active = Input::get('is_active');
             $servicetypes->slug = preg_replace('/[^a-z0-9]+/i', '-', $str);
            $servicetypes->description       = Input::get('description');
            $servicetypes->update(); 
          }
          }
             
    }
       return Redirect::to('/admin/servicetypes')
                        ->with('msg_update','servicetypes  updated successfully');
}
public function delete($id)
    {    
        

        $servicetypes = ServiceType::find($id);
      $servicetypes->attachments()->delete();
        ServiceType::find($id)->delete();
    
    return redirect('/admin/servicetypes')
         ->with('msg_delete','servicetypes sussifully deleted');
    }
     public function deleteajax(Request $request){
      //print_r($_POST);exit;
        $id = $request->id;
        $delete = Attachments::find($id)->delete();
        if($delete){
           echo 1;
        } else {
            echo 0;
        }
    }
}
