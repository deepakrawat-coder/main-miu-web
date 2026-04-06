@extends('web.layouts.main')
@section('title', '| IQAC')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
    <style>
        .professor-card {
            height: 200px;
        }

        @media (max-width: 768px) {
            .professor-card {
                height: auto;
            }
        }
    </style>
@endsection
@section('content')




    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">IQAC</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>IQAC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="professor-area-1 position-relative space overflow-hidden" id="professor-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">iqac</span>
                        <h2 class="sec-title text-anim2">About IQAC</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <h4 class="sec-title text-anim2 mb-0">Vision</h4>
                    <p>Developing system of conscious, consistent and catalytic improvement in the overall performance of
                        institution and keeping the institution abreast with quality sustenance activities.</p>

                    <p> - The Internal Quality Assurance Cell (IQAC) at Manipur International University was established on
                        8th May 2021 to institutionalize the process of quality enhancement and sustenance in all key areas.
                        IQAC functions as a nodal point for strategizing various Quality plans that relate to faculty as
                        well as students.</p>
                </div>
            </div>


            <h4 class="sec-title text-anim2 mb-4">IQAC Team Members</h4>
            <div class="row gy-30">
                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> COORDINATOR</span></p>
                            <h3 class="box-title">Prof. I. Tomba Singh</h3>
                            <p class="box-text">IQAC Coordinator</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-9862275312" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-9862275312</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> JOINT COORDINATOR</span></p>
                            <h3 class="box-title">Dr. Senjam Jinus Singh</h3>
                            <p class="box-text">Joint Coordinator</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> EMINENT ACADEMICIAN</span></p>
                            <h3 class="box-title">Prof. S. Shekhar Sharma</h3>
                            <p class="box-text">Director - South Asian Institute of Agricultural Management (SAIRAM), Imphal
                            </p>
                            {{-- <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> INDUSTRY REPRESENTATIVE</span>
                            </p>
                            <h3 class="box-title">Prof. N. Irabanta Singh</h3>
                            <p class="box-text">Former Director, Institute for Social and Economic Change (ISEC)</p>
                            {{-- <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> MANAGEMENT</span></p>
                            <h3 class="box-title">Dr. Chandibai Potsangbam</h3>
                            <p class="box-text">Management Representative</p>
                            {{-- <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> NON-TEACHING STAFF</span></p>
                            <h3 class="box-title">Mr. Tony Singh</h3>
                            <p class="box-text">Examination Staff</p>
                            {{-- <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> CONTROLLER</span></p>
                            <h3 class="box-title">Prof. T. Kamalabati Devi</h3>
                            <p class="box-text">Controller of Examinations</p>
                            {{-- <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> STUDENT REPRESENTATIVE</span>
                            </p>
                            <h3 class="box-title">Elangbam Monika Devi</h3>
                            <p class="box-text">Research Scholar</p>
                            <p class="box-text text-info">Reg No: HBL/PH/2022/WG01</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:8258850052" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: 8258850052</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> STUDENT REPRESENTATIVE</span>
                            </p>
                            <h3 class="box-title">Mangalleima Moirangthem</h3>
                            <p class="box-text">Research Scholar</p>
                            <p class="box-text text-info">Reg No: MHL/PHD/2021/Z31A</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:9774192504" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: 9774192504</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> PARENT REPRESENTATIVE</span>
                            </p>
                            <h3 class="box-title">Mr. Elangbam Jayenta Singh</h3>
                            <p class="box-text">Student’s Parent</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:9233129633" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: 9233129633</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <p class="text-sm mb-3"><span class="bg-primary text-white p-2"> PARENT REPRESENTATIVE</span>
                            </p>
                            <h3 class="box-title">Moirangthem Tarachand Meitei</h3>
                            <p class="box-text">Student’s Parent</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:9774987846" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: 9774987846</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="my-4 text-primary fw-bold"><i class="fa-solid fa-check"></i> Exactly as per IQAC record</p>


            <h4 class="sec-title text-anim2 mb-4 mt-5">Contact Information</h4>
            <div class="row gy-30">
                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <h3 class="box-title">Prof. I. Tomba Singh</h3>
                            <p class="box-text">Coordinator +IQAC</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-9862275312" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact:  +91-9862275312</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="professor-card wow fadeInLeft p-4 shadow" data-wow-delay=".2s">
                        <div class="professor-content">
                            <h3 class="box-title">Dr. S. Jinus Singh</h3>
                            <p class="box-text">Joint Coordinator +IQAC</p>
                            <div class="professor-details mb-0">
                                <a href="#" class="professor-contact me-2">
                                    <a href="tel:+91-6090075333" class="professor-contact"><i
                                            class="fa-solid fa-phone-volume"></i>
                                        <span>Contact: +91-6090075333</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="my-4 text-primary fw-bold"><i class="fa-solid fa-check"></i>  For IQAC related queries, reach out to the coordinator or joint coordinator.</p>

        </div>

    </section>


@endsection
