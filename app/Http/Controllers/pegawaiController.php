<?php

namespace App\Http\Controllers;

use App\jabatan;
use App\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pegawaiController extends Controller
{
    public function tabelpegawai()
    {
    	// mengambil data dari table pegawai
		$pegawai = pegawai::with(['get_jabatan'])->get();
 
    	// mengirim data pegawai ke view index
		return view('simpeg.tabelpegawai', compact('pegawai'));
	}
	
	public function addpegawai()
    {
	//ben muncul relasi dropdown
	$data = jabatan::all();
		
	// memanggil view add
	return view('simpeg.addpegawai', compact('data'));

	}
	
	// method untuk insert data ke table pegawai
	public function storepegawai(Request $request)
	{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'id' => $request->id,
		'nip' => $request->nip,
		'jabatan_id' => $request->jabatan_id,
		'nama_pegawai' => $request->nama_pegawai,
		'ttl' => $request->ttl,
		'jenis_kelamin' => $request->jenis_kelamin,
		'agama' => $request->agama,
		'alamat' => $request->alamat,
		'no_telepon' => $request->no_telepon
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('tabelpegawai');

	}

	public function show($id)
    {
        $data = jabatan::all();
        return view ('simpeg.tabelpegawai');
    }


	// method untuk edit data pegawai
	public function editpegawai($id)
	{		
	$merubah = jabatan::all();
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('simpeg.editpegawai', compact('merubah','pegawai'));
	}

	// update data pegawai
	public function updatepegawai(Request $request)
	{
	// update data pegawai
	DB::table('pegawai')->where('id',$request->id)->update([
		'id' => $request->id,
		'nip' => $request->nip,
		'jabatan_id' => $request->jabatan_id,
		'nama_pegawai' => $request->nama_pegawai,
		'ttl' => $request->ttl,
		'jenis_kelamin' => $request->jenis_kelamin,
		'agama' => $request->agama,
		'alamat' => $request->alamat,
		'no_telepon' => $request->no_telepon
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('tabelpegawai');
	}



	public function deletepegawai($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('tabelpegawai');
	}
}
