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
Route::get('/','PostController@index');
Route::get('/post/create','PostController@create');
Route::post('/post/store','PostController@store');
Route::get('/post/{post}','PostController@show');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy');
Route::get('/password/request', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/password/reset', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

//Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'ContactController@show') ->name('contact');
Route::post('/contact', 'ContactController@mailToAdmin');
