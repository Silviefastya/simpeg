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


	public function addkeluarga()
    {
    	
	// memanggil view add
	return view('simpeg.addkeluarga');

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


	public function deletekeluarga($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('keluarga')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('tabelkeluarga');
	}
}
