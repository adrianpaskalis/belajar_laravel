<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Diki Alfarabi Hadi"; 
        $matkul = ["Alpro", "Data Mining", "Peterpan"];
    	return view('biodata',['nama' => $nama, 'matkul' => $matkul]);
    }
} 

