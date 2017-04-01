<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{

   public function mahasiswa()
    {
    	$mahasiswa = mahasiswa::all();

    	foreach ($mahasiswa as $mhs) {
    		echo "Nama : ".$mhs->nama;
    		echo "<br>";
    		echo "Username : ".$mhs->pengguna->username;
    		echo "<br>";
    	}
    }

   public function awal()
    {
    	return "-- SELAMAT DATANG DI MAHASISWA CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new Mahasiswa();
	$mahasiswa->nama = 'Olivia Angelica';
	$mahasiswa->nim = '1515015091';
	$mahasiswa->alamat = 'jl. nusantara 4';
	$mahasiswa->pengguna_id = '2';
	$mahasiswa->save();
	return " ---> Data mahasiswa dengan nama {$mahasiswa->nama} telah disimpan <---";
}
    
}
