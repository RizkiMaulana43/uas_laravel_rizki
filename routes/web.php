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

Route::get('/', function () {
    return view('index');
});

Route::get('/tiket', 'CrudController@tampiltiket');


//login
Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

Route::get('/index-admin', function () {
    if(session()->exist('admin')) {
        return view('index-admin');
    }
    else { return redirect('/login'); }
    return redirect('/login');
});
