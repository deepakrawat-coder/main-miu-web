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
                                    Dear Students, Faculty, and Friends,
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It is my pleasure to extend to you this warm welcome to Manipur International University. Being the Pro Vice Chancellor, I have the honour to be part of this excellent academic society and I want to show you some of the exciting prospects that lie ahead for you here.
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    At MIU, it is our privilege to embrace and foster a culture of success, innovation and advocacy in learning, research and the wider community. Our aim is to offer quality education that can be instrumental in the student's achievement of their dreams and play a significant role of bringing value in the whole society.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It is through this vision that we strive to excel in all we do — whether it is the academic experience we provide in our academic programs; the research that students and faculty undertake through innovative programs; or the environment that is welcoming and inclusive of all students at the campus. We are always in a position to transform with a view of offering our students the necessary preparation in order to be in a position to meet the expectations of the society in the global nation.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    The office of the Pro Vice Chancellor aims at improving scholars' performance as well as efficiency in all aspects of MIU's performance and advancing the university's position in the realm of higher learning. We are strongly committed to ensuring our students, faculty, and staff to foster a special commitment towards cultivating an educational community of learners, scholars, and workers with the purpose of learning and personal development.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                   Please, take your time and go through the information provided in this site, as it will help you learn more about our academic programs, research opportunities, and student life on our campus. Please feel free to contact us and find out more on how MIU can assist you achieve your dreams of education and career.


                                </p>
                              

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Best wishes,
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Prof. Dr. Potsangbam Kumar Singh

                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Pro Vice Chancellor (Acting Vice Chancellor)


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
