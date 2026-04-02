@extends('web.layouts.main')
@section('title', '| MIU Scholarship Policy')
@section('description',
    'Empowering academic excellence through comprehensive financial support and merit-based
    opportunities')

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
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> MIU Scholarship Policy </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> MIU Scholarship Policy </li>
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
            <div class="sec-title text-start pb-4">
                <h2> PhD Programs Scholarship Policy </h2>
                <p>Merit Scholarship: Merit scholarship awarded for all semesters on semester fee - final determination made
                    by the scholarship committee following comprehensive screening and evaluation process.</p>
            </div>

            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> Economic Hardship Scholarships (PhD) </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">Academic Criteria</th>
                                <th scope="col">Financial Criteria</th>
                                <th scope="col">Scholarship Coverage</th>
                                <th scope="col">Additional Requirements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">More than 75% marks in Postgraduate studies</th>
                                <td>Family annual income below ₹6 lakh</td>
                                <td><span class="badge badge-pill badge-info">30%</span></td>
                                <td>Academic Excellence category</td>
                            </tr>
                            <tr>
                                <th scope="row">60% to 75% marks in Postgraduate studies</th>
                                <td>Family annual income below ₹5 lakh</td>
                                <td><span class="badge badge-pill badge-info">20%</span></td>
                                <td>Academic Excellence category</td>
                            </tr>
                            <tr>
                                <th scope="row">More than 80% marks in UG Research (4th year)</th>
                                <td>Family annual income below ₹5 lakh</td>
                                <td><span class="badge badge-pill badge-info">30%</span></td>
                                <td>Research Excellence category</td>
                            </tr>
                            <tr>
                                <th scope="row">Below 60% marks in Postgraduate studies</th>
                                <td>Family annual income below ₹3 lakh</td>
                                <td><span class="badge badge-pill badge-info">20%</span></td>
                                <td>Academic Standing category</td>
                            </tr>
                            <tr>
                                <th scope="row">Contributors, village nominees, donor and founder member nominees</th>
                                <td>Special Categories</td>
                                <td><span class="badge badge-pill badge-success">100%</span></td>
                                <td>Full Scholarship - Special Category</td>
                            </tr>
                            <tr>
                                <th scope="row">Other eligible candidates as determined by committee</th>
                                <td>Additional Categories</td>
                                <td><span class="badge badge-pill badge-info">Up to 30%</span></td>
                                <td>Committee discretion</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </section>


    <section class="blog-style1-area py-3 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-4">
                <h2> Undergraduate & Postgraduate Programs </h2>
                <p>Merit Scholarship Program: Comprehensive merit-based scholarship program covering all semesters on
                    semester fees. Final awards determined by the scholarship committee through rigorous screening and
                    academic evaluation.</p>
            </div>

            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> 12th Grade Academic Excellence Awards </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">Performance Category</th>
                                <th scope="col">Academic Requirement</th>
                                <th scope="col">Scholarship Coverage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Outstanding Achievement</th>
                                <td>More than 95% marks in 12th standard</td>
                                <td><span class="badge badge-pill badge-success">25%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Excellent Performance</th>
                                <td>More than 90% marks in 12th standard</td>
                                <td><span class="badge badge-pill badge-success">20%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Strong Academic Record</th>
                                <td>More than 80% marks in 12th standard</td>
                                <td><span class="badge badge-pill badge-success">15%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Good Academic Standing</th>
                                <td>More than 75% marks in 12th standard</td>
                                <td><span class="badge badge-pill badge-success">10%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="ugc-jrf mb-5">
                <h3 class="mb-4"> Undergraduate Academic Performance Awards </h3>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">Performance Category</th>
                                <th scope="col">Academic Requirement</th>
                                <th scope="col">Scholarship Coverage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Exceptional Achievement</th>
                                <td>More than 90% marks in Undergraduate studies</td>
                                <td><span class="badge badge-pill badge-success">25%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Excellent Performance</th>
                                <td>More than 80% marks in Undergraduate studies</td>
                                <td><span class="badge badge-pill badge-success">20%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Strong Academic Record</th>
                                <td>More than 70% marks in Undergraduate studies</td>
                                <td><span class="badge badge-pill badge-success">15%</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Good Academic Standing</th>
                                <td>More than 60% marks in Undergraduate studies</td>
                                <td><span class="badge badge-pill badge-success">10%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h3 class="mb-5"> <span class="text-warning">Important Notice</span>: Economic hardship scholarships for
                undergraduate and postgraduate programs are exclusively available to students from the State of Manipur and
                require written application with comprehensive financial verification.
            </h3>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
