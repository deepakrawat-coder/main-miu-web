@extends('web.layouts.main')
@section('title', '| School of Arts & Humanities')
@section('description', 'The School of Arts and Humanities at Manipur International University (MIU) is a dynamic
                                    academic space where culture, communication, and creativity open doors to diverse career
                                    opportunities. Through its humanities and arts disciplines, the School transforms
                                    knowledge into meaningful cultural and societal insights. The humanities are regarded as
                                    the soul of education, enabling students to understand human behavior, values,
                                    languages, history, and cultures that shape the world.')

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
                            <h2>School of Arts & Humanities</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">School of Arts & Humanities</li>
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
                                    <h2>School of Arts & Humanities – Overview</h2>
                                </div>

                                <p>
                                    The School of Arts and Humanities at Manipur International University (MIU) is a dynamic
                                    academic space where culture, communication, and creativity open doors to diverse career
                                    opportunities. Through its humanities and arts disciplines, the School transforms
                                    knowledge into meaningful cultural and societal insights. The humanities are regarded as
                                    the soul of education, enabling students to understand human behavior, values,
                                    languages, history, and cultures that shape the world.
                                </p>

                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-star"></span>
                                        </div>
                                        <div class="inner-text">
                                            {{-- <h3>Academic Focus</h3> --}}
                                            <p>
                                                The School offers a rich and engaging combination of disciplines, including
                                                literature, philosophy, social sciences, political science, and history. Its
                                                programs are designed to build a strong academic foundation for creative and
                                                inquisitive minds who seek to explore the complexities of human experience,
                                                culture, and society, while developing the critical thinking and analytical
                                                skills required in today’s rapidly changing world.
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
                    At MIU, the programs are structured to promote ethical reasoning, creative expression, critical inquiry,
                    and global awareness. The university offers a balanced mix of traditional and contemporary
                    subjects—ranging from Literature, History, and Philosophy to Journalism, Fashion Design, and Psychology.
                    With a strong commitment to academic freedom, interdisciplinary learning, and social responsibility, the
                    School prepares students for diverse careers in media, research, education, civil services, creative
                    industries, and more.
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
                    To foster academic excellence in arts and humanities by creating an inclusive environment that
                    encourages curiosity, cultural understanding, and creativity, and to emerge as a globally recognized
                    center for arts and humanities education.
                </p>
                <h3>Mission</h3>
                <p>
                    To empower students with a comprehensive understanding of human experiences and equip them with the
                    knowledge, skills, and perspectives needed to thrive in a complex and globalized society.
                </p>
                <h3>Vision</h3>
                <p>
                    To foster academic excellence in arts and humanities by creating an inclusive environment that
                    encourages curiosity, cultural understanding, and creativity, and to emerge as a globally recognized
                    center for arts and humanities education.
                </p>
                <h3>Courses</h3>
                <p>
                    The School of Arts and Humanities at Manipur International University (MIU) offers a wide range of
                    undergraduate, postgraduate, diploma, and doctoral programs. These courses are designed to support the
                    intellectual, emotional, and social development of students while preparing them to meet real-world
                    challenges and opportunities.
                </p>
                <p> The School provides a multicultural, supportive, and collaborative academic environment that encourages
                    systematic study of contemporary social, political, and economic issues from an interdisciplinary
                    perspective. Alongside academic excellence, equal emphasis is placed on the personal growth and holistic
                    development of students.</p>
                <p>All programs are built on the principles of quality education and skill development, leading to strong
                    career prospects and well-rounded personalities. Faculty members guide students to develop awareness,
                    empathy, and a sense of responsibility toward society. Exposure to industry practices, research,
                    internships, global learning, and entrepreneurship helps students prepare for diverse professional
                    paths.</p>
                <h3>Scope</h3>
                <p>
                    Through the School of Arts and Humanities, students gain expertise in disciplines such as English,
                    Journalism, Fashion Design, Economics, Library and Information Science, Yoga, and more. The curriculum
                    is regularly updated to reflect emerging trends and industry requirements, with inputs from academic and
                    industry experts.
                </p>
                <p>Students are encouraged to integrate knowledge from multiple disciplines and refine their skills for
                    careers across different sectors. Arts and humanities graduates form a significant portion of successful
                    civil service candidates, as their understanding of history, society, and governance equips them for
                    roles in IAS, IPS, and other government services.</p>
                <p>Graduates can also pursue careers in education as teachers, lecturers, or researchers after acquiring the
                    required qualifications. Opportunities are available in NGOs, advocacy groups, and government welfare
                    departments, where they can contribute to social development, human rights, women’s empowerment, and
                    mental health awareness.</p>
                <p>Psychology graduates can work as counselors, therapists, or researchers in educational, clinical, or
                    corporate settings. Language-based programs open doors to careers in translation, interpretation,
                    subtitling, and language teaching, both in India and internationally.</p>
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
            <div class="row mb-5 ">
                <div class="col-12 text-center">
                    <h2 class="section-title text-white">'School of Arts & Humanities</h2>
                    <p class="section-subtitle text-white">
                        Programs Offered at Manipur International University
                    </p>
                </div>
            </div>

            <div class="row">
                <!-- BA Programs -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-book"></span>
                            <h3>Bachelor of Arts</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">BA (6 Semesters)</span>
                            <span class="tag">BA (Hons.) (6 Semesters)</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- BSW -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-handshake"></span>
                            <h3>Bachelor of Social Work</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">BSW (6 Semesters)</span>
                            <span class="tag">Eligibility: 10+2</span>
                        </div>
                    </div>
                </div>

                <!-- MA -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-graduate"></span>
                            <h3>Master of Arts</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">MA (4 Semesters)</span>
                            <span class="tag">Eligibility: Graduate</span>
                        </div>
                    </div>
                </div>

                <!-- MSW -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-community"></span>
                            <h3>Master of Social Work</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">MSW (4 Semesters)</span>
                            <span class="tag">Eligibility: BSW</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Info Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="dept-card">
                        <div class="dept-header">
                            <span class="dept-icon flaticon-clock"></span>
                            <h3>Program Summary</h3>
                        </div>
                        <div class="dept-body">
                            <span class="tag">UG Programs: 3 Years</span>
                            <span class="tag">PG Programs: 2 Years</span>
                            <span class="tag">BA, BA (Hons.), BSW</span>
                            <span class="tag">MA, MSW</span>
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
                        <p class="sub-title mt-3 text-dark">Diverse career paths for AI &amp; ML specialists</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <h5>Journalist / Content Creator</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–12 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Work as reporters, editors, anchors, or digital content creators across media platforms.
                        </p>
                        <div class="skills">
                            <span class="badge">Reporting</span>
                            <span class="badge">Editing</span>
                            <span class="badge">Digital Media</span>
                            <span class="badge">Communication</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-paint-brush"></i>
                        </div>
                        <h5>Fashion Designer / Creative Director</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 5–15 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Join design houses, apparel brands, or launch independent labels.
                        </p>
                        <div class="skills">
                            <span class="badge">Design</span>
                            <span class="badge">Creativity</span>
                            <span class="badge">Fashion</span>
                            <span class="badge">Branding</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h5>Psychologist / Counselor</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–10 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            With higher studies and certification, practice in educational, clinical, or corporate
                            environments.
                        </p>
                        <div class="skills">
                            <span class="badge">Counseling</span>
                            <span class="badge">Psychology</span>
                            <span class="badge">Therapy</span>
                            <span class="badge">Empathy</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h5>Professor / Researcher</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 6–15 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Pursue postgraduate studies and a Ph.D. to build a career in academia and research.
                        </p>
                        <div class="skills">
                            <span class="badge">Teaching</span>
                            <span class="badge">Research</span>
                            <span class="badge">Publications</span>
                            <span class="badge">Ph.D</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h5>NGO Professional / Public Policy Analyst</h5>
                        {{-- <p class="text-primary mb-3">
                            <i class="fa fa-inr mr-1"></i> 4–12 LPA
                        </p> --}}
                        <p class="text-muted small mb-4">
                            Contribute to social change, public welfare programs, and policy development in areas such as
                            education, gender equality, and environmental sustainability.
                        </p>
                        <div class="skills">
                            <span class="badge">Policy</span>
                            <span class="badge">Advocacy</span>
                            <span class="badge">Social Work</span>
                            <span class="badge">Research</span>
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
                                <p>School of Arts & Humanities</p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="course-layout-title-box">
                                            <h4>What undergraduate programs are offered in Arts & Humanities?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                The School offers BA (6 Semesters), BA (Hons.) (6 Semesters), and BSW (6 Semesters) programs for undergraduate students.
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
                                                The School offers MA (4 Semesters) and MSW (4 Semesters) programs for postgraduate students.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for BA and BA (Hons.)?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For BA and BA (Hons.), candidates must have completed 10+2 from any recognized board.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for BSW?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For BSW (Bachelor of Social Work), candidates must have completed 10+2 from any recognized board.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for MA programs?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For MA programs, candidates must be graduates in relevant discipline from any recognized university.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What is the eligibility for MSW?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                For MSW (Master of Social Work), candidates must have completed BSW or equivalent from any recognized university.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career options are available after BA?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates can work as Journalists, Content Creators, Teachers, or pursue MA, or prepare for civil services (IAS, IPS). Opportunities also exist in media, publishing, and creative industries.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career options are available after BSW?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates can work as NGO Professionals, Social Workers, Public Policy Analysts, or pursue MSW for advanced roles in social development sectors.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>What career options are available after MA?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Graduates can work as Professors, Researchers, Psychologists, Counselors, or pursue PhD for academic and research careers.
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
