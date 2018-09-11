<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialLinks;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
class SocialLinksController extends Controller
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
     public function index(Request $request) 
    {
        $sociallinks= SocialLinks::orderBy('id','DESC')->paginate(10);
        return view('social_links.social_link_list',compact('sociallinks'))
                  ->with('i', ($request->input('page', 1) - 1) * 10);
            
    }

    public function create()
    {
      $sociallinks = SocialLinks::all();
        return view('social_links.social_link_create',compact('sociallinks'));
    }

    public function store(Request $request)
    {
        $rules = array(
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::to('admin/createsociallink')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
            $sociallink = new SocialLinks;
            $sociallink->key    = Input::get('key');
            $sociallink->value    = Input::get('value');
             $sociallink->icon    = Input::get('icon');
            
            $sociallink->save();
                       Session::flash('msg_success', 'Successfully Created Social Link!');
                 return Redirect::to('admin/sociallinks');
      }
              
} 
   

    public function edit($id)
    {
        $sociallinks= SocialLinks::find($id);
        return view('social_links.social_link_edit',compact('sociallinks'));
    }

    public function update($id ,Request $request)
    {        
        $this->validate($request, [
            'key' => 'required',
            'value' => 'required',
        ]);
             $sociallink =SocialLinks::find($id);
             $sociallink->key    = Input::get('key');
             $sociallink->value    = Input::get('value');
             $sociallink->icon    = Input::get('icon');
             $sociallink->update();
               Session::flash('msg_update', 'Successfully Created Social Link!');
             return redirect()->to('admin/sociallinks');
    }
    public function delete($id)
    {    
        
        SocialLinks::find($id)->delete();
    
    return redirect('admin/sociallinks')
         ->with('msg_delete','SocialLink sussifully deleted');
    }
}
