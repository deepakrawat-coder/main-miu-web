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
                        <h1 class="breadcumb-title">Programs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>Programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="popular-course-area-1 space shape-mockup-wrap ">
        <div class="container th-container4">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="title-wrap">                   
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title text-anim">MIU PROGRAMS</span>
                            <h2 class="sec-title text-anim2">Choose Your Path <span class="d-block">at Manipur
                                    International University</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs course-tabs popularcourse-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active th-btn style-border1" id="diploma-tab" data-bs-toggle="tab"
                                    data-bs-target="#diplomaTab" type="button" role="tab"
                                    aria-selected="true">Diploma</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="ug-tab" data-bs-toggle="tab"
                                    data-bs-target="#ugTab" type="button" role="tab" aria-selected="false">UG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="pg-tab" data-bs-toggle="tab"
                                    data-bs-target="#pgTab" type="button" role="tab" aria-selected="false">PG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="phd-tab" data-bs-toggle="tab"
                                    data-bs-target="#phdTab" type="button" role="tab"
                                    aria-selected="false">PhD</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <!-- ==================== DIPLOMA TAB (6 Cards) ==================== -->
                <div class="tab-pane fade show active" id="diplomaTab" role="tabpanel" aria-labelledby="diploma-tab">
                    <div class="popular-course-wrap1">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic1-1.jpg') }}"
                                                alt="School of Commerce"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of Commerce</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            MIU's Commerce school: Accounting, Finance, Marketing. Scholarships for all
                                            undergrads, affordable excellence.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic2.jpg') }}"
                                                alt="School of Engineering"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of Engineering</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            B.Tech in CS, AI, Robotics. Industry-focused curriculum, state-of-the-art labs,
                                            100% placement assistance.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic3.jpg') }}"
                                                alt="School of Design"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of Design</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Diploma in Fashion, Interior, Graphic Design. Creative portfolio development,
                                            expert faculty mentorship.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic4.jpg') }}"
                                                alt="School of Health Sciences"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of Health Sciences</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Diploma in Nursing, Medical Lab Tech, Radiology. Hands-on training, hospital
                                            partnerships.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic5.jpg') }}"
                                                alt="School of Hospitality"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of Hospitality</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Diploma in Hotel Management, Culinary Arts. Internships at 5-star hotels, global
                                            career opportunities.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/academic6.jpg') }}"
                                                alt="School of IT"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">School of IT</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Advanced Diploma in Cybersecurity, Cloud Computing, Data Science. Certification
                                            pathways included.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== UG TAB (6 Cards) ==================== -->
                <div class="tab-pane fade" id="ugTab" role="tabpanel" aria-labelledby="ug-tab">
                    <div class="popular-course-wrap1">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug1.jpg') }}" alt="B.Com"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">B.Com (Hons)</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Specialization in Accounting, Taxation, Financial Analytics. Industry-aligned
                                            curriculum with CA/CMA support.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug2.jpg') }}" alt="B.Tech CSE"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">B.Tech Computer Science</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Specializations in AI/ML, Full Stack, DevOps. 2 industry projects, hackathons,
                                            internship guaranteed.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug3.jpg') }}" alt="BA Economics"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">BA Economics (Honors)</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Data-driven economics, public policy, econometrics. Research opportunities with
                                            top think tanks.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug4.jpg') }}" alt="BBA"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">BBA (Bachelor of Business
                                                Admin)</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Marketing, HR, Finance, Entrepreneurship. Live case studies, leadership series,
                                            startup incubation.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug5.jpg') }}" alt="BSc Physics"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">B.Sc Physics (Research)</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Advanced lab training, quantum mechanics, astrophysics. Pathway to top MSc/PhD
                                            programs globally.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/ug6.jpg') }}"
                                                alt="BA Psychology"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">BA Applied Psychology</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Counseling, organizational behavior, child psychology. Internship at mental
                                            health clinics.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== PG TAB (6 Cards) ==================== -->
                <div class="tab-pane fade" id="pgTab" role="tabpanel" aria-labelledby="pg-tab">
                    <div class="popular-course-wrap1">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg1.jpg') }}" alt="MBA"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">MBA (Master of Business
                                                Admin)</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Specializations: Marketing, Finance, HR, Operations. Dual certification,
                                            leadership bootcamp.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg2.jpg') }}" alt="M.Tech"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">M.Tech Data Science & AI</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Deep learning, NLP, big data analytics. Research thesis with industry partners.
                                        </p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg3.jpg') }}" alt="MA English"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">MA English Literature</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Critical theory, world literature, creative writing. UGC-NET coaching included.
                                        </p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg4.jpg') }}"
                                                alt="M.Sc Chemistry"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">M.Sc Organic Chemistry</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Advanced synthesis, spectroscopy, research project. Collaboration with pharma
                                            industries.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg5.jpg') }}" alt="M.Com"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">M.Com International
                                                Finance</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Financial modeling, forex, investment banking. CFA aligned curriculum.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/pg6.jpg') }}" alt="MSW"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">Master of Social Work
                                                (MSW)</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Community development, mental health, NGO management. Fieldwork immersion.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== PhD TAB (6 Cards) ==================== -->
                <div class="tab-pane fade" id="phdTab" role="tabpanel" aria-labelledby="phd-tab">
                    <div class="popular-course-wrap1">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd1.jpg') }}"
                                                alt="PhD Commerce"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Commerce</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Research in financial markets, accounting ethics, consumer behavior. UGC
                                            fellowship support.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd2.jpg') }}"
                                                alt="PhD Engineering"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Computer Science</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Areas: Quantum computing, AI ethics, cryptography. International publications
                                            encouraged.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd3.jpg') }}" alt="PhD Physics"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Physics</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Condensed matter, photonics, computational physics. Collaborations with national
                                            labs.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd4.jpg') }}"
                                                alt="PhD Management"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Management Studies</a>
                                        </h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Organizational behavior, strategic innovation, sustainable business. Industry
                                            mentorship.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd5.jpg') }}"
                                                alt="PhD Psychology"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Psychology</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Clinical psychology, cognitive neuroscience, social behavior. APA-style research
                                            training.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col">
                                <div class="academic-card p-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="program-details.html"><img
                                                src="{{ asset('/assets/img/academic/phd6.jpg') }}"
                                                alt="PhD Economics"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                        <h3 class="box-title"><a href="program-details.html">PhD in Economics</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            Development economics, public policy, econometric modeling. Fieldwork grants
                                            available.</p>
                                        <div class="d-flex justify-content-between mt-2 mb-2">
                                            <a href="about.html" class="btn text-secondary custom_apply">Apply Now</a>
                                            <a href="about.html" class="th-btn style-border1 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
