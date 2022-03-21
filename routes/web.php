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

Route::view('/welcome', 'welcome');
Route::view('/create', 'post.create');

Route::get('/', 'Post\PostController@index')->name('index');
Route::post('/', 'Post\PostController@store');
Route::get('show', 'Post\PostController@all_post')->name('all_post');
Route::get('all', 'Post\PostController@all');
Route::get('view/{id}', 'Post\PostController@viewpost')->name('viewpost');
Route::get('edit/{id}', 'Post\PostController@edit')->name('edit');
Route::put('edit/{id}', 'Post\PostController@update')->name('update');
Route::get('delete/{id}', 'Post\PostController@Delete')->name('Delete');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
