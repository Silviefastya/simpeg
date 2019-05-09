<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = 'id';
 
    public function keluarga()
    {
    	return $this->hasOne('App\keluarga');
    }

    public function riwayat_pendidikan()
    {
    	return $this->hasOne('App\riwayat_pendidikan');
    }
}
