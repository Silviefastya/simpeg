<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//pegawai
Route::get('addpegawai', function() {
	return view('simpeg.addpegawai');
})->name('addpegawai');

Route::get('tabelpegawai','pegawaiController@tabelpegawai', function() {
	return view('simpeg.tabelpegawai');
})->name('tabelpegawai');


//keluarga
Route::get('addkeluarga', function() {
	return view('simpeg.addkeluarga');
})->name('addkeluarga');

Route::get('tabelkeluarga', 'keluargaController@tabelkeluarga', function() {
	return view('simpeg.tabelkeluarga');
})->name('tabelkeluarga');

//riwayat_pendidikan
Route::get('addriwayat', function() {
	return view('simpeg.addriwayat');
})->name('addriwayat');

Route::get('tabelriwayat','riwayatController@tabelriwayat', function() {
	return view('simpeg.tabelriwayat');
})->name('tabelriwayat');


//sk
Route::get('addsk', function() {
	return view('simpeg.addsk');
})->name('addsk');

Route::get('tabelsk', function() {
	return view('simpeg.tabelsk');
})->name('tabelsk');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', function(){
	return view('simpeg.addriwayat');
})->name('dashboard');