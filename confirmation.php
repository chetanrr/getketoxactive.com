<?php 

	include("_global.php"); 
	
	if (isset($_SESSION["orderId"])) {
		$conf = $konnektive->confirm_order(array(
			"orderId" => $_SESSION["orderId"]
		));
		// =============== Store Data In Memeber Ship Portal =====================
		$memberData = isset($_SESSION['member_data'])?$_SESSION['member_data']:[];
		if(!empty($memberData) && isset($memberData['email']) && !empty($memberData['email'])){
		$url = 'https://exclusiveshopusa.com/admin/create_member.php';
			$postData = $postData;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $memberData);
			$responseuser = curl_exec($ch);
			curl_close($ch);
		}
			// =============== end ================================================
	}
	
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8"/>
<title><?php echo $configs->step1_name;?></title>
<meta name="description" content="<?php echo $configs->step1_name;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="viewport" content="width=device-width,user-scalable=no"/>
    <link href="<?php echo $configs->root_path . "/assets/css/app.css"; ?>" rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/brand/favicon.png"; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $configs->root_path . "/assets/css/upsells/bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?php echo $configs->root_path . "/assets/css/ty-style.css"; ?>">
    <style>
        .addNewD{
            text-align: center;
        }
        .pic_1{
            display: inline-block;
        }
    </style>

	<script>
        history.pushState(null, null, window.location.href);
        history.back();
        history.forward(); 
        window.onpopstate = function () { history.go(1); };
    </script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="header clearfix"
					style="border-bottom:1px solid #ccc;margin-bottom:15px;padding-bottom:5px;">
					<nav>
						<ul class="nav nav-pills float-left">
							<li role="presentation">
								<!-- <h3><a href="tel:-1888-339-5780">Customer Service
										Support: <span style="font-weight:bold;color:#000;" class="active"></?php echo $configs->customer_service_number; ?> </span>
									</a>
								</h3> -->
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div id="success" class="alert alert-success" role="alert">
					<span class="lead text-center">
						<strong>Thank You!</strong> Your order will be shipped within 1 business day! You can expect it
						to arrive in 3-5 days after shipment.
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 text-center">
				<img src="<?php echo $configs->root_path . "/assets/images/checkmark.gif"; ?>" width="92" height="91"
					alt="" />
				<br>
				<?php if ($_SESSION["package"] == 5): ?>
				<img src="<?php echo $configs->root_path . "/assets/brand/keto-5.png?v=1.2"; ?>" width="200" class="img-responsive pic_1" alt="" />
				<?php elseif($_SESSION["package"] == 3): ?>
				<img src="<?php echo $configs->root_path . "/assets/brand/keto-3.png?v=1.2"; ?>" width="200" class="img-responsive pic_1" alt="" />
				<?php else: ?>
				<img src="<?php echo $configs->root_path . "/assets/brand/keto-2.png?v=1.2"; ?>" width="170" class="img-responsive pic_1" alt="" />
				<?php endif; ?>
				<br>
				<!-- <?php if (isset($_SESSION["added_upsell"]) && $_SESSION["added_upsell"] === true): ?>
					<img src="<?php echo $configs->root_path . "/assets/brand/detox-2.png?v=1.2"; ?>" width="170" class="img-responsive pic_1  showDetox" alt="Detox" /><br>
				<?php endif; ?>
				<img src="<?php echo $configs->root_path . "/assets/brand/Fitnesstracker.png?v=1.2"; ?>" width="100" class="img-responsive pic_1 product_pic showFitnessTracker" alt="Fitness Tracker" /> -->
			</div>
			<div class="col-sm-12 col-md-6">
				<h1>Your Order is Confirmed</h1>
				<p>A confirmation email has been sent to <?= $_SESSION['customer_email'] ?></p>
				<p>We are happy you have chosen to achieve your weight loss goals with one of the most effective and the hottest products on the market.</p>
				<p>Your order is currently being processed and will be shipped within 1 business day.</p>
				<h4>We are 100% committed to your product satisfaction and weight loss goals</h4>

				<h4>Order Summary</h4>
				<table class="table">
					<tbody>
						<tr>

							<?php if (isset($_SESSION["package"]) && $_SESSION["package"] == 5): ?>
							<td><?php echo $configs->package_5_description; ?></td>
							<td>$<?php 
								$price = $configs->bottle_per_5;
								echo $price;
							?>/each</td>
							<?php elseif(isset($_SESSION["package"]) && $_SESSION["package"] == 3): ?>
							<td><?php echo $configs->package_3_description; ?></td>
							<td>$<?php
								$price = $configs->bottle_per_3;
								echo $price;
							?>/each</td>
							<?php else: ?>
							<td><?php echo $configs->package_1_description; ?></td>
							<td>$<?php
								$price = $configs->bottle_per_1;
								echo $price;
							 ?>/each</td>
							<?php endif; ?>
						</tr>
						

						<!-- <?php 
						$upsell_price = 0;
						if (isset($_SESSION["added_upsell"]) && $_SESSION["added_upsell"] === true): 
							$upsell_price = $configs->upsell_price;
						?>
						<tr class="showDetox">
							<td><?php echo $configs->step2_name; ?>  (2 bottles)</td>
							<td>$<?php echo $upsell_price; ?></td>
						</tr>
						<?php endif; ?>
						<tr class="showFitnessTracker">
							<td><?= $configs->product_3['name']; ?></td>
							<td>
								<?php
									$smart_watch_price = number_format($configs->product_3['discount_price'], 2);
									echo '$'.$smart_watch_price;
								?>
							</td>
						</tr>
						<tfoot>
							<tr>
								<th>TOTAL</th>
								<th>$<span id="totalPrice"></span></th>
							</tr>
						</tfoot> -->
					</tbody>

				</table>
			</div>
		</div>

		<div class="row">
			<div class="col text-center">
				<img src="<?php echo $configs->root_path . "/assets/images/footer-logos-image.png"; ?>" width="960"
					height="87" class="center-block img-responsive" alt="">
				<br>
				<div class="col-lg-12 content centered" style="font-size:12px;">
					<div id="disclaimers">
						<p></p>
						<center>
							[ <a href="javascript:void(0);"
								onClick="openNewWindow('disclosures/terms.php','modal');">Terms & Conditions</a> ]
							[ <a href="javascript:void(0);"
								onClick="openNewWindow('disclosures/privacy.php','modal');">Privacy Policy</a> ]
							<br>
						</center>
						<br>
						<br>
						<center>
							<?php echo $configs->step1_name;?> is committed to maintaining the highest quality products
							and the utmost integrity in business practices. All products sold on this website are
							certified by Good Manufacturing Practices (GMP), which is the highest standard of testing in
							the supplement industry.
						</center>
						<p></p>
						<p></p>
						<p></p>
						<center>
							Notice: The products and information found on this site are not intended to replace
							professional medical advice or treatment. These statements have not been evaluated by the
							Food and Drug Administration. These products are not intended to diagnose, treat, cure or
							prevent any disease. Individual results may vary.
						</center>
						<br>
						<br>© <script type="text/javascript">
							var year = new Date();
							document.write(year.getFullYear());
						</script> <?php echo $configs->corporate_name;?>, All rights reserved
						<br>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery-3.5.1.min.js"; ?>">
		</script>
		<script type="text/javascript">
			let product1_price = <?= $price; ?>;
			let product2_price = <?= $upsell_price; ?>;
			let product3_price = <?= $smart_watch_price; ?>;
			let totalPrice = product1_price;

			$('.showDetox').hide();
			if(localStorage.getItem("upsell1") == 1){
				totalPrice = totalPrice + product2_price;
				$('.showDetox').show();
			}

			$('.showFitnessTracker').hide();
			if(localStorage.getItem("upsell2") == 1){
				totalPrice = totalPrice + product3_price;
				$('.showFitnessTracker').show();
			}
			$('#totalPrice').text(totalPrice.toFixed(2));

			// Popup JS
			function openNewWindow(page_url, type, button, window_name, width, height, top, left, features) {

		        if (!type) {
		            type = 'popup';
		        }

		        if (!width) {
		            width = 480;
		        }

		        if (!height) {
		            height = 480;
		        }

		        if (!top) {
		            top = 50;
		        }

		        if (!left) {
		            left = 50;
		        }

		        if (!features) {
		            features = 'resizable,scrollbars';
		        }

		        if (type == 'popup') {
		            var settings = 'height=' + height + ',';
		            settings += 'width=' + width + ',';
		            settings += 'top=' + top + ',';
		            settings += 'left=' + left + ',';
		            settings += features;

		            win = window.open(page_url, window_name, settings);
		            win.window.focus();
		        } else if (type == 'modal') {
		            var html = '';
		            html += '<div id="app_common_modal">';
		            html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><div id="p-frame"></div>';
		            if (button) {
		                html += '<div id="bottom"><p>Please scroll down to activate Accept button</p><button onclick="chkBox()" disabled="disabled">' + button + '</button></div>';
		            }

		            html += '</div></div>';

		            if (!$('#app_common_modal').length) {
		                $('body').append(html);
		            }
		            $('#app_common_modal').fadeIn();
		        }
		        // Hide Popup
		        $('#app_common_modal_close').click(function () {
		            $('#app_common_modal').remove();
		        });


		        $.ajax({
		            url: page_url,
		        }).done(function (data) {
		            $('#p-frame').html(data);
		            $('#p-frame').scroll(function () {
		                if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight - 50) {
		                    $('#bottom button').removeAttr('disabled');
		                }
		            })

		        });

		    }
		</script>

    </body>
</html>