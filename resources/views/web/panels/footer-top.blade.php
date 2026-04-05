  <!-- ============================================ -->
  <!-- WHATSAPP FLOATING BUTTON (Desktop + Tablet)   -->
  <!-- ============================================ -->
  <a href="https://wa.me/919319771500?text=Hello%20MIU%20Team%2C%20I%20need%20information%20about%20admissions."
      class="whatsapp-float" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-whatsapp"></i>
      <span class="whatsapp-tooltip">Chat on WhatsApp</span>
  </a>

  <!-- ============================================ -->
  <!-- BOTTOM TAB FOR MOBILE SCREENS                -->
  <!-- ============================================ -->
  <div class="container">
      <div class="mobile-bottom-tab" id="mobileBottomTab">
          <!-- WhatsApp Option -->
          {{-- <button class="tab-item tab-contact border-0 p-0 text-black" id="showContactModal"> --}}
          <button class="btn-submit p-0 px-4 mt-0" style="width:fit-content;" id="showContactModal">
              Apply
          </button>

          <a href="https://vocational.miu.edu.in/ams/" target="_blank" class="tab-item tab-phone">
              <i class="fa-solid fa-user"></i>

          </a>
          <a href="tel:+919319727766" class="tab-item tab-phone">
              <i class="fa-solid fa-phone"></i>

          </a>
          <a href="https://wa.me/919319771500?text=Hello%20MIU%20Team%2C%20I%20need%20information%20about%20admissions."
              class="tab-item tab-whatsapp" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-whatsapp"></i>
              {{-- <span>WhatsApp</span> --}}
          </a>

          <!-- Phone Number Option (call directly) -->

          <!-- Contact (shows popup with email and extra details) -->

      </div>
  </div>

  <!-- Modal for Contact Info (Email & More) -->
  <div id="contactModal" class="contact-modal">
      <div class="modal-content">
          {{-- <h3><i class="fas fa-address-card"></i> Get in Touch</h3>
           <p>Our support team is ready to assist you</p>
           <div class="contact-details">
               <div class="contact-row">
                   <i class="fas fa-envelope"></i>
                   <a href="mailto:admissions@miu.edu">admissions@miu.edu</a>
               </div>
               <div class="contact-row">
                   <i class="fas fa-phone-alt"></i>
                   <a href="tel:+919319771500">+91 93197 71500</a>
               </div>
               <div class="contact-row">
                   <i class="fas fa-globe"></i>
                   <a href="#" target="_blank">www.miu.edu</a>
               </div>
           </div> --}}
          @include('web.parts.enquery-form')
          {{-- <button class="close-modal" id="closeModalBtn">Close</button> --}}
      </div>
  </div>

  <footer class="footer-wrapper footer-default footer-overlay"
      data-bg-src="{{ asset('/assets/img/bg/footer-bg-1.jpg') }}" style="background-color: black;">
      {{-- <div class="footer-top">
            <div class="container">
                <div class="row gy-40 align-items-center justify-content-between">
                    <div class="col-xl-auto">
                        <div class="footer-logo z-index-common" data-cue="slideInLeft"><a
                                href="home-university.html"><img src="{{asset('/{{ asset('/new-miu/web-logo.png') }}" width="200" height="160" class="bg-white rounded-sm p-2" style="border-radius:8px;" alt="Stadum"></a></div>
                    </div>
                    <div class="col-xl-auto">
                        <div class="client-group-wrap z-index-common" data-cue="slideInRight"><img
                                src="{{asset('/assets/img/normal/client-group1.png" alt="img">
                            <h4 class="title">Have any question? <a href="contact.html"><img
                                        src="{{asset('/assets/img/icon/chat2.svg" alt=""> <span
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
                              <img src="{{ asset('/new-miu/weblogo.png') }}" width="200" height="160"
                                  class="bg-white rounded-sm p-2" style="border-radius:8px;" alt="MIU University">
                          </a>
                      </div>
                  </div>
                  <div class="col-xl-auto">
                      <div class="client-group-wrap z-index-common" data-cue="slideInRight">
                          {{-- <img src="{{asset('/assets/img/normal/client-group1.png" alt="Happy Students"> --}}
                          <h4 class="title">
                              Need admission guidance? <br>
                              <a href="contact.html">
                                  <img src="{{ asset('/assets/img/icon/chat2.svg') }}" alt="Chat Icon">
                                  <span class="text-theme">Connect with Our Academic Counselors </span>
                              </a>
                              Today
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
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-1.jpg') }}"
                                      alt="Image">
                                  <a href="assets/img/widget/insta-feed-1-1.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a>
                              </div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-2.jpg') }}"
                                      alt="Image">
                                  <a href="assets/img/widget/insta-feed-1-2.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a>
                              </div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-3.jpg') }}"
                                      alt="Image">
                                  <a href="assets/img/widget/insta-feed-1-3.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a>
                              </div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-4.jpg') }}"
                                      alt="Image">
                                  <a href="assets/img/widget/insta-feed-1-4.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a>
                              </div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-5.jpg') }}"
                                      alt="Image">
                                  <a href="assets/img/widget/insta-feed-1-5.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a>
                              </div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-6.jpg') }}"
                                      alt="Image"> <a href="assets/img/widget/insta-feed-1-6.jpg"
                                      class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                              <div class="insta-thumb"><img src="{{ asset('/assets/img/widget/insta-feed-1-7.jpg') }}"
                                      alt="Image"> <a href="assets/img/widget/insta-feed-1-7.jpg"
                                      class="insta-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                              <div class="insta-thumb"><img
                                      src="{{ asset('/assets/img/widget/insta-feed-1-8.jpg') }}" alt="Image"> <a
                                      href="assets/img/widget/insta-feed-1-8.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a></div>
                              <div class="insta-thumb"><img
                                      src="{{ asset('/assets/img/widget/insta-feed-1-9.jpg') }}" alt="Image"> <a
                                      href="assets/img/widget/insta-feed-1-9.jpg" class="insta-btn popup-image"><i
                                          class="fab fa-instagram"></i></a></div>
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
  {{-- <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%"
          viewbox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
          </path>
      </svg></div> --}}
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
                      <div class="form-group col-12"><label for="new_email">Your email*</label> <input type="text"
                              class="form-control" name="new_email" id="new_email" required="required"></div>
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
  {{-- <script src="{{asset('/assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
   <script src="{{asset('/assets/js/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
   <script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
   <script src="{{asset('/assets/js/jquery-ui.min.js')}}"></script>
   <script src="{{asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
   <script src="{{asset('/assets/js/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('/assets/js/wow.min.js')}}"></script>
   <script src="{{asset('/assets/js/gsap.min.js')}}"></script>
   <script src="{{asset('/assets/js/ScrollTrigger.min.js')}}"></script>
   <script src="{{asset('/assets/js/SplitText.min.js')}}"></script>
   <script src="{{asset('/assets/js/lenis.min.js')}}"></script>
   <script src="{{asset('/assets/js/main.js')}}"></script> --}}
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
  <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
  <script src="{{ asset('assets/js/lenis.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
      // Modal handling for Contact tab (mobile only, but works everywhere for consistency)
      const modal = document.getElementById('contactModal');
      const showModalBtn = document.getElementById('showContactModal');
      const closeModalBtn = document.getElementById('closeModalBtn');

      // Function to open modal
      function openModal() {
          modal.style.display = 'flex';
          document.body.style.overflow = 'hidden'; // prevent background scroll
      }

      // Function to close modal
      function closeModal() {
          modal.style.display = 'none';
          document.body.style.overflow = '';
      }

      // Event listeners for opening modal (only when clicking the Contact tab)
      if (showModalBtn) {
          showModalBtn.addEventListener('click', function(e) {
              e.preventDefault();
              openModal();
          });
      }

      if (closeModalBtn) {
          closeModalBtn.addEventListener('click', closeModal);
      }

      // Close modal if user clicks outside modal content
      modal.addEventListener('click', function(e) {
          if (e.target === modal) {
              closeModal();
          }
      });

      // Handle Escape key
      document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape' && modal.style.display === 'flex') {
              closeModal();
          }
      });

      // Optional: On very small tablets like iPad Mini (portrait) if you still want floating button hidden, 
      // the media query handles it. But you can also force for screens <= 900px if needed.
      // No extra changes required.
  </script>
