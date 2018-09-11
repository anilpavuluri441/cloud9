<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\quickcontact,App\ServiceType;
use Validator,Input,Session,Redirect;
use View;
use App\Foo;
use Excel;
use PDF;
use Mail;
use App\Mail\SendMail;
class QuickContactController extends Controller
{
    //\

      public function store(Request $request)
    {
  

    	  $rules = array(
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'message' => 'required',
        );

      
        $validator = Validator::make(Input::all(), $rules);

            
        if ($validator->fails()) 
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        }
        else{
            $items = new quickcontact;
            $items->name      = Input::get('username');
            $items->email      = Input::get('email');
            $items->mobile_number    = Input::get('phone');
            $items->message =Input::get('message');
            $items->save();


             $data=['msg'=>$request->message,'name'=>$request->name,'no'=>$request->phone,'mail'=>$request->email,'cty'=>$request->city,'stat'=>$request->state,'zp'=>$request->zip];
           
           Mail::send('emails.contactus', $data, function($message)
           {
                $message->from(Input::get('email'), Input::get('name'));
                $message->to('anil1964000@gmail.com')->subject("Contact Us");
                //$message->attach($pathToFile);Mail::send( new SendMail());
              
           });

           Session::flash('msg_success', 'Thankyou  For contactus!');
           return Redirect::back();
           }
     }

     public function data($slug){

 $servicetypess= ServiceType::with('serviceType')->where('slug',$slug)->where('is_active',0)->first();
 //$attachments = $servicetypes->attachments()->get();

        //$count = $attachments->count();
 //echo "<pre>";
 //print_r($servicetypess);exit;
        return view('services',compact('servicetypess'));

}
      
}
