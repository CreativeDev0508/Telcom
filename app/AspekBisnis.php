<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AspekBisnis extends Model
{
    protected $table = 'aspek_bisnis';
    protected $primaryKey = 'id_aspek';
    protected $fillable = ['layanan_revenue','beban_mitra','nilai_kontrak','margin_tg','rp_margin'];
    public $incrementing = true;
    public $timestamp = true;

    public function aspek()
    {
    	return $this->hasOne('App\AspekBisnis', 'id_aspek', 'id_aspek');
    }

    public function proyek()
    {
    	return $this->belongsTo('App\Proyek', 'id_proyek', 'id_proyek');
    }
}
