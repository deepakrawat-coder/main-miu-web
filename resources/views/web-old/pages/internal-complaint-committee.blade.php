@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <style>
        :root {
            --primary-blue: var(--thm-bg);
            --secondary-blue: var(--thm-bg);
            --accent-red: var(--thm-bg);
            --light-bg: #f8f9fc;
            --warning-red: #ffebee;
        }

        .warning-box {
            background-color: #17345a1a;
        }

        /* Form Section Styling */
        .eoc-section {
            background: linear-gradient(135deg, #f4f7fb, #eef2f7);
        }

        .eoc-main-title {
            font-weight: 700;
            color: #17345a;
        }

        .eoc-main-title i {
            color: var(--thm-base);
            margin-right: 8px;
        }

        .eoc-intro-box {
            background: linear-gradient(135deg, var(--thm-base), #2f5f9e);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .eoc-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        /* Contact Information Section Custom Styles */

        /* Decorative Elements */
        .contact-showcase-card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.1);
        }

        .decor-circle-1 {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(23, 52, 90, 0.03);
            z-index: 1;
        }

        .decor-circle-2 {
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(23, 52, 90, 0.03);
            z-index: 1;
        }

        .decor-dots {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
            height: 100px;
            background-image: radial-gradient(var(--thm-base) 2px, transparent 2px);
            background-size: 15px 15px;
            opacity: 0.1;
            z-index: 1;
        }

        /* Contact Hero Section */
        .contact-hero {
            position: relative;
            z-index: 2;
        }

        .bg-white-10 {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        /* Icon Backgrounds */
        .icon-bg {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .contact-icon .icon-bg:hover {
            transform: scale(1.1);
            background: var(--thm-base) !important;
        }

        .contact-icon .icon-bg:hover i {
            color: white !important;
        }

        /* Contact Details Section */
        .contact-details {
            position: relative;
            z-index: 2;
        }

        /* Authority Section */
        .authority-section {
            border-left: 4px solid var(--thm-base);
            transition: all 0.3s ease;
        }

        .authority-section:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Official Seal Animation */
        .official-seal i {
            animation: pulse 2s infinite;
        }

        .official-seal i:nth-child(2) {
            animation-delay: 0.3s;
        }

        .official-seal i:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        /* Action Buttons */
        .action-buttons .btn {
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .action-buttons .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(23, 52, 90, 0.2);
        }

        /* Contact Strip */
        .contact-strip {
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05);
        }

        .single-team-style2 .img-holder .title-holder {
            height: 120px !important;
        }

        @media (max-width: 768px) {
            .single-team-style2 .img-holder .title-holder {
                height: auto !important;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .contact-hero {
                border-radius: 15px 15px 0 0 !important;
            }

            .contact-details {
                border-radius: 0 0 15px 15px !important;
            }

            .decor-circle-1,
            .decor-circle-2,
            .decor-dots {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem !important;
            }

            .contact-strip .d-flex {
                flex-direction: column;
                text-align: center;
            }

            .contact-strip i {
                margin-right: 0 !important;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .contact-hero {
                padding: 30px !important;
            }

            .contact-details {
                padding: 30px !important;
            }

            .action-buttons .btn {
                padding: 12px !important;
            }
        }
    </style>
@endsection
@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Internal Complaint Committee</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Internal Complaint Committee</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-style2-area">
        <div class="container">
            <div class="sec-title pb-3 text-center">
                <div class="sub-title">
                    {{-- <h5>Teachers</h5> --}}
                </div>
                <h2>Committee Members</h2>
            </div>

            <div class="row">

                <!-- Member 1 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al3.jpg') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al3.jpg') }});"></div>
                                <h3><a href="#">Prof Charles Yuhlung</a></h3>
                                <p>Chairman</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al11.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al11.jpg') }});"></div>
                                <h3><a href="#">Associate Prof. Chandibai Potsangbam</a></h3>
                                <p>Vice Chairman</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al15.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al15.jpg') }});"></div>
                                <h3><a href="#">Dr. S. Anand</a></h3>
                                <p>Coordinator / Nodal Officer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al13.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al13.jpg') }});"></div>
                                <h3><a href="#">Dr. M. Bidyarani</a></h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al14.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al14.jpg') }});"></div>
                                <h3><a href="#">Dr. AK. Gyanendro</a></h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 6 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="700ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 700ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al17.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al17.jpg') }});">
                                </div>
                                <h3><a href="#">Dr. S. Debina</a></h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 7 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team-style2 wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('/assets/images/web-image/al16.jpg') }}" alt="">
                            </div>
                            <div class="title-holder text-center">
                                <div class="img-bg"
                                    style="background-image: url({{ asset('/assets/images/web-image/al16.jpg') }});"></div>
                                <h3><a href="#">Dr. S. Gunajit Mangang</a></h3>
                                <p>Member</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">
            <div class="sec-title pb-3 text-center">
                <div class="sub-title"></div>
                <h2>Regulatory Framework</h2>
            </div>

            <!-- 1 -->
            <div class="row mb-4">
                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-file-text"></i> UGC Regulations on Sexual Harassment, 2015
                        </h3>
                        <p class="mb-0">
                            Mandatory establishment of Internal Complaints Committee (ICC) in all higher education
                            institutions to address complaints of sexual harassment at workplace.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-gavel"></i> Sexual Harassment of Women at Workplace Act, 2013
                        </h3>
                        <p class="mb-0">
                            Every institution with more than 10 employees must constitute an ICC to provide a safe and
                            secure environment for women.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-ban"></i> UGC Regulations on Ragging, 2009
                        </h3>
                        <p class="mb-0">
                            Strict measures to prevent and prohibit ragging in all forms, ensuring zero-tolerance policy
                            across campuses.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-balance-scale"></i> Equal Opportunity Cell Guidelines
                        </h3>
                        <p class="mb-0">
                            Prevention of discrimination and promotion of equity based on caste, creed, religion, language,
                            or gender in educational institutions.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-wheelchair"></i> Rights of Persons with Disabilities Act, 2016
                        </h3>
                        <p class="mb-0">
                            Ensuring equal opportunities and protection of rights for persons with disabilities in
                            educational settings.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-users"></i> Student Grievance Redressal Mechanism
                        </h3>
                        <p class="mb-0">
                            Established framework for timely resolution of academic and non-academic grievances of students.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="specialization" class="cse-specialization-section">
        <div class="container">

            <!-- TITLE -->
            <div class="row mb-5">
                <div class="col-12 text-center sec-title pb-3">
                    <h2 class="section-title">
                        <i class="fa fa-clipboard"></i> Committee Mandate
                    </h2>
                    <p><strong>Tenure Period :</strong> This Committee is constituted for a period of 3 (three) years
                        with immediate effect from 02/12/24.</p>
                </div>
            </div>

            <!-- CARDS (Design Same as Before) -->
            <div class="row">
                <!-- Primary Objectives -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <img src="{{ asset('/assets/images/web-image/abb11.png') }}" class="img-fluid mb-3"
                            width="80" height="80" alt="image">
                        <h4>Primary Objectives</h4>
                        <p>
                            To provide a platform for addressing grievances, complaints,
                            and concerns related to harassment, discrimination, and
                            other workplace issues within the university premises.
                        </p>
                    </div>
                </div>
                <!-- Investigation & Inquiry -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <img src="{{ asset('/assets/images/web-image/abb12.png') }}" class="img-fluid mb-3"
                            width="80" height="80" alt="image">
                        <h4>Investigation & Inquiry</h4>
                        <p>
                            Conduct fair and impartial investigations into complaints
                            received, ensuring confidentiality and protection of
                            all parties involved.
                        </p>
                    </div>
                </div>
                <!-- Prevention & Awareness -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <img src="{{ asset('/assets/images/web-image/abb9.png') }}" class="img-fluid mb-3"
                            width="80" height="80" alt="image">
                        <h4>Prevention & Awareness</h4>
                        <p>
                            Organize awareness programs, workshops, and training
                            sessions to promote a safe, respectful, and
                            inclusive campus environment.
                        </p>
                    </div>
                </div>
                <!-- Support & Counseling -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <img src="{{ asset('/assets/images/web-image/abb10.png') }}" class="img-fluid mb-3"
                            width="80" height="80" alt="image">
                        <h4>Support & Counseling</h4>
                        <p>
                            Provide support services and counseling to complainants
                            while ensuring proper redressal mechanisms are in place.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="contact-information" class="py-5">
        <div class="container">
            <!-- Section Header with Creative Design -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    {{-- <div class="section-badge d-inline-block px-4 py-2 mb-3"
                        style="background: rgba(23, 52, 90, 0.1); border-radius: 50px;">
                        <span class="text-uppercase small font-weight-bold" style="color: var(--thm-base);">
                            <i class="fa fa-address-card"></i> Get in Touch
                        </span>
                    </div> --}}
                    <h2 class="sec-title pb-3 ">
                        <i class="fa fa-envelope-open-o"></i> Contact Information
                    </h2>
                    <div class="title-divider d-flex align-items-center justify-content-center">
                        <span class="line bg-primary" style="width: 50px; height: 2px;"></span>
                        <i class="fa fa-star mx-2" style="color: var(--thm-base);"></i>
                        <span class="line bg-primary" style="width: 50px; height: 2px;"></span>
                    </div>
                </div>
            </div>

            <!-- Main Contact Card with Floating Effect -->
            <div class="row align-items-center">
                <div class="col-lg-10 mx-auto">
                    <div class="contact-showcase-card position-relative">
                        <!-- Decorative Elements -->
                        <div class="decor-circle-1"></div>
                        <div class="decor-circle-2"></div>
                        <div class="decor-dots"></div>

                        <div class="row no-gutters">
                            <!-- Left Side - Contact Person Highlight -->
                            <div class="col-lg-5">
                                <div class="contact-hero h-100 d-flex flex-column justify-content-center p-4 p-xl-5"
                                    style="    background: linear-gradient(145deg, var(--thm-bg) 0%, #d1143e 100%); border-radius: 15px 0 0 15px;">

                                    <!-- Nodal Officer Badge -->
                                    <div class="nodal-badge mb-4">
                                        <span class="badge badge-light px-3 py-2">
                                            <i class="fa fa-certificate text-warning"></i> Nodal Officer
                                        </span>
                                    </div>

                                    <!-- Officer Avatar/Icon -->
                                    {{-- <div class="officer-icon mb-4">
                                        <div class="icon-circle bg-white-10 p-4 d-inline-block"
                                            style="border-radius: 50%; background: rgba(255,255,255,0.1);">
                                            <i class="fa fa-user-circle-o fa-4x text-white"></i>
                                        </div>
                                    </div> --}}

                                    <!-- Officer Details -->
                                    <h3 class="text-white font-weight-bold mb-2">Dr S Anand</h3>
                                    <p class="text-white-50 mb-4" style="font-size: 1.1rem;">
                                        <i class="fa fa-id-card-o"></i> Coordinator, Equal Opportunity Cell
                                    </p>

                                    <!-- Institution Name -->
                                    <div class="institution-info mt-3">
                                        <div class="d-flex align-items-center text-white">
                                            <i class="fa fa-university fa-2x mr-3"></i>
                                            <div>
                                                <small class="text-white-50 d-block">Institution</small>
                                                <span class="h5 text-white font-weight-bold">Manipur International
                                                    University</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Side - Contact Details & Authorization -->
                            <div class="col-lg-7">
                                <div class="contact-details p-4 p-xl-5 bg-white"
                                    style="border-radius: 0 15px 15px 0; box-shadow: 0 20px 40px rgba(0,0,0,0.08);">

                                    <!-- Contact Header -->
                                    <div class="contact-header mb-4">
                                        <h4 class="font-weight-bold" style="color: var(--thm-bg);">
                                            <i class="fa fa-map-marker"></i> How to Reach Us
                                        </h4>
                                        <p class="text-muted">
                                            For filing complaints or seeking assistance, please contact the committee
                                            through official university channels.
                                        </p>
                                    </div>

                                    <!-- Contact Channels -->
                                    <div class="contact-channels mb-5">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="media align-items-center">
                                                    <div class="contact-icon mr-3">
                                                        <div class="icon-bg p-3"
                                                            style="background: rgba(23, 52, 90, 0.1); border-radius: 12px;">
                                                            <i class="fa fa-envelope fa-2x"
                                                                style="color: var(--thm-base);"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted d-block">Email</small>
                                                        <a href="mailto:info@miu.edu.in" class="h6 font-weight-bold"
                                                            style="color: var(--thm-bg);">
                                                            info@miu.edu.in
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="media align-items-center">
                                                    <div class="contact-icon mr-3">
                                                        <div class="icon-bg p-3"
                                                            style="background: rgba(23, 52, 90, 0.1); border-radius: 12px;">
                                                            <i class="fa fa-phone fa-2x"
                                                                style="color: var(--thm-base);"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <small class="text-muted d-block">Helpline</small>
                                                        <a href="tel:+919036983337" class="h6 font-weight-bold"
                                                            style="color: var(--thm-bg);">
                                                            +91-903 698 3337
                                                        </a>
                                                        <a href="tel:+918899788788" class="h6 font-weight-bold"
                                                            style="color: var(--thm-bg);">
                                                            +91-889 978 8788
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Confidentiality Badge -->
                                    <div class="confidentiality-badge mb-4">
                                        <div class="alert"
                                            style="background: rgba(40, 167, 69, 0.1); border-left: 4px solid #28a745;">
                                            <i class="fa fa-lock text-success mr-2"></i>
                                            <span class="small font-weight-bold">All complaints handled with strict
                                                confidentiality</span>
                                        </div>
                                    </div>

                                    <!-- Authorization Signature Card -->
                                    <div class="authority-section mt-4 p-4"
                                        style="background: #f8f9fc; border-radius: 12px;">
                                        <div class="d-flex align-items-start">
                                            <div class="signature-icon mr-3">
                                                <i class="fa fa-legal fa-2x" style="color: var(--thm-base);"></i>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-2">AUTHORIZED BY</small>
                                                <h5 class="font-weight-bold mb-1" style="color: var(--thm-bg);">Prof T.
                                                    Brajeshwari Devi</h5>
                                                <p class="mb-0 text-primary font-weight-medium">Registrar, Manipur
                                                    International University</p>
                                            </div>
                                        </div>
                                        <!-- Official Seal -->
                                        <div class="official-seal mt-3 text-right">
                                            <i class="fa fa-circle-o" style="color: var(--thm-base);"></i>
                                            <i class="fa fa-circle-o mx-1" style="color: var(--thm-bg);"></i>
                                            <i class="fa fa-circle-o" style="color: var(--thm-base);"></i>
                                            <span class="ml-2 small text-muted">Official Communication</span>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="action-buttons mt-5">
                                        <div class="row">
                                            <div class="col-sm-6 mb-2">
                                                <a href="mailto:eoc@miu.edu.in" class="btn btn-block py-3"
                                                    style="background: var(--thm-base); color: white; border-radius: 10px;">
                                                    <i class="fa fa-paper-plane"></i> File a Complaint
                                                </a>
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                                <a href="#" class="btn btn-block py-3"
                                                    style="background: transparent; border: 2px solid var(--thm-base); color: var(--thm-bg); border-radius: 10px;">
                                                    <i class="fa fa-question-circle"></i> Seek Assistance
                                                </a>
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
@endsection
