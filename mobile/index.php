<?php 

	include('../_global.php');
	
	$notes = "";
	$nextPage = 'qualify.php' . (!empty($_SERVER['QUERY_STRING']) ? ('?' . $_SERVER['QUERY_STRING']) : '');
	
	if (!isset($_SESSION['token'])) {
		$_SESSION['token'] = generate_csrf_token();
	}
	
	if (!$mobile_detect->isMobile()) {
		// Redirect to mobile site
		$url = $configs->root_path . "?".$_SERVER['QUERY_STRING'];
		header("Location: $url");
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $configs->step1_name;?></title>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="./assets/brand/favicon.png" rel="icon" type="image/png">

<link href="<?php echo $configs->root_path."/assets/css/app.css"; ?>" rel="stylesheet">
<link href="./assets/css/style.css" type="text/css" rel="stylesheet">
<link href="./assets/css/slick.css" type="text/css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;500;600;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper index-page">
    <header class="header">
        <div class="header__warning">
            <div class="container">
                <span class="alert-color">Warning:</span> Due to extremely high media demand, there is limited supply of
                <span class="product-name"><?php echo $configs->step1_name;?></span> in stock as of <span
                    class="date-container"></span><span class="hurry"> HURRY! <span
                    class="time" id="time">16:00</span></span>
            </div>
        </div>
        <div class="container row">
            <img alt="" class="header__logo" src="./assets/brand/logo-white-2.png">
        </div>
    </header>
    
    <section class="first-section">
        <div class="container">
            <div class="row">
                <div class="first-section__side first-section__info">
                   <div class="first-section__side_in">
                       <img alt="" src="./assets/images/logo-ju.png">
                       <h1>MELT FAT <span>FAST!</span></h1>
                       <h2>WITHOUT DIET OR EXERCISE</h2>
                       <h3>Powerful New Formula Triggers
                           Fat-Burning Ketosis!</h3>

                       <ul>
                           <li>Burn Fat for Energy not Carbs</li>
                           <li>Release Fat Stores</li>
                           <li>Increase Energy Naturally!</li>
                           <li>Love the Way You Feel!</li>
                       </ul>
                       <img alt="" class="d-mobile" src="./assets/images/arrow.png">
                       <img alt="" class="security-icons d-mobile" src="images/security-icons.png" >

                       <div class="first-section__bottle">
                           <img alt="" src="./assets/brand/product.png">

                           <ul class="garante-list row">
                               <li class="garante-item_1"></li>
                               <li class="garante-item_2"></li>
                               <li class="garante-item_3"></li>
                           </ul>
                       </div>
                   </div>
                </div>

            </div>
        </div>
    </section>

    <!--<div class="go-rush">
        <div class="container">
            <div class="go-rush__in">
                <h3>
                   <span> STEP 1</span> - TELL US WHERE TO SEND YOUR BOTTLE
                </h3>
                <a class="go-rush__btn btn__send loading-btn" href="javascript:void(0)"> Rush My Order Now >></a>
            </div>
        </div>
    </div>-->
    
    <section class="why-is">
        <div class="container">
            <div class="row">
                <div class="why-is__side">
                    <img alt="" src="./assets/images/keto-magazines.png" class="keto-magazines">
                    <img alt="" src="./assets/brand/product.png" class="wy-btl">
                </div>
                <div class="why-is__side">
                    <h2>WHY IS <?php echo $configs->step1_name;?> <br><span>SO POPULAR NOW?</span></h2>
                    <p>A recent study published by the Diabetes, Obesity, and Metabolism Journal found that <?php echo $configs->step1_name;?> supported burning fat for energy instead of carbohydrates greatly increasing weight loss and energy. Furthermore, TV doctor Oz, recently named <?php echo $configs->step1_name;?> the "Holy Grail" of weight loss for good reason - IT WORKS.</p>
                    <p>It is important to note that the <?php echo $configs->step1_name;?> with 100% BHB (Beta-Hydroxybutyrate) used in the study was the real deal and <?php echo $configs->step1_name;?> exceeds the studies product potency using proprietary methods.</p>
                    <p>Bottom Line: It Works and it's Better for your Health!</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="how-use">
        <div class="container">
            <h2 class="how-use__titleMain">
                <span>HOW TO USE <?php echo $configs->step1_name;?></span><br>
                TO GET RESULTS
            </h2>
            <div class="row slider-mobile">
                <div class="how-use__item">
                    <img alt="" src="./assets/images/step-1.png">
                    <span class="how-use__step">Step 1</span>
                    <span class="how-use__title">INSTANT FAT BURN</span>
                    <p><?php echo $configs->step1_name;?> works to release stored fat, by helping your body burn fat for energy instead of carbs. Advanced Ketones are behind this miracle product that helps you lose up to 5 lbs in the first week.</p>
                </div>
                <div class="how-use__item">
                    <img alt="" src="./assets/images/step-2.png">
                    <span class="how-use__step">Step 2</span>
                    <span class="how-use__title">ACCELERATED FAT BURN</span>
                    <p>During the first month of use, <?php echo $configs->step1_name;?> with BHB produces accelerated Fat Burn, which results in expected weight loss of up to 20 lbs. You will notice a drastic change in a very short period of time!</p>
                </div>
                <div class="how-use__item">
                    <img alt="" src="./assets/images/step-3.png">
                    <span class="how-use__step">Step 3</span>
                    <span class="how-use__title">TRANSFORM YOUR BODY</span>
                    <p>With your weight loss goals achieved, continue to take <?php echo $configs->step1_name;?> for 3-5 months as to stabilize your appetite, as well as to maintain and transform your new, slim body.</p>
                </div>
            </div>
            <div class="diagonal-line-container">
                <svg class="diagonal-line" preserveAspectRatio="none" version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#f3f3f3" points="200,500 0,500 300,0 500,0">
                    </polygon>
                </svg>
            </div>
        </div>
    </section>
    
    <section class="science green-gradient">
        <div class="container">
            <div class="flip diagonal-line-container">
                <svg class="diagonal-line" preserveAspectRatio="none" version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#f3f3f3" points="200,500 0,500 300,0 500,0">
                    </polygon>
                </svg>
            </div>
            <div class="row">
                <div class="science__left">
                    <h2 class="science__title">THE SCIENCE OF</h2>
                    <h2 class="science__subTitle"> KETOSIS<span>(<?php echo $configs->step1_name;?>)</span></h2>
                    <p>Ketosis is the state where your body is actually burning fat for energy instead of carbs. Ketosis is extremely hard to obtain on your own and takes weeks to accomplish. <?php echo $configs->step1_name;?> actually helps your body achieve ketosis fast and helps you burn fat for energy instead of carbs!</p>
                    <ul>
                        <li><span>No More Stored Fat:</span> Currently with the massive load of cabohydrates in our foods, our bodies are conditioned to burn carbs for energy instead of fat. Because it is an easier energy source for the body to use up.</li>
                        <li><span>Fat - The New Energy:</span> Ketosis is the state where your body is actually burning fat for energy instead of carbs. Ketosis is extremely hard to obtain on your own and takes weeks to accomplish. <?php echo $configs->step1_name;?> actually helps your body achieve ketosis fast and helps you burn fat for energy instead of carbs!</li>
                        <li><span>More Health Benefits:</span> <?php echo $configs->step1_name;?> BHB works almost instantly to help support ketosis in the body by Burning FAT for energy. Fat IS the body's ideal source of energy and when you are in ketosis you experience energy and mental clarity like never before and of course very rapid weight loss.</li>
                    </ul>


                </div>
                <div class="science__right">
                    
                    <div class="science__img">
                        <img alt="" src="./assets/images/keto-science.png">
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section class="review">
        <div class="container">
            <div class="diagonal-line-container">
                <svg class="diagonal-line" preserveAspectRatio="none" version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#f3f3f3" points="200,500 0,500 300,0 500,0">
                    </polygon>
                </svg>
            </div>
            <h2><span>REAL</span> SUCCESS STORIES</h2>

            <div class="single-item">
                <div class="slide__item row">
                    <div class="slide__item_left">
                        <img alt="" src="./assets/images/testimonial-1.png">
                    </div>
                    <div class="slide__item_right">
                      <div class="table-cell">
                          <p>"After watching video after video of keto success stories, I felt hopeful that I could actually start losing weight without anything too extreme. When I found <?php echo $configs->step1_name;?> online and thought I'd give it a shot. I started losing weight, I though maybe it was a fluke at first. After my first 10 pounds, I cried. If you need something to work like me, you won't be let down"</p>
                          <span>- Ashley R</span>
                      </div>
                    </div>

                </div>
                <div class="slide__item row">
                    <div class="slide__item_left">
                        <img alt="" src="./assets/images/testimonial-2.png">
                    </div>
                    <div class="slide__item_right">
                        <div class="table-cell">
                            <p>"I've been hearing about <?php echo $configs->step1_name;?> for a while now. My sister took
                                it and had some amazing success. I thought, if I could just lose
                                a few pounds I would feel better about myself. I was shocked to
                                say the least when I lost 20lbs in 30 days. Now I tell everyone
                                :)"</p>
                            <span>- Isabella N</span>
                        </div>
                    </div>

                </div>
                <div class="slide__item row">
                    <div class="slide__item_left">
                        <img alt="" src="./assets/images/testimonial-3.png">
                    </div>
                    <div class="slide__item_right">
                        <div class="table-cell">
                            <p>"<?php echo $configs->step1_name;?> is by far the best product I've used for ketosis. It
                                works and it works well. I am the leanest I have ever been in my
                                life. I had my body fat tested before and after and I went from
                                a whopping 26% body fat down to 16% in 4 months. I owe a big
                                thanks to <?php echo $configs->step1_name;?> for this amazing
                                experience."</p>
                            <span>- Darin K</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <section class="last-block">
        <div class="container">
            <div class="diagonal-line-container flip">
                <svg class="diagonal-line" preserveAspectRatio="none" version="1.1" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="#f3f3f3" points="200,500 0,500 300,0 500,0">
                    </polygon>
                </svg>
            </div>
            <div class="last-block__block row">
                <div class="last-block_left">
                    <h2>THE MOST
                        POWERFUL<br>
                        <?php echo $configs->step1_name;?></h2>
                    <h3>FULL SPECTRUM<br>
                        KETO BHB SALTS</h3>
                    <ul class="row">
                        <li><img alt="" src="./assets/images/GUARANTEE.png"></li>
                        <li><img alt="" src="./assets/images/INGREDIENTS.png"></li>
                        <li><img alt="" src="./assets/images/arrow-1.png"></li>
                    </ul>
                </div>
                <div class="last-block_middle">
                    <div class="last-block-bottle">
                        <img alt="" src="./assets/brand/product.png">
                    </div>
                    <a href="javascript:void(0)" class="last-block__btn btn__send loading-btn">
                        <span>RUSH MY ORDER</span>
                    </a>
                    <img alt="" class="logo-f" src="./assets/images/logo-f.png">
                </div>
                <div class="last-block_right">
                    <img alt="" src="./assets/images/wallpapers.png">
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <img alt="" class="website-secure" src="./assets/images/website-secure.png">
            <ul class="soc-list row">
                <li>
                    <img alt="" src="./assets/images/social-icons.jpg">
                </li>
                <li>
                    <img alt="" src="./assets/images/ca.png">
                </li>
            </ul>

            <p><?php echo $configs->step1_name;?> is committed to maintaining the highest quality products and the utmost integrity in  business practices. All products sold on this website are certified by Good Manufacturing Practices (GMP), which is the highest standard of testing in the supplement industry.</p>
            <p>Notice: The products and information found on this site are not intended to replace professional medical advice or treatment. These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease. Individual results may vary.</p>
            <p>&copy; <script> var date = new Date(); document.write(date.getFullYear()) </script> <?php echo $configs->corporate_name;?>. All Rights Reserved.</p>

            <ul class="terms-links">
                <li> <a href="javascript:void(0);" onClick="openNewWindow('../disclosures/privacy.php','modal');">Privacy Policy |</a></li>
                <li> <a href="javascript:void(0);" onClick="openNewWindow('../disclosures/terms.php','modal');">Terms and Conditions |</a></li>
                <li><a href="javascript:void(0);" onClick="openNewWindow('../disclosures/wireless.php','modal');">Wireless Policy</a></li>
								
            </ul>
        </div>
    </footer>

    <div class="fixed-btn">
        <a href="javascript:void(0)" class="btn__send loading-btn">RUSH MY ORDER NOW </a>
    </div>
</div>

<div class="popup-loading-wrapper" style="display:none;">
    <div class="popup">
        <figure class="product-image"></figure>
        <p>Reserving Your Bottle Of</p>
        <h2><?php echo $configs->step1_name;?></h2>
        <img src="./assets/images/icon-loading.png" alt="" class="loading-image">
    </div>
</div>

<script type="text/javascript" src="./assets/js/jquery-3.5.1.min.js"></script> 
<script type="text/javascript" src="./assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/scripts.js"; ?>"></script>
<script type="text/javascript">
$(document).ready(function () {

    $(".single-item, .slider-mobile").slick({
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 2600,
    });
	
	$('.loading-btn').click(function(e) {
		$('.popup-loading-wrapper').show();
		setTimeout(function() {
			window.location.href='<?php echo $nextPage; ?>';
		}, 2000);
		return false
	});

   /* jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 0) {
        jQuery(".fixed-btn").fadeIn();
      } else {
        jQuery(".fixed-btn").fadeOut();
      }
    });*/

});
</script>
<script type="text/javascript">
$(function() {
	$(document).on('click', '#app_common_modal_close', function() {
		//     alert('close');
		$('#app_common_modal').remove();
	});	
});

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
</body>
</html>