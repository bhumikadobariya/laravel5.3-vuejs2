<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getProfile', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('/users', 'UserController');

Route::post('/user/{id}/updatePassword', 'UserController@updatePassword');

Route::post('/addNewUser', 'UserController@addNewUser');

Route::get('/user/{id}/get_user_editData', 'UserController@getUserEditData');
