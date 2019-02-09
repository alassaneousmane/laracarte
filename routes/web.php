<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'ContactsController@create')->name('contact');

Route::post('/contact', 'ContactsController@store');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::get('post/tag/{tag}', 'PostController@indexTag');
