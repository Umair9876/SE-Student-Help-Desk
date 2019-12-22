<?php

namespace App\Http\Controllers;

use App\Course;
use App\Semester;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function add(Request $request){
        $request->validate(
            [
                'cc' => 'required',
                'title' => 'required',
                'semester_id' => 'required'
            ]
        );

        $course = new Course;
        $course->cc = $request->cc;
        $course->title = $request->title;
        $semester = Semester::find($request->semester_id);

        $semester->courses()->save($course);
        $semester->save();
        $course->save();
    }
}
