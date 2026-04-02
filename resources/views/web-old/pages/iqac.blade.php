@extends('web.layouts.main')
@section('title', '| Document Verification')
@section('description',
    'Experience seamless academic credential verification at Manipur International University. Our
    cutting-edge digital platform ensures secure, fast, and reliable document authentication for your professional and
    educational needs')
@section('styles')
    <style>
        body {
            background: #f8fafc;
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
            line-height: 1.6;
            padding: 30px 0;
        }

        .iqac-wrapper {
            max-width: 1280px;
            margin: 0 auto;
        }

        /* cards and section styling - COLOR SCHEME #17345a and #d1143e */
        .section-card {
            border: none;
            border-radius: 20px;
            /* box-shadow: 0 12px 30px rgba(0, 0, 0, 0.04); */
            background: white;
            margin-bottom: 40px;
            transition: all 0.2s;
            /* overflow: hidden; */
        }



        .section-header h2,
        .section-header h3 {
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .section-header h2 {
            font-size: 1.95rem;
        }

        .section-header h3 {
            font-size: 1.5rem;
            opacity: 0.95;
        }

        .section-header i {
            margin-right: 12px;
            color: #ffb3b3;
            /* soft contrast with #d1143e */
        }

        .card-body-custom {
            padding: 2rem 2rem;
        }

        /* about paragraph style */
        .about-text {
            font-size: 1.05rem;
            color: #2c3e50;
            background: #f0f7fa;
            padding: 1.5rem 2rem;
            border-radius: 16px;
            border-left: 6px solid #d1143e;
            /* accent color */
            margin-bottom: 1.5rem;
        }

        .vision-badge {
            display: inline-block;
            background: #d1143e;
            color: white;
            font-weight: 700;
            padding: 6px 18px;
            border-radius: 40px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .vision-badge i {
            color: white !important;
        }

        /* team members grid – responsive */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
            gap: 28px;
            margin-top: 20px;
        }

        .member-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 1.6rem 1.4rem;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(23, 52, 90, 0.08);
            transition: 0.2s;
            display: flex;
            flex-direction: column;
            position: relative;
            border-bottom: 4px solid transparent;
        }

        .member-card:hover {
            border-bottom-color: #d1143e;
            box-shadow: 0 16px 28px rgba(209, 20, 62, 0.08);
        }

        .member-role {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #17345a;
            font-weight: 800;
            background: #e8edf2;
            display: inline-block;
            padding: 5px 14px;
            border-radius: 30px;
            margin-bottom: 12px;
            align-self: flex-start;
        }

        .member-name {
            font-size: 1.35rem;
            font-weight: 700;
            color: #17345a;
            margin-bottom: 6px;
            line-height: 1.3;
        }

        .member-title {
            font-weight: 600;
            color: #2c5a73;
            margin-bottom: 12px;
            font-size: 0.98rem;
            border-left: 3px solid #d1143e;
            padding-left: 10px;
            background: #fff0f0;
            padding: 8px 12px;
            border-radius: 0 12px 12px 0;
        }

        .member-contact,
        .member-reg {
            font-size: 0.94rem;
            color: #2e4057;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .member-contact i,
        .member-reg i {
            width: 20px;
            color: #d1143e;
            font-size: 1.1rem;
        }

        .member-reg {
            background: #fef0f2;
            padding: 6px 12px;
            border-radius: 30px;
            margin-top: 6px;
        }

        hr.divider-light {
            border-top: 2px dashed rgba(209, 20, 62, 0.15);
            margin: 2rem 0;
        }

        .contact-block {
            background: linear-gradient(135deg, #f9f2f4, #ffffff);
            border-radius: 30px;
            padding: 2rem 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 1.1rem;
            background: white;
            padding: 10px 26px;
            border-radius: 60px;
            box-shadow: 0 6px 12px rgba(23, 52, 90, 0.04);
            border: 1px solid rgba(209, 20, 62, 0.1);
        }

        .contact-item i {
            font-size: 1.9rem;
            color: white;
            background: #d1143e;
            padding: 12px;
            border-radius: 50%;
            width: 54px;
            height: 54px;
            text-align: center;
            line-height: 30px;
        }

        .contact-detail {
            font-weight: 600;
            color: #17345a;
        }

        .fa-4x-fix {
            font-size: 1.7rem;
        }

        /* parent rep special */
        .parent-duo {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 10px;
        }

        .parent-card {
            background: #fff9eb;
            flex: 1 1 200px;
            border-radius: 20px;
            padding: 1.3rem;
        }

        @media (max-width: 576px) {
            .section-header h2 {
                font-size: 1.6rem;
            }

            .card-body-custom {
                padding: 1.5rem;
            }

            .contact-item {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        .miu-icon {
            margin-right: 6px;
        }

        .table-borderless-clean {
            background: transparent;
        }

        .small-note {
            color: #4b6f8a;
        }

        /* additional color touches */
        .text-primary-miu {
            color: #17345a;
        }

        .btn-miu {
            background: #d1143e;
            color: white;
        }

        a {
            color: #d1143e;
        }

        a:hover {
            color: #a00f2f;
        }
    </style>
@endsection
@section('content')
    <!-- BREADCRUMB SECTION - EXACTLY AS REQUESTED, NO CHANGES -->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> IQAC </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> IQAC </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contanier iqac-wrapper mt-5">
            <div class="section-card">
                <div class="sec-title d-flex flex-row pb-3" style="column-gap:12px;">
                    <i class="fa fa-university fa-2x text-dark"></i>
                    <h2>About IQAC</h2>
                </div>
                <div class="card-body-custom">
                    <div class="about-text">
                        <span class="vision-badge mb-3"><i class="fa fa-eye"></i> VISION</span>
                        <p class="mt-3 mb-0" style="font-size:1.06rem; font-weight:500;">Developing system of conscious,
                            consistent and catalytic improvement in the overall performance of institution and keeping the
                            institution abreast with quality sustenance activities.</p>
                    </div>
                    <p style="font-size:1.08rem; color:#1a3d4c;"><i class="fa fa-calendar-check-o mr-2"
                            style="color: #d1143e;"></i> The
                        Internal Quality Assurance Cell (IQAC) at Manipur International University was established on
                        <strong>8th May 2021</strong> to institutionalize the process of quality enhancement and sustenance
                        in
                        all key areas. IQAC functions as a nodal point for strategizing various Quality plans that relate to
                        faculty as well as students.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contanier iqac-wrapper">
            <div class="section-card">
                <div class="sec-title d-flex flex-row pb-3" style="column-gap:12px;">
                    <i class="fa fa-users fa-2x text-dark"></i>
                    <h3>IQAC Team Members</h3>
                </div>
                <div class="card-body-custom">

                    <!-- COORDINATOR + JOINT COORDINATOR -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="member-card h-100">
                                <span class="member-role"><i class="fa fa-id-card"></i> COORDINATOR</span>
                                <span class="member-name">Prof. I. Tomba Singh</span>
                                <span class="member-title">IQAC Coordinator</span>
                                <div class="member-contact"><i class="fa fa-phone-square"></i> Contact: +91-9862275312</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="member-card h-100">
                                <span class="member-role"><i class="fa fa-id-card"></i> JOINT COORDINATOR</span>
                                <span class="member-name">Dr. Senjam Jinus Singh</span>
                                <span class="member-title">Joint Coordinator</span>
                                <div class="member-contact"><i class="fa fa-phone-square"></i> Contact: +91-6090075333</div>
                            </div>
                        </div>
                    </div>

                    <!-- EMINENT ACADEMICIAN & INDUSTRY REPRESENTATIVE -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-graduation-cap"></i> EMINENT ACADEMICIAN</span>
                                <span class="member-name">Prof. S. Shekhar Sharma</span>
                                <span class="member-title">Director - South Asian Institute of Agricultural Management
                                    (SAIRAM),
                                    Imphal</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-building-o"></i> INDUSTRY REPRESENTATIVE</span>
                                <span class="member-name">Prof. N. Irabanta Singh</span>
                                <span class="member-title">Former Director, Institute for Social and Economic Change
                                    (ISEC)</span>
                            </div>
                        </div>
                    </div>

                    <!-- MANAGEMENT & NON-TEACHING + CONTROLLER -->
                    <div class="row mb-4">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-user-circle-o"></i> MANAGEMENT</span>
                                <span class="member-name">Dr. Chandibai Potsangbam</span>
                                <span class="member-title">Management Representative</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-sliders"></i> NON-TEACHING STAFF</span>
                                <span class="member-name">Mr. Tony Singh</span>
                                <span class="member-title">Examination Staff</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-check-square-o"></i> CONTROLLER</span>
                                <span class="member-name">Prof. T. Kamalabati Devi</span>
                                <span class="member-title">Controller of Examinations</span>
                            </div>
                        </div>
                    </div>

                    <!-- STUDENT REPRESENTATIVE x 2 -->
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-user"></i> STUDENT REPRESENTATIVE</span>
                                <span class="member-name">Elangbam Monika Devi</span>
                                <span class="member-title">Research Scholar</span>
                                <div class="member-reg"><i class="fa fa-registered"></i> Reg No: HBL/PH/2022/WG01</div>
                                <div class="member-contact"><i class="fa fa-phone"></i> Contact: 8258850052</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-user"></i> STUDENT REPRESENTATIVE</span>
                                <span class="member-name">Mangalleima Moirangthem</span>
                                <span class="member-title">Research Scholar</span>
                                <div class="member-reg"><i class="fa fa-registered"></i> Reg No: MHL/PHD/2021/Z31A</div>
                                <div class="member-contact"><i class="fa fa-phone"></i> Contact: 9774192504</div>
                            </div>
                        </div>
                    </div>

                    <!-- PARENT REPRESENTATIVE (two, exactly as given) -->
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-users"></i> PARENT REPRESENTATIVE</span>
                                <span class="member-name">Mr. Elangbam Jayenta Singh</span>
                                <span class="member-title">Student’s Parent</span>
                                <div class="member-contact"><i class="fa fa-phone"></i> Contact: 9233129633</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="member-card">
                                <span class="member-role"><i class="fa fa-users"></i> PARENT PRESENTATIVE</span>
                                <span class="member-name">Moirangthem Tarachand Meitei</span>
                                <span class="member-title">Student’s Parent</span>
                                <div class="member-contact"><i class="fa fa-phone"></i> Contact: 9774987846</div>
                            </div>
                        </div>
                    </div>
                    <!-- subtle note: spelling "PRESENTATIVE" kept exactly as provided -->
                    <p class="small-note mt-3 text-right"><i class="fa fa-check-circle-o" style="color: #d1143e;"></i>
                        Exactly as per IQAC record</p>
                </div>
            </div>
        </div>

    </section>


    <section>
        <div class="container iqac-wrapper">
            <div class="section-card">

                <div class="sec-title d-flex flex-row " style="column-gap:12px;">
                    <i class="fa fa-address-book fa-2x text-dark pb-3 mr-3"></i>
                    <h3 class="mb-0">Contact Information</h3>
                </div>

                <div class="card-body-custom">

                    <div class="contact-block d-flex flex-wrap justify-content-around">

                        <!-- Contact 1 -->
                        <div class="contact-item d-flex mb-4">
                            <i class="fa fa-user fa-4x mr-3" style="color:white;"></i>
                            <div>
                                <div style="font-weight:800; font-size:1.25rem; color:#17345a;">
                                    Prof. I. Tomba Singh
                                </div>
                                <div style="font-size:1rem;">
                                    Coordinator +IQAC
                                </div>
                                <div style="font-size:1.1rem; font-weight:600; color:#d1143e;">
                                    <i class="fa fa-phone mr-1 text-white"></i>
                                    +91-9862275312
                                </div>
                            </div>
                        </div>

                        <!-- Contact 2 -->
                        <div class="contact-item d-flex mb-4">
                            <i class="fa fa-user-md fa-4x mr-3" style="color:text-white"></i>
                            <div>
                                <div style="font-weight:800; font-size:1.25rem; color:#17345a;">
                                    Dr. S. Jinus Singh
                                </div>
                                <div style="font-size:1rem;">
                                    Joint Coordinator +IQAC
                                </div>
                                <div style="font-size:1.1rem; font-weight:600; color:#d1143e;">
                                    <i class="fa fa-phone mr-1 text-white"></i>
                                    +91-6090075333
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Footer Info -->
                    <div class="mt-3 text-muted" style="border-top:1px solid rgba(209,20,62,0.2); padding-top:1.2rem;">
                        <i class="fa fa-envelope-o mr-2" style="color:#d1143e;"></i>
                        For IQAC related queries, reach out to the coordinator or joint coordinator.
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
@endsection
