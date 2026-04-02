@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/webcss/reseachAndDevelopment.css') }}">

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
                            <h2>Research And Development Cell</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Research And Development Cell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nep-section bg-white">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="research-card text-center">
                        <div class="sec-title pb-3">
                            <h2 class="text-start w-100 text-white">National Education Policy 2020</h2>
                        </div>
                        <p class="content-text text-white">
                            The National Education Policy 2020 provides the roadmap to boost quality research in higher
                            education. As research serves as the backbone in improving the learning offered by Higher
                            Education
                            Institutions, our nation is on the front gear to tackle its societal challenges with robust
                            higher
                            education that focuses on research and innovation along with technology development.
                        </p>
                        <div class="mt-4 text-white">
                            <i class="fa fa-flask mr-2 text-white"></i>
                            <strong>Research & Innovation Focus</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision-area">
        <div class="mission-vision-area-shape"
            style="background-image: url({{ asset('/assets/images/shape/thm-shape-1.png') }});"></div>
        <div class="container">
            <!-- Row 1: Our Institution -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            {{-- <div class="sub-title">
                                <h5>Our Institution</h5>
                            </div> --}}
                            <div class="sec-title pb-3">
                                <h2>Manipur International<br> University</h2>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="top-text">
                                <div class="quote-icon">
                                    <span class="icon-quote-2"></span>
                                </div>
                                <div class="text">
                                    <p>Established as a research oriented institution with a strong ambition to augment the
                                        research turf that compliments and provide the required thrust to the numerous
                                        scholars who lack logistics support.</p>
                                </div>
                            </div>
                            <div class="bottom-text">
                                <p>Our vision is well aligned with the idea postulated by <strong>NEP 2020</strong>.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mission-vision-img-box">
                        <div class="mission-vision-img-box__inner">
                            <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}"
                                alt="Manipur International University">
                        </div>
                        <div class="icon">
                            <span class="icon-mountains"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="mission-vision-space-box">
                        <div class="dotted-line">
                            <img src="{{ asset('/assets/images/icon/dotted-line.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Vision -->
            <div class="row">
                <div class="col-xl-6 order-2">
                    <div class="mission-vision-img-box mission-vision-img-box--style2">
                        <div class="mission-vision-img-box__inner mission-vision-img-box__inner--style2">
                            <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}" alt="Research Vision">
                        </div>
                        <div class="icon">
                            <span class="icon-vision"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-1">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            <div class="sub-title">
                                <h5>Our Vision</h5>
                            </div>
                            <h2>Research<br> Excellence</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text1">
                                <p>To put in place a robust mechanism for developing and strengthening the research
                                    ecosystem within HEIs, aligned with the provisions of NEP-2020.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="mission-vision-space-box">
                        <div class="dotted-line">
                            <img src="{{ asset('/assets/images/icon/dotted-line.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 3: Mission -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="mission-vision-content-box">
                        <div class="sec-title-style2">
                            <div class="sub-title">
                                <h5>Our Mission</h5>
                            </div>
                            <h2>Strategic<br> Goals</h2>
                        </div>
                        <div class="inner-content">
                            <ul class="mt-3">
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To create a conducive environment for enhanced research productivity.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To encourage collaboration across industry, government, community-based
                                        organizations, and agencies at local, national and international levels.</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-right-arrow-3"></span>
                                    </div>
                                    <p>To facilitate greater access to research through mobilization of resources and
                                        funding.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mission-vision-img-box">
                        <div class="mission-vision-img-box__inner">
                            <img src="{{ asset('/assets/images/web-image/mission.jpg') }}" alt="Research Mission">
                        </div>
                        <div class="icon">
                            <span class="icon-target"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="research-committee-section py-5">
        <div class="container">
            <!-- Section Header with Modern Badge -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="section-title-wrapper mb-3 mb-md-0">
                            <div class="d-flex align-items-center">
                                <div class="title-icon me-3 mr-3">
                                    <i class="fa fa-flask fa-3x text-white"></i>
                                </div>
                                <div>
                                    <div class="sec-title pb-0">
                                        <h1 class=" text-start w-100 text-dark">Research Committee</h1>
                                    </div>
                                    <div class="d-flex align-items-center mt-2">
                                        <span class="badge Faculty-badge mr-2 px-4 py-2">
                                            <i class="fa fa-check-circle"></i> Faculty Research Committee
                                        </span>
                                        <span class="badge badge-navy-outline px-4 py-2">
                                            <i class="fa fa-university"></i> Pro VC Office
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="academic-year-badge">
                            <div class="px-4 py-3 text-center bg-card-soft card-rounded-15 border-dashed-navy">
                                <small class="text-muted d-block">Academic Session</small>
                                <span class="font-weight-bold text-primary-navy fs-18">2025-26</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="row">
                <!-- Left Column - Main Description & Chairman Card -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="row">
                        <!-- Description Card -->
                        <div class="col-12 mb-4">
                            <div class="card border-0 h-100 card-rounded-30 card-shadow-soft bg-navy-gradient-decor">
                                <div class="card-body p-4 p-xl-5">
                                    <div class="mb-4">
                                        <span class="fs-48 text-gold-soft"
                                            style="font-family: serif; color: rgba(228,161,27,0.15);">"</span>
                                    </div>
                                    <p class="lead mb-4 fs-20"
                                        style="line-height: 1.7; color: #2c3e50; font-weight: 400;">
                                        The overall progression of research works falls strictly under the purview of
                                        <span class="font-weight-bold px-3 py-1 badge-gold-soft d-inline-block mx-1">
                                            FRC (Faculty Research Committee)
                                        </span>
                                        headed by the Chairman who also serves as the Pro VC of the University.
                                    </p>
                                    <div class="d-flex align-items-center mt-4 pt-3 border-top border-soft-gold">
                                        <div class="mr-4 pr-4 border-right"
                                            style="border-right: 2px solid rgba(228,161,27,0.3) !important;">
                                            <i class="fa fa-users fa-2x text-primary-red"></i>
                                        </div>
                                        <p class="mb-0 font-weight-medium text-primary-navy fs-18">
                                            Other committee members are represented by the Deans of respective schools of
                                            the University.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chairman Card - Hero Style -->
                        <div class="col-12">
                            <div
                                class="card border-0 card-rounded-30 bg-navy-gradient card-shadow-navy overflow-hidden position-relative">
                                <div class="wave-decoration bg-decoration-wave"></div>
                                <div class="card-body p-4 p-xl-5 position-relative z-index-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="chairman-info">
                                                <small class="text-white-50-custom d-block mb-2 letter-spacing-2">CHAIRMAN,
                                                    FRC</small>
                                                <h2 class="text-white font-weight-bold mb-2 fs-32 text-shadow-navy">
                                                    Prof. Potsangbam Kumar Singh
                                                </h2>
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <span class="badge badge-primary-red mr-2 mb-2 px-4 py-2 fs-15">
                                                        <i class="fa fa-trophy"></i> Pro Vice-Chancellor
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-4 mt-md-0">
                                            <div class="text-md-right">
                                                <div
                                                    class="d-inline-block p-3 bg-white-fade backdrop-blur card-rounded-20">
                                                    <span class="text-white-50-custom d-block small">Since</span>
                                                    <span class="text-white font-weight-bold fs-24">2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Committee Structure & Programs -->
                <div class="col-lg-4">
                    <div class="row">
                        <!-- Committee Structure Card -->
                        <div class="col-12 mb-4">
                            <div class="card border-0 h-100 card-rounded-30 bg-white card-shadow-soft card-border-soft">
                                <div class="card-body p-4 p-xl-5">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="mr-3 icon-box-50 bg-gold-soft icon-rounded-15">
                                            <i class="fa fa-sitemap fa-2x text-primary-red"></i>
                                        </div>
                                        <h3 class="font-weight-bold mb-0 text-primary-navy fs-24">Committee Structure</h3>
                                    </div>
                                    <div class="structure-timeline mt-4">
                                        <!-- Leadership Item -->
                                        <div class="d-flex mb-4">
                                            <div class="timeline-left mr-4">
                                                <div class="icon-box-40 bg-primary-navy icon-rounded-12">
                                                    <i class="fa fa-star text-white"></i>
                                                </div>
                                                <div class="timeline-connector"></div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Leadership</small>
                                                <span class="font-weight-bold text-primary-navy fs-18">Chairman (Pro
                                                    VC)</span>
                                            </div>
                                        </div>
                                        <!-- Members Item -->
                                        <div class="d-flex mb-4">
                                            <div class="timeline-left mr-4">
                                                <div class="icon-box-40 bg-primary-red icon-rounded-12">
                                                    <i class="fa fa-users text-white"></i>
                                                </div>
                                                <div class="timeline-connector"></div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Members</small>
                                                <span class="font-weight-bold text-primary-navy fs-18">Deans of respective
                                                    schools</span>
                                            </div>
                                        </div>
                                        <!-- Scope Item -->
                                        <div class="d-flex">
                                            <div class="timeline-left mr-4">
                                                <div class="icon-box-40 bg-primary-navy-soft icon-rounded-12">
                                                    <i class="fa fa-eye text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <small class="text-muted d-block mb-1">Scope</small>
                                                <span class="font-weight-bold text-primary-navy fs-18">Overall research
                                                    progression oversight</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Research Programs Card -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card border-0 card-rounded-30 bg-primary-navy-very-light border-soft-gold">
                        <div class="card-body p-4 p-xl-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="mr-3 icon-box-50 bg-primary-red icon-rounded-15 card-shadow-gold">
                                    <i class="fa fa-graduation-cap fa-2x text-white"></i>
                                </div>
                                <h3 class="font-weight-bold mb-0 text-primary-navy fs-24">Research Programs</h3>
                            </div>
                            <p class="text-muted-soft mb-4 fs-17" style="line-height: 1.6;">
                                The main research program is formally open for:
                            </p>
                            <div class="program-grid">
                                <div
                                    class="d-flex align-items-center mb-3 p-3 bg-white card-rounded-15 card-shadow-soft border-soft-navy">
                                    <div class="mr-3">
                                        <span class="icon-box-45 bg-gold-soft icon-rounded-12">
                                            <i class="fa fa-certificate fa-lg text-primary-red"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold d-block text-primary-navy">Post-doctoral
                                            program</span>
                                        <small class="text-muted">Advanced research fellowship</small>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center p-3 bg-white card-rounded-15 card-shadow-soft border-soft-navy">
                                    <div class="mr-3">
                                        <span class="icon-box-45 bg-primary-navy-soft icon-rounded-12">
                                            <i class="fa fa-flask fa-lg text-primary-navy"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold d-block text-primary-navy">Doctoral program</span>
                                        <small class="text-muted">PhD in multiple disciplines</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 text-center">
                                <span class="badge badge-primary-navy px-4 py-2 fs-15">
                                    <i class="fa fa-clock-o"></i> Applications Open 2025-26
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="research-programs-section py-5 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="section-header-icon">
                            <i class="fa fa-graduation-cap fa-2x text-white"></i>
                        </div>
                        <div>
                            <div class="sec-title pb-0 ">
                                <h2 class="font-weight-bold mb-0 text-black">Research Programs & Disciplines</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card border-0 card-rounded-20" style="box-shadow: 0 5px 20px rgba(0,0,0,0.03);">
                        <div class="card-header bg-transparent border-0 pt-4 px-4">
                            <div class="d-flex align-items-center">
                                <span class="badge badge-primary-red mr-3 px-3 py-2 fs-15">
                                    <i class="fa fa-certificate"></i> Post-doctoral Programs
                                </span>
                                <span class="small text-muted">Doctoral Fellowships</span>
                            </div>
                        </div>
                        <div class="card-body px-4 pb-4">
                            <div class="row">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box-40 bg-primary-navy-soft icon-rounded-10 mr-3">
                                            <i class="fa fa-flask text-primary-navy"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold text-primary-navy">D.Sc.</span>
                                            <small class="text-muted">Doctor of Science</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box-40 bg-gold-lighter icon-rounded-10 mr-3">
                                            <i class="fa fa-book text-primary-red"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold text-primary-navy">D.Litt.</span>
                                            <small class="text-muted">Doctor of Literature</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box-40 bg-primary-navy-soft icon-rounded-10 mr-3">
                                            <i class="fa fa-balance-scale text-primary-navy"></i>
                                        </div>
                                        <div>
                                            <span class="d-block font-weight-bold text-primary-navy">LL.D.</span>
                                            <small class="text-muted">Doctor of Law</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="divider-soft">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fa fa-clock-o text-primary-red"></i> Duration: 2-3 Years
                                </small>
                                <small class="text-muted">
                                    <i class="fa fa-check-circle text-primary-navy"></i> UGC Approved
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="marketplace-categories-area bg-white">
        <div class="container">
            <div class="marketplace-categories__top-title">
                <div class="sec-title-style5 text-left">
                    <h2>PhD Research Disciplines</h2>
                    <div class="sub-title">
                        <div class="line left"></div>
                        <p>Our comprehensive PhD programs span across multiple disciplines, offering extensive research
                            opportunities in both scientific and humanities fields.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Group A - Sciences & Technology -->
                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="mb-4 font-weight-bold text-primary-navy border-left-gold pl-3">
                                <i class="fa fa-flask"></i> Group A - Sciences & Technology
                            </h3>
                        </div>
                        <div class="col-xl-12">
                            <div class="marketplace-categories-content">
                                <ul>
                                    <li class="wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Agriculture</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-leaf text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Bio-Chemistry</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-flask text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Biotechnology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-eyedropper text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Botany</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-pagelines text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Computer Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-desktop text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Chemistry</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-beaker text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Food Technology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-cutlery text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Zoology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-paw text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Environmental Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-tree text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Geology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-mountain text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Geography</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-globe text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Home Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-home text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Microbiology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-bug text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Physics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-rocket text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Health Sciences</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-heartbeat text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Group B - Arts, Humanities & Social Sciences -->
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-4 font-weight-bold text-primary-navy border-left-gold pl-3">
                                <i class="fa fa-book"></i> Group B - Arts, Humanities & Social Sciences
                            </h3>
                        </div>
                        <div class="col-xl-12">
                            <div class="marketplace-categories-content">
                                <ul>
                                    <li class="wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Anthropology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-users text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Commerce</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-line-chart text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Disaster Management</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-exclamation-triangle text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Education</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-graduation-cap text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">English</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-language text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Economics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-usd text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Fine Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-paint-brush text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Fashion Technology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-scissors text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Journalism & Mass Comm</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-newspaper-o text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Hindi</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-pencil text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">History</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-clock-o text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Indian Languages</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-comment text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Law</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-gavel text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Library Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-book text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Linguistics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-language text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Mathematics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-calculator text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Management</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-briefcase text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Physical Education</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-futbol-o text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="1900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Performing Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-music text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2000ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Political Science</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-university text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2100ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Psychology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-heart text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2200ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Philosophy</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-question-circle text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2300ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Statistics</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-bar-chart text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2400ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Social Work</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-handshake-o text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2500ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Sociology</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-group text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2600ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Theatre</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-film text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2700ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Tourism</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-plane text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2800ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Visual Arts</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-picture-o text-primary-red fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp animated" data-wow-delay="2900ms" data-wow-duration="1500ms">
                                        <div class="single-categories-box">
                                            <div class="text">
                                                <h3><a href="#">Yoga</a></h3>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-smile-o text-primary-navy fs-24"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-publications-section py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="section-header-icon">
                            <i class="fa fa-file-text-o fa-2x text-white"></i>
                        </div>
                        <div>
                            <h2 class="font-weight-bold mb-0 text-primary-navy fs-28">Recent Publications</h2>
                            <p class="text-muted mb-0 small">Peer-Reviewed Research Outputs</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-xl-10">
                    <div class="publications-wrapper">
                        <div
                            class="publication-item mb-4 p-4 bg-white card-rounded-12 publication-border-left-gold card-shadow-soft">
                            <h5 class="font-weight-bold mb-2 text-primary-navy fs-18">
                                Lajpharkapm Pinky Chanu, Ngangbam, A.K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                Lakshmikanta Khundrakpam, Bijayalakshmi Devi Nongmaithem, Lenin Laishram, and Hanvinder Kaur
                                Sidhu.
                                <span class="font-italic">2025. Biochemical Characterization of Xanthomonas campestris pv.
                                    vesicatoria in Chilli Pepper (Capsicum chinense). Ecology, Environment and
                                    Conservation.</span>
                                31: S45-S50, ISSN (Print): 0971-765X, DOI:
                                <a href="http://doi.org/10.53550/EEC.2025.v31i02s.008" target="_blank"
                                    class="text-primary-red" style="word-break: break-all;">
                                    http://doi.org/10.53550/EEC.2025.v31i02s.008
                                </a>
                            </p>
                        </div>

                        <div
                            class="publication-item mb-4 p-4 bg-white card-rounded-12 publication-border-left-navy card-shadow-soft">
                            <h5 class="font-weight-bold mb-2 text-primary-navy fs-18">
                                Moirangthem, M., Thokchom, R. and Singh, P. K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                In vitro mass propagation of Cymbium eburneum from immature seed pods, Propagation of
                                Ornamental Plants, www.journal-pop.org
                                <span class="font-italic">ISSN 1311-9109, Impact Factor for 2024: 0.600, Scopus Database of
                                    Elsevier (Accepted)</span>
                            </p>
                        </div>

                        <div
                            class="publication-item mb-4 p-4 bg-white card-rounded-12 publication-border-left-gold card-shadow-soft">
                            <h5 class="font-weight-bold mb-2 text-primary-navy fs-18">
                                Senthilkumar, S., Singh, P.K. and Rani, C.K.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                Thin layer chromatography (TLC) and antioxidant activity of ethanolic extract of <span
                                    class="font-italic">Acalypha indica</span> linn, International Journal of Science and
                                Research Archive, 15(01): 1600-1606, DOI:
                                <a href="https://doi.org/10.30574/ijsra.2025.15.1.1265" target="_blank"
                                    class="text-primary-red" style="word-break: break-all;">
                                    https://doi.org/10.30574/ijsra.2025.15.1.1265
                                </a>
                            </p>
                        </div>

                        <div
                            class="publication-item mb-4 p-4 bg-white card-rounded-12 publication-border-left-navy card-shadow-soft">
                            <h5 class="font-weight-bold mb-2 text-primary-navy fs-18">
                                Awungashi Samshokwo Varekan, Harikumar Pallathadka and Yuhlung Cheithou Charles.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                2025. A Review on Traditional Indigenous Agricultural Practices of North East: With Special
                                Reference to Manipur and Nagaland, in <span class="font-italic">International Journal of
                                    Creative Research Thoughts (IJCRT), An International Open Access Peer-Reviewed, Refereed
                                    journal</span>, 13 (4), ISSN: 2320-2882.
                                <a href="http://www.ijcrrt.org" target="_blank" class="text-primary-red">
                                    www.ijcrrt.org
                                </a>
                            </p>
                        </div>

                        <div
                            class="publication-item mb-4 p-4 bg-white card-rounded-12 publication-border-left-gold card-shadow-soft">
                            <h5 class="font-weight-bold mb-2 text-primary-navy fs-18">
                                Awungashi Samshokwo Varekan, Harikumar Pallathadka and Yuhlung Cheithou Charles.
                            </h5>
                            <p class="mb-2" style="color: #2c3e50; line-height: 1.6;">
                                2025. A Review on Traditional Indigenous Agricultural Practices of North East: With Special
                                Reference to Manipur and Nagaland, in <span class="font-italic">International Journal of
                                    Creative Research Thoughts (IJCRT), An International Open Access Peer-Reviewed, Refereed
                                    journal</span>, 13 (4), ISSN: 2320-2882.
                                <a href="http://www.ijcrrt.org" target="_blank" class="text-primary-red">
                                    www.ijcrrt.org
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-outline-navy px-5 py-2">
                            <i class="fa fa-arrow-circle-down"></i> View All Publications
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
