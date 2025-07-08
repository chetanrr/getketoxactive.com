<?php 
	include("_global.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $configs->step1_name; ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="./assets/brand/favicon.png" rel="icon" type="image/png">

    <link href="<?php echo $configs->root_path . "/assets/css/app.css"; ?>" rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/css/checkout.css"; ?>" type="text/css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;500;600;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <style>
        .chkbox {
            width: auto !important;
            height: auto !important;
            appearance: checkbox !important;
            outline: auto !important;
            display: inline !important;
            text-align: center !important;
        }

        label.payment_as_shipping_label {
            text-align: center;
            display: inline;
            font-size: 16px !important;
        }
    </style>
    <script type="text/javascript">
        function getDate(days) {
            var monthNames = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            var now = new Date();
            now.setDate(now.getDate() + days);
            var nowString = monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();
            document.write(nowString);
        }
    </script>
    <script>
        history.pushState(null, null, window.location.href);
        history.back();
        history.forward();
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
    <style>
        .frmCheckElemts {
            margin-top: 15px;
            text-align: center;
        }

        .frmCheckElemts label {
            font-size: 11px !important;
            font-weight: normal;
        }

        form {
            padding: 0;
        }
    </style>

</head>

<body class="checkout">

<div class="wrapper">
    <div id="app">
        <header class="order__header">
            <div class="order__header_top">
                <div class="container">
                    <span class="views-coll">12 others </span> are viewing this offer right now <span class="timer"
                                                                                                      id="time"></span>
                </div>
            </div>
            <div class="container">
                <div class="row order__header_in">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/brand/logo2-strips.png"; ?>" width="165">
                    <div class="delivery-block">
                        Internet Exclusive Offers
                        Available to USA Residents Only
                    </div>
                </div>
            </div>
        </header>

        <div class="order">
            <div class="container">
                <div class="row">
                    <div class="order__left">
                        <div class="steps">
                            <ul class="steps__list row">
                                <li class="steps__item">1. Shipping Info</li>
                                <li class="steps__item active">2. Finish Order</li>
                                <li class="steps__item">3. Summary</li>
                            </ul>
                            <div class="approved-text">
                                <strong><span class="emphasis">APPROVED!</span> Free Bottle Packages Confirmed</strong>
                            </div>
                            <p>Limited supply available as of <span class="full-date date-container2"></span>. We
                                currently have product <strong>in stock</strong> and ready to ship within 24 hours.</p>
                            <p class="status-pr">Sell Out Risk: <span>HIGH</span></p>
                        </div>

                        <div class="product-selection">
                            <div class="product product1 sel-prod active" data-pkg="5" data-price="239.98">
                                <div class="package-item">
                                    <div class="package-item__header ">
                                        <div class="title-block">
                                            <span class="title-block__main">BUY 3 GET 3 FREE*</span>
                                            <span class="title-block__retail">Retail: <br><span
                                                        class="retail-price">$<?php echo $configs->bottle_retail_5;?></span>/bottle</span>
                                        </div>
                                        <div class="shipping-row">
                                            <span>FREE SHIPPING</span>
                                        </div>
                                    </div>

                                    <div class="package-item__content">
                                        <div class="package-item__status">
                                            <span></span>
                                        </div>
                                        <div class="package-images">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl1">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl2">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl3">
                                            </div>
                                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/plus-icon.png"; ?>" class="chk-plus">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl4">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl6">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl5">
                                            </div>

                                            <div class="package__save">
                                                <span class="package__save_title">SAVE</span>
                                                <span class="package__save_item save-price">$<?php echo $configs->bottle_save_5; ?></span>
                                            </div>
                                        </div>
                                        <div class="package-info">
                                            <span class="package-info__title">For Those Who Need <br> to Lose 25+ Pounds!</span>
                                            <span class="package-info__subTitle">same as</span>
                                            <span class="package-info__price"><p style="display: inline-block"
                                                                                 class="price">$<?php echo $configs->bottle_per_5; ?></p> <span>/bottle</span></span>
                                            <span class="package-info__btn">Selected!</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product product2 sel-prod" data-pkg="3" data-price="189.98">
                                <div class="package-item">
                                    <div class="package-item__header ">
                                        <div class="title-block">
                                            <span class="title-block__main">BUY 2 GET 2 FREE*</span>
                                            <span class="title-block__retail">Retail: <br><span
                                                        class="retail-price">$<?php echo $configs->bottle_save_3; ?></span>/bottle</span>
                                        </div>
                                        <div class="shipping-row">
                                            <span>FREE SHIPPING</span>
                                        </div>
                                    </div>

                                    <div class="package-item__content">
                                        <div class="package-item__status">
                                            <span></span>
                                        </div>
                                        <div class="package-images">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl1">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl3">
                                            </div>
                                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/plus-icon.png"; ?>" class="chk-plus" style="left:132px;">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl4">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl5">
                                            </div>
                                            <div class="package__save">
                                                <span class="package__save_title">SAVE</span>
                                                <span class="package__save_item save-price">$<?php echo $configs->bottle_save_3; ?></span>
                                            </div>
                                        </div>
                                        <div class="package-info">
                                            <span class="package-info__title">For Those Who Need <br> to Lose 15+ Pounds!</span>
                                            <span class="package-info__subTitle">same as</span>
                                            <span class="package-info__price"><p style="display: inline-block"
                                                                                 class="price">$<?php echo $configs->bottle_per_3; ?></p> <span>/bottle</span></span>
                                            <span class="package-info__btn">Select Package</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product product3 sel-prod" data-pkg="1" data-price="129.98">
                                <div class="package-item">
                                    <div class="package-item__header ">
                                        <div class="title-block">
                                            <span class="title-block__main">BUY 1 GET 1 FREE*</span>
                                            <span class="title-block__retail">Retail: <br><span
                                                        class="retail-price">$<?php echo $configs->bottle_retail_1; ?></span>/bottle</span>
                                        </div>
                                        <div class="shipping-row">
                                            <span>FREE SHIPPING</span>
                                        </div>
                                    </div>

                                    <div class="package-item__content">
                                        <div class="package-item__status">
                                            <span></span>
                                        </div>
                                        <div class="package-images">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl1">
                                            </div>
                                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/plus-icon.png"; ?>" class="chk-plus" style="left:132px;">
                                            <div class="package-images__item">
                                                <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>" class="prod-btl5"
                                                     style="left:-18px;">
                                            </div>
                                        </div>
                                        <div class="package-info">
                                            <span class="package-info__title">For Those Who Need <br> to Lose 7+ Pounds!</span>
                                            <span class="package-info__subTitle">&nbsp;</span>
                                            <span class="package-info__price"><p style="display: inline-block"
                                                                                 class="price">$<?php echo $configs->bottle_per_1; ?></p> <span>/bottle</span></span>
                                            <span class="package-info__btn">Select Package</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="footnote">* at retail price</span>
                            </div>

                            <img class="img-responsive secure-icons" src="<?php echo $configs->root_path . "/assets/images/or-secureicons.jpg"; ?>">
                            <div class="guarantee-block">
                                <div class="guarantee-top">
                                    30 day money back guarantee
                                </div>
                                <div class="guarantee-content">
                                    <img alt="" class="guarantee-icon" src="<?php echo $configs->root_path . "/assets/images/guarantee-ico.jpg"; ?>">
                                    <div class="guarantee-text">
                                        <p>We are so confident in our products and services, that we back it with a 30
                                            day money back guarantee. If for any reason you are not fully satisfied with
                                            our products, simply return the purchased products in the original container
                                            within 30 days of when you received your order. We will refund you 100% of
                                            the purchase price - with absolutely no hassle.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="line-block">
                                <div class="line">
                                    <div class="text-center">
                                        HURRY! CONFIRM YOUR ORDER NOW!
                                    </div>
                                </div>
                                <div class="arrow">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="order__right">
                        <div class="form__header">
                            <h2>FINAL STEP:</h2>
                            <h3>PAYMENT INFORMATION</h3>
                        </div>
                        <div class="form__in">
                            <span class="accept-text">We Accept:</span>
                            <ul class="form__cards">
                                <li><img alt="" src="<?php echo $configs->root_path . "/assets/images/visa.png"; ?>"></li>
                                <li><img alt="" src="<?php echo $configs->root_path . "/assets/images/mastercard.png"; ?>"></li>
                            </ul>
					                  <form class="form-popup" id="checkout" onsubmit="return submit_form()">
															
				 											<input type='hidden' name='token' value='<?php echo $_SESSION["token"]; ?>'>
												      <input type="hidden" name="package" value="<?php echo (isset($_SESSION["package"])) ? $_SESSION["package"] : 5; ?>" id="package">
															<input type="hidden" name="fields_prospect_id" value="<?php echo $_GET["prospectId"]; ?>">
															<input type="hidden" name="fields_cc_type" value="">
															<input type="hidden" name="device" value="desktop">

                                <!-- <label for="payment_as_shipping" class="payment_as_shipping_label">
                                    <input type="checkbox" name="" id="billing_is_shipping" checked
                                           class="chkbox bill-inp">
                                    <span>Billing same as Shipping</span>
                                </label> -->

                                <div class="billing-info" style="display:none;">
                                    <div class="billing-form">
                                        <span class="billing-title">Billing Info</span>
                                        <div class="form-holder">
                                            <span>First Name: </span>
                                            <input type="text" name="billingFirstName" id="firstName"
                                                   placeholder="First Name" class="form-control required">
                                        </div>
                                        <div class="form-holder" placeholder="Last Name*">
                                            <span>Last Name: </span>
                                            <input type="text" name="billingLastName" id="lastName"
                                                   placeholder="Last Name" class="form-control required">
                                        </div>
                                        <div class="phone-12 columns">
                                            <label>Country:</label>
                                        </div>
                                        <div class="form-holder">
                                            <select name="country" placeholder="Country" class="form-control">
                                                <option value="US">US</option>
                                            </select>
                                        </div>
                                        <div class="phone-12 columns">
                                            <label>State/Region:</label>
                                        </div>
                                        <select name="state" id="billingState" class="form-control required"/>
                                        <option value="" onClick="" selected>Select Billing State</option>
                                        <option value="AL">Alabama (AL)</option>
                                        <option value="AK">Alaska (AK)</option>
                                        <option value="AS">American Samoa (AS)</option>
                                        <option value="AZ">Arizona (AZ)</option>
                                        <option value="AR">Arkansas (AR)</option>
                                        <option value="AE">Armed Forces (AE)</option>
                                        <option value="AA">Armed Forces Americas (AA)</option>
                                        <option value="AP">Armed Forces Pacific (AP)</option>
                                        <option value="CA">California (CA)</option>
                                        <option value="CO">Colorado (CO)</option>
                                        <option value="CT">Connecticut (CT)</option>
                                        <option value="DE">Delaware (DE)</option>
                                        <option value="DC">District of Columbia (DC)</option>
                                        <option value="FM">Federated States of Micronesia (FM)</option>
                                        <option value="FL">Florida (FL)</option>
                                        <option value="GA">Georgia (GA)</option>
                                        <option value="GU">Guam (GU)</option>
                                        <option value="HI">Hawaii (HI)</option>
                                        <option value="ID">Idaho (ID)</option>
                                        <option value="IL">Illinois (IL)</option>
                                        <option value="IN">Indiana (IN)</option>
                                        <option value="IA">Iowa (IA)</option>
                                        <option value="KS">Kansas (KS)</option>
                                        <option value="KY">Kentucky (KY)</option>
                                        <option value="LA">Louisiana (LA)</option>
                                        <option value="ME">Maine (ME)</option>
                                        <option value="MD">Maryland (MD)</option>
                                        <option value="MA">Massachusetts (MA)</option>
                                        <option value="MI">Michigan (MI)</option>
                                        <option value="MN">Minnesota (MN)</option>
                                        <option value="MS">Mississippi (MS)</option>
                                        <option value="MO">Missouri (MO)</option>
                                        <option value="MT">Montana (MT)</option>
                                        <option value="NE">Nebraska (NE)</option>
                                        <option value="NV">Nevada (NV)</option>
                                        <option value="NH">New Hampshire (NH)</option>
                                        <option value="NJ">New Jersey (NJ)</option>
                                        <option value="NM">New Mexico (NM)</option>
                                        <option value="NY">New York (NY)</option>
                                        <option value="NC">North Carolina (NC)</option>
                                        <option value="ND">North Dakota (ND)</option>
                                        <option value="MP">Northern Mariana Islands (MP)</option>
                                        <option value="OH">Ohio (OH)</option>
                                        <option value="OK">Oklahoma (OK)</option>
                                        <option value="OR">Oregon (OR)</option>
                                        <option value="PA">Pennsylvania (PA)</option>
                                        <option value="PR">Puerto Rico (PR)</option>
                                        <option value="MH">Republic of Marshall Islands (MH)</option>
                                        <option value="RI">Rhode Island (RI)</option>
                                        <option value="SC">South Carolina (SC)</option>
                                        <option value="SD">South Dakota (SD)</option>
                                        <option value="TN">Tennessee (TN)</option>
                                        <option value="TX">Texas (TX)</option>
                                        <option value="UT">Utah (UT)</option>
                                        <option value="VT">Vermont (VT)</option>
                                        <option value="VI">Virgin Islands of the U.S. (VI)</option>
                                        <option value="VA">Virginia (VA)</option>
                                        <option value="WA">Washington (WA)</option>
                                        <option value="WV">West Virginia (WV)</option>
                                        <option value="WI">Wisconsin (WI)</option>
                                        <option value="WY">Wyoming (WY)</option>
                                        </select>
                                        <div class="phone-12 columns">
                                            <label>Address:</label>
                                        </div>
                                        <div id="billingAddress" class="form-holder"
                                             placeholder="Enter your street address (ex: 123 street)">
                                            <input type="text" name="billingAddress1" id="billingAddress1"
                                                   placeholder="Address" class="form-control required">
                                        </div>
                                        <div class="phone-12 columns">
                                            <label>City:</label>
                                        </div>
                                        <div class="form-holder" placeholder="City*">
                                            <input type="text" name="billingCity" id="billingCity" placeholder="City"
                                                   class="form-control required">
                                        </div>
                                        <div class="phone-12 columns">
                                            <label>Zip Code:</label>
                                        </div>
                                        <div id="billingZipCode" class="form-holder">
                                            <input type="text" name="billingZip" id="billingZip" placeholder="Zip Code"
                                                   class="form-control required" minlength="5" maxlength="5"
                                                   onKeyUp="javascript: this.value = this.value.replace(/[^0-9]/g, '');">
                                        </div>
                                        <span class="billing-title">Payment Info</span>
                                    </div>
                                </div>

                                <div class=" margin-bottom-5">
                                    <div class="phone-12 columns">
                                        <label>Card Number:</label>
                                    </div>
                                </div>

                                <div class="phone-12 columns form-holder">
                                    <input type="tel" name="fields_cc_number" id="cardNumber" data-threeds="pan"
                                           class="form-control required masked" placeholder="Card Number" maxlength="20"
                                           autocomplete="off"/>
                                    <div class="accept-icon"></div>
                                </div>

                                <div class="row margin-bottom-5">
                                    <div class="phone-12 columns">
                                        <label>Card Expiry Date:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="phone-6 columns form-holder">
                                        <select name="fields_expmonth" data-threeds="month" id="fields_expmonth"
                                                class="required form-control" autocomplete="off"
                                                data-error-message="Please select a valid expiry month!">
                                            <option value="">Month</option>
                                            <option value="01">01 - January</option>
                                            <option value="02">02 - February</option>
                                            <option value="03">03 - March</option>
                                            <option value="04">04 - April</option>
                                            <option value="05">05 - May</option>
                                            <option value="06">06 - June</option>
                                            <option value="07">07 - July</option>
                                            <option value="08">08 - August</option>
                                            <option value="09">09 - September</option>
                                            <option value="10">10 - October</option>
                                            <option value="11">11 - November</option>
                                            <option value="12">12 - December</option>
                                        </select>
                                    </div>

                                    <div class="phone-6 columns form-holder">
                                        <select name="fields_expyear" data-threeds="year" id="fields_expyear"
                                                class="required form-control" autocomplete="off"
                                                data-error-message="Please select a valid expiry year!">
                                            <option value="">Year</option>
                                            <option value="22">2022</option>
                                            <option value="23">2023</option>
                                            <option value="24">2024</option>
                                            <option value="25">2025</option>
                                            <option value="26">2026</option>
                                            <option value="27">2027</option>
                                            <option value="28">2028</option>
                                            <option value="29">2029</option>
                                            <option value="30">2030</option>
                                            <option value="31">2031</option>
                                            <option value="32">2032</option>
                                            <option value="33">2033</option>
                                            <option value="34">2034</option>
                                            <option value="35">2035</option>
                                            <option value="36">2036</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row margin-bottom-5">
                                    <div class="phone-12 columns">
                                        <label>CVV:</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="phone-6 columns form-holder">
                                        <input type="tel" name="fields_cvv" id="cc_cvv"
                                               class="form-control fcheckout-field required" data-validate="cvv"
                                               maxlength="4" placeholder="CVV" autocomplete="off"
                                               data-error-message="Please enter a valid CVV code!"
                                               onKeyUp="javascript: this.value = this.value.replace(/[^0-9]/g, '');"/>
                                    </div>
                                    <div class="phone-6 columns">
                                       <span class="cvv-link ">
                                           <a class="ccvwhatsthis form-link cvvbox" href="javascript:void(0)"
                                              style="margin: 9px 0px 0px 2px;"> Where can I find my Security Code?</a>
                                       </span>
                                    </div>
                                </div>

                                <div class="cvv-image clear" style="display: none;">
                                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/cvv-image.png"; ?>">
                                </div>
                                <div class="clear"></div>
                                <div class="form__footer">
                                    <div class="secure-icon"><span>Secure 256-bit SSL Encryption</span></div>
                                    <button class="send-btn loading-btn" type="submit"><span>RUSH MY ORDER!</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="footer_pj">Our Promises and Assurances to You</p>
                <ul class="footer-part row">
                    <li>
                        <div class="footer-part__img">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/secured-by.png"; ?>">
                        </div>
                        <p>Highest Security Levels for Online Transactions 256 bit Encryption.</p>
                    </li>
                    <li>
                        <div class="footer-part__img">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/symantec.png"; ?>">
                        </div>
                        <p>Your Privacy Protected Rest Assured.</p>
                    </li>
                    <li>
                        <div class="footer-part__img">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/satisfaction-seal.png"; ?>">
                        </div>
                        <p>100% Consumer Satisfaction Guaranteed.</p>
                    </li>
                    <li>
                        <div class="footer-part__img">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/customer-service-seal.png"; ?>">
                        </div>
                        <p>Award Winning Customer Service.</p>
                    </li>
                </ul>

                <p>We are committed to maintaining the highest quality products and the utmost integrity in business
                    practices. All products sold on this website are certified by Good Manufacturing Practices (GMP),
                    which is the highest standard of testing in the supplement industry.</p>
                <p>Notice: The products and information found on this site are not intended to replace professional
                    medical advice or treatment. These statements have not been evaluated by the Food and Drug
                    Administration. These products are not intended to diagnose, treat, cure or prevent any disease.
                    Individual results may vary.</p>
                <p>&copy;
                    <script> var date = new Date();
                        document.write(date.getFullYear())</script> <?php echo $corporate_name; ?>. All Rights Reserved.
                </p>

                <ul class="terms-links">
                    <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/privacy.php','modal');">Privacy Policy
                            |</a></li>
                    <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/terms.php','modal');">Terms and
                            Conditions |</a></li>
				            <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/wireless.php','modal');">Wireless Policy</a></li>
														
                </ul>
            </div>
        </footer>
    </div>
</div>

<section class="custom-social-proof">
    <div class="custom-notification">
        <div class="custom-notification-container">
            <div class="custom-notification-image-wrapper">
                <img src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>">
            </div>
            <div class="custom-notification-content-wrapper">
                <p class="custom-notification-content">
                    <span id="notify-customer">Eli H</span>. - <span id="notify-state">TX</span><br> Purchased
                    <strong><span id="notify-quantity">7</span></strong> Bottle(s) of <?php echo $configs->step1_name; ?> <small><span
                                id="notify-ago">9 minutes ago</span></small>
                </p>
            </div>
        </div>
        <div class="custom-close"></div>
    </div>
</section>

<div class="popup-loading-wrapper" style="display:none;">
    <div class="popup">
        <figure class="product-image"></figure>
        <p>Reserving Your Bottle Of</p>
        <h2><?php echo $configs->step1_name; ?></h2>
        <img src="<?php echo $configs->root_path . "/assets/images/icon-loading.png"; ?>" alt="" class="loading-image">
    </div>
</div>

<div class="loading-screen" style="display:none;">
    <div class="loading-pop">
        <div class="pop-content">
            <!-- <img src="<?php echo $configs->root_path . "/assets/images/loading.gif"; ?>" class="loading-img"> -->
            <ul class="pop-list">
                <li class="show-1"><img src="<?php echo $configs->root_path . "/assets/images/pop-tik.png"; ?>"> Checking Inventory</li>
                <li class="show-2"><img src="<?php echo $configs->root_path . "/assets/images/pop-tik.png"; ?>"> Processing Transaction</li>
                <li class="show-3"><img src="<?php echo $configs->root_path . "/assets/images/pop-tik.png"; ?>"> Sending to Fulfillment</li>
                <li class="show-4"><img src="<?php echo $configs->root_path . "/assets/images/pop-tik.png"; ?>"> Order Confirmed</li>
            </ul>
            <div id="grp-progress">
                <div id="progress-bar">
                    <div id="text_bar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--partial pixels-->
<iframe src="https://hopviews.com/p.ashx?&e=3130&f=pb&r=<?php echo $_SESSION["c3"]; ?>&t=<?php echo $_SESSION["prospectId"]; ?>" height="1" width="1" frameborder="0"></iframe>

<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery-3.5.1.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/social-proof.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/scripts.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery.mask.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery.cardtype.js"; ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
		.error-card{border:1px solid red !important}
        .send-btn:disabled,.btn_pulse:disabled{background-color: #95a5a6;background-image: unset !important;}
        .send-btn:disabled:hover,.btn_pulse:disabled:hover{background-color: #7f8c8d !important;background-image: unset !important; cursor: not-allowed;}
    </style>
    <script>
        $('#cardNumber').keyup(function() {			
            var result = $(this).validateCreditCard();
            $('.send-btn').attr('disabled', false);
			$('.btn_pulse').attr('disabled', false);
            $(this).removeClass('error-card');
            var cardNumber = $(this).val();

            if(cardNumber.length<18){
                $('.send-btn').attr('disabled', true);
                $('.btn_pulse').attr('disabled', true);
                $(this).addClass('error-card');
            }
            if(result){
                var card = result.card_type.name;
                card = card.replace("mastercard", "master");
                $("input[name=fields_cc_type]").val(card);
            }
            if(card && (card == 'amex' || card == 'discover') && cardNumber.length>=18){
                $('.send-btn').attr('disabled', true);
				$('.btn_pulse').attr('disabled', true);
                $(this).addClass('error-card');
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: "This card is not supported",
                    text: "Sorry, but we don't currently support Amex or Discover cards.",
                    footer: 'Please try a different card',
                    showConfirmButton: true,
                    timer: 2500
                });
            }
        });
    </script>
			
		<script>
			// Iterate product selection
			var selectButtons = $('.package-info__btn');
			$(".product-selection > .product").click(function() {
				// Update package selected
				$('.active').removeClass("active");
				$(this).addClass("active");
				
				// Update hidden field				
				$("input[name=package]").val($(this).data('pkg'));
				//$("#x_amount").val($(this).data('price'));
				
				// Update button text
				var parentElement = this;
				selectButtons.each(function(i) {
					if ($.contains(parentElement, this)) {
						$(this).text("Selected!");
					} else {
						$(this).text("Select Package");
					}
				});
			});
		</script>
			
			
		<script>
			function submit_form() {
				
				$("#proc_popup").show();
				
				var errors = new Array();
								
				if (! $('#payment_as_shipping').prop('checked')) {
					// Validate billing fields
				}
				
				// Check CC #
				if ($("#cardNumber").val() === "") {
					errors.push("Please enter a credit card number.");
				} else {
					/*
					var valid = LuhnAlgorithm($('#cardNumber').unmask().val());
					
					if (!valid) {
						errors.push("Invalid credit card number.");
					}
					*/
				}
				
				if ($("#cardMonth").val() === "" || $("#cardMonth").val() === "Month") {
					errors.push("Please enter a valid expiration month.");
				}
				
				if ($("#cardYear").val() === "" || $("#cardYear").val() === "Year") {
					errors.push("Please enter a valid expiration year.");
				}
				
				if ($("#cardSecurityCode").val() === "") {
					errors.push("Please enter a CVV code.");
				}
								
        if (errors.length == 0) {
					
          $('.loading-screen .show-1, .loading-screen .show-2, .loading-screen .show-3, .loading-screen .show-4').removeClass("active");
          $('.loading-screen').show();
					
					setTimeout(function () {
          	$('.loading-screen .show-1').addClass("active");
          }, 500);
					
					setTimeout(function () {
          	$('.loading-screen .show-2').addClass("active");
          }, 2000);
					
					setTimeout(function () {
          	$('.loading-screen .show-3').addClass("active");
          }, 3000);
															
					var data = $("#checkout :input[value!=''][value!='.']").serialize();
								
					$.ajax({
					  type: "POST",
					  url: "./app/src/create_order.php",
					  data: data,
					  success: function(result) {
							
							var response = result.split("|");
							console.log(response);
							if (response[0] == "ok") {
								window.location.href = "./upsell.php" + response[1];
							} else {
								$(".loading-screen").hide();
								popErrorModal(response[1]);
							}
					  },
						error: function() {
							$(".loading-screen").hide();
						}
					});
					
					$('#cardNumber').mask("0000 0000 0000 0000");
					
          return false;
					
        } else {
					
					$('#cardNumber').mask("0000 0000 0000 0000");
			
          var li = '';
          $.each(errors, function (key, value) {
              li += '<li>' + value + '</li>';
          });

          var html = '';
          html += '<div id="error_handler_overlay">';
          html += '<div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a><ul>' + li + '</ul></div>';
          html += '</div>';

          $('body').append(html);
					$("#proc_popup").hide();
					
          $('#error_handler_overlay').fadeIn(500);
          return false;
        }
				
				return false;
			}
			
			function popErrorModal(errors) {

        var li = '';
				
				if (errors == "Order is already completed") {
					li = '<li>' + errors + '</li>';
				} else if (typeof errors === 'string') {
					li = '<li>' + errors + '</li>';
				} else {
	        $.each(errors, function (key, value) {
	        	li += '<li>' + value + '</li>';
	        });
				}
				
        var html = '';
        html += '<div id="error_handler_overlay">';
        html += '<div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a><ul>' + li + '</ul></div>';
        html += '</div>';

        $('body').append(html);
				$("#proc_popup").hide();

        $('#error_handler_overlay').fadeIn(500);
        return false;
			}
			
			
			function LuhnAlgorithm(num){
				/*
			    var inputNum = num.toString();
			    var sum = 0;
			    var doubleUp = false;

			    for (var i = inputNum.length - 1; i >= 0; i--)
			    {
			        var curDigit = parseInt(inputNum.charAt(i));

			        if(doubleUp)
			        {
								if((curDigit*2) > 9)
			            {
			              sum +=( curDigit*2)-9;
			            }
			            else
			            {
			              sum += curDigit*2;
			            }
			        }
			        else
			        {
			          sum += curDigit;
			        }
			        var doubleUp =!doubleUp
			    }

					return (sum % 10) == 0  ? true : false;
				*/
				return true;
			};
		</script>
			
			
		<script>
			jQuery(function($) {
			    $(".cvv-link").click(function() {
						$('.cvv-image').show();
			    });
			});
			
			$(window).on('load', function() {
			    var $preloader = $('#preloader');
			    var $preloader2 = $('#popup-loading-wrapper2');
			    $preloader.delay(500).fadeOut('slow');
			    $preloader2.delay(500).fadeOut('slow');
			});
			
	    $(function () {
	        $(window).keydown(function (e) {
	            if (e.which === 27 && $('#error_handler_overlay').length) {
	                $('#error_handler_overlay').remove();
	            }
	        });

	        $(document).off('click', '#error_handler_overlay');
	        $(document).on('click', '#error_handler_overlay', function () {
	            $(this).remove();
	        });

	        $(document).off('click', '#error_handler_overlay_close');
	        $(document).on('click', '#error_handler_overlay_close', function () {
	            $('#error_handler_overlay').remove();
	        });

	        $(document).on('click', '#app_common_modal_close', function () {
	            //     alert('close');
	            $('#app_common_modal').remove();
	        });
	    });
			
			$(document).ready(function() {
				$("#cardNumber").mask("0000 0000 0000 0000");
			});
		</script>
			
		<script>
			$('#payment_as_shipping').click(function() {
				if (this.checked) {
					$('.billing-info').hide();
					$('#billShipSame').val("on");
				} else {
					$('.billing-info').show();
					$('#billShipSame').val("off");
				}
			});
		</script>
			
		<script>
		    function onlyNumbers(e, type) {
		        var keynum;
		        var keychar;
		        var numcheck;
		        if (window.event) // IE
		        {
		            keynum = e.keyCode;
		        } else if (e.which) // Netscape/Firefox/Opera
		        {
		            keynum = e.which;
		        }
		        keychar = String.fromCharCode(keynum);
		        numcheck = /\d/;

		        switch (keynum) {
		            case 8:    //backspace
		            case 9:    //tab
		            case 35:   //end
		            case 36:   //home
		            case 37:   //left arrow
		            case 38:   //right arrow
		            case 39:   //insert
		            case 45:   //delete
		            case 46:   //0
		            case 48:   //1
		            case 49:   //2
		            case 50:   //3
		            case 51:   //4
		            case 52:   //5
		            case 54:   //6
		            case 55:   //7
		            case 56:   //8
		            case 57:   //9
		            case 96:   //0
		            case 97:   //1
		            case 98:   //2
		            case 99:   //3
		            case 100:  //4
		            case 101:  //5
		            case 102:  //6
		            case 103:  //7
		            case 104:  //8
		            case 105:  //9
		                result2 = true;
		                break;
		            case 109: // dash -
		                if (type == 'phone') {
		                    result2 = true;
		                } else {
		                    result2 = false;
		                }
		                break;
		            default:
		                result2 = numcheck.test(keychar);
		                break;
		        }

		        return result2;
		    }

		    function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
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
		            html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
		            html += '</div>';

		            if (!$('#app_common_modal').length) {

		                $('body').append(html);
		            }
		            $('#app_common_modal').fadeIn();
		        }

		    }
		</script>
				
		<script type="text/javascript">
		function GetCardType(number)
		{
		    // visa
		    var re = new RegExp("^4");
		    if (number.match(re) != null)
		        return "visa";

		    // Mastercard 
		    // Updated for Mastercard 2017 BINs expansion
		     if (/^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/.test(number)) 
		        return "master";

		    // AMEX
		    re = new RegExp("^3[47]");
		    if (number.match(re) != null)
		        return "amex";

		    // Discover
		    re = new RegExp("^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)");
		    if (number.match(re) != null)
		        return "discover";

		    // Diners
		    re = new RegExp("^36");
		    if (number.match(re) != null)
		        return "diners";

		    // Diners - Carte Blanche
		    re = new RegExp("^30[0-5]");
		    if (number.match(re) != null)
		        return "diners";

		    // JCB
		    re = new RegExp("^35(2[89]|[3-8][0-9])");
		    if (number.match(re) != null)
		        return "jcb";

		    // Visa Electron
		    re = new RegExp("^(4026|417500|4508|4844|491(3|7))");
		    if (number.match(re) != null)
		        return "none";

		    return "";
		}
		</script>

	<script src="https://cdn.3dsintegrator.com/threeds.2.min.latest.js"></script>
	<script>
  var tds = new ThreeDS(
	  "checkout",
	  "466fc6ab1f21ddc5080cfbb1e8aac3e0",
    null,
    {
      endpoint:"https://api.3dsintegrator.com/v2",
      autoSubmit:false,
      verbose:true
  });
	
  var tds_rebill = new ThreeDS(
	  "checkout",
	  "466fc6ab1f21ddc5080cfbb1e8aac3e0",
    null,
    {
      endpoint:"https://api.3dsintegrator.com/v2",
      autoSubmit:false,
      verbose:true
  });
	
	function get_3ds_tokens() {
		console.log("3ds verify!");
		
		tds.verify(function(response) {
			console.log("Accepted");
			console.log(response);
		}, function(reject) {
			console.log("Rejected");
			console.log(reject);
		}, {amount: 20});
	
		tds_rebill.verify(function(response) {
			console.log("Accepted");
			console.log(response);
		}, function(reject) {
			console.log("Rejected");
			console.log(reject);
		}, {amount: 20});
	}
	
	</script>
	<!--
	<script>
	  var tds = new ThreeDS(
	    "checkout",
	    "466fc6ab1f21ddc5080cfbb1e8aac3e0",
	    null,
	    {
	      endpoint: "https://api.3dsintegrator.com/v2",
	      verbose: true,
				/*
				resolve(data) {
					console.log(this);
					console.log(data);
					$('input[name=authenticationValue]').val(data.authenticationValue);
					$('input[name=dsTransactionId]').val(data.dsTransId);
					$('input[name=eci]').val(data.eci);
					$('input[name=protocolVersion]').val(data.protocolVersion);
					$('input[name=status]').val(data.status);
	      },
				*/
				addResultToForm: true,
				rebill: 199.99,
				rebillSubmitDelay: 0
	    });
	</script>
	-->
</body>
</html>