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
            background: var(--theme-color);
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

        .text-custom {
            text-align: justify;
        }
    </style>
@endsection
@section('content')




    <div class="breadcumb-wrapper position-relative" data-bg-src="{{ asset('/assets/img/shape/breadcrumb-shep.png') }}">
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

    <div class="about1-area position-relative overflow-hidden space pb-0" id="about-sec">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="{{ asset('/assets/img/shape/feature-shep-2-home-1.png') }}" alt="shape"></div>

        <div class="container th-container4">
            <div class="about-wrap1 position-relative z-index-2 mb-5">
                <div class="row gy-60 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="about-content ms-xxl-4 pe-xxl-2 me-xl-2">
                            <div class="title-area mb-3"><span class="sub-title text-anim">About Us</span>
                                <h2 class="sec-title text-anim2 pe-xl-5 me-xl-5">Manipur International University — Rooted
                                    in Heritage, Rising with Purpose</h2>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    Manipur International University (MIU) is a growing center of higher education in India,
                                    focused on providing quality learning and real career opportunities. The university was
                                    established with a clear aim—to help students build strong knowledge, practical skills,
                                    and confidence for their future.
                                </p>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    As a UGC approved university, MIU offers a wide range of undergraduate, postgraduate,
                                    diploma, and doctoral programs in different fields. The courses are designed to be easy
                                    to understand and useful in real life, helping students prepare for today’s job market.
                                </p>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    At MIU, learning goes beyond classrooms. Students get opportunities to take part in
                                    practical training, workshops, and industry exposure. The university provides a
                                    supportive environment where students can learn, grow, and explore their interests.
                                </p>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    With experienced faculty and modern facilities, MIU focuses on overall student
                                    development. The university also supports students with career guidance and placement
                                    assistance to help them start their professional journey.
                                    MIU continues to work towards becoming one of the best private universities in India by
                                    helping students achieve their goals and build successful careers.

                                </p>
                            </div>


                            {{-- <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s"><a href="/contact"
                                    class="th-btn th-icon">Learn More</a></div> --}}
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="">
                            <div class="">
                                <div class=""><img src="{{ asset('/new-miu/banner/banner2.jpeg') }}" alt="Stadum">
                                </div>
                                {{-- <div class=""><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="Stadum">
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12">
                        <h3 class="text-center mb-5">Our Prestigious Recognitions </h3>
                        <div class="about-feature-wrapp row justify-content-center" style="max-width:100%">
                            <div class="about-feature wow fadeInUp col-12 col-sm-12 col-md-12 col-lg-4 col-xxl-4"
                                data-wow-delay=".3s"><span class="box-icon"><img
                                        src="{{ asset('/assets/img/icon/ab-users.svg') }}" alt="icon"></span>
                                <div class="box-content">
                                    <h3 class="box-title">Academic Excellence Recognition</h3>
                                    <p class="box-text">As a NAAC accredited university in Manipur, MIU is awarded for
                                        consistently delivering high-quality education that meets national benchmarks,
                                        placing it among Northeast India's most recognized universities.</p>
                                </div>
                            </div>
                            <div class="about-feature wow fadeInUp col-12 col-sm-12 col-md-12 col-lg-4 col-xxl-4"
                                data-wow-delay=".4s"><span class="box-icon"><img
                                        src="{{ asset('/assets/img/icon/ab-message.svg') }}" alt="icon"></span>
                                <div class="box-content">
                                    <h3 class="box-title">Cultural Heritage Leadership</h3>
                                    <p class="box-text">MIU's rankings and awards include national recognition for
                                        championing the preservation and academic study of Manipur's indigenous
                                        languages, traditions, and cultural identity within a modern university
                                        framework.</p>
                                </div>
                            </div>
                            <div class="about-feature wow fadeInUp col-12 col-sm-12 col-md-12 col-lg-4 col-xxl-4"
                                data-wow-delay=".4s"><span class="box-icon"><img
                                        src="{{ asset('/assets/img/icon/library.svg') }}" alt="icon"></span>
                                <div class="box-content">
                                    <h3 class="box-title">Research & Regional Development</h3>
                                    <p class="box-text">Honored as a leading recognized university in Northeast India
                                        for impactful research initiatives that address real challenges facing the
                                        region, driving sustainable development and community empowerment.</p>
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
                        <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-1.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">500</span>+</h3>
                            <p class="box-text">Recruiters</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-2.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">1000</span>+</h3>
                            <p class="box-text">Year Established</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                        <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-3.svg') }}"alt="icon">
                        </div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">95</span>%</h3>
                            <p class="box-text">Placements</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                        <div class="box-icon"><img src="{{ asset('/assets/img/icon/counter-icon1-4.svg') }}"
                                alt="icon"></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                            <p class="box-text">Industry Tie-Ups</p>
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
                        <p class="text-center">Manipur has always been a land of extraordinary stories. MIU is one such
                            story — and understanding the history and founding of Manipur International University is to
                            understand the ambition of an entire region. Born from a conviction that the Northeast deserved
                            a university established in Manipur worthy of its people, our journey is bold, culturally
                            rooted, and built for the future. Here is how it all began.</p>
                    </div>
                </div>


                <div class="timeline">

                    <!-- Card 1 -->
                    <div class="timeline-item left">
                        <div class="card p-3">
                            <h6 class="text-primary">June 26, 2018</h6>
                            <h5>A Vision for the Northeast</h5>
                            <p class="text-custom">
                                The idea for MIU came from a simple but urgent question: why should talented young people
                                from Manipur have to leave to access quality education? Educators and community leaders
                                united around Northeast India's education history of neglect — and decided to change it.
                                That conviction became the foundation on which Manipur International University was
                                established.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="timeline-item right">
                        <div class="card p-3">
                            <h6 class="text-primary">July 23, 2018</h6>
                            <h5>Breaking Ground</h5>
                            <p class="text-custom">With official recognition secured, MIU moved from vision to reality. The
                                campus was designed
                                as a symbol — that a university in Manipur could be built to command national and
                                international respect, standing proudly as part of the history of higher education in
                                Northeast India.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="timeline-item left">
                        <div class="card p-3">
                            <h6 class="text-primary">December 21, 2018</h6>
                            <h5>First Students, First Steps</h5>
                            <p class="text-custom">The first batch arrived carrying the hopes of a region. They came from
                                across Manipur and
                                neighbouring states — searching for the best college in Imphal and finding something
                                greater: a community, a mission, and a university in Northeast India that believed in them.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="timeline-item right">
                        <div class="card p-3">
                            <h6 class="text-primary">January 23, 2019</h6>
                            <h5>Growing and Expanding</h5>
                            <p class="text-custom">New schools opened. Research centres took shape. MIU's ranking and
                                awards grew as
                                partnerships with national and international institutions extended reach far beyond Manipur.
                                Students graduated and built careers across industries — proving that this recognised
                                university in Northeast India had always been the right bet.
                            </p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="timeline-item left">
                        <div class="card p-3">
                            <h6 class="text-primary">February 14, 2019</h6>
                            <h5>MIU Today</h5>
                            <p class="text-custom">Today, Manipur International University is a name that carries weight —
                                in Imphal, across
                                Northeast India, and beyond. Thousands of alumni. Dozens of programs. And MIU admissions
                                2025 continuing to welcome the next generation of students who dare to dream big from the
                                Northeast.</p>
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
                            <h2 class="sec-title text-anim2 mb-3" data-cue="slideInUp">The Sacred Symbolism of Our Logo
                            </h2>
                            <p>The logo of Manipur International University is a powerful representation of knowledge,
                                ambition, and future success. It reflects our commitment to delivering quality education and
                                shaping career-ready professionals. Every element is thoughtfully designed to inspire
                                confidence, growth, and a strong academic foundation for students aiming to excel in today’s
                                competitive world.</p>
                            <p>The visual identity symbolizes strength, clarity, and continuous progress. It represents the
                                journey of students—from learning to achievement—guided by expert faculty and
                                industry-focused education. The logo stands as a mark of trust, excellence, and opportunity,
                                reinforcing MIU’s position as a leading choice for higher education in India.
                            </p>
                            <p>Blending tradition with modern education values, the logo highlights MIU’s vision of creating
                                skilled, confident, and future-ready individuals. It reflects innovation, adaptability, and
                                global career readiness, making it more than just a symbol—it represents a promise of
                                success, growth, and lifelong learning.</p>
                        </div>
                    </div>
                </div>

                <h3>Sacred Linguistic Elements</h3>
                <div class="row">
                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card">
                            <div class="program-content">
                                <h3 class="box-title">Jnanam Anantam (ज्ञानम् अनन्तम्)</h3>
                                <p class="box-text mb-0">The linguistic foundation of MIU reflects clarity, purpose, and
                                    the power of communication in education. It symbolizes how knowledge is shared,
                                    understood, and applied, helping students build strong academic roots and succeed in
                                    competitive career environments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card">
                            <div class="program-content">
                                <h3 class="box-title">Fiat Lux</h3>
                                <p class="box-text mb-0">These elements represent the connection between tradition and
                                    modern learning, highlighting the importance of values alongside professional growth.
                                    MIU ensures students develop both intellectual strength and practical understanding for
                                    real-world success.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card">
                            <div class="program-content">
                                <h3 class="box-title">Inveniam Viam</h3>
                                <p class="box-text mb-0">Language at MIU is more than communication—it is a tool for
                                    transformation. It empowers students to express ideas, innovate confidently, and engage
                                    effectively in global academic and professional spaces.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <h3 class="mt-4">Mystical & Cultural Symbols </h3>
                <div class="row">
                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">Lai Haraoba</h3>
                                <p class="box-text mb-0">Lai Haraoba, Manipur's most sacred festival, is a living
                                    reenactment of creation itself. Its rituals encode an entire cosmology that defines
                                    Manipur's culture and heritage. At MIU, this spirit of sacred performance informs our
                                    approach to learning — knowledge enacted, not merely studied.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">The Sangai</h3>
                                <p class="box-text mb-0">The Sangai deer of Manipur — the state's endangered dancing deer —
                                    is a symbol of rare beauty, resilience, and ecological harmony. As MIU's symbolic
                                    spirit, the Sangai reminds us that the most precious things in Manipur's cultural
                                    heritage require care, protection, and a community committed to their survival.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">Loktak Lake</h3>
                                <p class="box-text mb-0">Loktak, the largest freshwater lake in Northeast India, is sacred
                                    to Manipur's people and central to its ecology — a defining element of Manipur's culture
                                    and heritage. MIU draws from this symbol: an institution that runs deep, nourishes its
                                    community, and endures across generations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">Manipuri Classical Dance</h3>
                                <p class="box-text mb-0">Manipuri classical dance is among India's eight classical dance
                                    forms — a language of devotion, storytelling, and extraordinary grace that stands at the
                                    heart of Manipur's cultural heritage. At MIU, this art is honoured as a living
                                    intellectual and cultural practice, deeply connected to Meitei language and culture.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">Kangla Fort</h3>
                                <p class="box-text mb-0">Kangla Fort has stood as the spiritual heartbeat of the Meitei
                                    civilization for centuries. Its significance in Manipur's culture and heritage
                                    represents sovereignty, identity, and the enduring pride of a people. MIU inherits that
                                    pride in every program it builds and every student it graduates.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 d-flex align-items-stretch">
                        <div class="program-card mb-3">
                            <div class="program-content">
                                <h3 class="box-title">Thang-Ta</h3>
                                <p class="box-text mb-0">Thang-Ta, Manipur's ancient martial art, is a philosophy as much
                                    as a fighting style — a cornerstone of Manipur's cultural heritage and Meitei culture.
                                    It represents focused strength and mental clarity: the precise qualities MIU develops in
                                    every student through academic rigor and purposeful learning.</p>
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
                                <h2 class="sec-title text-anim2">The <span class="text-theme">Guardian Elephants</span>
                                </h2>
                                <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">In Manipuri tradition, elephant
                                    symbolism carries the weight of regal wisdom, strength, and auspicious blessing. The
                                    twin Guardian Elephants within the MIU university emblem do not merely decorate — they
                                    stand watch over every student's journey, embodying the university's promise to protect,
                                    empower, and guide.</p>
                            </div>
                            <div class="community-wrap2">
                                <div class="community-card2 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="community-icon"><img
                                            src="{{ asset('/assets/img/icon/communiti-3-1.svg') }}" alt="Stadum">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="box-title">Wisdom</h3>
                                        <p class="box-text">The elephant symbolism of Manipur carries the wisdom of ages.
                                            MIU carries the same — in every program, every faculty member, every lesson
                                            taught.</p>
                                    </div>
                                </div>
                                <div class="community-card2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="community-icon"><img
                                            src="{{ asset('/assets/img/icon/communiti-3-2.svg') }}" alt="Stadum">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="box-title">Strength</h3>
                                        <p class="box-text">Strength is purpose sustained. The MIU university emblem's
                                            Guardian Elephants remind every student: true power comes from knowledge,
                                            character, and conviction.</p>
                                    </div>
                                </div>
                                <div class="community-card2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="community-icon"><img src="{{ asset('/new-miu/icons/1.png') }}"
                                            width="40" alt="Stadum">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="box-title">Auspicious Beginnings</h3>
                                        <p class="box-text">Every MIU admission begins under the blessing of the Guardian
                                            Elephants — a sacred send-off into a life of achievement, rooted in Manipur's
                                            cultural heritage.</p>
                                    </div>
                                </div>
                                <div class="community-card2 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="community-icon"><img src="{{ asset('/new-miu/icons/2.png') }}"
                                            width="40" alt="Stadum">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="box-title">Protection </h3>
                                        <p class="box-text">The Manipur university symbol stands guard over your academic
                                            growth and your right to a world-class education — no matter where in Northeast
                                            India you come from.</p>
                                    </div>
                                </div>
                                <div class="community-card2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="community-icon"><img src="{{ asset('/new-miu/icons/3.png') }}"
                                            width="40" alt="Stadum">
                                    </div>
                                    <div class="card-content">
                                        <h3 class="box-title">Legacy</h3>
                                        <p class="box-text">The Guardian Elephants carry generations. Manipur International
                                            University carries your future — and the legacy of every Northeast Indian
                                            student who dared to dream big.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="space py-2">
                            <div class="title-area text-center text-xl-start">
                                <h2 class="sec-title text-anim2">The <span class="text-theme">Eternal Wheel
                                        Heritage</span></h2>
                                <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">TThe Eternal Wheel at the centre of the
                                    MIU university emblem represents the unending cycle of knowledge — a philosophy rooted
                                    in Meitei cultural heritage and the timeless pursuit of truth. It is a reminder that
                                    education at this university in Manipur is not a destination. It is a lifelong
                                    revolution.</p>
                            </div>

                            <div class="title-area text-center text-xl-start">
                                <h2 class="sec-title text-anim2"><span class="text-theme">Linguistic</span></h2>
                                <p class="mt-2 wow fadeInUp" data-wow-delay=".3s">Manipur's linguistic heritage is one of
                                    the richest in the Indian subcontinent — from Meitei Mayek to the diverse tongues of its
                                    many communities. MIU honours this plurality through Northeast India's multilingual
                                    education tradition. Here, Meitei language and culture is not just communication — it is
                                    civilisation, memory, and the living proof that the Northeast has always had a story
                                    worth telling.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="community-shape1 shape-mockup jump d-none d-xxl-block" data-left="0%" data-bottom="0%"><img
                    src="{{asset('/assets/img/shape/communiti-3-1.png" alt="Stadum"></div> --}}
        </section>
        {{-- the gurdian elephants ends --}}
    </div>

@endsection
