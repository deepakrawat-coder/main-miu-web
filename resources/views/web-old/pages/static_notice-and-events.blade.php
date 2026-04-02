@extends('web.layouts.main')
@section('title', '| Notice and Events')
@section('description', 'Notice and Events')

@section('styles')
    <style>
        .custom-image {
            background-position: center;
        }

        .messageimage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: -55px !important;
        }

        .text-start {
            text-align: start;
        }

        .py-80 {
            padding: 80px 0 50px 0;
        }

        .dept {
            width: 15rem;
        }

        .h200 {
            height: 250px;
        }

        @media (max-width: 480px) {
            .h200 {
                height: auto;
            }
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Notice and Events </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Manipur International University </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="testimonial-style9-area">
        <div class="container">
            <div class="sec-title">
                <h2>Notice and Events</h2>
                <div class="sub-title">
                    <p> Updates </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel-nine owl-nav-style-one owl-theme owl-carousel"
                            data-options='{
                                    "loop": true,
                                    "margin": 30,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": true,
                                    "dots": false,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "2" },
                                    "992":{ "items" : "3" },
                                    "1200":{ "items" : "3" }
                                    }
                                }'>

                            <!--Start Single Testimonial Style9-->
                            <div class="single-testimonial-style9 p-0">
                                <div class="single-blog-style1">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('/assets/images/web-image/ne1.jpeg') }}"
                                                class="w-100 img-fluid" alt="image">
                                        </div>
                                        <div class="category-box">
                                            <div class="dot-box"></div>
                                            <p>MIU Official</p>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="/notice-and-events-details">Patriotic Run – Veterans India</a></h3>
                                        <div class="text pt-0">
                                            <p>A successful Patriotic Run by Veteran India in collaboration with Manipur
                                                International University, followed by fun-filled games with students and...
                                            </p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/notice-and-events-details"> <span class="icon-right-arrow-1"></span>Read More... </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li><span class="icon-calendar"></span><a href="/notice-and-events-details"> 27 January
                                                            2026 </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial-style9 p-0">
                                <div class="single-blog-style1">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('/assets/images/web-image/ne2.jpg') }}"
                                                class="w-100 img-fluid" alt="image">
                                        </div>
                                        <div class="category-box">
                                            <div class="dot-box"></div>
                                            <p>MIU Official</p>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="/notice-and-events-details">Reception of Our Champions</a></h3>
                                        <div class="text pt-0">
                                            <p>A proud day for MIU! Our scholar from the Department of Yoga & Physical
                                                Education has made history by winning...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/notice-and-events-details"> <span class="icon-right-arrow-1"></span>Read More... </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li><span class="icon-calendar"></span><a href="/notice-and-events-details"> 03 September
                                                            2025 </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial-style9 p-0">
                                <div class="single-blog-style1">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('/assets/images/web-image/ne3.jpg') }}"
                                                class="w-100 img-fluid" alt="image">
                                        </div>
                                        <div class="category-box">
                                            <div class="dot-box"></div>
                                            <p>MIU Official</p>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="/notice-and-events-details">Reviving Traditional Utong Ngari Production</a></h3>
                                        <div class="text pt-0">
                                            <p>A heartfelt thank you to everyone who joined the Program on Reviving
                                                Traditional Utong Ngari Production. We are deeply honoured...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/notice-and-events-details"> <span class="icon-right-arrow-1"></span>Read More... </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li><span class="icon-calendar"></span><a href="/notice-and-events-details"> 14 July
                                                            2025 </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial-style9 p-0">
                                <div class="single-blog-style1">
                                    <div class="img-holder">
                                        <div class="inner">
                                            <img src="{{ asset('/assets/images/web-image/ne4.jpg') }}"
                                                class="w-100 img-fluid" alt="image">
                                        </div>
                                        <div class="category-box">
                                            <div class="dot-box"></div>
                                            <p>MIU Official</p>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="/notice-and-events-details">City Farming and Space Utilisation</a></h3>
                                        <div class="text pt-0">
                                            <p>Congratulations to Prof. P. Kumar, (Pro- Vice Chancellor), Prof. Ajit Kumar
                                                Ng(Dean of the School of Biological Sciences)and Associate Professor...</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a href="/notice-and-events-details"> <span class="icon-right-arrow-1"></span>Read More... </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li><span class="icon-calendar"></span><a href="/notice-and-events-details"> 07 July
                                                            2025 </a></li>
                                                </ul>
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


    <section class="blog-style1-area">
        <div class="container">
            <div class="sec-title text-start">
                <h2> Recent Events</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 mb-4">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/re1.jpg') }}" class="w-100 img-fluid"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3">
                            <span class="badge badge-info"> 12th - 20th August 2025 </span>
                            <span class="badge badge-danger">New</span>
                            <div class="mt-1">
                                <span class="badge badge-light text-start text-wrap"> Committee for Grievance Redressal of
                                    Students</span>
                            </div>

                            <h3 class="mt-2"><a href="#">Anti Ragging Day 2025...</a></h3>
                            <div class="text">
                                <p>Anti-Ragging Day, observed as per UGC guidelines, reaffirms the institution's
                                    zero-tolerance...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="#">
                                        <span class="icon-right-arrow-1"></span> View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 mb-4">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/re2.jpg') }}" class="w-100 img-fluid"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3">
                            <span class="badge badge-info"> 24th July 2025 </span>
                            <span class="badge badge-danger">New</span>
                            <div class="mt-1">
                                <span class="badge badge-light text-start text-wrap"> MIU Official </span>
                            </div>

                            <h3 class="mt-2"><a href="#">Manipur International...</a></h3>
                            <div class="text">
                                <p>Manipur International University(MIU) marks a global milestone as Dr. Ajit Kumar
                                    Ngangbam...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="#">
                                        <span class="icon-right-arrow-1"></span> View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 mb-4">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/ne1.jpeg') }}" class="w-100 img-fluid"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3">
                            <span class="badge badge-info"> 15th June 2025 </span>
                            <span class="badge badge-danger">New</span>
                            <div class="mt-1">
                                <span class="badge badge-light text-start text-wrap"> MIU Official </span>
                            </div>

                            <h3 class="mt-2"><a href="#">City Farming and Space</a></h3>
                            <div class="text">
                                <p>Dr. Senjam Jinus Associate Professor, Manipur International University, for his
                                    outstanding work...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="btn-box">
                                    <a href="#">
                                        <span class="icon-right-arrow-1"></span> View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="instructor-courses-area gray-bg">
        <div class="container">
            <div class="sec-title-style5 text-start pb-4">
                <h2> Recent Notices </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Result Out: Ph.D Winter 2023 Batch 2nd Semester
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                                <span class="badge badge-pill badge-danger">New</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        PhD Admission Open - Summer Batch 2025
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-info"> Admission </span>
                                <span class="badge badge-pill badge-danger"> Hot </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Important Notice for Journal Submission
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Results Declared: BSc (Counselling Psychology & Spiritual Health), MSc (Value Education & Yoga), MSc (Counselling Psychology & Spiritual Health)
                                    </a>
                                </h3>
                               <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Recruitment Result for Selected Candidates
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        PG 2nd Semester December 2024 Exam Results
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="instructor-courses-area gray-bg pt-1">
        <div class="container">
            <div class="sec-title-style5 text-start pb-4">
                <h2> Recent Updates </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        B.Sc. Paramedical 4th Semester Examination 2024 (MLT, RIT, OTT)
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Pre-PhD Coursework Winter 23 Batch 1st Semester Results
                                    </a>
                                </h3>
                               <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        PhD Winter 2024 Selection Entrance and Interview Results
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        Diploma in Performing Arts 2024 Final Examination Results
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="single-courses-box-style4 p-3">
                        <div class="single-courses-box-style4__inner">
                            <div class="text-box ml-0">
                                <h3 class="my-2">
                                    <a href="#">
                                        M.A./M.Sc. Yoga 2022 Batch - 3rd Semester 2024 Results
                                    </a>
                                </h3>
                                <span class="badge badge-pill badge-success"> Result </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
