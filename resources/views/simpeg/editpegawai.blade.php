@extends('layouts.edit')
@section('content')
 <!-- Basic Form End-->
 @foreach($pegawai as $p)
	<form action="/updatepegawai/{{ $p->id }}" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        NIP <input type="text" required="required" name="nip" value="{{ $p->nip }}"> <br/>
        Nama <input type="text" required="required" name="nama_pegawai" value="{{ $p->nama_pegawai }}"> <br/>
        TTL <input type="text" required="required" name="ttl" value="{{ $p->ttl }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}"> <br/>
        Agama <input type="text" required="required" name="agama" value="{{ $p->agama }}"> <br/>
        Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
        Telepon <input type="text" required="required" name="no_telepon" value="{{ $p->no_telepon }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection