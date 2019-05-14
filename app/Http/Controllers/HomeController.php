<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\pegawai;
use App\keluarga;
use App\riwayat_pendidikan;
use App\gaji;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = pegawai::count();
        
        $keluarga = keluarga::count();
        
        $riwayat_pendidikan = riwayat_pendidikan::count();
        
        $gaji = gaji::count();
        return view('home',  compact('count', 'keluarga', 'riwayat_pendidikan', 'gaji'));
        //return view('home');

    }
}
