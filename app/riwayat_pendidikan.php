<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riwayat_pendidikan extends Model
{
    public function pegawai()
    {
        return $this->belongsTo('App\pegawai');
    }
}
