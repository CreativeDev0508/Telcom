<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = ['id_pelanggan','nama_pelanggan','nomor_telepon','alamat_pelanggan','jenis_pelanggan'];
    public $incrementing = true;
    public $timestamp = true;

    public function pelanggan()
    {
    	return $this->hasmany('App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
    }
}
