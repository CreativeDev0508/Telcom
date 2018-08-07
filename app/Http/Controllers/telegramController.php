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

        // $response = Telegram::sendMessage([
        //     'chat_id' => '-180862215', 
        //     'text' => 'Hello World'
        //   ]);
          
        //   $messageId = $response->getMessageId();
        $json = file_get_contents('https://api.telegram.org/bot637226509:AAHjfZr8JL58k7nxKKoAQPmxehclmAJHAlI/getUpdates');
		
		$obj = json_decode($json, true);
		$array = array();

		for ($i=0; $i<count($obj['result']); $i++)
		{
            // print '<br>';
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
            echo '<br>';
		}
    }
}
