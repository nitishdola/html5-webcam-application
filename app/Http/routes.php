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

    Route::group(['prefix'=>'receptionist'], function() {
        Route::get('/list-all', [
            'as' => 'receptionist.index',
            'uses' => 'ReceptionistsController@index'
        ]);
        Route::get('/create', [
            'as' => 'receptionist.create',
            'uses' => 'ReceptionistsController@create'
        ]);
        Route::post('/store', [
            'as' => 'receptionist.store',
            'uses' => 'ReceptionistsController@store'
        ]);
    });
});

Route::get('/gpass', function () {
    return $password = bcrypt('it_arunachal');
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('/home', 'HomeController@index');
});
