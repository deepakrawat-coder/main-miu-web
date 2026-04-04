@extends('web.layouts.main')
@section('title', '| Pro Vice Chancellor Message ')
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
                                    Dear Students, Faculty, and Esteemed Stakeholders,
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It is with great pride and a deep sense of responsibility that I extend a warm welcome
                                    to you at Manipur International University. </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    As the Pro Vice Chancellor, I am honored to be part of a progressive academic
                                    institution committed to excellence, innovation, and transformative education. At MIU,
                                    we believe that education is not merely the acquisition of knowledge, but the foundation
                                    for shaping capable, ethical, and future-ready individuals.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Our university is dedicated to fostering an ecosystem that nurtures intellectual
                                    curiosity, critical thinking, and professional competence. Through a carefully designed
                                    blend of academic rigor, skill-based learning, and industry engagement, we strive to
                                    empower our students to achieve their aspirations and contribute meaningfully to
                                    society.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We continuously endeavor to enhance the quality of education, research, and
                                    institutional practices. Whether through our dynamic academic programs, forward-looking
                                    research initiatives, or an inclusive and supportive campus environment, MIU remains
                                    steadfast in its mission to prepare learners for the evolving demands of a global
                                    landscape.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    The Office of the Pro Vice Chancellor is committed to strengthening academic excellence,
                                    operational efficiency, and institutional growth. We aim to cultivate a vibrant academic
                                    community where students, faculty, and staff work collaboratively towards knowledge
                                    creation, innovation, and holistic development.
                                    I encourage you to explore the opportunities that MIU offers and become a part of a
                                    learning environment that inspires growth, ambition, and success. Should you require any
                                    assistance, our team will be pleased to support you in your academic and professional
                                    journey.

                                </p>


                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">With best wishes for your future success,
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Prof. Dr.
                                                Potsangbam Kumar Singh

                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Pro Vice
                                                Chancellor (Acting Vice Chancellor) <br>Manipur International University


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
                src="{{ ('/assets/img/shape/shape-4.png') }}" alt="shape"></div> --}}
    </section>


@endsection
