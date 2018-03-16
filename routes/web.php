<?php

Route::redirect('/', 'comments');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cards', 'CardController');

Route::post('cards/{card}/comments', 'CommentController@store');
Route::post('/cards/{card}/comments', 'CardController@addComment');

Route::resource('/comments', 'CommentController');

Route::resource('/tags', 'TagController');

// Route::view('/dashboard', 'dashboard'); //->middleware('auth');

Route::get('/contact', 'HomeController@contact');
// Route::get('/lock', 'HomeController@lock');
Route::get('/user', 'HomeController@user');
Route::get('/dashboard', 'HomeController@dashboard');

Route::resource('/upload', 'UploadController');


// Init routes for lockscreen methods
Route::get('/lockscreen', 'LockscreenController@lockscreen')->middleware('auth.locked');
Route::post('/lockscreen', 'LockscreenController@lock')->middleware('auth.unlocked');
Route::delete('/lockscreen', 'LockscreenController@unlock')->middleware('auth.locked');

// If any guard: 'auth.unlocked:guard1,guard2,guard3'
Route::middleware('auth.unlocked')->group(function(){
  // Routes goes here
  // Where must be logged in and unlocked
});
