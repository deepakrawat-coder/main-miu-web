@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
    <style>
        .custom_apply {
            background-color: transparent;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .custom_apply:hover {
            background-color: var(--title-color);
            color: white !important;
        }

        /* ========================================
                                                                       PERFECT STACKED CARDS SLIDER
                                                                       Height: 800px | Bottom se start | Scroll controlled
                                                                       STRICT SCROLL LOCK - Until all slides complete
                                                                    ======================================== */
        .stack-slider-section {
            position: relative;
            /* background: linear-gradient(135deg, #f5f7fa 0%, #fff 100%); */
            background: black;
            height: 800px;
            overflow: hidden;
        }

        /* Body scroll lock when slider is active */
        body.slider-active {
            overflow: hidden;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        /* Restore body scroll after completion */
        body.slider-complete {
            overflow: auto;
            position: relative;
        }

        .stack-wrapper {
            position: relative;
            height: 100%;
            width: 100%;
        }

        .stack-sticky {
            position: relative;
            width: 100%;
            height: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stack-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Cards Stack Container */
        .cards-stack {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Individual Card - Bottom se start */
        .stack-card {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(100px) scale(0.9);
        }

        /* Active Card - Top par visible */
        .stack-card.active {
            position: relative;
            bottom: auto;
            top: 0;
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
            z-index: 10;
            box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.3);
        }

        /* Previous Card - Neeche stack mein */
        .stack-card.prev {
            position: absolute;
            bottom: -20px;
            opacity: 0.6;
            visibility: visible;
            transform: scale(0.95);
            z-index: 5;
        }

        /* Next Card - Aur neeche */
        .stack-card.next {
            position: absolute;
            bottom: -50px;
            opacity: 0.3;
            visibility: visible;
            transform: scale(0.9);
            z-index: 3;
        }

        /* Hidden Cards - Sabse neeche */
        .stack-card.hidden {
            opacity: 0;
            visibility: hidden;
            transform: translateY(100px) scale(0.85);
        }

        /* Card Inner Content */
        .card-inner {
            display: flex;
            flex-wrap: wrap;
        }

        .card-left {
            flex: 1.2;
            padding: 40px 35px;
            background: #fff;
        }

        .card-right {
            flex: 1;
            min-height: 320px;
            background: #eef2f6;
            overflow: hidden;
        }

        .card-right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .stack-card:hover .card-right img {
            transform: scale(1.03);
        }

        /* Typography */
        .card-badge {
            display: inline-block;
            /* background: linear-gradient(135deg, #f37021, #ff6b35); */
            color: gray;
            font-size: 14px;
            font-size: 0.65rem;
            font-weight: 700;
            letter-spacing: 2px;
            padding: 5px 12px;
            border-radius: 30px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .card-title {
            font-size: 1.6rem;
            font-weight: 800;
            color: #0a2540;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .card-text {
            font-size: 0.9rem;
            color: #5a6e7c;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .card-counter {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 600;
            /* color: #f37021;
                                                                background: rgba(243, 112, 33, 0.1); */
            color: #d3224d;
            background: #d3224d26;
            padding: 4px 12px;
            border-radius: 30px;
        }

        /* Progress Indicator */
        .progress-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            text-align: center;
        }

        .progress-bar-bg {
            width: 100%;
            height: 3px;
            background: #e2e8f0;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 6px;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #f37021, #ff8c42);
            width: 0%;
            transition: width 0.3s ease;
        }

        .progress-text {
            font-size: 0.7rem;
            color: #94a3b8;
            letter-spacing: 1px;
        }

        .progress-text span {
            color: #f37021;
            font-weight: 600;
        }

        /* Scroll Hint */
        .scroll-hint {
            text-align: center;
            margin-top: 15px;
        }

        .scroll-hint .mouse {
            width: 22px;
            height: 35px;
            border: 2px solid #cbd5e1;
            border-radius: 20px;
            margin: 0 auto 5px;
            position: relative;
        }

        .scroll-hint .mouse::before {
            content: '';
            position: absolute;
            top: 6px;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 6px;
            background: #f37021;
            border-radius: 2px;
            animation: mouseScroll 1.5s infinite;
        }

        @keyframes mouseScroll {
            0% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }

            80% {
                opacity: 0;
                transform: translateX(-50%) translateY(10px);
            }

            100% {
                opacity: 0;
                transform: translateX(-50%) translateY(10px);
            }
        }

        .scroll-hint span {
            font-size: 0.6rem;
            color: #94a3b8;
        }

        /* Completion Message */
        .completion-message {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #10b981;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            opacity: 0;
            transform: translateX(100px);
            transition: all 0.3s ease;
            z-index: 1000;
            pointer-events: none;
        }

        .completion-message.show {
            opacity: 1;
            transform: translateX(0);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .stack-slider-section {
                height: 700px;
            }

            .card-title {
                font-size: 1.4rem;
            }

            .card-left {
                padding: 30px;
            }

            .card-right {
                min-height: 280px;
            }

            .cards-stack {
                height: 450px;
            }
        }

        @media (max-width: 768px) {
            .stack-slider-section {
                height: 600px;
            }

            .card-inner {
                flex-direction: column;
            }

            .card-left {
                padding: 25px;
                order: 1;
            }

            .card-right {
                min-height: 180px;
                order: 0;
            }

            .card-title {
                font-size: 1.2rem;
            }

            .card-text {
                font-size: 0.8rem;
            }

            .cards-stack {
                height: 400px;
            }
        }

        //end sliderstyle
        /* Placement Section Styles
                                                    .placement-section {
                                                        background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
                                                    }

                                                    /* Stats Cards */
        .placement-stats-card {
            background: white;
            padding: 30px 20px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 1px solid #eef2f6;
        }

        .placement-stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #f37021;
        }

        .stats-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto;
            background: linear-gradient(135deg, #d3224d, #ff8c42);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stats-icon i {
            font-size: 32px;
            color: white;
        }

        .stats-number {
            font-size: 36px;
            font-weight: 800;
            color: #0a2540;
            margin-bottom: 10px;
        }

        .stats-text {
            font-size: 14px;
            color: #5a6e7c;
            font-weight: 500;
            margin: 0;
        }

        /* Recruiter Cards */
        .recruiter-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            /* text-align: center; */
            transition: all 0.3s ease;
            border: 1px solid #eef2f6;
            cursor: pointer;
            min-height: 92px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .recruiter-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-color: #f37021;
        }

        .recruiter-card img {
            max-height: 50px;
            width: auto;
            filter: grayscale(0%);
            transition: all 0.3s ease;
        }

        .recruiter-card:hover img {
            filter: grayscale(0%);
        }

        /* Process Cards */
        .process-card {
            background: white;
            padding: 30px 20px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .process-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            /* background: linear-gradient(90deg, #f37021, #ff8c42); */
            background: linear-gradient(90deg, var(--theme-color), var(--theme-color));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .process-card:hover::before {
            transform: scaleX(1);
        }

        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .process-icon {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .process-icon span {
            position: absolute;
            top: -10px;
            right: -15px;
            background: var(--theme-color);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .process-icon i {
            font-size: 48px;
            color: var(--title-color);
        }

        .process-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #0a2540;
            margin-bottom: 10px;
        }

        .process-card p {
            font-size: 14px;
            color: #5a6e7c;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .stats-number {
                font-size: 28px;
            }

            .placement-stats-card {
                padding: 20px 15px;
            }

            .stats-icon {
                width: 60px;
                height: 60px;
            }

            .stats-icon i {
                font-size: 28px;
            }
        }

        @media (max-width: 768px) {
            .process-card {
                padding: 20px 15px;
            }

            .process-icon i {
                font-size: 36px;
            }

            .recruiter-card {
                padding: 15px;
            }

            .recruiter-card img {
                max-height: 40px;
            }
        }

        @media (max-width: 576px) {
            .stats-number {
                font-size: 24px;
            }

            .placement-stats-card {
                padding: 15px 10px;
            }

            .stats-text {
                font-size: 12px;
            }

            .process-card h4 {
                font-size: 16px;
            }

            .process-card p {
                font-size: 12px;
            }
        }

        /* Animation for stats */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .placement-stats-card {
            animation: countUp 0.6s ease forwards;
        }

        .placement-stats-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .placement-stats-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .placement-stats-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .placement-stats-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        //apply form styling
        .hero-university {
            background: linear-gradient(135deg, #0B2B40 0%, #0A1C2A 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero-university::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -5%;
            width: 60%;
            height: 120%;
            background: radial-gradient(circle, rgba(255, 255, 200, 0.03) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-university::after {
            content: '';
            position: absolute;
            bottom: -15%;
            left: -5%;
            width: 50%;
            height: 80%;
            background: radial-gradient(circle, rgba(0, 200, 220, 0.05) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-container {
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        /* LEFT CONTENT */
        .hero-left {
            flex: 1.2;
            min-width: 280px;
            color: white;
        }

        .uni-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 215, 120, 0.15);
            backdrop-filter: blur(4px);
            padding: 0.5rem 1.2rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 215, 120, 0.4);
            color: #FFDF8C;
        }

        .hero-left h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.2rem;
            letter-spacing: -0.02em;
            background: linear-gradient(135deg, #FFFFFF, #B8E1FC);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-left p {
            font-size: 1.05rem;
            color: #CBD5E1;
            margin-bottom: 2rem;
            line-height: 1.5;
            max-width: 500px;
        }

        .stats {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        .stat-item h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #FFDF8C;
        }

        .stat-item p {
            font-size: 0.8rem;
            color: #94A3B8;
            margin-bottom: 0;
        }

        /* RIGHT SIDE - FORM */
        .hero-right {
            flex: 0.9;
            min-width: 320px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 2rem;
            padding: 2rem 1.8rem;
            box-shadow: 0 30px 50px -20px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(2px);
            transition: transform 0.2s ease;
        }

        .hero-right:hover {
            transform: translateY(-5px);
        }

        .form-header {
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .form-header h3 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #0B2B40;
            margin-bottom: 0.3rem;
        }

        .form-header p {
            font-size: 0.85rem;
            color: #5B6E8C;
        }

        .form-group {
            margin-bottom: 1.2rem;
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .form-group label {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            /* color: #2C3E50; */
            color: var(--title-color);

            display: flex;
            align-items: center;
            gap: 0px;
        }

        .form-group label i {
            color: var(--title-color);
            width: 18px;
        }

        .required-star {
            color: #e53e3e;
            font-size: 0.8rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1.5px solid #E2E8F0;
            border-radius: 1rem;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            transition: all 0.2s;
            outline: none;
            background: #FEFEFE;
        }

        .form-group input:focus {
            border-color: #0B5E7E;
            box-shadow: 0 0 0 3px rgba(11, 94, 126, 0.15);
        }

        /* row for city & state */
        .row-2col {
            display: flex;
            gap: 1rem;
        }

        .row-2col .form-group {
            flex: 1;
        }

        .btn-submit {
            width: 100%;
            /* background: linear-gradient(95deg, #0B2B40, #1A4A6F); */
            background: linear-gradient(95deg, #d3224d, #081933);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 3rem;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 0.5rem;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
        }

        .btn-submit:hover {
            background: linear-gradient(95deg, #1A4A6F, #0B2B40);
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.15);
        }

        .success-message {
            margin-top: 1rem;
            padding: 0.8rem;
            background: #E6F7EC;
            border-radius: 1rem;
            color: #2C7A4B;
            font-size: 0.85rem;
            text-align: center;
            display: none;
            border-left: 4px solid #2C7A4B;
        }

        .error-message {
            margin-top: 1rem;
            padding: 0.8rem;
            background: #FEF2F0;
            border-radius: 1rem;
            color: #C53030;
            font-size: 0.85rem;
            text-align: center;
            display: none;
            border-left: 4px solid #C53030;
        }

        @media (max-width: 850px) {
            .hero-left h1 {
                font-size: 2.4rem;
            }

            .hero-container {
                flex-direction: column;
            }

            .hero-right {
                width: 100%;
            }
        }

        input:invalid {
            border-color: #E2E8F0;
        }

        .enquiry-fixed-form {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 99;
            width: 600px;
        }

        @media (max-width: 992px) {
            .enquiry-fixed-form {
                position: relative;
                right: auto;
                top: auto;
                transform: none;
                width: 100%;
                padding: 20px;
                margin-top: -30px;
            }
        }
    </style>
@endsection
@section('content')
    {{-- <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider" id="heroSlide" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner2.jpeg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Shape Your Future at MIU</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">We
                                               Join a globally recognized university with 50+ innovative programs designed for tomorrow's leaders</p>
                                            <div class="btn-wrap justify-content-center justify-content-lg-start"
                                                data-ani="slideinup" data-ani-delay="0.8s"><a href="contact.html"
                                                    class="th-btn white-hover th-icon">Admission Now</a> <a
                                                    href="program.html"
                                                    class="th-btn style-border1 th-icon white-hover">View Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-4 col-lg-3 d-flex justify-content-end">

                                    <div class="bg-white p-4 rounded-3 shadow-lg w-50">

                                        @include('web.parts.enquery-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner3.png') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                               World-Class Education, Global Opportunities</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">We
                                               200+ international partnerships, 92% placement rate, and scholarships up to 100% for deserving students</p>
                                            <div class="btn-wrap justify-content-center justify-content-lg-start"
                                                data-ani="slideinup" data-ani-delay="0.8s"><a href="contact.html"
                                                    class="th-btn white-hover th-icon">Admission Now</a> <a
                                                    href="program.html"
                                                    class="th-btn style-border1 th-icon white-hover">View Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-4 col-lg-3 d-flex justify-content-end">

                                    <div class="bg-white p-4 rounded-3 shadow-lg w-50">

                                        @include('web.parts.enquery-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner1.png') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Your Journey to Excellence Begins Here</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">State-of-the-art campus, expert faculty, and vibrant student community — apply now for the upcoming semester.</p>
                                            <div class="btn-wrap justify-content-center justify-content-lg-start"
                                                data-ani="slideinup" data-ani-delay="0.8s"><a href="contact.html"
                                                    class="th-btn white-hover th-icon">Admission Now</a> <a
                                                    href="program.html"
                                                    class="th-btn style-border1 th-icon white-hover">View Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-4 col-lg-3 d-flex justify-content-end">

                                    <div class="bg-white p-4 rounded-3 shadow-lg w-50">

                                        @include('web.parts.enquery-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="slider-pagination"></div>
        </div>
    </div> --}}
    <div class="th-hero-wrapper hero-1" id="hero" style="position: relative;">
        <div class="swiper th-slider" id="heroSlide" data-slider-options='{"effect":"fade"}' style="height:800px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner2.jpeg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Shape Your Future at MIU</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Join
                                                a globally recognized university with 50+ innovative programs designed for
                                                tomorrow's leaders</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="program.html" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner3.png') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                World-Class Education, Global Opportunities</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">200+
                                                international partnerships, 92% placement rate, and scholarships up to 100%
                                                for deserving students</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="program.html" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/banner1.png') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Your Journey to Excellence Begins Here</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                                State-of-the-art campus, expert faculty, and vibrant student community —
                                                apply now for the upcoming semester.</p>
                                            <div class="btn-wrap" data-ani="slideinup" data-ani-delay="0.8s">
                                                <a href="contact.html" class="th-btn white-hover th-icon">Admission Now</a>
                                                <a href="program.html" class="th-btn style-border1 th-icon white-hover">View
                                                    Program</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-pagination"></div>
        </div>

        <!-- 🔥 SIRF EK BAAR FORM - POSITION FIXED 🔥 -->
        <div class="enquiry-fixed-form">
            <div class="bg-white p-4 rounded-3 shadow-lg">
                @include('web.parts.enquery-form')
            </div>
        </div>
    </div>


    <div class="feature-sec-1 position-relative overflow-hidden space-bottom">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-top="19%" data-left="0%">
            <img src="assets/img/shape/feature-shep-home-1.png" alt="shape">
        </div>
        <div class="container th-container2">
            <div class="row gx-10 gy-10">
                <div class="col-xl-3 col-md-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-icon">
                            <i class="fas fa-graduation-cap text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Global Recognition</h3>
                        <p class="box-text style2">Internationally accredited degrees recognized worldwide.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-icon">
                            <i class="fas fa-globe-americas text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">International Standards</h3>
                        <p class="box-text style2">Global curriculum with international faculty and diverse student
                            community.</p>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".6s">
                        <div class="box-icon">
                            <i class="fas fa-trophy text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Award Winning Programs</h3>
                        <p class="box-text style2">Recognized for excellence in education and research innovation.</p>

                    </div>
                </div>

                <!-- ✅ 4th Card - Font Awesome 6.0 Icons -->
                <div class="col-xl-3 col-md-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".8s">
                        <div class="box-icon">
                            <i class="fas fa-users text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Diverse Community</h3>
                        <p class="box-text style2">Students from 50+ countries creating a global learning environment.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about1-area position-relative overflow-hidden space-bottom" id="about-sec">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="assets/img/shape/feature-shep-2-home-1.png" alt="shape"></div>
        <div class="container">
            <div class="about-wrap1 position-relative z-index-2">
                <div class="row gy-60 align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="img-box1">
                            <div class="img1 text-center text-sm-start wow fadeInLeft" data-wow-delay=".2s"><img
                                    src="assets/img/about/home-1-about-thumb1-1.jpg" alt="About"></div>
                            <div class="img2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="position-relative"><img class="mb-25"
                                        src="assets/img/about/home-1-about-thumb1-2.jpg" alt="About"></div>
                                <div class="position-relative wow fadeInUp" data-wow-delay=".3s"><img
                                        src="assets/img/about/home-1-about-thumb1-3.jpg" alt="About"></div>
                            </div>
                            <div class="about-wrapp">
                                <div class="discount-wrapp">
                                    <div class="logo"><img src="{{ asset('/new-miu/miu-white.png') }}" alt="img"
                                            width="60" height="60"></div>
                                    <div class="discount-tag"><span class="discount-anime">* 2019 EST * UGC Approved Since
                                            2019</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">

                        <div class="about-content ms-xxl-4 ps-xxl-2 ms-xl-2">
                            <div class="title-area">
                                <span class="sub-title text-anim mt-2">About The Manipur International University</span>
                                <h2 class="sec-title text-anim2">We Offer best program for Shaping the best Future</h2>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    The Manipur International University (MIU) is an Autonomous Statutory International
                                    University established,
                                    recognized, and institutionally accredited by the State Government of Manipur. The
                                    university operates
                                    under the Manipur International University Act, 2018 (Manipur Act No. 2 of 2019), which
                                    was approved by
                                    Her Excellency the Governor of Manipur on 23rd January 2019.
                                </p>
                            </div>
                            <div class="about-feature-box">
                                <div class="about-feature wow fadeInUp" data-wow-delay=".3s">
                                    <span class="box-icon"><img src="assets/img/icon/ab-users.svg" alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">UGC Approved University</h3>
                                        <p class="box-text">
                                            MIU is duly approved and listed by the University Grants Commission (UGC),
                                            Ministry of Education,
                                            Government of India under section 2(f) of UGC Act, 1956 as a State Private
                                            University.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature wow fadeInUp" data-wow-delay=".4s">
                                    <span class="box-icon"><img src="assets/img/icon/ab-message.svg"
                                            alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Globally Recognized Degrees</h3>
                                        <p class="box-text">
                                            The university is empowered to award degrees under section 22 of the UGC Act,
                                            1956, ensuring that
                                            all degrees conferred by MIU hold national recognition and validity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap wow fadeInUp" data-wow-delay=".5s">
                                <a href="about.html" class="th-btn th-icon">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-area1 overflow-hidden">
        <div class="container th-container2">
            <div class="counter-wrap1">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-1.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">2019</span></h3>
                        <p class="box-text">Year of Establishment</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-2.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">50</span>+</h3>
                        <p class="box-text">Academic Programs</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-3.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">1000</span>+</h3>
                        <p class="box-text">Students Enrolled</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <div class="box-icon"><img src="assets/img/icon/counter-icon1-4.svg" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">20</span>+</h3>
                        <p class="box-text">International Collaborations</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
    <section class="academic1-area space overflow-hidden" id="program-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-9 col-12">
                    <div class="title-area text-center text-lg-start mb-75"><span
                            class="sub-title text-anim">ACADEMICS</span>
                        <h2 class="sec-title text-anim2">Schools & Faculties</h2>
                        <p>Our Schools and Faculties bring together experienced academicians and subject experts dedicated
                            to excellence in teaching and research. Each department is designed to foster specialized
                            knowledge, critical thinking, and academic innovation.</p>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="program.html"
                            class="th-btn style-border1 th-icon">Explore All</a></div>
                </div>
            </div>
            {{-- <div class="academic-wrapp">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow" id="academicSlider2"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"3", "spaceBetween": "24"}},"autoHeight": "true", "autoplay" : "false"}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden;">
                                    <div class="academic-img mb-0"><a href="program-details.html"><img
                                                src="assets/img/academic/academic1-1.jpg" alt="blog image"></a>

                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <div class="academic-review mb-1"><span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span> <span><i
                                                    class="fa-solid fa-star"></i></span> <span><i
                                                    class="fa-solid fa-star"></i></span> <span><i
                                                    class="fa-solid fa-star"></i></span>
                                            <p class="review-text">(4.8)</p>
                                        </div>
                                        <h3 class="box-title"><a href="program-details.html">Bachelor in Applied
                                                Mathematics</a></h3>

                                        <p class="box-text style2 my-2" style="line-height: normal;">Every traditional
                                            undergraduate student receives
                                            scholarships. Rest assured you can afford us too. Rest assured you can afford us
                                            too</p>
                                        <div class="d-flex justify-content-between m-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="academic-wrapp container my-4">
                <div class="slider-area">
                    <!-- 移除swiper，使用Bootstrap 5 grid system：一行4列，响应式 -->
                    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">

                        <!-- Card 1: School of Commerce -->
                        <div class="col">
                            <div class="academic-card p-0"
                                style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                <div class="academic-img mb-0">
                                    <a href="program-details.html"><img src="assets/img/academic/academic1-1.jpg"
                                            alt="School of Commerce"></a>
                                </div>
                                <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                    <!-- 移除star评分部分，完全删除 -->
                                    <h3 class="box-title"><a href="program-details.html">School of Commerce</a></h3>
                                    <!-- 短描述仅2行 -->
                                    <p class="box-text style2 my-2"
                                        style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        MIU's Commerce school: Accounting, Finance, Marketing. Scholarships for all
                                        undergrads, affordable excellence.</p>
                                    <div class="d-flex justify-content-between mt-2 mb-2">
                                        <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                        <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2: School of Computer Application -->
                        <div class="col">
                            <div class="academic-card p-0"
                                style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                <div class="academic-img mb-0">
                                    <a href="program-details.html"><img src="assets/img/academic/academic1-1.jpg"
                                            alt="School of Computer Application"></a>
                                </div>
                                <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                    <h3 class="box-title"><a href="program-details.html">School of Computer
                                            Application</a></h3>
                                    <p class="box-text style2 my-2"
                                        style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        BCA, MCA, Data Science, AI programs. Every student gets scholarships, modern labs
                                        and expert faculty.</p>
                                    <div class="d-flex justify-content-between mt-2 mb-2">
                                        <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                        <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3: School of Engineering -->
                        <div class="col">
                            <div class="academic-card p-0"
                                style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                <div class="academic-img mb-0">
                                    <a href="program-details.html"><img src="assets/img/academic/academic1-1.jpg"
                                            alt="School of Engineering"></a>
                                </div>
                                <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                    <h3 class="box-title"><a href="program-details.html">School of Engineering</a></h3>
                                    <p class="box-text style2 my-2"
                                        style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        B.Tech, M.Tech in Civil, Mechanical, CSE. Hands-on training, 100% scholarship
                                        support for eligible students.</p>
                                    <div class="d-flex justify-content-between mt-2 mb-2">
                                        <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                        <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4: School of Law -->
                        <div class="col">
                            <div class="academic-card p-0"
                                style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                <div class="academic-img mb-0">
                                    <a href="program-details.html"><img src="assets/img/academic/academic1-1.jpg"
                                            alt="School of Law"></a>
                                </div>
                                <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                    <h3 class="box-title"><a href="program-details.html">School of Law</a></h3>
                                    <p class="box-text style2 my-2"
                                        style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        BA LLB, LLB, LLM programs. Moot courts, legal aid clinics, and assured scholarships
                                        for all deserving candidates.</p>
                                    <div class="d-flex justify-content-between mt-2 mb-2">
                                        <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                        <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <section class="stack-slider-section" id="stackSlider">
        <div class="stack-wrapper">
            <div class="stack-sticky">
                <div class="stack-container">
                    <div class="cards-stack">

                        <!-- Card 1 -->
                        <div class="stack-card active" data-index="0">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">360° LEARNING ECOSYSTEM</span>
                                        <h2 class="card-title">Your Growth, Our Priority: Empowering every student.</h2>
                                        <p class="card-text">State-of-the-art research facilities and partnerships with
                                            international institutions to drive innovation and discovery.</p>
                                        <span class="card-counter">01 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="{{ asset('/new-miu/banner1.png') }}" alt="Slide 1">
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="stack-card" data-index="1">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">GLOBAL PERSPECTIVE</span>
                                        <h2 class="card-title">International Collaborations & Exchange Programs</h2>
                                        <p class="card-text">International collaborations, exchange programs, and
                                            multicultural learning environments that prepare students for global careers.
                                        </p>
                                        <span class="card-counter">02 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800"
                                        alt="Slide 2">
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="stack-card" data-index="2">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">INNOVATION HUB</span>
                                        <h2 class="card-title">Startup Support & Technology Transfer</h2>
                                        <p class="card-text">Entrepreneurship incubation centers, startup support programs,
                                            and technology transfer initiatives.</p>
                                        <span class="card-counter">03 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800"
                                        alt="Slide 3">
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="stack-card" data-index="3">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">CULTURAL HERITAGE</span>
                                        <h2 class="card-title">Preserving Manipuri Culture & Traditions</h2>
                                        <p class="card-text">Preservation and promotion of Manipuri culture, arts, and
                                            traditions through dedicated academic programs.</p>
                                        <span class="card-counter">04 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1535061735340-d2c43404f2b0?w=800"
                                        alt="Slide 4">
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="stack-card" data-index="4">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">INDUSTRY INTEGRATION</span>
                                        <h2 class="card-title">Career-Oriented Programs</h2>
                                        <p class="card-text">Strong industry partnerships, internship opportunities,
                                            skill-based training, and career-oriented programs designed to enhance
                                            employability.</p>
                                        <span class="card-counter">05 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800"
                                        alt="Slide 5">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Progress Bar -->
                    <div class="progress-indicator">
                        <div class="progress-bar-bg">
                            <div class="progress-fill"></div>
                        </div>
                        <div class="progress-text">
                            <span id="current-num">01</span> / <span id="total-num">05</span>
                        </div>
                    </div>

                    <!-- Scroll Hint -->
                    <div class="scroll-hint">
                        <div class="mouse"></div>
                        <span>Scroll to explore slides</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="stack-slider-section" id="stackSlider">
        <div class="container space pb-0 mb-0">
            <div class="events-header">
                <span class="events-subtitle text-white">UPCOMING EVENTS</span>
                <h2 class="events-heading text-white">Campus Events & Activities</h2>
                <p class="events-description text-white">Stay updated with the latest happenings at MIU. From cultural
                    fests to tech summits, there's something for everyone.</p>
            </div>
        </div>
        <div class="stack-wrapper">
            <div class="stack-sticky">
                <div class="stack-container">
                    <div class="cards-stack">

                        <!-- Event Card 1 -->
                        <div class="stack-card active" data-index="0">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">📅 ANNUAL FEST</span>
                                        <h2 class="card-title">MIU Utsav 2025: Cultural Extravaganza</h2>
                                        <p class="card-text">Celebrate the spirit of Manipur with folk dances, music
                                            competitions, food festival and art exhibitions. Open for all students and
                                            faculty. March 15-17, 2025.</p>
                                        <span class="card-counter">01 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800"
                                        alt="Cultural Fest">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2: Tech Summit -->
                        <div class="stack-card" data-index="1">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">💻 TECH SUMMIT</span>
                                        <h2 class="card-title">National Level Hackathon & IT Conclave</h2>
                                        <p class="card-text">48-hour coding challenge, workshops on AI/ML, and networking
                                            with industry leaders from Microsoft, Google and startups. Prizes worth ₹2
                                            Lakhs. April 5-6, 2025.</p>
                                        <span class="card-counter">02 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800"
                                        alt="Hackathon">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3: Sports Meet -->
                        <div class="stack-card" data-index="2">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">🏆 SPORTS CHAMPIONSHIP</span>
                                        <h2 class="card-title">MIU Inter-Collegiate Sports League</h2>
                                        <p class="card-text">Football, cricket, badminton, athletics, and traditional
                                            Manipuri games. Opening ceremony with professional athletes. Register before
                                            March 30, 2025. Event dates: April 10-14.</p>
                                        <span class="card-counter">03 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800"
                                        alt="Sports Event">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 4: Guest Lecture Series -->
                        <div class="stack-card" data-index="3">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">🎤 GUEST LECTURE</span>
                                        <h2 class="card-title">Leadership Talk: "Future of Work & Innovation"</h2>
                                        <p class="card-text">Distinguished speakers from global industries and academic
                                            leaders. Interactive session on entrepreneurship, digital transformation.
                                            Certificate for participants. April 20, 2025.</p>
                                        <span class="card-counter">04 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800"
                                        alt="Guest Lecture">
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 5: Placement Drive & Career Fair -->
                        <div class="stack-card" data-index="4">
                            <div class="card-inner">
                                <div class="card-left">
                                    <div>
                                        <span class="card-badge">🚀 CAREER EXPO</span>
                                        <h2 class="card-title">Annual Placement Drive & Job Fair 2025</h2>
                                        <p class="card-text">50+ top recruiters, on-spot interviews, resume workshops, and
                                            skill development sessions. Exclusive for final-year students. May 1-2, 2025.
                                            Register early.</p>
                                        <span class="card-counter">05 / 05</span>
                                    </div>
                                </div>
                                <div class="card-right">
                                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=800"
                                        alt="Career Fair">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Progress Bar & Counter -->
                    {{-- <div class="progress-indicator">
                    <div class="progress-bar-bg">
                        <div class="progress-fill"></div>
                    </div>
                    <div class="progress-text">
                        <span id="current-num">01</span> / <span id="total-num">05</span>
                    </div>
                </div> --}}

                    <!-- Scroll Hint (unchanged) -->
                    {{-- <div class="scroll-hint">
                    <div class="mouse"></div>
                    <span>Scroll to explore events</span>
                </div> --}}
                </div>
            </div>
        </div>
    </section>



    <!-- Placement Section -->
    <section class="placement-section overflow-hidden space" id="placement">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="title-area mb-5">
                        <span class="sub-title">100% PLACEMENT ASSISTANCE</span>
                        <h2 class="sec-title">Our Top Recruiters & Placements</h2>
                        <p class="sec-text">MIU has a dedicated placement cell that works tirelessly to ensure promising
                            career opportunities for all students.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="stats-number">1000+</h3>
                        <p class="stats-text">Placement Offers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="stats-number">200+</h3>
                        <p class="stats-text">Top Companies</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="stats-number">₹25 LPA</h3>
                        <p class="stats-text">Highest Package</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="stats-number">50+</h3>
                        <p class="stats-text">MNC Partners</p>
                    </div>
                </div>
            </div>

            <!-- Recruiters Slider/Grid -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="text-center mb-4" style="color: #0a2540;">Our Valued Recruiters</h3>
                    <div class="recruiters-slider">
                        <div class="row g-4 justify-content-center">
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/Accenture_logo.svg') }}" alt="Accenture"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/amazon_logo.webp') }}" alt="Amazon"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/deliotee.png') }}" alt="Deloitte"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/google-logo.webp') }}" alt="Google"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/IBM_logo.png') }}" alt="Infosys"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/infosys.png') }}" alt="Infosys"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/microsoft_logo_icon_168102.webp') }}"
                                        alt="Microsoft" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/tcs.png') }}" alt="TCS"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/Tech_Mahindra_logo.png') }}"
                                        alt="Tech Mahindra" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">
                                <div class="recruiter-card">
                                    <img src="{{ asset('/new-miu/placement-logo/wilpro_logo.png') }}" alt="Wipro"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Placement Process -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="text-center mb-4" style="color: #0a2540;">Our Placement Process</h3>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>01</span>
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h4>Student Registration</h4>
                                <p>Students register with placement cell</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>02</span>
                                    <i class="fas fa-chalkboard-user"></i>
                                </div>
                                <h4>Training & Workshops</h4>
                                <p>Aptitude, soft skills & technical training</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>03</span>
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <h4>Company Drives</h4>
                                <p>Companies visit for recruitment drives</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>04</span>
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4>Offer Letter</h4>
                                <p>Selected students receive offer letters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="th-btn th-icon">Placement Drive 2025-26</a>
                </div>
            </div>
        </div>
    </section>




    <section class="why-area why-bg position-relative space overflow-hidden" style="    background-color: #44272a14;">
        {{-- <div class="why-shape jump shape-mockup" data-left="0%" data-bottom="10%"><img
                src="assets/img/shape/why-1-1.png" alt=""></div> --}}
        <div class="container">
            <div class="row gy-4">
                {{-- <div class="col-xl-8">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">WHY
                            CHOOSEUS</span>
                        <h2 class="sec-title text-anim2">We help every student to <span class="d-block">stantout from
                                the rest</span></h2>
                    </div>
                    <div class="row gy-60">
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox"><span class="why-number position-relative">1</span>
                                        <h3 class="box-title"><a href="about.html">Get a Top-Tier Global Education</a>
                                        </h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">A Kingdom perspective is integrated into your studies and
                                            woven through the entire stadum experience.</p>
                                    </div>
                                </div><a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="why-content">
                                    <div class="why-titlebox"><span class="why-number position-relative">2</span>
                                        <h3 class="box-title"><a href="about.html">Join a Spiritually Vibrant Campus
                                                Community</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Opportunities for faith and fellowship are all around, from
                                            chapel worship and dorm devotions to communal meals, clubs and activities.
                                        </p>
                                    </div>
                                </div><a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".6s">
                                <div class="why-content">
                                    <div class="why-titlebox"><span class="why-number position-relative">3</span>
                                        <h3 class="box-title"><a href="about.html">Be Prepared for a
                                                Thriving Career</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">A Kingdom perspective is integrated into your studies and
                                            woven through the entire stadum experience.</p>
                                    </div>
                                </div><a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".8s">
                                <div class="why-content">
                                    <div class="why-titlebox"><span class="why-number position-relative">4</span>
                                        <h3 class="box-title"><a href="about.html">Experience a Cost-Competitive
                                                Education</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Opportunities for faith and fellowship are all around, from
                                            chapel worship and dorm devotions to communal meals, clubs and activities.
                                        </p>
                                    </div>
                                </div><a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-8">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">ACADEMIC EXCELLENCE & INNOVATION</span>
                        <h2 class="sec-title text-anim2">We help every student to <span class="d-block">standout from the
                                rest</span></h2>
                    </div>
                    <div class="row gy-60">
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">1</span>
                                        <h3 class="box-title"><a href="about.html">Research Excellence</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">State-of-the-art research facilities and partnerships with
                                            international institutions to drive innovation and discovery.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">2</span>
                                        <h3 class="box-title"><a href="about.html">Global Perspective</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">International collaborations, exchange programs, and
                                            multicultural learning environments that prepare students for global careers.
                                        </p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".6s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">3</span>
                                        <h3 class="box-title"><a href="about.html">Innovation Hub</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Entrepreneurship incubation centers, startup support programs,
                                            and technology transfer initiatives.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".8s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">4</span>
                                        <h3 class="box-title"><a href="about.html">Cultural Heritage</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Preservation and promotion of Manipuri culture, arts, and
                                            traditions through dedicated academic programs.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">5</span>
                                        <h3 class="box-title"><a href="about.html">Sustainable Development</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Green campus initiatives, environmental research, and
                                            commitment to UN Sustainable Development Goals.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".4s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">6</span>
                                        <h3 class="box-title"><a href="about.html">Industry Integration</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Strong industry partnerships, internship opportunities,
                                            skill-based training, and career-oriented programs designed to enhance
                                            employability.</p>
                                    </div>
                                </div>
                                <a href="about.html" class="th-btn style-border1 th-icon mt-40">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="why-video">
                        <div class="why-video-bg overflow-hidden gsap-parallax"><img src="assets/img/why/why-video1-1.jpg"
                                alt="image">
                            {{-- <div class="why-video-btn"><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="campus overflow-hidden space">
        <div class="campus-shape jump shape-mockup d-none d-xxl-block" data-bottom="22%" data-right="5%"><img
                src="assets/img/shape/campus-1-1.png" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">EXPERIENCE
                            STADUM</span>
                        <h2 class="sec-title text-anim2">Campus Life</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn"><a href="campus.html" class="th-btn style-border1 th-icon wow fadeInUp"
                            data-wow-delay=".2s">Explore All</a></div>
                </div>
            </div>
            <div class="row gy-5 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="campus-card wow fadeInLeft" data-wow-delay=".2s">
                        <div class="campus-img global-img"><a href="campus.html" class="d-block position-relative"><img
                                    src="assets/img/campus/campus-1-1.jpg" alt="campus image" class="img-1"></a></div>
                        <div class="campus-content">
                            <h3 class="box-title"><a href="campus.html">Mentor Lecture</a></h3>
                            <p class="box-text">Schedule a personalized tour of our Ancaster, Ontario campus and a
                                one-on-one meeting with an Admissions Counsellor. Daily visits are offered regularly to
                                accommodate your schedule.</p>
                        </div><a href="campus.html" class="th-btn style-border1 th-icon">View The Campus</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="campus-card wow fadeInLeft" data-wow-delay=".4s">
                        <div class="campus-img global-img"><a href="campus.html" class="d-block position-relative"><img
                                    src="assets/img/campus/campus-1-2.jpg" alt="campus image" class="img-1"></a></div>
                        <div class="campus-content">
                            <h3 class="box-title"><a href="campus.html">Group Study in Campus</a></h3>
                            <p class="box-text">Our scheduled visits are pre-planned days that are specially catered
                                to the different interests of each student. Tour campus and connect with staff, faculty
                                and current students to help discover your place.</p>
                        </div><a href="campus.html" class="th-btn style-border1 th-icon">View The Campus</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="campus-card wow fadeInLeft" data-wow-delay=".6s">
                        <div class="campus-img global-img"><a href="campus.html" class="d-block position-relative"><img
                                    src="assets/img/campus/campus-1-3.jpg" alt="campus image" class="img-1"></a></div>
                        <div class="campus-content">
                            <h3 class="box-title"><a href="campus.html">Art & Culture</a></h3>
                            <p class="box-text">Can’t make it to campus? Explore parts of Redeemer’s 70-acre campus
                                through a series of short videos and get a glimpse of what it has to offer—wherever and
                                whenever works best for you.</p>
                        </div><a href="campus.html" class="th-btn style-border1 th-icon">View The Campus</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="campus overflow-hidden space pb-0">
        <div class="story-area-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">STUDENT
                                STORIES</span>
                            <h2 class="sec-title text-anim2">Our Student Stories</h2>
                        </div>
                    </div>
                    <div class="col-auto align-self-end">
                        <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="program.html"
                                class="th-btn style-border1 th-icon">Discover More Stories</a></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="swiper th-slider story-slider1" id="storySlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1400":{"slidesPerView":"5"},"1200":{"slidesPerView":"4"},"992":{"slidesPerView":"4"},"768":{"slidesPerView":"3"},"576":{"slidesPerView":"2"}},"spaceBetween":"0"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Brone Due</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Brone Due</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Moumita Mira</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Moumita Mira</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Maya Lily</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Maya Lily</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Sony & Ovi</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Sony & Ovi</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Brone Due</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Brone Due</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Moumita Mira</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Moumita Mira</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Maya Lily</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Maya Lily</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Sony & Ovi</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Sony & Ovi</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Stadum University’s humanities program is helping me develop the
                                        perspective, critical thinking and adaptability I need to navigate and contribute to
                                        this changing world."</p>
                                    <h3 class="box-title"><a href="program.html">Alex Smith</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="campus overflow-hidden space pb-0">
        <div class="story-area-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="title-area text-center text-lg-start">
                            <span class="sub-title text-anim mt-2">MIU STUDENT STORIES</span>
                            <h2 class="sec-title text-anim2">Our MIU Student Stories</h2>
                        </div>
                    </div>
                    <div class="col-auto align-self-end">
                        <div class="sec-btn wow fadeInUp" data-wow-delay=".3s">
                            <a href="program.html" class="th-btn style-border1 th-icon">Discover More Stories</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="swiper th-slider story-slider1" id="storySlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"1400":{"slidesPerView":"5"},"1200":{"slidesPerView":"4"},"992":{"slidesPerView":"4"},"768":{"slidesPerView":"3"},"576":{"slidesPerView":"2"}},"spaceBetween":"0"}'>
                    <div class="swiper-wrapper">
                        <!-- Slide 1 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU's placement training was exceptional! I got placed at Amazon
                                        with 28 LPA. The faculty guidance and real-world projects made all the difference."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rahul Verma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The coding bootcamps and mock interviews at MIU helped me crack
                                        Microsoft. I'm now working as a Software Engineer in Seattle. Thank you MIU!"</p>
                                    <h3 class="box-title"><a href="program.html">Rahul Verma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Sneha Kulkarni</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU's industry connect program gave me internship opportunities at
                                        Google. The hands-on learning approach is what every student needs today."</p>
                                    <h3 class="box-title"><a href="program.html">Sneha Kulkarni</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Ankit Mehta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"Coming from a small town, MIU gave me the confidence and skills to
                                        compete globally. I received offers from Deloitte and PwC. Forever grateful!"</p>
                                    <h3 class="box-title"><a href="program.html">Ankit Mehta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The placement cell at MIU is amazing! They brought 200+ companies
                                        and prepared us thoroughly. I got placed at Infosys with a great package."</p>
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rohan Das</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU's global alumni network helped me get referrals. I'm now
                                        working at TCS and also pursuing my passion for AI research. Best decision ever!"
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Rohan Das</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Divya Singh</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The practical curriculum and hackathons at MIU sharpened my
                                        skills. I got placed at IBM as a Cloud Architect. Highly recommend MIU to everyone!"
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Divya Singh</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 8 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Karthik S</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU's entrepreneurship cell helped me launch my startup. Even
                                        before graduation, I received funding. The mentorship is world-class!"</p>
                                    <h3 class="box-title"><a href="program.html">Karthik S</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 9 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Ishita Roy</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The corporate mentorship program at MIU connected me with leaders
                                        at Google. I'm now working on cutting-edge AI projects. Truly transformative!"</p>
                                    <h3 class="box-title"><a href="program.html">Ishita Roy</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 10 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Vikram Joshi</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU's focus on soft skills and technical excellence helped me
                                        crack interviews at top MNCs. I chose Accenture and I'm loving my career!"</p>
                                    <h3 class="box-title"><a href="program.html">Vikram Joshi</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event-area-1 position-relative overflow-hidden space" id="event-sec">
        <div class="event-shape shape-mockup d-none d-xxl-block" data-top="0%" data-left="0%"><img
                src="assets/img/shape/shape-2.png" alt=""></div>
        {{-- <div class="event-shape jump shape-mockup d-none d-xxl-block" data-bottom="0%" data-left="3%"><img
                src="assets/img/shape/event-1-1.png" alt=""></div> --}}
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">LATEST NEWS &
                            BLOG</span>
                        <h2 class="sec-title text-anim2">Blog & Insights</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="event.html"
                            class="th-btn style-border1 th-icon">Our Blogs</a></div>
                </div>
            </div>
            {{-- <div class="event-card-wrap">
                <div class="event-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="event-card-img global-img"><img src="assets/img/event/event-1-1.jpg" alt="event">
                        <p class="event-card-tag"><span class="tag-number">12</span>Jan</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="event-details.html">Programming languages for
                                    a better world</a></h3>
                            <p class="box-text">Come for a quick session on how this question has crucially helped
                                humanity with achieving one of its most impressive feats yet: orchestrating electric
                                currents.</p>
                            <div class="blog-meta"><a class="location" href="#"><i
                                        class="fa-solid fa-location-dot"></i> 25 Circular Road, New York City </a><a
                                    class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    25.02.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    09:00am - 12:00pm</a></div>
                        </div>
                        <div class="btn-wrap"><a class="th-btn style-border1 th-icon"
                                href="event-details.html">Details</a></div>
                    </div>
                </div>
                <div class="event-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="event-card-img global-img"><img src="assets/img/event/event-1-2.jpg" alt="event">
                        <p class="event-card-tag"><span class="tag-number">07</span>Feb</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="event-details.html">Center for Subjectivity
                                    Research 2024</a></h3>
                            <p class="box-text">Center for subjectivity research at the university of copenhagen was
                                established in 2002 on the basis of a grant from national research.</p>
                            <div class="blog-meta"><a class="location" href="#"><i
                                        class="fa-solid fa-location-dot"></i> 25 Circular Road, New York City </a><a
                                    class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    03.08.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    10:00am - 03:20pm</a></div>
                        </div>
                        <div class="btn-wrap"><a class="th-btn style-border1 th-icon"
                                href="event-details.html">Details</a></div>
                    </div>
                </div>
                <div class="event-card wow fadeInUp" data-wow-delay=".6s">
                    <div class="event-card-img global-img"><img src="assets/img/event/event-1-3.jpg" alt="event">
                        <p class="event-card-tag"><span class="tag-number">22</span>Sep</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="event-details.html">The Future of Archives in
                                    the Digital Age</a></h3>
                            <p class="box-text">This talk explores the potential future of archives in the digital
                                age, using one of the oldest philosophical archives and research institutes for
                                philosophy in Germany</p>
                            <div class="blog-meta"><a class="location" href="#"><i
                                        class="fa-solid fa-location-dot"></i> 25 Circular Road, New York City </a><a
                                    class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    14.11.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    11:00am - 04:00pm</a></div>
                        </div>
                        <div class="btn-wrap"><a class="th-btn style-border1 th-icon"
                                href="event-details.html">Details</a></div>
                    </div>
                </div>
            </div> --}}
            <div class="row gy-4 event-card-wrap">
                {{-- <div class="col-lg-4">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img position-relative p-3 pb-0" ><a href="blog-details.html">
                                <div class="blog-img-box position-relative overflow-hidden "><img
                                        src="assets/img/blog/blog_1_1.jpg" alt="blog image"> <img
                                        src="assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">FEB,2025</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            
                            <h3 class="box-title"><a href="blog-details.html">Platform Innovation Centre & Parkade
                                    for generation</a></h3>
                            <p class="box-text">Studam fuels student success through smart tools and guides for
                                academic excellence.</p>
                            <div class="btn-wrap"><a href="blog-details.html"
                                    class="th-btn style-border1 th-icon">Read More</a></div>
                        </div>
                    </div>
                     </div> --}}
                <div class="row">
                    <!-- Card 1 - Blog 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">15</h5>
                                    <p class="blog-date-text">JAN,2025</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Advanced AI & Machine
                                        Learning Certification Program</a></h3>
                                <p class="box-text">MIU introduces industry-aligned AI curriculum with hands-on projects
                                    and placement assistance for tech enthusiasts.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 - Blog 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">22</h5>
                                    <p class="blog-date-text">FEB,2025</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Top Recruiters Visit MIU Campus for Mega
                                        Placement Drive 2025</a></h3>
                                <p class="box-text">Over 50+ leading companies including Amazon, Microsoft, and Google
                                    participated in MIU's annual placement event.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 - Blog 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="blog-details.html">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                        <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">10</h5>
                                    <p class="blog-date-text">MAR,2025</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">MIU Students Shine at National Level
                                        Hackathon 2025</a></h3>
                                <p class="box-text">MIU's tech team wins first prize at Smart India Hackathon, showcasing
                                    innovative solutions for real-world problems.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="apply-stadum-area bg-title position-relative space overflow-hidden">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-xl-6 order-1 order-xl-0">
                    {{-- <div class="apply-stadum-titlebox title-area">
                        <div class="sec-title-wrap"><span class="sub-title text-anim">APPLY TO STADUM</span>
                            <h2 class="sec-title text-white text-anim2">We are one of the largest university</h2>
                        </div>
                        <div class="box-text-wrap">
                            <p class="box-text text-white mt-25 wow fadeInUp" data-wow-delay=".2s">A place to
                                provide students with enough knowledge and skills in a complex world. Are you looking
                                for exceptional education experience? Stadum might be the place for you.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="apply-stadum-wrapp">
                        <div class="apply-stadum-box">
                            <div class="checklist">
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay=".2s">Undergraduate Admissions</li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s">Graduate Admissions</li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">International Students</li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s">Scholarship Opportunities</li>
                                </ul>
                            </div>
                            <div class="checklist">
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay=".6s">Transfer Admissions</li>
                                    <li class="wow fadeInUp" data-wow-delay=".7s">Financial Aid Applications</li>
                                    <li class="wow fadeInUp" data-wow-delay=".8s">Scholarship Opportunities</li>
                                    <li class="wow fadeInUp" data-wow-delay=".9s">Campus Visit Scheduling</li>
                                </ul>
                            </div>
                        </div>
                        <div class="apply-stadum-action th-btn-wrap wow fadeInUp" data-wow-delay=".10s"><a
                                href="contact.html" class="th-btn th-icon white-hover">More About Admission</a>
                        </div>
                    </div> --}}
                    <div class="bg-white p-4 rounded-3 shadow-lg">

                        @include('web.parts.enquery-form')
                    </div>
                </div>
                <div class="col-xl-6 order-0 order-xl-1">
                    <div class="apply-stadum-thumb reveal"><img src="assets/img/apply-stadum/apply-stadum-home-1.jpg"
                            alt="image" class="">
                    </div>
                </div>
            </div>
        </div><span class="apply-stadum-shape wow fadeInRight" data-wow-delay=".3s"></span>
    </section>
    {{-- <section class="chancellor-area position-relative space">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6">
                    <div class="chancellor-thumb"><img src="assets/img/chancellor/chancellor-img-home-1.jpg"
                            alt="image">
                        <div class="ripple-shape style2"><span class="ripple-1"></span> <span class="ripple-2"></span>
                            <span class="ripple-3"></span> <span class="ripple-4"></span> <span class="ripple-5"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="chancellor-wrapp">
                        <div class="chancellor-titlebox title-area"><span class="sub-title text-anim">OUR CHANCELLOR
                                & LECTURE</span>
                            <h2 class="sec-title text-anim2">Chancellor & Lecturer</h2>
                            <p class="box-text mt-25 wow fadeInUp" data-wow-delay=".4s">A place to provide students
                                with enough knowledge and skills in a complex world. Are you looking for exceptional
                                education experience? Stadum might be the place for you.</p>
                        </div>
                        <div class="chancellor-content">
                            <div class="skill-feature wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="skill-feature-title">Faculty Skilled</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                        <div class="progress-value">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="skill-feature-title">Computer Science</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 98%;">
                                        <div class="progress-value">98%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="skill-feature-title">Communication</h3>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 95%;">
                                        <div class="progress-value">95%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chancellor-bottom">
                                <div class="chancellor-action"><a href="contact.html" class="th-btn th-icon">Lecturer
                                        at
                                        Faculty</a></div>
                                <div class="chancellor-signature-box text-sm-center">
                                    <p class="box-text">Prof. Dr. Simons Doe, Ph.D</p><img
                                        src="assets/img/icon/signature.png" class="chancellor-signature" alt="signature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="marquee-area space-bottom overflow-hidden">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":40}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/open-book.svg" alt="icon">
                            </div><a target="_blank" href="#">CREATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/scollarship.svg" alt="icon">
                            </div><a target="_blank" href="#">DISCOVER</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/open-book.svg" alt="icon">
                            </div><a target="_blank" href="#">INNOVATE</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/open-book.svg" alt="icon">
                            </div><a target="_blank" href="#">EDUCATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/scollarship.svg" alt="icon">
                            </div><a target="_blank" href="#">CASE STUDIES</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/open-book.svg" alt="icon">
                            </div><a target="_blank" href="#">CREATION</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/open-book.svg" alt="icon">
                            </div><a target="_blank" href="#">DISCOVER</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="assets/img/icon/scollarship.svg" alt="icon">
                            </div><a target="_blank" href="#">INNOVATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="community-area space" data-bg-src="assets/img/bg/community-home-1.png">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7">
                    <div class="community-wrap">
                        <div class="title-area"><span class="sub-title text-anim">INTERESTED IN JOINING WITH
                                US?</span>
                            <h2 class="sec-title text-anim2 mb-55">Join Us For Information About New Student Admission
                            </h2>
                            <div class="box-text-wrap mt-30 wow fadeInUp" data-wow-delay=".3s">
                                <p class="box-text">At stadum eductin, we redefine consultancy through a dynamic
                                    fusion of innovation, expertise, and strategic vision. Our dedicated team is
                                    committed to delivering tailored solutions that transcend traditional consulting
                                    boundaries.</p>
                            </div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a href="contact.html"
                                class="th-btn th-icon">Join Community</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="faq-area-1 bg-white position-relative space overflow-hidden">
        {{-- <div class="faq-shape1 shape-mockup" data-top="0%" data-left="0%"><img
                src="assets/img/shape/feature-shep-home-1.png" alt="shape"></div>
        <div class="faq-shape2 shape-mockup" data-bottom="0%" data-right="0%"><img
                src="assets/img/shape/feature-shep-2-home-1.png" alt="shape"></div>
        <div class="faq-shape3 movingX shape-mockup" data-bottom="0%" data-right="2%"><img
                src="assets/img/shape/faq-1-1.png" alt="shape"></div>
        <div class="ripple-shape d-none d-xl-block"><span class="ripple-1"></span> <span class="ripple-2"></span>
            <span class="ripple-3"></span> <span class="ripple-4"></span> <span class="ripple-5"></span>
        </div> --}}
        <div class="container">
            <div class="row gy-30 gx-30 align-items-center justify-content-center">
                <div class="col-xxl-4">
                    <div class="faq-imgbox wow fadeInLeft" data-wow-delay=".3s">
                        <div class="img1"><img src="assets/img/faq/faq-1-2.jpg" alt="image"> <img
                                src="assets/img/faq/faq-1-1.jpg" alt="image"></div>
                        <div class="img2"><img src="assets/img/faq/faq-1-3.jpg" alt="image"></div>
                    </div>
                </div>
                {{-- <div class="col-xxl-8">
                    <div class="faq-content">
                        <div class="faq-wrap">
                            <div class="title-area"><span class="sub-title text-anim">FAQ</span>
                                <h2 class="sec-title text-anim2">Frequently Ask Questions</h2>
                                <p class="box-text mt-20 wow fadeInUp" data-wow-delay=".3s">We are committed to
                                    leaving the world a better place. We pursue new technology, encourage creativity,
                                </p>
                            </div>
                        </div>
                        <div class="faq-box">
                            <div class="faq-wrap1">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".1s">
                                        <div class="accordion-header" id="collapse-item-1"><button
                                                class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1">01. How this Stadum works?</button></div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".2s">
                                        <div class="accordion-header" id="collapse-item-2"><button
                                                class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">02. How can i make
                                                Cancel here?</button></div>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".3s">
                                        <div class="accordion-header" id="collapse-item-3"><button
                                                class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">03. What services
                                                do yo offer?</button></div>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".4s">
                                        <div class="accordion-header" id="collapse-item-4"><button
                                                class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">04. How can
                                                consultant benefits in my business?</button></div>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                        <div class="accordion-header" id="collapse-item-5"><button
                                                class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                aria-expanded="false" aria-controls="collapse-5">05. How to get all
                                                programs?</button></div>
                                        <div id="collapse-5" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".6s">
                                        <div class="accordion-header" id="collapse-item-6"><button
                                                class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                aria-expanded="false" aria-controls="collapse-6">06. When available
                                                community join?</button></div>
                                        <div id="collapse-6" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">At stadum eductin, we redefine consultancy through
                                                    a dynamic fusion of innovation, expertise, and strategic vision. Our
                                                    dedicated team is committed to delivering tailored solutions that
                                                    transcend traditional consulting boundaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xxl-8">
                    <div class="faq-content">
                        <div class="faq-wrap">
                            <div class="title-area">
                                <span class="sub-title text-anim">FAQ</span>
                                <h2 class="sec-title text-anim2">Frequently Ask Questions</h2>
                                <p class="box-text mt-20 wow fadeInUp" data-wow-delay=".3s">Get answers to the most common
                                    questions about admissions, courses, fees, and campus life at our university.
                                </p>
                            </div>
                        </div>
                        <div class="faq-box">
                            <div class="faq-wrap1">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".1s">
                                        <div class="accordion-header" id="collapse-item-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1">01. What are the admission requirements for
                                                undergraduate programs?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">For undergraduate programs, you need a minimum of 50%
                                                    aggregate in 10+2 from a recognized board. Entrance exam scores
                                                    (JEE/NEET/University Entrance Test) are accepted. International students
                                                    require IELTS/TOEFL scores. The application deadline for the fall
                                                    semester is May 31st.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".2s">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">02. How can I apply for
                                                scholarships?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">We offer merit-based, need-based, and sports
                                                    scholarships. You can apply through the university portal after
                                                    receiving your admission offer. The application deadline for
                                                    scholarships is usually one month before the semester starts. Some
                                                    scholarships cover up to 100% of tuition fees.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".3s">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">03. What is the fee
                                                structure and payment process?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Annual tuition fees range from ₹50,000 to ₹2,50,000
                                                    depending on the program. Payment can be made online via credit/debit
                                                    card, net banking, UPI, or demand draft. We also offer easy EMI options
                                                    through our banking partners. Hostel and mess fees are separate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".4s">
                                        <div class="accordion-header" id="collapse-item-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">04. What placement
                                                opportunities does the university offer?</button>
                                        </div>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Our dedicated placement cell has partnerships with 200+
                                                    companies including Google, Microsoft, Amazon, TCS, and Infosys. Average
                                                    package is ₹6-8 LPA, with the highest reaching ₹42 LPA. We provide
                                                    resume building workshops, mock interviews, and internship opportunities
                                                    throughout the year.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                        <div class="accordion-header" id="collapse-item-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                aria-expanded="false" aria-controls="collapse-5">05. What are the hostel
                                                and campus facilities available?</button>
                                        </div>
                                        <div id="collapse-5" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">We have separate hostels for boys and girls with
                                                    AC/non-AC rooms, 24/7 Wi-Fi, security, and mess facilities. Campus
                                                    includes a central library, modern labs, sports complex, gym, cafeteria,
                                                    medical center, and transport services. Hostel admission is on a
                                                    first-come basis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".6s">
                                        <div class="accordion-header" id="collapse-item-6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                aria-expanded="false" aria-controls="collapse-6">06. How can I contact the
                                                admission counselor?</button>
                                        </div>
                                        <div id="collapse-6" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">You can reach our admission counselors via phone at
                                                    +91-XXXXXXXXXX, email at admissions@university.edu, or visit the
                                                    admission office from Monday to Saturday (9 AM to 5 PM). You can also
                                                    fill out the enquiry form on our website and we'll contact you within 24
                                                    hours.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="blog-area-1 overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">LATEST NEWS
                            & BLOG</span>
                        <h2 class="sec-title text-anim2">Blog & Insights</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="blog.html"
                            class="th-btn style-border1 th-icon">Our Blogs</a></div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img position-relative"><a href="blog-details.html">
                                <div class="blog-img-box position-relative overflow-hidden"><img
                                        src="assets/img/blog/blog_1_1.jpg" alt="blog image"> <img
                                        src="assets/img/blog/blog_1_1.jpg" alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">FEB,2025</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html"><span class="author-icon"><img
                                            src="assets/img/blog/author.png" alt="img"></span>By themeholy</a> <a
                                    href="blog.html"><span class="comment-icon"><i
                                            class="fa-solid fa-comments"></i></span> 0
                                    Comment</a></div>
                            <h3 class="box-title"><a href="blog-details.html">Platform Innovation Centre & Parkade
                                    for generation</a></h3>
                            <p class="box-text">Studam fuels student success through smart tools and guides for
                                academic excellence.</p>
                            <div class="btn-wrap"><a href="blog-details.html"
                                    class="th-btn style-border1 th-icon">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img position-relative"><a href="blog-details.html">
                                <div class="blog-img-box position-relative overflow-hidden"><img
                                        src="assets/img/blog/blog_1_2.jpg" alt="blog image"> <img
                                        src="assets/img/blog/blog_1_2.jpg" alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">29</h5>
                                <p class="blog-date-text">JAN,2025</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html"><span class="author-icon"><img
                                            src="assets/img/blog/author.png" alt="img"></span>By themeholy</a> <a
                                    href="blog.html"><span class="comment-icon"><i
                                            class="fa-solid fa-comments"></i></span> 0
                                    Comment</a></div>
                            <h3 class="box-title"><a href="blog-details.html">Olympic Plaza Transformar Advence
                                    project</a></h3>
                            <p class="box-text">Studam enables learners with powerful tools and support for every
                                education phase.</p>
                            <div class="btn-wrap"><a href="blog-details.html"
                                    class="th-btn style-border1 th-icon">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-card wow fadeInUp">
                        <div class="blog-img position-relative"><a href="blog-details.html">
                                <div class="blog-img-box position-relative overflow-hidden"><img
                                        src="assets/img/blog/blog_1_3.jpg" alt="blog image"> <img
                                        src="assets/img/blog/blog_1_3.jpg" alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">18</h5>
                                <p class="blog-date-text">FEB,2025</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a class="author" href="blog.html"><span class="author-icon"><img
                                            src="assets/img/blog/author.png" alt="img"></span>By themeholy</a> <a
                                    href="blog.html"><span class="comment-icon"><i
                                            class="fa-solid fa-comments"></i></span> 0
                                    Comment</a></div>
                            <h3 class="box-title"><a href="blog-details.html">Calgary Municipal Land Corporation
                                    launches</a></h3>
                            <p class="box-text">Studam builds strong student networks and platforms for academic
                                transformation daily.</p>
                            <div class="btn-wrap"><a href="blog-details.html"
                                    class="th-btn style-border1 th-icon">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection

{{-- 
@section('scripts')
    <script>
        (function() {
            // STRICT SCROLL LOCK STACKED SLIDER - FIXED VERSION

            document.addEventListener('DOMContentLoaded', function() {

                const cards = document.querySelectorAll('.stack-card');
                const totalCards = cards.length;
                const progressFill = document.querySelector('.progress-fill');
                const currentNumSpan = document.getElementById('current-num');
                const sliderSection = document.getElementById('stackSlider');
                const completionMsg = document.getElementById('completionMessage');

                if (totalCards === 0 || !sliderSection) return;

                let currentIndex = 0;
                let isAnimating = false;
                let isSliderLocked = false;
                let scrollPositionBeforeLock = 0;

                // Set total number
                const totalNumSpan = document.getElementById('total-num');
                if (totalNumSpan) {
                    totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
                }

                // Lock body scroll
                function lockBodyScroll() {
                    if (!isSliderLocked) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        isSliderLocked = true;
                    }
                }

                // Unlock body scroll
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        document.body.classList.remove('slider-active');
                        document.body.style.top = '';
                        window.scrollTo(0, scrollPositionBeforeLock);
                        isSliderLocked = false;
                    }
                }

                // Update progress and counter
                function updateProgress() {
                    if (progressFill) {
                        const progress = (currentIndex / (totalCards - 1)) * 100;
                        progressFill.style.width = progress + '%';
                    }
                    if (currentNumSpan) {
                        currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
                    }
                }

                // Update scroll hint text
                function updateScrollHint() {
                    const scrollHintSpan = document.querySelector('.scroll-hint span');
                    if (scrollHintSpan) {
                        if (currentIndex === 0) {
                            scrollHintSpan.innerHTML = '⬆️ Scroll UP to go to previous section ⬆️';
                            scrollHintSpan.style.color = '#f37021';
                        } else if (currentIndex === totalCards - 1) {
                            scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to go to next section ⬇️';
                            scrollHintSpan.style.color = '#10b981';
                        } else {
                            scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
                            scrollHintSpan.style.color = '#94a3b8';
                        }
                    }
                }

                // Update cards position
                function updateCards() {
                    cards.forEach((card, idx) => {
                        card.classList.remove('active', 'prev', 'next', 'hidden');

                        if (idx === currentIndex) {
                            card.classList.add('active');
                        } else if (idx === currentIndex - 1) {
                            card.classList.add('prev');
                        } else if (idx === currentIndex + 1) {
                            card.classList.add('next');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                    updateProgress();
                    updateScrollHint();
                }

                // Go to specific card
                function goToCard(index) {
                    if (isAnimating) return;
                    if (index < 0 || index >= totalCards) return;

                    isAnimating = true;
                    currentIndex = index;
                    updateCards();

                    // Show completion message on last slide
                    if (currentIndex === totalCards - 1 && completionMsg) {
                        completionMsg.classList.add('show');
                        setTimeout(() => {
                            completionMsg.classList.remove('show');
                        }, 3000);
                    }

                    setTimeout(() => {
                        isAnimating = false;
                    }, 500);
                }

                // Next card
                function nextCard() {
                    if (currentIndex < totalCards - 1) {
                        goToCard(currentIndex + 1);
                        return true;
                    }
                    return false;
                }

                // Previous card
                function prevCard() {
                    if (currentIndex > 0) {
                        goToCard(currentIndex - 1);
                        return true;
                    }
                    return false;
                }

                // Check if slider is in viewport
                function isSliderInViewport() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    // Consider slider in view if its center is visible
                    const sliderCenter = rect.top + rect.height / 2;
                    return sliderCenter > 0 && sliderCenter < windowHeight;
                }

                // Handle wheel events
                let wheelTimeout = null;

                function handleWheel(e) {
                    const isInView = isSliderInViewport();

                    // If slider not in view, ensure it's unlocked
                    if (!isInView) {
                        if (isSliderLocked) {
                            unlockBodyScroll();
                        }
                        return;
                    }

                    // If animating, block
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle
                    if (wheelTimeout) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - UNLOCK and let user scroll to next section
                            unlockBodyScroll();
                            // Don't prevent default - allow natural scroll
                            return;
                        } else {
                            // Not on last slide - go to next card
                            nextCard();
                            e.preventDefault();
                            // Keep scroll position locked
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - UNLOCK and let user scroll to previous section
                            unlockBodyScroll();
                            // Don't prevent default - allow natural scroll
                            return;
                        } else {
                            // Not on first slide - go to previous card
                            prevCard();
                            e.preventDefault();
                            // Keep scroll position locked
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }

                    // Set throttle
                    wheelTimeout = setTimeout(() => {
                        wheelTimeout = null;
                    }, 400);
                }

                // Handle scroll event for locking/unlocking
                let scrollTimer = null;

                function handleScroll() {
                    if (scrollTimer) return;

                    scrollTimer = setTimeout(() => {
                        const isInView = isSliderInViewport();

                        if (isInView && !isSliderLocked) {
                            // Slider came into view - lock it
                            lockBodyScroll();
                        } else if (!isInView && isSliderLocked) {
                            // Slider left view - unlock it
                            unlockBodyScroll();
                        }

                        scrollTimer = null;
                    }, 50);
                }

                // Touch support for mobile
                let touchStartY = 0;
                let touchEndY = 0;

                function handleTouchStart(e) {
                    if (!isAnimating) {
                        touchStartY = e.touches[0].clientY;
                    }
                }

                function handleTouchMove(e) {
                    const isInView = isSliderInViewport();

                    if (!isInView || isAnimating) {
                        return;
                    }

                    touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;

                    if (Math.abs(diff) > 30) {
                        // Swipe UP (diff > 0)
                        if (diff > 0) {
                            if (currentIndex === totalCards - 1) {
                                // On last slide - unlock
                                unlockBodyScroll();
                            } else {
                                // Go to next card
                                nextCard();
                                e.preventDefault();
                            }
                        }
                        // Swipe DOWN (diff < 0)
                        else if (diff < 0) {
                            if (currentIndex === 0) {
                                // On first slide - unlock
                                unlockBodyScroll();
                            } else {
                                // Go to previous card
                                prevCard();
                                e.preventDefault();
                            }
                        }
                        touchStartY = touchEndY;
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll);

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: false
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Initially lock if slider is in view
                    if (isSliderInViewport()) {
                        lockBodyScroll();
                    }
                }

                init();

                // Maintain scroll position when locked
                let maintainInterval = setInterval(() => {
                    if (isSliderLocked && isSliderInViewport()) {
                        if (window.scrollY !== scrollPositionBeforeLock) {
                            window.scrollTo(0, scrollPositionBeforeLock);
                        }
                    }
                }, 50);

                // Cleanup
                window.addEventListener('beforeunload', () => {
                    if (maintainInterval) {
                        clearInterval(maintainInterval);
                    }
                    unlockBodyScroll();
                });

            });
        })();
    </script>
@endsection --}}
@section('scripts')
    <script>
        (function() {
            // PERFECT STACKED CARDS SLIDER - COMPLETELY FIXED

            document.addEventListener('DOMContentLoaded', function() {

                const cards = document.querySelectorAll('.stack-card');
                const totalCards = cards.length;
                const progressFill = document.querySelector('.progress-fill');
                const currentNumSpan = document.getElementById('current-num');
                const sliderSection = document.getElementById('stackSlider');
                const completionMsg = document.getElementById('completionMessage');

                if (totalCards === 0 || !sliderSection) return;

                let currentIndex = 0;
                let isAnimating = false;
                let isSliderLocked = false;
                let scrollPositionBeforeLock = 0;
                let isUserExiting = false; // Flag to track if user is exiting slider

                // Set total number
                const totalNumSpan = document.getElementById('total-num');
                if (totalNumSpan) {
                    totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
                }

                // Lock body scroll
                function lockBodyScroll() {
                    if (!isSliderLocked && !isUserExiting) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        isSliderLocked = true;
                        console.log('Slider LOCKED');
                    }
                }

                // Unlock body scroll
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        document.body.classList.remove('slider-active');
                        document.body.style.top = '';
                        window.scrollTo(0, scrollPositionBeforeLock);
                        isSliderLocked = false;
                        console.log('Slider UNLOCKED');
                    }
                }

                // Force unlock (for exiting)
                function forceUnlockAndExit() {
                    isUserExiting = true;
                    unlockBodyScroll();
                    setTimeout(() => {
                        isUserExiting = false;
                    }, 100);
                }

                // Update progress and counter
                function updateProgress() {
                    if (progressFill) {
                        const progress = (currentIndex / (totalCards - 1)) * 100;
                        progressFill.style.width = progress + '%';
                    }
                    if (currentNumSpan) {
                        currentNumSpan.textContent = (currentIndex + 1).toString().padStart(2, '0');
                    }
                }

                // Update scroll hint text
                function updateScrollHint() {
                    const scrollHintSpan = document.querySelector('.scroll-hint span');
                    if (scrollHintSpan) {
                        if (currentIndex === 0) {
                            scrollHintSpan.innerHTML = '⬆️ Scroll UP to exit slider ⬆️';
                            scrollHintSpan.style.color = '#f37021';
                        } else if (currentIndex === totalCards - 1) {
                            scrollHintSpan.innerHTML = '⬇️ Scroll DOWN to exit slider ⬇️';
                            scrollHintSpan.style.color = '#10b981';
                        } else {
                            scrollHintSpan.innerHTML = '↕️ Scroll to navigate slides ↕️';
                            scrollHintSpan.style.color = '#94a3b8';
                        }
                    }
                }

                // Update cards position
                function updateCards() {
                    cards.forEach((card, idx) => {
                        card.classList.remove('active', 'prev', 'next', 'hidden');

                        if (idx === currentIndex) {
                            card.classList.add('active');
                        } else if (idx === currentIndex - 1) {
                            card.classList.add('prev');
                        } else if (idx === currentIndex + 1) {
                            card.classList.add('next');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                    updateProgress();
                    updateScrollHint();
                }

                // Go to specific card
                function goToCard(index) {
                    if (isAnimating) return;
                    if (index < 0 || index >= totalCards) return;

                    isAnimating = true;
                    currentIndex = index;
                    updateCards();

                    // Show completion message on last slide
                    if (currentIndex === totalCards - 1 && completionMsg) {
                        completionMsg.classList.add('show');
                        setTimeout(() => {
                            completionMsg.classList.remove('show');
                        }, 3000);
                    }

                    setTimeout(() => {
                        isAnimating = false;
                    }, 500);
                }

                // Next card
                function nextCard() {
                    if (currentIndex < totalCards - 1) {
                        goToCard(currentIndex + 1);
                        return true;
                    }
                    return false;
                }

                // Previous card
                function prevCard() {
                    if (currentIndex > 0) {
                        goToCard(currentIndex - 1);
                        return true;
                    }
                    return false;
                }

                // Check if slider is actively in view (not just partially)
                function isSliderActiveInView() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    const scrollY = window.scrollY;

                    // Get slider's absolute position
                    const sliderTop = rect.top + scrollY;
                    const sliderBottom = rect.bottom + scrollY;

                    // Check if viewport center is within slider bounds
                    const viewportCenter = scrollY + (windowHeight / 2);

                    return viewportCenter >= sliderTop && viewportCenter <= sliderBottom;
                }

                // Handle wheel events for navigation AND exit
                let wheelTimeout = null;

                function handleWheel(e) {
                    const isInView = isSliderActiveInView();

                    // If slider not in view, ensure it's unlocked
                    if (!isInView) {
                        if (isSliderLocked) {
                            forceUnlockAndExit();
                        }
                        return;
                    }

                    // If animating, block
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle
                    if (wheelTimeout) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - EXIT slider (go to next section)
                            console.log('Exit slider - DOWN from last slide');
                            forceUnlockAndExit();
                            // Don't prevent default - let browser scroll
                            return;
                        } else {
                            // Not on last slide - go to next card
                            nextCard();
                            e.preventDefault();
                            // Maintain scroll position
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - EXIT slider (go to previous section)
                            console.log('Exit slider - UP from first slide');
                            forceUnlockAndExit();
                            // Don't prevent default - let browser scroll
                            return;
                        } else {
                            // Not on first slide - go to previous card
                            prevCard();
                            e.preventDefault();
                            // Maintain scroll position
                            if (isSliderLocked) {
                                window.scrollTo(0, scrollPositionBeforeLock);
                            }
                        }
                    }

                    // Set throttle
                    wheelTimeout = setTimeout(() => {
                        wheelTimeout = null;
                    }, 400);
                }

                // Handle scroll event for auto lock/unlock
                let scrollTimer = null;
                let lastScrollY = window.scrollY;

                function handleScroll() {
                    if (scrollTimer) return;

                    scrollTimer = setTimeout(() => {
                        const isInView = isSliderActiveInView();
                        const currentScrollY = window.scrollY;
                        const scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';

                        if (isInView && !isSliderLocked && !isUserExiting) {
                            // Slider came into view - lock it
                            lockBodyScroll();
                        } else if (!isInView && isSliderLocked) {
                            // Slider left view - unlock it
                            forceUnlockAndExit();
                        }

                        lastScrollY = currentScrollY;
                        scrollTimer = null;
                    }, 50);
                }

                // Touch support for mobile
                let touchStartY = 0;

                function handleTouchStart(e) {
                    if (!isAnimating) {
                        touchStartY = e.touches[0].clientY;
                    }
                }

                function handleTouchMove(e) {
                    const isInView = isSliderActiveInView();

                    if (!isInView || isAnimating) {
                        return;
                    }

                    const touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;

                    if (Math.abs(diff) > 30) {
                        // Swipe UP (diff > 0)
                        if (diff > 0) {
                            if (currentIndex === totalCards - 1) {
                                // On last slide - exit
                                forceUnlockAndExit();
                            } else {
                                nextCard();
                                e.preventDefault();
                            }
                        }
                        // Swipe DOWN (diff < 0)
                        else if (diff < 0) {
                            if (currentIndex === 0) {
                                // On first slide - exit
                                forceUnlockAndExit();
                            } else {
                                prevCard();
                                e.preventDefault();
                            }
                        }
                        touchStartY = touchEndY;
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll);

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: false
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Initially lock if slider is in view
                    if (isSliderActiveInView()) {
                        lockBodyScroll();
                    }
                }

                init();

                // Maintain scroll position when locked
                let maintainInterval = setInterval(() => {
                    if (isSliderLocked && isSliderActiveInView() && !isUserExiting) {
                        if (window.scrollY !== scrollPositionBeforeLock) {
                            window.scrollTo(0, scrollPositionBeforeLock);
                        }
                    }
                }, 50);

                // Cleanup
                window.addEventListener('beforeunload', () => {
                    if (maintainInterval) {
                        clearInterval(maintainInterval);
                    }
                    forceUnlockAndExit();
                });

            });
        })();
    </script>
    <script>
        (function() {
            const form = document.getElementById('enquiryForm');
            const successDiv = document.getElementById('formSuccessMessage');
            const errorDiv = document.getElementById('formErrorMessage');

            // real-time phone formatting (nice UX)
            const phoneInput = document.getElementById('phone');
            if (phoneInput) {
                phoneInput.addEventListener('input', function(e) {
                    let val = e.target.value.replace(/\D/g, '');
                    if (val.length > 10) val = val.slice(0, 10);
                    if (val.length >= 4 && val.length <= 7) {
                        e.target.value = val.slice(0, 4) + ' ' + val.slice(4);
                    } else if (val.length > 7) {
                        e.target.value = val.slice(0, 4) + ' ' + val.slice(4, 7) + ' ' + val.slice(7, 10);
                    } else {
                        e.target.value = val;
                    }
                });
            }

            // client side validation for better experience (still server side works)
            form.addEventListener('submit', function(e) {
                let isValid = true;
                let errorText = '';

                const name = document.getElementById('name')?.value.trim();
                const email = document.getElementById('email')?.value.trim();
                const phone = document.getElementById('phone')?.value.trim();
                const city = document.getElementById('city')?.value.trim();
                const state = document.getElementById('state')?.value.trim();

                if (!name) {
                    isValid = false;
                    errorText = 'Please enter your full name.';
                } else if (!email || !/^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/.test(email)) {
                    isValid = false;
                    errorText = 'Valid email is required.';
                } else if (!phone) {
                    isValid = false;
                    errorText = 'Phone number is required.';
                } else {
                    const digits = phone.replace(/\D/g, '');
                    if (digits.length < 10 || digits.length > 13) {
                        isValid = false;
                        errorText = 'Enter a valid phone number (10 digits).';
                    } else if (digits.length === 10 && !['6', '7', '8', '9'].includes(digits[0])) {
                        isValid = false;
                        errorText = 'Mobile must start with 6,7,8,9.';
                    }
                }
                if (isValid && !city) {
                    isValid = false;
                    errorText = 'City is required.';
                }
                if (isValid && !state) {
                    isValid = false;
                    errorText = 'State is required.';
                }

                if (!isValid) {
                    e.preventDefault();
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = `<i class="fas fa-exclamation-triangle"></i> ${errorText}`;
                    successDiv.style.display = 'none';
                    setTimeout(() => {
                        errorDiv.style.display = 'none';
                    }, 4000);
                    return false;
                }

                // If valid, we allow laravel submission, but also we can show loading
                const btn = form.querySelector('.btn-submit');
                btn.innerHTML = '<i class="fas fa-spinner fa-pulse"></i> Submitting...';
                btn.disabled = true;
                // success will be shown after redirect or stay, but we don't prevent default
                // Note: the default action sends to laravel route.
                return true;
            });

            // If there are old Laravel errors, show them in error div
            @if ($errors->any())
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Please check the form and try again.';
                setTimeout(() => {
                    errorDiv.style.display = 'none';
                }, 5000);
            @endif

            // If success flash message from session (optional)
            @if (session('success'))
                successDiv.style.display = 'block';
                setTimeout(() => {
                    successDiv.style.display = 'none';
                }, 5000);
            @endif
        })();
    </script>
@endsection
