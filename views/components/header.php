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
    <!-- <link rel="icon" href="/assets/images/favicon/favicon.ico"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- =========================
       STYLESHEETS 
    ============================== -->

    <!-- Slick CSS -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" /> -->

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

        <?php include (__DIR__ . '/../pages/about.php'); ?>

        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->
        <?php include (__DIR__ . '/../pages/features.php'); ?>

        <!-- <section class="features-section">
            <div class="section-header">
                <span class="small-heading">service <span class="highlight">it solutions</span></span>
                <h2 class="section-title">All Professional <span class="highlight">IT Solutions</span> & Services</h2>
            </div>
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item">
                        <div class="feature-card"
                            data-description="UNLOCK VALUABLE INSIGHTS WITH OUR AI-DRIVEN ANALYSIS,
                                    PROVIDING YOU WITH INTELLIGENT RECOMMENDATIONS TO ENHANCE YOUR STRATEGY."
                            data-bg="url('/assets/images/features/usrr_interact_images.png')">
                            <div class="card-icon">A</div>
                            <h3>AI-Driven Insights</h3>
                            <a href="#" class="card-link">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card" data-title="Voice Over Internet Protocol"
                            data-description="Details about Voice Over Internet Protocol"
                            data-bg="url('images/voip.jpg')">
                            <div class="card-icon">V</div>
                            <h3>Voice Over Internet Protocol</h3>
                            <a href="#" class="card-link">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card" data-title="Clouds Backup Services"
                            data-description="Details about Clouds Backup Services"
                            data-bg="url('images/cloud-backup.jpg')">
                            <div class="card-icon">C</div>
                            <h3>Clouds Backup Services</h3>
                            <a href="#" class="card-link">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card" data-title="Mobile and Remote Networking"
                            data-description="Details about Mobile and Remote Networking"
                            data-bg="url('images/mobile-networking.jpg')">
                            <div class="card-icon">M</div>
                            <h3>Mobile and Remote Networking</h3>
                            <a href="#" class="card-link">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="feature-card" data-title="Data Backup and Restoration"
                            data-description="Details about Data Backup and Restoration"
                            data-bg="url('images/data-backup.jpg')">
                            <div class="card-icon">D</div>
                            <h3>Data Backup and Restoration</h3>
                            <a href="#" class="card-link">Read Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="details-section" id="details-section">
            <p id="details-description"></p>
        </section> -->
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
        <section class="testimonial-section">
            <h2 class="section-title">Transforming Real Lives. Discover Our User Testimonials.</h2>
            <div class="testimonials-container">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="quote">AquaPredict revolutionised my coaching approach.The accuracy in predicting my
                            swimmers' progress is truly remarkable.</p>
                        <div class="rating">★★★★★</div>
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/testimonials/pexels-andrea-piacquadio-948873.jpg" alt="Olivia Smith">
                        <div class="author-info">
                            <p class="author-name">Olivia Smith</p>
                            <p class="author-title">London, UK</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="quote">As a professional swimmer, AquaPredict's insights have been invaluable.It's
                            like
                            having a futuristic coach!</p>
                        <div class="rating">★★★★★</div>
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/testimonials/pexels-kindel-media-8688525.jpg" alt="Cameron Williamson">
                        <div class="author-info">
                            <p class="author-name">Ethan Taylor</p>
                            <p class="author-title">Manchester, UK</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial">
                    <div class="testimonial-content">
                        <p class="quote">I was sceptical at first, but AquaPredict's precise forecasts have improved my
                            training efficiency incredibly.</p>
                        <div class="rating">★★★★★</div>
                    </div>
                    <div class="testimonial-author">
                        <img src="/assets/images/testimonials/pexels-tima-miroshnichenko-6012262.jpg"
                            alt="Leslie Alexander">
                        <div class="author-info">
                            <p class="author-name">Amelia Johnson</p>
                            <p class="author-title">Edinburgh, Scotland</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <footer class="footer dark-bg" id="footer">
            <div class="footer-item">
                <span class="text-logo">About Us</span>
                <p>Navigate through AquaPredict's offerings with our footer links,
                    including detailed insights into our
                    technology, user testimonials,
                    and how to get started on improving your performance.</p>
            </div>

            <div class="footer-item">
                <span class="text-logo">Contact</span>
                <ul>
                    <li class="mt-3">
                        <a href="mailto:hello@aquapredict.co.uk">hello@aquapredict.co.uk</a>
                    </li>
                    <li>
                        Unit 4, Durham Workspace,
                    </li>
                    <li>Abbey Road, Durham DH1 5JZ</li>
                    <li>
                        0044(0)3331886566
                    </li>
                    <li>
                        <a href="https://aquapredict.co.uk" class="contact-link">https://aquapredict.co.uk</a>
                    </li>
                    <li>
                        Ⓒ AquaPredict Ltd
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <span class="text-logo">Links</span>
                <ul>
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
            </div>

            <div class="footer-item">
                <span class="text-logo">Newsletter</span>
            </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <!-- Custom Script -->
    <script src="/assets/js/custom.js"></script>



</body>

</html>