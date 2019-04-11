<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    protected $table = "keluarga";
 
    public function pegawai()
    {
        return $this->belongsTo('App\pegawai');
    }
}