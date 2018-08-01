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

Route::get('/', 'PostsController@index')->name('index');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/post/create', 'PostsController@create')->name('post.create')->middleware('auth');
Route::post('/post-store', 'PostsController@store')->name('post.store')->middleware('auth');
Route::get('/author-posts/{id}', 'PostsController@authorShow')->name('author.show');
Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit')->middleware('auth');
Route::post('/post/update/{id}', 'PostsController@update')->name('post.update')->middleware('auth');
Route::get('/post/delete/{id}', 'PostsController@delete')->name('post.delete')->middleware('auth');
Route::get('/users', 'UserController@showall')->name('allusers')->middleware('auth');

Route::get('/post/{id}', 'PostsController@show')->name('post.show');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->middleware('guest');
Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth');
Route::post('register', 'Auth\RegisterController@register')->middleware('auth');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->middleware('auth');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->middleware('auth');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->middleware('auth');

Route::get('/user/delete', 'UserController@delete')->name('user.delete')->middleware('auth');