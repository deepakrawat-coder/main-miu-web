@extends('web.layouts.main')
@section('title', '| Alumni')
@section('description', 'Alumni')

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

        li {
            list-style: block;
        }

        .kindergarten-program__single-box:hover .static-content {
            transform: translateY(0) !important;
        }

        .img-box img {
            height: 200px;
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
                            <h2> MIU Alumni Association </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Manipur International University </li>
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
            <div class="sec-title text-start">
                <h2> MIU Alumni Association </h2>
                <p> Established on 21st June 2025 </p>
                <p> Under Clause 35(2) of the Central Universities Act 2009 </p>
            </div>

            <div class="association">
                <div class="sec-title text-start">
                    <h2> About the Association </h2>
                    <p> The Alumni Association of Manipur International University was established to promote the objectives
                        of the University, maintain contacts and solidarity among graduates, and raise funds for the
                        University's development. </p>

                    <blockquote class="text-info font-weight-bold">
                        Approved by: Executive Council (30th May 2025) and Academic Council (16th June 2025)
                    </blockquote>

                    <h3>Objectives</h3>
                    <ol type="1" class="ml-4 mt-2">
                        <li> Promote the objectives of Manipur International University </li>
                        <li> Maintain contacts and solidarity among graduates </li>
                        <li> Support the development of the University through fundraising </li>
                        <li> Track alumni progress, aspirations, and achievements </li>
                        <li> Share resources and maintain long-term fraternity</li>
                    </ol>
                </div>
            </div>


            <div class="kindergarten-program-sec py-2">
                <div class="container">
                    <div class="sec-title pb-3">
                        <h2> Executive Committee </h2>
                        <p> Ex-officio Patron: The Vice-Chancellor </p>
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
                                            <h2> President </h2>
                                            <p> Dr. Maran (D.Litt.) </p>
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
                                            <h2> Vice President </h2>
                                            <p> Dr. Senthilkumar (D.Sc.) </p>
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
                                            <h2> Vice President </h2>
                                            <p> Dr. Noren (Ph.D.) </p>
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
                                            <h2> Convenor </h2>
                                            <p> Dr. Monalisa. Kh. (Ph.D.) </p>
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
                                            <h2> Convenor </h2>
                                            <p> Kemi Wahengbam (M.Sc. Yoga) </p>
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
                                            <h2> Member </h2>
                                            <p> Premi (M.Sc. Yoga) </p>
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
                                            <img src="{{ asset('/assets/images/web-image/am1.jpg') }}" class="img-fluid"
                                                alt="image">
                                        </div>
                                        <div class="title-box">
                                            <h2> Member </h2>
                                            <p> Brajagopal (M.Sc. Yoga) </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-3">All office-bearers and members are elected for a term of three years.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4">
        <div class="container">
            <div class="sec-title text-start pb-2">
                <h2 class="mb-3"> Membership Information </h2>

                <h3>Eligibility</h3>
                <p> Membership is open to all degree holders of the University, including holders of diplomas and
                    certificates. </p>

                <h3> Membership Fees </h3>
                <ul class="ml-4 my-2">
                    <li> Annual Membership: ₹500 per year</li>
                    <li> Life Membership: ₹1,000 </li>
                </ul>
                <p>(Fees subject to revision by the Executive Council)</p>

                <h3> Voting Rights & Elections </h3>
                <p>Members are entitled to vote or stand for election if they have:</p>
                <ul class="ml-4 my-2">
                    <li> Been a member of the Association for at least one year prior to the election date </li>
                    <li> Held a degree from the University for at least five years </li>
                </ul>
                <p> Note: The one-year membership condition did not apply to the first election. </p>
            </div>
        </div>
    </section>

    <section class="blog-style1-area py-4">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Fund Management </h2>
                <p> The funds of the Association are managed by the Finance Officer of the University, who maintains a
                    separate account for this purpose. All financial operations are conducted transparently and in
                    accordance with University regulations. </p>
            </div>
        </div>
    </section>

    <section class="blog-style1-area py-4">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Contact Us </h2>
                <p> For any queries or difficulties in operating any clause of the Alumni Association guidelines, please
                    contact the Vice-Chancellor's office. The Vice-Chancellor's decision on such matters shall be final.
                </p>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
