<?php

namespace App\Http\Controllers;
use App\PagesDescription;
use Illuminate\Http\Request;

class AdminDesController extends Controller
{
    public function read()
    {
            $pages=PagesDescription::all();
        return view ('admin_main',compact('pages'));
    }
    public function delete($id)
    {
        $pages=PagesDescription::find($id);
        $pages->delete();
        return redirect('page_des');
//        return view('admin_main',compact('pages'));
    }
    public function upview($id)
    {
        $pages=PagesDescription::find($id);
        return view('admin_main_update',compact('pages'));
    }
    public function update(Request $request)
    {
        $page=PagesDescription::find($request->page_id);
        $page->subject_name=$request->input('subject_name');
        $page->topic_name=$request->input('topic_name');
        $page->des_topic=$request->input('des_topic');
        $page->g_d_link=$request->input('g_d_link');
        $page->save();
       return redirect('/page_des');
    }
}
