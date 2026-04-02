@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .single-quiz-learning-price-box .price-list ul li:before {
            color: black;
        }
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Incubation Center</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Incubation Center</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fact-counter-style4-area bg-white">
        {{-- <div class="big-title-box paroller-2"
            style="transform: unset; transition: transform linear; will-change: transform;">numbers</div> --}}
        <div class="fact-counter-style4-area-shape1">
            <img class="float-bob" src="{{ asset('/assets/images/instructor/shape/fact-counter-style4-area-shape-1.png') }}" alt="">
        </div>
        <div class="fact-counter-style4-area-shape2">
            <img class="float-bob-y" src="{{ asset('/assets/images/instructor/shape/fact-counter-style4-area-shape-2.png') }}"
                alt="">
        </div>
        <div class="container">
            <div class="sec-title pb-2 center text-center">
                <div class="sub-title">
                    <div class="decor"></div>
                    <h5>Manipur International University</h5>
                </div>
                <h2>Incubation Centre & Entrepreneurship Cell</h2>
                <span>Empowering Innovation • Fostering Entrepreneurship • Building Tomorrow</span>
            </div>

            {{-- <ul class="row fact-counter_box-style2 d-flex justify-content-center">
                <!--Start Single Fact Counter-->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp animated"
                    data-wow-delay="00ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url(assets/images/instructor/shape/instructor-shape-5.png);">
                        </div>
                        <div class="round-shape">
                            <img class="zoom-fade" src="assets/images/instructor/shape/instructor-shape-6.png"
                                alt="">
                        </div>
                        <div class="inner">
                            <span class="flaticon-bookmark"></span>
                        </div>
                    </div>
                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="50">50+</span>
                        </div>
                        <div class="title">
                            <h3>Startups Incubated</h3>
                        </div>
                    </div>
                </li>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp animated"
                    data-wow-delay="200ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: slideInUp;">
                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url(assets/images/instructor/shape/instructor-shape-5.png);">
                        </div>
                        <div class="round-shape">
                            <img class="zoom-fade" src="assets/images/instructor/shape/instructor-shape-6.png"
                                alt="">
                        </div>
                        <div class="inner">
                            <span class="flaticon-youtube"></span>
                        </div>
                    </div>
                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="200">200+</span>
                        </div>
                        <div class="title">
                            <h3>Students Engaged</h3>
                        </div>
                    </div>
                </li>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp animated"
                    data-wow-delay="300ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: slideInUp;">
                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url(assets/images/instructor/shape/instructor-shape-5.png);">
                        </div>
                        <div class="round-shape">
                            <img class="zoom-fade" src="assets/images/instructor/shape/instructor-shape-6.png"
                                alt="">
                        </div>
                        <div class="inner">
                            <span class="flaticon-contract"></span>
                        </div>
                    </div>
                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="15">15+</span>
                        </div>
                        <div class="title">
                            <h3>Industry Partners</h3>
                        </div>
                    </div>
                </li>
            </ul> --}}
            <ul class="row fact-counter_box-style2 d-flex justify-content-center">

                <!-- Startups Incubated -->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp"
                    data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url({{ asset('/assets/images/instructor/shape/instructor-shape-5.png') }});"></div>

                        <div class="round-shape">
                            <img class="zoom-fade" src="{{ asset('/assets/images/instructor/shape/instructor-shape-6.png') }}"
                                alt="">
                        </div>

                        <div class="inner">
                            <span class="fa fa-lightbulb-o"></span>
                        </div>
                    </div>

                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="50">50+</span>
                        </div>
                        <div class="title">
                            <h3>Startups Incubated</h3>
                        </div>
                    </div>
                </li>

                <!-- Students Engaged -->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp"
                    data-wow-delay="200ms" data-wow-duration="1500ms">

                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url({{ asset('/assets/images/instructor/shape/instructor-shape-5.png') }});"></div>

                        <div class="round-shape">
                            <img class="zoom-fade" src="{{ asset('/assets/images/instructor/shape/instructor-shape-6.png') }}"
                                alt="">
                        </div>

                        <div class="inner">
                            <span class="fa fa-graduation-cap"></span>
                        </div>
                    </div>

                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="200">200+</span>
                        </div>
                        <div class="title">
                            <h3>Students Engaged</h3>
                        </div>
                    </div>
                </li>

                <!-- Industry Partners -->
                <li class="col-xl-3 col-lg-6 col-md-6 text-center single-fact-counter-style4 wow slideInUp"
                    data-wow-delay="300ms" data-wow-duration="1500ms">

                    <div class="icon">
                        <div class="icon-bg"
                            style="background-image: url({{ asset('/assets/images/instructor/shape/instructor-shape-5.png') }});"></div>

                        <div class="round-shape">
                            <img class="zoom-fade" src="{{ asset('/assets/images/instructor/shape/instructor-shape-6.png') }}"
                                alt="">
                        </div>

                        <div class="inner">
                            <span class="fa fa-industry"></span>
                        </div>
                    </div>

                    <div class="outer-box">
                        <div class="count-outer count-box counted">
                            <span class="count-text" data-speed="3000" data-stop="15">15+</span>
                        </div>
                        <div class="title">
                            <h3>Industry Partners</h3>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>
    <section class="about-style4-area bg-white">
        <div class="container">
            <div class="row text-right-rtl">

                <div class="col-xl-6">
                    <div class="about-style4__image">
                        <div class="shape1">
                            <img src="{{ asset('/assets/images/instructor/shape/about-v4-shape1.png') }}" alt="">
                        </div>
                        <div class="shape2"></div>
                        <div class="inner">
                            <img src="{{ asset('/assets/images/about/about-style4__image-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style4__content">
                        <div class="sec-title pb-3">
                            <div class="sub-title">
                                <div class="decor"></div>
                                <h5>About Incubation Centre</h5>
                            </div>
                            <h2>Manipur International<br> University<br> Incubation Centre</h2>
                        </div>

                        <div class="inner-content">
                            <div class="text">
                                <p>
                                    The Incubation Centre at Manipur International University is a dynamic
                                    innovation ecosystem designed to nurture entrepreneurial ideas and
                                    transform them into successful startups. It provides students, faculty,
                                    and aspiring entrepreneurs with the right environment, mentorship,
                                    and resources to build sustainable ventures.
                                </p>
                            </div>

                            <div class="bottom-text">
                                <div class="icon">
                                    <div class="icon-bg"
                                        style="background-image: url({{ asset('/assets/images/instructor/shape/about-v4-shape4.png') }});">
                                    </div>
                                    <div class="top-arrow">
                                        <img src="{{ asset('/assets/images/instructor/shape/about-v4-shape3.png') }}" alt="">
                                    </div>
                                    <span class="flaticon-online-lesson"></span>
                                </div>

                                <div class="experience-box">
                                    <h2>100+ <span>Ideas</span></h2>
                                    <h4>Mentored & Supported</h4>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="highlights-area highlights-area--style2 bg-white">
        <div class="highlights-area-shape1 paroller">
            <img class="float-bob-y" src="{{ asset('/assets/images/instructor/shape/highlights-area-shape-1.png') }}" alt="">
        </div>
        <div class="highlights-area-shape2 paroller-2">
            <img class="float-bob-y" src="{{ asset('/assets/images/instructor/shape/highlights-area-shape-2.png') }}" alt="">
        </div>
        <div class="highlights-area-shape3 wow slideInRight" data-wow-duration="4000ms">
            <img class="float-bob-x" src="{{ asset('/assets/images/instructor/shape/highlights-area-shape-3.png') }}" alt="">
        </div>

        <div class="big-title-box paroller-2">Focus</div>

        <div class="container">
            <div class="sec-title pb-3 center text-center">
                <div class="sub-title">
                    <div class="decor"></div>
                    <h5>Our Focus Areas</h5>
                </div>
                <h2>Driving Innovation & Entrepreneurship</h2>
            </div>

            <div class="row">

                <!-- Focus Area 1 -->
                <div class="col-xl-6">
                    <div class="single-highlights-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="single-highlights-box__inner">
                            <div class="text-box">
                                <h5>Focus On</h5>
                                <h3>Startup Ideation & Innovation</h3>
                                <p>Encouraging creative ideas and problem-solving mindsets.</p>
                            </div>
                            <div class="overlay-text">
                                <p>
                                    We support early-stage ideas by providing structured guidance,
                                    validation frameworks, and innovation mentoring to convert
                                    concepts into viable startup models.
                                </p>
                            </div>
                            <div class="counting-box"></div>
                        </div>
                    </div>
                </div>

                <!-- Focus Area 2 -->
                <div class="col-xl-6">
                    <div class="single-highlights-box wow slideInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="single-highlights-box__inner">
                            <div class="text-box">
                                <h5>Focus On</h5>
                                <h3>Mentorship & Industry Support</h3>
                                <p>Learning from experienced entrepreneurs and experts.</p>
                            </div>
                            <div class="overlay-text">
                                <p>
                                    Startups receive mentorship from industry leaders, academic experts,
                                    and investors to strengthen business strategy, technology adoption,
                                    and market readiness.
                                </p>
                            </div>
                            <div class="counting-box"></div>
                        </div>
                    </div>
                </div>

                <!-- Focus Area 3 -->
                <div class="col-xl-6">
                    <div class="single-highlights-box wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="single-highlights-box__inner">
                            <div class="text-box">
                                <h5>Focus On</h5>
                                <h3>Funding, Growth & Scalability</h3>
                                <p>Preparing startups for sustainable growth.</p>
                            </div>
                            <div class="overlay-text">
                                <p>
                                    We assist incubated startups with funding opportunities, investor
                                    connections, and scaling strategies to help them grow into
                                    sustainable and impactful enterprises.
                                </p>
                            </div>
                            <div class="counting-box"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="cooking-working-process-area " style="background: #17345a;">
        <div class="auto-container">
            <div class="sec-title-style7 text-center">
                <div class="sub-title">
                    <p>Why Partner With Us?</p>
                    {{-- <div class="zigzag gray-bg"></div> --}}
                </div>
                <h2 class="text-white">Build, Grow & Scale With MIU Incubation Centre</h2>
            </div>

            <div class="row">

                <!-- Step 1 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="sinlge-cooking-working-process">
                        <div class="cooking-working-process-shape-top">
                            <img src="{{ asset('/assets/images/cooking-course/shape/cooking-working-process-shape-top.png') }}"
                                alt="">
                        </div>
                        <div class="counting-box">01</div>
                        <div class="text-box">
                            <span class="flaticon-find"></span>
                            <h3 class="text-white">Innovation Ecosystem</h3>
                            <p class="text-light">
                                Access a vibrant startup ecosystem supported by academic excellence,
                                research facilities, and innovation-driven culture.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="sinlge-cooking-working-process margin-top40">
                        <div class="cooking-working-process-shape-bottom">
                            <img src="{{ asset('/assets/images/cooking-course/shape/cooking-working-process-shape-bottom.png') }}"
                                alt="">
                        </div>
                        <div class="counting-box">02</div>
                        <div class="text-box">
                            <span class="flaticon-credit-cards"></span>
                            <h3 class="text-white">Mentorship & Funding Access</h3>
                            <p class="text-light">
                                Gain guidance from industry experts and support for funding,
                                grants, and investor connections.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="sinlge-cooking-working-process">
                        <div class="cooking-working-process-shape-top">
                            <img src="{{ asset('/assets/images/cooking-course/shape/cooking-working-process-shape-top.png') }}"
                                alt="">
                        </div>
                        <div class="counting-box">03</div>
                        <div class="text-box">
                            <span class="flaticon-online-education"></span>
                            <h3 class="text-white">Skill & Technology Support</h3>
                            <p class="text-white">
                                Leverage technical expertise, research labs, and skill development
                                programs to strengthen your startup.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="sinlge-cooking-working-process margin-top40">
                        <div class="counting-box">04</div>
                        <div class="text-box">
                            <span class="flaticon-chef-hat"></span>
                            <h3 class="text-white">Market & Growth Enablement</h3>
                            <p class="text-white">
                                Support for market validation, business scaling,
                                industry partnerships, and long-term sustainability.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="learning-categories-area bg-white">
        <div class="container">
            <div class="row">

                <!-- LEFT CONTENT -->
                <div class="col-xl-6">
                    <div class="learning-categories-content-box">
                        <div class="sec-title-style8">
                            <h2>Our <span>Incubation</span><br> Programs & Support</h2>
                            <p>
                                The Manipur International University Incubation Centre
                                supports startups and innovators through structured programs,
                                expert mentorship, and industry-driven initiatives.
                            </p>
                        </div>

                        <!-- Program 01 -->
                        <div class="single-learning-categories-item">
                            <div class="couning-box">01</div>
                            <div class="single-learning-categories-item__inner">
                                <div class="icon" data-aos="fade-up">
                                    <span class="flaticon-brainstorming"></span>
                                </div>
                                <div class="text">
                                    <h3>Startup Bootcamps & Workshops</h3>
                                    <p>
                                        Hands-on bootcamps and workshops designed to help
                                        students and entrepreneurs transform ideas into
                                        scalable startup ventures.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="learning-categories-btn-box">
                        <a href="#">
                            <span class="icon-right-arrow-1"></span>Explore All Programs
                        </a>
                    </div> --}}

                    </div>
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-xl-6">
                    <div class="learning-categories-content-box-two">

                        <!-- Program 02 -->
                        <div class="single-learning-categories-item">
                            <div class="couning-box">02</div>
                            <div class="single-learning-categories-item__inner">
                                <div class="icon" data-aos="fade-up">
                                    <span class="flaticon-user"></span>
                                </div>
                                <div class="text">
                                    <h3>Mentorship Programs</h3>
                                    <p>
                                        One-on-one and group mentorship sessions with
                                        experienced entrepreneurs, industry experts,
                                        and academic leaders.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Program 03 -->
                        <div class="single-learning-categories-item">
                            <div class="couning-box">03</div>
                            <div class="single-learning-categories-item__inner">
                                <div class="icon" data-aos="fade-up">
                                    <span class="flaticon-presentation"></span>
                                </div>
                                <div class="text">
                                    <h3>Pitch Competitions & Innovation Challenges</h3>
                                    <p>
                                        Platforms for startups to pitch ideas, validate
                                        business models, and gain exposure through
                                        innovation challenges and competitions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Program 04 -->
                        <div class="single-learning-categories-item">
                            <div class="couning-box">04</div>
                            <div class="single-learning-categories-item__inner">
                                <div class="icon" data-aos="fade-up">
                                    <span class="flaticon-network"></span>
                                </div>
                                <div class="text">
                                    <h3>Industry Connect Sessions</h3>
                                    <p>
                                        Interactive sessions with industry leaders to
                                        build networks, explore collaborations, and
                                        understand real-world market needs.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="quiz-learning-price-pack-area " style="    background: #17345a;">
        <div class="container">

            <div class="sec-title-style8 text-center">
                <h2 class="text-white">Sponsorship <span>Packages</span></h2>
                <p class="text-white">
                    Choose a sponsorship tier that aligns with your organization’s
                    goals and supports innovation at the Incubation Centre.
                </p>
            </div>

            <div class="row">

                <!-- Platinum Sponsor -->
                <div class="col-xl-4">
                    <div class="single-quiz-learning-price-box">
                        <div class="top">
                            <h3>Platinum Sponsor</h3>
                            <p>Title sponsorship with maximum visibility</p>
                        </div>

                        <div class="package">
                            <h2 class="text-dark">₹5,00,000+ <span>/ year</span></h2>
                        </div>

                        <div class="price-list">
                            <ul>
                                <li>Title sponsor for major events</li>
                                <li>Dedicated incubation space naming rights</li>
                                <li>Executive mentorship opportunities</li>
                                <li>Premium logo placement</li>
                                <li>Keynote speaking opportunities</li>
                                <li>First right to recruit students</li>
                                <li>Quarterly progress reports</li>
                                <li>Board advisory position</li>
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a class="btn-one rounded" href="#">
                                <span class="txt text-white">Become a Sponsor</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Gold Sponsor -->
                <div class="col-xl-4">
                    <div class="single-quiz-learning-price-box active">
                        <div class="top">
                            <h3>Gold Sponsor</h3>
                            <p>Strong engagement & branding opportunities</p>
                        </div>

                        <div class="package">
                            <h2 class="text-dark">₹2,50,000 <span>/ year</span></h2>
                        </div>

                        <div class="price-list">
                            <ul>
                                <li>Event co-sponsorship opportunities</li>
                                <li>Workshop & seminar naming rights</li>
                                <li>Mentorship program participation</li>
                                <li>Prominent logo display</li>
                                <li>Student project collaboration</li>
                                <li>Recruitment fair participation</li>
                                <li>Bi-annual impact reports</li>
                                <li>Technology showcase booth</li>
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a class="btn-one rounded" href="#">
                                <span class="txt text-white">Become a Sponsor</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Silver Sponsor -->
                <div class="col-xl-4">
                    <div class="single-quiz-learning-price-box">
                        <div class="top">
                            <h3>Silver Sponsor</h3>
                            <p>Ideal for workshops & student engagement</p>
                        </div>

                        <div class="package">
                            <h2 class="text-dark">₹1,00,000 <span>/ year</span></h2>
                        </div>

                        <div class="price-list">
                            <ul>
                                <li>Workshop sponsorship</li>
                                <li>Logo on marketing materials</li>
                                <li>Guest lecture opportunities</li>
                                <li>Student internship program</li>
                                <li>Networking event access</li>
                                <li>Annual impact summary</li>
                                <li>Social media recognition</li>
                                <li>Certificate of appreciation</li>
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a class="btn-one rounded" href="#">
                                <span class="txt text-white">Become a Sponsor</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bronze Sponsor -->
                {{-- <div class="col-xl-4 mt-4">
                    <div class="single-quiz-learning-price-box">
                        <div class="top">
                            <h3>Bronze Sponsor</h3>
                            <p>Entry-level support for innovation</p>
                        </div>

                        <div class="package">
                            <h2 class="text-dark">₹50,000 <span>/ year</span></h2>
                        </div>

                        <div class="price-list">
                            <ul>
                                <li>Event program listing</li>
                                <li>Website acknowledgement</li>
                                <li>Networking opportunities</li>
                                <li>Student competition prizes</li>
                                <li>Social media mentions</li>
                                <li>Event participation access</li>
                                <li>Community recognition</li>
                                <li>Thank you certificate</li>
                            </ul>
                        </div>

                        <div class="btn-box">
                            <a class="btn-one rounded" href="#">
                                <span class="txt text-white">Become a Sponsor</span>
                            </a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <section class="cooking-slogan-area">
        <div class="cooking-slogan-area-bg"
            style="background-image: url({{ asset('/assets/images/web-image/banner2.jpeg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cooking-slogan-content">

                        <h2>
                            Ready to <br>
                            <span>Partner With Us?</span>
                        </h2>

                        <p>
                            Join us in building the entrepreneurial ecosystem of Northeast India.
                            Together, we can create lasting impact and foster innovation.
                        </p>

                        <div class="phone-number-box2">
                            <div class="icon">
                                <span class="flaticon-phone-call"></span>
                            </div>
                            <div class="phone">
                                <h4>Call Us Now</h4>
                                <a href="tel:+91-9036983337">9036983337</a>
                            </div>
                        </div>
                        <div class="phone-number-box2">
                            <div class="icon">
                                {{-- <span class="flaticon-mail"></span> --}}
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="phone">
                                <h4>Call Us Now</h4>
                                <a href="mailto:director@miu.edu.in">
                                    director@miu.edu.in
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
