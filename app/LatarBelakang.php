<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatarBelakang extends Model
{
    protected $table = 'latar_belakang';
    protected $primaryKey = 'id';
    protected $fillable = ['id_proyek','latar_belakang'];
    public $incrementing = true;
    public $timestamp = true;

    public function latar_belakang()
    {
    	return $this->hasmany('App\LatarBelakang', 'id_latar_belakang', 'id');
    }

    public function proyek()
    {
    	return $this->belongsTo('App\Proyek', 'id_proyek', 'id_proyek');
    }
}
