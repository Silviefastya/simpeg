<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class riwayatController extends Controller
{
    public function tabelriwayat()
    {
    	// mengambil data dari table riwayat
    	$riwayat_pendidikan = DB::table('riwayat_pendidikan')->get();
 
    	// mengirim data riwayat ke view tbl riwayat
    	return view('simpeg.tabelriwayat',['riwayat_pendidikan' => $riwayat_pendidikan]);
 
    }
}
