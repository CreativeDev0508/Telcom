<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class telegramController extends Controller
{
    public function sendMessage(){
        $telegram = new Api('577845467:AAGE3dmgDDvE9MIDAY3Cyd9wYQQG07xF5Nk');

        $text = 
        "#ALERT!#
        terdapat proyek baru yakni *"."'INSERT PROJECT NAME HERE'"."*
        ";

        $response = $telegram->sendMessage([
            'chat_id' => '502299226', 
            'text' => $text.'yeet',
            'parse_mode' => 'markdown'
        ]);
        
        $messageId = $response->getMessageId();
    }
}
