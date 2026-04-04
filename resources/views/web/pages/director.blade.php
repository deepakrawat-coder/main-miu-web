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
                                    It gives me immense pleasure to welcome you to Manipur International University.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    At MIU, we are committed to fostering an academic environment that promotes excellence,
                                    innovation, and meaningful engagement. As the Director of Admissions, I take pride in
                                    inviting you to explore an institution that is dedicated to shaping future-ready
                                    professionals through quality education and holistic development.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    We firmly believe that every learner possesses the potential to achieve excellence when
                                    guided by the right opportunities and mentorship. Whether you are an aspiring student, a
                                    researcher, or a valued member of the academic community, MIU offers a supportive
                                    ecosystem designed to help you grow, excel, and succeed.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Recognized among the emerging private universities in Manipur, MIU emphasizes
                                    industry-aligned programs, practical learning, and a vibrant campus experience. Through
                                    our academic offerings and student-centric approach, we strive to create pathways that
                                    lead to both personal fulfillment and professional success.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    As you explore our website, you will discover the diverse opportunities that await
                                    you—from innovative programs to a dynamic learning environment. Whether you are
                                    considering joining us, are already part of our university, or are one of our proud
                                    alumni, you remain an integral part of our journey toward excellence.
                                    I extend my sincere gratitude for your interest and support. We look forward to
                                    welcoming you to the MIU community and being a part of your academic and professional
                                    journey.




                                </p>
                                {{-- <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                  With my best wishes for your success and future endeavors.                                </p> --}}

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Warm regards,
                                            </p>
                                            {{-- <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Prof. T.
                                                Brajeshwari Devi

                                            </p> --}}
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Director – Admissions <br>Manipur International University


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
