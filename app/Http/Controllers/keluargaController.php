<?php

namespace App\Http\Controllers;

use App\keluarga;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keluargaController extends Controller
{
    public function tabelkeluarga()
    {
    	// mengambil data dari table keluarga
		$keluarga = keluarga::with(['get_pegawai'])->get();
 
    	// mengirim data keluar ke view tabelkeluarga
		return view('simpeg.tabelkeluarga',['keluarga' => $keluarga]);
		
		return view('simpeg.tabelkeluarga', compact('keluarga'));
 
	}


	public function addkeluarga()
    {

	//ben muncul relasi dropdown
	$data = pegawai::all();
	
	// memanggil view add
	return view('simpeg.addkeluarga' , compact('data'));

	}
	
	// method untuk insert data ke table keluarga
	public function storekeluarga(Request $request)
	{
	// insert data ke table keluarga
	DB::table('keluarga')->insert([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'status_nikah' => $request->status_nikah,
		'nama_pasangan' => $request->nama_pasangan,
		'ttl_pasangan' => $request->ttl_pasangan,
		'jml_anak' => $request->jml_anak,
		
	]);
	// alihkan halaman ke halaman keluarga
	return redirect('tabelkeluarga');

	}



	public function show($id)
    {
        $data = pegawai::all();
        return view ('simpeg.tabelpegawai');
    }


	// method untuk edit data keluarga
	public function editkeluarga($id)
	{		
	
	$merubah = pegawai::all();
	// mengambil data keluarga berdasarkan id yang dipilih
	$keluarga = DB::table('keluarga')->where('id',$id)->get();
	// passing data keluarga yang didapat ke view edit.blade.php
	return view('simpeg.editkeluarga', compact('merubah','keluarga'));
	}

	// update data keluarga
	public function updatekeluarga(Request $request)
	{
	// update data keluarga
	DB::table('keluarga')->where('id',$request->id)->update([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'status_nikah' => $request->status_nikah,
		'nama_pasangan' => $request->nama_pasangan,
		'ttl_pasangan' => $request->ttl_pasangan,
		'jml_anak' => $request->jml_anak
		
	]);
	// alihkan halaman ke halaman keluarga
	return redirect('tabelkeluarga');
	}



	public function deletekeluarga($id)
	{
	// menghapus data keluarga berdasarkan id yang dipilih
	DB::table('keluarga')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman keluarga
	return redirect('tabelkeluarga');
	}
}
