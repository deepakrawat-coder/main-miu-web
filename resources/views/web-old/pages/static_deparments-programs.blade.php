@extends('web.layouts.main')
@section('title', '| Departments')
@section('description', 'Manipur International University – Departments & Programs')

@section('styles')
    <style>
        /* Tabs */
        a{
            color:rgba(0, 0, 0, 0.692);
        }
        .pr-tab {
            display: none;
        }

        .pr-tab.active-tab {
            display: block;
        }

        /* ===== STICKY SIDEBAR ===== */
        @media (min-width: 992px) {

            .testimonial-style1-area,
            .testimonial-style1-area .row {
                overflow: visible !important;
            }

            .dept-col {
                position: relative;
            }

            .sticky-department {
                position: sticky;
                top: 120px;
                /* header height */
                z-index: 5;
            }
        }

        @media (max-width: 991px) {
            .sticky-department {
                position: static;
            }
        }

        .register-accommodation-area {
            position: relative;
            z-index: 1;
        }

        .register-accommodation-area__bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        /* OVERLAY */
        .register-accommodation-area__bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000cf !important;
            /* dark overlay */
        }

        .register-accommodation-content {
            position: relative;
            z-index: 2;
            color: #ffffff;
        }

        .register-accommodation-content p,
        .register-accommodation-content h2,
        .register-accommodation-content h3,
        .register-accommodation-content ul li {
            color: #ffffff;
        }
    </style>
@endsection

@section('content')

    <!-- BREADCRUMB -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Deparments and Programs</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Deparments and Programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DEPARTMENTS -->
    {{-- <section class="testimonial-style1-area py-5">
        <div class="container">
            <div class="row">

                <!-- LEFT SIDEBAR -->
                <div class="col-xl-3 col-lg-4 col-md-12 dept-col">
                    <div class="explore-future-tab__button sticky-department">

                        <div class="sec-title mb-3">
                            <h2>Our Departments</h2>
                            <p>Explore academic departments and their programs.</p>
                        </div>

                        <ul class="tab-btns list-unstyled">
                            <li class="tab-btn active-btn" data-tab="#students">
                                <h3>Arts & Humanities</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#graduate">
                                <h3>Science</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#transfer">
                                <h3>Commerce & Management</h3>
                                <div class="round-box"></div>
                            </li>

                            <li class="tab-btn" data-tab="#research">
                                <h3>Research & Doctoral</h3>
                                <div class="round-box"></div>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="pr-content">

                        <!-- TAB 1 -->
                        <div class="pr-tab active-tab" id="students">
                            <div class="row">
                                @for ($i = 1; $i <= 20; $i++)
                                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                                        <a href="/programs-details">
                                            <div class="single-program-box-style1">
                                                <div class="img-holder">
                                                    <img src="{{ asset('/assets/images/programs/program-1.jpg') }}" class="img-fluid"
                                                        alt="">
                                                    <div class="overlay-content">
                                                        <div class="inner">
                                                            <p>UG / PG</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-holder text-center">
                                                    <h3>Animation</h3>
                                                    <p>Arts & Performance</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- TAB 2 -->
                        <div class="pr-tab" id="graduate">
                            <p>Science department programs will appear here.</p>
                        </div>

                        <!-- TAB 3 -->
                        <div class="pr-tab" id="transfer">
                            <p>Commerce & Management programs listed here.</p>
                        </div>

                        <!-- TAB 4 -->
                        <div class="pr-tab" id="research">
                            <p>PhD & Research programs listed here.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <section class="teaching-area mt-5">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="teaching-content">
                        <div class="sec-title">
                            <h2>MIU Schools<br> of Academic Excellence</h2>
                            <div class="sub-title">
                                <p>
                                    Manipur International University (MIU) delivers quality education through a diverse
                                    range of academic divisions known as MIU Schools, fostering excellence, innovation,
                                    and holistic development across disciplines.
                                </p>
                            </div>
                        </div>

                        <div class="inner-title">
                            <div class="border-line"></div>
                            <h3>Interdisciplinary & Industry-Oriented Learning</h3>
                        </div>

                        <ul>
                            <li>
                                <div class="dot-box"></div>
                                Engineering, Technology, Arts & Humanities, and Sciences
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Management, Health Sciences & Education Programs
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Undergraduate, Postgraduate, Diploma & Doctoral Studies
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Research, Innovation & Multidisciplinary Collaboration
                            </li>
                        </ul>

                        <div class="btns-box">
                            <a class="btn-one" href="about.html">
                                <span class="txt">Explore MIU Schools</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="teaching-img-box">
                        <div class="teaching-img-box__bg"
                            style="background-image: url(assets/images/resources/teaching-img.jpg);">
                        </div>
                        <div class="teaching-img-box__content-bg"></div>

                        <div class="teaching-img-box__content aos-init aos-animate" data-aos="fade-left">
                            <div class="border-line"></div>
                            <h3>
                                “MIU fosters a vibrant academic ecosystem where
                                education, research, and innovation come together
                                to prepare graduates for global opportunities.”
                            </h3>

                            <div class="authorized-person">
                                {{-- <div class="signature">
                                <img src="assets/images/resources/signature.png" alt="">
                            </div> --}}
                                <h4>Manipur International University</h4>
                                <p>[ Academic Leadership ]</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="involment-activities-area involment-activities-area--style2">
        <div class="container">
            <div class="sec-title text-center">
                <h2>MIU Schools</h2>
                <div class="sub-title">
                    <p>
                        Manipur International University offers diverse schools focused on
                        academic excellence, innovation, and industry-oriented education.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- School 1 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('/assets/images/resources/involment-activities-1.jpg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Engineering & Technology</h3>
                                    <p>
                                        Focused on cutting-edge engineering education, technology,
                                        innovation, and practical skill development.
                                    </p>
                                    <ul>
                                        <li>Engineering & Technology Programs</li>
                                        <li>Industry-Oriented Curriculum</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- School 2 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('/assets/images/resources/involment-activities-2.jpg')}}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Arts & Humanities</h3>
                                    <p>
                                        Promoting creativity, critical thinking, culture,
                                        communication, and social sciences.
                                    </p>
                                    <ul>
                                        <li>Arts & Humanities</li>
                                        <li>Interdisciplinary Learning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- School 3 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('/assets/images/resources/involment-activities-3.jpg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Management & Commerce</h3>
                                    <p>
                                        Developing future leaders with strong foundations in
                                        business management, finance, and entrepreneurship.
                                    </p>
                                    <ul>
                                        <li>Management & Commerce</li>
                                        <li>Entrepreneurship Focus</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- School 4 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('/assets/images/resources/involment-activities-4.jpg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Science</h3>
                                    <p>
                                        Emphasizing scientific research, innovation, and analytical
                                        skills across core science disciplines.
                                    </p>
                                    <ul>
                                        <li>Basic & Applied Sciences</li>
                                        <li>Research-Oriented Programs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- School 5 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('/assets/images/resources/involment-activities-5.jpg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Health Sciences</h3>
                                    <p>
                                        Dedicated to healthcare education, wellness, and professional
                                        competence in health-related fields.
                                    </p>
                                    <ul>
                                        <li>Health & Allied Sciences</li>
                                        <li>Practical Clinical Exposure</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- School 6 -->
                <div class="col-xl-4 col-lg-4 mb-4">
                    <a href="/school-details">
                        <div class="single-involment-activities-box">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{ asset('/assets/images/resources/involment-activities-6.jpg') }}" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3>School of Research & Innovation</h3>
                                    <p>
                                        Encouraging multidisciplinary research, innovation,
                                        and real-world problem-solving initiatives.
                                    </p>
                                    <ul>
                                        <li>Research & Innovation</li>
                                        <li>Industry & Academic Collaboration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <section class="testimonial-style1-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1__title">
                        <div class="sec-title">
                            <h2>Voices of MIU Alumni</h2>
                            <div class="sub-title">
                                <p>
                                    Hear from our alumni as they share their experiences and success stories at Manipur
                                    International University
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel owl-theme owl-carousel owl-loaded owl-drag"
                            data-options="{
                                    &quot;loop&quot;: true,
                                    &quot;margin&quot;: 30,
                                    &quot;autoheight&quot;:true,
                                    &quot;lazyload&quot;:true,
                                    &quot;nav&quot;: false,
                                    &quot;dots&quot;: false,
                                    &quot;autoplay&quot;: true,
                                    &quot;autoplayTimeout&quot;: 5000,
                                    &quot;smartSpeed&quot;: 500,
                                    &quot;navText&quot;: [&quot;&lt;span class=\&quot;left icon-next\&quot;&gt;&lt;/span&gt;&quot;,
                                    &quot;&lt;span class=\&quot;right icon-next\&quot;&gt;&lt;/span&gt;&quot;],
                                    &quot;responsive&quot;:{
                                    &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; },
                                    &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                    &quot;768&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                    &quot;992&quot;:{ &quot;items&quot; : &quot;2&quot; },
                                    &quot;1200&quot;:{ &quot;items&quot; : &quot;3&quot; }
                                }
                            }">

                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2800px, 0px, 0px); transition: 0.5s; width: 4800px;">
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>My journey at Manipur International University was filled with
                                                        learning opportunities, research exposure, and holistic development.
                                                        MIU truly prepares students for real-world challenges.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Amit Kumar</h3>
                                                <span>MBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU’s academic structure and career support system helped me
                                                        transition smoothly from student life to a professional role.
                                                        I am proud to be an MIU alumnus.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Neha Verma</h3>
                                                <span>M.Sc | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Being part of MIU allowed me to explore my potential through
                                                        innovative learning and practical exposure. The university
                                                        continues to inspire me even after graduation.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rahul Meitei</h3>
                                                <span>B.Tech (Mechanical Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Studying at Manipur International University was a life-changing
                                                        experience.
                                                        The academic environment, supportive faculty, and practical learning
                                                        helped
                                                        me build a strong foundation for my professional career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Ananya Sharma</h3>
                                                <span>B.Tech (Computer Science) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU provided me exposure to diverse cultures, modern infrastructure,
                                                        and industry-oriented education. The mentorship I received shaped
                                                        my confidence and professional growth.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rohit Singh</h3>
                                                <span>BBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>The faculty at MIU are highly knowledgeable and approachable.
                                                        Their guidance and encouragement helped me develop analytical
                                                        and leadership skills essential for my career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Priya Devi</h3>
                                                <span>B.Tech (Civil Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-1.jp') }}g"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>My journey at Manipur International University was filled with
                                                        learning opportunities, research exposure, and holistic development.
                                                        MIU truly prepares students for real-world challenges.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Amit Kumar</h3>
                                                <span>MBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU’s academic structure and career support system helped me
                                                        transition smoothly from student life to a professional role.
                                                        I am proud to be an MIU alumnus.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Neha Verma</h3>
                                                <span>M.Sc | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Being part of MIU allowed me to explore my potential through
                                                        innovative learning and practical exposure. The university
                                                        continues to inspire me even after graduation.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rahul Meitei</h3>
                                                <span>B.Tech (Mechanical Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Studying at Manipur International University was a life-changing
                                                        experience.
                                                        The academic environment, supportive faculty, and practical learning
                                                        helped
                                                        me build a strong foundation for my professional career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Ananya Sharma</h3>
                                                <span>B.Tech (Computer Science) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU provided me exposure to diverse cultures, modern infrastructure,
                                                        and industry-oriented education. The mentorship I received shaped
                                                        my confidence and professional growth.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rohit Singh</h3>
                                                <span>BBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>The faculty at MIU are highly knowledgeable and approachable.
                                                        Their guidance and encouragement helped me develop analytical
                                                        and leadership skills essential for my career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Priya Devi</h3>
                                                <span>B.Tech (Civil Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span class="left icon-next"></span></button><button type="button"
                                    role="presentation" class="owl-next"><span class="right icon-next"></span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
