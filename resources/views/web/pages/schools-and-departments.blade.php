@extends('web.layouts.main')
@section('title', '| Schools and Departments ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
@endsection
@section('content')




    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        {{-- <div class="breadcumb-shape"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="shape" class="jump"></div> --}}
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Schools and Departments</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>schools & departments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="apply-stadum-area bg-title position-relative space overflow-hidden">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-between">
                <div class="col-12">
                    <div class="apply-stadum-titlebx title-area">
                        <div class="sec-title-wrap"><span class="sub-title text-anim">Schools and Departments</span>
                            <h2 class="sec-title text-white text-anim2">MIU Schools of Academic Excellence</h2>
                        </div>
                        <div class="box-text-wrap">
                            <p class="box-text text-white mt-25 wow fadeInUp" data-wow-delay=".2s">
                                Manipur International University (MIU) delivers quality education through a diverse range of
                                academic divisions known as MIU Schools, fostering excellence, innovation, and holistic
                                development across disciplines.
                            </p>
                        </div>
                        <h4 class="text-white mt-25">Interdisciplinary & Industry-Oriented Learning</h4>
                    </div>
                    <div class="apply-stadum-wrapp">
                        <div class="apply-stadum-box">
                            <div class="checklist">
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay=".2s">Engineering, Technology, Arts &
                                        Humanities, and Sciences</li>
                                    <li class="wow fadeInUp" data-wow-delay=".3s">Management, Health Sciences & Education
                                        Programs</li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">Undergraduate, Postgraduate, Diploma &
                                        Doctoral Studies</li>
                                    <li class="wow fadeInUp" data-wow-delay=".5s">Research, Innovation & Multidisciplinary
                                        Collaboration</li>
                                </ul>
                            </div>
                        </div>
                        <div class="apply-stadum-action th-btn-wrap wow fadeInUp" data-wow-delay=".10s"><a href="/contact"
                                class="th-btn th-icon white-hover">More About Admission</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="academic1-area space bg-gray overflow-hidden" id="academics-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-12">
                    <div class="title-area text-center text-lg-start mb-75"><span class="sub-title text-anim">MIU
                            Schools</span>
                        <h2 class="sec-title text-anim2">Manipur International University offers diverse schools focused on
                            academic excellence, innovation, and industry-oriented education. </h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Arts & Humanities</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Arts and Humanities at Manipur International University (MIU) is a dynamic
                                academic space where culture, communication...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Creative Writing & Literature </a></p>
                                <p><a href="#" class="duration"><i class="fa-solid fa-check"></i> Cultural &
                                        Historical Studies</a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Science</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Basic Sciences and Biotechnology at Manipur International University (MIU)
                                offers interdisciplinary B.Sc. and M.Sc. programs...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Physics & Chemistry Labs,Biotechnology Research </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Yoga Science</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Yoga at Manipur International University (MIU) offers B.A. (Yoga) and M.A.
                                (Yoga) programs designed to promote...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Practical Yoga Training,Meditation & Wellness </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Business, Management & Commerce</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Business Management and Commerce at Manipur International University (MIU) is
                                dedicated to shaping future leaders...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Business Administration </a></p>
                                <p><a href="#" class="duration"><i class="fa-solid fa-check"></i> Financial
                                        Management</a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Engineering & Technology</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Technology at Manipur International University (MIU) offers a comprehensive
                                and dynamic learning environment for students ...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        B.Tech & M.Tech Programs </a></p>
                                <p><a href="#" class="duration"><i class="fa-solid fa-check"></i> Research &
                                        Development Labs</a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Mass Communication and Journalism</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Journalism and Mass Communication at Manipur International University (MIU)
                                offers B.J.M.C. and M.J.M.C. programs designed...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Practical Journalism Training,Media Production & Editing </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Library & Information Science</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Library and Information Science at Manipur International University (MIU)
                                offers B.L.I.S. and M.L.I.S. programs designed...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Digital Library Management,Information Architecture </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Computer Science & Information</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Computer Science and Information Technology at Manipur International
                                University (MIU) offers a wide range of programs...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i>
                                        Software Development </a></p>
                                <p><a href="#" class="subject"><i class="fa-solid fa-check"></i> Data Science & AI
                                    </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="academic-card mb-3 style2">
                        <div class="academic-img"><img src="{{ asset('/new-miu/courses/1.jpg') }}" alt="img">
                        </div>
                        <div class="academic-content">
                            <h3 class="box-title"><a href="#">School of Animation</a></h3>

                            <p class="box-text style2 mt-2">
                                The School of Fine Arts at Manipur International University (MIU) offers B.F.A. and M.F.A.
                                programs designed to nurture creativity, artistic expression,...
                            </p>
                        </div>
                        <div class="academic-meta-wrap d-block">
                            <div class="academic-meta d-block">
                                <p class="mb-1"><a href="#" class="subject"><i class="fa-solid fa-check"></i> 2D
                                        & 3D Animation </a></p>
                                <p><a href="#" class="subject"><i class="fa-solid fa-check"></i> Visual Effects
                                        (VFX) </a></p>
                            </div>
                            <a href="#" class="th-btn style-border1 th-icon">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
