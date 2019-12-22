<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{



    public function add(Request $request){
        $semester = Semester::create($request->validate([
            'title' => 'required',
        ]));


    }

}
