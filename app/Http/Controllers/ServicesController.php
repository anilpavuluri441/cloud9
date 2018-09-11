<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\ServiceType;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
class ServicesController extends Controller
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
    	$servicetypes= ServiceType::where("is_active" , 0)->get();
        return view('service.service_create',compact('servicetypes'));
    }

    public function store(Request $request)
    {
       $rules = array(
          'service_type_id' => 'required',
          'service_name' => 'required',
        );
      
        $validator = Validator::make(Input::all(), $rules);

        
        if ($validator->fails()) 
        {
            return Redirect::to('admin/createservice')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
            $services = new Services;
            $services->service_type_id       = Input::get('service_type_id');
            $services->service_name       = Input::get('service_name');
            $services->description       = Input::get('description');
            $services->save();
            // redirect
           return redirect()->to('admin/services')
                       ->with('msg_success','Services created successfully');
   }

}

    public function index(Request $request){

          $services = Services::orderBy('id','DESC')->paginate(10);
          return view('service.service_list',compact('services'))
              ->with('i', ($request->input('page', 1) - 1) * 10);
}

public function edit($id){
$servicetypes= ServiceType::where("is_active" , 0)->get();
 $services= Services::find($id);
        return view('service.service_edit',compact('services','servicetypes'));

}

public function update($id,Request $request){
       Services::find($id)->update($request->all());
      return Redirect::to('admin/services')
                        ->with('msg_update','Services  updated successfully');

}
public function delete($id)
    {    
        
        Services::find($id)->delete();
    
    return redirect('admin/services')
         ->with('msg_delete','services sussifully deleted');
    }
}
