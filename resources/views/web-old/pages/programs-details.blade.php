@extends('web.layouts.main')
@section('title', '| Departments')
@section('description', 'Manipur International University – Departments & Programs')

@section('styles')
    <style>
        /* Tabs */
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
                                <li class="active">Progrms details </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-contains-area stricky">
        <div class="container">
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
                                <li><a href="#programmes">Programmes</a></li>
                                <li><a href="#career">Career</a></li>
                                <li><a href="#faculty">Faculty</a></li>
                                <li><a href="#essential-links">Essential Links</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End page Contains Area-->


    <!--Start Program Details Area-->
    <section id="overview" class="program-details-area">
        <div class="program-details-area__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="program-details-tab-content">
                        <div class="program-details-tab-content__img-box"
                            style="background-image: url({{ asset('/assets/images/programs/program-details-tab-content__img-box-1.png') }});">
                        </div>

                        <div class="program-details-tab-content__inner">
                            <div class="program-details-tab-content__inner__shape"
                                style="background-image: url({{ asset('/assets/images/shape/program-details-tab-content__inner-shape.png') }});">
                            </div>

                            <div class="program-details-tab-content__text">
                                <div class="sec-title">
                                    <h2>Program Overview</h2>
                                </div>

                                <p>
                                    Manipur International University offers industry-oriented academic programs
                                    designed to provide strong theoretical foundations along with practical exposure.
                                    The curriculum is structured to enhance knowledge, skills, and professional
                                    competence required in today’s competitive environment.
                                </p>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Key Highlights</h3>
                                            <p>
                                                Comprehensive curriculum, experienced faculty, modern infrastructure,
                                                and a learner-centric academic environment.
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Academic Excellence</h3>
                                            <p>
                                                Focus on research, innovation, skill development, and career readiness
                                                through structured learning outcomes.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="program-details-form-box">
                                <div class="sec-title">
                                    <h2>Apply for Admission</h2>
                                </div>

                                <form id="program-details-form-1" name="programDetailsForm" action="#" method="post">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName"
                                            placeholder="Enter Your Full Name" required="">
                                    </div>

                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail"
                                            placeholder="Enter Your Email Address" required="">
                                    </div>

                                    <div class="input-box">
                                        <div class="select-box">
                                            <select class="wide">
                                                <option data-display="Select Applicant Type">
                                                    Select Applicant Type
                                                </option>
                                                <option value="1">Undergraduate Applicant</option>
                                                <option value="2">Postgraduate Applicant</option>
                                                <option value="3">Doctoral Applicant</option>
                                                <option value="4">Lateral Entry</option>
                                                <option value="5">International Student</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="button-box">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">
                                                Apply Now
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

    <!--End Program Details Area-->

    <!--Start Requirements For Degree-->
    <section id="requirements" class="requirements-for-degree">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Program Eligibility & Requirements</h2>
                <div class="sub-title">
                    <p>
                        Manipur International University follows a transparent admission process
                        ensuring academic readiness and eligibility for each program.<br>
                        Applicants must fulfill the minimum criteria as prescribed by the university.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="requirements-for-degree__content">
                        <ul>
                            <li>Completion of qualifying examination from a recognized board or university</li>
                            <li>Minimum academic percentage as per the selected program norms</li>
                            <li>Valid identity and academic documentation at the time of admission</li>
                        </ul>

                        <ul>
                            <li>Program-specific eligibility criteria as defined by the university</li>
                            <li>Submission of application form within the prescribed timeline</li>
                            <li>Compliance with university academic and conduct regulations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Requirements For Degree-->

    <!--Start Programmes Offered Area-->
    <section id="programmes" class="programmes-offered-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="programmes-offered-img-box">
                        <div class="programmes-offered-img-bg"
                            style="background-image: url({{ asset('/assets/images/resources/programmes-offered-img.jpg') }});">
                        </div>
                        <div class="programmes-offered-tab-btn">
                            <ul class="tabs-button-box clearfix">
                                <li data-tab="#ba1" class="tab-btn-item active-btn-item">
                                    <h3>b.a</h3>
                                </li>
                                <li data-tab="#ma1" class="tab-btn-item">
                                    <h3>m.a</h3>
                                </li>
                                <li data-tab="#mphil-phd1" class="tab-btn-item">
                                    <h3>m.phil / ph.d</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="tabs-content-box">
                        <!--Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="ba1">
                            <div class="programmes-offered-content-box">
                                <div class="sec-title">
                                    <h2>Programmes Offered</h2>
                                    <div class="sub-title">
                                        <p>Trouble that are bound to ensue and equal blame belongs to those who
                                            fail.
                                        </p>
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="icon">
                                        <span class="icon-mortarboard"></span>
                                    </div>
                                    <h3>Bachelor of Arts Degree (B.A)</h3>
                                    <p>In a free hour when our power of choice is when nothing our being able to do
                                        what
                                        we
                                        like best. </p>
                                    <ul>
                                        <li>
                                            <b>Eligibility</b>: <span>+2 Board exams with 50% or equal</span>
                                        </li>
                                        <li>
                                            <b>Duration</b>: <span>2 Years</span>
                                        </li>
                                        <li>
                                            <b>Strength</b>: <span>30 (Maximum)</span>
                                        </li>
                                        <li>
                                            <b>Start Date</b>: <span>First sem Feb’22, Second Sem Jul’22</span>
                                        </li>
                                    </ul>
                                    <div class="btns-box">
                                        <a class="btn-one btn-one--style2" href="#">
                                            <span class="txt"><span class="icon-down-arrow-1"></span>Prospects</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab-content-box-item" id="ma1">
                            <div class="programmes-offered-content-box">
                                <div class="sec-title">
                                    <h2>Programmes Offered</h2>
                                    <div class="sub-title">
                                        <p>Trouble that are bound to ensue and equal blame belongs to those who
                                            fail.
                                        </p>
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="icon">
                                        <span class="icon-mortarboard"></span>
                                    </div>
                                    <h3>Bachelor of Arts Degree (M.A)</h3>
                                    <p>In a free hour when our power of choice is when nothing our being able to do
                                        what
                                        we
                                        like best. </p>
                                    <ul>
                                        <li>
                                            <b>Eligibility</b>: <span>+2 Board exams with 50% or equal</span>
                                        </li>
                                        <li>
                                            <b>Duration</b>: <span>2 Years</span>
                                        </li>
                                        <li>
                                            <b>Strength</b>: <span>30 (Maximum)</span>
                                        </li>
                                        <li>
                                            <b>Start Date</b>: <span>First sem Feb’22, Second Sem Jul’22</span>
                                        </li>
                                    </ul>
                                    <div class="btns-box">
                                        <a class="btn-one btn-one--style2" href="#">
                                            <span class="txt"><span class="icon-down-arrow-1"></span>Prospects</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab-content-box-item" id="mphil-phd1">
                            <div class="programmes-offered-content-box">
                                <div class="sec-title">
                                    <h2>Programmes Offered</h2>
                                    <div class="sub-title">
                                        <p>Trouble that are bound to ensue and equal blame belongs to those who
                                            fail.
                                        </p>
                                    </div>
                                </div>
                                <div class="inner-content">
                                    <div class="icon">
                                        <span class="icon-mortarboard"></span>
                                    </div>
                                    <h3>Bachelor of Arts Degree (m.phil / ph.d)</h3>
                                    <p>In a free hour when our power of choice is when nothing our being able to do
                                        what
                                        we
                                        like best. </p>
                                    <ul>
                                        <li>
                                            <b>Eligibility</b>: <span>+2 Board exams with 50% or equal</span>
                                        </li>
                                        <li>
                                            <b>Duration</b>: <span>2 Years</span>
                                        </li>
                                        <li>
                                            <b>Strength</b>: <span>30 (Maximum)</span>
                                        </li>
                                        <li>
                                            <b>Start Date</b>: <span>First sem Feb’22, Second Sem Jul’22</span>
                                        </li>
                                    </ul>
                                    <div class="btns-box">
                                        <a class="btn-one btn-one--style2" href="#">
                                            <span class="txt"><span class="icon-down-arrow-1"></span>Prospects</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Programmes Offered Area-->
    <section class="marketplace-categories-area">
        <div class="container">
            <div class="marketplace-categories__top-title">
                <div class="sec-title-style5 text-left">
                    <h2>Programs & Specializations</h2>
                    <div class="sub-title">
                        <div class="line left"></div>
                        <p>Explore career-focused programs offered under IES</p>
                    </div>
                </div>
                <div class="btns-box">
                    <a class="btn-one" href="/specialization-details">
                        <span class="txt">View All Programs</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="marketplace-categories-content">

                        <!-- ROW 1 -->
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="100ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Arts & Humanities</h3>
                                            <p>UG / PG Programs</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-mask"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="200ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Science</h3>
                                            <p>Core & Applied Sciences</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-virus"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Commerce & Management</h3>
                                            <p>Business-Oriented Programs</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-businessman"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="400ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Computer & IT</h3>
                                            <p>Industry-Aligned Courses</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-mouse"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Education & Training</h3>
                                            <p>Teaching & Academic Studies</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-mortar"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- ROW 2 -->
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="100ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Engineering & Technology</h3>
                                            <p>Professional Programs</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-mouse"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="200ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Healthcare Studies</h3>
                                            <p>Health & Wellness Fields</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-mortar"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Life Sciences</h3>
                                            <p>Research-Based Programs</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-virus"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="400ms">
                                <a href="/specialization-details">
                                    <div class="single-categories-box">
                                        <div class="text">
                                            <h3>Management Studies</h3>
                                            <p>Leadership & Strategy</p>
                                        </div>
                                        <div class="icon">
                                            <span class="flaticon-businessman"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- ROW 3 -->
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="100ms">
                                <a href="/specialization-details">
                                <div class="single-categories-box">
                                    <div class="text">
                                        <h3>Research & Doctoral</h3>
                                        <p>Ph.D. & Advanced Research</p>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-businessman"></span>
                                    </div>
                                </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="200ms">
                                <a href="/specialization-details">
                                <div class="single-categories-box">
                                    <div class="text">
                                        <h3>Skill Development</h3>
                                        <p>Career Enhancement Programs</p>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-mask"></span>
                                    </div>
                                </div>
                                </a>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <a href="/specialization-details">
                                <div class="single-categories-box">
                                    <div class="text">
                                        <h3>Interdisciplinary Studies</h3>
                                        <p>Multi-Domain Learning</p>
                                    </div>
                                    <div class="icon">
                                        <span class="flaticon-mortar"></span>
                                    </div>
                                </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start Career Opportunities Area-->
    <section id="career" class="career-opportunities-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Career Opportunities</h2>
                <div class="sub-title">
                    <p>Career paths and professional roles available after completing this program</p>
                </div>
            </div>

            <div class="row">

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}"
                                alt="Academic Researcher">
                        </div>
                        <div class="career-text">
                            <a href="#">Academic Researcher</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}"
                                alt="University Lecturer">
                        </div>
                        <div class="career-text">
                            <a href="#">University Lecturer</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}"
                                alt="Industry Professional">
                        </div>
                        <div class="career-text">
                            <a href="#">Industry Professional</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}" alt="Project Manager">
                        </div>
                        <div class="career-text">
                            <a href="#">Project Manager</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}" alt="Consultant">
                        </div>
                        <div class="career-text">
                            <a href="#">Consultant</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}" alt="Policy Analyst">
                        </div>
                        <div class="career-text">
                            <a href="#">Policy Analyst</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}" alt="Entrepreneur">
                        </div>
                        <div class="career-text">
                            <a href="#">Entrepreneur</a>
                        </div>
                    </div>
                </div>

                <!-- Single Career -->
                <div class="col-xl-3 col-lg-3 col-md-6 mb-4">
                    <div class="single-career-opportunities image-card">
                        <div class="career-img">
                            <img src="{{ asset('/assets/images/marketplace/best-sellers-1.jpg') }}"
                                alt="Public Sector Officer">
                        </div>
                        <div class="career-text">
                            <a href="#">Public Sector Officer</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="career-opportunities-bottom-text">
                        <p>
                            <span>*</span> Some roles may require higher qualifications or professional certifications.
                            <a href="#">
                                <i class="icon-right-arrow-1"></i>Our Achievers
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--End Career Opportunities Area-->


    <!--End Faculty Members Area-->

    <!--Start Find Out Area-->
    <section id="essential-links" class="find-out-area">
        <div class="find-out-area__bg"
            style="background-image: url({{ asset('/assets/images/parallax-background/find-out-area__bg.jpg') }});">
        </div>
        <div class="container">
            <div class="sec-title text-center">
                <h2>Find Out More About</h2>
                <div class="sub-title">
                    <p>Business it will frequently occur that pleasures have to repudiated and accepted.</p>
                </div>
            </div>

            <ul class="row">
                <li class="col-xl-4 col-lg-4 single-find-out-box-colum">
                    <div class="single-find-out-box">
                        <div class="inner-title">
                            <h3><a href="#">Academic Support <span class="icon-diagonal-arrow"></span></a></h3>
                        </div>
                        <div class="text">
                            <p>Foresee the pain & trouble that bound
                                ensue equally all blame belongs those
                                in their duty through weakness.</p>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-diagonal-arrow"></span>
                        </div>
                    </div>
                </li>
                <li class="col-xl-4 col-lg-4 single-find-out-box-colum">
                    <div class="single-find-out-box">
                        <div class="inner-title">
                            <h3><a href="#">Youth Programs <span class="icon-diagonal-arrow"></span></a></h3>
                        </div>
                        <div class="text">
                            <p>Owing to claims of duty or obligations
                                of business it will frequently occur that
                                pleasures have repudiated.</p>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-diagonal-arrow"></span>
                        </div>
                    </div>
                </li>
                <li class="col-xl-4 col-lg-4 single-find-out-box-colum">
                    <div class="single-find-out-box">
                        <div class="inner-title">
                            <h3><a href="#">Student Success <span class="icon-diagonal-arrow"></span></a></h3>
                        </div>
                        <div class="text">
                            <p>The wise therefore always hold these
                                matters this principle selection reject
                                pleasures secure other greater.</p>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-diagonal-arrow"></span>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>
    <!--End Find Out Area-->

    <!--Start Slogan Style1 Area-->
    <section class="slogan-style1-area">
        <div class="auto-container">
            <div class="slogan-style1">
                <div class="slogan-style1__bg1"
                    style="background-image: url({{ asset('/assets/images/resources/slogan-style1-bg-1.jpg') }});"></div>
                <div class="slogan-style1__bg2"
                    style="background-image: url({{ asset('/assets/images/resources/slogan-style1-bg-2.jpg') }});"></div>
                <div class="container">
                    <div class="slogan-style1__inner">
                        <div class="title">
                            <h2><span>Register!..</span> to study in Next Academic Year 2022.</h2>
                        </div>
                        <div class="button-box">
                            <a class="btn-one" href="#"><span class="txt">Register Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
