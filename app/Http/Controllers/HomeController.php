<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType,App\Appoitment,App\quickcontact;
use Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
        public function bookAppointments(Request $request) 
    {
        $servicetype = ServiceType::all();
        $bookappointments=Appoitment::orderBy('date','DESC')->paginate(10);
        //foreach($bookappointments as $bookappointment){
        //$req= explode(',', $bookappointment->service_req);

        //}
          //$servicename = ServiceType::find($req);
        return view('appointmentenquirey.bookappointments_list',compact('bookappointments','req','servicename','servicetype'))
            ->with('i', ($request->input('page', 1) - 1) * 10);

    }
    public function editbookAppointments($id) 
    {
        $bookappointments= Appoitment::find($id);
        return view('appointmentenquirey.bookappointments_edit',compact('bookappointments'));
    }

    public function updatebookAppointments($id ,Request $request)
    {        
      $this->validate($request, [
            'firstname' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required|numeric|digits_between:10,13',
            'chose_your_date' => 'required',
            'status' => 'required',
        ]);
       
           
       
            $book = Appoitment::find($id);
            $book->first_name       = Input::get('firstname');
            $book->email       = Input::get('email');
            $book->phone_number    = Input::get('phonenumber');
            
            $book->date    = Input::get('chose_your_date');
            $book->status    = Input::get('status');
            $book->update();
                        return redirect()->to('admin/bookappointment')
                        ->with('msg_update','appointment enquirey updated successfully');

    }

      public function contact(Request $request) 
    {
        $contactus=quickcontact::orderBy('id','DESC')->paginate(10);

        return view('flashnews.contactus_list',compact('contactus'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
 
     
     public function deletequickcontact($id)
    {    
        
        quickcontact::find($id)->delete();
    
    return redirect('admin/contactlist')
         ->with('msg_delete','quickcontact sussifully deleted');
    }
}
