<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keluargaController extends Controller
{
    public function tabelkeluarga()
    {
    	// mengambil data dari table keluarga
    	$keluarga = DB::table('keluarga')->get();
 
    	// mengirim data keluar ke view tabelkeluarga
    	return view('simpeg.tabelkeluarga',['keluarga' => $keluarga]);
 
    }
}
