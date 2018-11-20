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



Route::post('/regis', 'RegistrasiController@siswa');

Route::prefix('/tu')->group(function(){
    Route::get('/validate-siswa-baru', 'RegistrasiController@view');
    Route::get('/list_guru', 'GuruController@list');
    Route::get('/biodata-siswa-baru/{id}','RegistrasiController@show');
    Route::get('/biodata_guru/{id}','GuruController@show');
    Route::post('/regisguru', 'GuruController@store');
    Route::get('/registrasi_guru', 'GuruController@create');
});
