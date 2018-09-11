<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use Image;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request) 
    {
        $teams= Team::orderBy('id','DESC')->paginate(10);
        return view('teams.team_list',compact('teams'))
                  ->with('i', ($request->input('page', 1) - 1) * 10);
            
    }
    public function create()
    {
       
        return view('teams.team_create');
    }
    public function store(Request $request)
    {
        $rules = array(

        ); 
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::to('admin/createteam')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
        $image = Input::file('team_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images\our-team/' . $imageName);
        Image::make($image->getRealPath())->resize(308, 308)->save($path);
            //Material Request Table Data
            $gallery = new Team;
            $gallery->team_image       = $imageName;
            $gallery->team_name    = Input::get('team_name');
            $gallery->team_role    = Input::get('team_role');
            $gallery->experiance    = Input::get('experiance');
            $gallery->team_about_me    = Input::get('team_about_me');
            $gallery->save();
                       Session::flash('message', 'successfully created teams');
            return Redirect::to('admin/teamlist');
      }
        
} 

   

    public function edit($id)
    {    
        
        $teams= Team::find($id);
        return view('teams.team_edit',compact('teams'));
    }

    public function update($id , Request $request)
    {        
        $this->validate($request, [
        
        ]);
              
            if(!empty($request->team_image)){
    
        $image = Input::file('team_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('images/our-team/' . $imageName);
        Image::make($image->getRealPath())->resize(308, 308)->save($path);
            //Material Request Table Data
              $gallery = Team::find($id);
            $gallery->team_image = $imageName;
            $gallery->team_name    = Input::get('team_name');
            $gallery->team_role    = Input::get('team_role');
            $gallery->experiance    = Input::get('experiance');
            $gallery->team_about_me    = Input::get('team_about_me');
            $gallery->is_active    = Input::get('is_active');
            $gallery->update();
         
            return redirect()->to('admin/teamlist')
                        ->with('msg_update','teams updated successfully');
        }
        else{

            Team::find($id)->update($request->all());
            return redirect()->to('admin/teamlist')
                        ->with('message','team updated successfully');
        }
    }
     public function destory($id){
        Team::find($id)->delete();
        Session::flash('msg_delete','sucessfully delete terms');
        return redirect('admin/teamlist');
    }
}
