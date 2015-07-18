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
    return view('pages.index');
});


Route::get('currently_reading/comment/{id}/edit', 'CommentsController@edit');
Route::post('currently_reading/comment/{id}/edit', 'CommentsController@update');



//Route::get('currently_reading{id}', 'CurrentlyReadingController@show');

Route::get('currently_reading', 'CurrentlyReadingController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Currently Reading Routes
Route::resource('currently_reading', 'CurrentlyReadingController');

Route::get('currently_reading/{id}', 'CurrentlyReadingController@show');
Route::post('currently_reading/{id}', 'CommentsController@store');
