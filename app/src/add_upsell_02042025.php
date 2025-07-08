<?php

	include('../../_global.php');
	
	if (!isset($_SESSION["upsell_completed"])) {
		$_SESSION["upsell_completed"] = true;
	} else {
		if ($_SESSION["added_upsell"] === true && $_SESSION["added_upsell2"] === true ) {
			// Don't let customer attempt to purchase upsell again.
			header('Location: '.$configs->path.'confirmation.php?customerId='.$_POST["customer_id"]."&upsell=false");
			return;
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		http_response_code(404);
		exit();
	}
		
	if ($_SESSION["added_upsell"] === false && $_SESSION["add_upsell2"] === false) {
		header('Location: '.$configs->path.'confirmation.php?customerId='.$_POST["customer_id"]."&upsell=false");
		return;
	}
	
	$resp = $konnektive->get_order($_SESSION["orderId"]);
		
	if (is_null($resp)) {
		echo "No order associated with customer.";
		return;
	}
	
	// 3DS
	if ($configs->threeds_enabled) {
		if (isset($_POST["cavv"]) && $_POST["cavv"] !== "") {
			$data["cavv"] = $_POST["cavv"];
			$data["xid"] = $_POST["ds_trans_id"];
			$data["eci"] = $_POST["eci"];
		}
	}

	$upsell_product_id = '';

	// Upsell 1
	if (isset($_POST["add_upsell"]) && $_POST["add_upsell"] == true) {
		$upsell_product_id = $configs->affiliates[$_SESSION["affid"]]->upsell_id; // Set product ID
	}

	// Upsell 2
	if (isset($_POST["add_upsell2"]) && $_POST["add_upsell2"] == true) {
		$upsell_product_id = $configs->affiliates[$_SESSION["affid"]]->upsell_id2; // Set product ID
	}
	
	if (isset($_SESSION["scrub"]) && $_SESSION["scrub"] === true) {
		// Upsell 1
		if (isset($_POST["add_upsell"]) && $_POST["add_upsell"] == true) {
			$upsell_product_id = $configs->affiliates[$_SESSION["affid"]]->upsell_id_sc; // Set product ID
		}

		// Upsell 2
		if (isset($_POST["add_upsell2"]) && $_POST["add_upsell2"] == true) {
			$upsell_product_id = $configs->affiliates[$_SESSION["affid"]]->upsell_id2_sc; // Set product ID
		}
	}
	
	$_SESSION['customer_id'] = $_POST["customer_id"];
    // /******************************* New Change ********************************/
	// 	$postData = array(
	// 					'offer_url'    => 'Ketosell',
	// 					'order_id'     => $_SESSION["orderId"],
	// 					'product_id'   => $upsell_product_id
	// 					);
		
		
	// 	/*$postData = array(
	// 				'offer_url'    => 'Cypher Diet Gummies',
	// 				'order_id'     => 'sadsa4sa',
	// 				'product_id'   => 12345,
	// 				);*/
	
	
	// 	$url = 'https://sysmods.com/index.php?req=user/UpsellDataCapture';
	// 	$postData = $postData;
	// 	$ch = curl_init();
	// 	curl_setopt($ch, CURLOPT_URL, $url);
	// 	curl_setopt($ch, CURLOPT_POST, 1);
	// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
	// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set this option to capture the response
	// 	$response = curl_exec($ch);
	// 	if ($response === false) {
	// 		echo 'cURL error: ' . curl_error($ch);
	// 	}
	// 	curl_close($ch);
	// 	$resp = json_decode($response);
		
	// 	if ($resp->status === "success") {
	// 		$_SESSION["total"] = $_SESSION["total"] + $configs->upsell_price;
	// 		if (isset($_POST["add_upsell"]) && $_POST["add_upsell"] == true) {
	// 			$_SESSION["added_upsell"] = true;
	// 		}
	// 		if (isset($_POST["add_upsell2"]) && $_POST["add_upsell2"] == true) {
	// 			$_SESSION["added_upsell2"] = true;
	// 		}
	// 		echo json_encode([
	// 			'status' => 'Success',
	// 			'customer_id' => $_POST["customer_id"],
	// 			'upsell' => true,
	// 			'order_id'     => $_SESSION["orderId"],
	// 			'product_id'   => $upsell_product_id && '135',
	// 		], 200);
	// 	}else{
	// 		$_SESSION["added_upsell2"] = false;
	// 		echo json_encode([
	// 			'status' => 'Failed',
	// 			'customer_id' => $_POST["customer_id"],
	// 			'upsell' => false
	// 		], 400);
	// 	}	
	// /*********************** end *************************************************************************/
	
	$resp = $konnektive->import_upsale(array(
		"orderId" 	=> $_SESSION["orderId"],
		"productId" => $upsell_product_id
	));
	
	$resp = json_decode($resp);
	
	
	if ($resp->result === "SUCCESS") {
		$_SESSION["total"] = $_SESSION["total"] + $configs->upsell_price;
		if (isset($_POST["add_upsell"]) && $_POST["add_upsell"] == true) {
			$_SESSION["added_upsell"] = true;
		}
		if (isset($_POST["add_upsell2"]) && $_POST["add_upsell2"] == true) {
			$_SESSION["added_upsell2"] = true;
		}
		
		echo json_encode([
			'status' => 'Success',
			'customer_id' => $_POST["customer_id"],
			'upsell' => true
		], 200);
	} else {
		if (isset($_POST["add_upsell"]) && $_POST["add_upsell"] == true) {
			$_SESSION["added_upsell"] = false;
		}
		if (isset($_POST["add_upsell2"]) && $_POST["add_upsell2"] == true) {
			$_SESSION["added_upsell2"] = false;
		}
		
		$_SESSION["added_upsell2"] = false;
		echo json_encode([
			'status' => 'Failed',
			'customer_id' => $_POST["customer_id"],
			'upsell' => false
		], 400);
	}

	exit(0);
	