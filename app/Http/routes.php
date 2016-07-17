<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/student', function () {
    return view('student');
});
Route::get('/teacher', function () {
    return view('teacher');
});
Route::get('/tutiondetail', function () {
    return view('tutiondetail');

});
Route::get('/tutionposting', function () {
    return view('tutionposting');
});
Route::get('/userlist', function () {
    return view('userlist');
});
Route::get('/index', function () {
    return view('master.index');
});  
Route::get('/tutions', function () {
    return view('tutions');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::auth();

Route::get('/home', 'HomeController@index');
