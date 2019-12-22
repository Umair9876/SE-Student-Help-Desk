<?php

namespace App\Http\Controllers;
use App\Content;

use App\PagesDescription;
//Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Storage;


class PagesController extends Controller
{
    public function insert()
    {

        return view('introduction_to_ict');
    }

    public function store(Request $request)
    {
        $course = Course::find($request->course_id);
        $user = auth()->user();
//        $request->validate([
//            'subject_name' => 'required',
//            'topic_name' => 'required',
//            'des_topic' => 'required',
//            'g_d_link' => 'required',
//            'file_url' => 'required']);
        $page = new PagesDescription();
        $page->subject_name = $request->input('sub_name');
        $page->topic_name = $request->input('top_name');
        $page->des_topic = $request->input('des_topic');
        $page->g_d_link = $request->input('goo_link');
        if($request->hasFile('saqib')) {
            $image = $request->file('saqib');
            $filename = time() . '.' . $image->getClientOriginalExtension();
           $check= $image->move(public_path('ALL_files'), $filename);
            $page->file_url=$check;
        }
            $user->pa()->save($page);
            $course->pages()->save($page);
            $page->save();
            return redirect('/course/' . $course->id);
        }

    public function updateView($id){
        $page = PagesDescription::find($id);

        $course= Course::find($id);
//      return $page;
        return view('ictupdate', compact('page','course'));

    }
    public function update0111(Request $request)
    {


        $page = PagesDescription::find($request->page_id);
//        return $page;
//        return $page;
        $page->subject_name = $request->input('sub_name');
        $page->topic_name = $request->input('top_name');
        $page->des_topic = $request->input('description');
        $page->g_d_link = $request->input('goo_link');
//        $page->file_url = $request->input('saqib');
        $page->save();
//        return 'yes';
        $course = Course::find($page->course_id);

        return redirect(url('/course/'.$course->id));
    }

    public function destroy($id)
    {
        $todo = PagesDescription::find($id);
        $todo->delete();
        return redirect('ictvieww');

    }
    public function download01($id){
         $dl=PagesDescription::find($id);

        return response()->download($dl->file_url);
    }

}

