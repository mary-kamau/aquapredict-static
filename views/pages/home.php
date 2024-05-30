<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title>AquaPredict: The Future Of Swimming With Performance Prediction</title>

    <meta name="description"
        content="Enhance Swimming Perfomance with AI Driven Insights And Tailored Training Plans" />
    <meta name="keywords"
        content="swimming, prediction, aqua, athletes, pools, olympics, training, coach, aquatic, backstroke, freestyle, breaststroke, butterfly, open sea, ocean, ocean swimming, ironman" />
    <meta name="author" content="AquaPredict">
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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

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

        <section class="it-industries-section">
            <div class="section-header">
                <!-- <span class="small-heading">best it service</span> -->
                <!-- <h2 class="section-title">It Industries We're Offering</h2> -->
            </div>
            <div class="industries-container">
                <div class="industry-card">
                    <div class="icon-lg">
                        <i class="icon icon-linegraph"></i>
                    </div>
                    <!-- <div class="card-icon"><i class="icon icon-business"></i></div> -->
                    <h3>At the Forefront of Swimming Analytics and Machine Learning</h3>
                    <p>AquaPredict employs sophisticated
                        AI algorithms to evaluate extensive swimmer data.Equipping UK swimmers and coaches with a
                        powerful tool for
                        strategic planning and enhanced outcomes.</p>
                    <a href="#" class="card-link"><i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="industry-card">
                    <div class="icon-lg">
                        <i class="icon icon-piechart"></i>
                    </div>
                    <h3>Real-Time Analytics</h3>
                    <p>Gain instant insights with our real-time analytics feature, providing you with up-to-the-minute
                        data to make informed decisions swiftly.</p>
                    <a href="#" class="card-link"><i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="industry-card">
                    <div class="icon-lg"><i class="icon icon_cogs"></i></div>
                    <h3>Seamless Integration</h3>
                    <p>Experience hassle-free integration with existing systems,
                        thanks to our user-friendly API that ensures smooth connectivity and data flow.</p>
                    <a href="#" class="card-link"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- <div class="contact-info">
                <span>Provide IT services to hundreds of customers</span>
                <a href="tel:+8801310069824">+88 01310-069824</a>
            </div> -->
        </section>


        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->
        <section class="it-solutions-section">
            <div class="section-header">
                <!-- <span class="small-heading">services <span class="highlight">and features</span></span> -->
                <h2 class="section-title">AquaPredict's <span class="highlight">Features</span> & Services</h2>
            </div>
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">A</div>
                            <h3>AI-Driven Insights</h3>
                            <div class="card-icon-img"><i class="icon icon-layers"></i></div>
                            <a href="#" class="card-link" data-target="#details-1">Read Out More</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">M</div>
                            <h3>Mobile Optimisation</h3>
                            <div class="card-icon-img"><i class="icon icon-pictures"></i></div>
                            <a href="#" class="card-link" data-target="#details-2">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">S</div>
                            <h3>Advanced Security Measures</h3>
                            <div class="card-icon-img"><i class="icon icon-shield"></i></div>
                            <a href="#" class="card-link" data-target="#details-3">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">D</div>
                            <h3>Data Visualisation</h3>
                            <div class="card-icon-img"><i class="icon icon-chart-bar"></i></div>
                            <a href="#" class="card-link" data-target="#details-4">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">C</div>
                            <h3>Cloud-Based Solutions</h3>
                            <div class="card-icon-img"><i class="icon icon-cloud"></i></div>
                            <a href="#" class="card-link" data-target="#details-5">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">P</div>
                            <h3>Personalised Notifications</h3>
                            <div class="card-icon-img"><i class="icon icon-lightbulb"></i></div>
                            <a href="#" class="card-link" data-target="#details-6">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">C</div>
                            <h3>Collaborative Tools</h3>
                            <div class="card-icon-img"><i class="icon icon-chart-bar"></i></div>
                            <a href="#" class="card-link" data-target="#details-7">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">D</div>
                            <h3>Comprehensive Reporting</h3>
                            <div class="card-icon-img"><i class="icon icon-analytics"></i></div>
                            <a href="#" class="card-link" data-target="#details-8">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">D</div>
                            <h3>Customer Support</h3>
                            <div class="card-icon-img"><i class="icon icon-heart"></i></div>
                            <a href="#" class="card-link" data-target="#details-9">Read Out More</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="it-solution-card">
                            <div class="card-icon">M</div>
                            <h3>Multilingual Support</h3>
                            <div class="card-icon-img"><i class="icon icon-tools"></i></div>
                            <a href="#" class="card-link" data-target="#details-10">Read Out More</a>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>
    <div id="details-section-container">
        <section id="details-1" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/light-bulb-ideas-creative-design-graphic.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">UNLOCK VALUABLE INSIGHTS WITH OUR AI-DRIVEN ANALYSIS, PROVIDING YOU WITH
                        INTELLIGENT RECOMMENDATIONS TO ENHANCE YOUR STRATEGY.</p>
                </div>
            </div>
        </section>
        <section id="details-2" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/representation-user-experience-interface-design.jpg"
                        alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">ACCESS OUR PLATFORM ON THE GO WITH MOBILE OPTIMISATION, ENSURING YOU
                        HAVE THE TOOLS YOU NEED, WHENEVER YOU NEED THEM.</p>
                </div>
            </div>
        </section>
        <section id="details-3" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/standard-quality-control-concept-m.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">BENEFIT FROM UNPARALLELED SECURITY WITH OUR ADVANCED ENCRYPTION, AND
                        DATA PROTECTION MEASURES, KEEPING YOUR INFORMATION SAFE AND SECURE.</p>
                </div>
            </div>
        </section>
        <section id="details-4" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-rdne-stock-project-7947663.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">VISUALISE YOUR DATA WITH OUR DYNAMIC TOOLS.</p>
                </div>
            </div>
        </section>
        <section id="details-5" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/cloud-computing-technology-scheme-with-long-shadows/42972.jpg"
                        alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">LEVERAGE THE POWER OF CLOUD COMPUTING WITH OUR CLOUD-BASED SOLUTIONS,
                        OFFERING SCLABLITY AND FLEXIBILITY WITHOUT THE HEAVY INFRASTRUCTIRE COSTS.</p>
                </div>
            </div>
        </section>
        <section id="details-6" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-emmanuel-jason-eliphalet-10054188.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">STAY INFORMED WITH PERSONALISED NOTIFICATIONNS THAT KEEP YOU UPDATED ON
                        IMPORTANT DEVELOPMENTS, TAILORED SPECIFICALLY TO YOUR INTERESTS,</p>
                </div>
            </div>
        </section>
        <section id="details-7" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-kindel-media-7688336.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">ENHANCE TEAMWORK WITH OUR COLLABORATIVE TOOLS, ENSURING YOU HAVE THE
                        TOOLS YOU NEED, WHENEVER YOU NEED THEM.</p>
                </div>
            </div>
        </section>
        <section id="details-8" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-lukas-669612.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">COMPILE COMPREHENSIVE REPORTS WITH EASE, OFFERING DETAILED INSIGHTS AND
                        ANALYTICS TO GUIDE YOUR DECISION-MAKING PROCESS.</p>
                </div>
            </div>
        </section>
        <section id="details-9" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-tima-miroshnichenko-5453832.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">RELY ON OUR 24/7 CUSTOMER SUPPORT FOR ASSISTANCE AT ANY HOUR, ENSURING
                        YOU RECEIVE HELP WHENEVER YOU NEED IT.</p>
                </div>
            </div>
        </section>
        <section id="details-10" class="details-section">
            <div class="details-content">
                <div class="details-image">
                    <img src="/assets/images/features/pexels-nastyasensei-335393.jpg" alt="Details Image">
                </div>
                <div class="details-text">
                    <p class="description-text">BREAK DOWN LANGUAGE BARRIERS WITH MULTIKINGUAL SUPPORT, MAKING OUR
                        PLATFORM ACCESSIBLE TO A DIVERSE USER BASE.</p>
                </div>
            </div>
        </section>
    </div>
    <!-- =============================
             /END FEATURES TAB
        ============================== -->


    <!-- =============================
             PRICING SECTION
        ============================== -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="wrapper-lg">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Get Started Today</h2>
                        <p class="large">Choose the plan that suits you best. 30 Days Free Trial with all plans.</p>
                    </div>
                </div>

                <!-- Pricing Tabs-->
                <div class="row grid-md">
                    <div class="col-sm-4">
                        <div class="pricing-tab">
                            <p class="price">£0.00<span>/mo</span></p>

                            <h4>Standard Tier</h4>
                            <ul class="pricing-features">
                                <li>Basic Performance Analysis</li>
                                <li>Access to fundamental AI-driven analytics</li>
                                <li>Providing insights on basic performance metrics.</li>
                            </ul>
                            <a href="https://buy.stripe.com/test_aEUeWCdB72RHb16aEE" class="btn btn-color">Subscribe</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-tab">
                            <div class="ribbon">
                                <h5 class="popular">Popular</h5>
                            </div>
                            <p class="price">£9.99<span>/mo</span></p>
                            <h4>Professional Tier</h4>
                            <ul class="pricing-features">
                                <li>Advanced Performance Analysis</li>
                                <li>Enhanced AI analytics.</li>
                                <li>Deeper insights into performance trends, technique, and endurance.</li>
                            </ul>
                            <a href="https://buy.stripe.com/test_4gw01I40x4ZP5GM145" class="btn btn-color">Subscribe</a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="pricing-tab">
                            <p class="price">£19.99<span>/mo</span></p>
                            <h4>Elite Tier</h4>
                            <ul class="pricing-features">
                                <li>Comprehensive Performance Analysis</li>
                                <li>The most advanced level of AI analysis, providing intricate details on all aspects
                                    of swimming performance</li>
                            </ul>
                            <a href="https://buy.stripe.com/test_3csdSybsZ77X6KQ4gi" class="btn btn-color">Subscribe</a>
                        </div>
                    </div>
                </div><!-- /End Row Pricing Tab -->
            </div><!-- /End Wrapper -->
        </div><!-- /End Container -->
    </section>

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