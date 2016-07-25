<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('/', 'MsgController@index');
Route::get('/details/{id}', 'MsgController@details');
Route::get('/add', function() {
	return view('add');
});
Route::post('/add', 'MsgController@postAdd');
//Route::get('/manage', 'MsgController@manage');
Route::get('/delete/{id}', 'MsgController@delete');
Route::get('/edit/{id}', 'MsgController@edit');
Route::post('/edit/{id}', 'MsgController@postEdit');
Route::get('/search', 'MsgController@search');
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/manage', 'MsgController@manage');
});


