<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_jabatan'];
    public $incrementing = true;
    public $timestamp = true;

    public function jabatan()
    {
    	return $this->hasmany('App\Jabatan', 'id_jabatan', 'id');
    }
}
