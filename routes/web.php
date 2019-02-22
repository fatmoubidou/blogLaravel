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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PostsController@index');

Auth::routes();

Route::get('Admin/home', 'AdminController@index')->name('home'); //dashboard

//POST
Route::get('Admin/posts/create', 'PostsController@create')->name('createPost')->middleware('auth');

Route::put('Admin/posts/create', 'PostsController@store')->middleware('auth');

Route::get('/posts/{id}', 'PostsController@show');

Route::get('Admin/posts/{id}/edit', 'PostsController@edit')->middleware('auth');

Route::post('Admin/posts/{id}/update', 'PostsController@update')->middleware('auth');
