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
            height: 100dvh;
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
            max-width: 1500px;
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
            /* flex: 1; */
            min-height: 320px;
            background: #eef2f6;
            overflow: hidden;
        }

        .card-right img {
            width: 800px;
            height: 400px;
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

        /* ========================================
                                                                                       HERO SECTION - ENHANCED RESPONSIVE FIXES
                                                                                       ======================================== */

        /* Hero Slider Container Fix */
        .th-hero-wrapper {
            position: relative;
            overflow: hidden;
            min-height: 600px;
        }

        .swiper-slide .hero-inner {
            min-height: 700px;
            display: flex;
            align-items: center;
        }

        .th-hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .th-hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.514) 0%, rgba(0, 0, 0, 0.144)) 100%);
        }

        /* Hero Content Responsive */
        .hero-style1 .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .hero-style1 .hero-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 600px;
        }

        .btn-wrap {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* Fixed Enquiry Form - Better Responsive */
        .enquiry-fixed-form {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            z-index: 99;
            width: 420px;
            max-width: 90%;
        }

        /* Hero Custom Position Row */
        .custom_postion {
            position: relative;
            z-index: 2;
        }

        /* ========================================
                                                                                       STACK SLIDER SECTION - ENHANCED RESPONSIVE
                                                                                       ======================================== */

        .stack-slider-section {
            position: relative;
            background: black;
            height: 100dvh;
            overflow: hidden;
        }

        /* Body scroll lock */
        body.slider-active {
            overflow: hidden;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        /* ========== RESPONSIVE BREAKPOINTS ========== */

        /* Tablet (992px and below) */
        @media (max-width: 992px) {

            /* Hero Section */
            .th-hero-wrapper {
                min-height: 500px;
            }

            .swiper-slide .hero-inner {
                min-height: 550px;
                padding: 60px 0;
            }

            .hero-style1 .hero-title {
                font-size: 2.5rem;
            }

            .hero-style1 .hero-text {
                font-size: 1rem;
            }

            /* Enquiry Form - becomes inline below hero content */
            .enquiry-fixed-form {
                position: relative;
                right: auto;
                top: auto;
                transform: none;
                width: 100%;
                max-width: 500px;
                margin: -40px auto 0 auto;
                padding: 0 20px;
            }

            .custom_postion {
                text-align: center;
            }

            .hero-style1 .hero-text {
                margin-left: auto;
                margin-right: auto;
            }

            .btn-wrap {
                justify-content: center;
            }

            /* Stack Slider */
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

        /* Mobile Landscape (768px and below) */
        @media (max-width: 768px) {

            /* Hero Section */
            .th-hero-wrapper {
                min-height: 450px;
            }

            .swiper-slide .hero-inner {
                min-height: 480px;
                padding: 50px 0;
            }

            .hero-style1 .hero-title {
                font-size: 1.8rem;
                margin-bottom: 1rem;
            }

            .hero-style1 .hero-text {
                font-size: 0.9rem;
                margin-bottom: 1.5rem;
            }

            .btn-wrap .th-btn {
                padding: 10px 20px;
                font-size: 0.85rem;
            }

            /* Enquiry Form */
            .enquiry-fixed-form {
                margin-top: -50px;
            }

            .enquiry-fixed-form .bg-white {
                padding: 1.25rem !important;
            }

            .form-header h3 {
                font-size: 1.3rem;
            }

            /* Stack Slider - Mobile: Disable scroll lock for better UX */
            .stack-slider-section {
                height: auto;
                min-height: 550px;
                overflow-y: visible;
            }

            /* Disable body lock on mobile */
            body.slider-active {
                overflow: auto !important;
                position: relative !important;
                top: auto !important;
            }

            .stack-sticky {
                position: relative !important;
                height: auto !important;
                transform: none !important;
                padding: 30px 0;
            }

            .cards-stack {
                height: auto;
                min-height: 480px;
                display: flex;
                flex-direction: column;
            }

            /* Stack cards become stacked vertically on mobile */
            .stack-card {
                position: relative !important;
                margin-bottom: 20px;
                opacity: 1 !important;
                visibility: visible !important;
                transform: translateY(0) scale(1) !important;
                display: none;
            }

            .stack-card.active {
                display: block;
                position: relative !important;
                top: auto !important;
                bottom: auto !important;
            }

            .stack-card.prev,
            .stack-card.next,
            .stack-card.hidden {
                display: none;
            }

            .card-inner {
                flex-direction: column;
            }

            .card-left {
                padding: 20px;
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

            /* Progress Indicator - reposition for mobile */
            .progress-indicator {
                position: relative;
                bottom: auto;
                left: auto;
                transform: none;
                margin: 20px auto 0;
            }

            /* Hide scroll hint on mobile */
            .scroll-hint {
                display: none;
            }
        }

        /* Mobile Small (576px and below) */
        @media (max-width: 576px) {

            /* Hero */
            .hero-style1 .hero-title {
                font-size: 1.5rem;
            }

            .hero-style1 .hero-text {
                font-size: 0.85rem;
            }

            .btn-wrap {
                gap: 10px;
            }

            .btn-wrap .th-btn {
                padding: 8px 16px;
                font-size: 0.75rem;
            }

            /* Form */
            .row-2col {
                flex-direction: column;
                gap: 0;
            }

            .form-group input {
                padding: 0.7rem 0.8rem;
                font-size: 0.85rem;
            }

            .btn-submit {
                padding: 0.8rem;
                font-size: 0.9rem;
            }

            /* Stack Slider */
            .cards-stack {
                min-height: 420px;
            }

            .card-left {
                padding: 15px;
            }

            .card-title {
                font-size: 1rem;
            }

            .card-text {
                font-size: 0.75rem;
            }

            .card-badge {
                font-size: 0.6rem;
            }

            .card-counter {
                font-size: 0.7rem;
            }
        }

        /* Large Desktop Fix (1200px+) */
        @media (min-width: 1200px) {
            .hero-style1 .hero-title {
                font-size: 4rem;
            }

            .hero-style1 .hero-text {
                font-size: 1.2rem;
            }

            .enquiry-fixed-form {
                width: 480px;
            }
        }

        /* ========================================
                                                                                       EXTRA: Navigation buttons for mobile slider
                                                                                       ======================================== */
        .mobile-slider-nav {
            display: none;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .mobile-slider-nav button {
            background: var(--theme-color);
            border: none;
            color: white;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .mobile-slider-nav button:hover {
            background: #ff8c42;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .mobile-slider-nav {
                display: flex;
            }
        }

        @media(max-width: 995px) {
            .feature-sec-1 {
                margin-top: 74px !important;
            }
        }

        //programs css
        /* Course Card Image Container */
        .course-img-thumb {
            position: relative;
            overflow: hidden;
        }

        /* Overlay Styles */
        .course-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--black-color), var(--theme-color));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
        }

        .course-card:hover .course-overlay {
            opacity: 1;
        }

        .overlay-content {
            text-align: center;
            padding: 20px;
            transform: translateY(20px);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .course-card:hover .overlay-content {
            transform: translateY(0);
        }

        .overlay-content h4 {
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .overlay-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.85rem;
            margin-bottom: 15px;
        }

        .overlay-btn {
            display: inline-block;
            background: white;
            color: #d3224d;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .overlay-btn:hover {
            background: #f37021;
            color: white;
            transform: translateX(5px);
        }

        /* Wishlist Icon Position Fix */
        .wishlist-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 15;
            background: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #d3224d;
            transition: all 0.3s ease;
        }

        .wishlist-icon:hover {
            background: #d3224d;
            color: white;
        }

        /* Tab Buttons Styling */
        .course-tabs {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .course-tabs .nav-link {
            padding: 10px 24px;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 40px;
            background: transparent;
            border: 2px solid var(--theme-color);
            color: var(--theme-color);
            transition: all 0.3s ease;
        }

        .course-tabs .nav-link.active,
        .course-tabs .nav-link:hover {
            background: var(--theme-color);
            color: white;
            border-color: var(--theme-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .course-tabs {
                justify-content: center;
                margin-top: 20px;
            }

            .course-tabs .nav-link {
                padding: 6px 16px;
                font-size: 0.8rem;
            }

            .overlay-content h4 {
                font-size: 1rem;
            }

            .overlay-content p {
                font-size: 0.75rem;
            }

            .overlay-btn {
                padding: 6px 16px;
                font-size: 0.7rem;
            }
        }

        .course-card {
            border-radius: 10px;
        }

        .affliation_img {
            max-height: 200px !important;
            height: 200px !important;
        }

        .th-hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .box-title {
            font-weight: 400 !important;
        }

        @media (max-width: 500px) {
            .card-right img {
                height:301px !important;
            }
            .feature-card {
                padding: 8px 5px;
                height: 274px;
            }

            .box-text {
                margin-bottom: 0px !important;
                padding-bottom: 0px !important;
            }

            .img-box1 img {
                display: none !important;
            }

            .about-wrapp {
                display: none !important;
            }

            .affliation_img {
                max-height: 100px !important;
                height: 100px !important;
            }

            .program-none {
                display: none !important;
            }

            .overlay-content h4 {
                line-height: normal !important;
            }

            .counter-wrap1 {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .stats-number {
                font-size: 16px;
            }

            .process-icon {
                margin-bottom: 0px !important;
            }

            .process-card h4 {
                line-height: normal !important;
                margin-bottom: 0px !important;
            }

            .img1,
            .img2,
            .img3 {
                display: none !important;
            }
        }

        .feature-card {
            height: 300px !important;
        }
    </style>
@endsection
@section('content')
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
                                                Shaping the Leaders of Tomorrow</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">Join
                                                An institution committed to intellectual rigor, industry integration, and
                                                transformative learning experiences that shape global professionals.</p>
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
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/1banner.jpg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                Education Engineered for Excellence</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                                Blending academic depth with experiential learning to cultivate innovation,
                                                leadership, and career-ready competencies.</p>
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
                        <div class="th-hero-bg" data-bg-src="{{ asset('/new-miu/banner/2banner.jpg') }}"></div>
                        <div class="container th-container2">
                            <div class="row gy-60 align-items-center custom_postion">
                                <div class="col-xxl-6 col-xl-8 col-lg-9">
                                    <div class="hero-style1">
                                        <div class="hero-text-wrap">
                                            <h2 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                                A Legacy of Learning and Leadership</h2>
                                            <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                                Empowering ambitious minds through a progressive curriculum, distinguished
                                                faculty, and a culture of continuous advancement.</p>
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
        <div class="enquiry-fixed-form d-none d-md-block">
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
                <div class="col-xl-3 col-md-6  col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".2s">
                        <div class="box-icon">
                            <i class="fas fa-graduation-cap text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Applied Learning Ecosystem</h3>
                        <p class="box-text style2">Immersive, practice-driven academic framework </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6  col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".4s">
                        <div class="box-icon">
                            <i class="fas fa-globe-americas text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Distinguished Faculty</h3>
                        <p class="box-text style2">Scholars with academic and industry expertise .</p>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".6s">
                        <div class="box-icon">
                            <i class="fas fa-trophy text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Career Acceleration</h3>
                        <p class="box-text style2">Structured pathways toward employability </p>

                    </div>
                </div>

                <!-- ✅ 4th Card - Font Awesome 6.0 Icons -->
                <div class="col-xl-3 col-md-6 col-sm-6 col-6 feature-card_wrapp">
                    <div class="feature-card wow fadeInUp" data-wow-delay=".8s">
                        <div class="box-icon">
                            <i class="fas fa-users text-dark fs-2"></i>
                        </div>
                        <h3 class="box-title">Innovation-Driven Curriculum</h3>
                        <p class="box-text style2">Future-oriented, adaptive learning models.</p>

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
                                    src="{{ '/new-miu/about/about-300-600.jpg' }}" alt="About"></div>
                            <div class="img2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="position-relative"><img class="mb-25"
                                        src="{{ '/new-miu/about/about-300-200.jpg' }}" alt="About"></div>
                                <div class="position-relative wow fadeInUp" data-wow-delay=".3s"><img
                                        src="{{ '/new-miu/about/about-300-387.jpg' }}" alt="About"></div>
                            </div>
                            <div class="about-wrapp">
                                <div class="discount-wrapp">
                                    <div class="logo"><img src="{{ asset('/new-miu/miu-white.png') }}" alt="img"
                                            width="60" height="60"></div>
                                    <div class="discount-tag"><span class="discount-anime">* 2019 EST * UGC Approved
                                            Since
                                            2019</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">

                        <div class="about-content ms-xxl-4 ps-xxl-2 ms-xl-2">
                            <div class="title-area">
                                <span class="sub-title text-anim mt-2">About the Institution</span>
                                <h2 class="sec-title text-anim2">Advancing Knowledge, Shaping Futures, Creating Global
                                    Impact</h2>
                                <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    MIU University stands as a progressive center of higher education, dedicated to academic
                                    excellence, innovation, and societal contribution. Established with a commitment to
                                    quality and accessibility, the university operates in alignment with UGC regulations and
                                    national education standards. Through a balanced integration of theoretical foundations
                                    and applied learning, MIU fosters intellectual growth, professional competence, and
                                    ethical responsibility among its learners.
                                </p>
                            </div>
                            <div class="about-feature-box">
                                <div class="about-feature wow fadeInUp" data-wow-delay=".3s">
                                    <span class="box-icon"><img src="assets/img/icon/ab-users.svg" alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Academic Rigor & Relevance</h3>
                                        <p class="box-text">
                                            Curriculum meticulously designed to align scholarly knowledge with contemporary
                                            industry requirements, ensuring intellectual and professional preparedness.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-feature wow fadeInUp" data-wow-delay=".4s">
                                    <span class="box-icon"><img src="assets/img/icon/ab-message.svg"
                                            alt="icon"></span>
                                    <div class="box-content">
                                        <h3 class="box-title">Comprehensive Student Development</h3>
                                        <p class="box-text">
                                            A holistic approach emphasizing critical thinking, leadership, communication,
                                            and lifelong learning competencies.
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
    <section class="academic1-area space overflow-hidden" id="program-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-12 col-12">
                    {{-- <div class="title-area text-center text-lg-start mb-75"><span
                            class="sub-title text-anim">ACADEMICS</span>
                        <h2 class="sec-title text-anim2">Schools & Faculties</h2>
                        <p>Our Schools and Faculties bring together experienced academicians and subject experts dedicated
                            to excellence in teaching and research. Each department is designed to foster specialized
                            knowledge, critical thinking, and academic innovation.</p>
                    </div> --}}
                    <div class="title-area text-center text-lg-start mb-75">
                        <span class="sub-title text-anim">AFFILIATIONS & ACCREDITATION</span>
                        <h2 class="sec-title text-anim2">Recognized by Leading Education Bodies</h2>
                        <p>MIU holds prestigious recognitions from top national and international councils. These
                            affiliations validate our commitment to academic excellence, quality education, and adherence to
                            global university standards, ensuring your degree is valued worldwide.</p>
                    </div>
                </div>
                {{-- <div class="col-auto align-self-center">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="program.html"
                            class="th-btn style-border1 th-icon">Explore All</a></div>
                </div> --}}
            </div>

            <div class="row  justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6  col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/All_India_Council_for_Technical_Education_logo.png') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/Association_of_Indian_Universities_Logo.svg') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/national-assessment-and-accreditation-council-01.jpg') }}"
                            alt="Accenture" class="img-fluid affliation_img">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-lg-0 mb-4">
                    <div class="recruiter-card">
                        <img src="{{ asset('/new-miu/affliation/ugc.jpg') }}" alt="Accenture"
                            class="img-fluid affliation_img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-course-area-1 space shape-mockup-wrap">
        <div class="container th-container4">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="title-wrap">
                        {{-- <div class="title-area text-center text-xl-start">
                            <span class="sub-title text-anim">POPULAR COURSES</span>
                            <h2 class="sec-title text-anim2">Pick a course & <span class="d-block">get started your
                                    career</span></h2>
                        </div> --}}
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title text-anim">MIU PROGRAMS</span>
                            <h2 class="sec-title text-anim2">Choose Your Path <span class="d-block">at Manipur
                                    International University</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs course-tabs popularcourse-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active th-btn style-border1" id="diploma-tab"
                                    data-bs-toggle="tab" data-bs-target="#diplomaTab" type="button" role="tab"
                                    aria-selected="true">Diploma</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="ug-tab" data-bs-toggle="tab"
                                    data-bs-target="#ugTab" type="button" role="tab"
                                    aria-selected="false">UG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="pg-tab" data-bs-toggle="tab"
                                    data-bs-target="#pgTab" type="button" role="tab"
                                    aria-selected="false">PG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="phd-tab" data-bs-toggle="tab"
                                    data-bs-target="#phdTab" type="button" role="tab"
                                    aria-selected="false">PhD</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                <!-- ==================== DIPLOMA TAB (4 Cards) ==================== -->
                <div class="tab-pane fade show active" id="diplomaTab" role="tabpanel" aria-labelledby="diploma-tab">
                    <div class="popular-course-wrap1">
                        <div class="row gy-24">
                            <!-- Diploma Card 1 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-1.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>Diploma in Computer Application</h4>
                                                <p class="program-none">Duration: 1 Year | Eligibility: 10+2</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Diploma Card 2 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-2.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>Diploma in Mechanical Engineering</h4>
                                                <p class="program-none">Duration: 3 Year | Eligibility: 10th</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Diploma Card 3 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-3.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>Diploma in Hotel Management</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: 10+2</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Diploma Card 4 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-4.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>Diploma in Pharmacy</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: 10+2 PCB</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== UG TAB (4 Cards) ==================== -->
                <div class="tab-pane fade" id="ugTab" role="tabpanel" aria-labelledby="ug-tab">
                    <div class="popular-course-wrap1">
                        <div class="row gy-24">
                            <!-- UG Card 1 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-5.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>B.Tech Computer Science</h4>
                                                <p class="program-none">Duration: 4 Year | Eligibility: 10+2 PCM</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UG Card 2 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-6.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>B.Com Accounting & Finance</h4>
                                                <p class="program-none">Duration: 3 Year | Eligibility: 10+2 Commerce</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UG Card 3 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-1.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>BA English Literature</h4>
                                                <p class="program-none">Duration: 3 Year | Eligibility: 10+2</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- UG Card 4 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-2.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>BBA Business Administration</h4>
                                                <p class="program-none">Duration: 3 Year | Eligibility: 10+2</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== PG TAB (4 Cards) ==================== -->
                <div class="tab-pane fade" id="pgTab" role="tabpanel" aria-labelledby="pg-tab">
                    <div class="popular-course-wrap1">
                        <div class="row gy-24">
                            <!-- PG Card 1 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-3.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>M.Tech AI & Machine Learning</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: B.Tech</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PG Card 2 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-4.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>MBA Marketing & Finance</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: Bachelor's Degree
                                                </p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PG Card 3 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-5.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>MCA Data Science</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: BCA/B.Sc CS</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PG Card 4 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-6.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>M.Com International Business</h4>
                                                <p class="program-none">Duration: 2 Year | Eligibility: B.Com</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== PhD TAB (4 Cards) ==================== -->
                <div class="tab-pane fade" id="phdTab" role="tabpanel" aria-labelledby="phd-tab">
                    <div class="popular-course-wrap1">
                        <div class="row gy-24">
                            <!-- PhD Card 1 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-1.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>PhD Computer Science</h4>
                                                <p class="program-none">Duration: 3-5 Year | Eligibility: M.Tech/MCA</p>
                                                <a href="#" class=" program-none overlay-btn">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PhD Card 2 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-2.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>PhD Business Administration</h4>
                                                <p class="program-none">Duration: 3-5 Year | Eligibility: MBA</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PhD Card 3 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-3.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>PhD Commerce & Economics</h4>
                                                <p class="program-none">Duration: 3-5 Year | Eligibility: M.Com</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PhD Card 4 -->
                            <div class="col-xxl-3 col-lg-4 col-md-6 col-6">
                                <div class="course-card shadow-none p-0 mb-0">
                                    <div class="course-img-thumb global-img mb-0" style="border-radius:10px;">
                                        <img src="assets/img/popular-course/course-thumb-3-4.jpg" alt="Course">
                                        <div class="course-overlay">
                                            <div class="overlay-content" style="border-radius:10px;">
                                                <h4>PhD English Literature</h4>
                                                <p class="program-none">Duration: 3-5 Year | Eligibility: MA English</p>
                                                <a href="#" class="overlay-btn program-none">Apply Now →</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-wrap mt-50 text-center d-block">
                <a class="th-btn th-icon" href="#">Browse All Categories</a>
            </div>
        </div>
    </section>
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
    <section class="stack-slider-section" id="stackSlider">
        <div class="container pt-5 pb-0 mb-0">
            <div class="events-header">
                <span class="events-subtitle text-white">Upcoming Events</span>
                <h2 class="events-heading text-white">Engage, Learn, Experience Campus Life</h2>
                <p class="events-description text-white">Discover a dynamic calendar of academic, cultural, and
                    professional events designed to enrich learning and student engagement.</p>
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
                                        <span class="card-badge">UPCOMING</span>
                                        <h2 class="card-title">Industry Leadership Talk on Future Career Opportunities</h2>
                                        <p class="card-text">A distinguished session featuring industry leaders sharing
                                            insights on evolving career landscapes, emerging roles, and essential skills
                                            required to succeed in a competitive global environment.</p>
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
                                        <span class="card-badge">WORKSHOP</span>
                                        <h2 class="card-title">Advanced Skill Development Workshop on Emerging Technologies
                                        </h2>
                                        <p class="card-text">An intensive hands-on workshop focused on building practical
                                            expertise in cutting-edge technologies, enhancing technical competencies, and
                                            preparing students for future industry demands.</p>
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
                                        <span class="card-badge">SEMINAR</span>
                                        <h2 class="card-title">Strategy Seminar for Professional Growth and Success</h2>
                                        <p class="card-text">An expert-driven seminar offering guidance on career planning,
                                            professional development strategies, and actionable insights to navigate complex
                                            industry expectations effectively.</p>
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
                                        <span class="card-badge">EVENT</span>
                                        <h2 class="card-title">Annual Academic and Cultural Excellence Fest Celebration
                                        </h2>
                                        <p class="card-text">A flagship campus event celebrating innovation, creativity,
                                            and talent through diverse academic, cultural, and extracurricular activities
                                            fostering holistic student development.</p>
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
                                        <span class="card-badge">TRAINING</span>
                                        <h2 class="card-title">Comprehensive Placement Preparation and Interview Readiness
                                            Program</h2>
                                        <p class="card-text">A structured training initiative focused on aptitude building,
                                            communication enhancement, and interview mastery to maximize student success in
                                            campus recruitment processes.</p>
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
    <section class="placement-section overflow-hidden space" id="placement">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="title-area mb-5">
                        <span class="sub-title">100% Placement Assistance</span>
                        <h2 class="sec-title">Driving Career Outcomes Through Strategic Placement Excellence</h2>
                        <p class="sec-text">A robust placement ecosystem integrating training, industry partnerships, and
                            recruitment drives to ensure consistent and high-quality career opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="stats-number">1000+</h3>
                        <p class="stats-text">Placement Offers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="stats-number">500+</h3>
                        <p class="stats-text">Recruiters </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="stats-number">95%</h3>
                        <p class="stats-text">Placement Rate </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-3">
                    <div class="placement-stats-card text-center">
                        <div class="stats-icon mb-3">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="stats-number">10 LPA </h3>
                        <p class="stats-text">Highest Package </p>
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
                    <h3 class="text-center mb-4" style="color: #0a2540;">Placement Process</h3>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>01</span>
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                &emsp;<h4> Profile Development</h4>
                                <p>Comprehensive resume building and portfolio enhancement </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>02</span>
                                    <i class="fas fa-chalkboard-user"></i>
                                </div>
                                &emsp;<h4> Skill Enhancement</h4>
                                <p>Focused training in aptitude, technical, and communication skills </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>03</span>
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                &emsp; <h4> Interview Readiness</h4>
                                <p>Mock interviews with expert evaluation and feedback </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-5">
                            <div class="process-card text-center">
                                <div class="process-icon">
                                    <span>04</span>
                                    <i class="fas fa-handshake"></i>
                                </div>
                                &emsp; <h4> Career Placement</h4>
                                <p>Final recruitment through campus drives and industry networks </p>
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
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-8">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">Excellence & Distinction</span>
                        <h2 class="sec-title text-anim2">Why MIU Continues to <span class="d-block"> Standout from The
                                Rest</span></h2>
                    </div>
                    <div class="row gy-60">
                        <div class="col-lg-6 col-md-6">
                            <div class="why-card wow fadeInUp" data-wow-delay=".2s">
                                <div class="why-content">
                                    <div class="why-titlebox">
                                        <span class="why-number position-relative">1</span>
                                        <h3 class="box-title"><a href="about.html">Strategic Industry Alignment</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Academic programs co-developed with industry insights to ensure
                                            immediate relevance and long-term career sustainability. </p>
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
                                        <h3 class="box-title"><a href="about.html">World-Class Infrastructure</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Advanced facilities designed to foster innovation, research,
                                            and collaborative learning experiences.
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
                                        <h3 class="box-title"><a href="about.html">Faculty of Distinction</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Academicians and practitioners delivering intellectually
                                            enriching and application-oriented education.</p>
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
                                        <h3 class="box-title"><a href="about.html">Career-Centric Ecosystem</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Integrated placement architecture with training, internships,
                                            and corporate engagement. </p>
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
                                        <h3 class="box-title"><a href="about.html">Skill & Leadership Development</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Focus on developing adaptable, confident, and industry-ready
                                            professionals. </p>
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
                                        <h3 class="box-title"><a href="about.html">Global Academic Outlook</a></h3>
                                    </div>
                                    <div class="box-text-wrap">
                                        <p class="box-text">Exposure to international standards, practices, and
                                            cross-cultural learning environments.</p>
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
    <section class="campus overflow-hidden space pb-0">
        <div class="story-area-1 overflow-hidden">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="title-area text-center text-lg-start">
                            <span class="sub-title text-anim mt-2">MIU Student Stories</span>
                            <h2 class="sec-title text-anim2">Voices of Achievement and Transformation</h2>
                        </div>
                    </div>
                    {{-- <div class="col-auto align-self-end">
                        <div class="sec-btn wow fadeInUp" data-wow-delay=".3s">
                            <a href="program.html" class="th-btn style-border1 th-icon">Discover More Stories</a>
                        </div>
                    </div> --}}
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
                                    <h3 class="box-title"><a href="program.html">Aman Verma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU University provided a strong academic foundation complemented
                                        by practical exposure. The structured training and faculty mentorship played a
                                        pivotal role in helping me secure a rewarding position in a leading organization."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Aman Verma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The learning environment at MIU fostered both confidence and
                                        competence. Industry-oriented curriculum and continuous skill development
                                        initiatives helped me transition seamlessly from academics to a professional career"
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Priya Sharma</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rahul Singh</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU’s emphasis on experiential learning and placement preparation
                                        significantly enhanced my career readiness. The guidance from faculty and training
                                        sessions ensured I performed confidently during recruitment processes."</p>
                                    <h3 class="box-title"><a href="program.html">Rahul Singh</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The university’s holistic approach towards education helped me
                                        develop both technical and interpersonal skills. The placement support system
                                        provided excellent opportunities to begin my professional journey successfully"</p>
                                    <h3 class="box-title"><a href="program.html">Neha Gupta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Arjun Mehta</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"With a focus on real-world applications and continuous learning,
                                        MIU prepared me for industry challenges. The exposure to practical training and
                                        mentorship proved invaluable for my career growth."</p>
                                    <h3 class="box-title"><a href="program.html">Arjun Mehta</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-1.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Sneha Kapoor</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU University offered a perfect blend of academic excellence and
                                        skill development. The structured placement programs and faculty support helped me
                                        secure a position aligned with my career aspirations."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Sneha Kapoor</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-2.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Vikas Yadav</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The emphasis on industry integration and practical learning gave
                                        me a competitive edge. MIU’s placement training and expert guidance were
                                        instrumental in shaping my professional success."
                                    </p>
                                    <h3 class="box-title"><a href="program.html">Vikas Yadav</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 8 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-3.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Pooja Singh</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"From classroom learning to corporate readiness, MIU ensured a
                                        comprehensive development journey. The faculty mentorship and placement initiatives
                                        played a key role in my successful career transition"</p>
                                    <h3 class="box-title"><a href="program.html">Pooja Singh</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 9 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-4.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Rohit Kumar</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU’s focus on skill enhancement and industry exposure helped me
                                        build confidence and expertise. The structured training programs prepared me
                                        effectively for real-world job opportunities."</p>
                                    <h3 class="box-title"><a href="program.html">Rohit Kumar</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 10 - Text changed to MIU Student -->
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Anjali Verma</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"The academic environment at MIU encouraged continuous learning
                                        and growth. The practical exposure and career-focused training helped me secure a
                                        position in a reputed organization."</p>
                                    <h3 class="box-title"><a href="program.html">Anjali Verma</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="story-card">
                                <div class="box-img"><img src="assets/img/story/story-1-5.jpg" alt="img"></div>
                                <div class="story-content">
                                    <h3 class="box-title"><a href="program.html">Karan Malhotra</a></h3>
                                </div>
                                <div class="story-content hover-style">
                                    <div class="quote-icon"><img src="assets/img/icon/quote.svg" alt=""></div>
                                    <p class="box-text">"MIU University provided me with the right platform to develop my
                                        skills and achieve my goals. The placement support and industry exposure were
                                        crucial in shaping my career path."</p>
                                    <h3 class="box-title"><a href="program.html">Karan Malhotra</a></h3>
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
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">Latest News &
                            Blog</span>
                        <h2 class="sec-title text-anim2">Insights, Ideas & Perspectives</h2>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".3s"><a href="event.html"
                            class="th-btn style-border1 th-icon">Our Blogs</a></div>
                </div>
            </div>

            <div class="row gy-4 event-card-wrap">

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
                                    <h5 class="blog-date-title">12</h5>
                                    <p class="blog-date-text">MAR,2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">The Rise of Skill-Based Higher
                                        Education in India</a></h3>
                                <p class="box-text">An in-depth analysis of how skill-driven education models is reshaping
                                    academic frameworks and enhancing employability outcomes across industries.</p>
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
                                    <h5 class="blog-date-title">05</h5>
                                    <p class="blog-date-text">Mar, 2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Bridging the Gap Between Academia and
                                        Industry</a></h3>
                                <p class="box-text">Exploring the importance of industry collaboration in designing
                                    relevant curriculum and preparing students for real-world challenges.</p>
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
                                    <h5 class="blog-date-title">25 </h5>
                                    <p class="blog-date-text">Feb, 2026</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="blog-details.html">Emerging Career Opportunities in
                                        Technology and Management</a></h3>
                                <p class="box-text">A comprehensive overview of high-growth career domains and strategies
                                    students can adopt to remain competitive in evolving job markets.</p>
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
    <section class="faq-area-1 bg-white position-relative space overflow-hidden">

        <div class="container">
            <div class="row gy-30 gx-30 align-items-center justify-content-center">
                <div class="col-xxl-4">
                    <div class="faq-imgbox wow fadeInLeft" data-wow-delay=".3s">
                        <div class="img1"><img src="assets/img/faq/faq-1-2.jpg" alt="image"> <img
                                src="assets/img/faq/faq-1-1.jpg" alt="image"></div>
                        <div class="img2"><img src="assets/img/faq/faq-1-3.jpg" alt="image"></div>
                    </div>
                </div>
          
                <div class="col-xxl-8">
                    <div class="faq-content">
                        <div class="faq-wrap">
                            <div class="title-area">
                                <span class="sub-title text-anim">FAQ</span>
                                <h2 class="sec-title text-anim2">Frequently Ask Questions</h2>
                                <p class="box-text mt-20 wow fadeInUp" data-wow-delay=".3s">Explore detailed answers to commonly asked questions regarding admissions, academic programs, placements, and campus facilities.
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
                                                aria-controls="collapse-1">01. What academic programs are offered at MIU University?</button>
                                        </div>
                                        <div id="collapse-1" class="accordion-collapse collapse show"
                                            aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">MIU University offers a diverse portfolio of undergraduate (UG), postgraduate (PG), Skill, vocational and PhD programs across management, technology, healthcare, and skill-based disciplines, all designed to align with industry requirements and career outcomes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".2s">
                                        <div class="accordion-header" id="collapse-item-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2"
                                                aria-expanded="false" aria-controls="collapse-2">02. Is MIU University recognized and approved by regulatory authorities?</button>
                                        </div>
                                        <div id="collapse-2" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes, MIU University operates in accordance with established regulatory frameworks and complies with UGC guidelines, ensuring credibility, quality education, and recognized academic standards.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".3s">
                                        <div class="accordion-header" id="collapse-item-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                aria-expanded="false" aria-controls="collapse-3">03. Does the university provide placement assistance to students?</button>
                                        </div>
                                        <div id="collapse-3" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">The university offers structured placement support, including training, internships, and recruitment drives, facilitated by strong industry connections and a dedicated placement cell.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".4s">
                                        <div class="accordion-header" id="collapse-item-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                aria-expanded="false" aria-controls="collapse-4">04. Are there opportunities for practical and skill-based learning?</button>
                                        </div>
                                        <div id="collapse-4" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Yes, MIU emphasizes experiential learning through workshops, labs, industry projects, and skill development programs to ensure students gain hands-on knowledge.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".5s">
                                        <div class="accordion-header" id="collapse-item-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                aria-expanded="false" aria-controls="collapse-5">05. What facilities are available on campus for students?</button>
                                        </div>
                                        <div id="collapse-5" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">The campus provides modern infrastructure including smart classrooms, laboratories, libraries, and dedicated spaces for academic and extracurricular activities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-card wow fadeInUp" data-wow-delay=".6s">
                                        <div class="accordion-header" id="collapse-item-6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                aria-expanded="false" aria-controls="collapse-6">06. How can students apply for admission at MIU University?</button>
                                        </div>
                                        <div id="collapse-6" class="accordion-collapse collapse"
                                            aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p class="faq-text">Students can apply through the official website by filling out the application form, submitting required documents, and following the admission guidelines provided.</p>
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
@endsection
@section('scripts')
    {{-- <script>
        (function() {
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

                // Lock body scroll with smooth transition
                function lockBodyScroll() {
                    if (!isSliderLocked) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        isSliderLocked = true;
                        console.log('🔒 Slider LOCKED at scroll:', scrollPositionBeforeLock);
                    }
                }

                // Unlock body scroll with smooth transition
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        const scrollPos = scrollPositionBeforeLock;
                        document.body.classList.remove('slider-active');
                        document.body.style.top = '';
                        isSliderLocked = false;

                        // Smooth scroll restoration
                        requestAnimationFrame(() => {
                            window.scrollTo({
                                top: scrollPos,
                                behavior: 'instant'
                            });
                        });

                        console.log('🔓 Slider UNLOCKED, restored scroll:', scrollPos);
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

                // Update cards position with smooth transitions
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

                // Go to specific card with improved animation handling
                function goToCard(index) {
                    if (isAnimating) return false;
                    if (index < 0 || index >= totalCards) return false;

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

                    // Shorter animation lock for smoother feel
                    setTimeout(() => {
                        isAnimating = false;
                    }, 350);

                    return true;
                }

                // Next card
                function nextCard() {
                    return currentIndex < totalCards - 1 ? goToCard(currentIndex + 1) : false;
                }

                // Previous card
                function prevCard() {
                    return currentIndex > 0 ? goToCard(currentIndex - 1) : false;
                }

                // Improved viewport detection - uses intersection-based approach
                function isSliderInViewport() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;

                    // Slider is "active" when at least 40% is visible
                    const visibleHeight = Math.min(rect.bottom, windowHeight) - Math.max(rect.top, 0);
                    const sliderHeight = rect.height;
                    const visibilityRatio = visibleHeight / sliderHeight;

                    return visibilityRatio > 0.4 && rect.top < windowHeight * 0.6;
                }

                // Debounced scroll handler for lock/unlock
                let scrollTimeout = null;

                function handleScroll() {
                    if (scrollTimeout) {
                        clearTimeout(scrollTimeout);
                    }

                    scrollTimeout = setTimeout(() => {
                        const isInView = isSliderInViewport();

                        if (isInView && !isSliderLocked) {
                            // Slider entered view - lock it
                            lockBodyScroll();
                        } else if (!isInView && isSliderLocked) {
                            // Slider left view - unlock it
                            unlockBodyScroll();
                        }
                    }, 100); // Debounce for smoother detection
                }

                // Improved wheel handler with better throttling
                let lastWheelTime = 0;
                const WHEEL_THROTTLE = 250; // Reduced from 400ms for snappier feel

                function handleWheel(e) {
                    const now = Date.now();

                    // Check if slider is in viewport
                    if (!isSliderInViewport()) {
                        // Not in view - allow normal scrolling
                        if (isSliderLocked) {
                            unlockBodyScroll();
                        }
                        return;
                    }

                    // If not locked yet, lock now
                    if (!isSliderLocked) {
                        lockBodyScroll();
                    }

                    // Block if animating
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle wheel events
                    if (now - lastWheelTime < WHEEL_THROTTLE) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - exit slider smoothly
                            console.log('⬇️ Exit slider - scrolling down from last slide');
                            unlockBodyScroll();
                            // Allow one natural scroll, then re-enable locking
                            setTimeout(() => {
                                // Natural scroll will happen
                            }, 300);
                            return; // Don't prevent - let browser scroll
                        } else {
                            // Go to next card
                            if (nextCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - exit slider smoothly
                            console.log('⬆️ Exit slider - scrolling up from first slide');
                            unlockBodyScroll();
                            setTimeout(() => {
                                // Natural scroll will happen
                            }, 300);
                            return; // Don't prevent - let browser scroll
                        } else {
                            // Go to previous card
                            if (prevCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                }

                // Touch support for mobile with improved handling
                let touchStartY = 0;
                let touchStartTime = 0;

                function handleTouchStart(e) {
                    if (!isAnimating) {
                        touchStartY = e.touches[0].clientY;
                        touchStartTime = Date.now();
                    }
                }

                function handleTouchMove(e) {
                    if (!isSliderInViewport() || isAnimating) {
                        return;
                    }

                    const touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;
                    const swipeTime = Date.now() - touchStartTime;

                    // Require minimum swipe distance and limit swipe time for better UX
                    if (Math.abs(diff) > 50 && swipeTime < 500) {
                        if (diff > 0) {
                            // Swipe UP - next card or exit
                            if (currentIndex === totalCards - 1) {
                                unlockBodyScroll();
                            } else {
                                if (nextCard()) {
                                    e.preventDefault();
                                }
                            }
                        } else {
                            // Swipe DOWN - previous card or exit
                            if (currentIndex === 0) {
                                unlockBodyScroll();
                            } else {
                                if (prevCard()) {
                                    e.preventDefault();
                                }
                            }
                        }
                        touchStartY = touchEndY;
                        touchStartTime = Date.now();
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll, {
                    passive: true
                });

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: true
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Check initial position
                    if (isSliderInViewport()) {
                        lockBodyScroll();
                    }
                }

                init();

                // Cleanup on page unload
                window.addEventListener('beforeunload', () => {
                    if (isSliderLocked) {
                        unlockBodyScroll();
                    }
                });

                // Handle visibility change (tab switching)
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden && isSliderLocked) {
                        unlockBodyScroll();
                    }
                });

            });
        })();
    </script> --}}
    {{-- <script>
        (function() {
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

                // Lock body scroll with smooth transition
                function lockBodyScroll() {
                    if (!isSliderLocked) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        isSliderLocked = true;
                        console.log('🔒 Slider LOCKED at scroll:', scrollPositionBeforeLock);
                    }
                }

                // Unlock body scroll with smooth transition
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        const scrollPos = scrollPositionBeforeLock;
                        document.body.classList.remove('slider-active');
                        document.body.style.top = '';
                        isSliderLocked = false;

                        // Smooth scroll restoration
                        requestAnimationFrame(() => {
                            window.scrollTo({
                                top: scrollPos,
                                behavior: 'instant'
                            });
                        });

                        console.log('🔓 Slider UNLOCKED, restored scroll:', scrollPos);
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

                // Update cards position with smooth transitions
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

                // Go to specific card with improved animation handling
                function goToCard(index) {
                    if (isAnimating) return false;
                    if (index < 0 || index >= totalCards) return false;

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

                    // Shorter animation lock for smoother feel
                    setTimeout(() => {
                        isAnimating = false;
                    }, 350);

                    return true;
                }

                // Next card
                function nextCard() {
                    return currentIndex < totalCards - 1 ? goToCard(currentIndex + 1) : false;
                }

                // Previous card
                function prevCard() {
                    return currentIndex > 0 ? goToCard(currentIndex - 1) : false;
                }

                // UPDATED: Check if section is at least 80% visible in viewport
                function isSliderSufficientlyVisible() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    
                    // Calculate visible portion
                    const visibleTop = Math.max(0, rect.top);
                    const visibleBottom = Math.min(windowHeight, rect.bottom);
                    const visibleHeight = Math.max(0, visibleBottom - visibleTop);
                    
                    // Calculate visibility percentage
                    const totalHeight = rect.height;
                    const visibilityPercentage = (visibleHeight / totalHeight) * 100;
                    
                    // Return true only if 80% or more is visible
                    return visibilityPercentage >= 80;
                }

                // Debounced scroll handler for lock/unlock
                let scrollTimeout = null;

                function handleScroll() {
                    if (scrollTimeout) {
                        clearTimeout(scrollTimeout);
                    }

                    scrollTimeout = setTimeout(() => {
                        const isSufficientlyVisible = isSliderSufficientlyVisible();

                        if (isSufficientlyVisible && !isSliderLocked) {
                            // Slider is 80%+ visible - lock it
                            lockBodyScroll();
                        } else if (!isSufficientlyVisible && isSliderLocked) {
                            // Slider is less than 80% visible - unlock it
                            unlockBodyScroll();
                        }
                    }, 100); // Debounce for smoother detection
                }

                // Improved wheel handler with better throttling
                let lastWheelTime = 0;
                const WHEEL_THROTTLE = 250;

                function handleWheel(e) {
                    const now = Date.now();
                    
                    // Check if slider is sufficiently visible (80%+)
                    if (!isSliderSufficientlyVisible()) {
                        // Not sufficiently visible - allow normal scrolling
                        if (isSliderLocked) {
                            unlockBodyScroll();
                        }
                        return;
                    }

                    // If not locked yet, lock now
                    if (!isSliderLocked) {
                        lockBodyScroll();
                    }

                    // Block if animating
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle wheel events
                    if (now - lastWheelTime < WHEEL_THROTTLE) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - exit slider smoothly
                            console.log('⬇️ Exit slider - scrolling down from last slide');
                            unlockBodyScroll();
                            setTimeout(() => {
                                // Natural scroll will happen
                            }, 300);
                            return; // Don't prevent - let browser scroll
                        } else {
                            // Go to next card
                            if (nextCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - exit slider smoothly
                            console.log('⬆️ Exit slider - scrolling up from first slide');
                            unlockBodyScroll();
                            setTimeout(() => {
                                // Natural scroll will happen
                            }, 300);
                            return; // Don't prevent - let browser scroll
                        } else {
                            // Go to previous card
                            if (prevCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                }

                // Touch support for mobile with improved handling
                let touchStartY = 0;
                let touchStartTime = 0;

                function handleTouchStart(e) {
                    if (!isAnimating) {
                        touchStartY = e.touches[0].clientY;
                        touchStartTime = Date.now();
                    }
                }

                function handleTouchMove(e) {
                    if (!isSliderSufficientlyVisible() || isAnimating) {
                        return;
                    }

                    const touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;
                    const swipeTime = Date.now() - touchStartTime;

                    // Require minimum swipe distance and limit swipe time for better UX
                    if (Math.abs(diff) > 50 && swipeTime < 500) {
                        if (diff > 0) {
                            // Swipe UP - next card or exit
                            if (currentIndex === totalCards - 1) {
                                unlockBodyScroll();
                            } else {
                                if (nextCard()) {
                                    e.preventDefault();
                                }
                            }
                        } else {
                            // Swipe DOWN - previous card or exit
                            if (currentIndex === 0) {
                                unlockBodyScroll();
                            } else {
                                if (prevCard()) {
                                    e.preventDefault();
                                }
                            }
                        }
                        touchStartY = touchEndY;
                        touchStartTime = Date.now();
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll, {
                    passive: true
                });

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: true
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Check initial position
                    if (isSliderSufficientlyVisible()) {
                        lockBodyScroll();
                    }
                }

                init();

                // Cleanup on page unload
                window.addEventListener('beforeunload', () => {
                    if (isSliderLocked) {
                        unlockBodyScroll();
                    }
                });

                // Handle visibility change (tab switching)
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden && isSliderLocked) {
                        unlockBodyScroll();
                    }
                });

            });
        })();
    </script> --}}
    <script>
       (function() {
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
                let unlockTimeout = null;

                // Set total number
                const totalNumSpan = document.getElementById('total-num');
                if (totalNumSpan) {
                    totalNumSpan.textContent = totalCards.toString().padStart(2, '0');
                }

                // Lock body scroll with smooth transition
                function lockBodyScroll() {
                    if (!isSliderLocked) {
                        scrollPositionBeforeLock = window.scrollY;
                        document.body.classList.add('slider-active');
                        document.body.style.position = 'fixed';
                        document.body.style.top = `-${scrollPositionBeforeLock}px`;
                        document.body.style.width = '100%';
                        isSliderLocked = true;
                        console.log('🔒 Slider LOCKED at scroll:', scrollPositionBeforeLock);
                    }
                }

                // Unlock body scroll with NO JITTER
                function unlockBodyScroll() {
                    if (isSliderLocked) {
                        // Clear any pending unlock timeout
                        if (unlockTimeout) {
                            clearTimeout(unlockTimeout);
                        }
                        
                        const scrollPos = scrollPositionBeforeLock;
                        
                        // Remove fixed positioning FIRST
                        document.body.classList.remove('slider-active');
                        document.body.style.position = '';
                        document.body.style.top = '';
                        document.body.style.width = '';
                        isSliderLocked = false;
                        
                        // Use setTimeout to ensure DOM updates before scroll
                        setTimeout(() => {
                            window.scrollTo({
                                top: scrollPos,
                                behavior: 'instant'
                            });
                        }, 10);
                        
                        console.log('🔓 Slider UNLOCKED, restored scroll:', scrollPos);
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

                // Update cards position with smooth transitions
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

                // Go to specific card with improved animation handling
                function goToCard(index) {
                    if (isAnimating) return false;
                    if (index < 0 || index >= totalCards) return false;

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

                    // Shorter animation lock for smoother feel
                    setTimeout(() => {
                        isAnimating = false;
                    }, 350);

                    return true;
                }

                // Next card
                function nextCard() {
                    return currentIndex < totalCards - 1 ? goToCard(currentIndex + 1) : false;
                }

                // Previous card
                function prevCard() {
                    return currentIndex > 0 ? goToCard(currentIndex - 1) : false;
                }

                // CHECK: Section at least 80% visible in viewport
                function isSliderSufficientlyVisible() {
                    const rect = sliderSection.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    
                    // Calculate visible portion
                    const visibleTop = Math.max(0, rect.top);
                    const visibleBottom = Math.min(windowHeight, rect.bottom);
                    const visibleHeight = Math.max(0, visibleBottom - visibleTop);
                    
                    // Calculate visibility percentage
                    const totalHeight = rect.height;
                    const visibilityPercentage = (visibleHeight / totalHeight) * 100;
                    
                    // Return true only if 80% or more is visible
                    return visibilityPercentage >= 80;
                }

                // Debounced scroll handler for lock/unlock with RAF for smoothness
                let ticking = false;
                let lastVisibilityState = false;

                function handleScroll() {
                    if (!ticking) {
                        requestAnimationFrame(() => {
                            const isSufficientlyVisible = isSliderSufficientlyVisible();
                            
                            // Only trigger if state actually changed
                            if (isSufficientlyVisible !== lastVisibilityState) {
                                lastVisibilityState = isSufficientlyVisible;
                                
                                if (isSufficientlyVisible && !isSliderLocked) {
                                    // Slider is 80%+ visible - lock it
                                    lockBodyScroll();
                                } else if (!isSufficientlyVisible && isSliderLocked) {
                                    // Slider is less than 80% visible - unlock it
                                    unlockBodyScroll();
                                }
                            }
                            ticking = false;
                        });
                        ticking = true;
                    }
                }

                // Improved wheel handler with better throttling
                let lastWheelTime = 0;
                const WHEEL_THROTTLE = 250;

                function handleWheel(e) {
                    const now = Date.now();
                    
                    // Check if slider is sufficiently visible (80%+)
                    if (!isSliderSufficientlyVisible()) {
                        // Not sufficiently visible - allow normal scrolling
                        if (isSliderLocked) {
                            unlockBodyScroll();
                        }
                        return;
                    }

                    // If not locked yet, lock now
                    if (!isSliderLocked) {
                        lockBodyScroll();
                    }

                    // Block if animating
                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    // Throttle wheel events
                    if (now - lastWheelTime < WHEEL_THROTTLE) {
                        e.preventDefault();
                        return;
                    }

                    const delta = e.deltaY;

                    // SCROLL DOWN
                    if (delta > 0) {
                        if (currentIndex === totalCards - 1) {
                            // On LAST slide - exit slider smoothly
                            console.log('⬇️ Exit slider - scrolling down from last slide');
                            unlockBodyScroll();
                            return;
                        } else {
                            // Go to next card
                            if (nextCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                    // SCROLL UP
                    else if (delta < 0) {
                        if (currentIndex === 0) {
                            // On FIRST slide - exit slider smoothly
                            console.log('⬆️ Exit slider - scrolling up from first slide');
                            unlockBodyScroll();
                            return;
                        } else {
                            // Go to previous card
                            if (prevCard()) {
                                e.preventDefault();
                                lastWheelTime = now;
                            }
                        }
                    }
                }

                // Touch support for mobile with improved handling
                let touchStartY = 0;
                let touchStartTime = 0;

                function handleTouchStart(e) {
                    if (isSliderSufficientlyVisible() && !isAnimating) {
                        touchStartY = e.touches[0].clientY;
                        touchStartTime = Date.now();
                    }
                }

                function handleTouchMove(e) {
                    if (!isSliderSufficientlyVisible() || isAnimating) {
                        return;
                    }

                    // Ensure slider is locked when touching
                    if (!isSliderLocked && isSliderSufficientlyVisible()) {
                        lockBodyScroll();
                    }

                    const touchEndY = e.touches[0].clientY;
                    const diff = touchStartY - touchEndY;
                    const swipeTime = Date.now() - touchStartTime;

                    // Require minimum swipe distance and limit swipe time for better UX
                    if (Math.abs(diff) > 50 && swipeTime < 500) {
                        if (diff > 0) {
                            // Swipe UP - next card or exit
                            if (currentIndex === totalCards - 1) {
                                unlockBodyScroll();
                            } else {
                                if (nextCard()) {
                                    e.preventDefault();
                                }
                            }
                        } else {
                            // Swipe DOWN - previous card or exit
                            if (currentIndex === 0) {
                                unlockBodyScroll();
                            } else {
                                if (prevCard()) {
                                    e.preventDefault();
                                }
                            }
                        }
                        touchStartY = touchEndY;
                        touchStartTime = Date.now();
                    }
                }

                // Add event listeners
                window.addEventListener('wheel', handleWheel, {
                    passive: false
                });
                window.addEventListener('scroll', handleScroll, {
                    passive: true
                });

                // Touch events for mobile
                sliderSection.addEventListener('touchstart', handleTouchStart, {
                    passive: true
                });
                sliderSection.addEventListener('touchmove', handleTouchMove, {
                    passive: false
                });

                // Initialize
                function init() {
                    updateCards();
                    // Small delay to ensure proper calculation
                    setTimeout(() => {
                        lastVisibilityState = isSliderSufficientlyVisible();
                        if (lastVisibilityState) {
                            lockBodyScroll();
                        }
                    }, 100);
                }

                init();

                // Cleanup on page unload
                window.addEventListener('beforeunload', () => {
                    if (isSliderLocked) {
                        unlockBodyScroll();
                    }
                });

                // Handle visibility change (tab switching)
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden && isSliderLocked) {
                        unlockBodyScroll();
                    }
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
