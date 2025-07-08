<?php
	
	date_default_timezone_set('America/New_York');
	$productName = 'KetoX Active';
	$productDomain = 'localhost';
	$productSubFolder = 'demo.com/usv-2';
	return (object) array(
		'crm' => (object) array(
			'domain' => '', // no required for konnektive
			'username' => 'offers_Api',
			'password' => 'blflrI_A3est'
		),
		
		/* Added these */
		'corporate_name' => $productName . ' ACV Gummies',
		'mid_descriptor' => "* $productName ACV Gummies",
		'customer_service_number' => '1-877-200-3590',
		'customer_service_email' => '', // 
		'smartystreets_key' => '',
		'smartystreets_autocomplete_enabled' => 0,
		'smartystreets_verification_enabled' => 0,
		'root_path_mobile' => "/$productSubFolder/mobile/",
		'step1_name' => $productName . ' ACV Gummies',
		'step2_name' => $productName . ' Detox',
		'root_path' => "/$productSubFolder/",
		'package_5_description' => $productName . ' ACV Gummies',
		'package_5_price' => '239.98',
		'package_3_description' => $productName . ' ACV Gummies',
		'package_3_price' => '189.98',
		'package_1_description' => $productName . ' ACV Gummies',
		'package_1_price' => '129.98',
		
		
		'mid_descriptor' => "* $productName ACV Keto",
		'customer_service_number' => '1-877-200-3590',
		'customer_service_email' => '', //
		'cs_hours' => '9am EST - 9pm EST Mon - Sat',
		'smartystreets_key' => '',
		'smartystreets_autocomplete_enabled' => 0,
		'smartystreets_verification_enabled' => 0,
		'path' => "/$productSubFolder/",
		'mobile_path' => "/$productSubFolder/mobile/",
		'page_title' => $productName . ' ACV Gummies',
		'step_1_name' => $productName . ' ACV Gummies',
		'step_2_name' => $productName . ' Detox',
		'corp_name' => $productName . ' ACV Gummies',
		'accept_visa' => true,
		'accept_mastercard' => true,
		'accept_discover' => false,
		'accept_amex' => false,
		'bottle_price_5' => 239.98,
		'bottle_price_3' => 189.98,
		'bottle_price_1' => 129.98,
		'bottle_ship_price_1' => "FREE SHIPPING",
		'bottle_price_1_total' => 0.00,
		'bottle_per_5' => 39.99,
		'bottle_per_3' => 47.49,
		'bottle_per_1' => 64.99,
		'bottle_save_5' => 179.96,
		'bottle_save_3' => 89.98,
		'bottle_save_1' => 10.00,
		'bottle_retail_5' => 69.99,
		'bottle_retail_3' => 69.99,
		'bottle_retail_1' => 69.99,
		'upsell_list_price' => 89.95,
		'upsell_price' => 79.99,
		'upsell_price_per' => 39.99,
		'threeds_enabled' => false,
		'threeds_key' => 'sDs7do',
		'default_campaign_id' => 56,
		'product_detox' => array(
			'name' => $productName . ' Detox',
			'prices' => array(
				1 => 49.99,
				2 => 79.99,
			),
		),
		'product_3' => array(
			'name' => $productName . ' Fitness Tracker',
			'type' => 'Fitness Tracker',
			'quote' => 'TRACK YOUR PROGRESS,<br>REACH YOUR GOALS',
			'description' => 'With real-time heart rate monitoring, sleep tracking, and personalized insights, our fitness tracker gives you a complete picture of your physical health and helps you make informed decisions about your workouts and overall wellness.',
			'reg_price' => 119.95,
			'discount_price' => 49.99,
		),
		'affiliates' => array(
						
			// C2M
			"37ED7D37" => (object) array(
				"network_name" => "37ED7D37",
				
				'campaign_id'				=> 56,
				'two_bottle_product_id'		=> 813, // 2 bottle
				'three_bottle_product_id'	=> 814, // 4 bottles
				'five_bottle_product_id'	=> 815, // 6 bottles
				'upsell_id'					=> 816, // upsell
				// 'upsell_id2'				=> 5363, // upsell 2
				
				'campaign_id_sc'			=> 57,
				'two_bottle_product_id_sc'	=> 817, // scrub 2 bottle
				'three_bottle_product_id_sc'=> 818, // scrub 4 bottles
				'five_bottle_product_id_sc'	=> 819, // scrub 6 bottles
				'upsell_id_sc'				=> 820, // scrub upsell
				// 'upsell_id2_sc'				=> 513, // scrub upsell2
					
				"quantity" => 1, // This offer is always 1
				"scrub" => 0
			), 
			
			
			// MBC
			"DDEAC83D" => (object) array(
				"network_name" => "DDEAC83D",
				
				'campaign_id'				=> 56,
				'two_bottle_product_id'		=> 813, // 2 bottle
				'three_bottle_product_id'	=> 814, // 4 bottles
				'five_bottle_product_id'	=> 815, // 6 bottles
				'upsell_id'					=> 816, // upsell
				// 'upsell_id2'				=> 5363, // upsell 2
				
				'campaign_id_sc'			=> 57,
				'two_bottle_product_id_sc'	=> 817, // scrub 2 bottle
				'three_bottle_product_id_sc'=> 818, // scrub 4 bottles
				'five_bottle_product_id_sc'	=> 819, // scrub 6 bottles
				'upsell_id_sc'				=> 820, // scrub upsell
				// 'upsell_id2_sc'				=> 513, // scrub upsell2

				"quantity" => 1, // This offer is always 1
				"scrub" => 15
			)
			
		),
		'scrub' => 0
	);