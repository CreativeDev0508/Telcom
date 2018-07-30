<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;

class telegramController extends Controller
{
    public function sendMessage(){
        $telegram = new Api('577845467:AAGE3dmgDDvE9MIDAY3Cyd9wYQQG07xF5Nk');
        $response = $telegram->sendMessage([
            'chat_id' => '502299226', 
            'text' => 
            '*bold text*
            _italic text_
            [text](URL)
            `inline fixed-width code`
            `pre-formatted fixed-width code block`',
            'parse_mode' => 'markdown'
        ]);
        
        $messageId = $response->getMessageId();
    }
}
