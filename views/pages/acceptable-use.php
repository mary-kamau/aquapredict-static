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
        <div class="acceptable-use-image">
            <img src="/assets/images/AcceptableUseNotice.png" alt="Details Image">
        </div>
        <div class="acceptable-use-notice-header">
            <h1>Acceptable Use Notice</h1>
        </div>
    </header>

    <div class="container content">
        <p>This acceptable use notice sets out the terms between you and us under which you may access our website <a
                href="http://www.africantrade.events" style="color:blue;text-decoration:underline;">www.africantrade.events</a> (our site). This acceptable use notice
            applies to all users of, and visitors to, our site.</p>
        <p>Your use of our site means that you accept, and agree to abide by, all the terms and notices in this
            acceptable use notice, which supplement our terms of website use.</p>
        <p><a href="http://www.africantrade.events" style="color:blue;text-decoration:underline;">www.africantrade.events</a> is a site operated by African Trade
            Events Limited (we or us). We are registered in England and Wales under company number 15398624 and we have
            our registered office at 4 Durham Workspace, Abbey Road, Pity Me, Durham DH1 5JZ.</p>

        <div class="acceptable-use-notice-header">
            <h2>Prohibited uses</h2>
        </div>
        <p>You may use our site only for lawful purposes. You may not use our site:</p>
        <ul>
            <li>In any way that breaches any applicable local, national or international law or regulation.</li>
            <li>In any way that is unlawful or fraudulent or has any unlawful or fraudulent purpose or effect.</li>
            <li>For the purpose of harming or attempting to harm minors in any way.</li>
            <li>To send, knowingly receive, upload, download, use or re-use any material which does not comply with our
                content standards (see below).</li>
            <li>To transmit, or procure the sending of, any unsolicited or unauthorised advertising or promotional
                material or any other form of similar solicitation (spam).</li>
            <li>To knowingly transmit any data, send or upload any material that contains viruses, Trojan horses, worms,
                time-bombs, keystroke loggers, spyware, adware or any other harmful programs or similar computer code
                designed to adversely affect the operation of any computer software or hardware.</li>
        </ul>
        <p>You also agree:</p>
        <ul>
            <li>Not to reproduce, duplicate, copy or re-sell any part of our site in contravention of the provisions of
                our terms of website use.</li>
            <li>Not to access without authority, interfere with, damage or disrupt:</li>
            <ul>
                <li>any part of our site;</li>
                <li>any equipment or network on which our site is stored;</li>
                <li>any software used in the provision of our site; or</li>
                <li>any equipment or network or software owned or used by any third-party.</li>
            </ul>
        </ul>

        <div class="acceptable-use-notice-header">
            <h2>Interactive services</h2>
        </div>

        <p>We may from time to time provide interactive services on our site, including, without limitation:</p>
        <ul>
            <li>Chat rooms.</li>
            <li>Bulletin boards.</li>
            <li>Comments.</li>
        </ul>
        <p>Where we do provide any interactive service, we will provide clear information to you about the kind of
            service offered, if it is moderated and what form of moderation is used (including whether it is human or
            technical).</p>
        <p>We will do our best to assess any possible risks for users (and in particular, for children) from third
            parties when they use any interactive service provided on our site, and we will decide in each case whether
            it is appropriate to use moderation of the relevant service (including what kind of moderation to use) in
            the light of those risks. However, we are under no obligation to oversee, monitor or moderate any
            interactive service we provide on our site, and we expressly exclude our liability for any loss or damage
            arising from the use of any interactive service by a user in contravention of our content standards, whether
            the service is moderated or not.</p>
        <p>The use of any of our interactive services by a minor is subject to the consent of their parent or guardian.
            We advise parents who permit their children to use an interactive service that it is important that they
            communicate with their children about their safety online, as moderation is not foolproof. Minors who are
            using any interactive service should be made aware of the potential risks to them.</p>
        <p>Where we do moderate an interactive service, we will normally provide you with a means of contacting the
            moderator, should a concern or difficulty arise.</p>


        <div class="acceptable-use-notice-header">
            <h2>Content standards</h2>
        </div>
        <p>These content standards apply to any and all material which you contribute to our site (contributions), and
            to any interactive services associated with it.</p>
        <p>You must comply with the spirit and the letter of the following standards. The standards apply to each part
            of any contribution as well as to its whole.</p>
        <p>Contributions must:</p>
        <ul>
            <li>Be accurate (where they state facts).</li>
            <li>Be genuinely held (where they state opinions).</li>
            <li>Comply with applicable law in the UK and in any country from which they are posted.</li>
        </ul>
        <p>Contributions must not:</p>
        <ul>
            <li>Contain any material which is defamatory of any person.</li>
            <li>Contain any material which is obscene, offensive, hateful or inflammatory.</li>
            <li>Promote sexually explicit material.</li>
            <li>Promote violence.</li>
            <li>Promote discrimination based on race, sex, religion, nationality, disability, sexual orientation or age.
            </li>
            <li>Infringe any copyright, database right or trademark of any other person.</li>
            <li>Be likely to deceive any person.</li>
            <li>Be made in breach of any legal duty owed to a third-party, such as a contractual duty or a duty of
                confidence.</li>
            <li>Promote any illegal activity.</li>
            <li>Be threatening, abuse or invade another’s privacy, or cause annoyance, inconvenience or needless
                anxiety.</li>
            <li>Be likely to harass, upset, embarrass, alarm or annoy any other person.</li>
            <li>Be used to impersonate any person, or to misrepresent your identity or affiliation with any person.</li>
            <li>Give the impression that they emanate from us, if this is not the case.</li>
            <li>Advocate, promote or assist any unlawful act such as (by way of example only) copyright infringement or
                computer misuse.</li>
        </ul>


        <div class="acceptable-use-notice-header">
            <h2>Suspension and termination</h2>
        </div>
        <p>We will determine, at our discretion, whether there has been a breach of this acceptable use notice through
            your use of our site. When a breach of this notice has occurred, we may take such action as we deem
            appropriate.</p>
        <p>Failure to comply with this acceptable use notice constitutes a material breach of the terms of website use
            upon which you are permitted to use our site, and may result in our taking all or any of the following
            actions:</p>
        <ul>
            <li>Immediate, temporary or permanent withdrawal of your right to use our site.</li>
            <li>Immediate, temporary or permanent removal of any posting or material uploaded by you to our site.</li>
            <li>Issue of a warning to you.</li>
            <li>Legal proceedings against you for reimbursement of all costs on an indemnity basis (including, but not
                limited to, reasonable administrative and legal costs) resulting from the breach.</li>
            <li>Further legal action against you.</li>
            <li>Disclosure of such information to law enforcement authorities as we reasonably feel is necessary.</li>
        </ul>
        <p>We exclude liability for actions taken in response to breaches of this acceptable use notice. The responses
            described in this notice are not limited, and we may take any other action we reasonably deem appropriate.
        </p>


        <div class="acceptable-use-notice-header">
            <h2>Changes to the Acceptable Use Notice</h2>
        </div>
        <p style="margin-bottom:20px;">We may revise this acceptable use notice at any time by amending this page. You are expected to check this
            page from time to time to take notice of any changes we make, as they are legally binding on you. Some of
            the provisions contained in this acceptable use notice may also be superseded by provisions or notices
            published elsewhere on our site.</p>
    </div>

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