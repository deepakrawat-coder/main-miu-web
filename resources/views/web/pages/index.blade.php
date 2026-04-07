@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')

@endsection
@section('content')
    <div class="th-hero-wrapper hero-1" id="hero" style="position: relative;">
        <div class="swiper th-slider " id="heroSlide" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper banner-h">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner2.jpeg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Shaping the Leaders of Tomorrow</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Join
                                                An institution committed to intellectual rigor, industry integration, and
                                                transformative learning experiences that shape global professionals.</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="/program" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/3banner.jpg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Education Engineered for Excellence</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                                Blending academic depth with experiential learning to cultivate innovation,
                                                leadership, and career-ready competencies.</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="/program" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/2banner.jpg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                A Legacy of Learning and Leadership</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                                Empowering ambitious minds through a progressive curriculum, distinguished
                                                faculty, and a culture of continuous advancement.</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="/program" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-pagination"></div>
        </div>

        <!-- 🔥 SIRF EK BAAR FORM - POSITION FIXED 🔥 -->
        {{-- <div class="enquiry-fixed-form d-none d-md-block">
            <div class="bg-white p-4 rounded-3 shadow-lg">
                @include('web.parts.enquery-form')
            </div>
        </div> --}}
    </div>
    <div class="feature-sec-1 position-relative overflow-hidden space-bottom">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-top="19%" data-left="0%">
            <img src="{{ asset('/assets/img/shape/feature-shep-home-1.png') }}" alt="shape">
        </div>
        <div class="container th-container2">
            <div class="row gx-10 gy-10">
                <div class="col-xl-3 col-md-6  col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-icon">
                            <i class="fas fa-graduation-cap text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Applied Learning Ecosystem</h3>
                        <p class="box-text style2">Immersive, practice-driven academic framework </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-icon">
                            <i class="fas fa-globe-americas text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Distinguished Faculty</h3>
                        <p class="box-text style2">Scholars with academic and industry expertise .</p>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".6s">
                        <div class="box-icon">
                            <i class="fas fa-trophy text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Career Acceleration</h3>
                        <p class="box-text style2">Structured pathways toward employability </p>

                    </div>
                </div>

                <!-- ✅ 4th Card - Font Awesome 6.0 Icons -->
                <div class="col-xl-3 col-md-6 col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".8s">
                        <div class="box-icon">
                            <i class="fas fa-users text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Innovation-Driven Curriculum</h3>
                        <p class="box-text style2">Future-oriented, adaptive learning models.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about1-area position-relative overflow-hidden space-bottom" id="about-sec">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="{{ asset('assets/img/shape/feature-shep-2-home-1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="about-wrap1 position-relative z-index-2">
                <div class="row gy-60 align-items-center justify-content-center">
                    <div class="col-xl-6 d-none d-sm-block">
                        <div class="img-box1">
                            <div class="img1 text-center text-sm-start wow fadeInLeft" data-wow-delay=".2s"><img
                                    src="{{ asset('/new-miu/about/about-300-600.jpg') }}" alt="About"></div>
                            <div class="img2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="position-relative"><img class="mb-25"
                                        src="{{ asset('/new-miu/about/about-300-200.jpg') }}" alt="About"></div>
                                <div class="position-relative wow fadeInUp" data-wow-delay=".3s"><img
                                        src="{{ asset('/new-miu/about/about-300-387.jpg') }}" alt="About"></div>
                            </div>
                            {{-- <div class="about-wrapp">
                                <div class="discount-wrapp">
                                    <div class="logo"><img src="{{ asset('/new-miu/miu-white.png') }}" alt="img"
                                            width="60" height="60"></div>
                                    <div class="discount-tag"><span class="discount-anime">* 2019 EST * UGC Approved
                                            Since
                                            2019</span></div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-6">

                        <div class="about-content ms-xxl-4 ps-xxl-2 ms-xl-2">
                            <div class="title-area">
                                <span class="sub-title text-anim mt-2">About the University</span>
                                <h2 class="sec-title text-anim2">Advancing Knowledge, Shaping Futures, Creating Global
                                    Impact</h2>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    MIU University stands as a progressive center of higher education, dedicated to academic
                                    excellence, innovation, and societal contribution. Established with a commitment to
                                    quality and accessibility, the university operates in alignment with UGC regulations and
                                    national education standards. Through a balanced integration of theoretical foundations
                                    and applied learning, MIU fosters intellectual growth, professional competence, and
                                    ethical responsibility among its learners.
                                </p>
                            </div>
                            <div class="about-feature-box">
                                <div class="about-feature wow fadeInUp" data-wow-delay=".3s">
                                    <span class="box-icon"><img src="{{ asset('assets/img/icon/ab-users.svg') }}"
                                            alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Academic Rigor & Relevance</h3>
                                        <p class="box-text">
                                            Curriculum meticulously designed to align scholarly knowledge with contemporary
                                            industry requirements, ensuring intellectual and professional preparedness.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature wow fadeInUp" data-wow-delay=".4s">
                                    <span class="box-icon"><img src="{{ asset('assets/img/icon/ab-message.svg') }}"
                                            alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Comprehensive Student Development</h3>
                                        <p class="box-text">
                                            A holistic approach emphasizing critical thinking, leadership, communication,
                                            and lifelong learning competencies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s">
                                <a href="about.html" class="th-btn th-icon">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="academic1-area space overflow-hidden pt-0" id="program-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-12 col-12">

                    <div class="title-area text-center text-lg-start mb-75">
                        <span class="sub-title text-anim">AFFILIATIONS & ACCREDITATION</span>
                        <h2 class="sec-title text-anim2">Recognized by Leading Education Bodies</h2>
                        <p>MIU holds prestigious recognitions from top national and international councils. These
                            affiliations validate our commitment to academic excellence, quality education, and adherence to
                            global university standards, ensuring your degree is valued worldwide.</p>
                    </div>
                </div>

            </div>

            <div class="row  justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6  col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/All_India_Council_for_Technical_Education_logo.png') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/Association_of_Indian_Universities_Logo.svg') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/national-assessment-and-accreditation-council-01.jpg') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/UGC_India_Logo.png') }}" alt="Accenture"
                            class="img-fluid affliation_img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-course-area-1 space shape-mockup-wrap">
        <div class="container">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="title-wrap">
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title text-anim">MIU PROGRAMS</span>
                            <h2 class="sec-title text-anim2">Choose Your Path <span class="d-block">at Manipur
                                    International University</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs course-tabs popularcourse-tab" role="tablist">
                            @foreach ($categories as $index => $category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link th-btn style-border1 {{ $index == 0 ? 'active' : '' }}"
                                        id="{{ Str::slug($category->name) }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ Str::slug($category->name) }}Tab" type="button"
                                        role="tab">
                                        {{ $category->name }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                @foreach ($categories as $index => $category)
                    <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                        id="{{ Str::slug($category->name) }}Tab">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            @php
                                $categoryPrograms = $groupedPrograms[$category->name] ?? [];
                            @endphp
                            @foreach ($categoryPrograms as $program)
                                <div class="col">
                                    <div class="academic-card p-0"
                                        style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                        <div class="academic-img mb-0">
                                            <a href="program-details.html"><img
                                                    src="{{ asset($program->image ?? 'assets/img/academic/default.jpg') }}"
                                                    alt="School of Engineering"></a>
                                        </div>
                                        <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                            <h3 class="box-title"><a href="program-details.html">{{ $program->name }}</a>
                                            </h3>
                                            <p class="box-text style2 my-2"
                                                style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                {{ Str::limit($program->short_description ?? 'Program details available', 50) }}
                                            </p>
                                            <div class="d-flex justify-content-between mt-2 mb-2">
                                                <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                                <a href="/program/{{ $program->slug }}"
                                                    class="th-btn style-border1 th-icon">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn-wrap mt-50 text-center d-block">
                <a class="th-btn th-icon" href="/program">Browse All Categories</a>
            </div>
        </div>
    </section>

    <div class="counter-area1 overflow-hidden">
        <div class="container th-container2">
            <div class="counter-wrap1">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-1.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">2019</span></h3>
                        <p class="box-text">Year of Establishment</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-2.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                        <p class="box-text">Academic Programs</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                    <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-3.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">1000</span>+</h3>
                        <p class="box-text">Students Enrolled</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-4.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">20</span>+</h3>
                        <p class="box-text">International Collaborations</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <section class="academic1-area space overflow-hidden" id="program-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-9 col-12">
                    <div class="title-area text-center text-lg-start mb-75"><span
                            class="sub-title text-anim">ACADEMICS</span>
                        <h2 class="sec-title text-anim2">Schools & Faculties</h2>
                        <p>Our Schools and Faculties bring together experienced academicians and subject experts dedicated
                            to excellence in teaching and research. Each department is designed to foster specialized
                            knowledge, critical thinking, and academic innovation.</p>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="/school"
                            class="th-btn style-border1 th-icon">Explore All</a></div>
                </div>
            </div>

            <div class="academic-wrapp container my-4">
                <div class="slider-area">
                    <!-- 移除swiper，使用Bootstrap 5 grid system：一行4列，响应式 -->
                    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @foreach ($schools as $school)
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img src="{{ asset($school->image) }}"
                                                alt="MBA"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">{{ $school->name }}</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{ $school->short_description }}</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="/school/{{ $school->slug }}"
                                                class="th-btn style-border1 th-icon">Read More</a>
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section class="stack-slider-section" id="stackSlider">
        <div class="container pt-5 pb-0 mb-0">
            <div class="events-header">
                <span class="events-subtitle text-white">Upcoming Events</span>
                <h2 class="events-heading text-white">Engage, Learn, Experience Campus Life</h2>
                <p class="events-description text-white">Discover a dynamic calendar of academic, cultural, and
                    professional events designed to enrich learning and student engagement.</p>
            </div>
        </div>
        <div class="stack-wrapper">
            <div class="stack-sticky">
                <div class="stack-container">
                    <div class="cards-stack">

                        <!-- Event Card 1 -->
                        <div class="stack-card active" data-index="0">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">UPCOMING</span>
                                        <h2 class="card-title">Industry Leadership Talk on Future Career Opportunities</h2>
                                        <p class="card-text">A distinguished session featuring industry leaders sharing
                                            insights on evolving career landscapes, emerging roles, and essential skills
                                            required to succeed in a competitive global environment.</p>
                                        <span class="card-counter">01 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/events/1.jpg') }}" alt="Cultural Fest">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2: Tech Summit -->
                        <div class="stack-card" data-index="1">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">WORKSHOP</span>
                                        <h2 class="card-title">Advanced Skill Development Workshop on Emerging Technologies
                                        </h2>
                                        <p class="card-text">An intensive hands-on workshop focused on building practical
                                            expertise in cutting-edge technologies, enhancing technical competencies, and
                                            preparing students for future industry demands.</p>
                                        <span class="card-counter">02 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/events/2.jpg') }}" alt="Hackathon">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3: Sports Meet -->
                        <div class="stack-card" data-index="2">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">SEMINAR</span>
                                        <h2 class="card-title">Strategy Seminar for Professional Growth and Success</h2>
                                        <p class="card-text">An expert-driven seminar offering guidance on career planning,
                                            professional development strategies, and actionable insights to navigate complex
                                            industry expectations effectively.</p>
                                        <span class="card-counter">03 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/events/3.jpg') }}" alt="Sports Event">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 4: Guest Lecture Series -->
                        <div class="stack-card" data-index="3">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">EVENT</span>
                                        <h2 class="card-title">Annual Academic and Cultural Excellence Fest Celebration
                                        </h2>
                                        <p class="card-text">A flagship campus event celebrating innovation, creativity,
                                            and talent through diverse academic, cultural, and extracurricular activities
                                            fostering holistic student development.</p>
                                        <span class="card-counter">04 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/events/4.jpg') }}" alt="Guest Lecture">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 5: Placement Drive & Career Fair -->
                        <div class="stack-card" data-index="4">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">TRAINING</span>
                                        <h2 class="card-title">Comprehensive Placement Preparation and Interview Readiness
                                            Program</h2>
                                        <p class="card-text">A structured training initiative focused on aptitude building,
                                            communication enhancement, and interview mastery to maximize student success in
                                            campus recruitment processes.</p>
                                        <span class="card-counter">05 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/events/5.jpg') }}" alt="Career Fair">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Progress Bar & Counter -->
                    {{-- <div class="progress-indicator">
                    <div class="progress-bar-bg">
                        <div class="progress-fill"></div>
                    </div>
                    <div class="progress-text">
                        <span id="current-num">01</span> / <span id="total-num">05</span>
                    </div>
                </div> --}}

                    <!-- Scroll Hint (unchanged) -->
                    {{-- <div class="scroll-hint">
                    <div class="mouse"></div>
                    <span>Scroll to explore events</span>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="placement-section overflow-hidden space" id="placement">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="title-area mb-5">
                        <span class="sub-title">100% Placement Assistance</span>
                        <h2 class="sec-title">Driving Career Outcomes Through Strategic Placement Excellence</h2>
                        <p class="sec-text">A robust placement ecosystem integrating training, industry partnerships, and
                            recruitment drives to ensure consistent and high-quality career opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="stats-number">1000+</h3>
                        <p class="stats-text">Placement Offers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="stats-number">500+</h3>
                        <p class="stats-text">Recruiters </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="stats-number">95%</h3>
                        <p class="stats-text">Placement Rate </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="stats-number">10 LPA </h3>
                        <p class="stats-text">Highest Package </p>
                    </div>
                </div>
            </div>

            <!-- Recruiters Slider/Grid -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="text-center mb-4" style="color: #0a2540;">Our Valued Recruiters</h3>
                    <div class="recruiters-slider">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/Accenture_logo.svg') }}" alt="Accenture"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/amazon_logo.webp') }}" alt="Amazon"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/deliotee.png') }}" alt="Deloitte"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/google-logo.webp') }}" alt="Google"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/IBM_logo.png') }}" alt="Infosys"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/infosys.png') }}" alt="Infosys"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/microsoft_logo_icon_168102.webp') }}"
                                        alt="Microsoft" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/tcs.png') }}" alt="TCS"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/Tech_Mahindra_logo.png') }}"
                                        alt="Tech Mahindra" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/wilpro_logo.png') }}" alt="Wipro"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Placement Process -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="text-center mb-4" style="color: #0a2540;">Placement Process</h3>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>01</span>
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                &emsp;<h4> Profile Development</h4>
                                <p>Comprehensive resume building and portfolio enhancement </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>02</span>
                                    <i class="fas fa-chalkboard-user"></i>
                                </div>
                                &emsp;<h4> Skill Enhancement</h4>
                                <p>Focused training in aptitude, technical, and communication skills </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>03</span>
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                &emsp; <h4> Interview Readiness</h4>
                                <p>Mock interviews with expert evaluation and feedback </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>04</span>
                                    <i class="fas fa-handshake"></i>
                                </div>
                                &emsp; <h4> Career Placement</h4>
                                <p>Final recruitment through campus drives and industry networks </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="th-btn th-icon">Placement Drive 2025-26</a>
                </div>
            </div>
        </div>
    </section>
    <section class="why-area why-bg position-relative space overflow-hidden" style="    background-color: #44272a14;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">Excellence & Distinction</span>
                        <h2 class="sec-title text-anim2">Why MIU Continues to <span class="d-block"> Standout from The
                                Rest</span></h2>
                    </div>
                    <div class="row gy-60">
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">1</span>
                                        <h3 class="box-title"><a href="about.html">Strategic Industry Alignment</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Academic programs co-developed with industry insights to
                                            ensure
                                            immediate relevance and long-term career sustainability. </p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">2</span>
                                        <h3 class="box-title"><a href="about.html">World-Class Infrastructure</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Advanced facilities designed to foster innovation, research,
                                            and collaborative learning experiences.
                                        </p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".6s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">3</span>
                                        <h3 class="box-title"><a href="about.html">Faculty of Distinction</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Academicians and practitioners delivering intellectually
                                            enriching and application-oriented education.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".8s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">4</span>
                                        <h3 class="box-title"><a href="about.html">Career-Centric Ecosystem</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Integrated placement architecture with training, internships,
                                            and corporate engagement. </p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">5</span>
                                        <h3 class="box-title"><a href="about.html">Skill & Leadership Development</a>
                                        </h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Focus on developing adaptable, confident, and industry-ready
                                            professionals. </p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">6</span>
                                        <h3 class="box-title"><a href="about.html">Global Academic Outlook</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Exposure to international standards, practices, and
                                            cross-cultural learning environments.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="why-video">
                        <div class="why-video-bg overflow-hidden gsap-parallax"><img
                                src="{{ asset('/assets/img/why/why-video1-1.jpg') }}" alt="image">
                            {{-- <div class="why-video-btn"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="campus overflow-hidden space pb-0">
        <div class="story-area-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="title-area text-center text-lg-start">
                            <span class="sub-title text-anim mt-2">MIU Student Stories</span>
                            <h2 class="sec-title text-anim2">Voices of Achievement and Transformation</h2>
                        </div>
                    </div>
                    {{-- <div class="col-auto align-self-end">
                        <div class="sec-btn wow fadeInUp" data-wow-delay=".3s">
                            <a href="program.html" class="th-btn style-border1 th-icon">Discover More Stories</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="container-fluid">
                <div class="swiper th-slider story-slider1" id="storySlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1400":{"slidesPerView":"5"},"1200":{"slidesPerView":"4"},"992":{"slidesPerView":"4"},"768":{"slidesPerView":"3"},"576":{"slidesPerView":"2"}},"spaceBetween":"0"}'>
                    <div class="swiper-wrapper">
                        <!-- Slide 1 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-1.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Aman Verma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"MIU University provided a strong academic foundation complemented
                                        by practical exposure. The structured training and faculty mentorship played a
                                        pivotal role in helping me secure a rewarding position in a leading organization."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Aman Verma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-2.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"The learning environment at MIU fostered both confidence and
                                        competence. Industry-oriented curriculum and continuous skill development
                                        initiatives helped me transition seamlessly from academics to a professional career"
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-3.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rahul Singh</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"MIU’s emphasis on experiential learning and placement preparation
                                        significantly enhanced my career readiness. The guidance from faculty and training
                                        sessions ensured I performed confidently during recruitment processes."</p>
                                    <h3 class="box-title"><a href="program.html">Rahul Singh</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-4.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"The university’s holistic approach towards education helped me
                                        develop both technical and interpersonal skills. The placement support system
                                        provided excellent opportunities to begin my professional journey successfully"</p>
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-5.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Arjun Mehta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"With a focus on real-world applications and continuous learning,
                                        MIU prepared me for industry challenges. The exposure to practical training and
                                        mentorship proved invaluable for my career growth."</p>
                                    <h3 class="box-title"><a href="program.html">Arjun Mehta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-1.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Sneha Kapoor</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"MIU University offered a perfect blend of academic excellence and
                                        skill development. The structured placement programs and faculty support helped me
                                        secure a position aligned with my career aspirations."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Sneha Kapoor</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-2.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Vikas Yadav</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"The emphasis on industry integration and practical learning gave
                                        me a competitive edge. MIU’s placement training and expert guidance were
                                        instrumental in shaping my professional success."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Vikas Yadav</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 8 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-3.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Pooja Singh</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"From classroom learning to corporate readiness, MIU ensured a
                                        comprehensive development journey. The faculty mentorship and placement initiatives
                                        played a key role in my successful career transition"</p>
                                    <h3 class="box-title"><a href="program.html">Pooja Singh</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 9 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-4.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rohit Kumar</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"MIU’s focus on skill enhancement and industry exposure helped me
                                        build confidence and expertise. The structured training programs prepared me
                                        effectively for real-world job opportunities."</p>
                                    <h3 class="box-title"><a href="program.html">Rohit Kumar</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 10 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-5.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Anjali Verma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"The academic environment at MIU encouraged continuous learning
                                        and growth. The practical exposure and career-focused training helped me secure a
                                        position in a reputed organization."</p>
                                    <h3 class="box-title"><a href="program.html">Anjali Verma</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="{{ asset('/assets/img/story/story-1-5.jpg') }}"
                                        alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Karan Malhotra</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="{{ asset('/assets/img/icon/quote.svg') }}"
                                            alt=""></div>
                                    <p class="box-text">"MIU University provided me with the right platform to develop my
                                        skills and achieve my goals. The placement support and industry exposure were
                                        crucial in shaping my career path."</p>
                                    <h3 class="box-title"><a href="program.html">Karan Malhotra</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event-area-1 position-relative overflow-hidden space" id="event-sec">
        <div class="event-shape shape-mockup d-none d-xxl-block" data-top="0%" data-left="0%"><img
                src="{{ asset('/assets/img/shape/shape-2.png') }}" alt=""></div>
        {{-- <div class="event-shape jump shape-mockup d-none d-xxl-block" data-bottom="0%" data-left="3%"><img
                src="{{asset('/assets/img/shape/event-1-1.png') }}" alt=""></div> --}}
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">Latest News &
                            Blog</span>
                        <h2 class="sec-title text-anim2">Insights, Ideas & Perspectives</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="event.html"
                            class="th-btn style-border1 th-icon">Our Blogs</a></div>
                </div>
            </div>

            <div class="row gy-4 event-card-wrap">

                <div class="row">
                    <!-- Card 1 - Blog 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">12</h5>
                                    <p class="blog-date-text">MAR,2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">The Rise of Skill-Based Higher
                                        Education in India</a></h3>
                                <p class="box-text">An in-depth analysis of how skill-driven education models is reshaping
                                    academic frameworks and enhancing employability outcomes across industries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 - Blog 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">05</h5>
                                    <p class="blog-date-text">Mar, 2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Bridging the Gap Between Academia and
                                        Industry</a></h3>
                                <p class="box-text">Exploring the importance of industry collaboration in designing
                                    relevant curriculum and preparing students for real-world challenges.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 - Blog 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                        <img src="{{ asset('/assets/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">25 </h5>
                                    <p class="blog-date-text">Feb, 2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Emerging Career Opportunities in
                                        Technology and Management</a></h3>
                                <p class="box-text">A comprehensive overview of high-growth career domains and strategies
                                    students can adopt to remain competitive in evolving job markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="apply-stadum-area bg-title position-relative space overflow-hidden">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-xl-6 order-1 order-xl-0">
                    <div class="bg-white p-4 rounded-3 shadow-lg">

                        @include('web.parts.enquery-form')
                    </div>
                </div>
                <div class="col-xl-6 order-0 order-xl-1">
                    <div class="apply-stadum-thumb reveal"><img
                            src="{{ asset('/assets/img/apply-stadum/apply-stadum-home-1.jpg') }}" alt="image"
                            class="">
                    </div>
                </div>
            </div>
        </div><span class="apply-stadum-shape wow fadeInRight" data-wow-delay=".3s"></span>
    </section> --}}
    <section class="faq-area-1 bg-white position-relative space overflow-hidden">

        <div class="container">
            <div class="row gy-30 gx-30 align-items-center justify-content-center">
                <div class="col-xxl-4 d-none d-sm-block">
                    <div class="faq-imgbox wow fadeInLeft" data-wow-delay=".3s">
                        <div class="img1"><img src="{{ asset('/assets/img/faq/faq-1-2.jpg') }}" alt="image">
                            <img src="{{ asset('/assets/img/faq/faq-1-1.jpg') }}" alt="image">
                        </div>
                        <div class="img2"><img src="{{ asset('/assets/img/faq/faq-1-3.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8">
                    <div class="faq-content">
                        <div class="faq-wrap">
                            <div class="title-area">
                                <span class="sub-title text-anim">FAQ</span>
                                <h2 class="sec-title text-anim2">Frequently Ask Questions</h2>
                                <p class="box-text mt-20 wow fadeInUp" data-wow-delay=".3s">Explore detailed answers to
                                    commonly asked questions regarding admissions, academic programs, placements, and campus
                                    facilities.
                                </p>
                            </div>
                        </div>
                        <div class="faq-box">
                            <div class="faq-wrap1">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".1s">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1">01. What academic programs are offered at MIU
                                                University?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">MIU University offers a diverse portfolio of
                                                    undergraduate (UG), postgraduate (PG), Skill, vocational and PhD
                                                    programs across management, technology, healthcare, and skill-based
                                                    disciplines, all designed to align with industry requirements and career
                                                    outcomes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".2s">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">02. Is MIU University
                                                recognized and approved by regulatory authorities?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes, MIU University operates in accordance with
                                                    established regulatory frameworks and complies with UGC guidelines,
                                                    ensuring credibility, quality education, and recognized academic
                                                    standards.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".3s">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">03. Does the university
                                                provide placement assistance to students?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">The university offers structured placement support,
                                                    including training, internships, and recruitment drives, facilitated by
                                                    strong industry connections and a dedicated placement cell.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".4s">
                                        <div class="accordion-header" id="collapse-item-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">04. Are there
                                                opportunities for practical and skill-based learning?</button>
                                        </div>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes, MIU emphasizes experiential learning through
                                                    workshops, labs, industry projects, and skill development programs to
                                                    ensure students gain hands-on knowledge.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                        <div class="accordion-header" id="collapse-item-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                aria-expanded="false" aria-controls="collapse-5">05. What facilities are
                                                available on campus for students?</button>
                                        </div>
                                        <div id="collapse-5" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">The campus provides modern infrastructure including
                                                    smart classrooms, laboratories, libraries, and dedicated spaces for
                                                    academic and extracurricular activities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".6s">
                                        <div class="accordion-header" id="collapse-item-6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                aria-expanded="false" aria-controls="collapse-6">06. How can students
                                                apply for admission at MIU University?</button>
                                        </div>
                                        <div id="collapse-6" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Students can apply through the official website by
                                                    filling out the application form, submitting required documents, and
                                                    following the admission guidelines provided.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

    <script>
        // (function() {
        //     document.addEventListener('DOMContentLoaded', function() {

        //         const cards = document.querySelectorAll('.stack-card');
        //         const totalCards = cards.length;
        //         const progressFill = document.querySelector('.progress-fill');
        //         const currentNumSpan = document.getElementById('current-num');
        //         const sliderSection = document.getElementById('stackSlider');
        //         const completionMsg = document.getElementById('completionMessage');

        //         if (totalCards === 0 || !sliderSection) return;

        //         let currentIndex = 0;
        //         let isAnimating = false;
        //         let isSliderActive = false;
        //         let scrollInSlider = false;

        //         // Set total number
        //         const totalNumSpan = document.getElementById('total-num');
        //         if (totalNumSpan) {
        //             totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
        //         }

        //         // NO body scroll locking - just prevent default on wheel/touch
        //         function isSliderVisible() {
        //             const rect = sliderSection.getBoundingClientRect();
        //             const windowHeight = window.innerHeight;

        //             const visibleTop = Math.max(0, rect.top);
        //             const visibleBottom = Math.min(windowHeight, rect.bottom);
        //             const visibleHeight = Math.max(0, visibleBottom - visibleTop);
        //             const totalHeight = rect.height;
        //             const visibilityPercentage = (visibleHeight / totalHeight) * 100;

        //             return visibilityPercentage >= 80;
        //         }

        //         // Update progress and counter
        //         function updateProgress() {
        //             if (progressFill) {
        //                 const progress = (currentIndex / (totalCards - 1)) * 100;
        //                 progressFill.style.width = progress + '%';
        //             }
        //             if (currentNumSpan) {
        //                 currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
        //             }
        //         }

        //         // Update scroll hint text
        //         function updateScrollHint() {
        //             const scrollHintSpan = document.querySelector('.scroll-hint span');
        //             if (scrollHintSpan) {
        //                 if (currentIndex === 0) {
        //                     scrollHintSpan.innerHTML = '⬆️ Scroll UP to exit slider ⬆️';
        //                     scrollHintSpan.style.color = '#f37021';
        //                 } else if (currentIndex === totalCards - 1) {
        //                     scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to exit slider ⬇️';
        //                     scrollHintSpan.style.color = '#10b981';
        //                 } else {
        //                     scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
        //                     scrollHintSpan.style.color = '#94a3b8';
        //                 }
        //             }
        //         }

        //         // Update cards position with smooth transitions
        //         function updateCards() {
        //             cards.forEach((card, idx) => {
        //                 card.classList.remove('active', 'prev', 'next', 'hidden');

        //                 if (idx === currentIndex) {
        //                     card.classList.add('active');
        //                 } else if (idx === currentIndex - 1) {
        //                     card.classList.add('prev');
        //                 } else if (idx === currentIndex + 1) {
        //                     card.classList.add('next');
        //                 } else {
        //                     card.classList.add('hidden');
        //                 }
        //             });
        //             updateProgress();
        //             updateScrollHint();
        //         }

        //         // Go to specific card
        //         function goToCard(index) {
        //             if (isAnimating) return false;
        //             if (index < 0 || index >= totalCards) return false;

        //             isAnimating = true;
        //             currentIndex = index;
        //             updateCards();

        //             // Show completion message on last slide
        //             if (currentIndex === totalCards - 1 && completionMsg) {
        //                 completionMsg.classList.add('show');
        //                 setTimeout(() => {
        //                     completionMsg.classList.remove('show');
        //                 }, 3000);
        //             }

        //             // Animation lock duration
        //             setTimeout(() => {
        //                 isAnimating = false;
        //             }, 350);

        //             return true;
        //         }

        //         // Next card
        //         function nextCard() {
        //             return currentIndex < totalCards - 1 ? goToCard(currentIndex + 1) : false;
        //         }

        //         // Previous card
        //         function prevCard() {
        //             return currentIndex > 0 ? goToCard(currentIndex - 1) : false;
        //         }

        //         // Wheel handler - preventDefault when slider is active
        //         let lastWheelTime = 0;
        //         const WHEEL_THROTTLE = 300;

        //         function handleWheel(e) {
        //             if (!isSliderVisible()) {
        //                 return; // Allow normal scrolling outside slider
        //             }

        //             isSliderActive = true;
        //             scrollInSlider = true;

        //             const now = Date.now();

        //             // Throttle
        //             if (now - lastWheelTime < WHEEL_THROTTLE) {
        //                 e.preventDefault();
        //                 return;
        //             }

        //             if (isAnimating) {
        //                 e.preventDefault();
        //                 return;
        //             }

        //             const delta = e.deltaY;

        //             // SCROLL DOWN
        //             if (delta > 0) {
        //                 if (currentIndex === totalCards - 1) {
        //                     // Last slide - allow exit
        //                     console.log('⬇️ Exiting slider - last slide');
        //                     isSliderActive = false;
        //                     return;
        //                 } else {
        //                     // Next card
        //                     if (nextCard()) {
        //                         e.preventDefault();
        //                         lastWheelTime = now;
        //                     }
        //                 }
        //             }
        //             // SCROLL UP
        //             else if (delta < 0) {
        //                 if (currentIndex === 0) {
        //                     // First slide - allow exit
        //                     console.log('⬆️ Exiting slider - first slide');
        //                     isSliderActive = false;
        //                     return;
        //                 } else {
        //                     // Previous card
        //                     if (prevCard()) {
        //                         e.preventDefault();
        //                         lastWheelTime = now;
        //                     }
        //                 }
        //             }
        //         }

        //         // Touch support for mobile
        //         let touchStartY = 0;
        //         let touchStartTime = 0;
        //         let lastTouchTime = 0;
        //         const TOUCH_THROTTLE = 300;

        //         function handleTouchStart(e) {
        //             if (!isSliderVisible() || isAnimating) return;

        //             touchStartY = e.touches[0].clientY;
        //             touchStartTime = Date.now();
        //             isSliderActive = true;
        //         }

        //         function handleTouchMove(e) {
        //             if (!isSliderVisible() || isAnimating || !isSliderActive) {
        //                 return;
        //             }

        //             const touchEndY = e.touches[0].clientY;
        //             const diff = touchStartY - touchEndY;
        //             const swipeTime = Date.now() - touchStartTime;
        //             const now = Date.now();

        //             // Check throttle
        //             if (now - lastTouchTime < TOUCH_THROTTLE) {
        //                 return;
        //             }

        //             // Require minimum swipe distance and time
        //             if (Math.abs(diff) > 50 && swipeTime < 600) {
        //                 if (diff > 0) {
        //                     // Swipe UP - next card or exit
        //                     if (currentIndex === totalCards - 1) {
        //                         isSliderActive = false;
        //                         return;
        //                     } else {
        //                         if (nextCard()) {
        //                             e.preventDefault();
        //                             lastTouchTime = now;
        //                         }
        //                     }
        //                 } else {
        //                     // Swipe DOWN - previous card or exit
        //                     if (currentIndex === 0) {
        //                         isSliderActive = false;
        //                         return;
        //                     } else {
        //                         if (prevCard()) {
        //                             e.preventDefault();
        //                             lastTouchTime = now;
        //                         }
        //                     }
        //                 }
        //                 touchStartY = touchEndY;
        //                 touchStartTime = Date.now();
        //             }
        //         }

        //         function handleTouchEnd(e) {
        //             if (!isSliderVisible()) {
        //                 isSliderActive = false;
        //             }
        //         }

        //         // Mouse wheel outside slider should unlock
        //         document.addEventListener('wheel', function(e) {
        //             if (!isSliderVisible() && isSliderActive) {
        //                 isSliderActive = false;
        //             }
        //         }, {
        //             passive: true
        //         });

        //         // Add event listeners
        //         window.addEventListener('wheel', handleWheel, {
        //             passive: false
        //         });

        //         // Touch events for mobile
        //         sliderSection.addEventListener('touchstart', handleTouchStart, {
        //             passive: true
        //         });
        //         sliderSection.addEventListener('touchmove', handleTouchMove, {
        //             passive: false
        //         });
        //         sliderSection.addEventListener('touchend', handleTouchEnd, {
        //             passive: true
        //         });

        //         // Initialize
        //         function init() {
        //             updateCards();
        //             if (isSliderVisible()) {
        //                 isSliderActive = true;
        //             }
        //         }

        //         init();

        //         // Cleanup
        //         window.addEventListener('beforeunload', () => {
        //             isSliderActive = false;
        //         });

        //         document.addEventListener('visibilitychange', () => {
        //             if (document.hidden) {
        //                 isSliderActive = false;
        //             }
        //         });

        //     });
        // })();
        (function() {
            document.addEventListener('DOMContentLoaded', function() {

                const cards = document.querySelectorAll('.stack-card');
                const totalCards = cards.length;
                const progressFill = document.querySelector('.progress-fill');
                const currentNumSpan = document.getElementById('current-num');
                const sliderSection = document.getElementById('stackSlider');
                const completionMsg = document.getElementById('completionMessage');

                if (totalCards === 0 || !sliderSection) return;

                let currentIndex = 0;
                let isAnimating = false;
                let isSliderActive = false;
                let scrollInSlider = false;

                // Set total number
                const totalNumSpan = document.getElementById('total-num');
                if (totalNumSpan) {
                    totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
                }

                // NO body scroll locking - just prevent default on wheel/touch
                function isSliderVisible() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;

                    const visibleTop = Math.max(0, rect.top);
                    const visibleBottom = Math.min(windowHeight, rect.bottom);
                    const visibleHeight = Math.max(0, visibleBottom - visibleTop);
                    const totalHeight = rect.height;
                    const visibilityPercentage = (visibleHeight / totalHeight) * 100;

                    return visibilityPercentage >= 80;
                }

                // Update progress and counter
                function updateProgress() {
                    if (progressFill) {
                        const progress = (currentIndex / (totalCards - 1)) * 100;
                        progressFill.style.width = progress + '%';
                    }
                    if (currentNumSpan) {
                        currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
                    }
                }

                // Update scroll hint text
                function updateScrollHint() {
                    const scrollHintSpan = document.querySelector('.scroll-hint span');
                    if (scrollHintSpan) {
                        if (currentIndex === 0) {
                            scrollHintSpan.innerHTML = '⬆️ Scroll UP to exit slider ⬆️';
                            scrollHintSpan.style.color = '#f37021';
                        } else if (currentIndex === totalCards - 1) {
                            scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to exit slider ⬇️';
                            scrollHintSpan.style.color = '#10b981';
                        } else {
                            scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
                            scrollHintSpan.style.color = '#94a3b8';
                        }
                    }
                }

                // Update cards position with smooth transitions
                function updateCards() {
                    cards.forEach((card, idx) => {
                        card.classList.remove('active', 'prev', 'next', 'hidden');

                        if (idx === currentIndex) {
                            card.classList.add('active');
                        } else if (idx === currentIndex - 1) {
                            card.classList.add('prev');
                        } else if (idx === currentIndex + 1) {
                            card.classList.add('next');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                    updateProgress();
                    updateScrollHint();
                }

                // Go to specific card
                function goToCard(index) {
                    if (isAnimating) return false;
                    if (index < 0 || index >= totalCards) return false;

                    isAnimating = true;
                    currentIndex = index;
                    updateCards();

                    // Show completion message on last slide
                    if (currentIndex === totalCards - 1 && completionMsg) {
                        completionMsg.classList.add('show');
                        setTimeout(() => {
                            completionMsg.classList.remove('show');
                        }, 3000);
                    }

                    // Animation lock duration - INCREASED FROM 350ms TO 600ms FOR SLOWER EFFECT
                    setTimeout(() => {
                        isAnimating = false;
                    }, 600);

                    return true;
                }

                // Next card
                function nextCard() {
                    return currentIndex < totalCards - 1 ? goToCard(currentIndex + 1) : false;
                }

                // Previous card
                function prevCard() {
                    return currentIndex > 0 ? goToCard(currentIndex - 1) : false;
                }

                // Wheel handler - preventDefault when slider is active
                let lastWheelTime = 0;
                const WHEEL_THROTTLE = 2000; // INCREASED FROM 300ms TO 600ms FOR SLOWER SCROLLING

                function handleWheel(e) {
                    if (!isSliderVisible()) {
                        return; // Allow normal scrolling outside slider
                    }

                    isSliderActive = true;
                    scrollInSlider = true;

                    const now = Date.now();

                    // Throttle
                    if (now - lastWheelTime < WHEEL_THROTTLE) {
                        e.preventDefault();
                        return;
                    }

                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // Last slide - allow exit
                            console.log('⬇️ Exiting slider - last slide');
                            isSliderActive = false;
                            return;
                        } else {
                            // Next card
                            if (nextCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // First slide - allow exit
                            console.log('⬆️ Exiting slider - first slide');
                            isSliderActive = false;
                            return;
                        } else {
                            // Previous card
                            if (prevCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                }

                // Touch support for mobile - COMPLETELY REWRITTEN FOR BETTER DETECTION
                let touchStartY = 0;
                let touchStartTime = 0;
                let lastTouchTime = 0;
                const TOUCH_THROTTLE = 600; // INCREASED FROM 300ms TO 600ms FOR SLOWER MOBILE SLIDING
                const TOUCH_THRESHOLD = 30; // REDUCED FROM 50px FOR BETTER SENSITIVITY

                function handleTouchStart(e) {
                    // Allow touch even if not perfectly visible - just check if slider exists
                    if (!sliderSection || isAnimating) return;

                    touchStartY = e.touches[0].clientY;
                    touchStartTime = Date.now();
                    isSliderActive = true;
                }

                function handleTouchMove(e) {
                    if (!isSliderActive || isAnimating || !touchStartY) {
                        return;
                    }

                    const touchCurrentY = e.touches[0].clientY;
                    const diff = touchStartY - touchCurrentY;
                    const now = Date.now();

                    // Check throttle to prevent multiple slides
                    if (now - lastTouchTime < TOUCH_THROTTLE) {
                        return;
                    }

                    // Only trigger slide if threshold is met
                    if (Math.abs(diff) > TOUCH_THRESHOLD) {
                        if (diff > 0) {
                            // Swipe UP (moving finger up) - next card or exit
                            if (currentIndex === totalCards - 1) {
                                isSliderActive = false;
                                return;
                            } else {
                                if (nextCard()) {
                                    e.preventDefault();
                                    lastTouchTime = now;
                                    touchStartY = touchCurrentY; // Reset for continuous swiping
                                    touchStartTime = now;
                                }
                            }
                        } else if (diff < 0) {
                            // Swipe DOWN (moving finger down) - previous card or exit
                            if (currentIndex === 0) {
                                isSliderActive = false;
                                return;
                            } else {
                                if (prevCard()) {
                                    e.preventDefault();
                                    lastTouchTime = now;
                                    touchStartY = touchCurrentY; // Reset for continuous swiping
                                    touchStartTime = now;
                                }
                            }
                        }
                    }
                }

                function handleTouchEnd(e) {
                    touchStartY = 0;
                    touchStartTime = 0;
                    // Keep isSliderActive true unless we've exited
                }

                // Mouse wheel outside slider should unlock
                document.addEventListener('wheel', function(e) {
                    if (!isSliderVisible() && isSliderActive) {
                        isSliderActive = false;
                    }
                }, {
                    passive: true
                });

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });

                // Touch events for mobile - FIXED FOR BETTER COMPATIBILITY
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: true
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });
                sliderSection.addEventListener('touchend', handleTouchEnd, {
                    passive: true
                });

                // Initialize
                function init() {
                    updateCards();
                    if (isSliderVisible()) {
                        isSliderActive = true;
                    }
                }

                init();

                // Cleanup
                window.addEventListener('beforeunload', () => {
                    isSliderActive = false;
                });

                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) {
                        isSliderActive = false;
                    }
                });

            });
        })();
    </script>
    <script>
        (function() {
            const form = document.getElementById('enquiryForm');
            const successDiv = document.getElementById('formSuccessMessage');
            const errorDiv = document.getElementById('formErrorMessage');

            // real-time phone formatting (nice UX)
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let val = e.target.value.replace(/\D/g, '');
                    if (val.length > 10) val = val.slice(0, 10);
                    if (val.length >= 4 && val.length <= 7) {
                        e.target.value = val.slice(0, 4) + ' ' + val.slice(4);
                    } else if (val.length > 7) {
                        e.target.value = val.slice(0, 4) + ' ' + val.slice(4, 7) + ' ' + val.slice(7, 10);
                    } else {
                        e.target.value = val;
                    }
                });
            }

            // client side validation for better experience (still server side works)
            form.addEventListener('submit', function(e) {
                let isValid = true;
                let errorText = '';

                const name = document.getElementById('name')?.value.trim();
                const email = document.getElementById('email')?.value.trim();
                const phone = document.getElementById('phone')?.value.trim();
                const city = document.getElementById('city')?.value.trim();
                const state = document.getElementById('state')?.value.trim();

                if (!name) {
                    isValid = false;
                    errorText = 'Please enter your full name.';
                } else if (!email || !/^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/.test(email)) {
                    isValid = false;
                    errorText = 'Valid email is required.';
                } else if (!phone) {
                    isValid = false;
                    errorText = 'Phone number is required.';
                } else {
                    const digits = phone.replace(/\D/g, '');
                    if (digits.length < 10 || digits.length > 13) {
                        isValid = false;
                        errorText = 'Enter a valid phone number (10 digits).';
                    } else if (digits.length === 10 && !['6', '7', '8', '9'].includes(digits[0])) {
                        isValid = false;
                        errorText = 'Mobile must start with 6,7,8,9.';
                    }
                }
                if (isValid && !city) {
                    isValid = false;
                    errorText = 'City is required.';
                }
                if (isValid && !state) {
                    isValid = false;
                    errorText = 'State is required.';
                }

                if (!isValid) {
                    e.preventDefault();
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${errorText}`;
                    successDiv.style.display = 'none';
                    setTimeout(() => {
                        errorDiv.style.display = 'none';
                    }, 4000);
                    return false;
                }

                // If valid, we allow laravel submission, but also we can show loading
                const btn = form.querySelector('.btn-submit');
                btn.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Submitting...';
                btn.disabled = true;
                // success will be shown after redirect or stay, but we don't prevent default
                // Note: the default action sends to laravel route.
                return true;
            });

            // If there are old Laravel errors, show them in error div
            @if ($errors->any())
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Please check the form and try again.';
                setTimeout(() => {
                    errorDiv.style.display = 'none';
                }, 5000);
            @endif

            // If success flash message from session (optional)
            @if (session('success'))
                successDiv.style.display = 'block';
                setTimeout(() => {
                    successDiv.style.display = 'none';
                }, 5000);
            @endif
        })();
    </script>
@endsection
