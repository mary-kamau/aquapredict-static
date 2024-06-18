<?php include ('./views/pages/header.php'); ?>

<body style="padding-top: 60px;">
    <header class="header" id="top">
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
                                <li><a href="/" title="">Home</a></li>
                                <li><a href="/about" title="">About</a></li>
                                <li><a href="/features" title="">Features</a></li>
                                <li><a href="/pricing" title="">Pricing</a></li>
                                <li><a href="/testimonials" title="">Testimonials</a></li>
                                <li><a class="btn btn-nav" data-toggle="modal" href="javascript:void(0)"
                                        onclick="window.location.href='https://aquapredict-frontend.onrender.com/login';">Login</a>
                                </li>
                                <li><a class="btn btn-nav btn-white" data-toggle="modal" href="javascript:void(0)"
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
        <div class="privacy-header">
            <h1>Privacy Policy</h1>
        </div>
    </header>

    <main style="padding-top: 30px;">
        <section class="privacy-content">
            <p>AquaPredict ("we", “us”) is committed to protecting and respecting your privacy.
                This notice is made available to you on our homepage and on every other page of www.aquapredict.co.uk
                (our site). This notice (together with our Terms of Website Use and any other documents referred to in
                it) sets out the basis on which any personal data we collect from you or that you provide to us, via our
                site, will be processed by us. Please read the following carefully to understand our views and practices
                regarding your personal data and how we will treat it.
                For the purpose of applicable data protection law, the data controller is AquaPredict Ltd of 4 Durham
                Workspace, Abbey Road, Pity Me, Durham DH1 5JZ.
            </p>
        </section>
    </main>
    <?php include ('./views/pages/footer.php'); ?>
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