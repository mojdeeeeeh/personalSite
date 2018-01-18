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

Route::redirect('/', 'comments');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cards', 'CardController');

Route::post('cards/{card}/comments', 'CommentController@store');

Route::resource('/comments', 'CommentController');

Route::view('/dashboard', 'dashboard');
Route::view('/user', 'user');
Route::view('/contact', 'contact');
Route::view('/lock', 'lock');
