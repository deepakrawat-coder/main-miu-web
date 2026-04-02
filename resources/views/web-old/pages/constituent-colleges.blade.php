@extends('web.layouts.main')
@section('title', '| Constituent Colleges')
@section('description', 'Constituent Colleges')

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

        .hw150 {
            width: 150px;
            height: 150px;
        }

        .rounded10 {
            border-radius: 10px;
        }

        .enterprise-plan__content__inner:before {
            background-color: transparent;
        }

        .custom .enterprise-plan__content__inner {
            max-width: 100%;
            width: 100%;
            background-color: transparent;
            border: none;
            border-radius: 6px;
            padding: 50px;
            box-shadow: none;
            margin: 10px 0;
        }

        .custom .enterprise-plan__content__inner ul li {
            color: gray;
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
                            <h2> Constituent Colleges </h2>
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
                <h2> Constituent Colleges </h2>
                <p>Manipur International University</p>

                <div class="btns-box">
                    <a class="btn-one" href="#">
                        <span class="txt">
                            New Partnership Proposal
                        </span>
                    </a>
                    <a class="btn-one style2" href="#">
                        <span class="txt">
                            Constituent College Ordinance
                        </span>
                    </a>
                </div>
            </div>


            <div class="enterprise-plan__content mb-5 pb-4">
                <div class="enterprise-plan__content-bg"> </div>
                <div class="enterprise-plan__content__inner" style="max-width: 100%">
                    <div class="sec-title-style3">
                        <h2><span class="text-warning">UGC Guidelines for Constituent Colleges</h2>
                    </div>
                    <ul>
                        <li>Constituent colleges must maintain academic standards as prescribed by the University Grants
                            Commission</li>
                        <li>All programs offered must be approved by the parent university and relevant regulatory bodies
                        </li>
                        <li>Faculty qualifications must meet UGC norms with appropriate student-teacher ratios</li>
                        <li>Infrastructure and facilities must comply with UGC standards for higher education institutions
                        </li>
                        <li>Regular academic audits and quality assessments must be conducted</li>
                        <li>Admission processes must follow UGC guidelines and reservation policies</li>
                        <li>Financial transparency and proper accounting practices must be maintained</li>
                        <li>Student welfare measures and grievance redressal mechanisms must be in place</li>
                    </ul>
                </div>
            </div>


            <div class="sec-title text-start pb-3">
                <h2> Our Constituent Colleges </h2>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c1.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        JR Institute of Medical Science
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c2.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Tourism, Hospitality & Entrepreneurship Training Institute
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c3.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Kangla Health Care Institutional Foundation
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c4.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Brahma Kumaris (Value Education Wing)
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c5.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Melodious Education Housing Academy
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c6.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Hazra International College and Hospital
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c7.png') }}" class="img-fluid" alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Langol View Institute of Nursing and Paramedical sciences
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c8.jpg') }}" class="img-fluid"
                                    alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        IHRC Paramedical College
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c9.jpg') }}" class="img-fluid"
                                    alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Maharaja College Manipur
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c10.png') }}" class="img-fluid"
                                    alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Irengbam Thamcha Devi Nursing and Health Care Research Institute
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c11.png') }}" class="img-fluid"
                                    alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        Yog Gurukul Asom
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="border border-1 rounded10 border-info p-4 shadow mb-3">
                        <div class="text-center">
                            <div class="hw150 d-block mx-auto mb-3">
                                <img src="{{ asset('/assets/images/web-image/c12.png') }}" class="img-fluid"
                                    alt="image">
                            </div>
                            <div class="text-center pt-3">
                                <h3>
                                    <a href="#">
                                        PC Allied Health Institute
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-light p-4 mt-5 custom">
                <div class="row ">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> JR Institute of Medical Science </h3>
                                    <p>
                                        The JR Institute of Medical Science is a constituent college of Manipur
                                        International universty which is a distinguished center of learning dedicated to
                                        advancing the field of paramedical sciences. Our mission is to provide exceptional
                                        education, foster innovative research, and offer compassionate healthcare services.
                                        Established in 2022, we are committed to producing highly skilled professionals
                                        ready to meet the dynamic needs of the healthcare industry.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>B.Sc & Diploma - Medical Laboratory Technology</li>
                                                    <li>B.Sc & Diploma - Radio Imaging Technology</li>
                                                    <li>B.Sc & Diploma - Operation Theatre Technology</li>
                                                    <li>B.Sc in Clinical Nutrition</li>
                                                    <li>B.Sc in Diabetes Sciences</li>
                                                    <li>M.Sc in Medical Laboratory Technology (MLT)</li>
                                                    <li>M.Sc MLT (Biochemistry)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Tourism, Hospitality and
                                        Entrepreneurship Training Institute </h3>
                                    <p>
                                        Welcome to THETI, a premier institute under Department of Tourism & Hospitality
                                        Management dedicated to providing top-tier education and training in Tourism,
                                        Hospitality, and Entrepreneurship. Located at Singjamei Bazar, Imphal – 795008, our
                                        institute is designed to equip students with the skills, knowledge, and practical
                                        experience necessary to excel in these dynamic industries.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>Certificate course in Food and Beverage Production</li>
                                                    <li>Certificate course in Front Office Assistant</li>
                                                    <li>Certificate course in Food and Services Assistant</li>
                                                    <li>Certificate course in Office Assistant</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Kangla Health Care Institutional
                                        Foundation </h3>
                                    <p>
                                        Kangla Health Care Institutional Foundation is a constituent college of Manipur
                                        International University. It is one among the leading emerging paramedical training
                                        Institute in Manipur, offering state-of-the-art training in various Paramedical
                                        sciences. With the rapid advancement of medical technology, the demand for the
                                        qualified and skilled paramedics has increased significantly. Kangla Health Care
                                        Institutional Foundation has recognised this need and has taken the initiative to
                                        provide quality paramedical training to students.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>B.Sc & Diploma - Medical Laboratory Technology</li>
                                                    <li>B.Sc & Diploma - Radio Imaging Technology</li>
                                                    <li>B.Sc & Diploma - Operation Theatre Technology</li>
                                                    <li>B.Sc & Diploma in Optometry</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Brahma Kumaris (Value Education Wing)
                                    </h3>
                                    <p>
                                        The education being imparted at the present time in our schools and colleges does
                                        not include the thinking for one's own self anddevelopment of understanding,
                                        consciousness, inner strength and values for a smooth and peaceful life.. That is
                                        why even after modernization, innovation and expansion of various dimensions of
                                        education, we find violence, corruption, discrimination, dissatisfaction,
                                        tension,fear, confusion, negativity, superstition, uncleanliness in the society.
                                        That is why value education and spirituality aims at developing knowledge and skills
                                        for material life. But here also one finds many discrepancies arising in one's
                                        practical life and attempts to solve them with a spiritual approach and handling.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>MSc in Value Education and Yoga</li>
                                                    <li>MSc in Counselling Psychology and Spiritual Health</li>
                                                    <li>MSc in Spiritual Psychology & Well-being</li>
                                                    <li>MBA in Self Management & Crisis Management</li>
                                                    <li>BSc in Value Education and Yoga</li>
                                                    <li>BSc in Counselling Psychology and Spiritual Health</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Melodious Educational Housing Academy
                                    </h3>
                                    <p>
                                        Melodious Educational Housing Academy , A constituent college of Manipur
                                        International University . It is a progressive institution located in a rural
                                        setting, dedicated to transforming lives through education and innovation. More than
                                        just a college, it serves as a hub for digital learning and skill development,
                                        aiming to bridge the educational gap in underserved communities. By integrating
                                        modern digital education systems with traditional learning, the Academy empowers
                                        students with the tools and knowledge needed for a brighter future. Guided by its
                                        inspiring motto, "Believe in Possibilities," the college fosters a culture of hope,
                                        growth, and opportunity for all.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>M.Sc. in Zoology</li>
                                                    <li>M.Sc. in Botany</li>
                                                    <li>M.A. in Political Science</li>
                                                    <li>M.A. in History</li>
                                                    <li>Bachelor of Medical Laboratory Technology (BMLT)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Hazra International College and
                                        Hospital </h3>
                                    <p>
                                        Hazra International College and Hospital is a unique educational and healing
                                        institution nestled in a serene rural setting, offering students a peaceful
                                        environment to learn, grow, and reconnect with nature. The college is dedicated to
                                        holistic development, combining academic excellence with the traditional wisdom of
                                        naturopathy and yogic science.In addition to its formal educational programs, Hazra
                                        International College and Hospital promotes a lifestyle of wellness and
                                        sustainability. Its integrated approach blends modern education with age-old healing
                                        practices, creating a transformative experience for both students and the local
                                        community. Surrounded by tranquil landscapes, the campus provides the perfect
                                        atmosphere for learning, meditation, and healing—making it a truly distinctive
                                        center for education and natural health.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>Certificate Courses in Yoga</li>
                                                    <li>Diploma in Yoga</li>
                                                    <li>PG Diploma in Yoga</li>
                                                    <li>BA in Yoga</li>
                                                    <li>BSc Yoga Science</li>
                                                    <li>MA Yoga</li>
                                                    <li>MSc Yoga</li>
                                                    <li>DNYS- Diploma in Naturopathy and Yogic Science</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> Langol View Institute of Nursing and
                                        Paramedical Sciences
                                    </h3>
                                    <p>
                                        Langol View Institute of Nursing and Paramedical Sciences was established under the
                                        banner of Langol View Hospital and Research Institute Pvt. Ltd., a trusted name in
                                        healthcare known for its commitment to patient care, clinical excellence, and
                                        community service. Built on this strong legacy, the institute aims to bridge the gap
                                        between classroom learning and real-world healthcare needs. With the support of our
                                        parent hospital, students receive unparalleled exposure to practical training in a
                                        professional healthcare setting right from the start of their academic journey.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>Diploma in Medical Laboratory Technology</li>
                                                    <li>Diploma in Operation Theatre Technology</li>
                                                    <li>Diploma in Radiology and Imaging Technology</li>
                                                    <li>Diploma in Dialysis Technology</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="border border-1 rounded10 border-info p-4 mb-3">
                            <div class="text-start">
                                <div class="pt-3">
                                    <h3 class="mb-3 h3 text-dark fw-weight-semibold"> PC Allied Health Institute </h3>
                                    <p>
                                        PC Allied Health Institute was established under Bharat Sevak Samaj, a National
                                        Development Agency founded in 1952 by the Planning Commission, Government of India,
                                        and a constituent college of Manipur International University. The Institute is
                                        promoted by Sintharol Rural Area Development Organization Society, registered under
                                        the Society Registration Act, 1989 (Registration No. 281/M/SR/2001), and is
                                        committed to achieving its vision and mission through academic excellence. Developed
                                        with a strong emphasis on aesthetics and sustainability, the campus provides an
                                        eco-friendly and learner-centric environment. As a centre of higher learning, the
                                        Institute strives to produce globally competent academicians, researchers, and
                                        leaders grounded in strong moral values, excellence, and lifelong intellectual
                                        growth.
                                    </p>

                                    <div class="my-2">
                                        <h3> Offered Courses: </h3>
                                        <div class="enterprise-plan__content mb-3 p-0">
                                            <div class="enterprise-plan__content__inner bg-transparent p-0"
                                                style="max-width: 100%;">
                                                <ul>
                                                    <li>B.Sc & Diploma - Medical Laboratory Technology</li>
                                                    <li>B.Sc & Diploma - Radio Imaging Technology</li>
                                                    <li>B.Sc & Diploma - Operation Theatre Technology</li>
                                                    <li>B.Sc in Clinical Nutrition</li>
                                                    <li>B.Sc in Diabetes Sciences</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btns-box">
                                        <a class="btn-one" href="#">
                                            <span class="txt"> Visit College Website </span>
                                        </a>
                                    </div>
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
                <h2 class="mb-3"> Interested in Partnership? </h2>
                <p> Join our network of excellence and contribute to quality education in Northeast India </p>

                <div class="btns-box">
                    <a class="btn-one" href="#">
                        <span class="txt">
                            Submit Partnership Proposal
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
