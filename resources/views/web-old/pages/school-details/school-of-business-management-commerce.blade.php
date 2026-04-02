@extends('web.layouts.main')
@section('title', '| School of Business, Management & Commerce')
@section('description', 'The School of Business Management and Commerce at Manipur International University (MIU)
                                    is dedicated to shaping future leaders, entrepreneurs, and business professionals. The
                                    School focuses on developing industry-ready graduates who can thrive in a globally
                                    competitive economy. Its programs are designed for students who aspire to build
                                    successful careers in business, commerce, and finance.')

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
                            <h2>School of Business, Management & Commerce</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">School of Business, Management & Commerce</li>
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
                                    <h2>School of Business, Management & Commerce – Overview</h2>
                                </div>

                                <p>
                                    The School of Business Management and Commerce at Manipur International University (MIU)
                                    is dedicated to shaping future leaders, entrepreneurs, and business professionals. The
                                    School focuses on developing industry-ready graduates who can thrive in a globally
                                    competitive economy. Its programs are designed for students who aspire to build
                                    successful careers in business, commerce, and finance.
                                </p>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            {{-- <h3>Academic Focus</h3> --}}
                                            <p>
                                                At MIU, developing future leaders is not only about preparing them for the
                                                corporate world but also about enabling them to make meaningful
                                                contributions to economic growth, social development, and environmental
                                                sustainability. The School provides a dynamic learning environment that
                                                combines academic excellence with practical exposure to real-world business
                                                challenges.
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
                    The curriculum emphasizes entrepreneurship, strategic thinking, finance, marketing, and emerging areas
                    of business. Whether students aim to work in multinational corporations, start their own ventures, or
                    become finance professionals, MIU’s programs equip them with strong fundamentals and industry-relevant
                    skills.
                    With a commitment to academic excellence, industry-aligned teaching practices, and experiential
                    learning, the School of Business Management and Commerce offers a clear pathway to successful careers in
                    the business world.
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
                    To be a leading center for business and commerce education that nurtures innovative thinkers, ethical
                    professionals, and responsible leaders for the global economy.
                </p>
                <h3>Mission</h3>
                <p>
                    To provide transformative education that blends academic rigor with practical experience, ensuring that
                    students are well prepared to meet the challenges of the modern business environment through dynamic
                    programs, experienced faculty, and strong industry partnerships.
                </p>

                <h3>Courses</h3>
                <p>
                    The School of Business Management and Commerce at MIU offers a wide range of undergraduate,
                    postgraduate, diploma, and doctoral programs. These programs provide students with opportunities to gain
                    real-world experience through internships, industry interactions, networking events, and experiential
                    learning projects.
                </p>
                <p>All courses are designed to meet the demands of a rapidly changing business landscape, combining strong
                    theoretical foundations with specialized skills. Students develop critical thinking, problem-solving,
                    leadership, communication, and a global outlook, enabling them to confidently address complex business
                    challenges.</p>
                <p>The School is strongly committed to fostering an entrepreneurial mindset and preparing a new generation
                    of professionals who are future-ready and capable of driving innovation and growth.</p>
                <h3>Scope</h3>
                <p>
                    Students pursuing business and commerce programs have diverse career opportunities in accounting,
                    finance, marketing, human resources, banking, entrepreneurship, and consulting across corporate,
                    government, and non-profit sectors.
                    They can explore professional and managerial roles in multinational corporations, start-ups, and small
                    and medium enterprises. Opportunities also exist in areas such as corporate finance, investment banking,
                    financial planning, and FinTech, supported by strong foundations in financial and business analytics.

                </p>
                <p>With the increasing importance of globalization, students can pursue careers in export–import management,
                    global supply chains, and international finance. The programs also develop analytical skills through the
                    use of business intelligence tools and data analytics, enabling students to interpret and present data
                    for effective decision-making.</p>
                <p>For those interested in academia, the School provides a strong foundation for advanced studies and
                    research, leading to careers as lecturers, consultants, or management scholars.</p>
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
                    <h2 class="section-title text-white">School of Business, Management & Commerce</h2>
                    <p class="section-subtitle text-white">
                        Programs Offered at Manipur International University
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- BBA -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-book"></span>
                            <h3>BBA</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">6 Semesters</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- MBA -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-graduate"></span>
                            <h3>MBA</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">4 Semesters</span>
                            <span class="tag">Eligibility: Graduate</span>
                        </div>
                    </div>
                </div>

                <!-- B.Com -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-calculator"></span>
                            <h3>B.Com.</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">6 Semesters</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- M.Com -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-stats"></span>
                            <h3>M.Com.</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">4 Semesters</span>
                            <span class="tag">Eligibility: B.Com.</span>
                        </div>
                    </div>
                </div>

                <!-- BHM -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-hotel"></span>
                            <h3>BHM</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">4 Semesters</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- BHMCT -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-chef"></span>
                            <h3>BHMCT</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">8 Semesters</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- MHM -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-travel"></span>
                            <h3>MHM</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">4 Semesters</span>
                            <span class="tag">Eligibility: Graduate</span>
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
                        <p class="sub-title mt-3 text-dark">Diverse career paths in Business & Management</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h5>Business Analyst</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–12 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Analyze market trends, develop solutions, and optimize business processes.
                        </p>
                        <div class="skills">
                            <span class="badge">Data Analysis</span>
                            <span class="badge">Market Research</span>
                            <span class="badge">Process Optimization</span>
                            <span class="badge">Business Strategy</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <h5>Marketing Executive / Digital Marketing Manager</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 5–15 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Design brand strategies, manage campaigns, and enhance customer engagement.
                        </p>
                        <div class="skills">
                            <span class="badge">Digital Marketing</span>
                            <span class="badge">Brand Strategy</span>
                            <span class="badge">Campaign Management</span>
                            <span class="badge">SEO/SEM</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <h5>Financial Advisor / Investment Banker</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–10 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Provide financial planning, investment, and wealth management solutions.
                        </p>
                        <div class="skills">
                            <span class="badge">Financial Planning</span>
                            <span class="badge">Investment Strategy</span>
                            <span class="badge">Wealth Management</span>
                            <span class="badge">Risk Analysis</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h5>HR Manager / Talent Acquisition Specialist</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 6–15 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Manage recruitment, employee development, and organizational policies.
                        </p>
                        <div class="skills">
                            <span class="badge">Recruitment</span>
                            <span class="badge">Employee Relations</span>
                            <span class="badge">Talent Management</span>
                            <span class="badge">HR Policies</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <h5>Operations and Supply Chain Manager</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–12 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Oversee logistics, procurement, and supply chain functions across industries.
                        </p>
                        <div class="skills">
                            <span class="badge">Logistics</span>
                            <span class="badge">Procurement</span>
                            <span class="badge">Supply Chain</span>
                            <span class="badge">Inventory Management</span>
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
                                <p>School of Business, Management & Commerce</p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="course-layout-title-box">
                                            <h4>What undergraduate programs are offered?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                The School offers BBA (6 Semesters), B.Com. (6 Semesters), BHM (4 Semesters), and BHMCT (8 Semesters) programs for undergraduate students.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What postgraduate programs are available?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                The School offers MBA (4 Semesters), M.Com. (4 Semesters), and MHM (4 Semesters) programs for postgraduate students.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for BBA and B.Com.?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For BBA and B.Com., candidates must have completed 10+2 from any recognized board.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for MBA?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For MBA, candidates must be graduates from any recognized university.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for M.Com.?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For M.Com., candidates must have completed B.Com. from any recognized university.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career options are available after BBA?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates can work as Business Analysts, Marketing Executives, Financial Advisors, HR Managers, or pursue MBA for higher studies.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career options are available after B.Com.?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates can work in accounting, finance, banking, taxation, or pursue M.Com., MBA, or professional courses like CA, CS, CMA.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What are BHM and BHMCT programs?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                BHM (Bachelor of Hotel Management) is 4 semesters, and BHMCT (Bachelor of Hotel Management and Catering Technology) is 8 semesters. Both prepare students for careers in the hospitality industry.
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
