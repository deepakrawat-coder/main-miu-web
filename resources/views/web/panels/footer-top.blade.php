   <!-- WhatsApp Floating Icon - Left Side Bottom -->
<style>
    /* WhatsApp Floating Icon Styles */
    .whatsapp-float {
        position: fixed;
        left: 20px;
        bottom: 30px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
        text-decoration: none;
        animation: pulse 2s infinite;
    }

    .whatsapp-float i {
        font-size: 35px;
        color: white;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        background-color: #20b859;
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.5);
    }

    /* Pulse Animation */
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
        }
        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }

    /* Tooltip */
    .whatsapp-tooltip {
        position: absolute;
        left: 70px;
        background: #1a1a1a;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 500;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        font-family: 'Inter', sans-serif;
    }

    .whatsapp-float:hover .whatsapp-tooltip {
        opacity: 1;
        visibility: visible;
        left: 75px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            left: 15px;
            bottom: 20px;
        }
        .whatsapp-float i {
            font-size: 28px;
        }
        .whatsapp-tooltip {
            display: none;
        }
    }
</style>

<!-- WhatsApp Link -->
<a href="https://wa.me/919319771500?text=Hello%20MIU%20Team%2C%20I%20need%20information%20about%20admissions." 
   class="whatsapp-float" 
   target="_blank"
   rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
    <span class="whatsapp-tooltip">Chat on WhatsApp</span>
</a>
   <footer class="footer-wrapper footer-default footer-overlay" data-bg-src="assets/img/bg/footer-bg-1.jpg"
       style="background-color: black;">
       {{-- <div class="footer-top">
            <div class="container">
                <div class="row gy-40 align-items-center justify-content-between">
                    <div class="col-xl-auto">
                        <div class="footer-logo z-index-common" data-cue="slideInLeft"><a
                                href="home-university.html"><img src="{{ asset('/new-miu/web-logo.png') }}" width="200" height="160" class="bg-white rounded-sm p-2" style="border-radius:8px;" alt="Stadum"></a></div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="client-group-wrap z-index-common" data-cue="slideInRight"><img
                                src="assets/img/normal/client-group1.png" alt="img">
                            <h4 class="title">Have any question? <a href="contact.html"><img
                                        src="assets/img/icon/chat2.svg" alt=""> <span
                                        class="text-theme">Live</span></a> chat now</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
       <div class="footer-top">
           <div class="container">
               <div class="row gy-40 align-items-center justify-content-between">
                   <div class="col-xl-auto">
                       <div class="footer-logo z-index-common" data-cue="slideInLeft">
                           <a href="home-university.html">
                               <img src="{{ asset('/new-miu/web-logo.png') }}" width="200" height="160"
                                   class="bg-white rounded-sm p-2" style="border-radius:8px;" alt="MIU University">
                           </a>
                       </div>
                   </div>
                   <div class="col-xl-auto">
                       <div class="client-group-wrap z-index-common" data-cue="slideInRight">
                           {{-- <img src="assets/img/normal/client-group1.png" alt="Happy Students"> --}}
                           <h4 class="title">
                               Need admission guidance?
                               <a href="contact.html">
                                   <img src="assets/img/icon/chat2.svg" alt="Chat Icon">
                                   <span class="text-theme">Talk to Counselor</span>
                               </a>
                               now
                           </h4>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container">
           <div class="widget-area">
               <div class="row justify-content-between">
                   <div class="col-md-6 col-xl-auto">
                       <div class="widget footer-widget">
                           <div class="th-widget-about">
                               <h3 class="widget_title">About MIU</h3>
                               <p class="about-text">MIU is an autonomous private university, committed to providing
                                   world-class education and fostering research excellence. UGC recognized and NEP 2020
                                   compliant institution dedicated to academic innovation.. </p>
                               {{-- <div class="footer-info ">
                                   <a href="#"><span class="footer-info-icon"><i
                                               class="fa-solid fa-location-dot"></i></span> Manipur International
                                       University Imphal, Manipur India - 795001</a>
                                   <a href="mailto:support@miu.edu.in"><span class="footer-info-icon"><i
                                               class="fa-solid fa-envelope"></i></span>
                                      support@miu.edu.in </a>
                                   <a href="mailto:enquiry@miu.edu.in"><span class="footer-info-icon"><i
                                               class="fa-solid fa-envelope"></i></span>
                                       enquiry@miu.edu.in </a>
                               </div> --}}
                               <div class="footer-info">
                                   <!-- Location -->
                                   <a href="#">
                                       <span class="footer-info-icon"><i class="fa-solid fa-location-dot"></i></span>
                                       Manipur International University, Imphal, Manipur, India - 795001
                                   </a>

                                   <!-- Phone 1 -->
                                   <a href="tel:+919319727766">
                                       <span class="footer-info-icon"><i class="fa-solid fa-phone"></i></span>
                                       +91-9319727766
                                   </a>

                                   <!-- Phone 2 -->
                                   <a href="tel:+919319771500">
                                       <span class="footer-info-icon"><i class="fa-solid fa-phone"></i></span>
                                       +91-9319771500
                                   </a>

                                   <!-- Email 1 -->
                                   <a href="mailto:support@miu.edu.in">
                                       <span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span>
                                       support@miu.edu.in
                                   </a>

                                   <!-- Email 2 -->
                                   <a href="mailto:enquiry@miu.edu.in">
                                       <span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span>
                                       enquiry@miu.edu.in
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-xl-auto">
                       <div class="widget widget_nav_menu footer-widget">
                           <h3 class="widget_title">Useful Links</h3>
                           <div class="menu-all-pages-container">
                               <ul class="menu">
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="pricing.html">Alumni</a></li>
                                   <li><a href="service.html">Anti Ragging</a></li>
                                   <li><a href="about.html">Anti Ragging</a></li>
                                   <li><a href="about.html"> Awards</a></li>
                                   <li><a href="contact.html">Chancellor Message</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-xl-auto">
                       <div class="widget widget_nav_menu footer-widget">
                           <h3 class="widget_title">Our Schools</h3>
                           <div class="menu-all-pages-container">
                               <ul class="menu">
                                   <li><a href="about.html">School of Science</a></li>
                                   <li><a href="about.html">School of Education</a></li>
                                   <li><a href="about.html">School of Pharmacy</a></li>
                                   <li><a href="about.html">School of Management</a></li>
                                   <li><a href="about.html">School of Humanities</a></li>
                                   <li><a href="about.html">School of Engineering</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-xl-auto">
                       <div class="widget th-widget-instagram footer-widget">
                           <h3 class="widget_title">Gallery</h3>
                           <div class="instagram-feeds">
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-1.jpg" alt="Image">
                                   <a href="assets/img/widget/insta-feed-1-1.jpg" class="insta-btn popup-image"><i
                                           class="fab fa-instagram"></i></a>
                               </div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-2.jpg" alt="Image">
                                   <a href="assets/img/widget/insta-feed-1-2.jpg" class="insta-btn popup-image"><i
                                           class="fab fa-instagram"></i></a>
                               </div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-3.jpg" alt="Image">
                                   <a href="assets/img/widget/insta-feed-1-3.jpg" class="insta-btn popup-image"><i
                                           class="fab fa-instagram"></i></a>
                               </div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-4.jpg"
                                       alt="Image">
                                   <a href="assets/img/widget/insta-feed-1-4.jpg" class="insta-btn popup-image"><i
                                           class="fab fa-instagram"></i></a>
                               </div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-5.jpg"
                                       alt="Image">
                                   <a href="assets/img/widget/insta-feed-1-5.jpg" class="insta-btn popup-image"><i
                                           class="fab fa-instagram"></i></a>
                               </div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-6.jpg"
                                       alt="Image"> <a href="assets/img/widget/insta-feed-1-6.jpg"
                                       class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-7.jpg"
                                       alt="Image"> <a href="assets/img/widget/insta-feed-1-7.jpg"
                                       class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-8.jpg"
                                       alt="Image"> <a href="assets/img/widget/insta-feed-1-8.jpg"
                                       class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                               <div class="insta-thumb"><img src="assets/img/widget/insta-feed-1-9.jpg"
                                       alt="Image"> <a href="assets/img/widget/insta-feed-1-9.jpg"
                                       class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="copyright-wrap z-index-common">
           <div class="container">
               <div class="row justify-content-center gy-3 align-items-center">
                   <div class="col-lg-6">

                       <p class="copyright-text"><i class="fal fa-copyright"></i> © <?= date('Y') ?> <a
                               href="home-university.html"> Manipur International University</a>. All Rights Reserved
                       </p>
                   </div>
                   <div class="col-lg-6 text-lg-end text-center">
                       <div class="footer-links">
                           <ul>
                               <li><a href="about.html">Privacy Policy</a></li>
                               <li><a href="about.html">Terms of services</a></li>
                               <li><a href="about.html">Refund Policy</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%"
           viewbox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
               style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
           </path>
       </svg></div>
   <div id="login-form" class="popup-login-register mfp-hide">
       <ul class="nav" id="pills-tab" role="tablist">
           <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab"
                   data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                   aria-controls="pills-home" aria-selected="false">Login</button></li>
           <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                   data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                   aria-controls="pills-profile" aria-selected="true">Register</button></li>
       </ul>
       <div class="tab-content" id="pills-tabContent">
           <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               <h3 class="box-title mb-30">Sign in to your account</h3>
               <div class="th-login-form">
                   <form action="mail.php" method="POST" class="login-form ajax-contact">
                       <div class="row">
                           <div class="form-group col-12"><label>Username or email</label> <input type="text"
                                   class="form-control" name="email" id="email" required="required">
                           </div>
                           <div class="form-group col-12"><label>Password</label> <input type="password"
                                   class="form-control" name="pasword" id="pasword" required="required">
                           </div>
                           <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                   Message</button></div>
                       </div>
                       <div id="forgot_url"><a href="my-account.html">Forgot password?</a></div>
                       <p class="form-messages mb-0 mt-3"></p>
                   </form>
               </div>
           </div>
           <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
               aria-labelledby="pills-profile-tab">
               <h3 class="th-form-title mb-30">Sign in to your account</h3>
               <form action="mail.php" method="POST" class="login-form ajax-contact">
                   <div class="row">
                       <div class="form-group col-12"><label>Username*</label> <input type="text"
                               class="form-control" name="usename" id="usename" required="required"></div>
                       <div class="form-group col-12"><label>First name*</label> <input type="text"
                               class="form-control" name="firstname" id="firstname" required="required"></div>
                       <div class="form-group col-12"><label>Last name*</label> <input type="text"
                               class="form-control" name="lastname" id="lastname" required="required"></div>
                       <div class="form-group col-12"><label for="new_email">Your email*</label> <input
                               type="text" class="form-control" name="new_email" id="new_email"
                               required="required"></div>
                       <div class="form-group col-12"><label for="new_email_confirm">Confirm email*</label> <input
                               type="text" class="form-control" name="new_email_confirm" id="new_email_confirm"
                               required="required"></div>
                       <div class="statement"><span class="register-notes">A password will be emailed to
                               you.</span></div>
                       <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                       </div>
                   </div>
                   <p class="form-messages mb-0 mt-3"></p>
               </form>
           </div>
       </div>
   </div>
   <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/jquery.counterup.min.js"></script>
   <script src="assets/js/jquery-ui.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/gsap.min.js"></script>
   <script src="assets/js/ScrollTrigger.min.js"></script>
   <script src="assets/js/SplitText.min.js"></script>
   <script src="assets/js/lenis.min.js"></script>
   <script src="assets/js/main.js"></script>
