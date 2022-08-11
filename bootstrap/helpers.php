<?php

use Illuminate\Http\Request;

function sendMail($data)
{
	Mail::send($data['view'], ['data' => $data['data']], function ($message) use ($data) {
		$message->to($data['to'])->subject($data['subject']);
	});
}

function uploadSignature($imageBase64){
	$rand = Str::random(10);
	$img = $imageBase64;
	$imgName = $rand.'.'.'png';
	$path = '/'.$imgName;
	file_put_contents( public_path().'/'.$path, base64_decode($img));
	return $path;
}
function sendMessage($message, $mobilenumber)
{
	$sms_username = "mark.oconnor@munsterjoinery.ie";
	$sms_password = "m%j3C4yr";
	$senderid = "Joinery Visitor";
	
	$url = "https://api.sendmode.com/httppost.aspx?Type=sendparam&username=".urlencode($sms_username)."&password=".urlencode($sms_password)."&numto=".urlencode($mobilenumber)."&data1=".urlencode($message)."&senderid=".urlencode($senderid);
	  //pr($url) ; die;
	$reply = file_get_contents($url);
	$reply_data = simplexml_load_string($reply);
	$val=$reply_data->call_result->result;
	return true;
}

?>