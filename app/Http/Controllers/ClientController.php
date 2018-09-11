<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
use Image;
class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request) 
    {
        $brands= Client::orderBy('id','DESC')->paginate(10);
        return view('brands.brand_list',compact('brands'))
                  ->with('i', ($request->input('page', 1) - 1) * 10);
            
    }
    public function create()
    {
       
        return view('brands.brand_create');
    }
    public function store(Request $request)
    {
        $rules = array(
           'brand_name' => 'required',
           'brand_image' => 'required',

        ); 
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::to('admin/createclient')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
        $image = Input::file('brand_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/client-logo/' . $imageName);
        Image::make($image->getRealPath())->resize(180, 129)->save($path);
            
            $gallery = new Client;
            $gallery->client_image       = $imageName;
            $gallery->client_name    = Input::get('brand_name');
            $gallery->save();
                       Session::flash('msg_success', 'successfully created Client');
            return Redirect::to('/admin/clients');
      }
        
} 

   

    public function edit($id)
    {    
        
        $brands= Client::find($id);
        return view('brands.brand_edit',compact('brands'));
    }

    public function update($id , Request $request)
    {        
        $this->validate($request, [
        
        ]);
              
            if(!empty($request->brand_image)){
    
        $image = Input::file('brand_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/client-logo/' . $imageName);
        Image::make($image->getRealPath())->resize(180, 129)->save($path);
            //Material Request Table Data
              $gallery = Client::find($id);
            $gallery->client_image = $imageName;
            $gallery->client_name    = Input::get('brand_name');
            $gallery->is_active    = Input::get('is_active');
            $gallery->update();
         
            return redirect()->to('/admin/clients')
                        ->with('msg_update','Client updated successfully');
        }
        else{

            Client::find($id)->update($request->all());
            return redirect()->to('/admin/clients')
                        ->with('msg_update','Client updated successfully');
        }
    }

    public function destory($id){
        Client::find($id)->delete();
        Session::flash('msg_delete','sucessfully delete Client');
        return redirect('/admin/clients');
    }
   
   
}
