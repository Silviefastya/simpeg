<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    public function tabelpegawai()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('simpeg.tabelpegawai',['pegawai' => $pegawai]);
 
    }
}
