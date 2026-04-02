@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .academy-slogan-middle-content .banner-logo-box {
            padding: 0px;
        }

        .spec-card {
            background: #f9fafb;
            padding: 22px 20px;
            border-radius: 8px;
            border-left: 4px solid #3c4056;
        }

        .spec-card h5 {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .spec-card p {
            font-size: 14px;
            color: #555;
        }

        .rti-creative {
            background: #f4f6f9;
        }

        /* Title */
        .rti-main-title {
            font-size: 22px;
            font-weight: 600;
            color: #1f2d3d;
        }

        .rti-main-title i {
            color: #0056b3;
            margin-right: 6px;
        }

        .rti-divider {
            width: 80px;
            height: 3px;
            background: #0056b3;
            margin: 10px auto 0;
        }

        /* Main Panel */
        .rti-panel {
            background: #ffffffa8;
            border-left: 5px solid #0056b3;
            padding: 43px 20px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .rti-panel-header {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color:black;
        }

        .rti-panel-header i {
            color: #0056b3;
            margin-right: 6px;
        }

        /* Steps */
        .rti-steps {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .rti-steps li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 14px;
            color: black;
        }

        .rti-steps li i {
            width: 22px;
            color: #198754;
            margin-top: 2px;
        }

        /* Fee Panel */
        .rti-fee-panel {
            background: #f7f7f799;
            border: 1px dashed #ffc107;
            padding: 20px;
            text-align: center;
            border-radius: 12px;
        }

        .fee-amount {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #ffc107;
            color: #000;
            font-size: 28px;
            font-weight: 700;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fee-note {
            font-size: 14px;
            margin-bottom: 15px;
            color:black;
        }

        .fee-methods {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }

        .fee-methods li {
            font-size: 14px;
            margin-bottom: 8px;
            color: black;
        }

        .fee-methods i {
            color: #28a745;
            margin-right: 6px;
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
                            <h2>CPIO</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">CPIO</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-future-area bg-white pb-0">
        <div class="container">
            <div class="sec-title">
                <h2>Central Public Information Officer (CPIO) & First Appellate Authority (AA)</h2>
                <div class="sub-title">
                    <p>Manipur International University, Imphal - Under Right to Information Act, 2005</p>
                </div>
            </div>
        </div>
    </section>
    <section class="academy-slogan-area">
        <div class="academy-slogan-middle-content">
            <div class="academy-slogan-middle-content__bg"
                style="background-image: url({{ asset('/assets/images/web-image/about--image.jpg') }});"></div>

            <div class="banner-logo-box">
                <a href="#">
                    <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}" alt="MIU" title="">
                </a>
            </div>

            <div class="phone-box paroller"
                style="transform: translateY(-16px); transition: transform 0.6s cubic-bezier(0, 0, 0, 1); will-change: transform;">
            </div>
        </div>

        <div class="auto-container">
            <div class="row">

                <!-- LEFT : CPIO -->
                <div class="col-xl-6">
                    <div class="academy-slogan-content-one">
                        <div class="academy-slogan-content-one__bg"
                            style="background-image: url({{ asset('/assets/images/web-image/about--image.jpg') }});">
                        </div>

                        <div class="academy-slogan-content-one__inner text-start pl-4">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <h5>Right to Information (RTI)</h5>
                                </div>
                                <h2>
                                    <span>Central Public</span><br>
                                    Information Officer (CPIO)
                                </h2>
                            </div>

                            <div class="text-white mt-3">
                                <p><strong>Name:</strong> Dr. Shelly Sanasam</p>
                                <p><strong>Designation:</strong> Private Secretary to the Registrar</p>
                                <p>
                                    <strong>Responsibility:</strong><br>
                                    Assigned to look after all matters seeking information under the
                                    Right to Information Act, 2005, in addition to existing normal duties.
                                </p>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- RIGHT : FIRST APPELLATE AUTHORITY -->
                <div class="col-xl-6">
                    <div class="academy-slogan-content-one academy-slogan-content-one--style2">
                        <div class="academy-slogan-content-one__bg"
                            style="background-image: url({{ asset('/assets/images/web-image/about--image.jpg') }});">
                        </div>

                        <div class="academy-slogan-content-one__inner text-start" style="padding-bottom: 82px;">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <h5>RTI Appeals</h5>
                                </div>
                                <h2>
                                    <span>First Appellate</span><br>
                                    Authority (AA)
                                </h2>
                            </div>

                            <div class="text-white mt-3">
                                <p><strong>Name:</strong> Prof. Potsangbam Kumar Singh</p>
                                <p><strong>Designation:</strong> Pro-Vice Chancellor</p>
                                <p>
                                    <strong>Responsibility:</strong><br>
                                    Designated to handle appeals and review petitions related to
                                    information requests addressed to Manipur International University,
                                    Imphal, in accordance with prevailing institutional guidelines.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="anti-ragging-squad" class="explore-future-area">
        <div class="container">

            <!-- Section Heading -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        <i class="fa fa-address-book text-primary me-2"></i>
                        Contact Information
                    </h2>
                </div>
            </div>

            <!-- Contact Cards -->
            <div class="row">

                <!-- Registrar Office -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card h-100">
                        <h5>
                            <i class="fa fa-university text-primary me-2"></i>
                            Registrar Office
                        </h5>
                        <p class="mb-2">
                            <i class="fa fa-envelope text-warning me-2"></i>
                            <strong>registrar@miu.edu.in</strong>
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-phone text-success me-2"></i>
                            +91 9862879287
                        </p>
                    </div>
                </div>

                <!-- Pro Vice Chancellor -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card h-100">
                        <h5>
                            <i class="fa fa-user-tie text-primary me-2"></i>
                            Pro-Vice Chancellor Office
                        </h5>
                        <p class="mb-2">
                            <i class="fa fa-envelope text-warning me-2"></i>
                            <strong>provc@miu.edu.in</strong>
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-phone text-success me-2"></i>
                            +91 9774011289
                        </p>
                    </div>
                </div>

                <!-- Postal Address -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card h-100">
                        <h5>
                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                            Postal Address
                        </h5>
                        <p class="mb-2">
                            <i class="fa fa-user-shield text-warning me-2"></i>
                            <strong>Central Public Information Officer (CPIO)</strong>
                        </p>
                        <p class="mb-1">
                            <i class="fa fa-building text-success me-2"></i>
                            Manipur International University
                        </p>
                        <p class="mb-1">
                            <i class="fa fa-road text-success me-2"></i>
                            Airport Road, Ghari, Imphal
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-map text-success me-2"></i>
                            Imphal West, Manipur – 795140
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="explore-future-area py-5" style="background: var(--thm-base);">
        <div class="container">

            <!-- Header -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="rti-main-title text-white">
                        <i class="fa fa-file-text-o text-white"></i>
                        RTI Application – Required Documents & Fee
                    </h3>
                    <div class="rti-divider"></div>
                </div>
            </div>

            <div class="row">

                <!-- LEFT: Requirements -->
                <div class="col-lg-8 col-md-7 col-sm-12 mb-4">
                    <div class="rti-panel">
                        <div class="rti-panel-header">
                            <i class="fa fa-list-ul"></i>
                            RTI Application Requirements
                        </div>

                        <ul class="rti-steps">
                            <li>
                                <i class="fa fa-pencil"></i>
                                A clearly written or typed request
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                Applicant’s name and contact details
                            </li>
                            <li>
                                <i class="fa fa-search"></i>
                                Specific information sought
                            </li>
                            <li>
                                <i class="fa fa-user-secret"></i>
                                Addressed to the concerned Public Information Officer (PIO)
                            </li>
                            <li>
                                <i class="fa fa-language"></i>
                                Application may be written in English, Hindi or official language
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT: Fee -->
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="rti-fee-panel">
                        <div class="fee-amount">
                            <i class="fa fa-inr"></i> 10
                        </div>

                        <p class="fee-note">
                            Application fee payable in favour of
                            <strong>Manipur International University, Imphal</strong>
                        </p>

                        <ul class="fee-methods">
                            <li><i class="fa fa-check"></i> Demand Draft</li>
                            <li><i class="fa fa-check"></i> Indian Postal Order</li>
                            <li><i class="fa fa-check"></i> Banker’s Cheque</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="teaching-area">
    <div class="container">
        <div class="row">

            <!-- LEFT IMAGE (UNCHANGED) -->
            <div class="col-xl-6">
                <div class="teaching-img-box-style2">
                    <img src="{{ asset('/assets/images/web-image/about--image.jpg') }}" alt="RTI Declaration">
                </div>
            </div>

            <!-- RIGHT CONTENT (RTI DECLARATION) -->
            <div class="col-xl-6">
                <div class="teaching-content teaching-content--style2">
                    <div class="sec-title">
                        <h2>
                            Declaration under the<br>
                            Right to Information (RTI) Act
                        </h2>
                        <div class="sub-title">
                            <p>
                                The Right to Information Act intends to set out the practical
                                regime of the Right to Information for citizens to enable them
                                to access the information under the control of public authority
                                in order to promote transparency and accountability in the
                                working of such authority.
                            </p>
                        </div>
                    </div>

                    <div class="inner-title">
                        <div class="border-line"></div>
                        <h3>Public Information Disclosure</h3>
                    </div>

                    <ul>
                        <li>
                            <div class="dot-box"></div>
                            Information placed in the public domain through the
                            Manipur International University website is intended to
                            facilitate easy access for citizens.
                        </li>
                        <li>
                            <div class="dot-box"></div>
                            Citizens may access such information through electronic
                            mode, thereby avoiding inconvenience, to the extent possible,
                            of submitting formal RTI applications.
                        </li>
                        <li>
                            <div class="dot-box"></div>
                            While compiling the information, due care has been exercised
                            to ensure correctness and authenticity.
                        </li>
                        <li>
                            <div class="dot-box"></div>
                            However, if any inadvertent error has crept in, the same is
                            subject to correction without prior notice.
                        </li>
                    </ul>

                    <div class="btns-box">
                        <span style="font-weight:600; color:#1f3c88;">
                            – Registrar, Manipur International University
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
@section('scripts')
@endsection
