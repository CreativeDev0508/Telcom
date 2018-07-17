<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id';
    protected $fillable = ['perusahaan_mitra','nama_mitra'];
    public $incrementing = true;
    public $timestamp = true;

    public function mitra()
    {
    	return $this->hasmany('App\Mitra', 'id_mitra', 'id');
    }
}
