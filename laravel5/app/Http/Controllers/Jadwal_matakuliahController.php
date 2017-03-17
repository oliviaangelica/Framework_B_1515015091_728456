<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_matakuliah;


class Jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "-- SELAMAT DATANG DI JADWAL MATAKULIAH CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$jadwal_matakuliah = new Jadwal_matakuliah();
	$jadwal_matakuliah->mahasiswa_id = '1';
	$jadwal_matakuliah->ruangan_id = '1';
	$jadwal_matakuliah->dosen_matakuliah_id = '1';
	$jadwal_matakuliah->save();
	return " ---> Data Jadwal Matakuliah dengan id {$jadwal_matakuliah->id} telah disimpan <---";
}
}
