<?php

namespace App\Http\Controllers;

use App\riwayat_pendidikan;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class riwayatController extends Controller
{
    public function tabelriwayat()
    {
    	// mengambil data dari table riwayat
		$riwayat_pendidikan = riwayat_pendidikan::with(['get_pegawai'])->get();
    	// mengirim data riwayat ke view tbl riwayat
		return view('simpeg.tabelriwayat', compact('riwayat_pendidikan'));

	}
	
	public function addriwayat()
    {
		
	//ben muncul relasi dropdown
	$data = pegawai::all();

	// memanggil view add
	return view('simpeg.addriwayat' , compact('data'));

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
		'tahun_masuk' => $request->tahun_masuk,
		'tahun_lulus' => $request->tahun_lulus,
	]);
	// alihkan halaman ke halaman tabelriwayat
	return redirect('tabelriwayat');

	}

	public function show($id)
    {
        $data = pegawai::all();
        return view ('simpeg.tabelpegawai');
    }


	// method untuk edit data riwayat
	public function editriwayat($id)
	{		
	$merubah = pegawai::all();
	// mengambil data riwayat berdasarkan id yang dipilih
	$riwayat_pendidikan = DB::table('riwayat_pendidikan')->where('id',$id)->get();
	// passing data riwayat yang didapat ke view edit.blade.php
	return view('simpeg.editriwayat', compact('merubah','riwayat_pendidikan'));
	}

	// update data riwayat
	public function updateriwayat(Request $request)
	{
	// update data riwayat
	DB::table('riwayat_pendidikan')->where('id',$request->id)->update([
		'id' => $request->id,
		'pegawai_id' => $request->pegawai_id,
		'jenjang' => $request->jenjang,
		'jurusan' => $request->jurusan,
		'nama_sekolah' => $request->nama_sekolah,
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
