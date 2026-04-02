
@extends('web.layouts.main')
@section('title', '| Examination Results Portal')
@section('description', 'Examination Results Portal')

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

        .hw100 {
            width: 100px;
            height: 100px;
        }

        .rounded10 {
            border-radius: 10px;
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
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Examination Results Portal </h2>
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


    <section class="events-page-three py-5">
        <div class="container">

            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="text-start">
                        <h3 class="text-start">Latest Result Announcements- Result Out</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>28</h2>
                                        <h4>Jan, 2026</h4>
                                    </div>
                                    <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Brahma Kumaris (Value Education Wing) _ All Course
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: Rajyoga Education and Research Foundation</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>18</h2>
                                        <h4>Dec, 2025</h4>
                                    </div>
                                    <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Pre-PhD Selection Result Winter 2025
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All Departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>17</h2>
                                        <h4>Dec, 2025</h4>
                                    </div>
                                    <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Ph.D. Course Work Examination (SUMMER 2024 Batch_Semester-II)
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All Departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>08</h2>
                                        <h4>Dec, 2025</h4>
                                    </div>
                                    <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            P.G. Paramedic Semester-I Examination, August 2025
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All Departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>29</h2>
                                        <h4>Nov, 2025</h4>
                                    </div>
                                    <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            PG Semester Examination, July 2025
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All Departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>30</h2>
                                        <h4>Oct, 2025</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            PG 4th Semester Examination, July 2025
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: Department of Yoga</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>25</h2>
                                        <h4>Sep, 2025</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Ph.D. Coursework (SUMMER 2024 I Sem) AND IMPROVEMENT PAPER
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>11</h2>
                                        <h4>Sep, 2025</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Paramedical Examination, April 2025
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School: School of Allied Health Sciences</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>07</h2>
                                        <h4>Aug, 2025</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Ph.D. winter 23 Batch 2nd sem
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: All departments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>13</h2>
                                        <h4>June, 2025</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Rajyoga Education & Research Foundation
                                        </a>
                                    </h3>
                                    <div class="text">
                                        <p>School/Department/Institute: Rajyoga Education and Research Foundation</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="events-page-three pt-1 mt-2">
        <div class="container">

            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="text-start">
                        <h3 class="text-start">Recent Results</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>1st</h2>
                                        <h4>Semester</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Pre-PhD Coursework, Winter 23 Batch
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>1st</h2>
                                        <h4>Semester</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Pre-PhD Coursework Summer 2023
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-flex align-items-stretch">
                    <div class="single-event-three d-flex align-items-stretch">
                        <div class="single-event-three__inner d-flex align-items-stretch">
                            <div class="static-content">
                                <div class="top-box">
                                    <div class="date-box">
                                        <h2>2nd</h2>
                                        <h4>Semester</h4>
                                    </div>
                                    {{-- <div class="price-box">
                                        <div class="inner">
                                            <h3>Live</h3>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a href="#">
                                            Pre-PhD Coursework Summer 2023
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="contact-details-style2-area pt-3">
            <div class="container">
                 <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Help and Support </h2>
                <p> If you face any issues accessing your result, or have questions regarding discrepancies or next steps, the following options are available for assistance: </p>
            </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-details-style2-box">
                            <ul class="clearfix">
                                <li>
                                    <div class="contact-details-style2-single">
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <h3> WhatsApp</h3>
                                            <p> <a href="tel:9036983337">+91 9036983337</a> </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-details-style2-single">
                                        <div class="icon">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Mobile</h3>
                                            <p><a href="tel:9233577414">+91 9233577414</a> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="clearfix">
                                <li>
                                    <div class="contact-details-style2-single">
                                        <div class="icon">
                                            <span class="icon-wall-clock"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Office Hours</h3>
                                            <p>Mon-Sat, 9:30 AM - 4:00 PM</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-details-style2-single">
                                        <div class="icon">
                                            <span class="icon-email"></span>
                                        </div>
                                        <div class="text">
                                            <h3>Email</h3>
                                            <p><a href="mailto:COEoffice@miu.edu.in">COEoffice@miu.edu.in</a> </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

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
