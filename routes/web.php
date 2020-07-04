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

Route::get('/pertanyaan/create', 'PertanyaanController@create'); //Membuat pertanyaan baru
Route::get('/pertanyaan', 'PertanyaanController@index'); //Menampilkan Pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store'); //Menyimpan pertanyaan