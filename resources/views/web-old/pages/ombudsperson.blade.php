@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/webcss/ombusdsperson.css') }}">

 

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
                            <h2>Ombudspeerson</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Ombudspeerson</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-3">
        <section class="ombudsperson-bro w-100">

            <!-- header with university identity and notification meta -->
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                <div>
                    <h2 class="h4 mb-1 font-weight-bold" style="color: var(--thm-bg);">
                        <i class="fa fa-gavel fa-fw" style="color: var(--thm-bg); margin-right: 8px;"></i>
                        Ombudsperson for Students' Grievances
                    </h2>
                    <span class="text-muted" style="font-size: 1.1rem; font-weight: 380;">Manipur International
                        University</span>
                    <p class="text-muted" style="font-size: 1.1rem; font-weight: 380;"><strong>Authority </strong> UGC
                        Regulations 2023</p>
                </div>
                <!-- UGC 2023 badge with proper prominence -->
                <div class="mt-2 mt-sm-0">
                    <span class="badge-ugc">
                        <i class="fa fa-university" style="margin-right: 5px;"></i> UGC Regulations 2023
                    </span>
                </div>
            </div>

            <!-- notification row: no., date, tenure – fully responsive flex -->
            <div class="notif-meta d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                    <span class="font-weight-bold" style="color: #2c3e50;">
                        <i class="fa fa-file-text-o fa-fw" style="color: #3a6b3a; margin-right: 6px;"></i>
                        Notification No: MIU/DSW/CGRS-1/25/
                    </span>
                    <span class="text-muted mx-2 d-none d-sm-inline">|</span>
                    <span class="text-dark ml-1 ml-sm-0">
                        <i class="fa fa-calendar fa-fw" style="color: #4c6b3c;"></i> Date: 26/03/2025
                    </span>
                </div>
                <!-- tenure pill with icon -->
                <div class="tenure-badge mt-2 mt-sm-0">
                    <i class="fa fa-clock-o"></i> Tenure: 3 years
                </div>
            </div>

            <!-- main identity card: Retd. Professor & Head, Mathematics, Dhanamanjuri College -->
            <div class="row mt-3 align-items-stretch">
                <div class="col-md-8">
                    <div class="designation-dept d-flex flex-wrap align-items-center">
                        <div class="mr-3 mb-2 mb-sm-0">
                            <i class="fa fa-user-circle fa-3x" style="color: #346b34; opacity: 0.9;"></i>
                        </div>
                        <div>
                            <h3 class="h3 name-title mb-1" style="font-size: 2.05rem; line-height: 1.1;">T. Umabati Devi
                            </h3>
                            <div class="d-flex flex-wrap align-items-baseline">
                                <span class="font-weight-bold mr-2" style="color: var(--thm-base); font-size: 1.1rem;">
                                    <i class="fa fa-certificate" style="font-size: 0.9rem;"></i> Retired Associate Professor
                                    & Former Head
                                </span>
                                <span class="badge badge-light px-3 py-1 mt-1 mt-sm-0"
                                    style="background: #e6e9c6; color: #1f4120;">
                                    <i class="fa fa-flask"></i> Department: Mathematics
                                </span>
                            </div>
                            <div class="mt-2 institution-name text-dark">
                                <i class="fa fa-institution fa-fw" style="color: #3a5f3a;"></i> Dhanamanjuri College of
                                Arts, Imphal West, Manipur
                            </div>
                            <!-- subtle role line: Ombudsperson SGRC -->
                            <div class="mt-2" style="border-left: 4px solid #739973; padding-left: 12px;">
                                <span
                                    style="background: #e1e7eb; padding: 0.25rem 0.9rem; border-radius: 30px; font-weight: 530;">
                                    <i class="fa fa-balance-scale" style="margin-right: 6px;"></i> Role: Ombudsperson –
                                    Students’ Grievances Redressal Committee (SGRC)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- quick info col – originally appointment authority reiterated, but we show subtle apex -->
                <div class="col-md-4 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
                    <div class="text-md-right">
                        <p class="mb-1 text-muted" style="font-size: 0.85rem;">
                            <i class="fa fa-check-circle-o" style="color: #3c763d;"></i> UGC (Redressal of Grievances)
                            Regulations, 2023
                        </p>
                        <p class="mb-0">
                            <span class="font-italic" style="color: #5f6b5b;">
                                <i class="fa fa-gavel"></i> gazette appointed
                            </span>
                        </p>
                        <div class="mt-2">
                            <span class="border border-success p-1 px-3 rounded-pill text-success"
                                style="background: #fafffa;">
                                <i class="fa fa-legal"></i> SGRC
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- horizontal divider for clarity (optional) -->
            <hr class="divider-light">

            <!-- contact information section — prominent, mobile‑optimised with FontAwesome 4.5 icons -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between contact-block">
                        <!-- left side: contact label + big details -->
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="mr-3" style="font-size: 1.3rem; font-weight: 550; color: #1d4423;">
                                <i class="fa fa-address-card-o" style="font-size: 1.4rem;"></i> Contact
                            </span>
                            <!-- mobile +91 icon and email group with flex wrap -->
                            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                                <span class="mr-sm-4 mb-1 mb-sm-0" style="font-size: 1.05rem;">
                                    <i class="fa fa-mobile fa-fw fa-social-icon" style="font-size: 1.25rem;"></i>
                                    <a href="tel:+918974056543" class="text-dark font-weight-bold"
                                        style="text-decoration: none;">+91 8974056543</a>
                                </span>
                                <span style="font-size: 1.05rem;">
                                    <i class="fa fa-envelope-o fa-fw fa-social-icon" style="font-size: 1.2rem;"></i>
                                    <a href="mailto:ombudsperson@miu.edu.in" class="text-dark font-weight-bold"
                                        style="text-decoration: none; word-break: break-all;">ombudsperson@miu.edu.in</a>
                                </span>
                            </div>
                        </div>
                        <!-- right side subtle: 'ombudsperson role' hint with fa icon -->
                        <div class="mt-2 mt-lg-0">
                            <i class="fa fa-shield" style="color: #5a785a;"></i>
                            <span style="color: #4c5c4c;">students grievance</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="specialization" class="cse-specialization-section">
        <div class="container">

            <!-- TITLE -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        <i class="fa fa-bullseye"></i> UGC Guidelines for Ombudsperson
                    </h2>
                </div>
            </div>

            <!-- CARDS (Design Same as Before) -->
            <div class="row">

                <!-- Independence & Impartiality -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Independence &amp; Impartiality</h4>
                        <p>
                            The Ombudsperson shall function independently and impartially, ensuring
                            fair and unbiased resolution of student grievances without any external influence.
                        </p>
                    </div>
                </div>

                <!-- Scope of Authority -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Scope of Authority</h4>
                        <p>
                            Handle complaints related to academic, administrative, financial, and
                            other student-related matters excluding those under legal proceedings
                            or disciplinary actions.
                        </p>
                    </div>
                </div>

                <!-- Confidentiality -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Confidentiality</h4>
                        <p>
                            Maintain strict confidentiality of all complaints, proceedings, and
                            personal information of students throughout the grievance redressal process.
                        </p>
                    </div>
                </div>

                <!-- Time-bound Resolution -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Time-bound Resolution</h4>
                        <p>
                            Ensure timely resolution of grievances within prescribed time limits –
                            acknowledgment within 7 days and resolution within 30-45 days of receipt.
                        </p>
                    </div>
                </div>

                <!-- Accessibility -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Accessibility</h4>
                        <p>
                            Be accessible to all students through multiple channels including
                            in-person meetings, phone calls, emails, and online grievance portals.
                        </p>
                    </div>
                </div>

                <!-- Documentation & Reporting -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Documentation &amp; Reporting</h4>
                        <p>
                            Maintain proper records of all complaints received, actions taken,
                            and submit periodic reports to the Vice Chancellor and UGC as required.
                        </p>
                    </div>
                </div>

                <!-- Mediation & Conciliation -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Mediation &amp; Conciliation</h4>
                        <p>
                            Promote amicable settlement through mediation and conciliation
                            between students and university authorities before formal proceedings.
                        </p>
                    </div>
                </div>

                <!-- Recommendations -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Recommendations</h4>
                        <p>
                            Provide appropriate recommendations to the university administration
                            for systemic improvements and prevention of recurring issues.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
