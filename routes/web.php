<?php
/**
 * роуты постов
 */
Route::get('/', 'PostController@index')->name('post.index');;
Route::get('post/{slug}', 'PostController@show')->name('post.show');
//Auth::routes();
/**
 * Routes for register and login
 */
Route::get('/register', 'AuthController@register')->name('registerform');
Route::post('/register', 'AuthController@registerPost')->name('registerPost');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@loginPost')->name('loginPost');
Route::get('/logout', 'AuthController@logout')->name('logout');




Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin','prefix' => '\admin'], function(){
    // админ
});
