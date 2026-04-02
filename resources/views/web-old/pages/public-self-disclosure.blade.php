@extends('web.layouts.main')
@section('title', '| Document Verification')
@section('description',
    'Experience seamless academic credential verification at Manipur International University. Our
    cutting-edge digital platform ensures secure, fast, and reliable document authentication for your professional and
    educational needs')
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
                            <h2> Public Self Disclosure </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Public Self Disclosure </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sub-title   pb-2">
                <h2>1. About HEI</h2>
            </div>

            <!-- About Us - Overview -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            About Us - Overview
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/about/" target="_blank">
                                https://www.miu.edu.in/about/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Act and Statutes or MoA -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Act and Statutes or MoA
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/wp-content/uploads/2025/10/MIU-Act-2018-1.pdf" target="_blank">
                                https://www.miu.edu.in/wp-content/uploads/2025/10/MIU-Act-2018-1.pdf
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Constituent Units / Affiliated Colleges -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Constituent Units/ Affiliated Colleges
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/constituent-colleges/" target="_blank">
                                https://www.miu.edu.in/constituent-colleges/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Accreditation / Ranking Status -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Accreditation/Ranking Status (NAAC, NBA, NIRF)
                        </h3>
                        <p class="mb-0 text-muted">
                            <em>Under pursuing</em>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Recognition / Approval -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Recognition/Approval (2(f), 12B, etc.)
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/wp-content/uploads/2025/10/UGC-2021-Letter.pdf" target="_blank">
                                https://www.miu.edu.in/wp-content/uploads/2025/10/UGC-2021-Letter.pdf
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Annual Reports -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Annual Reports
                        </h3>
                        <p class="mb-0">
                            <a href="#">Annual Report</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Annual Accounts -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Annual Accounts
                        </h3>
                        <p class="mb-0">
                            <a href="#">Audited Statement &amp; Balance Sheets</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sponsoring Body Details -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Sponsoring Body Details
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">


            <div class="sec-title   pb-2">
                <h2>2. Administration</h2>
            </div>


            <!-- Chancellor -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Chancellor</h3>
                        <p class="mb-0">
                            Dr. Henkram Pahunchaka<br>
                            Email: chancellor@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/chancellor-miu/" target="_blank">
                                https://www.miu.edu.in/chancellor-miu/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pro Chancellor -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Pro Chancellor</h3>
                        <p class="mb-0">N/A</p>
                    </div>
                </div>
            </div>

            <!-- Vice-Chancellor -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Vice-Chancellor</h3>
                        <p class="mb-0">
                            Dr. Henkram Pahunchaka<br>
                            Email: vc@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/" target="_blank">
                                https://www.miu.edu.in/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pro Vice-Chancellor -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Pro Vice-Chancellor</h3>
                        <p class="mb-0">
                            Prof. K. Purna Singh<br>
                            Email: pvc@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/pro-vice-chancellor/" target="_blank">
                                https://www.miu.edu.in/pro-vice-chancellor/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Registrar -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Registrar</h3>
                        <p class="mb-0">
                            Prof. T. Hangshing Dev<br>
                            Email: registrar@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/registrar/" target="_blank">
                                https://www.miu.edu.in/registrar/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Principal -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Principal</h3>
                        <p class="mb-0">N/A</p>
                    </div>
                </div>
            </div>

            <!-- Finance Officer -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Finance Officer</h3>
                        <p class="mb-0">
                            Shasrum Kiran Singh<br>
                            Email: accounts@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/finance-officer/" target="_blank">
                                https://www.miu.edu.in/finance-officer/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Controller of Examination -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Controller of Examination</h3>
                        <p class="mb-0">
                            Dr. I. Kamalabati Devi<br>
                            Email: coe@miu.edu.in<br>
                            <a href="https://www.miu.edu.in/coe/" target="_blank">
                                https://www.miu.edu.in/coe/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Chief Vigilance Officer -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Chief Vigilance Officer</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/chief-vigilance-officer/" target="_blank">
                                https://www.miu.edu.in/chief-vigilance-officer/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ombudsperson -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Ombudsperson</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/ombudsperson/" target="_blank">
                                https://www.miu.edu.in/ombudsperson/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Executive Council -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Executive Council/Board of Governors</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/executive-council/" target="_blank">
                                https://www.miu.edu.in/executive-council/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Board of Management -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Board of Management</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/board-of-management/" target="_blank">
                                https://www.miu.edu.in/board-of-management/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Academic Council -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Academic Council</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/academic-council/" target="_blank">
                                https://www.miu.edu.in/academic-council/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Board of Studies -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Board of Studies</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/board-of-studies/" target="_blank">
                                https://www.miu.edu.in/board-of-studies/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Finance Committee -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Finance Committee</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/finance-committee/" target="_blank">
                                https://www.miu.edu.in/finance-committee/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Internal Complaint Committee -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Internal Complaint Committee</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/internal-complaint-committee/" target="_blank">
                                https://www.miu.edu.in/internal-complaint-committee/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Academic Leadership -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">Academic Leadership (Dean/HOD)</h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/academic-leadership/" target="_blank">
                                https://www.miu.edu.in/academic-leadership/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">


            <div class="sec-title   pb-2">
                <h2>3. Academics</h2>
            </div>


            <!-- Details of Academic Programs -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Details of Academic Programs
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/programs-and-syllabus/" target="_blank">
                                https://www.miu.edu.in/programs-and-syllabus/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Academic Calendar -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Academic Calendar
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/wp-content/uploads/2025/10/Academic-Calender.pdf"
                                target="_blank">
                                https://www.miu.edu.in/wp-content/uploads/2025/10/Academic-Calender.pdf
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Statutes / Ordinances -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Statutes/Ordinances Pertaining to Academics/Examinations
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/ordinances/" target="_blank">
                                https://www.miu.edu.in/ordinances/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Schools / Departments -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Schools/Departments/Centres
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/schools-and-departments/" target="_blank">
                                https://www.miu.edu.in/schools-and-departments/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Faculty Details -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Department/School/Centre Wise Faculty/Staff Details
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/academics-team/" target="_blank">
                                https://www.miu.edu.in/academics-team/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- UGC Recognized Programs -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            List of UGC-Recognized ODL/Online Programs
                        </h3>
                        <p class="mb-0 text-muted">
                            <em>Under Pursuing</em>
                        </p>
                    </div>
                </div>
            </div>

            <!-- IQAC -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Internal Quality Assurance Cell (IQAC)
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/iqac/" target="_blank">
                                https://www.miu.edu.in/iqac/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Library -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Library
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/library/" target="_blank">
                                https://www.miu.edu.in/library/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Academic Collaborations -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Academic Collaborations
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/academic-collaborations/" target="_blank">
                                https://www.miu.edu.in/academic-collaborations/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title  pb-2">
                <h2>4. Admissions &amp; Fee</h2>
            </div>


            <!-- Prospectus -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Prospectus (including fee structure)
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/wp-content/uploads/2025/10/MIU-prospectus_25-26.pdf"
                                target="_blank">
                                https://www.miu.edu.in/wp-content/uploads/2025/10/MIU-prospectus_25-26.pdf
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Admission Guidelines -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Admission Process and Guidelines
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/admission_guidelines/" target="_blank">
                                https://www.miu.edu.in/admission_guidelines/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fee Refund Policy -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Fee Refund Policy
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/refund-policy/" target="_blank">
                                https://www.miu.edu.in/refund-policy/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title  pb-2">
                <h2>5. Research</h2>
            </div>
            <!-- Research and Development Cell -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Research and Development Cell
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/research-and-development-cell/" target="_blank">
                                https://www.miu.edu.in/research-and-development-cell/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Incubation Centre -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Incubation Centre/Start-Ups/Entrepreneurship Cell
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/incubation-center/" target="_blank">
                                https://www.miu.edu.in/incubation-center/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Central Facilities -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Central Facilities
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title  pb-2">
                <h2>6. Student Life</h2>
            </div>

            <!-- Sports Facilities -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Sports Facilities
                        </h3>
                        <p class="mb-0 text-muted">
                            To be prepared
                        </p>
                    </div>
                </div>
            </div>

            <!-- NCC/NSS -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            NCC/NSS - Details
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hostel Details -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Hostel Details
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

            <!-- Placement Cell -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Placement Cell and Its Activities
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

            <!-- Student Grievance -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Student Grievance Redressal Committee (SGRC) and Ombudsperson
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/grievance-cell/" target="_blank">
                                https://www.miu.edu.in/grievance-cell/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Health Facilities -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Health Facilities
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/health-facilities/" target="_blank">
                                https://www.miu.edu.in/health-facilities/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Internal Complaint Committee -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Internal Complaint Committee
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/internal-complaint-committee/" target="_blank">
                                https://www.miu.edu.in/internal-complaint-committee/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Anti-Ragging -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Anti-Ragging Cell
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/anti-ragging/" target="_blank">
                                https://www.miu.edu.in/anti-ragging/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Equal Opportunity -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Equal Opportunity Cell
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/equal-opportunity-cell/" target="_blank">
                                https://www.miu.edu.in/equal-opportunity-cell/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- SEDG -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Socio-Economically Disadvantaged Groups Cell (SEDG)
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/sedg-cell/" target="_blank">
                                https://www.miu.edu.in/sedg-cell/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Differently Abled -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Facilities for Differently Abled Students
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/facilities-for-differently-abled-students/" target="_blank">
                                https://www.miu.edu.in/facilities-for-differently-abled-students/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title  pb-2">
                <h2>7. Alumni</h2>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Alumni Association with Details
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/alumni/" target="_blank">
                                https://www.miu.edu.in/alumni/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title   pb-2">
                <h2>8. Information Corner</h2>
            </div>

            <!-- RTI -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            RTI: Details of CPIO and Appellate Authority
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/cpio/" target="_blank">
                                https://www.miu.edu.in/cpio/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Circulars -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Circulars and Notices
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/notice-and-events/" target="_blank">
                                https://www.miu.edu.in/notice-and-events/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Announcements -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Announcements
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/notice-and-events/" target="_blank">
                                https://www.miu.edu.in/notice-and-events/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Newsletters -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Newsletters
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

            <!-- News & Achievements -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            News, Recent Events & Achievements
                        </h3>
                        <p class="mb-0">
                            Awards<br>
                            Gallery
                        </p>
                    </div>
                </div>
            </div>

            <!-- Job Openings -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Job Openings
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/recruitments-2/" target="_blank">
                                https://www.miu.edu.in/recruitments-2/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reservation Roster -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Reservation Roster
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/reservation-roster/" target="_blank">
                                https://www.miu.edu.in/reservation-roster/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Study in India -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Study in India
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

            <!-- Admission Procedure -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Admission Procedure for International Students
                        </h3>
                        <p class="mb-0 text-muted">
                            N/A
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title   pb-2">
                <h2>9. Picture Gallery</h2>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Picture Gallery
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/gallery/" target="_blank">
                                https://www.miu.edu.in/gallery/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="admission-process-area">
        <div class="container">

            <div class="sec-title  pb-2">
                <h2>10. Contact Us</h2>
            </div>

            <!-- Contact Details -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Contact Details
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/contactus/" target="_blank">
                                https://www.miu.edu.in/contactus/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Telephone Directory -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-black">
                            Telephone Directory
                        </h3>
                        <p class="mb-0">
                            <a href="https://www.miu.edu.in/telephone-directories/" target="_blank">
                                https://www.miu.edu.in/telephone-directories/
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('scripts')
@endsection
