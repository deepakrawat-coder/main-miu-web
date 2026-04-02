@extends('web.layouts.main')
@section('title', '| Faculty Recruitment - 2025')
@section('description', 'Faculty Recruitment - 2025')

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

        .contact-form form .nice-select {
            width: 100% !important;
        }

        tr th ul li {
            list-style: block;
            list-style-type: disc;
        }

        ul li {
            list-style: block;
            list-style-type: disc;
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
                            <h2> Faculty Recruitment - 2025 </h2>
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


    <section class="blog-style1-area mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Faculty Recruitment - 2025 </h2>
                <p> Applications are invited for the following faculty positions </p>

                <h3 class="text-warning mb-2"> RECRUITMENT NOTICE </h3>
                <p> Manipur International University invites applications from eligible candidates for appointment to the
                    following faculty positions in various departments. All appointments will be made as per UGC norms and
                    university regulations.</p>
            </div>

            <div class="ugc-jrf mb-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-info">
                            <tr>
                                <th scope="col">Position</th>
                                <th scope="col">Eligibility Criteria (As per UGC Norms)</th>
                                <th scope="col">Additional Requirements</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Professor</th>
                                <th>
                                    <h3>Essential:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li>PhD degree in relevant field</li>
                                        <li>Minimum 10 years of teaching/research experience in
                                            universities/colleges/recognized institutions</li>
                                        <li>Minimum 10 research publications in peer-reviewed journals</li>
                                        <li>Research score of 120 as per UGC guidelines</li>
                                    </ul>

                                    <h3>Desirable:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li> Post-doctoral research experience</li>
                                        <li> Experience in guiding PhD students</li>
                                        <li> Administrative experience in academic institutions</li>
                                    </ul>
                                </th>
                                <th>
                                    <ul class="ml-4">
                                        <li> NET/SET/SLET qualified</li>
                                        <li> Experience in curriculum development</li>
                                        <li> International publication experience preferred</li>
                                        <li> Age limit: 65 years</li>
                                    </ul>
                                </th>
                            </tr>

                            <tr>
                                <th scope="row">Associate Professor</th>
                                <th>
                                    <h3>Essential:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li>PhD degree in relevant field</li>
                                        <li>Minimum 8 years of teaching/research experience in universities/colleges</li>
                                        <li>Minimum 8 research publications in peer-reviewed journals</li>
                                        <li>Research score of 75 as per UGC guidelines</li>
                                    </ul>

                                    <h3>Desirable:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li> Post-graduate degree with at least 55% marks</li>
                                        <li> Experience in guiding research projects</li>
                                        <li> Participation in conferences and seminars</li>
                                    </ul>
                                </th>
                                <th>
                                    <ul class="ml-4">
                                        <li> NET/SET/SLET qualified</li>
                                        <li> Research experience in reputed institutions</li>
                                        <li> Book publications preferred</li>
                                        <li> Age limit: 60 years</li>
                                    </ul>
                                </th>
                            </tr>

                            <tr>
                                <th scope="row">Assistant Professor</th>
                                <th>
                                    <h3>Essential:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li>Master's degree in relevant field with minimum 55% marks (50% for SC/ST/OBC)
                                        </li>
                                        <li>NET/SET/SLET qualified OR PhD degree</li>
                                        <li>Minimum 2 years of teaching/research experience</li>
                                    </ul>

                                    <h3>For PhD holders:</h3>
                                    <ul class="ml-4 mb-4">
                                        <li>PhD degree in relevant field</li>
                                        <li>Minimum 2 research publications in peer-reviewed journals</li>
                                        <li>Research score of 30 as per UGC guidelines</li>
                                    </ul>
                                </th>
                                <th>
                                    <ul class="ml-4">
                                        <li> Fresh PhD graduates encouraged to apply </li>
                                        <li> Computer proficiency required </li>
                                        <li> Good communication skills </li>
                                        <li> Age limit: 40 years (45 for SC/ST/OBC) </li>
                                    </ul>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h3 class="mb-2"> Application Process & Important Details </h3>
            <p> <strong class="text-danger"> How to Apply: </strong>Interested candidates are required to visit Manipur
                International University campus personally to collect the prescribed application forms from the Front
                Office. The completed application forms must be submitted in person at the university along with all
                required documents and supporting certificates. </p>
            <p><strong class="text-danger">Important Note: </strong>Online applications are not accepted. All candidates
                must physically visit the university premises for form collection and submission as per university
                recruitment policy.</p>

            <h3 class="mb-2">Required Documents:</h3>
            <ul class="ml-4 mb-4">
                <li>Detailed CV with photograph</li>
                <li>Copies of all educational certificates</li>
                <li>Experience certificates</li>
                <li>List of publications with supporting documents</li>
                <li>NET/SET/SLET certificate (if applicable)</li>
                <li>Research score calculation as per UGC guidelines</li>
            </ul>
            <p> <strong class="text-info">Selection Process:</strong> Shortlisted candidates will be called for
                presentation/interview. The selection will be based on academic credentials, research contributions, and
                interview performance.</p>

            <h2 class="mt-4 mb-3">Contact Information</h2>
            <h3 class="mb-1">For queries contact:</h3>
            <p class="mb-1">Registrar, Manipur International University</p>
            <p class="mb-1"><a href="mailto:recruitments@miu.edu.in">Email: recruitments@miu.edu.in</a></p>
            <p class="mb-1"><a href="tel:9036983337">Phone: +91-9036983337</a></p>
            <p class="mb-1">Application Deadline:</p>
            <p class="mb-1">Last Date for Submission:</p>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
