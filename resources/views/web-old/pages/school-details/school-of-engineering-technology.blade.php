@extends('web.layouts.main')
@section('title', '| School of Engineering & Technology – Overview')
@section('description', ' The School of Technology at Manipur International University (MIU) offers a
                                    comprehensive and dynamic learning environment for students aspiring to build careers in
                                    diverse technological fields. The School provides a wide range of undergraduate,
                                    postgraduate, and doctoral programs designed to equip students with the knowledge,
                                    skills, and practical exposure needed to succeed in the rapidly evolving world of
                                    technology.')

@section('styles')
    <style>

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
                            <h2>School of Engineering & Technology</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">School of Engineering & Technology</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PAGE NAVIGATION -->
    <section class="page-contains-area stricky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center">
                    <div class="page-contains-box ">
                        <div class="inner-title">
                            <h3>Page Contains:</h3>
                        </div>
                        <div class="page-contains-btn">
                            <ul class="navigation clearfix scroll-nav">
                                <li><a href="#overview">Overview</a></li>
                                <li><a href="#content">Requirements</a></li>
                                <li><a href="#department">Specializations</a></li>
                                <li><a href="#specialization">Programs</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#partner">Recruiter Partner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OVERVIEW SECTION -->
    <section id="overview" class="program-details-area">
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
                                    <h2>School of Engineering & Technology – Overview</h2>
                                </div>

                                <p>
                                    The School of Technology at Manipur International University (MIU) offers a
                                    comprehensive and dynamic learning environment for students aspiring to build careers in
                                    diverse technological fields. The School provides a wide range of undergraduate,
                                    postgraduate, and doctoral programs designed to equip students with the knowledge,
                                    skills, and practical exposure needed to succeed in the rapidly evolving world of
                                    technology.
                                </p>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            {{-- <h3>Academic Focus</h3> --}}
                                            <p>
                                                All programs are developed in collaboration with industry experts to ensure
                                                that students gain relevant, industry-oriented skills. The School is
                                                supported by highly qualified and experienced faculty members who are
                                                dedicated to academic excellence and student success. Modern laboratories,
                                                advanced resources, and hands-on learning opportunities enable students to
                                                gain practical experience and enhance their technical capabilities.
                                            </p>
                                        </div>
                                    </li>

                                    {{-- <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>Industry & Career Readiness</h3>
                                            <p>
                                               
                                            </p>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>

                            <div class="program-details-form-box">
                                <div class="sec-title">
                                    <h2>Apply for Admission</h2>
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
                                        <div class="select-box">
                                            <select class="wide" name="applicant_type">
                                                <option value="">Select Applicant Type</option>
                                                <option value="1">Undergraduate Applicant</option>
                                                <option value="2">Postgraduate Applicant</option>
                                                <option value="3">Doctoral Applicant</option>
                                                <option value="4">Lateral Entry</option>
                                                <option value="5">International Student</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="button-box">
                                        <button class="btn-one" type="submit">
                                            <span class="txt">Apply Now</span>
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

    <!-- COURSES & SCOPE -->
    <section id="content" class="testimonial-style1-area py-5 bg-white">
        <div class="container">
            <div class="school-tech-content">
                {{-- <h3>Courses & Academic Scope</h3> --}}
                <p>
                    MIU fosters a supportive and collaborative learning atmosphere that encourages intellectual growth,
                    innovation, and personal development. Students are also encouraged to participate in extracurricular
                    activities, helping them grow into well-rounded professionals.
                </p>

                {{-- <ul class="list-style-one">
                    <li>Software Development & Computer Engineering</li>
                    <li>Mechanical & Civil Engineering</li>
                    <li>Artificial Intelligence & Machine Learning</li>
                    <li>Cyber Security & Data Science</li>
                    <li>Internet of Things (IoT) & Cloud Computing</li>
                    <li>Robotics, Automation & Emerging Technologies</li>
                    <li>Renewable Energy & Environmental Engineering</li>
                    <li>Biomedical & Aerospace Engineering</li>
                </ul> --}}

                <h3>Vision</h3>
                <p>
                    To create a transformative learning environment where students acquire not only strong technical skills
                    but also the exposure and leadership qualities required to drive innovation and growth in the
                    technological landscape.
                </p>
                <h3>Mission</h3>
                <p>
                    To impart knowledge and skills that empower students in the dynamic fields of technology and innovation,
                    while providing a platform that promotes interdisciplinary collaboration, hands-on learning, and
                    research-driven exploration
                </p>

                <h3>Courses</h3>
                <p>
                    The School of Technology at MIU offers undergraduate, postgraduate, and doctoral programs designed in
                    consultation with industry experts. These programs provide a balanced blend of theoretical understanding
                    and practical application, ensuring students graduate with industry-relevant skills.</p>
                <p>With modern laboratories, research facilities, and a future-oriented curriculum, the School provides a
                    holistic and industry-ready education. The learning environment encourages intellectual development,
                    creativity, and personal growth, while also promoting extracurricular engagement.</p>

                <h3>Scope</h3>
                <p>
                    The School of Technology prepares students with a strong combination of theoretical knowledge and
                    practical expertise. Through rigorous coursework, hands-on labs, and research opportunities, graduates
                    become:
                </p>
                <p>
                    • Skilled technologists capable of solving complex problems<br>
                    • Innovative thinkers driving technological advancements<br>
                    • Industry-ready professionals prepared for global careers
                </p>
                <p>
                    Technology graduates can pursue opportunities in various fields, including:
                </p>
                <p>
                    • Software development and application engineering<br>
                    • Computer and electronics engineering<br>
                    • Mechanical and civil engineering<br>
                    • Research and development<br>
                    • Data analytics and business intelligence<br>
                    • Project management<br>
                    • Cybersecurity<br>
                    • Artificial Intelligence and Machine Learning<br>
                    • Internet of Things (IoT)<br>
                    • Cloud computing<br>
                    • Augmented and Virtual Reality (AR/VR)<br>
                    • Robotics and automation<br>
                    • Renewable energy systems<br>
                    • Biomedical engineering<br>
                    • Environmental engineering<br>
                    • Aerospace engineering
                </p>
                {{-- <h3>Why Choose School of Technology, MIU?</h3> --}}
                {{-- <ul class="list-style-two">
                    <li>Industry-aligned and future-oriented curriculum</li>
                    <li>State-of-the-art laboratories and research facilities</li>
                    <li>Strong focus on innovation, research, and skill development</li>
                    <li>Experienced faculty with academic and industry expertise</li>
                    <li>Holistic student development and leadership opportunities</li>
                    <li>Global career pathways and higher education prospects</li>
                </ul> --}}
            </div>
        </div>
    </section>

    <!-- DEPARTMENTS SECTION -->
    {{-- <section id="department" style=" background: #17345a;" class="tech-department-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title text-white">School of Technology</h2>
                    <p class="section-subtitle text-white">
                        Disciplines & Specializations at Manipur International University
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Computer Science -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-mouse"></span>
                            <h3>Computer Science & IT</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">B.Tech CSE</span>
                            <span class="tag">M.Tech CSE</span>
                            <span class="tag">Ph.D CSE</span>
                            <span class="tag">BCA</span>
                            <span class="tag">MCA</span>
                            <span class="tag">Integrated BCA–MCA</span>
                            <span class="tag">AI & ML (Diploma)</span>
                            <span class="tag">Cyber & Forensics</span>
                        </div>
                    </div>
                </div>

                <!-- Electrical -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-virus"></span>
                            <h3>Electrical Engineering</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">B.Tech EE</span>
                            <span class="tag">B.Tech EEE</span>
                            <span class="tag">M.Tech EE</span>
                            <span class="tag">M.Tech EEE</span>
                            <span class="tag">Diploma EE</span>
                        </div>
                    </div>
                </div>

                <!-- Mechanical -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-businessman"></span>
                            <h3>Mechanical Engineering</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">B.Tech Mechanical</span>
                            <span class="tag">M.Tech Mechanical</span>
                            <span class="tag">Ph.D Mechanical</span>
                        </div>
                    </div>
                </div>

                <!-- Civil -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-mask"></span>
                            <h3>Civil Engineering</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">B.Tech Civil</span>
                            <span class="tag">M.Tech Civil</span>
                            <span class="tag">Ph.D Civil</span>
                        </div>
                    </div>
                </div>

                <!-- ECE -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-mortar"></span>
                            <h3>Electronics & Communication</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">B.Tech ECE</span>
                            <span class="tag">M.Tech ECE</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <section id="arts-department" style="background: #17345a;" class="arts-department-section">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title text-white">School of Engineering & Technology</h2>
                    <p class="section-subtitle text-white">
                        Programs Offered at Manipur International University
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- Diploma Engineering -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-tools"></span>
                            <h3>Diploma Engineering</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">6 Semesters</span>
                            <span class="tag">Eligibility: 10th</span>
                        </div>
                    </div>
                </div>

                <!-- B.Tech -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-engineer"></span>
                            <h3>B.Tech</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">8 Semesters</span>
                            <span class="tag">Eligibility: 10+2 (PCM)</span>
                        </div>
                    </div>
                </div>

                <!-- B.Tech Lateral Entry -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-right-arrow"></span>
                            <h3>B.Tech Lateral Entry</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">6 Semesters</span>
                            <span class="tag">Eligibility: Diploma/B.Sc.</span>
                        </div>
                    </div>
                </div>

                <!-- M.Tech -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-graduate"></span>
                            <h3>M.Tech</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">4 Semesters</span>
                            <span class="tag">Eligibility: B.Tech/B.E.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="career" class="career-opportunities-area">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <div class="sec-title">
                        <h2 class="text-dark">Career Opportunities</h2>
                        <p class="sub-title mt-3 text-dark">Graduates from the School of Technology emerge as:</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h5>Proficient Technologists</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–12 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Capable of solving complex technological challenges
                        </p>
                        <div class="skills">
                            <span class="badge">Problem Solving</span>
                            <span class="badge">Technical Expertise</span>
                            <span class="badge">System Design</span>
                            <span class="badge">Innovation</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <h5>Creative Innovators</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 5–15 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Driving technological transformation across industries
                        </p>
                        <div class="skills">
                            <span class="badge">Creativity</span>
                            <span class="badge">Innovation</span>
                            <span class="badge">Transformation</span>
                            <span class="badge">Industry 4.0</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h5>Industry-Ready Professionals</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–10 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Equipped with globally relevant technical and professional skills
                        </p>
                        <div class="skills">
                            <span class="badge">Technical Skills</span>
                            <span class="badge">Professional Skills</span>
                            <span class="badge">Global Readiness</span>
                            <span class="badge">Industry Standards</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- CSE SPECIALIZATIONS -->
    {{-- <section id="specialization" class="cse-specialization-section">
        <div class="container">
            <!-- TITLE -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">B.Tech in Computer Science & Engineering</h2>
                    <p class="section-subtitle">
                        Industry-oriented Specializations at Manipur International University
                    </p>
                </div>
            </div>

            <!-- SPECIALIZATION CARDS -->
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="spec-card image-card">
                        <a href="/specialization-details">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/core-cse.jpg') }}" alt="Core Computer Science">
                            </div>
                            <h4>Core Computer Science</h4>
                            <p>Programming, Data Structures & Algorithms</p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/ai-ml.jpg') }}" alt="AI & ML">
                            </div>
                            <h4>Artificial Intelligence & ML</h4>
                            <p>Machine Learning & Intelligent Systems</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/cyber-security.jpg') }}" alt="Cyber Security">
                            </div>
                            <h4>Cyber Security</h4>
                            <p>Ethical Hacking & Digital Forensics</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">

                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/data-science.jpg') }}" alt="Data Science">
                            </div>
                            <h4>Data Science</h4>
                            <p>Big Data Analytics & Visualization</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/cloud.jpg') }}" alt="Cloud Computing">
                            </div>
                            <h4>Cloud Computing</h4>
                            <p>Cloud Architecture & DevOps</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/iot.jpg') }}" alt="IoT">
                            </div>
                            <h4>Internet of Things (IoT)</h4>
                            <p>Smart Devices & Embedded Systems</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/blockchain.jpg') }}" alt="Blockchain">
                            </div>
                            <h4>Blockchain Technology</h4>
                            <p>Decentralized Apps & Smart Contracts</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/cse/fullstack.jpg') }}" alt="Full Stack">
                            </div>
                            <h4>Full Stack Development</h4>
                            <p>Frontend, Backend & APIs</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CIVIL SPECIALIZATIONS -->
    <section class="cse-specialization-section">
        <div class="container">
            <!-- TITLE -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">B.Tech in Civil Engineering</h2>
                    <p class="section-subtitle">
                        Specialized domains shaping infrastructure and sustainability
                    </p>
                </div>
            </div>

            <!-- SPECIALIZATION CARDS -->
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/civil/structural.jpg') }}"
                                    alt="Structural Engineering">
                            </div>
                            <h4>Structural Engineering</h4>
                            <p>Buildings, Bridges & Structural Design</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/civil/geotechnical.jpg') }}"
                                    alt="Geotechnical Engineering">
                            </div>
                            <h4>Geotechnical Engineering</h4>
                            <p>Soil Mechanics & Foundation Systems</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/civil/transportation.jpg') }}" alt="Transportation">
                            </div>
                            <h4>Transportation Engineering</h4>
                            <p>Highways, Traffic & Airports</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/civil/environmental.jpg') }}"
                                    alt="Environmental Engineering">
                            </div>
                            <h4>Environmental Engineering</h4>
                            <p>Water, Waste & Pollution Control</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- TESTIMONIALS -->

    {{-- <section id="testimonials" class="testimonial-style1-area" style=" background: #17345a;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1__title">
                        <div class="sec-title">
                            <h2 class="text-white">Voices of MIU Alumni</h2>
                            <div class="sub-title">
                                <p class="text-white">
                                    Hear from our alumni as they share their experiences and success stories at Manipur
                                    International University
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel owl-theme owl-carousel owl-loaded owl-drag"
                            data-options="{
                                    &quot;loop&quot;: true, 
                                    &quot;margin&quot;: 30, 
                                    &quot;autoheight&quot;:true, 
                                    &quot;lazyload&quot;:true, 
                                    &quot;nav&quot;: false, 
                                    &quot;dots&quot;: false, 
                                    &quot;autoplay&quot;: true, 
                                    &quot;autoplayTimeout&quot;: 5000, 
                                    &quot;smartSpeed&quot;: 500, 
                                    &quot;navText&quot;: [&quot;&lt;span class=\&quot;left icon-next\&quot;&gt;&lt;/span&gt;&quot;,
                                    &quot;&lt;span class=\&quot;right icon-next\&quot;&gt;&lt;/span&gt;&quot;], 
                                    &quot;responsive&quot;:{ 
                                    &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; }, 
                                    &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; }, 
                                    &quot;768&quot; :{ &quot;items&quot; : &quot;1&quot; }, 
                                    &quot;992&quot;:{ &quot;items&quot; : &quot;2&quot; }, 
                                    &quot;1200&quot;:{ &quot;items&quot; : &quot;3&quot; }
                                }
                            }">

                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->

                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->
                            <!--Start Single Testimonial Style1-->

                            <!--End Single Testimonial Style1-->

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2800px, 0px, 0px); transition: 0.5s; width: 4800px;">
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>My journey at Manipur International University was filled with
                                                        learning opportunities, research exposure, and holistic development.
                                                        MIU truly prepares students for real-world challenges.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Amit Kumar</h3>
                                                <span>MBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU’s academic structure and career support system helped me
                                                        transition smoothly from student life to a professional role.
                                                        I am proud to be an MIU alumnus.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Neha Verma</h3>
                                                <span>M.Sc | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Being part of MIU allowed me to explore my potential through
                                                        innovative learning and practical exposure. The university
                                                        continues to inspire me even after graduation.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rahul Meitei</h3>
                                                <span>B.Tech (Mechanical Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Studying at Manipur International University was a life-changing
                                                        experience.
                                                        The academic environment, supportive faculty, and practical learning
                                                        helped
                                                        me build a strong foundation for my professional career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Ananya Sharma</h3>
                                                <span>B.Tech (Computer Science) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU provided me exposure to diverse cultures, modern infrastructure,
                                                        and industry-oriented education. The mentorship I received shaped
                                                        my confidence and professional growth.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rohit Singh</h3>
                                                <span>BBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>The faculty at MIU are highly knowledgeable and approachable.
                                                        Their guidance and encouragement helped me develop analytical
                                                        and leadership skills essential for my career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Priya Devi</h3>
                                                <span>B.Tech (Civil Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>My journey at Manipur International University was filled with
                                                        learning opportunities, research exposure, and holistic development.
                                                        MIU truly prepares students for real-world challenges.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Amit Kumar</h3>
                                                <span>MBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU’s academic structure and career support system helped me
                                                        transition smoothly from student life to a professional role.
                                                        I am proud to be an MIU alumnus.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Neha Verma</h3>
                                                <span>M.Sc | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Being part of MIU allowed me to explore my potential through
                                                        innovative learning and practical exposure. The university
                                                        continues to inspire me even after graduation.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rahul Meitei</h3>
                                                <span>B.Tech (Mechanical Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>Studying at Manipur International University was a life-changing
                                                        experience.
                                                        The academic environment, supportive faculty, and practical learning
                                                        helped
                                                        me build a strong foundation for my professional career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Ananya Sharma</h3>
                                                <span>B.Tech (Computer Science) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>MIU provided me exposure to diverse cultures, modern infrastructure,
                                                        and industry-oriented education. The mentorship I received shaped
                                                        my confidence and professional growth.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Rohit Singh</h3>
                                                <span>BBA | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                        <div class="single-testimonial-style1">
                                            <div class="border-box"></div>
                                            <div class="top-box">
                                                <div class="quote-iocn-box">
                                                    <span class="icon-quote"></span>
                                                </div>
                                                <div class="inner">
                                                    <div class="img-box">
                                                        <img src="http://127.0.0.1:8000/assets/images/testimonial/testimonial-v1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="icon-favourite">
                                                                    <span class="path1"></span><span
                                                                        class="path2"></span>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>The faculty at MIU are highly knowledgeable and approachable.
                                                        Their guidance and encouragement helped me develop analytical
                                                        and leadership skills essential for my career.</p>
                                                </div>
                                            </div>
                                            <div class="client-name">
                                                <h3>Priya Devi</h3>
                                                <span>B.Tech (Civil Engineering) | MIU Alumni</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span class="left icon-next"></span></button><button type="button"
                                    role="presentation" class="owl-next"><span class="right icon-next"></span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- FAQs -->
   <section id="faq" class="course-curriculum-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="course-curriculum-content-box">
                        <div class="course-layout-content-box">
                            <div class="inner-title">
                                <h4>FAQs</h4>
                                <p>School of Engineering & Technology</p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="course-layout-title-box">
                                            <h4>What engineering programs are offered at MIU?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                The School offers Diploma Engineering (6 Semesters), B.Tech (8 Semesters), B.Tech Lateral Entry (6 Semesters), and M.Tech (4 Semesters) programs in various engineering disciplines.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for Diploma Engineering?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For Diploma Engineering, candidates must have completed 10th from any recognized board.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for B.Tech?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For B.Tech, candidates must have completed 10+2 with PCM (Physics, Chemistry, Mathematics) from any recognized board.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is B.Tech Lateral Entry program?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                B.Tech Lateral Entry is a 6-semester program for students who have completed Diploma in Engineering or B.Sc. It allows direct entry into the second year of B.Tech.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for M.Tech?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For M.Tech, candidates must have completed B.Tech or B.E. in relevant discipline from any recognized university.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career opportunities are available for engineering graduates?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates become Proficient Technologists, Creative Innovators, and Industry-Ready Professionals. They can work in Software Development, Data Analytics, Cybersecurity, AI/ML, IoT, Cloud Computing, Robotics, Renewable Energy, Biomedical Engineering, Aerospace Engineering, and more.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What are the career fields for technology graduates?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Technology graduates can pursue careers in Software Development, Computer Engineering, Electronics Engineering, Mechanical Engineering, Civil Engineering, R&D, Data Analytics, Project Management, Cybersecurity, AI/ML, IoT, Cloud Computing, AR/VR, Robotics, Renewable Energy, Biomedical Engineering, Environmental Engineering, and Aerospace Engineering.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>Are there placement opportunities for engineering students?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Yes, MIU has an active placement cell with connections to leading tech companies. Regular campus drives, internships, and industry projects are organized to ensure students get excellent career opportunities.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RECRUITERS -->
    {{-- <section id="partner" class="course-curriculum-area">
        <div class="container" style="overflow: hidden;">
            <div class="auto-container">
                <div class="sec-title text-center mb-4">
                    <h2>Our Recruiters & Industry Partners</h2>
                    <p>Leading organizations that trust and hire our graduates</p>
                </div>
                <div class="swiper recruiters-swiper">
                    <div class="swiper-wrapper">
                        @php
                            $recruiters = ['TCS', 'Infosys', 'Wipro', 'Accenture', 'HCL', 'IBM', 'Microsoft', 'Amazon'];
                        @endphp

                        @foreach ($recruiters as $recruiter)
                            <div class="swiper-slide my-4">
                                <div class="recruiter-logo">
                                    <img src="{{ asset('/assets/images/programs/program-1.jpg') }}"
                                        alt="{{ $recruiter }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection

@section('scripts')
    <script>
        // Swiper for recruiters
        var swiper = new Swiper(".recruiters-swiper", {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2
                },
                576: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 4
                },
                992: {
                    slidesPerView: 5
                }
            }
        });

        // FAQ Accordion
        document.addEventListener("DOMContentLoaded", function() {
            const accBtns = document.querySelectorAll(".acc-btn");
            accBtns.forEach(btn => {
                btn.addEventListener("click", function() {
                    this.classList.toggle("active");
                    const content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        });

        // Form submission
        document.getElementById('program-details-form-1').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Application submitted successfully! We will contact you shortly.');
            this.reset();
        });
    </script>
@endsection
