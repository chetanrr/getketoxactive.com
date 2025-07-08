<?php

function safeRequest($strGet) {
	//$strGet = preg_replace("/[^\-a-zA-Z0-9\_]*/m","",$strGet);
	#$strGet = preg_replace("/[^a-zA-Z0-9(\040)\(\)']*/m","",$strGet); //<--to allow space \040
	$strGet = str_ireplace("javascript","",$strGet);
	$strGet = str_ireplace("encode","",$strGet);
	$strGet = str_ireplace("decode","",$strGet);
	
	return trim($strGet);
}

function getUserIpAddr() {
	return $_SERVER["HTTP_CF_CONNECTING_IP"];
}

function setPostVarsAsURL($post, $url) {
	foreach($post as $key => $value)
	{
    if ($key === array_key_first($post)) {
			$url = $url . $key . "=" . $value;
    } else {
    	$url = $url . "&" . $key . "=" . $value;
    }
	}
	
	return $url;
}
