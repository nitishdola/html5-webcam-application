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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login','Adminauth\AuthController@showLoginForm');
Route::post('/admin/login','Adminauth\AuthController@login');
Route::get('/admin/password/reset','Adminauth\PasswordController@resetPassword');

Route::group(['middleware' => ['admin']], function () {
    //Login Routes...
    Route::get('/admin/logout','Adminauth\AuthController@logout');
	
    // Registration Routes...
    Route::get('admin/register', 'Adminauth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'Adminauth\AuthController@register');

    Route::get('/admin', 'Admin\AdminHomeController@index');

    Route::group(['prefix'=>'scheme'], function() {
        Route::get('/list-all', [
            'as' => 'scheme.index',
            'uses' => 'SchemesController@index'
        ]);
        Route::get('/create', [
            'as' => 'scheme.create',
            'uses' => 'SchemesController@create'
        ]);
        Route::post('/store', [
            'as' => 'scheme.store',
            'uses' => 'SchemesController@store'
        ]);
    });
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('/home', 'HomeController@index');
	
	
});
