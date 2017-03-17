<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function awal()
    {
    	return "-- SELAMAT DATANG DI PENGGUNA CONTROLLER --";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$pengguna = new Pengguna();
	$pengguna->username = 'Angelica Olivia';
	$pengguna->password = '051197';
	$pengguna->save();
	return "--> Data pengguna dengan username {$pengguna->username} telah disimpan <---";
}
}
