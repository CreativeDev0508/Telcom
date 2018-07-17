<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    protected $table = 'unit_kerja';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_unit_kerja'];
    public $incrementing = true;
    public $timestamp = true;

    public function unit_kerja()
    {
    	return $this->hasmany('App\UnitKerja', 'id_unit_kerja', 'id');
    }
}
