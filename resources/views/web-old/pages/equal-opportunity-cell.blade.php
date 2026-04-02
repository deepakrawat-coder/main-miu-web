@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .about-style1__inner {
            border: none !important;
        }

        .highlight-box i {
            width: 70px;
            height: 70px;
            line-height: 70px;
            border-radius: 50%;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .highlight-box:hover i {
            background: #007bff;
            color: #fff !important;
        }

        .anti-ragging-section {
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        /* Helpline card styling */
        .helpline-card {
            /* background: linear-gradient(to right, var(--primary-blue), var(--secondary-blue)); */
            color: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(13, 71, 161, 0.2);
        }

        .helpline-title {
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .helpline-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
            transition: all 0.3s ease;
        }

        .helpline-number:hover {
            color: #e3f2fd;
            text-decoration: none;
            transform: scale(1.05);
        }

        /* Contact cards */
        .contact-card {
            border-left: 5px solid var(--primary-blue);
            padding: 20px;
            margin-bottom: 20px;
            background-color: #e3f2fd;
            border-radius: 0 8px 8px 0;
        }

        .contact-title {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .contact-link {
            color: var(--secondary-blue);
            text-decoration: none;
            font-weight: 500;
        }

        .contact-link:hover {
            color: var(--accent-red);
            text-decoration: underline;
        }

        /* Warning box */
        .warning-box {
            background-color: var(--warning-red);
            border-left: 5px solid var(--accent-red);
            padding: 20px;
            margin-top: 30px;
            border-radius: 0 8px 8px 0;
        }

        .warning-title {
            color: #c62828;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        /* Committee and squad cards */
        .spec-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .spec-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .spec-card h4 {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .helpline-number {
                font-size: 1.8rem;
            }

            .anti-ragging-section {
                padding: 20px;
            }
        }

        @media (max-width: 576px) {
            .helpline-number {
                font-size: 1.6rem;
            }
        }

        /* Icon styling */
        .icon {
            color: var(--primary-blue);
            margin-right: 10px;
        }

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

        .form-control {
            border-radius: 6px;
            padding: 12px;
        }

        .form-control:focus {
            border-color: var(--thm-base);
            box-shadow: 0 0 0 0.2rem rgba(23, 52, 90, 0.15);
        }

        .submit-btn {
            background: var(--thm-base);
            border: none;
            border-radius: 6px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .support-card {
            border-radius: 15px;
            padding: 30px;
            color: #fff;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .support-card.green {
            background: linear-gradient(135deg, #28a745, #1e7e34);
        }

        .support-card.blue {
            background: linear-gradient(135deg, #007bff, #004085);
        }

        .support-card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }

        @media(max-width:768px) {
            .eoc-intro-box {
                text-align: center;
            }
        }

        .custom-bg {
            background: linear-gradient(135deg, var(--thm-base), #2f5f9e);
        }

        .custom-bg {
            /* background: linear-gradient(135deg, #a26adf, #d98df3); */
            border-radius: 12px;
            color: #fff;
            transition: 0.3s ease;
        }

        .support-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* RESET ONLY HERE */
        .admission-wrapper {
            counter-reset: admission !important;
        }

        /* Increment */
        .single-admission-process-box {
            counter-increment: admission !important;
            position: relative;
        }

        /* Number */
        .counting-box .inner::before {
            content: counter(admission, decimal-leading-zero) !important;
            position: absolute;
            top: -50px;
            left: -80px;

            font-size: 42px;
            font-weight: 700;
            color: #d9dee4;
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
                            <div class="sec-title">
                                <h2>Equal Opportunity Cell (EOC)</h2>
                            </div>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Equal Opportunity Cell (EOC)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eoc-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="eoc-content p-4 p-md-5 shadow-sm rounded bg-white h-100">

                        <h2 class="mb-3 font-weight-bold">
                            Equal Opportunity Cell (EOC)
                        </h2>

                        <div class="title-underline mb-4"></div>

                        <p class="text-muted">
                            At <strong>Manipur International University (MIU)</strong>, we believe in the
                            transformative power of diversity and equal opportunity. Our EOC ensures an
                            inclusive, accessible, and discrimination-free campus where everyone is empowered
                            to reach their fullest potential.
                        </p>

                        <p class="text-muted mb-0">
                            We actively support differently-abled persons, economically disadvantaged groups,
                            minorities, and underrepresented communities by providing resources, guidance,
                            and opportunities to thrive academically and professionally.
                        </p>

                    </div>
                </div>

                <!-- Right Highlights -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="highlight-box text-center p-4 shadow-sm rounded h-100">
                                <i class="fa fa-wheelchair fa-2x mb-3 text-primary"></i>
                                <h5 class="font-weight-bold">Accessibility</h5>
                                <p class="small text-muted mb-0">
                                    Inclusive infrastructure and support for differently-abled individuals.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="highlight-box text-center p-4 shadow-sm rounded h-100">
                                <i class="fa fa-users fa-2x mb-3 text-success"></i>
                                <h5 class="font-weight-bold">Equal Support</h5>
                                <p class="small text-muted mb-0">
                                    Academic and financial guidance for underrepresented communities.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="highlight-box text-center p-4 shadow-sm rounded h-100">
                                <i class="fa fa-users fa-2x mb-3 text-warning"></i>
                                <h5 class="font-weight-bold">Diversity</h5>
                                <p class="small text-muted mb-0">
                                    A campus culture celebrating multicultural and inclusive values.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="highlight-box text-center p-4 shadow-sm rounded h-100">
                                <i class="fa fa-balance-scale fa-2x mb-3 text-danger"></i>
                                <h5 class="font-weight-bold">Fair Opportunity</h5>
                                <p class="small text-muted mb-0">
                                    Equal access to education, growth, and leadership opportunities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">
            <div class="sec-title-style2 text-center">
                <div class="sub-title">
                    <h5>Equal Opportunity</h5>
                </div>
                <div class="sec-title pb-3">
                    <h2>Our Commitment to Inclusive Education</h2>
                </div>
            </div>
            <!-- First Row: 3 Cards -->
            <div class="row mb-4 admission-wrapper" >
                <!-- Card 1 -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-admission-process-box">
                        <div class="counting-box">
                            <div class="inner"></div>
                        </div>
                        <div class="text-box">
                            <div class="icon">
                                <span class="icon-kindergarten"></span>
                            </div>
                            <h3><a href="#">Inclusive Learning</a></h3>
                            <div class="text">
                                <p>Ensuring equitable access to high-quality learning resources, accessible classrooms,
                                    adaptive tools, and inclusive curriculum design for all students.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card 1-->

                <!-- Card 2 -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-admission-process-box single-admission-process-box--style2">
                        <div class="counting-box">
                            <div class="inner"></div>
                        </div>
                        <div class="text-box">
                            <div class="icon">
                                <span class="icon-consultation"></span>
                            </div>
                            <h3><a href="#">Zero Discrimination</a></h3>
                            <div class="text">
                                <p>Maintaining a fair, transparent university culture free from bias through active
                                    monitoring and sensitization programs that foster mutual respect.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card 2-->

                <!-- Card 3 -->
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="single-admission-process-box single-admission-process-box--style3">
                        <div class="counting-box">
                            <div class="inner"></div>
                        </div>
                        <div class="text-box">
                            <div class="icon">
                                <span class="icon-paper"></span>
                            </div>
                            <h3><a href="#">Community Empowerment</a></h3>
                            <div class="text">
                                <p>Facilitating targeted interventions including mentorship programs, need-based
                                    scholarships, career guidance, and skill-building workshops.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Card 3-->
            </div>
            <!-- Second Row: 2 Cards (Centered) -->
            <div class="">
                <div class="row justify-content-center single-admission-process ">
                    <!-- Card 4 -->
                    <div class="col-xl-5 col-lg-5 col-md-5 ">
                        <div class="single-admission-process-box single-admission-process-box--style4">
                            <div class="counting-box">
                                <div class="inner"></div>
                            </div>
                            <div class="text-box">
                                <div class="icon">
                                    <span class="icon-handshake"></span>
                                </div>
                                <h3><a href="#">Accessibility Support</a></h3>
                                <div class="text">
                                    <p>Providing accessible infrastructure, assistive technologies, personalized
                                        accommodations,
                                        and dedicated support for differently-abled students.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Card 4-->

                    <!-- Card 5 -->
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="single-admission-process-box single-admission-process-box--style5">
                            <div class="counting-box">
                                <div class="inner"></div>
                            </div>
                            <div class="text-box">
                                <div class="icon">
                                    <span class="icon-shield"></span>
                                </div>
                                <h3><a href="#">Safe Campus Environment</a></h3>
                                <div class="text">
                                    <p>Creating a secure environment through confidential grievance redressal mechanisms,
                                        awareness campaigns on anti-harassment policies, and collaboration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Card 5-->
                </div>
            </div>
        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">
            <div class="sec-title pb-0 text-center">
                <div class="sub-title">
                    {{-- <h5>Equal Opportunity</h5> --}}
                </div>

                <h2>Policies & Initiatives</h2>

            </div>

            <!-- First Row: Scholarships & Financial Assistance -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-graduation-cap"></i> Scholarships & Financial Assistance
                        </h3>
                        <p class="mb-0">
                            Financial aid programs tailored for students from disadvantaged and marginalized backgrounds.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Second Row: Grievance Redressal Mechanism -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-balance-scale"></i> Grievance Redressal Mechanism
                        </h3>
                        <p class="mb-0">
                            A dedicated, confidential platform to address complaints related to discrimination, exclusion,
                            or harassment.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Third Row: Accessible Campus & Infrastructure -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-wheelchair"></i> Accessible Campus & Infrastructure
                        </h3>
                        <p class="mb-0">
                            Inclusive physical and digital infrastructure such as ramps, adaptive seating, and assistive
                            technologies for differently-abled students.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fourth Row: Career Guidance & Skill Development -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-briefcase"></i> Career Guidance & Skill Development
                        </h3>
                        <p class="mb-0">
                            Specialized training and mentorship initiatives to enhance employability and confidence among
                            underrepresented students.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fifth Row: Awareness & Sensitization Programs -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            <i class="fa fa-users"></i> Awareness & Sensitization Programs
                        </h3>
                        <p class="mb-0">
                            Regular workshops and campaigns promoting gender equality, disability rights, and cultural
                            sensitivity.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section id="who-can-approach-eoc" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="sec-title pb-3">
                        <i class="fa fa-handshake"></i> Who Can Approach the EOC
                    </h2>
                    <p class="text-muted">Equal Opportunity Cell - Support for All</p>
                </div>
            </div>

            <div class="row">
                <!-- SC/ST/OBC Students -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="spec-card">
                        <h5><i class="fa fa-users text-primary"></i> SC/ST/OBC Students</h5>
                        <p class="mb-0">Students from Scheduled Castes, Scheduled Tribes, and Other Backward Classes
                            seeking support or redressal.</p>
                    </div>
                </div>

                <!-- Persons with Disabilities (PwD) -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="spec-card">
                        <h5><i class="fa fa-wheelchair text-success"></i> Persons with Disabilities (PwD)</h5>
                        <p class="mb-0">Students with physical, sensory, cognitive, or learning disabilities requiring
                            academic or infrastructural assistance.</p>
                    </div>
                </div>

                <!-- Women Facing Gender-Based Challenges -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="spec-card">
                        <h5><i class="fa fa-female text-danger"></i> Women Facing Gender-Based Challenges</h5>
                        <p class="mb-0">Female students or staff encountering barriers in education, career advancement,
                            or campus safety.</p>
                    </div>
                </div>

                <!-- Individuals Facing Discrimination -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="spec-card">
                        <h5><i class="fa fa-balance-scale text-warning"></i> Individuals Facing Discrimination</h5>
                        <p class="mb-0">Anyone experiencing bias or exclusion based on religion, ethnicity, language, or
                            socio-cultural background.</p>
                    </div>
                </div>
            </div>

            <!-- Important Notice -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert text-center p-4 rounded" style="background:var(--thm-bg);">
                        <h4 class="text-white"><i class="fa fa-map-marker-alt text-white"></i> How to Reach Us</h4>
                        <p class="mb-1 text-white"><strong>Location</strong></p>
                        <p class="mb-2 text-white">
                            MIU Campus, Airport Road, Ghari, Imphal-795140
                        </p>
                        <p class="mb-1 text-white"><strong>Email</strong></p>
                        <p class="mb-0">
                            <i class="fa fa-envelope text-white"></i>
                            <a href="mailto:info@miu.edu.in" class="contact-link text-white">info@miu.edu.in</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row mt-4 text-center">
                <div class="col-12">
                    <a href="mailto:info@miu.edu.in" class="btn text-white m-2" style="background:var(--thm-base)">
                        <i class="fa fa-envelope text-white"></i> Email Us
                    </a>
                    <a href="https://maps.google.com/?q=MIU+Campus+Airport+Road+Ghari+Imphal+795140" target="_blank"
                        style="background:var(--thm-base)" class="btn text-white m-2">
                        <i class="fa fa-map-marker-alt "></i> Get Directions
                    </a>
                    {{-- <a href="#" class="btn btn-outline-primary m-2">
                        <i class="fa fa-phone"></i> Call EOC
                    </a> --}}
                </div>
            </div>
        </div>
    </section>
    <section id="complaint-assistance-form" class="eoc-section py-5" style="background: #17345a;">
        <div class="container">

            <!-- HEADER -->
            <div class="text-center mb-5">
                <h2 class="eoc-main-title text-white">
                    <i class="fa fa-shield text-white"></i> Complaint & Assistance Form
                </h2>
                <p class="text-white">Equal Opportunity Cell – Confidential Support Portal</p>
            </div>

            <!-- INTRO BOX -->
            <div class="eoc-intro-box mb-5">
                <div class="row align-items-center">
                    <div class="col-md-1 text-center">
                        <i class="fa fa-info-circle fa-3x text-white"></i>
                    </div>
                    <div class="col-md-11">
                        <h5 class="text-white mb-2">We Are Here To Support You</h5>
                        <p class="mb-0 text-light">
                            The Equal Opportunity Cell ensures fairness, inclusion and respect.
                            All submissions are handled with strict confidentiality and prompt action.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FORM CARD -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card eoc-card">
                        <div class="card-body p-4 p-md-5">

                            {{-- <form id="eocForm">

                                <!-- Name -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-user text-danger"></i> Name <strong class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Enrollment -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-id-card text-danger"></i> Enrollment No./Registration Number
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <!-- Role -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-briefcase text-danger"></i> Role at MIU <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleStaff">
                                                <label class="custom-control-label" for="roleStaff">Staff</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleStudent">
                                                <label class="custom-control-label" for="roleStudent">Student</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleFaculty">
                                                <label class="custom-control-label" for="roleFaculty">Faculty</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-building text-danger"></i> Department <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <!-- Program -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-graduation-cap text-danger"></i> Program/Course <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <!-- Phone -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-phone text-danger"></i> Phone Number <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="tel" class="form-control" pattern="[0-9]{10}" required>
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-exclamation-triangle text-danger"></i> Category of Concern <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern1">
                                                <label class="custom-control-label" for="concern1">SC/ST/OBC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern2">
                                                <label class="custom-control-label" for="concern2">PwD</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern3">
                                                <label class="custom-control-label" for="concern3">Gender-Based</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern4">
                                                <label class="custom-control-label"
                                                    for="concern4">Religious/Linguistic</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern5">
                                                <label class="custom-control-label" for="concern5">Economic</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Other -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-edit "></i> If Other, Please Specify
                                    </label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>

                                <!-- Nature -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-flag text-danger"></i> Nature of Complaint / Assistance <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <textarea class="form-control" rows="3" required></textarea>
                                </div>

                                <!-- Other Support -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-life-ring"></i> Other Support
                                    </label>
                                    <textarea class="form-control" rows="3" required></textarea>
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-4">
                                    <label class="form-label  font-weight-bold">
                                        <i class="fa fa-align-left text-danger"></i> Brief Description <strong
                                            class="text-danger">*</strong>
                                    </label>
                                    <textarea class="form-control" rows="4" required></textarea>
                                </div>

                                <!-- Declaration -->
                                <div class="form-group mb-4 border-top pt-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="declaration" required>
                                        <label class="custom-control-label font-weight-bold" for="declaration">
                                            I declare that the above information is true and correct.
                                        </label>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-lg text-white submit-btn">
                                        <i class="fa fa-paper-plane"></i> Submit Form
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary btn-lg ml-3">
                                        <i class="fa fa-refresh"></i> Reset
                                    </button>
                                </div>

                                <!-- Note -->
                                <div class="alert alert-light mt-4 text-center">
                                    <i class="fa fa-lock text-success"></i>
                                    All submissions are encrypted and confidential.
                                </div>

                            </form> --}}
                            <form id="eocForm">

                                <!-- Name -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-user text-danger"></i> Name <strong class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Enter First Name"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Enter Last Name"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Enrollment -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-id-card text-danger"></i> Enrollment No./Registration Number
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Enrollment / Registration Number" required>
                                </div>

                                <!-- Role -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-briefcase text-danger"></i> Role at MIU
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleStaff">
                                                <label class="custom-control-label" for="roleStaff">Staff</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleStudent">
                                                <label class="custom-control-label" for="roleStudent">Student</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="roleFaculty">
                                                <label class="custom-control-label" for="roleFaculty">Faculty</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-building text-danger"></i> Department
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Department Name"
                                        required>
                                </div>

                                <!-- Program -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-graduation-cap text-danger"></i> Program/Course
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Enter Program or Course Name"
                                        required>
                                </div>

                                <!-- Phone -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-phone text-danger"></i> Phone Number
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+91</span>
                                        </div>
                                        <input type="tel" class="form-control" pattern="[0-9]{10}"
                                            placeholder="Enter 10-digit Mobile Number" required>
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-exclamation-triangle text-danger"></i> Category of Concern
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern1">
                                                <label class="custom-control-label" for="concern1">SC/ST/OBC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern2">
                                                <label class="custom-control-label" for="concern2">PwD</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern3">
                                                <label class="custom-control-label" for="concern3">Gender-Based</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern4">
                                                <label class="custom-control-label"
                                                    for="concern4">Religious/Linguistic</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="concern5">
                                                <label class="custom-control-label" for="concern5">Economic</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Other -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-edit"></i> If Other, Please Specify
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Specify other category if not listed above"></textarea>
                                </div>

                                <!-- Nature -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-flag text-danger"></i> Nature of Complaint / Assistance
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Describe the nature of your complaint or assistance required" required></textarea>
                                </div>

                                <!-- Other Support -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-life-ring"></i> Other Support
                                    </label>
                                    <textarea class="form-control" rows="3" placeholder="Mention any additional support required"></textarea>
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-4">
                                    <label class="form-label font-weight-bold">
                                        <i class="fa fa-align-left text-danger"></i> Brief Description
                                        <strong class="text-danger">*</strong>
                                    </label>
                                    <textarea class="form-control" rows="4" placeholder="Provide a detailed description of your concern" required></textarea>
                                </div>

                                <!-- Declaration -->
                                <div class="form-group mb-4 border-top pt-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="declaration" required>
                                        <label class="custom-control-label font-weight-bold" for="declaration">
                                            I declare that the above information is true and correct.
                                        </label>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-lg text-white submit-btn">
                                        <i class="fa fa-paper-plane"></i> Submit Form
                                    </button>
                                    <button type="reset" class="btn btn-outline-secondary btn-lg ml-3">
                                        <i class="fa fa-refresh"></i> Reset
                                    </button>
                                </div>

                                <!-- Note -->
                                <div class="alert alert-light mt-4 text-center">
                                    <i class="fa fa-lock text-success"></i>
                                    All submissions are encrypted and confidential.
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <!-- SUPPORT CARDS -->
            <div class="row mt-5 text-center">

                <!-- Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="support-card custom-bg p-4">
                        <i class="fa fa-lock fa-2x mb-3 text-warning"></i>
                        <h5 class="font-weight-bold text-white">Confidential</h5>
                        <p class="mb-0">Your information is secure</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="support-card custom-bg p-4">
                        <i class="fa fa-bolt fa-2x mb-3 text-warning"></i>
                        <h5 class="font-weight-bold text-white">Quick Response</h5>
                        <p class="mb-0">We prioritize your concerns</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="support-card custom-bg p-4">
                        <i class="fa fa-users fa-2x mb-3 text-warning"></i>
                        <h5 class="font-weight-bold text-white">Professional Support</h5>
                        <p class="mb-0">Dedicated team assistance</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="support-card custom-bg p-4">
                        <i class="fa fa-check-square fa-2x mb-3 text-warning"></i>
                        <h5 class="font-weight-bold text-white">Action-Oriented</h5>
                        <p class="mb-0">Committed to resolution</p>
                    </div>
                </div>

            </div>


        </div>
    </section>

@endsection
@section('scripts')
@endsection
