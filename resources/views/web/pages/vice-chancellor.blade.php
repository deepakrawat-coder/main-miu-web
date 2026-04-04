@extends('web.layouts.main')
@section('title', '| Vice Chancellor Message ')
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
                                <h2 class="sec-title text-anim2">Message from the Vice Chancellor</h2>
                                <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".3s">
                                   Dear Students, Faculty Members, and Distinguished Visitors,
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   It is both an honor and a privilege to welcome you to Manipur International University.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Our university has a rich history of accomplishments and firm dedication to shaping future leaders. We offer a supportive setting that fosters personal and professional development. Our esteemed faculty members serve as educators, mentors, and trailblazers, spearheading cutting-edge research.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                  We are dedicated to upholding our legacy of excellence by introducing innovative programs, forging interdisciplinary partnerships, and striving for societal impact.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Feel free to explore our website to discover more about our programs, research projects, and vibrant campus atmosphere


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   We appreciate your interest in Manipur International University. Let's work together towards a brighter future.


                                </p>
                                

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Best wishes,
                                            </p>
                                           
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Vice Chancellor
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
                src="assets/img/shape/shape-3.png" alt="shape"></div>
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="4%" data-left="0%"><img
                src="assets/img/shape/shape-4.png" alt="shape"></div> --}}
    </section>


@endsection
