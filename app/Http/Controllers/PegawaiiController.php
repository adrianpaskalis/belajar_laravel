<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Pegawai;


class PegawaiiController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$pegawai = Pegawai::all();

    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

}