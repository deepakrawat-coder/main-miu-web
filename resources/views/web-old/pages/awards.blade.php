@extends('web.layouts.main')
@section('title', '| Awards')
@section('description', 'Awards')

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

        .hw200 {
            /* width: 200px; */
            object-fit: contain;
            background-color: white;
            height: 200px;
        }

        .breadcrumb-menu li {
            list-style: none !important;
        }

        .kindergarten-program__single-box:hover .static-content {
            transform: translateY(0) !important;
        }

        .img-box img {
            height: 200px;
        }

        .ugc-jrf .thead-info {
            background-color: #17a2b8;
            color: #ffffff;
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{asset('/assets/images/about/about.jpg')}});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Awards & Achievements </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Celebrating Excellence at Manipur International University
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->



    <section class="blog-style1-area pb-3">
        <div class="container">
            <div class="sec-title text-start pb-3">
                <h2> National Yogasana Championships </h2>
            </div>

            <div class="kindergarten-program-sec py-2">
                <div class="container">
                    <div class="sec-title-style2 text-start pb-3">
                        <h3> 36th National Yogasana Championship 2024-2025 </h3>
                        <p> Midnapore, 17th - 19th January 2025 </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="{{ asset('/assets/images/web-image/a1.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Ayekpam Bedashastri Devi </h2>
                                            <p> 1st Position - Women </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Pukhrambam Satyabati Devi </h2>
                                            <p> 2nd Position - Women </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Mr. Ningombam Jit Singh </h2>
                                            <p> 3rd Position </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Mr. M Nipamacha </h2>
                                            <p> 4th Position </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="{{ asset('/assets/images/web-image/a2.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Kh Lamnganbi </h2>
                                            <p> 2nd Position </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Laishram Sanatombi Chanu </h2>
                                            <p> 3rd Position </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kindergarten-program-sec py-2">
                <div class="container">
                    <div class="sec-title-style2 text-start pb-3">
                        <h3> 35th National Traditional Yogasana Championship 2025 </h3>
                        <p> Kanchrapara North 24 Parganas, 6th - 8th June 2025 </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Ayekpam Bedashastri Devi </h2>
                                            <p> 1st Position - Women </p>
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


    <section class="blog-style1-area pb-3">
        <div class="container">
            <div class="sec-title text-start pb-3">
                <h2> International Yogasana Championships </h2>
            </div>

            <div class="kindergarten-program-sec py-2">
                <div class="container">
                    <div class="sec-title-style2 text-start pb-3">
                        <h3> 10th World Yogasana Championship 2025 </h3>
                        <p> Hanoi, Vietnam </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Ayekpam Bedashastri Devi </h2>
                                            <p> Gold Medal - Women </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Mr. M Nipamacha </h2>
                                            <p> Gold Medal - Sr Men </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Ms. Pukhrambam Satyabati Devi </h2>
                                            <p> Gold Medal - Sr Women </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Mr. Ningombam Jit Singh </h2>
                                            <p> Gold Medal - Sr Men </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kindergarten-program-sec py-2">
                <div class="container">
                    <div class="sec-title-style2 text-start pb-3">
                        <h3> 8th Indo Nepal International Yoga Championship 2025 </h3>
                        <p> Pokhra, Nepal </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 text-center">
                            <div class="kindergarten-program__single-box wow fadeInLeft">
                                <div class="decor"><img src="{{ asset('/assets/images/shape/decor.png') }}" alt=""></div>
                                <div class="kindergarten-program__single-box__inner">
                                    <div class="static-content">
                                        <div class="img-box">
                                            <img src="https://placehold.co/200x200" alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Pukhrambam Satyabati Devi </h2>
                                            <p> 1st Position - Sr Women </p>
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


    <section class="blog-style1-area pb-3">
        <div class="container">
            <div class="sec-title text-start pb-4">
                <h2> UGC NET & JRF Achievers </h2>
            </div>

            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> UGC JRF Achieve </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Name</th>
                                <th scope="col">Award</th>
                                <th scope="col">Exam Date</th>
                                <th scope="col">Result Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Yoga</td>
                                <td>Kshetrimayum Brajagopal Singh</td>
                                <td>JRF UGC</td>
                                <td>Dec 2024</td>
                                <td>22/02/25</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>English</td>
                                <td>Monica Potsangbam</td>
                                <td> JRF UGC</td>
                                <td>Dec 2024</td>
                                <td>28/03/25</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Environmental Science</td>
                                <td>Bishwanath Singh Langpoklakpam</td>
                                <td>JRF UGC</td>
                                <td>June 2025</td>
                                <td>27/07/25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> UGC NET Assistant Professor Qualifiers </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Name</th>
                                <th scope="col">Award</th>
                                <th scope="col">Exam Date</th>
                                <th scope="col">Result Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Yoga</td>
                                <td>Meetali Sanasam</td>
                                <td>UGC NET Asst Prof</td>
                                <td>July 2022</td>
                                <td>15/11/22</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Yoga</td>
                                <td>K Brajagopal Singh</td>
                                <td> UGC NET Asst Prof</td>
                                <td>Dec 2023</td>
                                <td>26/02/24</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Yoga</td>
                                <td>Mintu Viswas</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Yoga</td>
                                <td>Laishram Premi Devi</td>
                                <td>UGC NET PhD Research</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Yoga</td>
                                <td>B Singh Kshetrimayum</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                             <tr>
                                <th scope="row">6</th>
                                <td>Social Work</td>
                                <td>T Geetchandra Meitei</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>English</td>
                                <td>Monica Potsangbam</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Environmental Science</td>
                                <td>L B Singh</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2024</td>
                                <td>17/10/24</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Environmental Science</td>
                                <td>Bishwanath Singh Langpoklakpa</td>
                                <td>UGC NET Asst Prof</td>
                                <td>Dec 2024</td>
                                <td>24/02/25</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Social Work</td>
                                <td>G M Takhellambam</td>
                                <td>UGC NET Asst Prof</td>
                                <td>June 2025</td>
                                <td>21/07/25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> PhD Fellowship Recipients </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Name</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Akshay Rajukar</td>
                                <td>Mahatma Jyotiba Phule Research Fellowship</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ruth Zingkhai</td>
                                <td>National Fellowship of Schedule Tribe (NFST)</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lozy Kamei</td>
                                <td>National Fellowship of Schedule Tribe (NFST)</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Sezolu Puro</td>
                                <td>National Fellowship of Schedule Tribe (NFST)</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Meeranda Ningthoujam</td>
                                <td>National Fellowship for Scheduled Caste Students (NFSC)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="ugc-jrf mb-5">
                <h2 class="mb-4"> National Coaching & Official Roles </h2>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                        <div class="nc border border-1 mb-3 border-info p-3">
                            <p class="font-weight-bold"> Chief Coach & Official </p>
                            <h3> Mr. Potsangbam Arunkumar </h3>
                            <p> Accompanied as Chief Coach cum Official </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                        <div class="nc border border-1 mb-3 border-info p-3">
                            <p class="font-weight-bold"> Coach & Official </p>
                            <h3> Mr. H David </h3>
                            <p> Research Scholar - Coach cum Official </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                        <div class="nc border border-1 mb-3 border-info p-3">
                            <p class="font-weight-bold"> International Coach & Judge Qualification </p>
                            <h3> Ayekpam Bedashastri Devi </h3>
                            <p> Merit Certificate 2020-2021 - All India Yoga Culture Federation </p>
                        </div>
                    </div>
                </div>
            </div>


             <div class="ugc-jrf mb-5">
                <h2 class="mb-4 font-weight-bold text-success text-center"> Congratulations to all our achievers! </h2>
                <p class="text-center"> "Excellence is not a skill, it's an attitude" - Ralph Marston </p>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
