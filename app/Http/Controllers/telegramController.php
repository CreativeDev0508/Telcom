<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Telegram;
use Telegram\Bot\Api;
use App\Chatroom;
use DB;

class telegramController extends Controller
{
    public function sendMessage(){

        $json = file_get_contents('https://api.telegram.org/bot577845467:AAGE3dmgDDvE9MIDAY3Cyd9wYQQG07xF5Nk/getUpdates');
		
		$obj = json_decode($json, true);
		$array = array();

		for ($i=0; $i<count($obj['result']); $i++)
		{
            print '<br>';
            $chatid=Chatroom::where('chat_id','=', input::get('chat_id', $obj['result'][$i]['message']['chat']['id']))->first();
            if($chatid === null){
                $chatroom = new Chatroom;
                $chatroom->chat_id = input::get('chat_id', $obj['result'][$i]['message']['chat']['id']);
                $chatroom->save();
            }
        }
        for ($i=1; $i<=Chatroom::count(); $i++)
		{
			$result = Chatroom::select('chat_id')->where('id', $i)->first();
            echo $result->chat_id;
		}
    }
}
