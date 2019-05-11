<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = 'id';

    public function get_jabatan()
    {
    	return $this->belongsTo(jabatan::class, 'jabatan_id','id');
    }
 
}
