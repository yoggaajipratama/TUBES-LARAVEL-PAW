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
Route::group(['middleware' => 'revalidate'], function()
{
	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/member', 'HomeController@member');
	Route::post('/report', 'con_report@save')->name('report');
	
	Route::get('/new_password', function () {
    	return view('edit_password');
	});
});


Route::post('/lupa_password', 'Email@forgot');
Route::get('/','con_mpr@index');
Route::post('/sendEmail', 'Email@sendEmail');
Route::post('/newpassword', 'Auth\ForgotPasswordController@newpassword');

Route::get('/newaccount', function () {
    return view('newaccount');
});

Route::get('/forgot', function () {
    return view('forgot');
});

