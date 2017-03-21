<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/admin/{vue?}', 'HomeController@index')->where('vue', '[\/\w\.-]*');

Route::get('/get_auth_user_data', function(){
  return Auth::user();
});
