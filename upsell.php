<?php 

	include("_global.php");
	
	$decline_link = $configs->path . "confirmation.php?customerId=".$_GET["customerId"]."&orderId=".$_GET["orderId"]."&declined=1";
	
	if (isset($_SESSION["added_upsell"]) && $_SESSION["added_upsell"] == true) {
		header("Location: ".$configs->path."confirmation.php");
	}
	
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title><?php echo $configs->step2_name; ?></title>
    <meta name="description" content="<?php echo $configs->step2_name; ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta http-equiv="content-language" content="en-us"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="viewport" content="width=device-width,user-scalable=no"/>
    <link href="<?php echo $configs->root_path . "/assets/css/app.css"; ?>" rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/brand/favicon.png"; ?>" rel="stylesheet">
		
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Khula:300,400,600,700,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $configs->root_path . "/assets/css/upsells/bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?php echo $configs->root_path . "/assets/css/upsells/custom.css?v=1.2"; ?>">
    <link rel="stylesheet" href="<?php echo $configs->root_path . "/assets/css/upsells/responsive.css?v=1.2"; ?>">

    <style>
        .checkout_btn {
            min-height: 48px;
        }
    </style>
    <style>
        .loading-screen {
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100%;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            align-items: center;
        }

        .loading-pop {
            float: left;
            width: 100%;
            padding: 25px 0;
            text-align: center;
        }

        .pop-content {
            display: inline-block;
            vertical-align: middle;
            width: 90%;
            max-width: 500px;
            background: #fff;
            border-radius: 10px;
            padding: 10px;
        }

        .loading-img {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
        }

        ul.pop-list {
            display: inline-block;
            vertical-align: middle;
            width: 240px;
            margin: 10px 0;
        }

        ul.pop-list li {
            float: left;
            width: 100%;
            color: #134f7a;
            font-size: 19px;
            line-height: 24px;
            letter-spacing: 0.5px;
            text-align: left;
            margin: 3px 0;
            padding-left: 30px;
            opacity: 0.5;
            position: relative;
            transition: all ease 0.6s;

        }

        ul.pop-list li img {
            position: absolute;
            left: 0;
            top: 6px;
            width: 20px;
            opacity: 0;
            transform: translateX(-10px);
        }

        ul.pop-list li.active {
            opacity: 1;

            transition: all ease 0.5s;
        }

        ul.pop-list li.active img {
            opacity: 1;
            transition: all ease 0.2s;
            transform: translateX(0);
        }

        .product_wrap {
            cursor: pointer;
        }

        @media only screen and (max-width: 768px) {
        /* For mobile phones: */
            .badge {
                position: absolute;
                left: 10px;
                top: -30px;
            }
        }
    </style>
    <script>
        history.pushState(null, null, window.location.href);
        history.back();
        history.forward();
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
    <script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery-3.5.1.min.js"; ?>"></script>
		
</head>
<body>
    <!-- header -->
    <div class="header_upsell">
        <div class="container text-center">
            <div class="offer_tag"><img src="<?php echo $configs->root_path . "/assets/images/upsells/tag.png"; ?>"
                    alt=""></div>
            <!-- <span><img src="<?php echo $configs->root_path . "/assets/images/upsells/bar.png"; ?>" alt=""></span> -->
        </div>
    </div>
    <div class="body_content text-center upsell2">
        <div class="container">
            <h5>This Offer Expires When Sold Out!</h5>
            <h1>Wait, your order is not complete...</h1>
            <p>Others who have purchased <?php echo $configs->step1_name; ?> have also had incredible results with this
                <span class="productName"><?php echo $configs->step2_name; ?>!</span> Would you like to add this to your
                order?</p>
            <div class="product_wrap clearfix">
                <div id="stage1">
                    <div class="product_left">
                        <span class="badge"><img
                                src="<?php echo $configs->root_path . "/assets/images/upsells/badge.png"; ?>"
                                alt=""></span>
                        <div class="product_pic">
                            <img src="<?php echo $configs->root_path . "/assets/brand/detox-2.png?v=1.1"; ?>" class="img-fluid" style="width: 100%" alt="Detox">
                        </div>
                    </div>
                    <div class="product_content">
                        <h2>OUR #1 BEST SELLING DETOX SUPPLEMENT</h2>
                        <div class="price_tagD">
                            <span class="pic1"><img
                                    src="<?php echo $configs->root_path . "/assets/images/upsells/pic1.png"; ?>"
                                    alt=""></span>
                            <div class="pricepic">
                                REG
                                <span>$129.95</span>
                            </div>
                        </div>
                        <div class="big_text">
                            INTERNAL CLEANSING
                            <span>FORMULA!</span>
                        </div>
                        <div class="sub_text">JUMPSTART YOUR KETO DIET</div>
                        <p>Clear your body of any toxins before and while you’re on a keto diet.
                    Ginger root is a key ingredient for any detox since it stimulates digestion
                    and circulation. Ginger root also helps to cleanse the build-up of waste
                    and toxins in the colon, liver, and other organs. </p>
                <div class="price_area">
                            Claim your Bottle Today<br><span>ONLY $<?= $configs->upsell_price_per; ?>/bottle</span>
                        </div>
                    </div>
                </div>
               <!--  <div id="stage2" style="display: none;">
                    <div class="product_left">
                        <span class="badge"><img
                                src="<?php echo $configs->root_path . "/assets/images/upsells/guaranteed-badge.png"; ?>"
                                style="width:120px;" alt=""></span>
                        <div class="product_pic"><img
                                src="<?php echo $configs->root_path . "/assets/brand/Fitnesstracker.png"; ?>" alt="">
                        </div>
                    </div>
                    <div class="product_content">
                        <h2>OUR #1 BEST SELLING GADGET</h2>
                        <div class="price_tagD">
                            <span class="pic1"><img
                                    src="<?php echo $configs->root_path . "/assets/images/upsells/watch-circle.png"; ?>"
                                    alt=""></span>
                            <div class="pricepic">
                                REG
                                <span>$<?= $configs->product_3['reg_price']; ?></span>
                            </div>
                        </div>
                        <div class="big_text">
                            <?= $configs->product_3['name']; ?>
                        </div>
                        <div class="sub_text"><?= $configs->product_3['quote']; ?></div>
                        <p><?= $configs->product_3['description']; ?></p>
                        <div class="price_area">
                            Claim your <?= $configs->product_3['type']; ?> Today<br>
                            <span>ONLY $<?= $configs->product_3['discount_price']; ?></span>
                        </div>
                    </div>
                </div>
 -->
            </div>
            <div class="left_area">
                <div class="only_text" id="product_left">ONLY 22 LEFT!</div>
                <center>
                    <button type="submit" class="checkout_btn" onClick="processUpsell('add');">Complete
                        Checkout!</button>
                </center>
                <br>
                <br>
                <div class="dont_text">
                    <i><img src="<?php echo $configs->root_path . "/assets/images/upsells/close.png"; ?>" alt=""></i>
                    <span><a href="#" style="text-decoration: none;color:#8e8e8e;" class="skipProduct"
                            data-name="detox">NO, I DON’T WANT TO TURBO CHARGE MY RESULTS</a></span>
                </div>
                <div class="pic2"><img src="<?php echo $configs->root_path . "/assets/images/upsells/pic2.png"; ?>"
                        alt=""></div>

        </div>
    </div>
</div>
<!-- end -->
<div class="comnt_area">
    <div class="container">
        <div class="connection_text">
            <span><img src="<?php echo $configs->root_path . "/assets/images/upsells/text_pic.png"; ?>" alt=""></span>
            <span><img src="<?php echo $configs->root_path . "/assets/images/upsells/visa.png"; ?>" alt=""></span>
        </div>
        <div class="star_blog">
            <i><img src="<?php echo $configs->root_path . "/assets/images/upsells/star.png"; ?>" alt=""></i>
            <h4>Get it, you won't regret it!</h4>
            <span>by Jannett</span>
            <p>I love Keto products- I tried this stuff for my weight management - you know, to stay on top of my weight
                - it is amazing!
                highly recommend it.</p>
        </div>
        <div class="star_blog">
            <i><img src="<?php echo $configs->root_path . "/assets/images/upsells/star.png"; ?>" alt=""></i>
            <h4>It works.</h4>
            <span>by Amylynn</span>
            <p>Ordered it on a whim. I figured what the heck, I'll give it a try. Both of these products work amazingly.
                After a short time I began start seeing the effects. I recommend using it to keep that weight off and
                continue looking your best!</p>
        </div>
        <div class="star_blog">
            <i><img src="<?php echo $configs->root_path . "/assets/images/upsells/star.png"; ?>" alt=""></i>
            <h4>Ordered for my husband</h4>
            <span>by Karae</span>
            <p>I ordered it for my husband - he’s had a real tough time losing weight. He’s less than two months in and
                already dropped so much weight! He not only looks better, but feels better as well. It has really
                changed his life!</p>
        </div>
        <div class="star_blog">
            <i><img src="<?php echo $configs->root_path . "/assets/images/upsells/star.png"; ?>" alt=""></i>
            <h4>Amazing!</h4>
            <span>by K.J. Peasley</span>
            <p>I was skeptical, but honestly, this stuff is the real deal. IT DOES WHAT IT SAYS IT DOES! It's changed my
                life - I feel so much</p>better now!
        </div>
    </div>
</div>

<div class="footer text-center">
    <div class="container">
        <ul class="terms-links">
            <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/privacy.php','modal');">Privacy Policy&nbsp;&nbsp;&nbsp;&nbsp;
                    |</a></li>
            <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/terms.php','modal');">Terms and Conditions |</a>
            </li>
            <li><a href="javascript:void(0);" onClick="openNewWindow('disclosures/wireless.php','modal');">Wireless Policy</a></li>
						
        </ul>
        <span>&copy; <script> var date = new Date();
                document.write(date.getFullYear())</script> All Rights Reserved</span>
    </div>
</div>

<div class="loading-screen" style="display:none;">
    <div class="loading-pop">
        <div class="pop-content">
            <img src="<?php echo $configs->root_path . "/assets/images/loading.gif"; ?>" class="loading-img">
						Completing Transaction...
            <ul class="pop-list">
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
	
	<?php if (99 > rand(0, 100)): ?>
		<?php if (isset($_SESSION["scrub"]) && $_SESSION["scrub"] === false): ?>
			<?php if (isset($_GET["orderId"])): ?>
                
		<!-- Main Pixels-->
 <iframe src="https://hopviews.com/p.ashx?&e=3129&f=pb&r=<?php echo $_SESSION["c3"]; ?>&t=<?php echo $_GET["orderId"]; ?>" height="1" width="1" frameborder="0"></iframe>        

		<!-- Partial Pixels-->	
            

			<?php endif; ?>
		<?php endif;?>
	<?php endif;?>	

    <form method="post" action="" id="with_upsell_form">
        <input type='hidden' name='token' value='<?php echo $_SESSION["token"]; ?>'>
        <input type="hidden" name="device" value="desktop">
        <input type="hidden" name="add_upsell" id="add_upsell" value="false">
        <input type="hidden" name="package" value="<?php echo $_SESSION["package"]; ?>">
        <input type="hidden" name="customer_id" value="<?php echo $_GET["customerId"]; ?>">
        <input type="hidden" name="previous_order_id" value="<?php echo $_GET["orderId"]; ?>">
    </form>

    <script>
        let upsellStage = 0;
        let upsell_status = false;
        let customer_id = '';
        localStorage.setItem("upsell1", 0);
        // localStorage.setItem("upsell2", 0);

        function processUpsell(type) {
            upsellStage++;
            // $('#stage1').hide();
            // $('#stage2').show();
            // $('.productName').text("<?= $configs->product_3['type']; ?>");
            // $('#product_left').text('ONLY 16 LEFT!');
            // $("#add_upsell").val(false);
            // $('.skipProduct').attr('data-name', 'fitness-tracker');
            $('.loading-screen').show();

            if (type != 'skip') {
                // if (upsellStage == 1)
                 {
                    localStorage.setItem("upsell1", 1);
                    $("#add_upsell").val(1);
                // } else {
                //     localStorage.setItem("upsell2", 1);
                //     $("#add_upsell").attr('name', 'add_upsell2').val(true);
                // }
            }


            // if (type != 'skip') {
                const formData = $('#with_upsell_form').serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo $configs->path; ?>app/src/add_upsell.php",
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    upsell_status = data.upsell;
                    customer_id = data.customer_id;
                });
            }
            

            if (upsellStage == 1) {
                 setTimeout(function () {
                    window.location.href = "<?= $configs->path?>confirmation.php?customerId=" + customer_id + "&upsell=" + upsell_status;
                }, 2000);
            } else {
                $('.loading-screen').hide();
            }
        }


        $(".skipProduct").click(function (e) {
            e.preventDefault();
            let product = $(this).data('name');
            processUpsell('skip');
        });
    </script>
</body>
</html>