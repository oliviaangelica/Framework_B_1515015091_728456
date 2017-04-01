<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_matakuliah;
use App\Matakuliah;

class Dosen_matakuliahController extends Controller
{
    public function awal()
    {
    	return "-- SELAMAT DATANG DI DOSEN MATAKULIAH CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen_matakuliah = new Dosen_matakuliah();
	$dosen_matakuliah->dosen_id = '2';
	$dosen_matakuliah->matakuliah_id = '1';
	$dosen_matakuliah->save();
	return " ---> Data berupa Dosen ( id : {$dosen_matakuliah->dosen_id} ) yang mengajar Mata Kuliah ( id : {$dosen_matakuliah->matakuliah_id} ) telah disimpan <---";
}
}
