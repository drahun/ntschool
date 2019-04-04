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
    return view('layouts.app');
});

/**
 * Routes for register and login
 */
Route::get('/register', 'AuthController@register')->name('registerform');
Route::post('/register', 'AuthController@registerPost')->name('registerPost');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@loginPost')->name('loginPost');
Route::get('/logout', 'AuthController@logout')->name('logout');


Route::resource('/post', 'PostController');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin','prefix' => '\admin'], function(){
    // админ
});
