<?php

include_once __DIR__ . '/includes/database.php';

$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$reference = $_SESSION['signup-data']['reference'] ?? null;

unset($_SESSION['signup-data']);

?>



<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eastern Export Hub</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/common-responsive.css">
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="userbackend/assets/js/jquery-3.6.3.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <meta name="csrf-token" content="HGYLUX9faW5bU01EPZeCo2eHPa13A7fVaEIFdyvZ" />
    
    
        <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/home-responsive.css">
</head>

<body>
    <div class="page">
        <header class="main-header">
	<div class="container header-main-box">
		<nav class="navigation">
			<div class="header-content">
				<div class="header-logo-box">
					<a href="index.php">
						<img src="assets/images/maain-logo.png" alt="">
					</a>
					<div class="homeburger-manu" id="header-fa-bar">
						<span></span>
					</div>
				</div>
			</div>

			<div class="nav-manulist-box">
				<div class="contact-box">
					<div class="nav-numbar" >
						<a href="tel: +234 7062993384">
							<svg xmlns="#" id="Layer_1" x="0" y="0" version="1.1"
								viewBox="0 0 29 29" xml:space="preserve" fill="#F26821" width="28" height="22">
								<path
									d="m20.914 17.743-2.091 1.178a1.319 1.319 0 0 1-1.58-.217l-6.979-6.979a1.32 1.32 0 0 1-.217-1.58l1.178-2.091a1.978 1.978 0 0 0-.325-2.37L7.766 2.55a1.978 1.978 0 0 0-2.798 0L3.545 3.972a5.276 5.276 0 0 0-.793 6.446l.714 1.19a41.36 41.36 0 0 0 14.946 14.631l.141.081c2.102 1.201 4.699.851 6.382-.831l1.486-1.486a1.978 1.978 0 0 0 0-2.798l-3.136-3.136a1.978 1.978 0 0 0-2.371-.326z" />
							</svg>
							+234 7062993384
						</a>
					</div>
					<div class="nav-numbar">
						<a href="mailto:info@EEH.com">
							<svg xmlns="#" viewBox="0 0 128 96" fill="#F26821" width="18"
								height="28">
								<path
									d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z"
									data-name="Layer 2" />
							</svg>
							enquiries@easternexporthub.com
						</a>
					</div>
				</div>

				<div class="nav-manulist">
					<div class="container">
						<div class="manu-list">
							<ul class="listing-box">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li class="about-main">
									<a href="#">About</a>
									<svg xmlns="#" viewBox="0 0 24 24" width="28"
										fill="#fff">
										<path
											d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
									</svg>
									<ul class="abourt-list">
									    <li class="unique_li">
									        <a href="">d</a>
									    </li>
										<li>
											<a href="how-E-ExportHub-work.php">
												How Eastern Export Hub Works
											</a>
										</li>
										<li>
											<a href="subscription.php">
												Our Plans
											</a>
										</li>
										<li>
											<a href="#">Our Partners</a>
										</li>
									</ul>
								</li>
								<li class="about-main">
									<a href="benefits.php">Benefits</a>
								</li>
																<li class="about-main">
									<a href="#" onclick="event.preventDefault();" >Sign In/Sign Up</a>
									<svg xmlns="#" viewBox="0 0 24 24" width="28"
										fill="#fff">
										<path
											d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z" />
									</svg>
									<ul class="abourt-list">
									    <li class="unique_li">
									        <a href="">d</a>
									    </li>
										<li data-toggle="modal" data-target="#exampleModal">
											<a href="#" onclick="event.preventDefault();" id="sign_in">
												Sign In
											</a>
										</li>
										<li>
											<a href="index.php#signup">
                                                Sign Up
											</a>
											<!-- <a 
												href="./signup.php">Sign Up
											</a> -->
										</li>
									</ul>
								</li>
                                <li>	
									<a href="#">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</nav>
	</div>
</header>            <div class="banner-wrapper-box">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"
                    style="background-image:linear-gradient(0deg, rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.479)), url(assets/images/batnner_get.png);">
                    <div class="container">
                        <div class="banner-wrp-main">
                            <div class="banner-content-box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.479)), url(assets/images/banneeer_learn.png);">
                    <div class="container">
                        <div class="banner-wrp-main">
                        </div>
                    </div>
                </div>
                <div class="carousel-item "
                    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.479)),url(assets/images/banner_learrn.png);">
                    <div class="container">
                        <div class="banner-wrp-main">
                        </div>
                    </div>
                </div>
                <div class="carousel-item "
                    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.479)), url(assets/images/banner_wellcome.png);">
                    <div class="container">
                        <div class="banner-wrp-main">
                        </div>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.479)), url(assets/images/banner_learn22.png);">
                    <div class="container">
                        <div class="banner-wrp-main">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <main>
        <section class="who-we-are-wrapper our-gaping" style="background-color:lightgrey;">
            <div class="container">
                <div class="whoare-content-box">
                    <div class="whoare-title-box">
                        <h3 class="title-box">
                            WHO WE ARE
                            <div class="head_bg_blue">
                                <div class="head_bg_round"></div>
                            </div>
                        </h3>
                    </div>
                    <div class="whoare-mission-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="our-mission-card">
                                    <div class="mission-icon">
                                        <svg xmlns="#" width="52" height="56"
                                            viewBox="0 0 24 24" fill="#fff">
                                            <path fill="#3A3AB1" d="M0 0h24v24H0V0z" />
                                            <path
                                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z" />
                                        </svg>
                                    </div>
                                    <div class="mission-title">
                                        <h4>OUR MISSION</h4>
                                        <p>To become the leading international trade platform and influencer out of
                                            Africa, connecting millions of exporters around the world.</p>
                                    </div>
                                    <div class="banner-btn-box mission-btn">
                                        <a href="#">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="our-mission-card">
                                    <div class="mission-icon">
                                        <svg xmlns="#" viewBox="0 0 20 20" width="52"
                                            height="56">
                                            <path fill="#3A3AB1" d="M0 0h24v24H0V0z"></path>
                                            <path
                                                d="M19.025 3.587c-4.356 2.556-4.044 7.806-7.096 10.175-2.297 1.783-5.538.88-7.412.113 0 0-1.27 1.603-2.181 3.74-.305.717-1.644-.073-1.409-.68C3.905 9.25 14.037 5.416 14.037 5.416s-7.149-.303-11.927 5.94c-.128-1.426-.34-5.284 3.36-7.65 5.016-3.211 14.572-.715 13.555-.119z"
                                                fill="#fff">
                                        </svg>
                                    </div>
                                    <div class="mission-title">
                                        <h4>OUR VISION</h4>
                                        <p>To scale up and maximize the number of Eastern Exporters through organized
                                            sensitization, training, guiding and off–taking. Thereby, minimizing the trade
                                            gaps between Nigeria, china and other fareast countries</p>
                                    </div>
                                    <div class="banner-btn-box mission-btn">
                                        <a href="#">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="our-mission-card">
                                    <div class="mission-icon">
                                        <svg xmlns="#" viewBox="0 0 24 24" width="52"
                                            height="56" fill="#fff">
                                            <g data-name="Layer 2">
                                                <path fill="#3A3AB1" d="M0 0h24v24H0V0z"></path>
                                                <path
                                                    d="M12 11a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm6 10a1 1 0 0 0 1-1 7 7 0 0 0-14 0 1 1 0 0 0 1 1z"
                                                    data-name="person" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="mission-title">
                                        <h4>OUR OBJECTIVE</h4>
                                        <p>To maximize and have over 10 million subscribers on the Eastern Exporters club
                                            Platform within 3 years of operation and 25 million subscribers within 10 years
                                            of operations</p>
                                    </div>
                                    <div class="banner-btn-box mission-btn">
                                        <a href="#">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sponsorship-content">
                    <h4>SPONSOR/FINANCE A PROJECT:</h4>
                    <div class="sponsorship-btn">
                        <a href="benefits.php">
                            Click Here!
                        </a>
                    </div>
                </div>
            </div>
        </section>

                    <section class="account-wrapper our-gaping" id="signup">
                <div class="container">
                    <div class="account-content-box">
                        <form action="<?= ROOT_URL ?>ski/signup-logic.php" method="POST" id="registration_form">
                            <input type="hidden" name="_token" value="HGYLUX9faW5bU01EPZeCo2eHPa13A7fVaEIFdyvZ">                            
                            <div class="account-title">
                                <h3 class="title-box">BECOME AN EXPORTER NOW</h3>
                                <div class="head_bg_blue">
                                    <div class="head_bg_round"></div>
                                </div>
                            </div>
                            <div class="account-login" style="background-color:lightgrey;">
                                <?php if(isset($_SESSION['signup'])): ?>
                                    <div style="background-color: #fcc; border-radius: 10px; margin-bottom: 10px;">
                                        <p style="color: red; text-align: center; padding: 10px;"><b>
                                            <?= 
                                                $_SESSION['signup'];
                                                unset($_SESSION['signup']);
                                            ?></b>
                                        </p>
                                    </div>
                                <?php endif ?>

                                <?php if(isset($_SESSION['signin'])): ?>
                                    <div style="background-color: #fcc; border-radius: 10px; margin-bottom: 10px;">
                                        <p style="color: red; text-align: center; padding: 10px;"><b>
                                            <?= 
                                                $_SESSION['signin'];
                                                unset($_SESSION['signin']);
                                            ?></b>
                                        </p>
                                    </div>
                                <?php endif ?>
                                <?php if(isset($_SESSION['signup-success'])): ?>
                                    <div style="background-color: #cfc; border-radius: 10px; margin-bottom: 10px;">
                                        <p style="color: green; text-align: center; padding: 10px;"><b>
                                            <?= $_SESSION['signup-success'];
                                                unset($_SESSION['signup-success']);
                                            ?></b>
                                        </p>
                                    </div>
                                <?php endif ?>
                                

                                
                                
                                <div class="name-box">
                                    <div class="input-box">
                                        <label for="#">First name</label>
                                        <input type="text" name="firstname" value="<?= $firstname ?>"
                                            placeholder="First name">
                                    </div>
                                    <div class="input-box">
                                        <label for="#">Last name</label>
                                        <input type="text" name="lastname" value="<?= $lastname ?>"
                                            placeholder="Last name">
                                    </div>
                                </div>
                                <div class="emil-box">
                                    <div class="input-box">
                                        <label for="#">Email</label>
                                        <input type="text" name="email" value="<?= $email ?>"
                                            placeholder="Email">
                                    </div>
                                    <div class="input-box">
                                        <label for="#">Password</label>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="textarea-box">
                                    <label for="">Reference</label>
                                    <input name="reference" name="reference" value="<?= $reference ?>"
                                        placeholder="Reference">
                                </div>
                                <div class="banner-btn-box submit-btn-box">
                                    <!-- <div class="submit-btn">
                                        <a href="#" id="registration_btn"
                                            onclick="event.preventDefault();$(this).parents('form').submit();">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Submit

                                        </a>
                                       
                                    </div> -->
                                    <div class='popup-btn' style="margin-top: -30px; margin-bottom: 10px;">
                                            
                                        <button type='submit'  name="signup" style="padding: 12px;">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Submit

                                        </button>
                                    </div>
                                    <div class="sing-btn">
                                        <a href="#" id="sign_in" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <svg xmlns="#" viewBox="0 0 24 24" width="22"
                                                fill="#fff">
                                                <g data-name="Layer 2">
                                                    <g data-name="arrowhead-right">
                                                        <path
                                                            d="m18.78 11.37-4.78-6a1 1 0 0 0-1.41-.15 1 1 0 0 0-.15 1.41L16.71 12l-4.48 5.37a1 1 0 0 0 .13 1.41A1 1 0 0 0 13 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 .01-1.27z" />
                                                        <path
                                                            d="M7 5.37a1 1 0 0 0-1.61 1.26L9.71 12l-4.48 5.36a1 1 0 0 0 .13 1.41A1 1 0 0 0 6 19a1 1 0 0 0 .77-.36l5-6a1 1 0 0 0 0-1.27z" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Sign in
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            </main>

    <!-- <script type="text/javascript">
        $(document).ready(function() {
            jQuery.validator.addMethod("isEmailValid", function(value, element) {
                var regex = /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i;
                return regex.test(value);
            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            });
            var email = $("[name='useremail']").val();
            $("#registration_form").validate({
                errorElement: "div",
                rules: {
                    first_name: {
                        required: true,
                        lettersonly: true,
                        maxlength: 50
                    },
                    last_name: {
                        required: true,
                        lettersonly: true,
                        maxlength: 50
                    },
                    useremail: {
                        required: true,
                        email: true,
                        isEmailValid: true,
                        remote: {
                            // url: "https://www.nigerianexportershub.com/checkemail",
                             // url: "https://www.skibussiness.com/ski/signup-logic.php",
                            url: "http://localhost/skibusiness/ski/signup-logic.php",
                            type: "post",
                            data: {
                                useremail: $(email).val(),
                                _token: "HGYLUX9faW5bU01EPZeCo2eHPa13A7fVaEIFdyvZ"
                            },
                            dataFilter: function(data) {
                                var json = JSON.parse(data);
                                if (json.msg == "true") {
                                    return "\"" +
                                        "This email is already exists in our system. please use another email." +
                                        "\"";
                                } else {
                                    return 'true';
                                }
                            }
                        }
                    },
                    userpassword: {
                        required: true,
                        minlength: 6,
                        maxlength: 50
                    }
                },
                messages: {
                    first_name: {
                        required: "Please enter your first name",
                        lettersonly: "First names should only contain letters",
                        maxlength: "First names must be less than 50 characters long."
                    },
                    last_name: {
                        required: "Please enter your last name",
                        lettersonly: "Last name should only contain letters",
                        maxlength: "Last name must be less than 50 characters long."
                    },
                    useremail: {
                        required: "Please enter your email",
                        email: "Please enter valid email",
                        isEmailValid: "Please enter proper email",
                    },
                    userpassword: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long",
                        maxlength: "Passwords must be less than 50 characters long."
                    }
                },
                submitHandler: function(form) {
                    $("#loader").show();
                    $('#registration_btn').addClass('disabledAnchor');
                    var formData = new FormData(form);
                    jQuery.ajax({
                        // url: "https://www.nigerianexportershub.com/register",
                        // url: "https://www.skibussiness.com/ski/signup-logic.php",
                        url: "http://localhost/skibusiness/ski/signup-logic.php",
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(result) {
                            $('#registration_btn').removeClass('disabledAnchor');
                            $('#registration_form').trigger("reset");
                            if (result.status == 'true') {
                                $('.message').php('<p class="alert alert-success">' +
                                    result.msg + '</p>').slideDown(1000);
                            } else {
                                $('.message').php('<p class="alert alert-danger">' + result
                                    .msg + '</p>').slideDown(1000);
                            }
                            $("#loader").hide();
                            setTimeout(function() {
                                $('.message').slideUp(1000);
                            }, 4000);
                        },
                        error: function(data) {
                            var Messages = '';
                            $.each(data.responseJSON.errors, function(key, errors) {
                                Messages += "<p class='alert alert-danger'>" +
                                    errors + "</p>";
                            });
                            $("#loader").hide();
                            $('.message').php(Messages);
                        }
                    });
                }
            });
        });
    </script> -->


        <footer class="main-footer" style="background-color:lightgrey;">
   <!-- <div class="container">
        <div class="footer content-box">
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-img">
                                <a href="index.html">
                                    <h1>E-ExportHub</h1>
                                </a>
                            </div>
                            <p>NEXHub is a platform for different individuals set to meet the purpose of
                                international trade, it has a dynamic electronic and digital platform that
                                connects buyers and sellers who are exporters and importers or domestic vendors
                                along with other value-chain stakeholders, enabling them to carry out
                                transactions in a safe and coordinated manner by the operators of the platform.
                            </p>
                        </div>

                        <div class="col-lg-4">
                            <h3>Benefits <div class="head_bg_blue head_bg_blue1">
                                    <div class="head_bg_round head_bg_round1"></div>
                                </div>
                            </h3>

                            <div class="links_warp">

                                <li><a href="benefits.html">Learn how to export</a></li>
                                <li><a href="benefits.html">Learn what to export</a></li>
                                <li><a href="benefits.html">Learn where to export</a></li>
                                <li><a href="benefits.html">Learn to whom to export</a></li>
                                <li><a href="benefits.html">Get verified off-takers</a></li>-->
                                <!-- <li><a href="benefits">Business Support Benefit</a></li>
                                <li><a href="benefits">Vehicle Trade-in Benefit</a></li>
                                <li><a href="benefits">Education Support Benefit</a></li>
                                <li><a href="benefits">Property Ownership Benefit</a></li>
                                <li><a href="benefits">Organization Support Benefit</a></li> -->
                            </div>
                            <!-- links_warp -->

                        </div>
                        <!-- col-lg-4 -->

                       <!-- <div class="col-lg-4">
                            <h3>get in touch <div class="head_bg_blue head_bg_blue1">
                                    <div class="head_bg_round head_bg_round1"></div>
                                </div>
                            </h3>
                            <div class="links_warp">

                                <p><strong>Corporate Headquarters:</strong><br>
                                    Plot 252, Cadastral Zone C16, Idu Industrial Area 1, Idu, Abuja.</p>

                                <p><strong>Hotlines:</strong><br>
                                    <a href="#"> 07000933622</a> <br>
                                    <a href="#"> 096232996</a> <br>
                                    <a href="#"> 09122223978</a> <br>
                                <p>
                                    <strong>Email:</strong><br>
                                <div class="footer-emil-box">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 96" fill="#fff"
                                        width="18" height="28">
                                        <path
                                            d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z"
                                            data-name="Layer 2"></path>
                                    </svg>
                                    <span> enquiries@nigerianexportershub.com </span>
                                </div>

                                </p>-->

                                <!-- <div class="media_ico">
                                    <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="bird" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="link" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="g_plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </div> -->

                         <!--   </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>-->
    <div class="footer-last-box">
        <div class="container">
            <div class="footer-sub-sec">
                <div class="footer-span">
                    <span>
                        ©2023 Eastern Exporters Hub. All Rights Reserved.
                    </span>
                </div>
                <div class="footer-terms">
                    <p class="second"><a href="terms.php">Terms</a> | <a href="privacy.php">Privacy</a> Powered by - <a
                            href="#" target="_blank">Skibusiness</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="" id="loader" onclick="$(this).hide()" style="display:none;">
        <div class="modal-backdrop-loader">
            <i class="fa fa-spinner fa-spin text-white font-30"
                style="position: absolute;right: 50%;top: 50%;font-size: 26px;"></i></div>
    </div>
</footer>
        <!-- popup manu -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog dialog-popup modal-dialog-centered" role="document">
        <div class="modal-content modal-popup">
            <div class="modal-header header-popup">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class='sing-in-popup'>
                    <div class="login_message"></div>
                    <form action='<?= ROOT_URL ?>ski/signin-logic.php' method='POST'>
                        <!-- <input type="hidden" name="_token" value="HGYLUX9faW5bU01EPZeCo2eHPa13A7fVaEIFdyvZ">                         -->
                        <div class='sing-in-box'>
                            <div class='popup-input'><label for=''>Email</label><input type='text'
                                    name='email' placeholder='Email' value=''>
                                                            </div>
                            <div class='popup-input'><label for=''>Password</label><input type='password'
                                    name='password' placeholder='Password' value=''>
                                                            </div>
                            <div class='popup-btn'><button type='submit' name="signin">Login</button></div>
                        </div>
                    </div>
                    <div class="text-center mt-3" >
                        <a href="forgot-password.php" class="forgotpasswordbtn">
                            Forgot password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/custom.js"></script>
    
    
    </body>

</html>
