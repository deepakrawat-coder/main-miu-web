  <style>
      /* ============================================ */
      /* WHATSAPP FLOATING BUTTON (Desktop & Tablet)  */
      /* ============================================ */
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
          pointer-events: none;
      }

      .whatsapp-float:hover .whatsapp-tooltip {
          opacity: 1;
          visibility: visible;
          left: 75px;
      }

      /* ============================================ */
      /* REFINED BOTTOM MOBILE TAB - SAHI DESIGN */
      /* ============================================ */
      /* .mobile-bottom-tab {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            box-shadow: 0 -8px 30px rgba(0, 0, 0, 0.12);
            display: none;
            justify-content: space-around;
            align-items: center;
            padding: 10px 16px 14px;
            z-index: 10000;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
            font-family: 'Inter', sans-serif;
        } */
      .mobile-bottom-tab {
          position: fixed;
          bottom: 12px;
          left: 0;
          right: 0;
          /* background: rgba(255, 255, 255, 0.98);
           backdrop-filter: blur(20px); */
          background: rgb(255 255 255 / 38%);
          backdrop-filter: blur(7px);
          box-shadow: 0 -8px 30px rgba(0, 0, 0, 0.12);
          display: none;
          justify-content: space-around;
          align-items: center;
          padding: 6px 0px 1px 0px;
          z-index: 10000;
          border-top: 1px solid rgba(0, 0, 0, 0.06);
          font-family: 'Inter', sans-serif;
          margin: 0px 19px;
      }

      /* Modern curved top corners */
      @media (max-width: 768px) {
          .mobile-bottom-tab {
              border-radius: 10px;
          }
      }

      .tab-item {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          text-decoration: none;
          gap: 6px;
          transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
          flex: 1;
          padding: 8px 0;
          border-radius: 48px;
          background: transparent;
          position: relative;
      }

      /* Icon styling */
      .tab-item i {
          font-size: 26px;
          transition: all 0.25s ease;
      }

      .tab-item span {
          font-size: 12px;
          font-weight: 600;
          letter-spacing: 0.3px;
          transition: all 0.2s;
      }

      /* Individual tab colors - modern soft gradient style */
      .tab-whatsapp {
          color: #075E54;
      }

      .tab-whatsapp i {
          color: #25D366;
          text-shadow: 0 2px 6px rgba(37, 211, 102, 0.2);
      }

      .tab-whatsapp span {
          color: #075E54;
      }

      .tab-phone {
          color: #1e40af;
      }

      .tab-phone i {
          color: #3b82f6;
          text-shadow: 0 2px 6px rgba(59, 130, 246, 0.2);
      }

      .tab-phone span {
          color: #1e3a8a;
      }

      .tab-contact {
          color: black;
      }

      .tab-contact i {
          color: #8b5cf6;
          text-shadow: 0 2px 6px rgba(139, 92, 246, 0.2);
      }

      .tab-contact span {
          color: #5b21b6;
      }

      /* Active / Hover effect - slight background lift */
      .tab-item:active {
          transform: scale(0.94);
          background: rgba(0, 0, 0, 0.04);
      }

      /* Add a nice micro indicator for active/click */
      .tab-item:hover {
          background: rgba(0, 0, 0, 0.02);
      }

      /* Badge or ripple effect removed, just clean */

      /* Hide floating WhatsApp button on mobile */
      @media (max-width: 768px) {
          .whatsapp-float {
              display: none;
          }

          .mobile-bottom-tab {
              display: flex;
          }

          body {
              /* padding-bottom: 80px; */
          }
      }

      @media (min-width: 769px) {
          .mobile-bottom-tab {
              display: none !important;
          }

          body {
              padding-bottom: 0;
          }
      }

      /* For very small devices (<= 480px) fine tune spacing */
      @media (max-width: 480px) {
          .mobile-bottom-tab {
              padding: 8px 12px 12px;
          }

          .tab-item i {
              font-size: 24px;
          }

          .tab-item span {
              font-size: 11px;
          }

          .tab-item {
              gap: 4px;
              padding: 6px 0;
          }

          body {
              /* padding-bottom: 72px; */
          }
      }

      /* Modal Popup for Contact - refined */
      .contact-modal {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.75);
          backdrop-filter: blur(8px);
          z-index: 20000;
          justify-content: center;
          align-items: center;
          font-family: 'Inter', sans-serif;
      }

      .modal-content {
          background: #ffffff61;
          width: 90%;
          max-width: 400px;
          border-radius: 40px;
          padding: 32px 28px;
          text-align: center;
          animation: fadeInUp 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.1);
          position: relative;
          box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
      }

      @keyframes fadeInUp {
          from {
              opacity: 0;
              transform: translateY(50px) scale(0.96);
          }

          to {
              opacity: 1;
              transform: translateY(0) scale(1);
          }
      }

      .modal-content h3 {
          font-size: 26px;
          font-weight: 700;
          margin-bottom: 10px;
          /* background: linear-gradient(135deg, #8b5cf6, #6d28d9); */
          -webkit-background-clip: text;
          /* background-clip: text; */
          /* color: #352b2b00; */
          color: black;
      }

      .modal-content p {
          color: gray;
          margin-bottom: 24px;
          font-size: 14px;
      }

      .contact-details {
          background: #f8fafca6;
          border-radius: 28px;
          padding: 16px 20px;
          margin: 20px 0;
          text-align: left;
      }

      .contact-row {
          display: flex;
          align-items: center;
          gap: 14px;
          padding: 14px 0;
          border-bottom: 1px solid #e2e8f0;
      }

      .contact-row:last-child {
          border-bottom: none;
      }

      .contact-row i {
          width: 36px;
          font-size: 22px;
          text-align: center;
      }

      .contact-row i.fa-envelope {
          color: #f59e0b;
      }

      .contact-row i.fa-phone-alt {
          color: #3b82f6;
      }

      .contact-row i.fa-globe {
          color: #8b5cf6;
      }

      .contact-row a {
          text-decoration: none;
          color: #1e293b;
          font-weight: 500;
          flex: 1;
          text-align: left;
          transition: color 0.2s;
      }

      .contact-row a:hover {
          color: #8b5cf6;
      }

      .close-modal {
          background: linear-gradient(135deg, var(--theme-color), var(--title-color));
          color: white;
          border: none;
          padding: 14px 24px;
          border-radius: 50px;
          font-weight: 600;
          cursor: pointer;
          margin-top: 16px;
          width: 100%;
          font-size: 16px;
          transition: all 0.2s;
          box-shadow: 0 4px 12px rgba(107, 70, 193, 0.3);
      }

      .close-modal:hover {
          transform: scale(0.98);
          background: var(--title-color);
          box-shadow: 0 2px 8px rgba(107, 70, 193, 0.4);
      }

      /* extra safe spacing */
      .tab-contact {
          cursor: pointer;
      }

      @media(max-width:768px) {
          .scroll-top {
              bottom: 120px;
          }

          .tab-whatsapp i,
          .tab-whatsapp span,
          .tab-phone i,
          .tab-phone span,
          .tab-contact i,
          .tab-contact span {
              /* color: #1c1515b3; */
              color: black;

          }

          .tab-item {
              gap: 0px !important;
          }

      }

      .tab-contact {
          /* border: 2px solid var(--theme-color); purple border */
          color: black;
          background: transparent;
          padding: 8px 18px;
          border-radius: 25px;
          font-weight: 600;
          font-size: 16px;
          transition: all 0.3s ease;

          /* Glow effect */
          box-shadow: 0 0 10px var(--title-color);

          /* Blinking animation */
          animation: blinkGlow 1.5s infinite;
      }

      /* Hover effect */
      .tab-contact:hover {
          background: #8a2be2;
          color: #fff;
          box-shadow: 0 0 15px var(--title-color);
      }

      /* Blinking Glow Animation */
      @keyframes blinkGlow {
          0% {
              box-shadow: 0 0 5px var(--title-color);
          }

          50% {
              box-shadow: 0 0 20px var(--title-color);
          }

          100% {
              box-shadow: 0 0 5px var(--title-color);
          }
      }

      .contact-modal .modal-content .form-group input {
          background: #fefefe80;
      }
  </style>

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
          <button class="btn-submit p-0 px-4" style="width:fit-content;" id="showContactModal">
              Apply
          </button>
          <a href="https://wa.me/919319771500?text=Hello%20MIU%20Team%2C%20I%20need%20information%20about%20admissions."
              class="tab-item tab-whatsapp" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-whatsapp"></i>
              {{-- <span>WhatsApp</span> --}}
          </a>

          <!-- Phone Number Option (call directly) -->
          <a href="tel:+919319727766" class="tab-item tab-phone">
             <i class="fa-solid fa-phone"></i>

          </a>
          <a href="mailto:enquiry@miu.edu.in" class="tab-item tab-phone">
              <i class="fas fa-envelope"></i>

          </a>
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
