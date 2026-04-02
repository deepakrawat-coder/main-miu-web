@extends('web.layouts.main')
@section('title', '| Specialization Details')
@section('description',
'Manipur International University – Artificial Intelligence & Machine Learning Specialization
Details')

@section('styles')
<style>
    /* Tabs */
    .pr-tab {
        display: none;
    }

    .pr-tab.active-tab {
        display: block;
    }

    .text-black {
        color: black !important;
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
            z-index: 5;
        }
    }

    @media (max-width: 991px) {
        .sticky-department {
            position: static;
        }
    }

    .program-details-tab-content__inner {
        background-color: #17345a;
    }

    .programmes-offered-area {
        background: black;
    }

    /* Enhanced Styles for New Sections */
    .specialization-features {
        background: white;
        padding: 80px 0;
    }

    .feature-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #f0f0f0;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        border-color: #17345a;
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
    }

    .feature-icon i {
        font-size: 30px;
        color: white;
    }

    .stat-box {
        background: white;
        border-radius: 15px;
        padding: 40px 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .stat-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .stat-number {
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 15px;
        line-height: 1;
    }

    .specialization-badge {
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
        color: white;
        padding: 10px 25px;
        border-radius: 50px;
        font-size: 0.95rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
        letter-spacing: 0.5px;
    }

    /* Curriculum Timeline */
    .curriculum-structure {
        padding: 80px 0;
        background: #f9fafc;
    }

    .curriculum-timeline {
        position: relative;
        padding: 40px 0;
    }

    .curriculum-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, #17345a 0%, #2c5282 100%);
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        width: 50%;
        padding: 30px 40px;
        margin-bottom: 30px;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
        padding-right: 70px;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
        padding-left: 70px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: white;
        border: 4px solid #17345a;
        border-radius: 50%;
        top: 40px;
    }

    .timeline-item:nth-child(odd)::before {
        right: -10px;
    }

    .timeline-item:nth-child(even)::before {
        left: -10px;
    }

    .timeline-content {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        border: 1px solid #eef2f7;
    }

    .timeline-content h5 {
        color: #17345a;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
        font-weight: 600;
    }

    .timeline-content ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .timeline-content li {
        padding: 8px 0;
        position: relative;
        padding-left: 25px;
    }

    .timeline-content li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #17345a;
        font-weight: bold;
    }

    /* Elective Courses */
    .elective-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        height: 100%;
        border: 2px solid transparent;
    }

    .elective-card:hover {
        transform: translateY(-8px);
        border-color: #17345a;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
    }

    .elective-card h6 {
        color: #17345a;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Career Opportunities */
    .career-opportunities-area {
        padding: 80px 0;
    }

    .career-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid #f0f0f0;
    }

    .career-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .career-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .career-icon i {
        font-size: 28px;
        color: white;
    }

    .career-card h5 {
        color: #17345a;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .skills .badge {
        background: #e9f0ff;
        color: #17345a;
        padding: 6px 12px;
        margin-right: 8px;
        margin-bottom: 8px;
        font-weight: 500;
        border-radius: 6px;
    }

    /* Placement Partners */
    .partner-logos {
        padding: 30px;
        background: white;
        /* border-radius: 15px;
                                                            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06); */
    }

    .partner-logo {
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        margin: 10px;
        transition: all 0.3s ease;
    }

    .partner-logo:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Alumni Success */
    .alumni-success {
        padding: 80px 0;
        background: #f9fafc;
    }

    .alumni-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .alumni-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .alumni-img {
        padding: 30px 0 20px;
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
    }

    .alumni-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 4px solid white;
        margin: 0 auto;
        overflow: hidden;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: #17345a;
        font-weight: bold;
    }

    .alumni-content {
        padding: 30px;
    }

    .achievements .badge {
        background: #e9f0ff;
        color: #17345a;
        padding: 6px 12px;
        margin-right: 8px;
        border-radius: 6px;
        font-weight: 500;
    }

    /* FAQ Section */
    .faq-section {
        padding: 80px 0;
        background: white;
    }

    .accordion-box {
        /* max-width: 800px;
                                                                                    margin: 0 auto; */
    }

    .accordion {
        margin-bottom: 15px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .acc-btn {
        padding: 25px 30px;
        background: white;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        position: relative;
        font-weight: 600;
        color: #17345a;
        font-size: 1.1rem;
    }

    .acc-btn.active {
        background: linear-gradient(135deg, #17345a 0%, #2c5282 100%);
        color: white;
    }

    .icon-outer {
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
    }

    .acc-content {
        padding: 0 30px;
        background: white;
        display: none;
    }

    .acc-content.current {
        display: block;
        padding: 25px 30px;
        border-top: 1px solid #f0f0f0;
    }

    /* CTA Section */
    .cta-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #17345a 0%, #1a3d6b 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><path fill="rgba(255,255,255,0.03)" d="M0,500C0,500,250,600,500,500S1000,400,1000,400V1000H0Z"/></svg>') no-repeat;
        background-size: cover;
    }

    .cta-content h3 {
        font-size: 2.2rem;
        font-weight: 700;
    }

    .cta-btn {
        background: white;
        color: #17345a;
        padding: 16px 40px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: 2px solid white;
    }

    .cta-btn:hover {
        background: transparent;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
    }

    /* Responsive Adjustments */
    @media (max-width: 991.98px) {
        .curriculum-timeline::before {
            left: 30px;
        }

        .timeline-item {
            width: 100%;
            left: 0 !important;
            padding: 30px 30px 30px 70px !important;
        }

        .timeline-item::before {
            left: 21px !important;
        }

        .feature-card,
        .stat-box,
        .career-card,
        .alumni-card {
            margin-bottom: 30px;
        }

        .partner-logo {
            margin: 10px 5px;
        }

        .cta-content {
            text-align: center;
            margin-bottom: 30px;
        }
    }

    @media (max-width: 767.98px) {

        .specialization-features,
        .curriculum-structure,
        .career-opportunities-area,
        .alumni-success,
        .faq-section,
        .cta-section {
            padding: 60px 0;
        }

        .stat-number {
            font-size: 2.8rem;
        }

        .timeline-content {
            padding: 20px;
        }

        .acc-btn {
            padding: 20px;
            font-size: 1rem;
        }

        .acc-content.current {
            padding: 20px;
        }
    }

    @media (max-width: 575.98px) {
        .specialization-badge {
            font-size: 0.85rem;
            padding: 8px 20px;
        }

        .feature-card,
        .career-card,
        .alumni-content {
            padding: 20px;
        }

        .cta-btn {
            padding: 14px 30px;
            font-size: 1rem;
        }
    }

    .partnerSwiper .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .partnerSwiper .swiper-slide:hover {
        opacity: 1;
        transform: scale(1.05);
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
                        <h2>{{ $specialization->title }}</h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <ul>
                            <li><a href="/">Home</a></li>
                            {{-- <li><a href="{{ route('departments') }}">Departments</a></li> --}}
                            <li class="active">{{ $specialization->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PAGE NAVIGATION -->
<section class="page-contains-area stricky">
    <div class="container-fluid justify-content-center d-flex">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-contains-box">
                    <div class="inner-title">
                        <h3>Page Contains:</h3>
                    </div>
                    <div class="page-contains-btn">
                        <ul class="navigation clearfix scroll-nav">
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#content">Course</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#career">Career</a></li>
                            <li><a href="#alumni">Alumni</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OVERVIEW SECTION -->
<section id="overview" class="program-details-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="program-details-tab-content">
                    <div class="program-details-tab-content__img-box"
                        style="background-image: url({{ asset('/assets/images/web-image/quiz-learning-choose-img-2-removebg-preview.png') }});">
                    </div>

                    <div class="program-details-tab-content__inner">
                        <div class="program-details-tab-content__inner__shape"
                            style="background-image: url({{ asset('/assets/images/web-image/quiz-learning-choose-img-2-removebg-preview.png') }});">
                        </div>

                        <div class="program-details-tab-content__text">
                            <div class="specialization-badge">Industry-Focused Specialization</div>
                            <div class="sec-title">
                                <h2>{{ $specialization->title }} : Overview</h2>
                            </div>

                            <p>
                                {!! $specialization->description !!}
                            </p>

                            {{-- <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-star"></span>
                                            </div>
                                            <div class="inner-text">
                                                <h3>Program Highlights</h3>
                                                <p>
                                                    Comprehensive coverage of AI algorithms, machine learning models, neural
                                                    networks, deep learning, natural language processing, and computer vision
                                                    with industry-relevant projects.
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-star"></span>
                                            </div>
                                            <div class="inner-text">
                                                <h3>Learning Outcomes</h3>
                                                <p>
                                                    Develop expertise in building intelligent systems, analyzing complex
                                                    datasets, implementing AI solutions, and solving real-world problems using
                                                    advanced computational techniques.
                                                </p>
                                            </div>
                                        </li>
                                    </ul> --}}
                        </div>

                        <div class="program-details-form-box">
                            <div class="sec-title">
                                <h2>Enquire About This Specialization</h2>
                            </div>

                            <form id="program-details-form-1" name="programDetailsForm" action="{{ route('enquiry.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="source_page" value="specialization-details">
                                <input type="hidden" name="specialization_id" value="{{ $specialization->id }}">
                                @if($specialization->program && $specialization->program->school)
                                <input type="hidden" name="school_id" value="{{ $specialization->program->school->id }}">
                                @endif
                                <div class="input-box">
                                    <input type="text" name="name" id="formName"
                                        placeholder="Enter Your Full Name" required>
                                </div>

                                <div class="input-box">
                                    <input type="email" name="email" id="formEmail"
                                        placeholder="Enter Your Email Address" required>
                                </div>

                                <div class="input-box">
                                    <input type="tel" name="phone" id="formPhone"
                                        placeholder="Enter Your Phone Number" required>
                                </div>

                                <div class="input-box">
                                    <textarea name="message" class="w-100 p-3" style="border: 1px solid #ced4da; border-radius: 4px;" placeholder="Write your query or message here"></textarea>
                                </div>

                                <div class="button-box">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">
                                            Submit Enquiry
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content" class="testimonial-style1-area py-5 bg-white">
    <div class="container">
        {{-- <div class="school-tech-content">
                <h3>Courses & Academic Scope</h3>
                <p>
                    The School of Technology provides a comprehensive educational experience
                    that blends rigorous coursework, laboratory training, and research
                    opportunities. Graduates are empowered to excel in diverse technology
                    domains and global industries.
                </p>

                <ul class="list-style-one">
                    <li>Software Development & Computer Engineering</li>
                    <li>Mechanical & Civil Engineering</li>
                    <li>Artificial Intelligence & Machine Learning</li>
                    <li>Cyber Security & Data Science</li>
                    <li>Internet of Things (IoT) & Cloud Computing</li>
                    <li>Robotics, Automation & Emerging Technologies</li>
                    <li>Renewable Energy & Environmental Engineering</li>
                    <li>Biomedical & Aerospace Engineering</li>
                </ul>

                <h3>Career Opportunities</h3>
                <p>
                    Graduates of the School of Technology at MIU emerge as proficient
                    technologists, creative innovators, and globally employable
                    professionals. They are well-prepared to lead technological
                    transformation across industries such as AI innovation, fintech,
                    healthtech, cyber security, smart infrastructure, and data-driven
                    enterprises.
                </p>

                <h3>Why Choose School of Technology, MIU?</h3>
                <ul class="list-style-two">
                    <li>Industry-aligned and future-oriented curriculum</li>
                    <li>State-of-the-art laboratories and research facilities</li>
                    <li>Strong focus on innovation, research, and skill development</li>
                    <li>Experienced faculty with academic and industry expertise</li>
                    <li>Holistic student development and leadership opportunities</li>
                    <li>Global career pathways and higher education prospects</li>
                </ul>
            </div> --}}
        <div class="school-tech-content">
            {!! $specialization->content !!}
        </div>
    </div>
</section>

<!-- KEY FEATURES SECTION -->
<section id="features" class="specialization-features">
    <div class="container">
        @if ($why_choose && count($why_choose) > 0)
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="sec-title">
                    <h2>Why Choose This Specialization?</h2>
                    <p class="sub-title mt-3">Distinctive advantages that make our {{ $specialization->title }}
                        program exceptional</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($why_choose as $feature)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        @if (!empty($feature->image))
                        <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}"
                            class="img-fluid rounded">
                        @else
                        <i class="fa fa-laptop"></i>
                        @endif
                    </div>

                    <h5 class="font-weight-bold  mb-3">
                        {{ $feature->title ?? 'Feature Title' }}
                    </h5>

                    <p class=" mb-0">
                        {{ Str::limit($feature->content ?? 'Feature description goes here.', 120) }}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
        @endif
        @if ($success_rate && count($success_rate) > 0)
        <div class="row mt-5">
            @foreach ($success_rate as $success_rates)
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="stat-box">
                    <div class="stat-number">{{ $success_rates->number }}</div>
                    <h5 class="font-weight-bold mb-2">{{ $success_rates->title }}</h5>
                    <p class="mb-0 text-muted">
                        {{ Str::limit($success_rates->content ?? 'Description goes here.', 120) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


<!-- CAREER OPPORTUNITIES -->
<section id="career" class="career-opportunities-area" style="background: #d1143e;">
    <div class="container">
        @if ($career && count($career) > 0)
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="sec-title">
                    <h2 class="text-white">Career Opportunities</h2>
                    <p class="sub-title mt-3 text-white">Diverse career paths for {{ $specialization->title }}
                        specialists</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($career as $careers)
            <div class="col-md-4 mb-4">
                <div class="career-card">
                    <div class="career-icon">
                        @if (!empty($careers->image))
                        <img src="{{ asset($careers->image) }}" alt="{{ $careers->title }}"
                            class="img-fluid rounded">
                        @else
                        <i class="fa fa-line-chart"></i>
                        @endif

                    </div>
                    <h5>{{ $careers->title }}</h5>
                    <p class="text-primary mb-3">
                        <i class="fa fa-inr mr-1"></i> {{ $careers->package }}
                    </p>
                    <p class="text-muted small mb-4">
                        {{ $careers->skill }}
                    </p>
                    {{-- <div class="skills">
                                <span class="badge">Python</span>
                                <span class="badge">R</span>
                                <span class="badge">SQL</span>
                                <span class="badge">Statistics</span>
                            </div> --}}
                </div>
            </div>
            @endforeach



        </div>
        @endif
        @if ($recruiter && count($recruiter) > 0)
        <div class="row mt-5">
            <div class="col-12">
                <div class="partner-logos" style="overflow:hidden;border-radius: 10px !important">
                    <h5 class="text-center mb-4">Our Placement Partners</h5>

                    <!-- Swiper -->
                    <div class="swiper partnerSwiper">
                        <div class="swiper-wrapper">

                            @foreach ($recruiter as $recruiters)
                            <div class="swiper-slide text-center">
                                <img src="{{ $recruiters->image ? asset($recruiters->image) : asset('/assets/images/partners/logo1.png') }}"
                                    class="img-fluid rounded" style="max-height:100px;" alt="Microsoft">
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
</section>

<!-- ALUMNI SUCCESS -->
@if (!empty($testimonials) && count($testimonials) > 0)
<section id="alumni" class="alumni-success bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="sec-title">
                    <h2>Alumni Success Stories</h2>
                    <p class="sub-title mt-3">Our graduates making waves in the industry</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($testimonials as $testimonial)
            <div class="col-md-4 mb-4">
                <div class="alumni-card">

                    @if (!empty($testimonial->image))
                    <img src="{{ asset($testimonial->image) }}" alt="Alumni Image" class="img-fluid">
                    @else
                    <div class="alumni-img">
                        <div class="alumni-avatar">
                            RS
                        </div>
                    </div>
                    @endif

                    <div class="alumni-content">
                        <h5 class="font-weight-bold text-center">{{ $testimonial->name }}</h5>
                        <p class="text-center text-muted mb-2">Batch: {{ $testimonial->passing_year }}</p>
                        <p class="text-center font-weight-bold text-primary mb-3">{{ $testimonial->company }}
                        </p>
                        <p class="text-center small mb-4">{{ $testimonial->message }}</p>
                        <div class="achievements text-center">
                            <span class="badge">{{ $testimonial->company }}</span>
                            <span class="badge">₹{{ $testimonial->package }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-4 mb-4">
                    <div class="alumni-card">
                        <div class="alumni-img">
                            <div class="alumni-avatar">
                                PK
                            </div>
                        </div>
                        <div class="alumni-content">
                            <h5 class="font-weight-bold text-center">Priya Kumar</h5>
                            <p class="text-center text-muted mb-2">Class of 2019</p>
                            <p class="text-center font-weight-bold text-primary mb-3">Data Scientist at Microsoft</p>
                            <p class="text-center small mb-4">"The hands-on projects and industry exposure during my
                                specialization helped me secure a position at Microsoft immediately after graduation."</p>
                            <div class="achievements text-center">
                                <span class="badge">Microsoft</span>
                                <span class="badge">₹25 LPA</span>
                            </div>
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="col-md-4 mb-4">
                    <div class="alumni-card">
                        <div class="alumni-img">
                            <div class="alumni-avatar">
                                AS
                            </div>
                        </div>
                        <div class="alumni-content">
                            <h5 class="font-weight-bold text-center">Arun Singh</h5>
                            <p class="text-center text-muted mb-2">Class of 2021</p>
                            <p class="text-center font-weight-bold text-primary mb-3">ML Researcher at IIT Delhi</p>
                            <p class="text-center small mb-4">"The research opportunities provided during my specialization
                                led me to pursue higher studies and now I'm contributing to cutting-edge ML research."</p>
                            <div class="achievements text-center">
                                <span class="badge">IIT Delhi</span>
                                <span class="badge">Research Fellow</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </div>
</section>
@endif
@if (!empty($faq) && count($faq) > 0)
<section id="faq" class="course-curriculum-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-curriculum-content-box">
                    <div class="course-layout-content-box">
                        <div class="inner-title">
                            <h4>FAQs</h4>
                            <p>Artificial Intelligence & Machine Learning</p>
                        </div>

                        {{-- <ul class="accordion-box">

                                    <!-- FAQ 1 -->
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="course-layout-title-box">
                                                <h4>What is the focus of the AI & ML specialization?</h4>
                                                <div class="icon-outer">
                                                    <i class="icon-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="course-layout-content-box-inner">
                                                <p class="p-3">
                                                    The Artificial Intelligence & Machine Learning specialization is
                                                    industry-focused
                                                    and designed to provide strong practical and theoretical knowledge in
                                                    intelligent
                                                    systems. It covers machine learning, deep learning, data analytics,
                                                    computer
                                                    vision, natural language processing, and real-world AI applications.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- FAQ 2 -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="course-layout-title-box">
                                                <h4>Which tools and technologies are taught in this specialization?</h4>
                                                <div class="icon-outer">
                                                    <i class="icon-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="course-layout-content-box-inner">
                                                <p class="p-3">
                                                    Students gain hands-on experience with industry-standard tools such as
                                                    Python,
                                                    TensorFlow, PyTorch, Keras, Scikit-Learn, SQL, and cloud platforms. The
                                                    curriculum
                                                    also includes exposure to big data tools, AI frameworks, and real-time
                                                    project
                                                    development environments.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- FAQ 3 -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="course-layout-title-box">
                                                <h4>What kind of career opportunities are available after this
                                                    specialization?
                                                </h4>
                                                <div class="icon-outer">
                                                    <i class="icon-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="course-layout-content-box-inner">
                                                <p class="p-3">
                                                    Graduates can pursue careers as AI Engineer, Machine Learning Engineer,
                                                    Data
                                                    Scientist, Business Intelligence Analyst, Research Engineer, AI
                                                    Consultant,
                                                    and
                                                    Software Developer. Opportunities are available across IT, healthcare,
                                                    finance,
                                                    manufacturing, and emerging technology sectors.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- FAQ 4 -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="course-layout-title-box">
                                                <h4>Does this specialization include internships and industry projects?</h4>
                                                <div class="icon-outer">
                                                    <i class="icon-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="course-layout-content-box-inner">
                                                <p class="p-3">
                                                    Yes, the program includes mandatory internships and industry-oriented
                                                    projects.
                                                    Students work on real-world problem statements, live projects, and case
                                                    studies
                                                    in collaboration with industry partners to ensure strong practical
                                                    exposure
                                                    and
                                                    job readiness.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- FAQ 5 -->
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="course-layout-title-box">
                                                <h4>Is this specialization suitable for research and higher studies?</h4>
                                                <div class="icon-outer">
                                                    <i class="icon-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <div class="course-layout-content-box-inner">
                                                <p class="p-3">
                                                    Absolutely. The AI & ML specialization strongly supports
                                                    research-oriented
                                                    learning. Students are encouraged to participate in research labs,
                                                    publish
                                                    papers, work on funded research projects, and pursue higher studies
                                                    including
                                                    M.Tech and Ph.D. in Artificial Intelligence and related domains.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                </ul> --}}
                        <ul class="accordion-box">
                            @foreach ($faq as $item)
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="course-layout-title-box">
                                        <h4>{{ $item['question'] }}</h4>
                                        <div class="icon-outer">
                                            <i class="icon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-content ">
                                    <div class="course-layout-content-box-inner">
                                        <p class="p-3">
                                            {{ $item['answer'] }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Smooth scrolling for navigation
        $('.scroll-nav a').on('click', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 100
            }, 1000);
        });

        // Accordion functionality
        $('.accordion .acc-btn').on('click', function() {
            var $this = $(this);
            var $parent = $this.parent();
            var $content = $this.next('.acc-content');

            if ($this.hasClass('active')) {
                $this.removeClass('active');
                $content.slideUp(300);
            } else {
                $('.accordion .acc-btn').removeClass('active');
                $('.accordion .acc-content').slideUp(300);
                $this.addClass('active');
                $content.slideDown(300);
            }
        });

        // Form submission
        $('#program-details-form-1').on('submit', function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            // Show loading state
            var submitBtn = $(this).find('button[type="submit"]');
            var originalText = submitBtn.find('.txt').text();
            submitBtn.prop('disabled', true);
            submitBtn.find('.txt').text('Submitting...');

            // Simulate API call
            setTimeout(function() {
                // Reset form
                $('#program-details-form-1')[0].reset();

                // Show success message
                // alert(
                //     'Thank you for your enquiry! Our admissions team will contact you within 24 hours.'
                // );

                // Reset button
                submitBtn.prop('disabled', false);
                submitBtn.find('.txt').text(originalText);
            }, 1500);
        });

        // Add Font Awesome icons if not already included
        if (!document.querySelector('link[href*="font-awesome"]')) {
            var faLink = document.createElement('link');
            faLink.rel = 'stylesheet';
            faLink.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css';
            document.head.appendChild(faLink);
        }
    });
</script>
<script>
    var swiper = new Swiper(".partnerSwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 5,
            }
        }
    });
</script>

@endsection