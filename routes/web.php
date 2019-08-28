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
/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
//Website Routes
Route::get('/', 'WebsiteController@index')->name('');
Route::get('/about', 'WebsiteController@about')->name('');
Route::get('/contact', 'WebsiteController@contact')->name('');
//Admin Panel Routes
Route::get('/home', 'HomeController@index')->name('home');
