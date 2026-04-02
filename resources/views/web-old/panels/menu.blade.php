 <header class="main-header header-style-one fixed-header">

     <!--Start Header Top-->
     <div class="header-top">
         <div class="auto-container">
             <div class="outer-box">
                 <div class="header-top-left">
                     {{-- <div class="info-box">
                         <span class="icon-info"></span>
                         <p>Info for</p>
                     </div>
                     <div class="select-box">
                         <select class="wide" id="info">
                             <option data-display="">Students</option>
                             <option value="1">Teacher</option>
                             <option value="2">Students</option>
                         </select>
                     </div>
                     <div class="subscribe-box">
                         <div class="icon">
                             <span class="icon-email"></span>
                         </div>
                         <a href="#">Subscribe Us</a>
                     </div> --}}
                     <div class="social-link-box-style1">
                         <div class="icon">
                             <span class="icon-share"></span>
                         </div>
                         <p>Follow</p>
                         <ul class="clearfix">
                             <li>
                                 <a href="#"><i class="icon-facebook-app-symbol"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="icon-twitter-1"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="icon-linkedin"></i></a>
                             </li>
                             <li>
                                 <a href="#"><i class="icon-youtube"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="header-top-right">
                     <div class="quick-link-box">
                         {{-- <div class="inner-title">
                             <span class="icon-launch"></span>
                             <p>Quick Links</p>
                         </div> --}}
                         <div class="link-box">
                             <ul>
                                 <li><a href="/login" target="_blank">Staff Login</a></li>
                                 <li><a href="#">Student Login</a></li>

                             </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <!--End Header Top-->

     <!--Start Header-->
     <div class="header w-100">
         <div class="auto-container w-100">
             <div class="outer-box w-100">
                 <!--End Header Left-->

                 <!--Start Header Left-->
                 <div class="header-middle  w-100" style="column-gap:26px !important;width:100% !important;">
                     <div class="">
                         <a href="/">
                            <p></p>
                             <img src="{{ asset('/assets/images/web-image/miu-white.png') }}" width="80" height="80" alt="Awesome Logo" title="">
                         </a>
                     </div>

                     <div class="nav-outer style1 clearfix">

                         <!--Mobile Navigation Toggler-->
                         <div class="mobile-nav-toggler">
                             <div class="inner">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </div>
                         </div>
                         <!-- Main Menu -->
                         <nav class="main-menu style1 navbar-expand-md navbar-light w-100">

                             <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                 <ul class="navigation clearfix">
                                     <li class=" current mr-3"><a href="/">Home</a></li>
                                     <li class=" mr-3"><a href="#">Admission</a></li>
                                     <li class="dropdown mr-3"><a href="#">News & Events</a>
                                         <ul>
                                             <li><a href="/notice-and-events">News</a></li>
                                             <li>
                                                 <a href="/gallery-list">Events Gallery</a>
                                             </li>
                                             
                                         </ul>
                                     </li>
                                     <li class="mr-3"><a href="/public-self-disclosure">Public Self Disclosure</a></li>
                                     <li class="mr-3"><a href="/about-us">About MIU</a></li>
                                     {{-- <li class="blank-box"></li> --}}
                                     <li class="dropdown mr-3"><a href="#">Information Cell</a>
                                         <ul>
                                            <li class="dropdown mr-3"><a href="#">Administration & Academician</a>
                                                 <ul>
                                                     <li><a href="/chancellor"> Chancellor </a></li>
                                                     <li><a href="/vice-chancellor"> Vice Chancellor </a></li>
                                                     <li><a href="/pro-vice-chancellor"> Pro Vice Chancellor </a></li>
                                                     <li><a href="/director"> Director </a></li>
                                                     <li><a href="/registrar"> Registrar </a></li>
                                                     <li><a href="/academic-leadership-team"> Academic Leadership Team </a></li>
                                                     <li><a href="/academics-team"> Academics Team </a></li>
                                                     <li><a href="/coe"> COE </a></li>
                                                 </ul>
                                             </li>
                                             <li>
                                                 <a href="/academic-collaborations">Academic Collaborations</a>
                                             </li>
                                             <li>
                                                 <a href="/alumni">Alumni</a>
                                             </li>

                                             <li>
                                                 <a href="/awards">Awards</a>
                                             </li>
                                             <li>
                                                 <a href="/constituent-colleges">Constituent Colleges</a>
                                             </li>
                                             <li>
                                                 <a href="/health-facilities">Health Facilities</a>
                                             </li>
                                             <li>
                                                 <a href="/syllabus-courses">Syllabus & Courses</a>
                                             </li>
                                             <li>
                                                 <a href="/scholarship-policy">Scholarship Policy</a>
                                             </li>
                                             <li>
                                                 <a href="/refund-policy">Refund policy</a>
                                             </li>
                                             <li>
                                                 <a href="/reservation-roster">Reservation Roster</a>
                                             </li>
                                             <li>
                                                 <a href="/verification">Verification</a>
                                             </li>
                                             <li>
                                                 <a href="{{asset('/assets/images/web-image/UGC-2f-Proforma-MIU.pdf')}}">UGC Performa</a>
                                             </li>


                                             <li>
                                                 <a href="/recruitments">Recruitments</a>
                                             </li>

                                         </ul>
                                     </li>
                                     <li class="dropdown mr-3"><a href="#">Exam</a>
                                         <ul>
                                             <li><a href="#">Exam Results</a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown mr-3"><a href="#">MIU Cell</a>
                                         <ul>
                                             <li><a href="/incubation-center">Incubation center</a></li>
                                             <li><a href="/anti-ragging">Anti Ragging</a></li>
                                             <li><a href="/academic-council">Academic Council</a></li>
                                             <li><a href="/cpio">CPIO</a></li>
                                             <li><a href="/grievance-cell">SGRC</a></li>
                                             <li><a href="/equal-opportunity-cell">Equal opportunity cell</a></li>
                                             <li><a href="/internal-complaint-committee">Internal Complaint Committee</a></li>
                                             <li><a href="/research-and-development-cell">Research And Development Cell</a></li>
                                             <li><a href="/ombudsperson">Ombudsperson</a></li>
                                             <li><a href="/project-development-cell">Project Development Cell</a></li>
                                             <li><a href="/sedg-cell">SEDG Cell</a></li>
                                             <li><a href="/iqac">IQAC</a></li>
                                             <li><a href="/telephone-directories">Telephone Directories</a></li>
                                         </ul>
                                     </li>
                                     <li class=" mr-3"><a href="/schools-and-departments">School and Departments</a></li>
                                     <li class=" mr-3"><a href="/contact-us">Contact</a></li>
                                 </ul>
                             </div>

                         </nav>
                         <!-- Main Menu End-->

                     </div>
                 </div>
                 <!--End Header Left-->

                 <!--Start Header Right-->
                 {{-- <div class="header-right">
                     <div class="header-right__menu">
                         <ul>
                             <li>
                                 <div class="icon">
                                     <span class="icon-account"></span>
                                 </div>
                                 <a href="#">Login</a>
                             </li>
                             <li>
                                 <div class="icon">
                                     <span class="icon-more"></span>
                                 </div>
                                 <a href="#">Apply Now</a>
                             </li>
                         </ul>
                     </div>
                 </div> --}}
                 <!--End Header Right-->

             </div>
         </div>
     </div>
     <!--End header-->

     <!--Sticky Header-->
     <div class="sticky-header">
         <div class="container">
             <div class="sticky-header__inner clearfix">
                 <!--Logo-->
                 <div class="logo float-left">
                     <a href="/" class="img-responsive">
                         <img src="{{ asset('/assets/images/web-image/web-log.png') }}" width="50" height="50" alt="" title="">
                        {{-- <p class="font-weight-bold h2 text-dark">MIU</p> --}}

                     </a>
                 </div>
                 <!--Right Col-->
                 <div class="right-col float-right">
                     <!-- Main Menu -->
                     <nav class="main-menu clearfix">
                         <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                 </div>
             </div>
         </div>
     </div>
     <!--End Sticky Header-->

     <!-- Mobile Menu  -->
     <div class="mobile-menu">
         <div class="menu-backdrop"></div>
         <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
         <nav class="menu-box">
             <div class="nav-logo">
                 <a href="/">
                     <img src="{{ asset('/assets/images/web-image/web-log.png') }}" width="50" height="50" alt="" title="">
                 </a>
             </div>
             <div class="menu-outer">
                 <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
             </div>
             <!--Social Links-->
             <div class="social-links">
                 <ul class="clearfix">
                     <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                     <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                     <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                     <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                     <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                 </ul>
             </div>
         </nav>
     </div>
     <!-- End Mobile Menu -->

 </header>
