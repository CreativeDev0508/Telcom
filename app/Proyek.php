<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $primaryKey = 'id';
    protected $fillable = ['id_aspek','id_mitra','nik','id_pelanggan','judul','tahun','unit_kerja','saat_penggunaan','pemasukan_dokumen','ready_for_service','skema_bisnis','masa_kontrak','jenis_pelanggan','alamat_delivery'];
    public $incrementing = true;
    public $timestamp = true;

    public function proyek()
    {
    	return $this->hasmany('App\Proyek', 'id_proyek', 'id');
    }

    public function aspek()
    {
    	return $this->belongsTo('App\AspekBisnis', 'id_aspek', 'id_aspek');
    }

    public function mitra()
    {
    	return $this->belongsTo('App\Mitra', 'id_mitra', 'id_mitra');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'nik', 'nik');
    }

    public function pelanggan()
    {
    	return $this->belongsTo('App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
    }
}
