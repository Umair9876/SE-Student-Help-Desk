<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Course;
use App\PagesDescription;
use App\Semester;

//$user->assignRole('admin');
//$user->assignRole('user');

Route::get('/check', function () {
    return view('index');
});
Route::get('/', function () {
    return view('sofware_engineering');
});

Route::get('/semester', function () {
    if(auth()->user()->hasRole('admin')){
        return redirect(url('page_des'));
    }
    $semesters = App\Semester::all();
    return view('semester', compact('semesters'));
})->middleware('auth');

Route::get('/course/{id}', function ($id) {
    $course = App\Course::find($id);
//    return $course;
//    $page= App\PagesDescription::find($id);
    $pages = App\pagesDescription::where('course_id', $course->id)->get();

//    return $pages;

//    $page= App\Content::find($id);
//    return $course;
    return view('introduction_to_ict', compact('course','pages'));
});

Route::get('/course/downloadfile/{id}','PagesController@download01')->name('downloadfile');

//Route::get('/umair',function(){
//  $user = auth::user();
//  return $user->pa;
//} );

//Route::get('/introduction_to_ict','pagesController@index');
//
//Route::get('/introduction_to_ict','pagesController@insert');
//
//Route::post('/introduction_to_ict','pagesController@store');

//Route::get('/cour/{id}', function ($id) {
//    $course = App\pagesDescription::find($id);
//    return view('introduction_to_ict')->with('course',$course);
//});

Route::get('/introduction_to_ict','pagesController@insert')->middleware('auth');
//Route::post('/course/store','PagesController@store');
Route::post('/introduction_to_ict','PagesController@store')->middleware('auth');
//->name('course.store')
Route::get('/update/view/{id}', 'PagesController@updateView')->name('updtView');
Route::post('/update','PagesController@update0111')->name('update');

//Route::get('/dele/{id}','PagesController@delete');
    Route::get('/del/{id}','PagesController@destroy');


//Route::get('/delete',function ($id)
//{
//    $page=App\PagesDescription::find($id);
//    return $page;
//});R

//Route::get('/semester', function () {
////    $user = App\User::find($id);
////    $page= App\pagesDescription::find($id);
//////
////    return view('ictvieww',compact('page'));
//
//    return view('semester');
//
//});
//Route::get('/ictupdate', function () {
//
//    return view('ictupdate');
//});
Route::get('/ictvieww', function () {

    return view('ictvieww');
});

//Route::get('/PagesDescription.update', function ($id) {
//
//    $page= App\PagesDescription::find($id);
//
//
//    return view('ictupdate',compact('page'));
//});
//Route::get('/ictdelete', function () {
//    return view('ictdelete');
//});
//Route::get('/profile', function () {
//    return view('profile');
//});

//Route::post('/semester/add', 'SemesterController@add')->name('addSem');

//Route::get('/test',function()
//{
//    $semesters = App\Semester::all();
//    $semesters = $semesters->first();
//    return $semesters->courses;
//});
//Route::get('/ict','PagesController@update');
Route::get('/profile',function (){
   return view('profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('check',function ()
{
   return view('managerprofile');
});
Route::get('check01',function ()
{
    return view('userdata');
});


//admin
//Route::get('page_des',function (){
//   return view('admin_main');
//});
///admin


//admin start
Route::get('/admin_main', function () {

    return view('admin_main');
});
Route::get('/userdata', function () {

    return view('userdata');
});
Route::get('/userupdate', function () {

    return view('userupdate');
});
Route::post('/zayni','ReadAdminController@updatedata')->name('zayni');
Route::get('/page_des','AdminDesController@read');
Route::get('/deltopic/{id}','AdminDesController@delete');
Route::get('/up/{id}','AdminDesController@upview');
Route::post('/rafay','AdminDesController@update')->name('rafay');
Route::get('/rauser','ReadAdminController@read');
Route::get('/deluser/{id}','ReadAdminController@deleteuser');
Route::get('/upuser/{id}','ReadAdminController@upduser');
//admin end
