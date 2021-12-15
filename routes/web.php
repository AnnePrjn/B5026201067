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

Route::get('praktikum1', function () {
    return view('prak1web'); //kalau sudah connect model, cara ini tidak bisa
});
//ulangi cara diatas untuk Tugas 4

Route::get('tugas4', function () {
    return view('tugas4web');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showETS');

Route::get('show','ViewController@showForm');
Route::post('konversi','ViewController@konversiSuhu');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD
Route::get('/bank','BankController@index');
Route::get('/bank/tambah','BankController@tambah');
Route::post('/bank/store','BankController@store');
Route::get('/bank/edit/{id}','BankController@edit');
Route::post('/bank/update','BankController@update');
Route::get('/bank/hapus/{id}','BankController@hapus');
Route::get('/bank/cari','BankController@cari');
Route::get('/bank/detail/{id}','BankController@view');

//route CRUD
Route::get('/nilaikuliah','NilaikuliahController@index');
Route::get('/nilaikuliah/tambah','NilaikuliahController@tambah');
Route::post('/nilaikuliah/store','NilaikuliahController@store');
Route::get('/nilaikuliah/edit/{id}','NilaikuliahController@edit');
Route::post('/nilaikuliah/update','NilaikuliahController@update');
Route::get('/nilaikuliah/hapus/{id}','NilaikuliahController@hapus');
Route::get('/nilaikuliah/cari','NilaikuliahController@cari');
Route::get('/nilaikuliah/detail/{id}','NilaikuliahController@view');
