<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
    protected $table = "keluarga";
    protected $primaryKey = 'id';

    public function get_pegawai()
    {
    	return $this->belongsTo(pegawai::class, 'pegawai_id','id');
    }
    
}