@extends('web.layouts.main')
@section('title', '| Schools and Departments Details')
@section('description', 'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
@endsection
@section('content')


    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">School of Science</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>schools & departments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="space-top space-extra-bottom">
        <div class="container th-container4">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="page-single">
                        {{-- <div class="page-img global-img"><img src="assets/img/event/event_details.jpg"
                                alt="Event Image">
                            <p class="tag"><span class="tag-number">12</span>june</p>
                        </div> --}}

                        <h3 class="h3 mt-n2">About the School of Science</h3>
                        <p class="mb-30">
                            The School of Basic Sciences and Biotechnology at Manipur International University (MIU) offers interdisciplinary B.Sc. and M.Sc. programs designed to provide a strong foundation in core scientific disciplines. The School exposes students to diverse areas such as Chemistry, Biochemistry, Physics, Mathematics, Life Sciences, Environmental Sciences, and Biotechnology. These programs are aligned with the latest scientific and technological advancements, preparing students for both higher education and professional careers.
                        </p>

                        <p class="mb-30">
                           The School is committed to imparting knowledge in pure and applied sciences, which form the backbone of scientific innovation and technological progress. The B.Sc. and M.Sc. programs are designed to equip students with analytical thinking, research skills, and practical knowledge, enabling them to pursue careers across multiple scientific domains.
                        </p>

                        <div class="mb-30">
                            The School aims to nurture a new generation of scientific thinkers capable of addressing real-world challenges through innovation and critical reasoning. The programs combine strong theoretical foundations with hands-on experience through laboratory work, field studies, guest lectures, and project-based learning. Students apply scientific concepts to practical challenges in healthcare, agriculture, environmental science, and emerging technologies.
                        </div>

                        
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>


    <section class="cat-area-1 position-relative overflow-hidden space">
        <div class="shape-mockup" data-top="0%" data-left="0%"><img src="assets/img/shape/feature-shep-home-1.png"
                alt="Stadum"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-md-8">
                    <div class="title-area"><span class="sub-title text-anim">COURSES</span>
                        <h2 class="sec-title text-anim2"> School of Science Disciplines & Specializations </h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img">
                            <img src="{{ asset('/new-miu/icons/graduation.png') }}" width="80" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title">School of Science</h3>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><i class="fa-solid fa-book text-danger me-2"></i> Duration: 6 Semesters </p>
                                <p><i class="fa-solid fa-clock text-danger me-2"></i> Eligibility: 10+2 (Relevant Subjects)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="cat-shape shape-mockup jump" data-bottom="15%" data-left="10%"><img src="assets/img/shape/cat-3-1.png"
                alt="Stadum"></div>
        <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="assets/img/shape/feature-shep-2-home-1.png"
                alt="Stadum"></div>
    </section>


@endsection
