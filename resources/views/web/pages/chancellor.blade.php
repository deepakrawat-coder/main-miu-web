@extends('web.layouts.main')
@section('title', '| Chancellor Message ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
    <style>
        .animated-border-box {
            position: relative;
            padding: 2px;
            /* border thickness */
            border-radius: 16px;
            background: #472c2f;
            background-size: 600% 600%;
            animation: gradientBorder 8s ease infinite;
        }

        .animated-border-box>div {
            border-radius: 14px;
            background: #fff;
        }

        /* Animation */
        @keyframes gradientBorder {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
@endsection
@section('content')


    <section class="scholar-area scholar-style position-relative space-top overflow-hidden">
        <div class="container mb-4">
            <div class="row gy-60 justify-content-center">
                <div class="col-xl-9">
                    <div class="animated-border-box">

                        <div class="scholar-content z-index-common ms-xxl-4 ms-xl-2 bg-white p-4 shadow-sm"
                            style="border-radius: 16px">
                            <div class="title-area  text-lg-start mt-3 mb-1">
                                <span class="sub-title text-anim">Welcome to MIU</span>
                                <h2 class="sec-title text-anim2">Welcome message</h2>
                                <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".3s">
                                    Dear Students, Faculty, Staff, and Visitors,
                                </p>
                                <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".3s">Welcome to Manipur International
                                    University.</p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It is both an honor and a privilege to serve as the Chancellor of this esteemed
                                    institution. At MIU, we are committed to fostering a culture defined by academic
                                    excellence, innovation, and inclusivity, where every learner is empowered to realize
                                    their fullest potential.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Our university reflects a strong legacy of achievement and an unwavering commitment to
                                    shaping future-ready leaders. We provide a dynamic academic environment that nurtures
                                    intellectual growth, professional competence, and ethical responsibility. Our
                                    distinguished faculty serve not only as educators but as mentors and thought leaders,
                                    driving impactful research and knowledge creation.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We firmly believe that education is a transformative force that shapes individuals and
                                    contributes meaningfully to society. Our diverse and vibrant campus encourages
                                    collaboration, critical inquiry, and lifelong learning.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    As we move forward, we remain dedicated to advancing academic excellence through
                                    innovative programs, interdisciplinary engagement, and a strong focus on societal
                                    progress.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                  I invite you to explore our university and become a part of this inspiring journey.
                                </p>
                                {{-- <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We appreciate your interest in Manipur International University. Let's work together
                                    towards
                                    a brighter future.
                                </p> --}}

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Warm regards,
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Dr. Hari
                                                kumar
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Chancellor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4">
                                        <div class="re-logo">
                                            <img src="{{ asset('/new-miu/weblogo.png') }}" alt="Stadum">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-top="0%" data-left="0%"><img
                src="{{ asset('/assets/img/shape/shape-3.png') }}" alt="shape"></div>
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="4%" data-left="0%"><img
                src="{{ asset('/assets/img/shape/shape-4.png') }}" alt="shape"></div> --}}
    </section>


@endsection
