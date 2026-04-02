@extends('web.layouts.main')
@section('title', '| Refund Policy')
@section('description', 'Refund Policy')

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

        .thead-info {
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
                            <h2> Refund Policy </h2>
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


    <section class="blog-style1-area py-3 mb-5">
        <div class="container">
            <h3 class="mb-3 mt-5"> <span class="text-warning">Reference</span>: UGC D.O Letter No. F.2-71/2022(CPP-II)
                (C-114546) dated 12.06.2024 </h3>
            <div class="btns-box mb-4">
                <a class="btn-one" href="#">
                    <span class="txt">Download Notification </span>
                </a>
            </div>
            <div class="sec-title text-start pb-4">
                <h3> Policy Overview </h3>
                <p class="mb-4">In pursuance with the directions and guidelines contained in the UGC's D.O. letter dated
                    12.06.2024
                    regarding the refund of fees on cancellation of admission/migration students for the academic session
                    2024-25, it is hereby directed that a full refund of fees shall be made by Higher Education Institutions
                    on account of all cancellation of admission/migration of students.</p>

                <h3>Refund Timeline & Conditions</h3>
                <p>For admissions up to 30th September 2024: Full refund of fees shall be made.</p>
                <p class="mb-4">For admissions between 1st October and 31st October 2024: Refund with a deduction of not
                    more than Rs. 1,000/- (Rupees One Thousand) only, as processing fee.</p>

                <h3>Refund Categories</h3>
                <p class="mb-4">For any admission schedule extending/commencing beyond or after 31st October 2024, the
                    following refund percentages shall apply based on when the notice of withdrawal of admission is
                    received:</p>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">Category</th>
                                <th scope="col">Percentage of Refund</th>
                                <th scope="col">Point of Time When Notice is Received</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><span class="badge badge-pill badge-info">100%</span></td>
                                <td>15 days or more before the formally notified last day of admission</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><span class="badge badge-pill badge-info">90%</span></td>
                                <td>Less than 15 days before the formally notified last date of admission</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><span class="badge badge-pill badge-info">80%</span></td>
                                <td>15 days or less after the formally notified last date of admission</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><span class="badge badge-pill badge-info">50%</span></td>
                                <td>30 days or less, but more than 15 days after formally notified last date of admission
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><span class="badge badge-pill badge-info">0%</span></td>
                                <td>More than 30 days after formally notified last date of admission</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="mt-4">Policy Implementation</h3>
                <p class="mb-4">The UGC guidelines regarding the Fee Refund Policy for the academic session 2024-25 are implemented in Manipur International University, Imphal. This policy will remain in force for subsequent academic sessions until the issuance of a revised policy by the UGC.</p>

                <p class="mb-1"><strong>Dr. T. Brajeshwari Devi</strong></p>
                <p class="mb-1">Registrar</p>
                <p class="mb-5">Manipur International University</p>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
