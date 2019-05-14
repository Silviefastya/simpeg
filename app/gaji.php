<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table = "gaji";
    protected $primaryKey = 'id';

    public function get_pegawai()
    {
    	return $this->belongsTo(pegawai::class, 'pegawai_id','id');
    }
}
