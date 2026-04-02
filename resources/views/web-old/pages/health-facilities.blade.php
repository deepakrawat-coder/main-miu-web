@extends('web.layouts.main')
@section('title', '| Constituent Colleges')
@section('description', 'Constituent Colleges')

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

        .hw150 {
            width: 150px;
            height: 150px;
        }

        .rounded10 {
            border-radius: 10px;
        }

        .enterprise-plan__content__inner:before {
            background-color: transparent;
        }

        .custom .enterprise-plan__content__inner {
            max-width: 100%;
            width: 100%;
            background-color: transparent;
            border: none;
            border-radius: 6px;
            padding: 50px;
            box-shadow: none;
            margin: 10px 0;
        }

        .custom .enterprise-plan__content__inner ul li {
            color: gray;
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
                            <h2> Health Facilities </h2>
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
            <div class="sec-title text-start pb-3">
                <h2> Health Facilities </h2>
                <p> At Manipur International University (MIU), we understand that good health is essential for academic
                    success and personal growth. The University is committed to providing a safe, healthy, and supportive
                    environment for all students, faculty, and staff. </p>

                <div class="btns-box">
                    <a class="btn-one" href="#">
                        <span class="txt">
                            UGC Guidelines Compliant
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Comprehensive Medical Support </h2>
                <p> MIU ensures access to quality healthcare through a network of trusted partner hospitals and healthcare
                    institutions. These facilities provide medical support for both routine and emergency needs of our
                    university community. </p>
            </div>


            <div class="sec-title text-start pb-3 mt-4">
                <h2> Our Partner Hospitals </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c1.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3 class="mb-3">
                                    <a href="#">
                                        JR Hospital and Research Institute
                                    </a>
                                </h3>
                                <a class="btn-one btn-one--style5" href="#">
                                    <span class="txt"> <i class="icon-right-arrow-1"></i> Visit Website </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3 w-100 h-100">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c7.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3 class="mb-3">
                                    <a href="#">
                                        Langol View Institute of Nursing and Paramedical sciences
                                    </a>
                                </h3>
                                <a class="btn-one btn-one--style5" href="#">
                                    <span class="txt"> <i class="icon-right-arrow-1"></i> Visit Website </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3 w-100 h-100">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c8.jpg') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3 class="mb-3">
                                    <a href="#">
                                        Imphal Hospital & Research Centre
                                    </a>
                                </h3>
                                <a class="btn-one btn-one--style5" href="#">
                                    <span class="txt"> <i class="icon-right-arrow-1"></i> Visit Website </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3 w-100 h-100">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c10.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3 class="mb-3">
                                    <a href="#">
                                        Irengbam Thamcha Devi Nursing and Health Care Research Institute
                                    </a>
                                </h3>
                                <a class="btn-one btn-one--style5" href="#">
                                    <span class="txt"> <i class="icon-right-arrow-1"></i> Visit Website </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('scripts')
@endsection
