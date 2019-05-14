<?php

namespace App\Http\Controllers;

use App\gaji;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gajiController extends Controller
{
    public function tabelgaji()
    {
    	// mengambil data dari table gaji
		$gaji = gaji::with(['get_pegawai'])->get();
 
    	// mengirim data keluar ke view tabelgaji
		return view('simpeg.tabelgaji', compact('gaji'));
 
    }
    
    //CREATE
    public function addgaji()
    {

	//ben muncul relasi dropdown
	$data = pegawai::all();
	
	// memanggil view add
	return view('simpeg.addgaji' , compact('data'));

    }
    
    // method untuk insert data ke table gaji
	public function storegaji(Request $request)
	{
	// insert data ke table gaji
	DB::table('gaji')->insert([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'gaji_pokok' => $request->gaji_pokok,
		'tunjangan' => $request->tunjangan,
        'bonus' => $request->bonus,
        'total_gaji' => $request->total_gaji,
		
	]);
	// alihkan halaman ke halaman gaji
	return redirect('tabelgaji');

    }
    
    public function show($id)
    {
        $data = pegawai::all();
        return view ('simpeg.tabelpegawai');
    }


	// method untuk edit data gaji
	public function editgaji($id)
	{		
	
	$merubah = pegawai::all();
	// mengambil data gaji berdasarkan id yang dipilih
	$gaji = DB::table('gaji')->where('id',$id)->get();
	// passing data keluarga yang didapat ke view edit.blade.php
	return view('simpeg.editgaji', compact('merubah','gaji'));
    }
    
    // update data gaji
	public function updategaji(Request $request)
	{
	// update data gaji
	DB::table('gaji')->where('id',$request->id)->update([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'gaji_pokok' => $request->gaji_pokok,
		'tunjangan' => $request->tunjangan,
        'bonus' => $request->bonus,
        'total_gaji' => $request->total_gaji,
		
	]);
	// alihkan halaman ke halaman gaji
	return redirect('tabelgaji');
	}

    public function deletegaji($id)
	{
	// menghapus data gaji berdasarkan id yang dipilih
	DB::table('gaji')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman gaji
	return redirect('tabelgaji');
	}


}
