@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
    <style>
        .price-item .pricce-list {
            max-width: 100%;
        }

        .timeline {
            position: relative;
            margin: 50px auto;
            padding: 20px 0;
        }

        /* vertical line */
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #0d6efd;
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px;
        }

        .timeline-item.left {
            left: 0;
            text-align: right;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-item .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* circle */
        .timeline-item::before {
            content: '';
            position: absolute;
            top: 30px;
            width: 20px;
            height: 20px;
            background: #0d6efd;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item.left::before {
            right: -10px;
        }

        .timeline-item.right::before {
            left: -10px;
        }

        /* responsive */
        @media (max-width: 768px) {
            .timeline::before {
                left: 10px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 40px;
                padding-right: 15px;
            }

            .timeline-item.left,
            .timeline-item.right {
                left: 0;
                text-align: left;
            }

            .timeline-item::before {
                left: 0;
            }
        }
    </style>
@endsection
@section('content')




    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        {{-- <div class="breadcumb-shape"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="shape" class="jump"></div> --}}
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about1-area position-relative overflow-hidden space" id="about-sec">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="assets/img/shape/feature-shep-2-home-1.png" alt="shape"></div>

        <div class="container th-container4">
            <div class="about-wrap1 position-relative z-index-2 mb-5">
                <div class="row gy-60 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="about-content ms-xxl-4 pe-xxl-2 me-xl-2">
                            <div class="title-area mb-3"><span class="sub-title text-anim">About Us</span>
                                <h2 class="sec-title text-anim2 pe-xl-5 me-xl-5">Manipur International University </h2>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    Manipur International University (MIU)of Imphal, established in 2018 under the Manipur
                                    International University Ordinance, 2018 (Ordinance No.1 of 2018), promulgated by Her
                                    Excellency the Governor of Manipur is a State Private University. It holds the
                                    prestigious recognition from the University Grants Commission (UGC), Ministry of
                                    Education, Government of India under Section 2(f) and Section 22 of the UGC Act, 1956 as
                                    a State Private University
                                </p>
                            </div>

                            <h3>Our Prestigious Recognitions </h3>
                            <div class="about-feature-wrapp">
                                <div class="about-feature wow fadeInUp" data-wow-delay=".3s"><span class="box-icon"><img
                                            src="assets/img/icon/ab-users.svg" alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">International Institution of Excellence</h3>
                                        <p class="box-text">Recognized for maintaining world-class academic standards and
                                            fostering global partnerships.</p>
                                    </div>
                                </div>
                                <div class="about-feature wow fadeInUp" data-wow-delay=".4s"><span class="box-icon"><img
                                            src="assets/img/icon/ab-message.svg" alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Institution of State Importance</h3>
                                        <p class="box-text">Acknowledged for significant contributions to the educational
                                            and socio-economic development of Manipur.</p>
                                    </div>
                                </div>
                                <div class="about-feature wow fadeInUp" data-wow-delay=".4s"><span class="box-icon"><img
                                            src="assets/img/icon/library.svg" alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">State Research Institute</h3>
                                        <p class="box-text">Designated as a premier research hub driving innovation and
                                            scholarly excellence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s"><a href="/contact"
                                    class="th-btn th-icon">Learn More</a></div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="">
                            <div class="">
                                <div class=""><img src="{{ asset('/new-miu/banner/banner2.jpeg') }}"
                                        alt="Stadum">
                                </div>
                                <div class=""><img src="{{ asset('/new-miu/banner/banner4.png') }}"
                                        alt="Stadum">
                                </div>
                            </div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- counter starts --}}
    <div class="counter-area1 overflow-hidden">
        <div class="container th-container2">
            <div class="counter-wrap1">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-1.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">100</span>+</h3>
                        <p class="box-text">Reveive Multiyear Fellowships</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-2.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">2019</span></h3>
                        <p class="box-text">Year Established</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-3.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                        <p class="box-text">Academic Programs</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-4.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">10</span>+</h3>
                        <p class="box-text">Research Centers</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    {{-- counter ends --}}


    {{-- our founding journey starts --}}
    <section class="space-top overflow-hidden position-relative" style="      background: #f5f7fa;">
        <div class="container th-container4">

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <h2 class="text-center ">Our Founding Journey</h2>
                    <p class="text-center">The establishment of Manipur International University represents a remarkable
                        journey of
                        vision, determination, and legislative excellence. Our founding story is a testament to the
                        collaborative
                        efforts of visionary leaders, dedicated legislators, and the unwavering support of the people of
                        Manipur.</p>
                </div>
            </div>


            <div class="timeline">

                <!-- Card 1 -->
                <div class="timeline-item left">
                    <div class="card p-3">
                        <h6 class="text-primary">June 26, 2018</h6>
                        <h5>Genesis of Vision</h5>
                        <p class="text-start">
                            The Manipur International University Ordinance, 2018 (Ordinance No.1 of 2018) was promulgated by
                            Her Excellency the Governor of Manipur. This historic document, published in the Extraordinary
                            Gazette of the State Government, marked the official beginning of our institution after rigorous
                            official processes, comprehensive vetting, thorough verification, and unanimous approval by the
                            State Government, including the State Cabinet.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="timeline-item right">
                    <div class="card p-3">
                        <h6 class="text-primary">July 23, 2018</h6>
                        <h5>Legislative Triumph</h5>
                        <p>The monsoon session of the Manipur State Legislative Assembly created history by unanimously
                            passing the Manipur International University Bill, 2018 (Bill No. 8 of 2018). This unanimous
                            vote demonstrated the collective commitment of all political parties to advancing higher
                            education in the state.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="timeline-item left">
                    <div class="card p-3">
                        <h6 class="text-primary">December 21, 2018</h6>
                        <h5>Refinement and Perfection</h5>
                        <p>The winter session of the Manipur State Legislative Assembly once again unanimously passed the
                            Manipur International University Bill, 2018, this time incorporating necessary amendments and
                            refinements based on extensive deliberations and expert consultations.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="timeline-item right">
                    <div class="card p-3">
                        <h6 class="text-primary">January 23, 2019</h6>
                        <h5>Royal Assent</h5>
                        <p>The Manipur International University Act, 2018 (Manipur Act No. 2 of 2019) received the gracious
                            approval of Her Excellency the Governor of Manipur, transforming our vision into legal reality.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="timeline-item left">
                    <div class="card p-3">
                        <h6 class="text-primary">February 14, 2019</h6>
                        <h5>Official Notification</h5>
                        <p>The Law and Legislative Affairs Department of the State Government of Manipur officially notified
                            the university's establishment in the official Gazette extraordinary, marking the completion of
                            all legal formalities and our official recognition by the UGC.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- our founding journey ends --}}




    {{-- programs starts --}}
    <section class="program-area position-relative overflow-hidden space" id="program-sec">
        <div class="container">
            <div class="row justify-content-center text-start">
                <div class="col-12">
                    <div class="title-area">
                        {{-- <span class="sub-title text-anim" data-cue="slideInLeft">PROGRAMS</span> --}}
                        <h2 class="sec-title text-anim2 mb-3" data-cue="slideInUp">The Sacred Symbolism of Our Logo </h2>
                        <p>The logo of Manipur International University is far more than a mere visual identifier - it is a
                            profound synthesis of ancient wisdom, cultural heritage, and universal values. Every element has
                            been carefully chosen to reflect our institution's commitment to excellence, spiritual growth,
                            and global harmony.</p>
                        <p>At its heart, our logo portrays two majestic elephants standing as eternal guardians of the
                            Ashoka Chakra, representing the Dharma Chakra (Wheel of Dharma). This central wheel, adorned
                            with 24 spokes, symbolically represents the Dharma - the righteous way of living, cosmic law and
                            order, and the four noble truths of life as taught by Lord Buddha.</p>
                        <p>The design also incorporates the ancient shortened version of Pakhangbha Paphal, representing the
                            supreme deity of the Meitei tradition of Manipur, thus honoring our deep cultural roots while
                            embracing universal spiritual principles.</p>
                    </div>
                </div>
            </div>

            <h3>Sacred Linguistic Elements</h3>
            <div class="row">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card">
                        <div class="program-content">
                            <h3 class="box-title">Jnanam Anantam (ज्ञानम् अनन्तम्)</h3>
                            <p class="box-text mb-0">A Sanskrit phrase written in Devanagari script meaning "Knowledge is
                                Infinite." This profound statement reflects our belief that learning is a lifelong journey
                                without boundaries, encouraging continuous exploration and discovery.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card">
                        <div class="program-content">
                            <h3 class="box-title">Fiat Lux</h3>
                            <p class="box-text mb-0">A Latin phrase meaning "Let there be light." Found in both the Rigveda
                                and the Book of Genesis, this divine expression symbolizes the illumination of knowledge and
                                the dispelling of ignorance through education.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card">
                        <div class="program-content">
                            <h3 class="box-title">Inveniam Viam</h3>
                            <p class="box-text mb-0">Latin for "I shall find a way," derived from the ancient verse "Aut
                                inveniam viam aut faciam" (I shall either find a way or make one). This embodies our spirit
                                of determination and innovation in overcoming challenges.</p>
                        </div>
                    </div>
                </div>
            </div>


            <h3 class="mt-4">Mystical and Cultural Symbols</h3>
            <div class="row">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Trinity Knot (Triquetra)</h3>
                            <p class="box-text mb-0">An ancient Celtic symbol representing the interconnectedness of mind,
                                body, and spirit; past, present, and future; or creation, preservation, and transformation.
                                It symbolizes the holistic approach to education at MIU.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Chinese "Lu" Symbol (禄)</h3>
                            <p class="box-text mb-0">An auspicious Chinese character resembling the Hindu Swastika,
                                representing prosperity, fortune, and wealth—not just material, but intellectual and
                                spiritual abundance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Chinese "Fu" Symbol (福)</h3>
                            <p class="box-text mb-0">A traditional Chinese character symbolizing good fortune, blessings,
                                and happiness. It represents our wish for all students to achieve fulfillment and success in
                                their endeavors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Rhinoceros Head</h3>
                            <p class="box-text mb-0">Symbolizing gentleness combined with strength, unconventional
                                thinking, peaceful yet powerful personalities, steadiness in purpose, and the agility to
                                adapt to changing circumstances.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Shankha (Sacred Conch Shell)</h3>
                            <p class="box-text mb-0">The sacred emblem of Lord Vishnu, praised in Hindu scriptures as a
                                giver of fame, longevity, and prosperity. It's also the abode of Goddess Lakshmi,
                                representing wealth of knowledge and wisdom.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="program-card mb-3">
                        <div class="program-content">
                            <h3 class="box-title">Manipura Chakra</h3>
                            <p class="box-text mb-0">The third primary chakra in Vedic tradition, associated with fire and
                                the power of transformation. It represents our commitment to transforming students through
                                the fire of knowledge and wisdom.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- programs ends --}}


    {{-- the gurdian elephants starts --}}
    <section class="community-area-2 overflow-hidden position-relative" id="community-sec">
        <div class="container th-container4">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="space">
                        <div class="title-area text-center text-xl-start">
                            <h2 class="sec-title text-anim2">The <span class="text-theme">Guardian Elephants</span></h2>
                            <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">The two elephants facing each other with
                                their trunks raised upward are profound symbols in both Buddhist and Hindu traditions. They
                                represent:</p>
                        </div>
                        <div class="community-wrap2">
                            <div class="community-card2 wow fadeInUp" data-wow-delay=".2s">
                                <div class="community-icon"><img src="assets/img/icon/communiti-3-1.svg" alt="Stadum">
                                </div>
                                <div class="card-content">
                                    <h3 class="box-title">Good Fortune </h3>
                                    <p class="box-text">Upward-facing trunks traditionally symbolize prosperity, academic
                                        success, and positive energy.</p>
                                </div>
                            </div>
                            <div class="community-card2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="community-icon"><img src="assets/img/icon/communiti-3-2.svg" alt="Stadum">
                                </div>
                                <div class="card-content">
                                    <h3 class="box-title">Wisdom & Memory </h3>
                                    <p class="box-text">Elephants are revered for their intelligence and ability to
                                        remember, symbolizing the retention and application of knowledge.</p>
                                </div>
                            </div>
                            <div class="community-card2 wow fadeInUp" data-wow-delay=".6s">
                                <div class="community-icon"><img src="{{ asset('/new-miu/icons/1.png') }}" width="40" alt="Stadum">
                                </div>
                                <div class="card-content">
                                    <h3 class="box-title">Strength & Protection </h3>
                                    <p class="box-text">As guardians of the Dharma Chakra, they protect the sacred
                                        knowledge and traditions of our institution.</p>
                                </div>
                            </div>
                            <div class="community-card2 wow fadeInUp" data-wow-delay=".8s">
                                <div class="community-icon"><img src="{{ asset('/new-miu/icons/2.png') }}" width="40" alt="Stadum">
                                </div>
                                <div class="card-content">
                                    <h3 class="box-title">Leadership </h3>
                                    <p class="box-text">Elephants naturally lead their herds with wisdom and compassion,
                                        qualities we instill in our graduates.</p>
                                </div>
                            </div>
                            <div class="community-card2 wow fadeInUp" data-wow-delay=".6s">
                                <div class="community-icon"><img src="{{ asset('/new-miu/icons/3.png') }}" width="40" alt="Stadum">
                                </div>
                                <div class="card-content">
                                    <h3 class="box-title">Fertility of Mind </h3>
                                    <p class="box-text">Representing the fertile ground of education where ideas grow and
                                        flourish.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-12">
                    <div class="space py-2">
                        <div class="title-area text-center text-xl-start">
                            <h2 class="sec-title text-anim2">The <span class="text-theme">Eternal Wheel</span></h2>
                            <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">The outer Dharma Chakra represents the continuous cycle of learning, growth, and progress. Its 24 spokes symbolize the 24 hours of dedicated learning and the continuous journey of academic and spiritual development that never ceases.</p>
                        </div>

                        <div class="title-area text-center text-xl-start">
                            <h2 class="sec-title text-anim2"><span class="text-theme">Linguistic Heritage</span></h2>
                            <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">The two banners below the central shield carry the name "Manipur International University" in both Meitei Mayek (the ancient Manipuri script) and English, representing our commitment to preserving local heritage while embracing global communication. This logo graces all our certificates, official stationery, commemorative items, and the exteriors of all university buildings, serving as a constant reminder of our values and mission.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="community-shape1 shape-mockup jump d-none d-xxl-block" data-left="0%" data-bottom="0%"><img
                src="assets/img/shape/communiti-3-1.png" alt="Stadum"></div>
    </section>
    {{-- the gurdian elephants ends --}}


@endsection
