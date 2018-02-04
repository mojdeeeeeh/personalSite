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

Route::resource('/tags', 'TagController');

// Route::view('/dashboard', 'dashboard'); //->middleware('auth');

Route::get('/contact', 'HomeController@contact');
Route::get('/lock', 'HomeController@lock');
Route::get('/user', 'HomeController@user');
Route::get('/dashboard', 'HomeController@dashboard');

Route::post('/cards/{{ $card->id }}/comments', function()
{
    $data =
    [
        'result' => request('cmBody')." - ".request('cmName')." - ".request('cmEmail')
    ];

   return $data;
});

