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
                                    Dear Students,
                                </p>
                                <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".3s">Greetings from Manipur
                                    International University.</p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It is my privilege to extend my best wishes to all students as you embark on your
                                    academic journey with us. The Office of the Controller of Examinations plays a pivotal
                                    role in upholding the integrity, transparency, and credibility of the university’s
                                    evaluation system.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    At MIU, we are committed to ensuring a fair, robust, and student-centric examination
                                    process that accurately reflects academic performance and learning outcomes. Our
                                    evaluation framework is designed to maintain the highest standards of confidentiality,
                                    consistency, and academic rigor, while also supporting continuous improvement and
                                    innovation in assessment practices.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We encourage all students to approach their academic responsibilities with dedication,
                                    discipline, and a spirit of excellence. Examinations are not merely a measure of
                                    knowledge, but an opportunity to demonstrate understanding, analytical ability, and
                                    personal growth.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    The Examination Department remains dedicated to providing timely support, clear
                                    communication, and efficient processes to facilitate a smooth and stress-free
                                    examination experience for every student.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   I extend my sincere wishes for your success and encourage you to make the most of the academic opportunities available at MIU.
                                </p>
                                {{-- <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We appreciate your interest in Manipur International University. Let's work together
                                    towards
                                    a brighter future.
                                </p> --}}

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">With best wishes,
                                            </p>
                                            {{-- <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Dr. Hari
                                                kumar
                                            </p> --}}
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Controller of Examinations (COE)<br>Manipur International University


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
