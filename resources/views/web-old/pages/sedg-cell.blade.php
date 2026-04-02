@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/webcss/sedg-cell.css') }}">

   
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
                            <h2 class=>Socio-Economically Disadvantaged Group Cell</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Socio-Economically Disadvantaged Group Cell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sedg-section py-5 position-relative">
        <!-- floating brand icons – subtle -->
        
      

        <div class="container sedg-container position-relative" style="z-index: 25;">

            <!-- ========== SECTION HEADER ========== -->
            <div class="row text-center">
                <div class="col-12 sedg-header" style="text-align:start;">
                    <span class="sedg-suptitle" >
                        <i class="fa fa-gavel" style="color: #d1143e;"></i> EQUITY · DIGNITY · OPPORTUNITY
                    </span>
                    <h2 class="sedg-main-title text-start" >
                        <i class="fa fa-shield"></i> Socio-Economically Disadvantaged Group Cell
                    </h2>                    
                   
                </div>
            </div>

            <!-- ========== OVERVIEW + REGISTRAR (EXACT CONTENT) ========== -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="sedg-overview-card position-relative">
                        <i class="fa fa-quote-right sedg-quote-icon"></i>
                        <div class="overview-text">
                            <p style="font-weight: 500; color: #17345a;">
                                At Manipur International University, we are committed to uplifting students from diverse
                                socio-economic backgrounds through inclusive academic and career support. By ensuring equal
                                access to resources, mentorship, and financial aid, the Cell fosters empowerment and
                                holistic development across the campus.
                            </p>
                        </div>
                        <!-- registrar signature exactly as image -->
                        <div class="registrar-signature d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                <span style="font-size: 1rem; color: #17345a;"><i class="fa fa-certificate"
                                        style="color: #d1143e;"></i> <strong>Registrar</strong></span>
                                <div class="registrar-name">Manipur International University</div>
                            </div>
                            <div class="mt-2 mt-sm-0">
                                <span
                                    style="background: #d1143e; color: white; padding: 0.3rem 1.2rem; border-radius: 40px; font-weight: 600;"><i
                                        class="fa fa-legal"></i> SEDG Cell</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== MISSION & VISION + KEY OBJECTIVES (2 column) ========== -->
            <div class="row mb-4">
                <!-- Mission & Vision Card (exact text) -->
                <div class="col-lg-6 mb-4">
                    <div class="mission-vision-card">
                        <div class="mv-icon">
                            <i class="fa fa-flag"></i>
                        </div>
                        <h3 class="mv-title">Mission & Vision</h3>
                        <div class="mv-text">
                            The SEDG Cell at Manipur International University is dedicated to promote equity, dignity, and
                            opportunity for students from socio-economically disadvantaged backgrounds by ensuring inclusive
                            access to education, resources, and institutional support.
                        </div>
                        <!-- small decorative element -->
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fa fa-circle" style="color: #d1143e; font-size: 0.7rem;"></i>
                            <i class="fa fa-circle" style="color: #17345a; font-size: 0.9rem; margin-left: 6px;"></i>
                            <span style="margin-left: 12px; color: #2c5a6e;"><i class="fa fa-heart"
                                    style="color: #d1143e;"></i> inclusive access</span>
                        </div>
                    </div>
                </div>
                <!-- Key Objectives Card (exact 3 objectives) -->
                <div class="col-lg-6 mb-4">
                    <div class="objectives-card">
                        <div class="obj-icon">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <h3 class="obj-title">Key Objectives</h3>
                        <ul class="obj-list">
                            <li><i class="fa fa-users"></i> Identify and support students from economically weaker sections
                            </li>
                            <li><i class="fa fa-chain-broken"></i> Eliminate systemic barriers to academic and career
                                advancement</li>
                            <li><i class="fa fa-hand-peace-o"></i> Foster a respectful and empowering campus environment
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ========== SUPPORTING INITIATIVES + COLLABORATION (2 column) ========== -->
            <div class="row mb-4">
                <!-- Supporting Initiatives (exact list) -->
                <div class="col-lg-6 mb-4">
                    <div class="initiatives-card">
                        <div class="init-icon">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <h3 class="init-title">Supporting Initiatives</h3>
                        <div class="init-grid">
                            <span class="init-badge"><i class="fa fa-inr"></i> Financial aid, fee waivers, and emergency
                                grants</span>
                            <span class="init-badge"><i class="fa fa-graduation-cap"></i> Mentorship programs and academic
                                counselling</span>
                            <span class="init-badge"><i class="fa fa-cogs"></i> Skill development workshops and career
                                guidance</span>
                        </div>
                        <!-- extra touch: pink/blue note -->
                        <p class="mt-3 mb-0 text-muted" style="font-size: 0.95rem;"><i class="fa fa-asterisk"
                                style="color: #d1143e;"></i> holistic support ecosystem</p>
                    </div>
                </div>
                <!-- Collaboration (exact text) -->
                <div class="col-lg-6 mb-4">
                    <div class="collab-card">
                        <div class="collab-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <h3 class="collab-title">Collaboration</h3>
                        <div class="collab-text">
                            Works in coordination with the <strong style="color: #d1143e;">Equal Opportunity Cell
                                (EOC)</strong>, Student Welfare Division, and external agencies to mobilize resources,
                            conduct outreach, and ensure policy-level inclusion.
                        </div>
                        <span class="eoc-badge"><i class="fa fa-link"></i> EOC · Student Welfare · External</span>
                    </div>
                </div>
            </div>

            <!-- ========== PILLAR STATEMENT – STANDALONE (EXACT) ========== -->
            <div class="row">
                <div class="col-12">
                    <div class="pillar-statement d-flex flex-wrap align-items-center">
                        <div class="mr-4 mb-2 mb-sm-0">
                            <i class="fa fa-building" style="font-size: 3rem; color: #17345a; opacity: 0.3;"></i>
                        </div>
                        <div style="flex: 1;">
                            <h4 style="color: #17345a; font-weight: 700; font-size: 1.5rem;">The SEDG Cell stands as a
                                pillar of institutional commitment to social justice—</h4>
                            <p style="font-size: 1.2rem; color: #d1143e; font-weight: 600; margin-bottom: 0;">ensuring that
                                no student is left behind due to economic hardship or social disadvantage.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== BOTTOM FLOURISH ========== -->
           

        </div> <!-- end container -->
    </section>
@endsection
@section('scripts')
@endsection
