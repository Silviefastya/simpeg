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
	
	public function addriwayat()
    {
    	
	// memanggil view add
	return view('simpeg.addriwayat');

	}
	
	// method untuk insert data ke riwayat
	public function storeriwayat(Request $request)
	{
	// insert data ke table riwayat
	DB::table('riwayat_pendidikan')->insert([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'jenjang' => $request->jenjang,
		'jurusan' => $request->jurusan,
		'nama_sekolah' => $request->nama_sekolah,
		'pegawai_id' => $request->pegawai_id,
		'tahun_masuk' => $request->tahun_masuk,
		'tahun_lulus' => $request->tahun_lulus,
	]);
	// alihkan halaman ke halaman tabelriwayat
	return redirect('tabelriwayat');

	}


	// method untuk edit data riwayat
	public function editriwayat($id)
	{		
	// mengambil data riwayat berdasarkan id yang dipilih
	$pegawai = DB::table('riwayat')->where('id',$id)->get();
	// passing data riwayat yang didapat ke view edit.blade.php
	return view('simpeg.editriwayat',['riwayat' => $riwayat]);
	}

	// update data riwayat
	public function updateriwayat(Request $request)
	{
	// update data riwayat
	DB::table('riwayat')->where('id',$request->id)->update([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'jenjang' => $request->jenjang,
		'jurusan' => $request->jurusan,
		'nama_sekolah' => $request->nama_sekolah,
		'pegawai_id' => $request->pegawai_id,
		'tahun_masuk' => $request->tahun_masuk,
		'tahun_lulus' => $request->tahun_lulus,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('tabelriwayat');
	}

	public function deleteriwayat($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('riwayat_pendidikan')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('tabelriwayat');
	}
}
