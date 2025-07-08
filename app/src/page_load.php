<?php
	
	session_start();
	
	$configs = include('app/configs/config.php');
	
	include('functions.php');
	include('konnektive.php');
	include('Mobile_Detect.php');
	include('data_pipe.php');
	include('fraud.php');
	
	if (!isset($_SESSION["anonymous_ip"])) {
		$_SESSION["anonymous_ip"] = false;
	}
	if (anonymous_ip(array(
    	"client" 	=> 617, // int
    	"key" 		=> "FJxq0V4D2QUAlE55bS6LMz1GAS1oOymB",	// commerce squared client key
		'ip'		=> $_SERVER["HTTP_CF_CONNECTING_IP"]
	))) {
		$_SESSION["anonymous_ip"] = true;
	}
	
	/*
	 * Comment this out when you're not testing
	 */ 
	$_SESSION["anonymous_ip"] = false;
	
	$mobile_detect = new Mobile_Detect;
	
	$konnektive = new KonnektiveApi($configs->crm->username, $configs->crm->password);
	
	if (session_status() == PHP_SESSION_ACTIVE) {
		// The first page load for the click/client
		
		if (isset($_GET["AFFID"])) {
			$_SESSION["affid"] = $_GET["AFFID"];
		}
		
		if (isset($_GET["c1"])) {
			$_SESSION["c1"] = $_GET["c1"];
		}
		
		if (isset($_GET["c2"])) {
			$_SESSION["c2"] = $_GET["c2"];
		}
		
		if (isset($_GET["c3"])) {
			$_SESSION["c3"] = $_GET["c3"];
		}
		
		if (empty($_SESSION["log_click"])) {
			
			$resp = $konnektive->import_click(array(
				"affId" 				=> $_SESSION["affid"],
				"sourceValue1" 	=> $_SESSION["c1"],
				"sourceValue2" 	=> $_SESSION["c2"],
				"sourceValue3" 	=> $_SESSION["c3"],
				"pageType"			=> "leadPage",
				"ipAddress" 		=> $_SERVER['HTTP_CF_CONNECTING_IP'],
				"campaignId" 		=> $configs->default_campaign_id,
				"httpReferer" 	=> "",
				"userAgent" 		=> isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "",
				"requestUri" 		=> (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
			));
			
			$_SESSION["log_click"] = "logged";
		}
	}	
		