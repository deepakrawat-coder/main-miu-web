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
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
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
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Specialization Details</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                {{-- <li><a href="{{ route('departments') }}">Departments</a></li> --}}
                                <li class="active">Specialization Details</li>
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
                                <li><a href="#requirements">Requirements</a></li>
                                <li><a href="#features">Key Features</a></li>
                                <li><a href="#curriculum">Curriculum</a></li>
                                <li><a href="#programmes">Programmes</a></li>
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
                                    <h2>Artificial Intelligence & Machine Learning Specialization</h2>
                                </div>

                                <p>
                                    The Artificial Intelligence & Machine Learning specialization at Manipur International
                                    University provides students with cutting-edge knowledge and practical skills in one of
                                    the most rapidly evolving fields of technology. This program combines theoretical
                                    foundations with hands-on experience to prepare students for careers in AI development,
                                    data science, and intelligent systems.
                                </p>

                                <ul>
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
                                </ul>
                            </div>

                            <div class="program-details-form-box">
                                <div class="sec-title">
                                    <h2>Enquire About This Specialization</h2>
                                </div>

                                <form id="program-details-form-1" name="programDetailsForm" action="#" method="post">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName"
                                            placeholder="Enter Your Full Name" required>
                                    </div>

                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail"
                                            placeholder="Enter Your Email Address" required>
                                    </div>

                                    <div class="input-box">
                                        <input type="tel" name="form_phone" id="formPhone"
                                            placeholder="Enter Your Phone Number" required>
                                    </div>

                                    <div class="input-box">
                                        <div class="select-box">
                                            <select class="wide" name="program_level" required>
                                                <option value="" data-display="Select Program Level">
                                                    Select Program Level
                                                </option>
                                                <option value="1">Undergraduate Program</option>
                                                <option value="2">Postgraduate Program</option>
                                                <option value="3">Doctoral Program</option>
                                                <option value="4">Diploma / Certificate</option>
                                                <option value="5">Working Professional</option>
                                            </select>
                                        </div>
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

    <!-- ELIGIBILITY SECTION -->
    <section id="requirements" class="requirements-for-degree bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="sec-title">
                        <h2>Eligibility & Admission Requirements</h2>
                    </div>
                    <p class="text-muted">
                        To enroll in the AI & ML specialization, applicants must meet the following academic and admission
                        criteria.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="mr-3">
                                    <i class="fa fa-graduation-cap fa-2x text-primary"></i>
                                </div>
                                <h5 class="mb-0 font-weight-bold">Undergraduate Program Requirements</h5>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Successful completion of 10+2 with Mathematics as a subject</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Minimum 55% aggregate marks in qualifying examination</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Basic understanding of programming concepts</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Valid score in university entrance examination</span>
                                </li>
                                <li class="mb-0 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Personal interview with specialization faculty</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="mr-3">
                                    <i class="fa fa-graduation-cap fa-2x text-primary"></i>
                                </div>
                                <h5 class="mb-0 font-weight-bold">Postgraduate Program Requirements</h5>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Bachelor's degree in Computer Science/IT/related field</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Minimum 60% marks in undergraduate program</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Strong foundation in programming and algorithms</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Valid GATE score (optional but preferred)</span>
                                </li>
                                <li class="mb-0 d-flex">
                                    <i class="fa fa-check text-success mr-2 mt-1"></i>
                                    <span>Research proposal for thesis-based programs</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-info border-0 shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h5 class="alert-heading mb-2">📢 Admission Notice</h5>
                                <p class="mb-0">Application deadline for the upcoming academic session: <strong
                                        class="text-dark">June 30, 2024</strong></p>
                            </div>
                            <div class="col-lg-4 text-lg-right mt-3 mt-lg-0">
                                <a href="#" class="btn btn-primary btn-lg px-4">
                                    <i class="fa fa-file-alt mr-2"></i> Download Brochure
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEY FEATURES SECTION -->
    <section id="features" class="specialization-features">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="sec-title">
                        <h2>Why Choose This Specialization?</h2>
                        <p class="sub-title mt-3">Distinctive advantages that make our AI & ML program exceptional</p>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Industry-Relevant Curriculum</h5>
                        <p class="text-center mb-0">Designed in collaboration with leading tech companies to ensure current industry relevance and practical applicability.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Advanced Research Labs</h5>
                        <p class="text-center mb-0">State-of-the-art research facilities with access to high-performance computing clusters and AI hardware.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Expert Faculty</h5>
                        <p class="text-center mb-0">Learn from experienced faculty with industry and research backgrounds in AI/ML from premier institutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Industry Internships</h5>
                        <p class="text-center mb-0">Guaranteed internship opportunities with partner companies for practical exposure and industry connections.</p>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Industry-Relevant Curriculum</h5>
                        <p class="text-center mb-0">
                            Designed in collaboration with leading tech companies to ensure current industry relevance and
                            practical applicability.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Advanced Research Labs</h5>
                        <p class="text-center mb-0">
                            State-of-the-art research facilities with access to modern computing and AI-enabled systems.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Expert Faculty</h5>
                        <p class="text-center mb-0">
                            Learn from experienced faculty with strong academic, industry, and research expertise.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h5 class="font-weight-bold text-center mb-3">Industry Internships</h5>
                        <p class="text-center mb-0">
                            Internship and industry exposure opportunities to enhance real-world skills and employability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="stat-box">
                        <div class="stat-number">95%</div>
                        <h5 class="font-weight-bold mb-2">Placement Record</h5>
                        <p class="mb-0 text-muted">Consistent high placement rate for specialization graduates across top
                            companies</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="stat-box">
                        <div class="stat-number">25+</div>
                        <h5 class="font-weight-bold mb-2">Industry Partners</h5>
                        <p class="mb-0 text-muted">Active collaborations with leading tech companies for projects and
                            placements</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="stat-box">
                        <div class="stat-number">15+</div>
                        <h5 class="font-weight-bold mb-2">Research Publications</h5>
                        <p class="mb-0 text-muted">Annual publications by students in reputed international AI conferences
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- PROGRAMMES OFFERED -->
    <section id="programmes" class="programmes-offered-area">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="programmes-offered-content-box">
                        <div class="sec-title">
                            <h2>Programmes Offered</h2>
                            <div class="sub-title">
                                <p>Comprehensive academic pathways in AI & Machine Learning</p>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="icon">
                                <span class="icon-mortarboard"></span>
                            </div>
                            <h3>Bachelor of Technology (B.Tech) in AI & ML</h3>
                            <p>A comprehensive 4-year undergraduate program providing strong foundations in artificial
                                intelligence, machine learning algorithms, and practical implementation skills.</p>
                            <ul>
                                <li>
                                    <b>Eligibility</b>: <span>10+2 with Physics, Chemistry, Mathematics (60% minimum)</span>
                                </li>
                                <li>
                                    <b>Duration</b>: <span>4 Years (8 Semesters)</span>
                                </li>
                                <li>
                                    <b>Seats Available</b>: <span>60 (Maximum)</span>
                                </li>
                                <li>
                                    <b>Start Date</b>: <span>August 2024</span>
                                </li>
                                <li>
                                    <b>Credits</b>: <span>160 Total Credits</span>
                                </li>
                            </ul>
                            <div class="btns-box">
                                <a class="btn-one btn-one--style2" href="#">
                                    <span class="txt"><span class="icon-down-arrow-1"></span>Download Brochure</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 p-3">
                    <div class="programmes-offered-img-box">
                        <div class="programmes-offered-img-bg"
                            style="background-image: url({{ asset('/assets/images/resources/programmes-offered-img.jpg') }});border-radius:10px;">
                        </div>
                        <div class="mt-4 text-center">
                            <h4 class="text-white mb-4">Also Available</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div class="program-option bg-white p-3 rounded mb-3">
                                        <h5 class="text-dark mb-2">M.Tech AI</h5>
                                        <p class="text-muted mb-0 small">2 Years PG Program</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="program-option bg-white p-3 rounded mb-3">
                                        <h5 class="text-dark mb-2">Ph.D AI</h5>
                                        <p class="text-muted mb-0 small">Research Program</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="program-option bg-white p-3 rounded">
                                        <h5 class="text-dark mb-2">M.Sc AI</h5>
                                        <p class="text-muted mb-0 small">2 Years PG Program</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="program-option bg-white p-3 rounded">
                                        <h5 class="text-dark mb-2">Executive PG</h5>
                                        <p class="text-muted mb-0 small">Working Professionals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CAREER OPPORTUNITIES -->
    <section id="career" class="career-opportunities-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="sec-title">
                        <h2>Career Opportunities</h2>
                        <p class="sub-title mt-3">Diverse career paths for AI & ML specialists</p>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h5>Data Scientist</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-rupee-sign mr-1"></i> ₹12-25 LPA
                        </p>
                        <p class="text-muted small mb-4">Analyze complex datasets to extract insights and build predictive
                            models for business decisions.</p>
                        <div class="skills">
                            <span class="badge">Python</span>
                            <span class="badge">R</span>
                            <span class="badge">SQL</span>
                            <span class="badge">Statistics</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-brain"></i>
                        </div>
                        <h5>Machine Learning Engineer</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-rupee-sign mr-1"></i> ₹10-22 LPA
                        </p>
                        <p class="text-muted small mb-4">Design, build, and deploy machine learning models and systems for
                            production environments.</p>
                        <div class="skills">
                            <span class="badge">TensorFlow</span>
                            <span class="badge">PyTorch</span>
                            <span class="badge">Cloud</span>
                            <span class="badge">MLOps</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <h5>AI Research Scientist</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-rupee-sign mr-1"></i> ₹15-30 LPA
                        </p>
                        <p class="text-muted small mb-4">Conduct cutting-edge research to advance AI capabilities and
                            develop novel algorithms.</p>
                        <div class="skills">
                            <span class="badge">Research</span>
                            <span class="badge">Algorithms</span>
                            <span class="badge">Publications</span>
                            <span class="badge">Math</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h5>Data Scientist</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 12–25 LPA
                        </p>
                        <p class="text-muted small mb-4">
                            Analyze complex datasets to extract insights and build predictive models for business decisions.
                        </p>
                        <div class="skills">
                            <span class="badge">Python</span>
                            <span class="badge">R</span>
                            <span class="badge">SQL</span>
                            <span class="badge">Statistics</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h5>Machine Learning Engineer</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 10–22 LPA
                        </p>
                        <p class="text-muted small mb-4">
                            Design, build, and deploy machine learning models and systems for production environments.
                        </p>
                        <div class="skills">
                            <span class="badge">TensorFlow</span>
                            <span class="badge">PyTorch</span>
                            <span class="badge">Cloud</span>
                            <span class="badge">MLOps</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <h5>AI Research Scientist</h5>
                        <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 15–30 LPA
                        </p>
                        <p class="text-muted small mb-4">
                            Conduct cutting-edge research to advance AI capabilities and develop novel algorithms.
                        </p>
                        <div class="skills">
                            <span class="badge">Research</span>
                            <span class="badge">Algorithms</span>
                            <span class="badge">Publications</span>
                            <span class="badge">Math</span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="row mt-5">
                <div class="col-12">
                    <div class="partner-logos">
                        <h5 class="text-center mb-4">Our Placement Partners</h5>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-6 col-md-3 col-lg-2 text-center mb-4">
                                <div class="partner-logo">
                                    <img src="/assets/images/partners/google.png" alt="Google" class="img-fluid"
                                        style="max-height: 40px;">
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 text-center mb-4">
                                <div class="partner-logo">
                                    <img src="/assets/images/partners/microsoft.png" alt="Microsoft" class="img-fluid"
                                        style="max-height: 40px;">
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 text-center mb-4">
                                <div class="partner-logo">
                                    <img src="/assets/images/partners/amazon.png" alt="Amazon" class="img-fluid"
                                        style="max-height: 40px;">
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 text-center mb-4">
                                <div class="partner-logo">
                                    <img src="/assets/images/partners/tcs.png" alt="TCS" class="img-fluid"
                                        style="max-height: 40px;">
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2 text-center mb-4">
                                <div class="partner-logo">
                                    <img src="/assets/images/partners/infosys.png" alt="Infosys" class="img-fluid"
                                        style="max-height: 40px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row mt-5">
                <div class="col-12">
                    <div class="partner-logos" style="overflow:hidden">
                        <h5 class="text-center mb-4">Our Placement Partners</h5>

                        <!-- Swiper -->
                        <div class="swiper partnerSwiper">
                            <div class="swiper-wrapper">

                                <!-- Logo 1 -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/google.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Google">
                                </div>

                                <!-- Logo 2 -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/microsoft.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Microsoft">
                                </div>

                                <!-- Logo 3 -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/amazon.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Amazon">
                                </div>

                                <!-- Logo 4 -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/tcs.png') }}" class="img-fluid" style="max-height:40px;"
                                        alt="TCS">
                                </div>

                                <!-- Logo 5 -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/infosys.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Infosys">
                                </div>

                                <!-- Dummy -->
                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/logo1.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Partner">
                                </div>

                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/logo2.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Partner">
                                </div>

                                <div class="swiper-slide text-center">
                                    <img src="{{ asset('/assets/images/partners/logo3.png') }}" class="img-fluid"
                                        style="max-height:40px;" alt="Partner">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- ALUMNI SUCCESS -->
    <section id="alumni" class="alumni-success">
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
                <div class="col-md-4 mb-4">
                    <div class="alumni-card">
                        <div class="alumni-img">
                            <div class="alumni-avatar">
                                RS
                            </div>
                        </div>
                        <div class="alumni-content">
                            <h5 class="font-weight-bold text-center">Rohan Sharma</h5>
                            <p class="text-center text-muted mb-2">Class of 2020</p>
                            <p class="text-center font-weight-bold text-primary mb-3">AI Engineer at Google</p>
                            <p class="text-center small mb-4">"The AI specialization at MIU provided me with the perfect
                                blend of theoretical knowledge and practical skills that directly translated to my current
                                role."</p>
                            <div class="achievements text-center">
                                <span class="badge">Google</span>
                                <span class="badge">₹28 LPA</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
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
                </div>

                <div class="col-md-4 mb-4">
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
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <div class="sec-title">
                            <h2>Frequently Asked Questions</h2>
                            <p class="sub-title mt-3">Find answers to common questions about the AI & ML specialization</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 ">
                    <div class="accordion-box w-100 m-0 p-0">
                        <div class="accordion block active-block">
                            <button class="acc-btn active text-black">
                                What programming languages are taught in this specialization?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content current">
                                <p>The specialization focuses primarily on Python for AI/ML development, along with R for
                                    statistical analysis. Students also learn SQL for database management and get exposure
                                    to JavaScript for AI web applications. Advanced courses cover frameworks like
                                    TensorFlow, PyTorch, and Keras.</p>
                            </div>
                        </div>

                        <div class="accordion block">
                            <button class="acc-btn text-black">
                                Are there any prerequisites for joining this specialization?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content">
                                <p>For undergraduate programs: Strong foundation in Mathematics (especially Calculus and
                                    Linear Algebra) is essential. For postgraduate programs: Basic programming knowledge and
                                    understanding of data structures is required. Some introductory courses are available
                                    for students needing background preparation.</p>
                            </div>
                        </div>

                        <div class="accordion block">
                            <button class="acc-btn text-black">
                                What kind of projects do students work on?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content">
                                <p>Students work on industry-relevant projects including image recognition systems, natural
                                    language processing applications, recommendation engines, predictive analytics models,
                                    AI-driven chatbots, autonomous vehicle simulations, healthcare diagnostics AI, and
                                    financial forecasting systems.</p>
                            </div>
                        </div>

                        <div class="accordion block">
                            <button class="acc-btn text-black">
                                Is internship mandatory in this program?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content">
                                <p>Yes, a minimum 6-month industry internship is mandatory for all students. The university
                                    has tie-ups with leading tech companies to provide internship opportunities. We also
                                    offer research internships for students interested in academic careers.</p>
                            </div>
                        </div>

                        <div class="accordion block">
                            <button class="acc-btn text-black">
                                What are the research opportunities available?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content">
                                <p>Students can participate in ongoing research projects in our AI Research Lab, collaborate
                                    with faculty on publications, work on funded research projects, attend international
                                    conferences, and contribute to open-source AI projects. Research areas include computer
                                    vision, NLP, robotics, and ethical AI.</p>
                            </div>
                        </div>

                        <div class="accordion block">
                            <button class="acc-btn text-black">
                                What support is available for placement?
                                <div class="icon-outer">
                                    <i class="fa fa-plus"></i>
                                </div>
                            </button>
                            <div class="acc-content">
                                <p>The university provides comprehensive placement support including resume building
                                    workshops, mock interviews, coding test preparation, industry connect sessions,
                                    hackathon participation, portfolio development guidance, and a dedicated placement cell
                                    for AI/ML specialization students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="cta-content">
                        <h3 class="text-white mb-3">Ready to Start Your Journey in AI & Machine Learning?</h3>
                        <p class="text-light mb-0">Join our next batch of aspiring AI specialists and build a rewarding
                            career in one of the most exciting fields of technology. Limited seats available for August 2024
                            intake.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-right text-center mt-4 mt-lg-0">
                    <a href="#" class="cta-btn">
                        <i class="fa fa-file-alt mr-2"></i> Apply Now
                    </a>
                </div>
            </div>
        </div>
    </section>

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
                    alert(
                        'Thank you for your enquiry! Our admissions team will contact you within 24 hours.'
                    );

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
