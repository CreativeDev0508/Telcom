<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'Wilayah';
    protected $primaryKey = 'id_wilayah';
    protected $fillable = ['nama_wilayah'];
    public $incrementing = true;
    public $timestamp = true;

    public function user()
    {
    	return $this->belongsTo('App\User', 'se', 'id');
    }

    // public function Bidding()
    // {
    // 	return $this->belongsTo('App\User', 'Bidding', 'id');
    // }

    // public function Manager()
    // {
    // 	return $this->belongsTo('App\User', 'Manager', 'id');
    // }

    // public function Deputy()
    // {
    // 	return $this->belongsTo('App\User', 'Deputy', 'id');
    // }

    // public function GM()
    // {
    // 	return $this->belongsTo('App\User', 'GM', 'id');
    // }

    // public function Approval()
    // {
    // 	return $this->belongsTo('App\User', 'SE', 'id');
    // }
}
