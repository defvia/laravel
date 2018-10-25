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

//mendefinisikan untuk mengakses 

Route::get('/', function () {
    return view('welcome');
});

//nama routing halaman about ya about
//ketika dia mengambil about dia akan mengembalikan nilai view 
Route::get('tentang', function () {
    return view('about');
});

Route::get('pesan', function () {
    return view('pesan');
});

Route::post('pesan/kirim', function () {
    return view('pesan-kirim');
});