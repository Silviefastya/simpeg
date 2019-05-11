<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riwayat_pendidikan extends Model
{
    protected $table = "riwayat_pendidikan";
    protected $primaryKey = 'id';

    public function get_pegawai()
    {
    	return $this->belongsTo(pegawai::class, 'pegawai_id','id');
    }
}
