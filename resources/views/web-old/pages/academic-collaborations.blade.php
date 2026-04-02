@extends('web.layouts.main')
@section('title', '| Academic Collaborations')
@section('description', 'Academic Collaborations')

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
                            <h2> Academic Collaborations </h2>
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


    <section class="blog-style1-area">
        <div class="container">
            <div class="sec-title text-start">
                <h2> Fostering Academic Excellence Through Strategic Partnerships </h2>
                <p> Manipur International University (MIU) is committed to fostering academic excellence through strategic
                    collaborations and partnerships with renowned institutions across India. Our collaborative framework
                    aligns with UGC guidelines and focuses on enhancing educational quality, research capabilities, and
                    student opportunities. </p>
                <p> These partnerships enable resource sharing, faculty exchange, joint research initiatives, and student
                    mobility programs, creating a robust ecosystem for academic growth and innovation. Our collaborations
                    span across various disciplines and contribute significantly to the advancement of higher education in
                    the region. </p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-blog-style1 mb-4 border border-1">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/ac1.jpeg') }}" class="img-fluid hw200 p-3"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3 shadow-none">
                            <span class="badge badge-primary"> Multi-Dimensional Partnership </span>
                            <h3 class="mt-2">Oriental College</h3>
                            <div class="text">
                                <p>MIU has established a comprehensive collaboration with Oriental College, focusing on
                                    holistic academic development and institutional growth...</p>
                            </div>

                            <h5> Areas of Collaboration: </h5>
                            <div class="mt-2 pb-3">
                                <span class="badge badge-secondary text-start text-wrap"> Resource Sharing</span>
                                <span class="badge badge-secondary text-start text-wrap"> Student Exchange</span>
                                <span class="badge badge-secondary text-start text-wrap"> Technical Sharing</span>
                                <span class="badge badge-secondary text-start text-wrap"> Research Collaboration</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-blog-style1 mb-4 border border-1">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/ac2.png') }}" class="img-fluid hw200 p-3"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3 shadow-none">
                            <span class="badge badge-primary"> Agricultural Sciences Partnership </span>
                            <h3 class="mt-2">Central Agricultural University</h3>
                            <div class="text">
                                <p>Strategic partnership with Central Agricultural University to advance agricultural
                                    research, education, and extension services in the Northeast region...</p>
                            </div>

                            <h5> Focus Areas: </h5>
                            <div class="mt-2 pb-3">
                                <span class="badge badge-secondary text-start text-wrap"> Agricultural Research</span>
                                <span class="badge badge-secondary text-start text-wrap"> Faculty Exchange</span>
                                <span class="badge badge-secondary text-start text-wrap"> Joint Programs</span>
                                <span class="badge badge-secondary text-start text-wrap"> Extension Services</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-blog-style1 mb-4 border border-1">
                        <div class="img-holder">
                            <div class="inner h200">
                                <img src="{{ asset('/assets/images/web-image/ac3.jpg') }}" class="img-fluid hw200 p-3"
                                    alt="image">
                            </div>
                        </div>
                        <div class="text-holder pt-3 shadow-none">
                            <span class="badge badge-primary"> Cultural & Academic Alliance </span>
                            <h3 class="mt-2">Central Sanskrit University</h3>
                            <div class="text">
                                <p>Collaboration with Central Sanskrit University to promote Sanskrit studies, cultural
                                    heritage, and traditional knowledge systems...</p>
                            </div>

                            <h5> Collaborative Initiatives: </h5>
                            <div class="mt-2 pb-3">
                                <span class="badge badge-secondary text-start text-wrap"> Language Studies</span>
                                <span class="badge badge-secondary text-start text-wrap"> Cultural Programs</span>
                                <span class="badge badge-secondary text-start text-wrap"> Research Projects</span>
                                <span class="badge badge-secondary text-start text-wrap"> Academic Exchange</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area pt-2">
        <div class="container">
            <div class="sec-title text-start">
                <h2 class="mb-2"> Memorandum of Understanding (MOU) </h2>

                <img src="{{ asset('/assets/images/web-image/ac4.png') }}" class="img-fluid hw200 p-3" alt="image">

                <h3> Information and Library Network Centre (INFLIBNET) </h3>
                <p> Manipur International University has signed a Memorandum of Understanding with the Information and
                    Library Network Centre (INFLIBNET), an autonomous Inter-University Centre of the University Grants
                    Commission (UGC). </p>

                <h3 class="mb-3">Benefits of INFLIBNET Partnership</h3>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Digital Library Access</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">E-Resource Sharing</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Online Databases</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Research Support</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Academic Networking</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Information Services</h3>
                    </div>
                </div>

                <h3 class="mb-3 mt-4">Benefits of Our Collaborations</h3>
                <p>Our strategic partnerships provide numerous advantages to students, faculty, and the institution as a whole, contributing to the overall enhancement of academic standards and research capabilities.</p>
                <div class="d-flex align-items-center flex-wrap">
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Enhanced Learning Opportunities</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Research Excellence</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Faculty Development</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Student Mobility</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Resource Optimization</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Quality Assurance</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Innovation & Technology</h3>
                    </div>
                    <div class="benefit ml-3 mb-3">
                        <h3 class="bg-success text-white p-3">Cultural Exchange</h3>
                    </div>
                </div>

                <h3 class="mb-3 mt-5">Partnership Opportunities</h3>
                <p>Interested in collaborating with Manipur International University?</p>
                <p>We welcome partnerships that align with UGC guidelines and contribute to academic excellence.</p>
                <a href="mailto:collaboration@miu.edu.in"> collaboration@miu.edu.in </a>
            </div>

        </div>
    </section>


@endsection
@section('scripts')
@endsection
