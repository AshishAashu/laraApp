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

Route::get('/', 'PageController@getHome');

Route::get('/about', 'PageController@getAbout');

Route::get('/signup', 'PageController@getSignup');

Route::get('/users', 'PageController@getUsers');

Route::post('/signup/submit', 'userController@signupSubmit');

Route::post('/user/edit/submit', 'userController@editUserDetails');

Route::get('/user/del', 'userController@deleteUser');

Route::get('/user/getUser', 'userController@getUser');