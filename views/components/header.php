<?php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title>AquaPredict</title>

    <meta name="description"
        content="Responsive Landing Page for Presenting Your Startup: Saas, Mobile or Web Application" />
    <meta name="keywords"
        content="smartmvp, startup theme, startup template, startup example, startup landing page, one page, responsive, app landing, html template, mobile application, responsive landing page" />
    <meta name="author" content="ThemeDept">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICON  -->
    <link rel="icon" href="/assets/images/favicon/favicon.ico">
    <!-- =========================
       STYLESHEETS 
    ============================== -->

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="/assets/css/icons/icons.min.css">

    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee"
        rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- COLORE STYLESHEET -->
    <!-- Change here the Main Color of the Site: Choose your favorite predefined color from /assets/css/colors.css -->
    <link rel="stylesheet" href="/assets/css/colors/red.css" title="red">


    <!--[if lt IE 9]>
            <script src="/assets/js/plugins/html5shiv.min.js"></script>
            <script src="/assets/js/plugins/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="main-wrapper">

        <!-- =========================
             PRELOADER
        ============================== -->
        <div class="preloader">
            <div class="loader-container">
                <div class="text-logo">AquaPredict</div>
                <div class="signal"></div>
            </div>
        </div>


        <!-- =========================
             HEADER
        ============================== -->
        <header class="header" id="top" data-stellar-background-ratio="0.5">
            <!-- <video autoplay muted loop>
                <source src="/assets/videos/Presentation (16_9) 1920x1080 px.mp4" type="video/mp4">
            </video> -->
            <!-- Background Overlay -->
            <div class="overlay">

                <!-- =========================================
                     Navigation
                ========================================== -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Navbar-Header -->
                                <div class="navbar-header">

                                    <!-- Mobile Menu -->
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                        type="button">
                                        <i class="icon icon_menu"></i>
                                    </button>

                                    <!-- Text-Logo -->
                                    <a href="#top" class="navbar-brand scrollto" title="AquaPredict">
                                        <span class="text-logo">AquaPredict</span>
                                    </a>

                                    <!-- Image-Logo: Remove this comments and the section above Text-Logo if you want to add an Image-Logo (recommended sizes -> max-height:50, max-width:200) 

                                    <a href="#top" class="navbar-brand img-logo scrollto" title="SmartMvp">
                                        <img src="/assets/images/logo.png" alt="Logo">
                                    </a> 
                                    -->

                                </div><!-- /End Navbar-Header -->

                                <!-- Navbar-Collapse -->
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Menu Items -->
                                        <li><a href="#about" title="" class="scrollto">About</a></li>
                                        <li><a href="#features" title="" class="scrollto">Features</a></li>
                                        <li><a href="#pricing" title="" class="scrollto">Pricing</a></li>
                                        <li><a href="#testimonials" title="" class="scrollto">Testimonials</a></li>
                                        <li><a class="btn btn-nav" data-toggle="modal" href="javascript:void(0)"
                                                onclick="window.location.href='https://aquapredict-frontend.onrender.com/login';">Login</a>
                                        </li>
                                        <li><a class="btn btn-nav btn-white" data-toggle="modal"
                                                href="javascript:void(0)"
                                                onclick="window.location.href='https://aquapredict-frontend.onrender.com/signup';">Sign
                                                Up</a></li>
                                    </ul>
                                </div><!-- /End Navbar-Collapse -->
                            </div><!-- /End Col -->
                        </div><!-- /End Row -->
                    </div><!-- /End Container -->
                </nav><!-- /End Sticky Navigation -->

                <!-- =========================================
                     Login/Signup Bootstrap Modal
                ==========================================  -->
                <div class="modal fade login" id="loginModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal-Header -->
                            <div class="modal-header">
                                <!-- Close Button -->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="icon icon_close_alt2"></i>
                                </button>
                                <!-- Modal-Header Title-->
                                <h4 class="modal-title">Sign in to <span>AquaPredict</span></h4>
                                <p class="modal-subtitle">Enter your email and password</p>
                            </div><!-- /End Modal-Header -->

                            <!-- Modal-Body Content -->
                            <div class="modal-body">
                                <div class="box">
                                    <iframe src="https://aquapredict-frontend.onrender.com/login" frameborder="0" width="100%"
                                        height="500"></iframe>
                                </div><!-- /End Login Form Box -->
                            </div><!-- /End Modal-Body -->

                            <!-- Modal-Footer -->
                            <div class="modal-footer">
                                <!-- Login-Footer. Redirect to Signup-Modal-->
                                <div class="forgot login-footer">
                                    <span>Don't have an account?
                                        <a href="javascript: showRegisterForm();">Sign up.</a>
                                    </span>
                                </div>

                                <div class="forgot login-footer">
                                    <span>Forgot Password?
                                        <a href="javascript: redirectForgot();">Forgot Password</a>
                                    </span>
                                </div>

                                <!-- <div class="forgot-password-link">
                                    <a href="/forgot-password">Forgot Password?</a>
                                </div> -->
                                <!-- Signup-Footer. Redirect to Login-Modal -->
                                <div class="forgot register-footer" style="display:none">
                                    <span>Already have an account?</span>
                                    <a href="javascript: showLoginForm();">Login</a>
                                </div>
                            </div><!-- /End Modal-Footer -->

                        </div><!-- /End Modal Content -->
                    </div><!-- /End Modal Dialog -->
                </div><!-- /End Modal -->

                <div class="modal fade signup" id="signUpModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal-Header -->
                            <div class="modal-header">
                                <!-- Close Button -->
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i class="icon icon_close_alt2"></i>
                                </button>
                                <!-- Modal-Header Title-->
                                <h4 class="modal-title">Sign Up for <span>AquaPredict</span></h4>
                                <!-- <p class="modal-subtitle">Enter your email and password</p> -->
                            </div><!-- /End Modal-Header -->

                            <!-- Modal-Body Content -->
                            <div class="modal-body">

                                <div class="box">
                                    <!-- Signup Form -->
                                    <iframe src="https://aquapredict-frontend.onrender.com/signup" frameborder="0" width="100%"
                                        height="500"></iframe>
                                </div><!-- /End Signup Form Box -->
                            </div><!-- /End Modal-Body -->
                            <!-- Modal-Footer -->
                        </div><!-- /End Modal Content -->
                    </div><!-- /End Modal Dialog -->
                </div><!-- /End Modal -->


                <!-- =========================================
                     Hero-Section
                ========================================== -->
                <div class="container vmiddle hero-app">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="hero-section">

                                <!-- Welcome - Hero Message -->
                                <h1 class="text-white">Dive into the Future of Swimming with AquaPredict's Performance
                                    Prediction Technology</h1>
                                <p class="text-white">Where technology meets the tide, providing precise performance
                                    predictions to shape tomorrow's swimming stars</p>

                                <!-- Learn More & Video Buttons -->
                                <div class="btn-box">
                                    <a href="#about" class="btn btn-ghost scrollto">Learn More</a>
                                    <a href="#mobile-download" class="btn btn-color scrollto"><i
                                            class="icon icon_cloud-download_alt"></i>Download the App</a>
                                </div>

                            </div><!-- /End Intro-Section -->
                        </div><!-- /End Col -->
                        <!-- App Showcase Image -->
                        <div class="col-sm-6 hidden-xs">
                            <div class="app-box">
                                <img src="/assets/images/devices.png" alt="" class="img-responsive">
                            </div>
                        </div>

                    </div><!-- /End Row -->
                </div><!-- /End Container Hero-Section -->


            </div><!-- /End Background Overlay -->
        </header>

        <?php include (__DIR__ . '/../pages/about.php'); ?>

        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->

        <?php include (__DIR__ . '/../pages/features.php'); ?>
        <!-- =============================
             /END FEATURES TAB
        ============================== -->


        <!-- ==================================================
            SIGNUP DIVIDER
        ======================================================= -->
        <section id="canvas-bg" class="dark-bg signup-divider">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-white">Start Your AquaPredict Journey Today!</h2>
                            <p class="large text-white">Become part of the AquaPredict community today and dive into a
                                world of
                                detailed performance analysis and tailored
                                training plans.</p>
                            <!-- <p class="signup-handwritten text-white">Why wait? Start now! <br>No credit card needed</p> -->
                        </div>
                    </div>

                    <div class="row">
                        <form id="signup-divider" role="form">
                            <a class="btn btn-color" data-toggle="modal" href="javascript:void(0)"
                                onclick="window.location.href='https://aquapredict-frontend.onrender.com/signup';">Join Today!</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- =============================
             /END SIGNUP SECTION 
        ============================== -->


        <!-- =============================
             PRICING SECTION
        ============================== -->
        <?php include (__DIR__ . '/../pages/pricing.php'); ?>
        <!-- =============================
             /END PRICING SECTION 
        ============================== -->


        <!-- =======================================================
             TESTIMONIALS WITH PRESS/CLIENTS LOGOS
        ============================================================ -->
        <?php include (__DIR__ . '/../pages/testimonials.php'); ?>
        <!-- =============================
             /END TESTIMONIALS
        ============================== -->


        <!-- ==================================================
            TEAM
        ======================================================= -->
        <!-- <section class="team" id="team">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Meet the Team</h2>
                            <p class="large">We are a passionate team of designers, developers and marketing experts
                                with headquarters in Melbourne.</p>
                        </div>
                    </div>
                    <div class="row">
                   
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="/assets/images/team-placeholder.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Lukas Mayr</h4>
                            <p class="team-bio"><span class="text-color">Lead designer</span> with experience in most
                                things visual. He loves trying out new techniques and finding the perfect solution for
                                any kind of requirements.</p>
                        </div>
                 
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="/assets/images/team-placeholder.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Isabella Knudsen</h4>
                            <p class="team-bio"><span class="text-color">Director of Growth and Customer
                                    Acquisition</span>. She enjoys the finer details of a project, considering every
                                stage of its journey from planning to completion.</p>
                        </div>
                 
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="/assets/images/team-placeholder.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Adrien Simon</h4>
                            <p class="team-bio"><span class="text-color">Full stack hacker, product design, backend
                                    development, user interface and everything in between.</span> He likes to keep
                                things simple and focus on the little details.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section> -->
        <!-- =============================
             /END TEAM SECTION 
        ============================== -->


        <!-- ==================================================
            MOBILE DOWNLOAD SECTION
        ======================================================= -->
        <!-- <section class="mobile-download light-bg" id="mobile-download">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Download the App</h2>
                            <p class="large">Don't miss the chance to get our amazing Mobile Application. Get connected
                                anytime.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <h3>Supercharge your Productivity</h3>
                            <p class="mobile-text">With an online dashboard and a mobile app, you'll have full control
                                of your account and see your usage in real-time. <span class="text-color">Even more
                                    convenient!</span></p>
                            <a href="#" class="btn btn-color"><i class="icon icon_cloud-download_alt"></i>Download
                                Now!!</a>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="shot-container">
                                <div id="owl-carousel-shots-phone" class="owl-carousel">
                                    <div class="owl-container text-center shots-modal">
                                        <img src="/assets/images/app-screenshots/app-screenshot1alt.jpg" alt=""
                                            title="this is the title" />
                                    </div>
                                    <div class="owl-container text-center shots-modal">
                                        <img src="/assets/images/app-screenshots/app-screenshot2alt.jpg" alt=""
                                            title="this is the title" />
                                    </div>
                                    <div class="owl-container text-center shots-modal">
                                        <img src="/assets/images/app-screenshots/app-screenshot3alt.jpg" alt=""
                                            title="this is the title" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4 right-features">
                            
                            <div class="col-sm-4 col-md-12">
                                <h4>Get Notified</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam inventore.</p>
                            </div>
                            <div class="col-sm-4 col-md-12">
                                <h4>Add Data in Seconds</h4>
                                <p>Magnam beatae similique molestias incidunt, assumenda dolorem ea deserunt.</p>
                            </div>
                            <div class="col-sm-4 col-md-12">
                                <h4>Real Time Alerts</h4>
                                <p>Accusantium at sapiente mollitia asperiores quisquam rerum hic et animi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- =============================
             /END MOBILE DOWNLOAD SECTION 
        ============================== -->


        <!-- ==================================================
            NEWSLETTER AND SOCIAL DIVIDER
        ======================================================= -->
        <!-- =============================
             /END NEWSLETTER SECTION 
        ============================== -->


        <!-- ==================================================
            FOOTER
        ======================================================= -->
        <footer class="footer dark-bg" id="footer">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <!-- Footer Left Col -->
                        <div class="col-md-5">
                            <!-- Logo -->
                            <a href="#top" class="scrollto" title="AquaPredict">
                                <span class="text-logo">AquaPredict</span>
                            </a>
                        </div>
                        <!-- Footer Contact Col -->
                        <?php include (__DIR__ . '/../pages/contacts.php'); ?>
                        <!-- Footer Right Col: Twitter Feed -->
                        <!-- <div class="col-md-4">
                            <h5 class="text-white">Recent Tweets</h5>
                            <div class="tweet"></div>
                        </div> -->

                        <!-- Footer Menu and Copy -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="footer-nav">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a class="nav-footer-link"
                                            href="https://docs.google.com/document/d/1ZUXlvDDxSxG72DLxE5DOzaOjkBtKMGUjelDGKQYbspE/edit#heading=h.bwy8qj1gw37k"
                                            target="_blank">Terms and Conditions</a>
                                    </li>
                                    <li>
                                        <a class="nav-footer-link"
                                            href="https://docs.google.com/document/d/1HnWm8PhkhBTKqwZs35NnZr7Nv-jWBweHwBrcDavikgU/edit"
                                            target="_blank">Privacy Notice</a>
                                    </li>
                                    <li>
                                        <a class="nav-footer-link"
                                            href="https://docs.google.com/document/d/1bK1aEQA_hVMCwSsayDxwn-NIyc_RpteXgHXYz7naYbw/edit"
                                            target="_blank">Acceptable Use Notice</a>
                                    </li>
                                    <li>
                                        <a class="nav-footer-link"
                                            href="https://docs.google.com/document/d/1IuE6sNsyePEW-V7OROyv2s1NTsHIfJ_CPNCO2E-UM9E/edit"
                                            target="_blank">Cookies Policy</a>
                                    </li>
                                    <li>
                                        <a class="nav-footer-link"
                                            href="https://docs.google.com/document/d/12VHKwDCkwcE9lRe6ZvjptnsH8dv1k6gO-GYE9Elu5Cw/edit"
                                            target="_blank">Accessibility</a>
                                    </li>
                                </ul>
                                <!-- <p class="footer-copy">&copy; 2014-16 - SmartMvp. Original Design by <a
                                        href="http://themedept.com">ThemeDept.</a></p> -->
                            </div>
                        </div>

                    </div><!-- End Row -->
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </footer>

    </div>

    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="/assets/js/plugins/jquery1.11.0.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="/assets/js/plugins/modernizr.custom.min.js"></script>
    <script src="/assets/js/plugins/plugins.min.js"></script>
    <script src="/assets/js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="/assets/js/custom.js"></script>



</body>

</html>