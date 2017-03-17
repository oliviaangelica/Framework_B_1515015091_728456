<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;


class MatakuliahController extends Controller
{
    public function awal()
    {
    	return "-- SELAMAT DATANG DI MATAKULIAH CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$matakuliah = new Matakuliah();
	$matakuliah->title = 'Pemrograman Framework';
	$matakuliah->keterangan = 'Wajib';
	$matakuliah->save();
	return " ---> Data dari Mata Kuliah {$matakuliah->title} telah disimpan <---";
}
}
