<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
    return "Hello-world";
});

// Route::get('pengguna/{pengguna}', function ($pengguna) {
   // return "Hello-world dari pengguna $pengguna";
// });

// Route::get('kelas_b/framework/{mhs?}', function ($mhs="Anonim") {
    // return "Selamat datang $mhs";
//});

Route::get('pengguna/awal','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen/awal','DosenController@awal');
Route::get('dosen/tambah', 'DosenController@tambah');

Route::get('mahasiswa/awal','MahasiswaController@awal');
Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('matakuliah/awal','MatakuliahController@awal');
Route::get('matakuliah/tambah', 'MatakuliahController@tambah');

Route::get('dosen_matakuliah/awal','Dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah', 'Dosen_matakuliahController@tambah');

Route::get('ruangan/awal','RuanganController@awal');
Route::get('ruangan/tambah', 'RuanganController@tambah');

Route::get('jadwal_matakuliah/awal','Jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');