@extends('web.layouts.main')
@section('title', '| Anti-Ragging')
@section('description', 'Anti-Ragging Policy and Support at Manipur International University')

@section('styles')
    <style>
        /* CSS Variables for consistent theming */
        :root {
            --primary-blue: #0d47a1;
            --secondary-blue: #1565c0;
            --accent-red: #ff3d00;
            --light-bg: #f8f9fc;
            --warning-red: #ffebee;
        }

        /* Main anti-ragging section */
     
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="enterprise-plan-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="enterprise-plan__content">
                        <div class="enterprise-plan__content-bg"
                            style="background-image: url({{ asset('assets/images/web-image/anti-ragging.jpg') }});">
                        </div>

                        <div class="enterprise-plan__content__inner">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <h5>Anti-Ragging Policy</h5>
                                </div>
                                <h2>
                                    <span>Zero Tolerance</span><br>
                                    Towards Ragging at MIU
                                </h2>
                            </div>

                            <ul>
                                <li>Strict prohibition of ragging in any form on campus</li>
                                <li>UGC-compliant Anti-Ragging Committee & Squad</li>
                                <li>Immediate action on complaints with confidentiality</li>
                            </ul>

                            <div class="btns-box">
                                <a class="btn-one btn-one--style4" href="{{ url('/contact-us') }}">
                                    <span class="txt">
                                        <i class="icon-right-arrow-1"></i>
                                        Report Ragging
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact Info -->
    <section class="quick-contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="quick-contact-info-title">
                        <div class="sec-title">
                            <h2>National Anti-Ragging<br> Support & Assistance</h2>
                            <div class="sub-title">
                                <p>
                                    Manipur International University strictly follows the UGC Anti-Ragging
                                    Regulations. Students can report any incident of ragging confidentially
                                    through the National Anti-Ragging Helpline available 24×7.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="quick-contact-info-single-box">
                        <div class="icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="text">
                            <h3>Anti-Ragging Helpline</h3>
                            <p>Report ragging incidents anytime. Toll-free & confidential.</p>
                            <a href="tel:18001805522">1800-180-5522</a>
                            <small>Available 24×7</small>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="quick-contact-info-single-box">
                        <div class="icon">
                            <span class="icon-send-1"></span>
                        </div>
                        <div class="text">
                            <h3>Email Support</h3>
                            <p>Submit complaints or seek guidance via official email.</p>
                            <a href="mailto:helpline@antiragging.in">
                                helpline@antiragging.in
                            </a>
                            <br>
                            <a href="https://www.antiragging.in" target="_blank">
                                www.antiragging.in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Anti-Ragging Information Section -->
    <section id="anti-ragging" class="py-5">
        <div class="container anti-ragging-section">
            <div class="text-center mb-5 sec-title pb-0">
                <h1 class="font-weight-bold mb-3">NATIONAL RAGGING PREVENTION PROGRAMME</h1>
                <p class="text-muted">24/7 Support System for Students Against Ragging</p>
            </div>

            <!-- Helpline Card -->
            <div class="helpline-card bg-danger">
                <h2 class="helpline-title">
                    <i class="fa fa-phone-alt text-white"></i> National Anti-Ragging Helpline
                </h2>
                <p class="mb-4 text-white">24x7 Toll-Free Support for Students</p>
                <a href="tel:18001805522" class="helpline-number">
                    <i class="fa fa-phone-volume text-white"></i> 1800-180-5522
                </a>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <p><i class="fa fa-envelope icon text-white"></i> Email: 
                            <a href="mailto:helpline@antiragging.in" class="contact-link text-white">helpline@antiragging.in</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fa fa-globe icon text-white"></i> Website: 
                            <a href="http://www.antiragging.in" target="_blank" class="contact-link text-white">www.antiragging.in</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- UGC Monitoring Agency -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="warning-box">
                        <h3 class="contact-title text-danger">
                            <i class="fa fa-university"></i> UGC Monitoring Agency
                        </h3>
                        <p class="mb-2"><strong>Centre for Youth (C4Y)</strong></p>
                        <p class="mb-2">
                            <i class="fa fa-envelope icon  text-dark"></i> Email: 
                            <a href="mailto:antiragging@c4yindia.org" class="contact-link  text-dark">antiragging@c4yindia.org</a>
                        </p>
                        <p class="mb-0">
                            <i class="fa fa-globe icon  text-dark" ></i> Website: 
                            <a href="http://www.c4yindia.org" target="_blank" class="contact-link  text-dark">www.c4yindia.org</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Committee and Squad -->
            <div class="row">
                <div class="col-md-6">
                    <div class="warning-box">
                        <h3 class="contact-title  text-danger">
                            <i class="fa fa-users"></i> Anti-Ragging Committee (ARC)
                        </h3>
                        <p class=" text-dark">Institutional body responsible for preventing and addressing ragging incidents.</p>
                        <p class="mb-0  text-dark">Contact your institution for specific committee details.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="warning-box">
                        <h3 class="contact-title  text-danger">
                            <i class="fa fa-shield-alt "></i> Anti-Ragging Squad (ARS)
                        </h3>
                        <p class=" text-dark">On-ground team for monitoring and immediate response to ragging incidents.</p>
                        <p class="mb-0  text-dark">Contact your institution for squad details and immediate assistance.</p>
                    </div>
                </div>
            </div>

            <!-- Warning Box -->
            <div class="warning-box mt-5">
                <h4 class="warning-title">
                    <i class="fa fa-exclamation-triangle"></i> IMPORTANT LEGAL NOTICE
                </h4>
                <p class="mb-0">
                    RAGGING IS A CRIMINAL OFFENCE AND THE CULPRITS WILL ATTRACT PUNITIVE ACTION AS MENTIONED IN THE UGC REGULATIONS
                </p>
                <a href="http://www.antiragging.in/assets/pdf/annexure/Annexure-I.pdf" target="_blank" class="btn btn-danger mt-3">
                    <i class="fa fa-file-pdf"></i> View UGC Regulations (Annexure-I)
                </a>
            </div>

            <!-- UGC Website Link -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="mb-3">For more information, visit the official UGC website:</p>
                    <a href="http://www.ugc.ac.in" target="_blank" class="btn btn-info btn-lg">
                        <i class="fa fa-external-link-alt"></i> www.ugc.ac.in
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Committee Members Section -->
    <section id="anti-ragging-committee" class="py-5 bg-danger">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center sec-title pb-3">
                    <h2 class="section-title text-white">Anti-Ragging Committee</h2>
                    <p class=" text-white">Manipur International University</p>
                </div>
            </div>

            <div class="row">
                @php
                    $committee_members = [
                        ['name' => 'Prof. Irom Tomba Singh', 'role' => 'Chairman', 'phone' => '9863915191'],
                        ['name' => 'Prof. Charles Yuhlung', 'role' => 'Vice Chairman', 'phone' => '9862552550'],
                        ['name' => 'Prof. Wahengbam Sushma Devi', 'role' => 'Member Secretary', 'phone' => '9818705195'],
                        ['name' => 'Prof. Irom Shirly', 'role' => 'Member', 'phone' => '9854844515'],
                        ['name' => 'Dr. Nonie Lourembam', 'role' => 'Member', 'phone' => '9774298528'],
                        ['name' => 'Dr. S. Anand Singh', 'role' => 'Member', 'phone' => '7085602359'],
                        ['name' => 'Dr. M. Bidyarani Devi', 'role' => 'Member', 'phone' => '9774770034'],
                        ['name' => 'Mr. Satyajyoti Sorokhaibam', 'role' => 'Representative (PhD Scholars)', 'phone' => '8131949025'],
                        ['name' => 'Ms. Rabiya', 'role' => 'Representative (UG Students)', 'phone' => '8131001739'],
                        ['name' => 'Dr. T. Umabati Devi', 'role' => 'Ombudsperson', 'phone' => '8974056543'],
                        ['name' => 'Mrs. Suniti Wahengbam', 'role' => 'Member (Parents)', 'phone' => '9366566079'],
                        ['name' => 'Dr. Kh. Mukta Singh', 'role' => 'Member', 'phone' => '7085383690'],
                    ];
                @endphp

                @foreach($committee_members as $member)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="spec-card text-center">
                        <h5>{{ $member['name'] }}</h5>
                        <p class="text-dark"><strong>{{ $member['role'] }}</strong></p>
                        <p class="mb-0"><i class="fa fa-phone text-success"></i> {{ $member['phone'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Squad Members Section -->
    <section id="anti-ragging-squad" class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="sec-title pb-3">
                        <i class="fa fa-users"></i> Anti-Ragging Squad
                    </h2>
                    <p class="text-muted">Manipur International University</p>
                </div>
            </div>

            <div class="row">
                @php
                    $squad_members = [
                        ['name' => 'Prof. T. Brajeshwari Devi', 'role' => 'Chairman', 'phone' => '8474970309'],
                        ['name' => 'Prof. T. Kamalabati Devi', 'role' => 'Member', 'phone' => '7005331806'],
                        ['name' => 'Dr. S. Gunajit Mangang', 'role' => 'Member', 'phone' => '8794959921'],
                        ['name' => 'Dr. Chandibai Potsangbam', 'role' => 'Member', 'phone' => '9774800960'],
                        ['name' => 'Dr. Th. Basanta Singh', 'role' => 'Member', 'phone' => '8787740321'],
                        ['name' => 'Dr. R.K. Sujata', 'role' => 'Member', 'phone' => '7005916145'],
                    ];
                @endphp

                @foreach($squad_members as $member)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="spec-card">
                        <h5>{{ $member['name'] }}</h5>
                        <p class="text-warning"><strong>{{ $member['role'] }}</strong></p>
                        <p class="mb-0"><i class="fa fa-phone text-success"></i> {{ $member['phone'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Important Notice -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="alert alert-danger text-center p-4 rounded">
                        <h4><i class="fa fa-ban"></i> Important Notice</h4>
                        <p class="mb-0">
                            Ragging is a criminal offence and culprits will attract punitive action
                            as mentioned in the statutory regulations of the UGC.
                            Any individual found involved in ragging shall be liable for
                            strict disciplinary and legal action.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="row mt-4 text-center">
                <div class="col-12">
                    <a href="https://www.antiragging.in/" target="_blank" class="btn btn-outline-danger m-2">
                        <i class="fa fa-external-link-alt"></i> Visit Anti-Ragging Portal
                    </a>
                    <a href="https://www.ugc.gov.in/" target="_blank" class="btn btn-outline-danger m-2">
                        <i class="fa fa-university"></i> UGC Website
                    </a>
                    <a href="https://www.ugc.gov.in/pdfnews/6317306_UGC-Regulations-on-Curbing-the-Menace-of-Ragging.pdf"
                        target="_blank" class="btn btn-outline-danger m-2">
                        <i class="fa fa-file-pdf"></i> UGC Regulations
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Phone number interaction
            $('.helpline-number').on('click', function() {
                $(this).find('i').css('transform', 'scale(1.2)');
                setTimeout(function() {
                    $('.helpline-number i').css('transform', 'scale(1)');
                }, 300);
            });

            // Smooth scroll for anchor links
            $('a[href^="#"]').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    const hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 80
                    }, 800);
                }
            });
        });
    </script>
@endsection