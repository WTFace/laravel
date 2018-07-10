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

Route::get('/', function (){
    $tasks = DB::table('tasks')->get();

    return view('welcome', compact('tasks', $tasks));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'EmailController@contact') ->name('contact');

Route::post('/sendEmail', 'EmailController@sendEmail');