<?php include ('./views/pages/header.php');?>

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
        <header class="header" id="top" data-stellar-background-ratio="0.5"
            style="background: url('../assets/images/hero-images/hero-placeholder-underwater.jpg') no-repeat center top fixed; -webkit-background-size: cover; -moz-background-size: cover; background-size: cover;">
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
                                    <iframe src="https://aquapredict-frontend.onrender.com/login" frameborder="0"
                                        width="100%" height="500"></iframe>
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
                                    <iframe src="https://aquapredict-frontend.onrender.com/signup" frameborder="0"
                                        width="100%" height="500"></iframe>
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
                                    <!-- <a href="#mobile-download" class="btn btn-color scrollto"><i
                                            class="icon icon_cloud-download_alt"></i>Download the App</a> -->
                                </div>

                            </div><!-- /End Intro-Section -->
                        </div><!-- /End Col -->
                        <!-- App Showcase Image -->
                        <!-- <div class="col-sm-6 hidden-xs">
                            <div class="app-box">
                                <img src="/assets/images/devices.png" alt="" class="img-responsive">
                            </div>
                        </div> -->

                    </div><!-- /End Row -->
                </div><!-- /End Container Hero-Section -->


            </div><!-- /End Background Overlay -->
        </header>

        <?php include ('./views/pages/about.php'); ?>

        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->
        <?php include ('./views/pages/features.php'); ?>
        <!-- =============================
             /END FEATURES TAB
        ============================== -->


        <!-- =============================
             PRICING SECTION
        ============================== -->
        <?php include ('./views/pages/pricing.php'); ?>
        <!-- =============================
             /END PRICING SECTION 
        ============================== -->

    </div>
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
                            onclick="window.location.href='https://aquapredict-frontend.onrender.com/signup';">Join
                            Today!</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- =============================
             /END SIGNUP SECTION 
        ============================== -->


    <!-- =======================================================
             TESTIMONIALS WITH PRESS/CLIENTS LOGOS
        ============================================================ -->
        <?php include ('./views/pages/testimonials.php'); ?>
    <!-- =============================
             /END TESTIMONIALS
        ============================== -->


    <!-- ==================================================
            TEAM
        ======================================================= -->
    <!-- =============================
             /END TEAM SECTION 
        ============================== -->


    <!-- ==================================================
            MOBILE DOWNLOAD SECTION
        ======================================================= -->
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

    <?php include ('./views/pages/footer.php') ?>

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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <!-- Custom Script -->
    <script src="/assets/js/custom.js"></script>
</body>

</html>