<?php
	include("_global.php");
	if (!isset($_SESSION['token'])) {
		$_SESSION['token'] = generate_csrf_token();
	}	
	if ($mobile_detect->isMobile() && !$mobile_detect->isTablet()) {
		$url = $configs->mobile_path."?".$_SERVER['QUERY_STRING'];
		header("Location: $url");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $configs->step1_name; ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="./assets/brand/favicon.png" rel="icon" type="image/png">
    <link href="<?php echo $configs->root_path . "/assets/css/app.css"; ?>" rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/css/style.css"; ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/css/slick.css"; ?>" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@400;500;600;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <link href="<?php echo $configs->root_path . "/assets/css/jquery.autocomplete.css"; ?>" rel="stylesheet">
    <style>
        .autocomplete-suggestions {
            overflow: auto;
            width: auto !important;
        }
        .autocomplete-suggestion {
            overflow: visible;
        }
        form {
            padding: 0;
        }
    </style>
</head>

<body>
<div class="wrapper index-page">
    <div id="app">
        <header class="header">
            <div class="header__warning">
                <div class="container">
                    <span class="alert-color">Warning:</span> Due to extremely high media demand, there is limited
                    supply of
                    <span class="product-name"><?php echo $configs->step1_name; ?></span> in stock as of <span
                            class="date-container"></span> <span class="hurry">HURRY! <span
                                id="time">05:38.07</span>
                    </span>
                </div>
            </div>

            <div class="container row">
                <img alt="" class="header__logo" src="<?php echo $configs->root_path . "/assets/brand/logo2-strips.png"; ?>" width="176">
                <div class="header__info row">
                    <div class="header__info_side">
                        <span>Get My Free Bottle!</span>
                        <p><span>Voted #1</span> <?php echo $configs->step1_name; ?> Product in USA</p>
                    </div>
                    <a class="header__btn animated-btn" href="#form1">RUSH MY ORDER</a>
                </div>
            </div>
        </header>

        <section class="first-section">
            <div class="container">
                <div class="row">
                    <div class="first-section__side first-section__info">
                        <h1>MELT FAT <span>FAST!</span></h1>
                        <h3><span>WITHOUT DIET OR EXERCISE</span> <br> Powerful New Formula Triggers Fat-Burning Ketosis!</h3>
                        <ul>
                            <li>Burn Fat for Energy not Carbs</li>
                            <li>Release Fat Stores</li>
                            <li>Increase Energy Naturally!</li>
                            <li>Love the Way You Feel!</li>
                        </ul>
                        <a class="header__btn animated-btn" href="#form1">Get my risk free bottles</a>
                    </div>
                    <div class="first-section__side">
                        <div class="first-section__bottle">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>">
                            <img class="badge" alt="" src="<?php echo $configs->root_path . "assets/images/certificate-badge.png"; ?>">
                        </div>
                    </div>
                </div>
                <div class="first-section__logo">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/logo-ju.png"; ?>" >
                </div>
            </div>
        </section>

        <section class="mental-section">
            <div class="container">
            <h2 class="main-title">
                Reignite Your Mental Edge<br />
                <span class="highlighted-title">Feel Sharper. Think Clearer. Stay Independent.</span>
            </h2>

            <div class="content">
                <div class="image-box">
                <img alt="Brain Circuit" src="<?php echo $configs->root_path . "/assets/images/mental-ability.png"; ?>" >
                </div>

                <div class="text-box">
                <p>
                    <?php echo $configs->step1_name; ?> is a revolutionary brain supplement formulated to give you ultimate brain power. Known in Scientific Terms as a
                    <span class="orange">NOOTROPIC</span> or
                    <span class="orange">GENIUS PILL</span>, <?php echo $configs->step1_name; ?> improves mental functions such as
                    <b>cognition, memory, intelligence, motivation, attention, concentration</b> and therefore
                    <b>happiness and success.</b> You will be limitless!
                </p>

                <div class="ability-section_infowrap">
                    <div class="ability-section">
                    <div class="ability-text">
                    A healthy mind that is supercharged to fire on <b>all 12-Cylinders</b> will propel you to higher standards.
                    <?php echo $configs->step1_name; ?>'s advanced cognitive formula is made with all natural occurring ingredients to fuel your brain.
                    It is a safe and fast way to increase your daily energy levels, and will put you on the path to ultimate
                    success in life.
                    </div>
                    </div>
                    <img alt="Really Works" src="<?php echo $configs->root_path . "/assets/images/really-works.png"; ?>" >
                </div>
              </div>
            </div>

            <div class="benefits">
                <h3 class="benefits-title"><?php echo $configs->step1_name; ?> Helps:</h3>
                <ul class="benefits-list">
                <li>Eliminate Frustrating "Brain Fog"</li>
                <li>Recall Names, Conversations, and Appointments</li>
                <li>Stay Focused During Reading, Work, or Conversation</li>
                <li>Boosts Mental Energy Like You Were In Your 20's</li>
                </ul>
            </div>
            </div>
        </section>

        <section class="brain-power-section">
            <div class="container">
            <h2 class="section-title">
                Turbo-Charge<br />
                <span class="blue-text">Key Aspects of Brain Power</span>
            </h2>
            <p class="section-description">
                <?php echo $configs->step1_name; ?> simultaneously stimulates four areas of brain power: focus, memory, mental energy, and overall brain health.
                That means winning results in everything you do.
            </p>

            <div class="features-grid">
                <div class="feature-item">
                <img class="icon" alt="" src="<?php echo $configs->root_path . "/assets/images/icon1-attention-focus.png"; ?>" >

                <aside>
                    <h4>Attention and Focus</h4>
                    <p><?php echo $configs->step1_name; ?> enhances the brain so you have razor sharp focus. Anywhere! Anytime!</p>
                </aside>
                </div>
                <div class="feature-item">
                <img class="icon" alt="" src="<?php echo $configs->root_path . "/assets/images/icon3-unlock-longterm.png"; ?>" >
                <aside>
                    <h4>Unlock Long-Term Memory</h4>
                    <p>A key component to success. See once and remember forever.</p>
                </aside>
                </div>
                <div class="feature-item">
                <img class="icon" alt="" src="<?php echo $configs->root_path . "/assets/images/icon2-working-memory.png"; ?>" >
                <aside>
                    <h4>Working Memory</h4>
                    <p>It is crucial to quickly master tasks and making you so efficient that you get the job done with extreme performance.</p>
                </aside>
                </div>
                <div class="feature-item">
                <img class="icon" alt="" src="<?php echo $configs->root_path . "/assets/images/icon4-info-processing.png"; ?>" >
                <aside>
                    <h4>Information Processing</h4>
                    <p>The speed with which your brain acts and sometimes the difference between success and failure is the lightning quick thinking that <?php echo $configs->step1_name; ?> provides.</p>
                </aside>
                </div>
            </div>
            </div>
        </section>

        <section class="release-section">
            <div class="container">
            <h2 class="section-title mb-5">
                <span class="highlight"><?php echo $configs->step1_name; ?> Releases</span> Your Genius
            </h2>
            <div class="content-area">
                <img class="main-image" alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>">

                <div class="text-area">
                <p>
                    <?php echo $configs->step1_name; ?> is a 100% natural water-soluble supplement that quickly enters the brain, to protect neurons, improve signal transmission, and support brain function and learning processes. It stimulates brain function so you can actually build new neurons and neural pathways.
                </p>
                <p>
                    Adequate functioning of neurotransmitter synthesis is essential in maintaining a healthy cognitive state that will supercharge your thinking capacity and lead to your ultimate success in anything that requires <span class="highlight-blue">SUPERIOR BRAIN POWER</span>.
                </p>
                <div class="sub-images">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/brain_before.jpg"; ?>" >
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/brain_after.jpg"; ?>" >
                </div>
                </div>
            </div>
            <div class="features">
                <div class="benefits">
                    <h3 class="benefits-title">
                        <?php echo $configs->step1_name; ?> is Clinically Supported to:
                    </h3>
                    <ul class="benefits-list">
                        <li>Promote Nerve Growth In The Brain</li>
                        <li>Supercharge Crucial Neurotransmitters</li>
                        <li>Support Increased Blood Flow & Oxygenation To The Brain</li>
                        <li>Increase Brain Energy & Your Ability To Use It</li>
                        <li>Support Brain Cell Walls</li>
                        <li>Deliver Vital Nutrients, Vitamins & Amino Acids</li>
                        <li>Support Brain Protection From Neurotoxins & Free Radicals</li>
                        <li>Stimulate Brain Plasticity For Ultimate Brain Boost</li>
                    </ul>
                </div>

            </div>
            </div>
        </section>

        <section class="info-section woman-box">
            <div class="container">
                <div class="row">
                    <div class="info-wrapper">
                        <div class="info-box">
                            <h1>
                                <span>Enhance Your</span> <br>
                                Mental State
                            </h1>
                            <p><?php echo $configs->step1_name; ?>  is so effective you will have Lightning Fast thinking under any circumstances, including a genius-level boost when you are tired, have brain fog syndrome or even after a heavy night of drinking. Don’t let the demands of your job or social life slow you down. <?php echo $configs->step1_name; ?>  maximizes your concentration with ultimate efficiency so that you have more time for the things you and your brain would rather be doing!</p>
                            <p>The health boost you receive from <?php echo $configs->step1_name; ?>  is so successful at keeping your brain optimized that you can solve problems quicker, make decisions with ease and feel more in control - from daily tasks to life's unexpected curveballs.</p>
                        </div>
                        <div class="person-box">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/senior-woman-min.png"; ?>" >
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-section man-box">
            <div class="container">
                <div class="row">
                    <div class="info-wrapper">
                        <div class="person-box">
                            <img alt="" src="<?php echo $configs->root_path . "/assets/images/senior-man-min.png"; ?>" >
                        </div>
                        <div class="info-box">
                            <h1>
                                <span>Stay Sharp When It Matters</span>
                                Give Yourself the Mental Edge - Every Day
                            </h1>
                            <p>Don't ever fall prey to Brain Fog at a critical time. When you are dealing with the pressure of managing finances or increased career workload, you need exceptional neural performance exactly when you need it.</p>
                            <p>Don't spend hours and hours trying to remember that friend’s name or phone number only to let insufficient brain function destroy your thought process. <?php echo $configs->step1_name; ?> keeps you sharp, focused and optimized for all moments in life when you need <span>SUPERCHARGED BRAIN PERFORMANCE</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="memo-section">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-title my-0">
                        <span><?php echo $configs->step1_name; ?></span> is The #1 Choice
                    </h1>
                    <h1 class="section-title my-0">For Cognition Enhancement</h1>
                    <h2>Premium Brain Supplement</h2>
                </div>
                <p>
                    <?php echo $configs->step1_name; ?>’s unique formula is scientifically designed and tested to meet the highest standards of supreme cognitive function.
                    We manufacture every pill with the utmost care in our ultra-modern facilities with full scientific quality assurance testing at every lab stage.
                    Where other products depend on fillers and synthetic products, <?php echo $configs->step1_name; ?> is formulated with only the best natural ingredients that are
                    clinically proven to give you the mental boost you need. We Guarantee it!
                </p>
                <div class="benefits">
                    <ul class="benefits-list">
                        <li>Supports Complex and Efficient Functioning of your Brain Cells</li>
                        <li>Research Driven Human Studies Confirmed safety and effectiveness</li>
                        <li>Manufactured in an Expert Certified laboratory environment</li>
                        <li>We Do Not Test On Animals</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="testimonial-section">
            <div class="container">
                <h1 class="section-title mb-5">
                    What Our Satisfied, Real Customers <br>
                    <span class="highlight">Have to Say About <?php echo $configs->step1_name; ?></span>
                </h1>
                <div class="testimonial">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/testi-img1.png"; ?>" >
                    <div class="testimonial-text">
                        <p>
                            “I've always loved learning new things, but lately, it's like my brain couldn’t keep up. Reading,
                            absorbing, even holding a conversation took more effort than it used to.
                        </p>
                        <p>
                            I started to feel... dull. Then I saw an ad for <?php echo $configs->step1_name; ?> and decided to take the leap. One month in
                            and I feel completely recharged—like I upgraded my brain to the pro version. I can read, retain, and
                            recall like I’m 20 again.”
                        </p>
                        <p><strong>Barbara. – New York</strong></p>
                    </div>
                </div>
                <hr>
                <div class="testimonial">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/testi-img2.png"; ?>" >
                    <div class="testimonial-text">
                        <p>
                            “Running a business means my mind has to be on point 24/7. But I was burning out—forgetting numbers,
                            missing details, just mentally wiped. I thought I needed more sleep or coffee. Nope.
                        </p>
                        <p>
                            I needed <?php echo $configs->step1_name; ?>. The mental fog lifted within the first week. I’m sharper, quicker, and more locked
                            in than ever.
                        </p>
                        <p>
                            Even my staff noticed. <?php echo $configs->step1_name; ?> is my new secret weapon, and I’m not going back.”
                        </p>
                        <p><strong>Kevin Thompson. – South Dakota</strong></p>
                    </div>
                </div>
                <hr>
                <div class="testimonial">
                    <img alt="" src="<?php echo $configs->root_path . "/assets/images/testi-img3.png"; ?>" >
                    <div class="testimonial-text">
                        <p>
                            “I was literally forgetting everything. Forgetting names. Stuff I have to do, birthdays and special
                            occasions.
                        </p>
                        <p>
                            It was ruining my life. But now it’s all coming back.
                        </p>
                        <p>
                            Not only am I attending events, thanks to my renewed memory… I get to help plan and organize them, which
                            I always loved doing. And my friends and family are amazed after they had pretty much given up on me.
                        </p>
                        <p>
                            Heck, I can even rattle off a grocery list off the top of my head. Can you believe it?”
                        </p>
                        <p><strong>Sandra Elliot. – Minneapolis</strong></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="index-form" id="form1">
            <div class="container">
                <form class="form123" id="theForm" method="POST" action="./app/src/create_prospect.php"
                    onSubmit="return validate_optin_form()">
                    <h1 class="section-title text-white mb-5 text-center">
                        Where Can We Send <br> Your First Bottle
                    </h1>
                    <input type='hidden' name='token' value='<?php echo $_SESSION["token"]; ?>'>
                    <input type="hidden" name="device" value="desktop">
                    <input type="hidden" name="pk" value="5">
                    <input type="hidden" name="shipCountry" value="US">
                    <?php
                        foreach($_GET as $key => $value) {
                            echo "<input type='hidden' name='".safeRequest($key)."' value='".safeRequest($_GET[$key])."'>";
                        }
                    ?>
                    <div class="row">
                        <div class="phone-6 columns form-holder">
                            <label>First Name:</label>
                            <input class="form-control required" data-placement="auto left" name="fields_fname"
                                id='fields_fname' placeholder="First Name*" title="First Name" type="text" value="">
                        </div>
                        <div class="phone-6 columns form-holder">
                            <label>Last Name:</label>
                            <input class="form-control required" data-placement="auto left" name="fields_lname"
                                id='fields_lname' placeholder="Last Name*" title="Last Name" type="text" value="">
                        </div>
                    </div>
                    <div class="phone-12 columns form-holder">
                        <label>Zip Code:</label>
                        <input class="form-control required" data-placement="auto left" name="fields_zip" id="fields_zip"
                            placeholder="Zip Code*" title="Zip Code" type="tel" minlength="5" maxlength="5" value=""
                            onKeyUp="javascript: this.value = this.value.replace(/[^0-9]/g, '');">
                    </div>
                    <div class="phone-12 columns form-holder">
                        <label>Address:</label>
                        <input class="form-control required" data-placement="auto left" name="fields_address1"
                            id="fields_address1" placeholder="Address*" title="Address" type="text" value="">
                    </div>
                    <div class="phone-12 columns form-holder">
                        <label>City:</label>
                        <input class="form-control required" data-placement="auto left" name="fields_city" id="fields_city"
                            placeholder="City*" title="City" type="text" value="">
                    </div>
                    <div class="phone-12 columns form-holder">
                        <label>State:</label>
                        <select name="fields_state" id="fields_state" class="form-control required" data-selected=""
                            data-error-message="State is required">
                            <option value="" onClick="">Select State</option>
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
                    </div>
                    <div class="row">
                        <div class="phone-6 columns form-holder">
                            <label>Email:</label>
                            <input class="form-control required" data-placement="auto left" name="fields_email"
                                id="fields_email" placeholder="Email*" title="Email" type="email" value="">
                        </div>
                        <div class="phone-6 columns form-holder">
                            <label>Phone:</label>
                            <input class="form-control required" data-placement="auto left" name="fields_phone"
                                id="fields_phone" placeholder="Phone Number*" title="Phone Number" type="tel" value=""
                                maxlength="12">
                        </div>
                    </div>
                    <button class="button-submit loading-btn animated-btn" type="submit">RUSH MY ORDER</button>
                </form>
                <div class="form-image">
                    <img class="form-badge" alt="" src="<?php echo $configs->root_path . "assets/images/certificate-badge.png"; ?>">
                    <img class="form-product" alt="" src="<?php echo $configs->root_path . "/assets/brand/product.png"; ?>">
                </div>
            </div>
            <img alt="" class="doctor-trust" src="<?php echo $configs->root_path . "/assets/images/doctor-trust.png"; ?>">
        </section>

        <section class="security-section">
            <img alt="" src="<?php echo $configs->root_path . "/assets/images/logo-f.png"; ?>">
        </section>

        <footer class="footer">
            <div class="container">
                <img alt="" class="website-secure" src="<?php echo $configs->root_path . "/assets/images/website-secure.png"; ?>">
                <ul class="soc-list row">
                    <li><img alt="" src="<?php echo $configs->root_path . "/assets/images/social-icons.jpg"; ?>"></li>
                    <li><img alt="" src="<?php echo $configs->root_path . "/assets/images/ca.png"; ?>"></li>
                </ul>

                <p><?php echo $configs->step1_name; ?> is committed to maintaining the highest quality products and the utmost
                    integrity in business practices. All products sold on this website are certified by Good
                    Manufacturing Practices (GMP), which is the highest standard of testing in the supplement
                    industry.</p>
                <p class="footer-note">Notice: The products and information found on this site are not intended to replace professional
                    medical advice or treatment. These statements have not been evaluated by the Food and Drug
                    Administration. These products are not intended to diagnose, treat, cure or prevent any disease.
                    Individual results may vary.</p>
                <p>&copy;
                    <script> var date = new Date();
                        document.write(date.getFullYear())</script> <?php echo $configs->corporate_name; ?>. All Rights Reserved.
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
                    <strong><span id="notify-quantity">7</span></strong> Bottle(s) of <?php echo $configs->step1_name; ?> <small><span id="notify-ago">9 minutes ago</span></small>
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

<p id="loading-indicator" style="display:none;">Processing...</p>
<p id="crm-response-container" style="display:none;">Limelight messages will appear here...</p>

<?php if (isset($_GET["mode"]) && $_GET["mode"]=="failure"): ?>
	<script>
		alert("<?php echo $_GET["err_msg"]; ?>");
	</script>
<?php endif; ?>

<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery-3.5.1.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/slick.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/social-proof.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/scripts.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery.mask.min.js"; ?>"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#fields_phone').mask('000-000-0000');

        $('.single-item').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2600,
        });

        /*$('.loading-btn').click(function(e) {
            $('.popup-loading-wrapper').show();
            setTimeout(function() {
              $('#lpFrm').submit();
            }, 2000);
            return false
        });*/
    });
</script>
<script type="text/javascript" src="<?php echo $configs->root_path . "/assets/js/jquery.autocomplete.min.js"; ?>"></script>
<script>
    var smtKey = '<?php echo $configs->smartystreets_key; ?>';
    var smtAuto = <?php echo $configs->smartystreets_autocomplete_enabled; ?>;
    var smtVerify = <?php echo $configs->smartystreets_verification_enabled; ?>;
    var smartUrl = "https://us-autocomplete-pro.api.smartystreets.com/lookup?key=" + smtKey + "&prefer_geolocation=city";
    var lastAddress1 = '';
    var lastAddress2 = '';

    if (typeof smtKey !== "undefined" && smtKey != '') {
        function submitAddress2() {
            if (lastAddress1 == '') {
                lastAddress1 = $('input[name="fields_address1"]').val();
                lastAddress1.replace('"', '');
            }
            lastAddress2 = $('input[name="fields_address2"]').val();
            lastAddress2.replace('"', '');
            var combAddr = lastAddress1 + ', ' + lastAddress2;
            $('input[name="fields_address1"]').val(combAddr);
            $('#app_common_modal').remove();
            $('#theForm').trigger('submit');
            return false;
        }

        var utils2 = (function () {
            return {
                escapeRegExChars: function (value) {
                    return value.replace(/[|\\{}()[\]^$+*?.]/g, "\\$&");
                },
                createNode: function (containerClass) {
                    var div = document.createElement('div');
                    div.className = containerClass;
                    div.style.position = 'absolute';
                    div.style.display = 'none';
                    return div;
                }
            };
        }());

        $(document).ready(function (ee) {
            if (typeof smtAuto !== "undefined" && smtAuto == 1) {
                $('#fields_address1').autocomplete({
                    serviceUrl: smartUrl,
                    paramName: "search",
                    ajaxSettings: {},
                    minChars: 2,
                    deferRequestBy: 400,
                    transformResult: function (response) {
                        if (typeof response === "undefined") {
                            return {
                                "suggestions": []
                            };
                        } else if (typeof response == "string") {
                            respJson = JSON.parse(response);
                        } else {
                            respJson = response;
                        }
                        if (!(respJson) || typeof respJson.suggestions === "undefined" || respJson.suggestions == null) {
                            return {
                                "suggestions": []
                            };
                        }

                        return {
                            suggestions: $.map(respJson.suggestions, function (dataItem) {
                                return {
                                    value: dataItem.street_line + (dataItem.secondary != '' && dataItem.entries == 1 ? (', ' + dataItem.secondary) : ''),
                                    data: dataItem
                                };
                            })
                        };
                    },
                    formatResult: function (suggestion, currentValue) {
                        if (typeof suggestion.data === "undefined") {
                            return "";
                        } else {
                            if (!currentValue) {
                                return suggestion.data.text;
                            }

                            var pattern = '(' + utils2.escapeRegExChars(currentValue) + ')';

                            var addrfull = suggestion.data.street_line + (
                                suggestion.data.secondary != '' ? (
                                    suggestion.data.entries > 1 ? (', ' + suggestion.data.secondary + ' (' + suggestion.data.entries + ' entries)') : (', ' + suggestion.data.secondary)
                                ) : '') + ', ' + suggestion.data.city + ' ' + suggestion.data.state + ' ' + suggestion.data.zipcode;

                            return addrfull
                                .replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>')
                                .replace(/&/g, '&amp;')
                                .replace(/</g, '&lt;')
                                .replace(/>/g, '&gt;')
                                .replace(/"/g, '&quot;')
                                .replace(/&lt;(\/?strong)&gt;/g, '<$1>');
                        }
                    },
                    onSelect: function (suggestion) {
                        if ($('#fields_city').length == 1 && (suggestion.data.city)) {
                            $('#fields_city').val(suggestion.data.city);
                        }
                        if ($('#fields_state').length == 1 && (suggestion.data.state)) {
                            $('#fields_state').val(suggestion.data.state);
                        }
                        if ($('#fields_zip').length == 1 && (suggestion.data.zipcode)) {
                            $('#fields_zip').val(suggestion.data.zipcode);
                        }

                    }
                });
            }
        });

    }


    $('form.form123').find('#fields_email').on('change keyup', function () {
        var emailReg2 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg2.test($('#fields_email').val())) {
            $(this).addClass('has-error');
            $(this).removeClass('no-error');
        }
    });

    $('form.form123').find('#fields_zip').on('change keyup', function () {
        var zip = $('#fields_zip').val();
        if ((zip.length) < 5) {
            $(this).addClass('has-error');
            $(this).removeClass('no-error');
        }
    });

    $('form#theForm').find('input, select, textarea').on('change keyup', function () {
        $('form#theForm').find('input, select').each(function () {
            if ($(this).val() == '') {
                $(this).addClass('has-error');
                $(this).removeClass('no-error');
            } else {
                $(this).removeClass('has-error');
                $(this).addClass('no-error');
            }
        });
    });


    function validate_optin_form() {
			
        ShowExitPopup = false;
        internal = 1;
        isExit = false;

        var errors = new Array();
        var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        //var is_terms_condtion_cheked = $('#agree_terms').prop('checked');
        //console.log($('#fields_fname').val().replace(/^\s+|\s+$/g,"")==''));

        $("input").removeClass("has-error");

        if ($('#fields_fname').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your first name');
            $('#fields_fname').addClass("has-error");
        }
        if ($('#fields_lname').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your last name');
            $('#fields_lname').addClass("has-error");
        }
        if ($('#fields_address1').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please select your address');
            $('#fields_address1').addClass("has-error");
        }
        if ($('#fields_city').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your city');
            $('#fields_city').addClass("has-error");
        }
        if ($('#fields_state').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your State');
            $('#fields_state').addClass("has-error");
        }
        if ($('#fields_zip').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your Zip Code');
            $('#fields_zip').addClass("has-error");
        }
        if ($('#fields_phone').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your phone number');
            $('#fields_phone').addClass("has-error");
        }
        if ($('#fields_email').val().replace(/^\s+|\s+$/g, "") == '') {
            errors.push('Please enter your email address');
            $('#fields_email').addClass("has-error");
        } else if (!emailReg.test($('#fields_email').val())) {
            errors.push('Please enter valid email address');
            $('#fields_email').addClass("has-error");
        }

        /*if($('#agree_terms:checked').length == 0) {
        errors.push('Please accept our terms and condition');
        }*/


        if (typeof smtKey !== "undefined" && smtKey != '' && typeof smtVerify !== "undefined" && smtVerify == 1) {
            if (errors.length == 0) {
                var addr = $('input[name="fields_address1"]').val() + ', ' + $('input[name="fields_city"]').val() + ' ' + $('select[name="fields_state"]').val() + ' ' + $('input[name="fields_zip"]').val();
                var errmsg = "";
                var vcode = "";
                var apiUrl = "https://us-street.api.smartystreets.com/street-address"
                    + "?street=" + encodeURI(addr)
                    + "&key=" + smtKey;
                $.ajax({
                    url: apiUrl,
                    method: "get",
                    async: false,
                    beforeSend: function (xhr) {
                    }
                })
                    .done(function (resData) {
                        var errmsg = "";
                        if (!(resData) || !(resData[0]) || !(resData[0].analysis) || !(resData[0].analysis.dpv_match_code)) {
                            vcode = "";
                        } else {
                            vcode = resData[0].analysis.dpv_match_code;
                        }

                        if (vcode != '' && vcode != 'N' && vcode != 'D') {
                            if (typeof resData[0].delivery_line_1 !== "undefined" && resData[0].delivery_line_1 != "") {
                                $('input[name="fields_address1"]').val(resData[0].delivery_line_1);
                                lastAddress1 = $('input[name="fields_address1"]').val();
                            }

                            if (typeof resData[0].components !== "undefined") {
                                if (typeof resData[0].components.city_name !== "undefined" && resData[0].components.city_name != "") {
                                    $('input[name="fields_city"]').val(resData[0].components.city_name);
                                }
                                if (typeof resData[0].components.zipcode !== "undefined" && resData[0].components.zipcode != "") {
                                    $('input[name="fields_zip"]').val(resData[0].components.zipcode);
                                }
                                if (typeof resData[0].components.state_abbreviation !== "undefined" && resData[0].components.state_abbreviation != "") {
                                    $('select[name="fields_state"]').val(resData[0].components.state_abbreviation);
                                }
                            }

                        }
                    })
                    .fail(function () {
                    })
                    .always(function () {
                    });


                if (vcode == '') {
                    errors.push('Address could not be found');
                } else if (vcode == 'N') {
                    errors.push('Address does not seem to be deliverable');
                } else if (vcode == 'D') {

                    var html = '';
                    html += '<div id="app_common_modal">';
                    html += '<div class="app_modal_body" style="text-align:center;min-height:150px;"><a href="javascript:void(0);" id="app_common_modal_close">X</a>';

                    html += '<div>'
                        + '<form method="get" action="" onSubmit="return submitAddress2();">'
                        + '<h4>' + "Please enter your Apartment/Suite/Unit # to proceed" + '</h4>'
                        + '<input type="text" name="fields_address2" id="fields_address2" placeholder="" autocomplete="off" required style="width:80%;line-height:22px;margin:10px;padding:5px" maxlength="50" value="' + (lastAddress2 != '' ? lastAddress2 : '') + '" data-error-message="Please enter your address!" />'
                        + '<button type="submit" style="width:40%;height:30px;line-height:22px;cursor:pointer;">OK</button>'
                        + '</form>';
                    +'</div>';

                    html += '</div>';
                    html += '</div>';

                    if (!$('#app_common_modal').length) {
                        $('body').append(html);
                    }
                    $('#app_common_modal').fadeIn(500);
                    return false;

                }

            }
        }


        if (errors.length == 0) {
            $('.popup-loading-wrapper').show();
            $('#fields_phone').unmask();
            document.getElementById('theForm').submit();
            return false;
        } else {
            var li = '';
            $.each(errors, function (key, value) {
                li += '<li>' + value + '</li>';
            });

            var html = '';
            html += '<div id="error_handler_overlay">';
            html += '<div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a><ul>' + li + '</ul></div>';
            html += '</div>';

            $('body').append(html);

            $('#error_handler_overlay').fadeIn(500);
            return false;
        }
    }


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
    //End Added
        $('input[name*="fields_zip"]').blur(function(e) {
            let group = $(this).data('group');
            let country = $('[name*="country"]').val() ? $('[name*="country"]').val()  : 'US'; 
            
            $.ajax({
                url: "https://api.zippopotam.us/"+country+"/" + $(this).val(),
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    try {
                        if (data.places[0]["state abbreviation"]) {
                            $('[name*="fields_state"]').val(data.places[0]["state abbreviation"]);    
                            
                            $('[name*="fields_state"]').trigger('blur');
                        }
                        if (data.places[0]["place name"]) {
                            $('[name*="fields_city"]').val(data.places[0]["place name"]);   
                            
                            $('[name*="fields_city"]').trigger('blur');
                        }
                    } catch(e) {}
                },
                error: function(xhr) { console.log(xhr.status); }
            });
        });
</script>

</body>
</html>