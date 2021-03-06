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
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //Menampilkan pertanyaan berdasarkan id tertentu
Route::get('/jawaban/{id}','JawabanController@index'); //Menampilkan jawaban dari pertanyaan dengan id tertentu
Route::post('/jawaban/{id}','JawabanController@store'); //Menyimpan jawaban untuk pertanyaan dengan id tertentu
