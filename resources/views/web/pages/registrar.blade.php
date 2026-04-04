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
                                    Dear Students, Faculty, and Esteemed Stakeholders,
                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    It gives me immense pleasure to welcome you to Manipur International University (MIU)—an
                                    institution committed to academic excellence, innovation, and holistic development.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Nestled amidst the pristine valleys and scenic blue hills of Manipur, MIU offers an
                                    intellectually stimulating and serene environment that is uniquely conducive to
                                    high-quality learning and research. Our campus is not merely a place of education, but a
                                    vibrant ecosystem where ideas flourish, curiosity is nurtured, and future leaders are
                                    shaped.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    At MIU, we believe that education extends beyond the acquisition of knowledge. It is a
                                    transformative journey that cultivates intellectual depth, practical competence, ethical
                                    values, and a lifelong passion for learning. Our academic framework is designed to
                                    foster the all-round development of individuals—empowering them physically, mentally,
                                    intellectually, and socially to excel in an increasingly complex world.

                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    In today’s rapidly evolving, technology-driven global landscape, the demands on learners
                                    are dynamic and ever-expanding. The integration of advanced technologies, changing
                                    professional paradigms, and global interconnectedness require individuals to be agile,
                                    skilled, and forward-thinking. At MIU, we are deeply committed to equipping our students
                                    with future-ready competencies, ensuring they remain competitive and relevant in the
                                    global marketplace.


                                </p>
                                <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                    Our focus lies in nurturing a culture of innovation, creativity, and research-oriented
                                    learning. Through a supportive academic environment, we strive to ignite young minds,
                                    encourage introspection, and empower individuals to realize their fullest potential—both
                                    as professionals and as responsible members of society.
                                    I encourage all students, scholars, and aspirants to fully leverage the academic
                                    resources, research opportunities, and enriching environment at MIU. May your journey
                                    here be one of discovery, growth, and excellence, leading you to become accomplished
                                    professionals and visionary leaders who contribute positively to the world.



                                </p>
                                {{-- <p class="sec-text wow fadeInUp" data-wow-delay=".3s">
                                  With my best wishes for your success and future endeavors.                                </p> --}}

                                <div class="row align-items-center">
                                    <div class="col-8 col-sm-8">
                                        <div class="re mb-2">
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">With my best wishes for your success and future endeavors. 
                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Prof. T.
                                                Brajeshwari Devi

                                            </p>
                                            <p class="sec-text fw-bold wow fadeInUp mb-0" data-wow-delay=".3s">Registrar <br>Manipur International University


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
