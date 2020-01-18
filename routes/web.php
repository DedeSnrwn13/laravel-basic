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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->name('admin.')->group(function() {
	Route::prefix('/user')->name('user.')->group(function() {
		Route::get('/','Admin\UserController@index')->name('index');
		Route::get('/create', 'UserController@create')->name('create');
		Route::post('/ceate', 'UserController@store')->name('store');	
		Route::get('/user/{id}', 'UserController@edit')->name('edit');
		Route::put('/update', 'UserController@update')->name('update');
		Route::delete('/delete', 'UserController@delete')->name('delete');
	
	
	});
});


/**
 * Handling user routing
 */

 Route::prefix('/user')->name('user.')->group(function() {

 });

