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

Route::get('/test', function () {
    return view('test');
});

Route::get('/regis',function(){
    return view('registrasi');
});

Route::get('/registrasi_guru',function(){
    return view('registrasi_guru');
});

Route::post('/regis', 'RegistrasiController@siswa');

Route::post('/regisguru', 'GuruController@store');

Route::prefix('/tu')->group(function(){
    Route::get('/validate-siswa-baru', 'RegistrasiController@view');
    Route::get('/biodata-siswa-baru/{id}','RegistrasiController@show');
});
