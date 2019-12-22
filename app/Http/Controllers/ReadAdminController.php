<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ReadAdminController extends Controller
{
    public function read()
    {
        $pages=User::all();
        return view ('userdata',compact('pages'));
    }
    public function deleteuser($id)
    {
        $del=User::find($id);
        $del->delete();
        return redirect('/rauser');
    }

    public function upduser($id)
    {
        $pages=User::find($id);
        return view('userupdate',compact('pages'));
    }
    public function updatedata(Request $request)
    {
        $ins= User::find($request->page_id);
        $ins->name=$request->input('name');
        $ins->email=$request->input('email');

        $ins->save();
        return redirect('/rauser');


    }
}
