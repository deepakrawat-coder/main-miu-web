@extends('web.layouts.main')
@section('title', '| Registrar Message ')
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
                                   Dear Students, Faculty, and Friends,
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Manipur International University, with its campuses spread across the pristine lush green valley and blue hills in the serene environment of the unique valley of Manipur state India, is an ideal place conducive to high quality learning.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Education and learning, the acquisition of knowledge, skills and values aids the all-round growth of the physical, mental, intellectual and spiritual aspects of an individual, leading to career growth and self-development.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   In the present Hi-tech era and globalization, technology influences occupation, working systems and lifestyle; this situation demands to the individuals a need to prepare for a space in the hi-tech competitive world and tech-savvy skills are a must for advancing their careers in the global marketplace.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Learning, however, is complex, it is so exciting when interested and well heavy when forced, with all technical support of modern world, it has not changed much, it cannot be forced. The "National Education Policy 2020" and the "National Science, Technology and Innovation Policy 2020" emphasize Research and Innovation including multidisciplinary and interdisciplinary researches from young age to enable our academia and students compete in the global tech scenario and contribute to National growth and development.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                  MIU emphasizes in inculcating scientific learning, research mindedness, creative thinking, innovations and gaining skills to suit the modern hi-tech era as well as maintain an environment to nurture talent and ignite their minds to facilitate learning with introspection which is enlightening and empowering to elevate them to ideal-character individuals.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   I hope all aspirants and research scholars will make the most of the facilities of the University to make learning enjoyable, exciting and to start a process to elevate self to the highest to become an accomplished and competent academic scholar and societal leader contributing to the betterment of the world.


                                </p>

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Best wishes,
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Prof. T. Brajeshwari Devi

                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Registrar


                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-4">
                                        <div class="re-logo">
                                            <img src="{{ asset('/new-miu/web-logo.png') }}" alt="Stadum">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-top="0%" data-left="0%"><img
                src="assets/img/shape/shape-3.png" alt="shape"></div>
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="4%" data-left="0%"><img
                src="assets/img/shape/shape-4.png" alt="shape"></div>
    </section>


@endsection
