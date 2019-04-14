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
//Gallery



Auth::routes();

Route::get('/','GalleryController@index');

Route::get('/create','GalleryController@create');
Route::get('/store','GalleryController@store');
Route::get('/photo/create','PhotoController@create');


Route::get('/photo/create/{id}','PhotoController@create');
Route::get('/photo/details/{id}','PhotoController@details');


Route::get('/photo/store','PhotoController@store');

Route::get('/show/{id}','GalleryController@show');

//photo
Route::resource('gallery','GalleryController');

Route::resource('photo','PhotoController');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
