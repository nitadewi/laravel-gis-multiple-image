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
    return view('depan.home');
});

Route::get('/admin', 'AdminController@home');

Route::resource('/tambah', 'AdminController');
Route::get('/daftar', 'AdminController@list');

Route::resource('/foto', 'FotoController');

Auth::routes();

Route::get('/maps', 'HomeController@maps');
Route::get('/atraction', 'HomeController@wisata');
