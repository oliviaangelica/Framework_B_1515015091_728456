<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
 
 public function dosen()
    {
    	$dosen = dosen::all();

    	foreach ($dosen as $dsn) {
    		echo "Nama : ".$dsn->nama;
    		echo "<br>";
    		echo "Username : ".$dsn->pengguna->Username;
    		echo "<br>";
    	}
    }

public function awal()
    {
    	return "-- SELAMAT DATANG DI DOSEN CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen = new Dosen();
	$dosen->nama = 'Edy Budiman';
	$dosen->nip = '12345';
	$dosen->alamat = 'jl. gelatik';
	$dosen->pengguna_id = '1';
	$dosen->save();
	return " ---> Data dosen bernama {$dosen->nama} telah disimpan <---";
}
    
}
