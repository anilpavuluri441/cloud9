<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Session,Validator,Input,Redirect,Response;
use App\Http\Controllers\Controller;
class PageController extends Controller
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
        $pages= Page::orderBy('id','DESC')->paginate(10);
        return view('pages.page_list',compact('pages'))
                  ->with('i', ($request->input('page', 1) - 1) * 10);
            
    }

    public function create()
    {
    	$pages = Page::all();
        return view('pages.page_create',compact('pages'));
    }
    public function store(Request $request)
    {
        $rules = array(
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return Redirect::to('admin/createpage')
                ->withErrors($validator)
                ->withInput();

            $input = input::all();
        } 
        else 
        {
            $image = Input::file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $page = new Page;
            $page->image       = $imageName;
            $page->page_title    = Input::get('page_title');
            $page->page_description    = Input::get('page_description');
            $page->save();
                       Session::flash('msg_success', 'Successfully Created The Page!');
            return Redirect::to('/pages');
      }
              
} 

    public function edit($id)
    {    
        $pages= Page::find($id);
        return view('pages.page_edit',compact('pages'));
    }

    public function update($id ,Request $request)
    {        
        $this->validate($request, [
            'page_title' => 'required',
            'page_description' => 'required',
        ]);
     
            if(!empty($request->image)){
    
            $image = Input::file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $page =Page::find($id);
            $page->image       = $imageName;
            $page->page_title    = Input::get('page_title');
            $page->page_description    = Input::get('page_description');
            $page->update();
        
            return redirect()->to('admin/pages')->with('msg_update','pages sussifully updated');
        }
        else{

            Page::find($id)->update($request->all());
             return redirect()->to('admin/pages')->with('msg_update','pages sussifully updated');
        }


  }  
   public function delete($id)
    {    
        
        Page::find($id)->delete();
    
    return redirect('admin/pages')
         ->with('msg_delete','pages sussifully deleted');
    }          
           
}
