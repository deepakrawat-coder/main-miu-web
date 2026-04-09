@extends('web.layouts.main')
@section('title', '| incubation center ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
    <style>
        .boxes {
            display: flex;
            flex-wrap: wrap;
        }

        .boxes .box {
            background-color: #D3224D;
            padding: 20px;
            border-radius: 10px;
            margin-right: 18px;
            margin-bottom: 10px;
        }

        .boxes .box:hover {
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        .boxes .box p {
            color: white;
            font-size: 16px;
        }

        .partner-section {
            background: #f8fafc;
        }

        .partner-section h2 {
            color: #1e293b;
        }

        .info-card {
            background: #ffffff;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .highlight-card {
            background: linear-gradient(135deg, #e0f2fe, #f1f5f9);
        }

        .btn-danger {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border: none;
        }

        .btn-dark {
            background: linear-gradient(135deg, #1e293b, #020617);
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
            transform: scale(1.03);
        }
    </style>
@endsection
@section('content')



    {{-- counter starts --}}
    <div class="counter-area1 overflow-hidden">
        <div class="container th-container2">

            <div class="text-center mb-5">
                <h1 class="text-white fs-1">Incubation Centre & Entrepreneurship Cell</h1>
                <h3 class="text-white fs-4">Manipur International University</h3>
                <h3 class="text-white fs-3">Empowering Innovation • Fostering Entrepreneurship • Building Tomorrow</h3>
            </div>

            <div class="counter-wrap1 pt-4">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-1.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                        <p class="box-text">Startups Incubated</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-2.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">200</span>+</h3>
                        <p class="box-text">Students Engaged</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-4.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">15</span>+</h3>
                        <p class="box-text">Industry Partners</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    {{-- counter ends --}}


    <section class="professor-area-1 position-relative space overflow-hidden" id="professor-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper-in my-3">
                        <h3 class="sec-title text-anim2 mb-3"> About Our Incubation Centre </h3>
                        <p class="text-anim2"> The Manipur International University Incubation Centre serves as a dynamic
                            hub for innovation and entrepreneurship, nurturing the next generation of startups and business
                            leaders in Northeast India. </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="wrapper-in my-3">
                        <h3 class="sec-title text-anim2 mb-3"> Our Focus Areas </h3>
                        <div class="boxes">
                            <div class="box">
                                <p class="mb-0"> Technology Innovation </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Social Entrepreneurship </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Sustainable Business Models </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Digital Transformation </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Rural Innovation </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="wrapper-in my-3">
                        <h3 class="sec-title text-anim2 mb-1"> Why Partner With Us? </h3>
                        <p> By sponsoring our Incubation Centre, you’re investing in the future of innovation and
                            entrepreneurship in Northeast India while gaining valuable brand exposure and talent access.
                        </p>
                        <div class="boxes-1">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="box border border-1 rounded p-3 mb-3">
                                        <img src="{{ asset('/new-miu/icons/ic1.png') }}" class="img-fluid mb-2"
                                            width="80" height="60" alt="icon">
                                        <h6 class="mb-1">Brand Visibility</h6>
                                        <p class="mb-0"> Prominent logo placement across all events and materials </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="box border border-1 rounded p-3 mb-3">
                                        <img src="{{ asset('/new-miu/icons/ic2.png') }}" class="img-fluid mb-2"
                                            width="80" height="60" alt="icon">
                                        <h6 class="mb-1">Talent Pipeline</h6>
                                        <p class="mb-0"> Early access to innovative students and startups </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="box border border-1 rounded p-3 mb-3">
                                        <img src="{{ asset('/new-miu/icons/ic3.png') }}" class="img-fluid mb-2"
                                            width="80" height="60" alt="icon">
                                        <h6 class="mb-1">Networking</h6>
                                        <p class="mb-0"> Connect with industry leaders and entrepreneurs </p>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-6">
                                    <div class="box border border-1 rounded p-3 mb-3">
                                        <img src="{{ asset('/new-miu/icons/ic4.png') }}" class="img-fluid mb-2"
                                            width="80" height="60" alt="icon">
                                        <h6 class="mb-1">Innovation Access</h6>
                                        <p class="mb-0"> First look at emerging technologies and solutions </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-6">
                                    <div class="box border border-1 rounded p-3 mb-3">
                                        <img src="{{ asset('/new-miu/icons/ic5.png') }}" class="img-fluid mb-2"
                                            width="80" height="60" alt="icon">
                                        <h6 class="mb-1">CSR Impact</h6>
                                        <p class="mb-0"> Support regional economic development </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="wrapper-in my-3">
                        <h3 class="sec-title text-anim2 mb-3"> Our Programs </h3>
                        <div class="boxes">
                            <div class="box">
                                <p class="mb-0"> Startup Bootcamps & Workshops </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Mentorship Programs </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Pitch Competitions </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Industry Connect Sessions </p>
                            </div>
                            <div class="box">
                                <p class="mb-0"> Innovation Challenges </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="space overflow-hidden overflow-hidden">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-md-8">
                    <div class="title-area"><span class="sub-title text-anim">Packages</span>
                        <h2 class="sec-title text-anim2">Sponsorship Packages</h2>
                        <p>Choose a sponsorship tier that aligns with your organization’s goals and budget</p>
                    </div>
                </div>
            </div>
            <div class="row gy-30 ">

                <div class="col-xl-4 col-md-6">
                    <div class="price-card active wow fadeInUp shadow-sm" data-wow-delay=".4s">
                        <div class="card-sill-wrap">
                            <div class="card-sill"><span class="text-uppercase">Features</span></div>
                        </div>
                        <div class="card-icon text-center"><img src="assets/img/icon/pricing-icon-white.svg"
                                alt="Stadum"></div>
                        <h3 class="box-title text-center">Platinum Sponsor</h3>
                        <h4 class="price-card_price text-center">₹5,00,000+</h4>
                        <div class="checklist">
                            <ul>
                                <li>Title sponsor for major events</li>
                                <li>Dedicated incubation space naming rights</li>
                                <li>Executive mentorship opportunities</li>
                                <li>Premium logo placement</li>
                                <li>Keynote speaking opportunities</li>
                                <li>First right to recruit students</li>
                                <li>Quarterly progress reports</li>
                                <li>Board advisory position</li>
                            </ul>
                        </div>
                        {{-- <div class="btn-wrap"><a class="th-btn th-icon white-hover" href="pricing.html">Get Started</a>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card wow fadeInLeft shadow-sm" data-wow-delay=".2s">
                        <div class="card-sill-wrap"></div>
                        <div class="card-icon text-center"><img src="assets/img/icon/pricing-icon-black.svg"
                                alt="Stadum"></div>
                        <h3 class="box-title text-center">Gold Sponsor</h3>
                        <h4 class="price-card_price text-center">₹2,50,000</h4>
                        <div class="checklist">
                            <ul>
                                <li>Event co-sponsorship opportunities</li>
                                <li>Workshop/seminar naming rights</li>
                                <li>Mentorship program participation</li>
                                <li>Prominent logo display</li>
                                <li>Student project collaboration</li>
                                <li>Recruitment fair participation</li>
                                <li>Bi-annual impact reports</li>
                                <li>Technology showcase booth</li>
                            </ul>
                        </div>
                        {{-- <div class="btn-wrap"><a class="th-btn th-icon" href="pricing.html">Get Started</a></div> --}}
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card wow fadeInRight shadow-sm" data-wow-delay=".6s">
                        <div class="card-sill-wrap"></div>
                        <div class="card-icon text-center"><img src="assets/img/icon/pricing-icon-black.svg"
                                alt="Stadum"></div>
                        <h3 class="box-title text-center">Silver Sponsor</h3>
                        <h4 class="price-card_price text-center">₹1,00,000</h4>
                        <div class="checklist">
                            <ul>
                                <li>Workshop sponsorship</li>
                                <li>Logo on marketing materials</li>
                                <li>Guest lecture opportunities</li>
                                <li>Student internship program</li>
                                <li>Networking event access</li>
                                <li>Annual impact summary</li>
                                <li>Social media recognition</li>
                                <li>Certificate of appreciation</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="price-card wow fadeInRight shadow-sm" data-wow-delay=".6s">
                        <div class="card-sill-wrap"></div>
                        <div class="card-icon text-center"><img src="assets/img/icon/pricing-icon-black.svg"
                                alt="Stadum"></div>
                        <h3 class="box-title text-center">Bronze Sponsor</h3>
                        <h4 class="price-card_price text-center">₹50,000</h4>
                        <div class="checklist">
                            <ul>
                                <li>Event program listing</li>
                                <li>Website acknowledgment</li>
                                <li>Networking opportunities</li>
                                <li>Student competition prizes</li>
                                <li>Social media mentions</li>
                                <li>Event participation access</li>
                                <li>Community recognition</li>
                                <li>Thank you certificate</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="partner-section py-5">
        <div class="container text-center">

            <h2 class="fw-bold mb-3">Ready to Partner With Us?</h2>
            <p class="text-muted mb-4">
                Join us in building the entrepreneurial ecosystem of Northeast India. Together, we can create lasting impact
                and foster innovation.
            </p>

            <div class="mb-5">
                <a href="mailto:director@miu.edu.in" class="btn btn-danger px-4 py-2 me-2 shadow-sm">Get Sponsorship Details</a>
                <a href="tel:+91-9036983337" class="btn btn-dark px-4 py-2 shadow-sm">Call Us Now</a>
            </div>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="info-card p-4 h-100">
                        <h5 class="fw-bold mb-3">Ningombam Amarjit Singh</h5>
                        <p class="text-muted mb-2">Director, Incubation Center</p>
                        <p class="mb-1"><i class="fa-solid fa-envelope"></i> director@miu.edu.in</p>
                        <p><i class="fa-solid fa-phone"></i> +91-8899788788</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="info-card p-4 h-100 highlight-card">
                        <h5 class="fw-bold mb-3">Mr. Shoraisam Kiran Singh</h5>
                        <p class="text-muted mb-2">Sponsorship Coordinator</p>
                        <p class="mb-1"><i class="fa-solid fa-envelope"></i> admin@miu.edu.in</p>
                        <p><i class="fa-solid fa-phone"></i> +91-9876543211</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="info-card p-4 h-100">
                        <h5 class="fw-bold mb-3">Office Address</h5>
                        <p class="mb-2">Manipur International University</p>
                        <p class="text-muted mb-2">
                            Ghari, Imphal West, Manipur – 795140
                        </p>
                        <p class="text-primary">www.miu.edu.in</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
