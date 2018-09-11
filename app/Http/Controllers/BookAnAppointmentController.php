<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Appoitment;
use App\ServiceType;
use Session,Validator,Input,Redirect,Response;
use DB;
use View;
use App\Foo;
use Excel;
use PDF;
use Mail;
use App\Mail\SendMail2;
use App\Gallery;
class BookAnAppointmentController extends Controller
{
    

    public function create()

    {
     $servicetype = ServiceType::all();
        return view('book',compact('servicetype'));
    }
    public function webRegisterPost(Request $request)
    {
       // print_r($_POST);exit;
        
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:10,13',
            'request_for_service' => 'required',
            'chose_your_date' => 'required',

        ]);
         //$service=Input::get('request_for_service');
           // $service_name= implode(",",$service);
           
 $service_name = implode(',', (array)$request->input('request_for_service'));

            $book = new Appoitment;

            $book->first_name       = Input::get('first_name');
            $book->last_name       = Input::get('last_name');
            $book->email       = Input::get('email');
            $book->phone_number    = Input::get('phone');
            $book->service_req   = $service_name;
            $book->date    = Input::get('chose_your_date');
            $book->status    = Input::get('statusid');
            // echo "<pre>";
           //print_r($_POST);exit;
            $book->save();
           /* Mail::send( new SendMail2()); */
        

           $data=['msg'=>$request->message,'first'=>$request->first_name,'last'=>$request->last_name,'appdate'=>$request->chose_your_date,'requestservice'=>$request->request_for_service,'no'=>$request->phone,'mail'=>$request->email,];
           //print_r($request->request_for_service);exit;
           Mail::send('emails.appointment',$data, function($message)
           {
                $message->from(Input::get('email'), Input::get('firstname'));
                $message->to('anil@zoom4web.com')->subject("Appointment Enquirey");
                //$message->attach($pathToFile);
           });
                        return redirect()->to('/book-appointment')
                        ->with('msg_success','Book An Appointment created successfully');

    }
    public function galleryTemplate($id){
        $gallerys = Gallery::where('gallery_type_id',$id)
        ->select('gallerys.*')
        ->get();
        return view('gallery',compact('gallerys'));
    }
}
