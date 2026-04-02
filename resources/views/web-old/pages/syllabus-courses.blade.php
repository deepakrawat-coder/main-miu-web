@extends('web.layouts.main')
@section('title', '| Academic Programmes')
@section('description', 'Explore diverse programmes designed to shape your future at Manipur International University')

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
                            <h2> Academic Programmes </h2>
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
                <h2> Why Choose MIU? </h2>

                <ul class="ml-4 pt-2">
                    <li>- UGC recognized university with state-of-the-art facilities</li>
                    <li>- Experienced faculty with industry expertise</li>
                    <li>- Comprehensive curriculum aligned with current industry needs</li>
                    <li>- Research-focused learning with practical applications</li>
                    <li>- Excellent placement support and career guidance</li>
                    <li>- Vibrant campus life with cultural and sports activities</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Diploma Programmes </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Diploma in OTT </h3>
                                <p> Diploma in Operation Theatre (OT) Technician is a 2-year paramedical program that trains
                                    students to assist in surgical procedures and manage operation theatres. It covers
                                    anatomy, surgical instruments, sterilization, anesthesia, and patient care, with strong
                                    emphasis on practical training. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Diploma in RIT </h3>
                                <p> Radiography and Imaging Technology diploma focusing on X-ray techniques, CT scan, MRI
                                    operations, radiation safety, and diagnostic imaging procedures. Hands-on training with
                                    modern imaging equipment for careers in hospitals and diagnostic centers. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Diploma in MLT </h3>
                                <p> Medical Laboratory Technology programme covering clinical pathology, microbiology,
                                    biochemistry, hematology, and immunology. Practical training in laboratory techniques,
                                    sample analysis, and diagnostic procedures for careers in medical laboratories. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Undergraduate (UG) Programmes </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> B.COM (Bachelor of Commerce) </h3>
                                <p> Build your career in commerce, accounting, finance, and business management. This
                                    programme provides comprehensive knowledge in business principles, financial accounting,
                                    taxation, corporate law, and prepares you for professional certifications like CA, CS,
                                    and CMA. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> B.A English </h3>
                                <p> Develop expertise in English language, literature, and communication. Study classic and
                                    contemporary literature, linguistics, critical theory, and creative writing to enhance
                                    your analytical and expressive skills for careers in education, media, publishing, and
                                    content creation. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> B.Sc MLT </h3>
                                <p> Bachelor's degree in Medical Laboratory Technology with comprehensive training in
                                    clinical diagnostics, laboratory management, advanced analytical techniques, and quality
                                    control. Prepare for senior positions in medical laboratories, research facilities, and
                                    healthcare institutions. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> B.Sc RIT </h3>
                                <p> Bachelor's programme in Radiography and Imaging Technology with advanced training in
                                    diagnostic imaging, radiation therapy, nuclear medicine, and medical imaging
                                    informatics. Develop expertise in operating sophisticated imaging equipment and image
                                    interpretation. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> B.Sc OTT </h3>
                                <p> The Bachelor of Science (B.Sc.) in Operation Theatre (OT) Technician is a 4-year
                                    undergraduate program that prepares students to manage and assist in surgical operations
                                    in hospitals and healthcare facilities. The course covers human anatomy, surgical
                                    procedures, anesthesia techniques, sterilization, and patient care, along with extensive
                                    practical training. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Postgraduate (PG) Programmes </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.A English </h3>
                                <p> Advanced study of English literature, literary criticism, and research methodologies.
                                    Specialize in various literary periods, genres, theoretical approaches, and develop
                                    skills for academic research, teaching, and professional writing careers. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.A (Education Studies) </h3>
                                <p> Programme focusing on Foundation of Education studies. Explore on General Education,
                                    Teacher Education, Adult Education, as well as Special Education and other Allied areas.
                                </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.A Political Science </h3>
                                <p> In-depth study of political theory, international relations, public administration, and
                                    comparative politics. Develop critical understanding of governance, policy-making, and
                                    prepare for careers in civil services, diplomacy, and political analysis. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.A Sociology </h3>
                                <p> Study social structures, cultural patterns, and societal changes. Focus on research
                                    methods, social theory, contemporary social issues, and develop expertise in social
                                    research, community development, and policy analysis. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Biotechnology </h3>
                                <p> Advanced programme in molecular biology, genetic engineering, and bioprocess technology.
                                    Hands-on training in modern biotechnological techniques, applications in healthcare,
                                    agriculture, and industry with excellent research opportunities. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Biochemistry </h3>
                                <p> Explore chemical processes within living organisms. Study proteins, enzymes, metabolic
                                    pathways, molecular mechanisms of diseases, and prepare for careers in research,
                                    pharmaceuticals, diagnostics, and healthcare industries. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Botany </h3>
                                <p> Comprehensive study of plant sciences including plant physiology, taxonomy, ecology, and
                                    biotechnology. Focus on conservation, sustainable development, and explore careers in
                                    research, agriculture, environmental management, and plant breeding. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Environmental Science </h3>
                                <p> Study environmental issues, conservation strategies, and sustainable development. Focus
                                    on climate change, pollution control, environmental management, and develop expertise
                                    for careers in environmental consultancy, policy-making, and conservation. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Microbiology </h3>
                                <p> Advanced study of microorganisms including bacteria, viruses, fungi, and parasites.
                                    Applications in medicine, industry, environmental management, and prepare for careers in
                                    research, pharmaceuticals, food technology, and clinical diagnostics. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc Zoology </h3>
                                <p> In-depth study of animal biology, behavior, evolution, and ecology. Research-focused
                                    programme with emphasis on biodiversity, conservation, and prepare for careers in
                                    wildlife research, conservation biology, and environmental consulting. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> MA/M.Sc Yoga </h3>
                                <p> Scientific approach to yoga including physiology, anatomy, and therapeutic applications.
                                    Blend traditional practices with modern scientific research and prepare for careers in
                                    yoga therapy, wellness centers, and holistic health management. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc MLT </h3>
                                <p> Master's programme in Medical Laboratory Technology with advanced training in clinical
                                    biochemistry, molecular diagnostics, cytogenetics, and laboratory management. Specialize
                                    in cutting-edge diagnostic techniques and prepare for leadership roles in healthcare and
                                    research. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> M.Sc OTT </h3>
                                <p> Master's degree in OTT and Digital Media with specialization in content strategy,
                                    streaming analytics, digital rights management, and platform economics. Advanced
                                    training in production management, audience engagement, and industry leadership. </p>

                                <div class="btns-box">
                                    <a class="btn-one bg-primary" href="#">
                                        <span class="txt"> Syllabus </span>
                                    </a>
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> PhD Programmes </h2>
                <h3> Research Areas</h3>
            </div>

            <div class="pp mt-3">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-2 border border-1 rounded10" id="pills-home-tab" data-toggle="pill"
                            href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Group A -
                            Sciences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2 border border-1 rounded10" id="pills-profile-tab" data-toggle="pill"
                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Group B - Humanities & Social Sciences</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3">Agriculture</h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Bio-Chemistry </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Biotechnology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Botany </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Computer Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Chemistry </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Environmental Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Geology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Geography </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Home Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Microbiology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Physics </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Health Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Food Technology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Zoology </h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Anthropology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Commerce </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Disaster Management </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Education Studies </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> English </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Economics </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Fine Arts </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Fashion Technology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Journalism and Mass Communication </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Hindi </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> History </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Indian Languages </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Law </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Library Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Linguistics </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Mathematics </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Management </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Physical Education </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Performing Arts/Dance/Music </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Political Science </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Psychology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Philosophy </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Statistics </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Social Work </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Sociology </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Theatre </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Thang-ta </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Tourism </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Visual Arts </h3>
                            </div>
                            <div class="benefit mr-3 mb-3">
                                <h3 class="bg-info text-white p-3"> Yoga </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2 class="mb-3"> Postdoctoral Research Programmes </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Doctor of Science (D.Sc) </h3>
                                <p> Advanced research opportunities in Biotechnology, Microbiology, Environmental Science,
                                    and related fields. Work on funded projects with renowned faculty, access to modern
                                    facilities, and opportunities for international collaborations. </p>

                                <div class="btns-box">
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Doctor of Literature (D.Litt) </h3>
                                <p> Pursue advanced research in Sociology, Political Science, Education, and
                                    interdisciplinary social studies. Engage in policy-relevant research, publish in
                                    high-impact journals, and contribute to academic discourse. </p>

                                <div class="btns-box">
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-3">
                    <div class="border border-1 rounded10 border-info p-4 shadow w-100 h-100">
                        <div class="text-start">
                            <div class="text-start pt-3">
                                <div class="hw100 mb-3">
                                    <img src="{{ asset('/assets/images/web-image/graduation.png') }}" class="img-fluid"
                                        alt="image">
                                </div>
                                <h3 class="mb-3 h3"> Doctor of Law (LL.D) </h3>
                                <p> Bridge multiple disciplines through innovative research. Focus on sustainable
                                    development, traditional knowledge systems, cultural studies, and emerging
                                    interdisciplinary areas with significant societal impact. </p>

                                <div class="btns-box">
                                    <a class="btn-one style2" href="#">
                                        <span class="txt"> Apply Now </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style1-area py-4 mb-5">
        <div class="container">
            <div class="sec-title text-start pb-5">
                <h2> Research Support & Facilities </h2>

                <ul class="ml-4 pt-2">
                    <li>- State-of-the-art research laboratories and equipment</li>
                    <li>- Access to digital library and international journals</li>
                    <li>- Research grants and fellowship opportunities</li>
                    <li>- Experienced faculty supervisors with strong publication records</li>
                    <li>- Regular seminars, workshops, and conferences</li>
                    <li>- Opportunities for national and international collaborations</li>
                </ul>
            </div>

            <div class="sec-title text-start pb-5">
                <h2> Admission Requirements </h2>
                <ul class="ml-4 pt-2">
                    <li>- For Diploma programmes: 10+2 or equivalent qualification from a recognized board</li>
                    <li>- For UG programmes: 10+2 or equivalent qualification from a recognized board</li>
                    <li>- For PG programmes: Bachelor's degree in relevant field from a recognized university</li>
                    <li>- For PhD programmes: Master's degree with minimum 55% marks and qualifying entrance test</li>
                    <li>- For Postdoctoral programmes: PhD degree and strong research publication record</li>
                    <li>- Valid entrance exam scores (where applicable)</li>
                    <li>- Document verification and personal interview/research proposal presentation</li>
                </ul>
            </div>

            <div class="sec-title text-start pb-5">
                <h2 class="mb-3"> Ready to Start Your Journey? </h2>
                <p> Take the first step towards your dream career. Our Admissions Team is here to guide you through the process. </p>

                <div class="btns-box">
                    <a class="btn-one" href="/contact-us">
                        <span class="txt">
                            Contact Admissions Office
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
