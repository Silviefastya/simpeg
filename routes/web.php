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

//-- CRUD PEGAWAI --
//show data
Route::get('tabelpegawai','pegawaiController@tabelpegawai', function() {
	return view('simpeg.tabelpegawai');
})->name('tabelpegawai');
//create data
Route::get('addpegawai','PegawaiController@addpegawai', function() {
})->name('addpegawai');
Route::post('/storepegawai','PegawaiController@storepegawai');
//edit data
Route::get('/editpegawai/{id}','PegawaiController@editpegawai', function(){
})->name('editpegawai');
Route::post('/updatepegawai/{id}','PegawaiController@updatepegawai');
//delete data
Route::get('/deletepegawai/{id}','PegawaiController@deletepegawai');



//-- CRUD KELUARGA --
//show data
Route::get('tabelkeluarga', 'keluargaController@tabelkeluarga', function() {
	return view('simpeg.tabelkeluarga');
})->name('tabelkeluarga');
//create data
Route::get('addkeluarga','keluargaController@addkeluarga', function() {
	return view('simpeg.addkeluarga');
})->name('addkeluarga');
Route::post('/storekeluarga','keluargaController@storekeluarga');
//edit data
Route::get('/editkeluarga/{id}','keluargaController@editkeluarga', function(){
})->name('editkeluarga');
Route::post('/updatekeluarga/{id}','keluargaController@updatekeluarga');
//delete data
Route::get('/deletekeluarga/{id}','keluargaController@deletekeluarga');



//-- CRUD RIWAYAT PENDIDIKAN --
//show data
Route::get('tabelriwayat','riwayatController@tabelriwayat', function() {
	return view('simpeg.tabelriwayat');
})->name('tabelriwayat');
//create data
Route::get('addriwayat', 'riwayatController@addriwayat', function() {
	return view('simpeg.addriwayat');
})->name('addriwayat');
Route::post('/storeriwayat','riwayatController@storeriwayat');
//edit data
Route::get('/editriwayat/{id}','riwayatController@editriwayat', function(){
})->name('editriwayat');
Route::post('/updateriwayat/{id}','riwayatController@updateriwayat');
//delete data
Route::get('/deleteriwayat/{id}','riwayatController@deleteriwayat');

//-- CRUD KELUARGA --
//show data
Route::get('tabelgaji', 'gajiController@tabelgaji', function() {
	return view('simpeg.tabelgaji');
})->name('tabelgaji');
//create data
Route::get('addgaji','gajiController@addgaji', function() {
	return view('simpeg.addgaji');
})->name('addgaji');
Route::post('/storegaji','gajiController@storegaji');
//edit data
Route::get('/editgaji/{id}','gajiController@editgaji', function(){
})->name('editgaji');
Route::post('/updategaji/{id}','gajiController@updategaji');
//delete data
Route::get('/deletegaji/{id}','gajiController@deletegaji');




//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', function(){
	return view('simpeg.addriwayat');
})->name('dashboard');