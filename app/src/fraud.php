<?php

	function is_us_ip() {
		$us_ip = $_SERVER["HTTP_CF_IPCOUNTRY"] === "US";
		return $us_ip;
	}

	/*
	 * Generate this token on the users first session.
	 */
	function generate_csrf_token() {
		return bin2hex(random_bytes(32));
	}
	
	/*
	 * Check the CSRF token on subsequent page requests.
	 */
	function check_csrf_token($session_token, $csrf_token) {
		return hash_equals($session_token, $csrf_token);
	}
	
	function output_form_token() {
		$_SESSION['form_token'] = generate_csrf_token();
		echo hash_hmac('sha256', 'form', $_SESSION['form_token']);
	}
	
	function check_form_token() {
		$calc = hash_hmac('sha256', 'form', $_SESSION['form_token']);
		if (hash_equals($calc, $_POST['token'])) {
		    // Continue...
		}
	}
	
	
	function luhn_check($number) {

	  // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
	  $number=preg_replace('/\D/', '', $number);

	  // Set the string length and parity
	  $number_length=strlen($number);
	  $parity=$number_length % 2;

	  // Loop through each digit and do the maths
	  $total=0;
	  for ($i=0; $i<$number_length; $i++) {
	    $digit=$number[$i];
	    // Multiply alternate digits by two
	    if ($i % 2 == $parity) {
	      $digit*=2;
	      // If the sum is two digits, add them together (in effect)
	      if ($digit > 9) {
	        $digit-=9;
	      }
	    }
	    // Total up the digits
	    $total+=$digit;
	  }

	  // If the total mod 10 equals 0, the number is valid
	  return ($total % 10 == 0) ? TRUE : FALSE;

	}

	function getCCType($cardNumber) {
		// Remove non-digits from the number
		$cardNumber = preg_replace('/\D/', '', $cardNumber);
		 
		// Validate the length
		$len = strlen($cardNumber);
		if ($len < 15 || $len > 16) {
			throw new Exception("Invalid credit card number. Length does not match");
		}else{
			switch($cardNumber) {
				case(preg_match ('/^4/', $cardNumber) >= 1):
					return 'Visa';
				case(preg_match ('/^5[1-5]/', $cardNumber) >= 1):
					return 'Mastercard';
				case(preg_match ('/^3[47]/', $cardNumber) >= 1):
					return 'Amex';
				case(preg_match ('/^3(?:0[0-5]|[68])/', $cardNumber) >= 1):
					return 'Diners Club';
				case(preg_match ('/^6(?:011|5)/', $cardNumber) >= 1):
					return 'Discover';
				case(preg_match ('/^(?:2131|1800|35\d{3})/', $cardNumber) >= 1):
					return 'JCB';
				default:
					return 'Unknown';
					break;
			}
		}
	}
	
	
	
	