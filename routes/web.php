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
    return view('welcome');
});

Route::get('homepage', 'StaticController@homepage')->name('homepage');

Route::get('index', 'StaticController@index')->name('index');

Route::get('privacy-policy', 'StaticController@privacy')->name('privacy');

Route::get('/tutti', 'ProductController@prodotti');

Route::get('/books', 'BookController@index');

Route::resource('/books', 'BookController');
