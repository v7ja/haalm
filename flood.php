<?php
date_default_timezone_set("Asia/Baghdad");
function bot($method, $datas = []) {
	$token = file_get_contents("token");
	$url = "https://api.telegram.org/bot$token/" . $method;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$res = curl_exec($ch);
	curl_close($ch);
	return json_decode($res, true);
}
include 'madeline.php';
use danog\MadelineProto\EventHandler;
use danog\MadelineProto\Tools;
use danog\MadelineProto\API;
use danog\MadelineProto\Logger;
use danog\MadelineProto\RPCErrorException;
$settings['app_info']['api_id'] = 579315;
$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
// Normal event handler definition as above
$x = 0;
$MadelineProto = [];
$accounts = explode("\n",file_get_contents("accounts"));
    foreach($accounts as $session){
    	if($session != null){
    	$message = "Userbot login (".$session.")";
    	Logger::log($message, Logger::WARNING);
    $MadelineProto = new API(''.$session.'.madeline');
    $x += 1;
            $i = $MadelineProto->getself();
        $phone = $i['phone'];
        $click = file_get_contents('clicks');
file_put_contents('clicks',$click + 1);
$click = file_get_contents('clicks');
    try{        
    $user = file_get_contents("username");
$MadelineProto->account->updateUsername(['username'=>$user]);
      $data = date("h:i:s");
      bot('sendvideo',['chat_id' => file_get_contents("ID"), 'video' => "https://t.me/c_7c7/38",
'caption'=>"
𝑰𝒔 𝒂 𝑵𝒆𝒘 𝒖𝒔𝒆𝒓 𝑩𝒚 : 𝒂𝑩𝒐𝒐𝑫 𝒀𝒂𝑩𝒉 🐊,
এ〔 ᥙ𝗌𝖾𝗋ᥒα𝗆𝖾 〕: $user
এ〔 ᥴ𝗅Ꭵᥴ𝗄𝗌 〕: $click
এ〔 𝗌α᥎𝖾 〕: 𝑨𝒄𝒄𝒐𝒖𝒏𝒕
এ〔 ᥴh 〕: @ToGoLang
এ〔 ᥒᥙ𝗆𝖻𝖾𝗋 〕: +$phone | $data",
]);
shell_exec('pm2 stop flood.php');
unlink('username');
    }catch(Exception $e){
    	      $data = date("h:i:s");
        $time = file_get_contents("time");
        $type = file_get_contents("type");
        if($type == "sleep"){
        sleep($time);
        }       
        if($type == "usleep"){
        usleep($time);
        }
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => " 
╭ checker ❲ $click  ❳ 🛎 
 | username not save
╰ FLood 1500 ↣ @$user 
╭     [ +$phone ]
 |
╰  [ Error :  {$e->getMessage()} ]
"]);
    	}
}
}
API::startAndLoopMulti($MadelineProto, MyEventHandler::class);