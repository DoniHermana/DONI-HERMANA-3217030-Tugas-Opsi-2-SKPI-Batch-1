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

/*
Route::get('/buku', function () {
    return "<h1>Data Buku</h1>";
});
*/

/*
Route::get('/buku', function () {
    return view('buku.data');
});
*/

Route::get('/buku','BukuController@index');


Route::get('/buku/tambah','BukuController@tambah');