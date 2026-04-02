@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/webcss/reseachAndDevelopment.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/webcss/project-dev.css') }}">
   
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
                            <h2>Project Development Cell</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Project Development Cell</li>
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
                        <h2 class="section-title text-start w-100 text-white">Fostering Innovation for Sustainable Development</h2>
                        <p class="content-text text-white">
                            Empowering students, researchers, and faculty to create transformative solutions for the people
                            of Manipur and beyond through skill development and research-oriented projects from various
                            ministries.
                        </p>
                        <div class="mt-4 btn btn-customp">
                            <strong>Explore Opportunities</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-director-section py-5 position-relative">
        <div class="auto-container">

            <!-- HEADER: vibrant, center but with fresh twist -->
            <div class="text-center mb-5">
                <h2 class="section-main-title display-4 d-inline-block">
                    <i class="fa fa-superpowers" style="background: none; -webkit-text-fill-color: #ff7b00; margin-right: 10px;"></i>
                    Project Development Director
                </h2>
                <div class="mt-3">
                    <span class="section-subtitle px-4 py-2">
                        <i class="fa fa-compass" style="color: #f47501;"></i> leading innovation · sustainable impact
                        <i class="fa fa-leaf" style="color: #2ba14b;"></i>
                    </span>
                </div>
            </div>

            <!-- CARD – dynamic -->
            <div class="director-card p-4 p-lg-5">
                <div class="row align-items-center g-0 g-lg-4">

                    <!-- LEFT: ARTISTIC IMAGE AREA + extra floating badge -->
                    <div class="col-lg-4 text-center mb-4 mb-lg-0 position-relative">
                        <div class="position-relative d-inline-block">
                            <!-- creative use of fontawesome as frame ornament -->
                            <i class="fa fa-circle-o director-circle-frame"></i>
                            <!-- professional headshot -->
                            <img src="{{ asset('/assets/images/web-image/project-person.png') }}" alt="Dearson Pamei" class="img-fluid director-img">
                            <span class="director-badge">
                                <i class="fa fa-tasks"></i> 10+ yrs lead
                            </span>
                        </div>
                        <!-- tiny social vibe -->
                        <div class="mt-3">
                            <i class="fa fa-circle" style="color: #fea3aa;"></i>
                            <i class="fa fa-circle" style="color: #f8b88b;"></i>
                            <i class="fa fa-circle" style="color: #faf884;"></i>
                            <span class="pdc-lead-badge"><i class="fa fa-users"></i> PDC lead</span>
                        </div>
                    </div>

                    <!-- RIGHT: CONTENT -->
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap align-items-baseline justify-content-between">
                            <h3 class="director-name mb-0 pt-1 ">
                                Dearson Pamei
                            </h3>
                            <span class="badge-director-office">
                                Director's office
                            </span>
                        </div>

                        <h5 class="director-designation mt-2">
                            <i class="fa fa-bullseye"></i> Director, Project Development Cell
                        </h5>

                        <!-- description with quotation icon -->
                        <p class="director-description">
                            <i class="fa fa-quote-left director-quote-icon"></i>
                            Leading the Project Development Cell with a vision to <strong style="color: var(--thm-bg);">transform
                                innovative ideas</strong> into impactful
                            solutions. With extensive experience in project management, research, and sustainable
                            development, our director
                            guides strategic initiatives that connect academic excellence with real‑world applications for
                            the benefit of
                            Manipur and beyond. <i class="fa fa-globe" style="color: #3f7b3f;"></i>
                        </p>

                        <!-- CONTACT BOX -->
                        <div class="contact-box mt-4">
                            <h6><i class="fa fa-paper-plane-o"></i> Let‘s connect — contact hub</h6>
                            <div class="row mt-3">
                                <div class="col-sm-6 mb-2">
                                    <p><i class="fa fa-envelope-open"></i> dp@miu.edu.in</p>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <p><i class="fa fa-whatsapp"></i> +91-70857 91931</p>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <p><i class="fa fa-location-arrow"></i> Room 101, Admin Block</p>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <p><i class="fa fa-hourglass-half"></i> Mon-Fri, 10:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="contact-schedule"><i class="fa fa-calendar-check-o"></i> schedule meet</span>
                            </div>
                        </div>

                    </div> <!-- /col-lg-8 -->

                    <div class="col-lg-12">
                        <div class="mt-4">
                            <h6 class="section-mini-title">
                                <i class="fa fa-asterisk"></i> core expertise
                            </h6>
                            <div class="expertise-tags d-flex flex-wrap">
                                <span><i class="fa fa-tasks"></i> Project Management</span>
                                <span><i class="fa fa-lightbulb-o"></i> Innovation Strategy</span>
                                <span><i class="fa fa-recycle"></i> Sustainable Dev.</span>
                                <span><i class="fa fa-flask"></i> Research Collab.</span>
                                <span><i class="fa fa-pencil-square-o"></i> Grant & Funding</span>
                                <span><i class="fa fa-handshake-o"></i> Stakeholder Engage</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="section-mini-title">
                                <i class="fa fa-diamond"></i> impact metrics
                            </h6>
                            <div class="expertise-tags d-flex flex-wrap">
                                <span><i class="fa fa-check-square-o"></i> 20+ Successful Projects</span>
                                <span><i class="fa fa-inr"></i> ₹50L+ Funding Secured</span>
                                <span><i class="fa fa-handshake-o"></i> 15+ Industry Partners</span>
                                <span><i class="fa fa-graduation-cap"></i> 100+ Students Mentored</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- /row -->
            </div> <!-- /director-card -->
        </div> <!-- /auto-container -->
    </section>

    <section class="vision-mission-section py-5 py-md-6 position-relative">
        <div class="container vm-container position-relative">
            <!-- HEADER – Our Vision & Mission -->
            <div class="row">
                <div class="col-12 text-center vm-header">
                    <h2 class="vm-main-title ">
                        <i class="fa fa-eye" style="-webkit-text-fill-color: white;"></i> Our Vision & Mission
                    </h2>
                </div>
            </div>

            <!-- MAIN CONTENT: VISION + MISSION -->
            <div class="row align-items-stretch g-4">
                <!-- VISION CARD – pink -->
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex">
                    <div class="vision-card w-100">
                        <div class="d-flex align-items-center">
                            <div class="vm-icon">
                                <i class="fa fa-binoculars"></i>
                            </div>
                        </div>
                        <h3 class="vision-title">
                            <i class="fa fa-flag" style="color: #17345a;"></i> Vision
                        </h3>
                        <div class="vm-text">
                            To nurture a culture of innovation and project-based learning that empowers students,
                            researchers, and faculty to contribute transformative ideas and solutions for sustainable
                            development of Manipur and the nation.
                        </div>
                        <div class="mt-4 text-end">
                            <span class="vm-decor-tag">
                                <i class="fa fa-map-marker" style="color: #d1143e;"></i> focus: Manipur & beyond
                            </span>
                        </div>
                    </div>
                </div>

                <!-- MISSION CARD – blue -->
                <div class="col-lg-6 d-flex">
                    <div class="mission-card w-100">
                        <div class="d-flex align-items-center">
                            <div class="vm-icon" style="background: rgba(23,52,90,0.05); border-color: rgba(23,52,90,0.25); box-shadow: 0 10px 0 rgba(23,52,90,0.1);">
                                <i class="fa fa-rocket" style="color: #17345a;"></i>
                            </div>
                        </div>
                        <h3 class="mission-title">
                            <i class="fa fa-tasks" style="color: #d1143e;"></i> Mission
                        </h3>
                        <ul class="mission-list">
                            <li><i class="fa fa-random"></i> Promote interdisciplinary research and project development</li>
                            <li><i class="fa fa-cogs"></i> Provide technical and managerial support for innovative ideas</li>
                            <li><i class="fa fa-globe"></i> Connect with national and international organizations</li>
                            <li><i class="fa fa-money"></i> Facilitate funding through government and private sectors</li>
                            <li><i class="fa fa-line-chart"></i> Contribute to India’s innovation-driven growth agenda</li>
                        </ul>
                        <div class="mt-3 d-flex justify-content-end">
                            <span class="vision-mission-footer">Nation First Approach</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== KEY OBJECTIVES ===================== -->
    <section id="key-objectives" class="cse-specialization-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        <i class="fa fa-bullseye"></i> Key Objectives
                    </h2>
                    <p>Building a comprehensive ecosystem for innovation and development</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Innovation Ecosystem</h4>
                        <p>Establish a strong ecosystem for innovation, incubation, and entrepreneurship to foster creative solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Faculty &amp; Student Projects</h4>
                        <p>Encourage faculty and student-driven projects that address real-world challenges facing Manipur and India.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Strategic Collaboration</h4>
                        <p>Collaborate with government agencies, industry leaders, and NGOs for impactful partnerships.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Project Management Support</h4>
                        <p>Support proposal drafting, project management, and grant acquisition from various ministries.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Policy Alignment</h4>
                        <p>Ensure alignment with National Education Policy (NEP 2020) and Atmanirbhar Bharat initiatives.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Skill Development</h4>
                        <p>Focus on skill development and capacity building for sustainable regional development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== NATIONAL INNOVATION FOUNDATION ===================== -->
    <section id="nif-collaboration" class="cse-specialization-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        <i class="fa fa-handshake-o"></i> National Innovation Foundation Collaboration
                    </h2>
                    <p>Working with DST, Government of India for grassroots innovation</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Grassroots Innovation</h4>
                        <p>Identifying and promoting innovations from students, faculty, and local communities.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Documentation Platform</h4>
                        <p>Creating platforms to document, validate, and scale up regional innovations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Innovation Challenges</h4>
                        <p>Engaging students in hands-on innovation challenges and competitions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Prototype Development</h4>
                        <p>Supporting development of prototypes, patents, and technology transfers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Knowledge Hub</h4>
                        <p>Establishing connections between innovators, policymakers, and entrepreneurs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h4 class="sbutitlie-secodary">Ministry Projects</h4>
                        <p>Implementing skill development and research projects from various ministries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="specialization-features" style="background: var(--thm-bg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="sec-title">
                        <h2 class="text-white">Opportunities for Students & Faculty</h2>
                        <p class="sub-title mt-3 text-white">
                            Join us in shaping the future through innovation and research
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-lightbulb-o"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Innovation Challenges</h5>
                        <p class="text-center mb-0">Participate in innovation challenges and hackathons focused on solving regional and national problems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-leaf"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Idea Incubation</h5>
                        <p class="text-center mb-0">Get mentorship for idea incubation and project development with expert guidance and resources.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-money"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Funding Support</h5>
                        <p class="text-center mb-0">Access funding and grant support for research and innovation projects from various government ministries.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-handshake-o"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Ministry Collaboration</h5>
                        <p class="text-center mb-0">Collaborate on projects with DST, NIF, and other national bodies for skill development initiatives.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-globe"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Global Platform</h5>
                        <p class="text-center mb-0">Showcase innovations at national and international platforms to gain recognition and impact.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa fa-graduation-cap"></i></div>
                        <h5 class="font-weight-bold text-center mb-3">Skill Development</h5>
                        <p class="text-center mb-0">Participate in comprehensive skill development programs aligned with regional development needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection