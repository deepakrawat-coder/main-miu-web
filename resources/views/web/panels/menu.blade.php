 @php
     $schools = DB::select('SELECT name,slug FROM schools');
     $programsRaw = DB::select("
        SELECT 
            programs.name as program_name,
            specializations.slug,
            specializations.title
        FROM specializations 
        JOIN programs ON specializations.program_id = programs.id
    ");

     // GROUP BY program_name
     $programs = collect($programsRaw)->groupBy('program_name');
     //  dd($programs);
 @endphp
 <div class="sidemenu-wrapper">
     <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
         <div class="widget footer-widget">
             <div class="th-widget-about">
                 <div class="about-logo"><a href="/"><img src="{{ asset('/new-miu/weblogo.png') }}"
                             class="bg-white rounded-sm" style="border-radius:8px;" alt="Stadum"></a></div>
                 <p class="about-text">Since 1999, when the newly minted Stadum team embraced its mandate to breathe
                     new life into the downtrodden neighbourhood, East Village’s transformation has been nothing
                     short of remarkable. </p>
                 <div class="footer-info"><a href="/"><span class="footer-info-icon"><i
                                 class="fa-solid fa-location-dot"></i></span> Manipur International University Imphal,
                         Manipur India - 795001</a>

                     {{-- <a href="mailto:info@miu.edu.in"><span class="footer-info-icon"><i
                                 class="fa-solid fa-envelope"></i></span> info@miu.edu.in</a> --}}
                 </div>
             </div>
         </div>
         <div class="widget footer-widget">
             <h3 class="widget_title">Recent Posts</h3>
             <div class="recent-post-wrap">
                 <div class="recent-post">
                     <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg"
                                 alt="Blog Image"></a></div>
                     <div class="media-body">
                         <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Trailblazers in
                                 Faculty Perspectives</a></h4>
                         <div class="recent-post-meta"><a href="blog.html"><i class="far fa-calendar"></i>26/6/2025</a>
                         </div>
                     </div>
                 </div>
                 <div class="recent-post">
                     <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg"
                                 alt="Blog Image"></a></div>
                     <div class="media-body">
                         <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Future Focus
                                 Preparing for Tomorrow</a></h4>
                         <div class="recent-post-meta"><a href="blog.html"><i class="far fa-calendar"></i>24/6/2025</a>
                         </div>
                     </div>
                 </div>
                 <div class="recent-post">
                     <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg"
                                 alt="Blog Image"></a></div>
                     <div class="media-body">
                         <h4 class="post-title"><a class="text-inherit" href="blog-details.html">The Green
                                 Initiative Sustainability in Action</a></h4>
                         <div class="recent-post-meta"><a href="blog.html"><i class="far fa-calendar"></i>24/6/2025</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="widget footer-widget">
             <h3 class="widget_title">Popular Tags</h3>
             <div class="th-social"><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a
                     href="https://twitter.com"><i class="fab fa-twitter"></i></a> <a href="https://pinterest.com"><i
                         class="fab fa-pinterest-p"></i></a> <a href="https://linkedin.com"><i
                         class="fab fa-linkedin-in"></i></a> <a href="https://linkedin.com"><i
                         class="fab fa-instagram"></i></a></div>
         </div>
     </div>
 </div>
 <div class="popup-search-box"><button class="searchClose"><i class="far fa-times"></i></button>
     <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                 class="fal fa-search"></i></button></form>
 </div>
 <div class="th-menu-wrapper">
     <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
         <div class="mobile-logo"><a href="/"><img src="{{ asset('/new-miu/weblogo.png') }}" alt="Stadum"></a>
         </div>
         <div class="th-mobile-menu">
             <ul>

                 <li><a href="/">Home</a></li>

                 <!-- 2. About Us (父菜单) -->
                 <li class="menu-item-has-children"><a href="#">About Us</a>
                     <ul class="sub-menu">
                         <li><a href="/about">Overview</a></li>

                         <!-- Administration (子菜单) -->
                         <li class="menu-item-has-children"><a href="#">Administration</a>
                             <ul class="sub-menu">
                                 <li><a href="/chancellor">Chancellor's Message</a></li>
                                 <li><a href="/vice-chancellor">Vice Chancellor's Message</a></li>
                                 <li><a href="/pro-vice-chancellor">Pro Chancellor's Message</a></li>
                                 <li><a href="/registrar">Registrar's Message</a></li>
                                 <li><a href="/director ">Director</a></li>
                                 <li><a href="/coe">Controller of Examinations</a></li>
                             </ul>
                         </li>

                         <!-- Governance (子菜单) -->
                         <li class="menu-item-has-children"><a href="#">Governance</a>
                             <ul class="sub-menu">
                                 <li><a href="shop.html">Governing Body</a></li>
                                 <li><a href="shop-details.html">Academmic Council</a></li>
                                 <li><a href="cart.html">IQAC</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li>

                 <li class="menu-item-has-children"><a href="#">Schools</a>
                     <ul class="sub-menu">
                         @foreach ($schools as $school)
                             <li><a href="/school/{{ $school->slug }}">{{ $school->name }}</a></li>
                         @endforeach
                         <li><a href="https://vocational.miu.edu.in/" target="_blank">School of Vocational Studies</a>
                         </li>
                     </ul>
                 </li>

                 <!-- 4. Academics (父菜单) -->
                 <li class="menu-item-has-children"><a href="#">Academics</a>
                     <ul class="sub-menu">
                         <li><a href="program.html">Academic Calendar</a></li>
                         <li><a href="program-2.html">Academic Leadership</a></li>
                         <li><a href="program-details.html">Academic Collaborations</a></li>
                         <li><a href="program-details-sidebar.html">Brochure Download</a></li>
                     </ul>
                 </li>

                 <!-- 5. Admissions (父菜单) -->
                 <li class="menu-item-has-children"><a href="#">Admissions</a>
                     <ul class="sub-menu">
                         <li><a href="program.html">Admission Process</a></li>

                         <!-- Programs (子菜单) -->
                         <li class="menu-item-has-children">
                             <a href="#">Programs</a>
                             <ul class="sub-menu">

                                 @foreach ($programs as $programName => $items)
                                     <li class="menu-item-has-children">
                                         <a href="#">{{ $programName }}</a>

                                         <ul class="sub-menu">
                                             @foreach ($items as $course)
                                                 <li>
                                                     <a href="/course/{{ $course->slug }}">
                                                         {{ $course->title }}
                                                     </a>
                                                 </li>
                                             @endforeach
                                         </ul>

                                     </li>
                                 @endforeach

                             </ul>
                         </li>

                         <li><a href="program-2.html">Fee Structure</a></li>
                         <li><a href="program-details.html">Apply Now</a></li>
                         <li><a href="program-details-sidebar.html">Rules for Admission</a></li>
                         <li><a href="program-details-sidebar.html">Brochure </a></li>
                     </ul>
                 </li>

                 <!-- 6. Student Life (父菜单) -->
                 <li class="menu-item-has-children"><a href="#">Student Life</a>
                     <ul class="sub-menu">
                         <li><a href="shop.html">Sports</a></li>
                         <li><a href="shop.html">Hostel</a></li>
                         <li><a href="shop-details.html">Shop Details</a></li>
                         <li><a href="cart.html">NCC/NSS</a></li>
                         <li><a href="checkout.html">Internal Complaints Committee</a></li>
                         <li><a href="wishlist.html">Anti-Ragging Cell</a></li>
                     </ul>
                 </li>

                 <!-- 7. Research (父菜单) -->
                 <li class="menu-item-has-children"><a href="#">Research</a>
                     <ul class="sub-menu">
                         <li><a href="event.html">Overview</a></li>
                         <li><a href="event-details.html">Project</a></li>
                         <li><a href="event-details.html">Publications</a></li>
                         <li><a href="event-details.html">Degree Awarded</a></li>
                     </ul>
                 </li>

                 <!-- 8. Contact Us -->
                 <li><a href="/contact">Contact Us</a></li>
             </ul>
         </div>
     </div>
 </div>
 <header class="th-header header-layout1">
     <div class="header-top">
         <div class="container th-container4">
             <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                 <div class="col-auto d-none d-lg-block">
                     <div class="header-links">
                         <ul class="header-left-wrap">
                             <li><a href="contact.html">Career</a></li>
                             <li><a href="alumni.html">News/Events</a></li>
                             {{-- <li><a href="faculty.html">Faculty</a></li>
                             <li><a href="contact.html">Community</a></li> --}}
                         </ul>
                     </div>
                 </div>
                 <div class="col-auto">
                     <div class="header-links">
                         <ul class="header-right-wrap">
                             {{-- <li><i class="fa-solid fa-user"></i><a href="https://vocational.miu.edu.in/ams/"
                                     target="_blank"class="popup-content">Staff
                                     Login</a></li> --}}
                             <li><i class="fa-solid fa-user"></i><a href="https://vocational.miu.edu.in/ams/"
                                     target="_blank">Students Login</a></li>

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-info d-none d-xl-block">
         <div class="container th-container2">
             <div class="row justify-content-between align-items-center">
                 <div class="col-auto">
                     <div class="header-logo"><a href="/"><img src="{{ asset('/new-miu/weblogo.png') }}"
                                 width="200" height="160" alt="Stadum"></a></div>
                 </div>
                 <div class="col-auto">
                     <div class="header-info-right">
                         {{-- <div class="header-info-item">
                             <div class="header-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                             <div class="header-info-content"><span class="header-info-text">Address</span>
                                 <h3 class="header-info-title"><a href="#">Manipur International University
                                         Imphal, Manipur India - 795001</a>
                                 </h3>
                             </div>
                         </div> --}}
                         <div class="header-info-item">
                             <div class="header-info-icon"><i class="fa-solid fa-envelope"></i></div>
                             <div class="header-info-content"><span class="header-info-text">Email</span>
                                 <h3 class="header-info-title"><a
                                         href="mailto:mailenquiry@miu.edu.in">enquiry@miu.edu.in</a>
                                     {{-- &emsp;<a href="mailto:support@miu.edu.in">,support@miu.edu.in</a> --}}
                                 </h3>
                             </div>
                         </div>
                         <div class="header-info-item">
                             <div class="header-info-icon"><i class="fa-solid fa-phone"></i></div>
                             <div class="header-info-content"><span class="header-info-text">Phone Number</span>
                                 <h3 class="header-info-title"><a href="tel:+919319727766">+91 9319727766</a>
                                     {{-- &emsp;<a href="tel:+91 9319771500">+91  9319771500</a> --}}
                                 </h3>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="sticky-wrapper">
         <div class="menu-area">
             <div class="container th-container2">
                 <div class="menu-wrapp" style="border-radius:10px;">
                     <div class="row align-items-center justify-content-between custom_m_color">
                         <div class="col-9 justify-content-start d-flex custom_m_color">
                             <div class="header-left d-flex align-items-center">
                                 <div class="header-logo d-block d-xl-none"><a href="/"><img
                                             src="{{ asset('/new-miu/weblogo.png') }}" width="100" height="60"
                                             alt="Stadum"></a></div>
                                 <nav class="main-menu d-none d-xl-block">
                                     <ul>
                                         <li><a href="/">Home</a></li>
                                         <li class="menu-item-has-children"><a href="#">About Us</a>
                                             <ul class="sub-menu">
                                                 <li><a href="/about">Overview</a></li>
                                                 <li class="menu-item-has-children"><a
                                                         href="#">Administration</a>
                                                     <ul class="sub-menu">
                                                         <li><a href="/chancellor">Chancellor's Message</a></li>
                                                         <li><a href="/vice-chancellor">Vice Chancellor's Message</a>
                                                         </li>
                                                         <li><a href="/pro-vice-chancellor">Pro Chancellor's
                                                                 Message</a>
                                                         </li>
                                                         <li><a href="/registrar">Registrar's Message</a></li>
                                                         {{-- <li><a href="#">Academic Leadership</a></li> --}}
                                                         <li><a href="/director ">Director</a></li>
                                                         <li><a href="/coe">Controller of Examinations</a>
                                                         </li>

                                                     </ul>
                                                 </li>
                                                 <li class="menu-item-has-children"><a href="#">Governance</a>
                                                     <ul class="sub-menu">
                                                         <li><a href="shop.html">Governing Body</a></li>
                                                         <li><a href="shop-details.html">Academmic Council</a>
                                                         </li>
                                                         <li><a href="cart.html">IQAC</a></li>

                                                     </ul>
                                                 </li>
                                                 {{-- <li><a href="/contact">Contact</a></li> --}}
                                             </ul>
                                         </li>
                                         <li class="menu-item-has-children"><a href="#">Schools</a>
                                             <ul class="sub-menu">
                                                 @foreach ($schools as $school)
                                                     <li><a
                                                             href="/schools/{{ $school->slug }}">{{ $school->name }}</a>
                                                     </li>
                                                 @endforeach

                                         </li>

                                         <li><a href="https://vocational.miu.edu.in/" target="_blank">School of
                                                 Vocational Studies</a></li>
                                         {{-- <li><a href="program-details-sidebar.html">School of Pragmatism</a>
                                                 </li> --}}
                                     </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Academics</a>
                                         <ul class="sub-menu">
                                             <li><a href="program.html">Academic Calendar</a></li>
                                             <li><a href="program-2.html">Academic Leadership</a></li>
                                             <li><a href="program-details.html">Academic Collaborations</a></li>
                                             <li><a href="program-details-sidebar.html">Brochure Download</a></li>
                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Admissions</a>
                                         <ul class="sub-menu">
                                             <li><a href="program.html">Admission Process</a></li>
                                             {{-- <li class="menu-item-has-children"><a href="#">Programs</a>
                                                 <ul class="sub-menu">
                                                     <li><a href="shop.html">Diploma</a></li>
                                                     <li><a href="shop-details.html">UG</a>
                                                     </li>
                                                     <li><a href="cart.html">PG</a></li>
                                                     <li><a href="checkout.html">PHD</a></li>
                                                 </ul>
                                             </li> --}}
                                             <li class="menu-item-has-children">
                                                 <a href="#">Programs</a>
                                                 <ul class="sub-menu">

                                                     @foreach ($programs as $programName => $items)
                                                         <li class="menu-item-has-children">
                                                             <a href="#">{{ $programName }}</a>

                                                             <ul class="sub-menu">
                                                                 @foreach ($items as $course)
                                                                     <li>
                                                                         <a href="/course/{{ $course->slug }}">
                                                                             {{ $course->title }}
                                                                         </a>
                                                                     </li>
                                                                 @endforeach
                                                             </ul>

                                                         </li>
                                                     @endforeach

                                                 </ul>
                                             </li>

                                             <li><a href="program-2.html">Fee Structure</a></li>
                                             <li><a href="program-details.html">Apply Now</a></li>
                                             <li><a href="program-details-sidebar.html">Rules for Admission</a>
                                             <li><a href="program-details-sidebar.html">Brochure </a></li>
                                     </li>
                                     </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Student Life</a>
                                         <ul class="sub-menu">

                                             <li><a href="shop.html">Sports</a></li>
                                             <li><a href="shop.html">Hostel</a></li>
                                             <li><a href="shop-details.html">Shop Details</a></li>
                                             <li><a href="cart.html">NCC/NSS</a></li>
                                             <li><a href="checkout.html">Internal Complaints Committee</a></li>
                                             <li><a href="wishlist.html">Anti-Ragging Cell</a></li>

                                         </ul>
                                     </li>
                                     <li class="menu-item-has-children"><a href="#">Research</a>
                                         <ul class="sub-menu">
                                             <li><a href="event.html">Overview</a></li>
                                             <li><a href="event-details.html">Project</a></li>
                                             <li><a href="event-details.html">Publications</a></li>
                                             <li><a href="event-details.html">Degree Awarded</a></li>
                                         </ul>
                                     </li>
                                     {{-- <li class="menu-item-has-children"><a href="#">MIU Cell</a>
                                         <ul class="sub-menu">
                                             <li><a href="blog.html">Incubation Center</a></li>
                                             <li><a href="blog-details.html">CPIO</a></li>
                                             <li><a href="blog-details-sidebar.html">SEDG Cell</a></li>
                                         </ul>
                                     </li> --}}
                                     <li><a href="/contact">Contact Us</a></li>
                                     </ul>
                                 </nav>
                             </div>
                         </div>
                         <div class="col-3 ms-lg-auto custom_m_color">
                             <div class="header-button">
                                 {{-- <form class="search-form"><input type="text" placeholder="Search..."> <button
                                         type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                                 </form> --}}
                                 {{-- <a href="#" class="icon-btn sideMenuToggler d-none d-xl-block "><img
                                         src="assets/img/icon/grid2.svg" alt=""></a> --}}
                                 <button type="button" class="th-menu-toggle d-inline-block d-xl-none  bg-white"><i
                                         class="far fa-bars text-dark"></i></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
