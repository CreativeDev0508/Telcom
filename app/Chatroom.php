<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    protected $table = 'chatroom';
    protected $primaryKey = 'id';
    protected $fillable = ['chat_id'];
    public $incrementing = true;
    public $timestamp = false;
}
