@extends('web.layouts.main')
@section('title', '| Pro Vice Chancellor')
@section('description', 'Pro Vice Chancellor')

@section('styles')
    <style>
        .custom-image {
            background-position: center;
        }

        .messageimage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover
        }

        .text-start {
            text-align: start;
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Pro Vice Chancellor </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Pro Vice Chancellor </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="contact-info-style4-area pb-5">
        <div class="container">
            <div class="message border border-1 p-4 rounded-lg text-center">
                <h1> Manipur International University </h1>
                {{-- <h3 class="mt-2 text-info"> Chancellor </h3> --}}

                <img src="{{ asset('/assets/images/web-image/provc.jpg') }}"
                    class="img-fluid messageimage border border-info my-4" alt="image">

                <h2> Prof. Dr. Potsangbam Kumar Singh </h2>
                <h3 class="mt-2 text-info"> Pro Vice Chancellor ( Vice Chancellor In-Charge) </h3>


                <div class="message-details my-5">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active border border-1 mr-3" id="pills-home-tab" data-toggle="pill"
                                href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Welcome
                                Message </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-1" id="pills-profile-tab" data-toggle="pill"
                                href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                About Pro VC </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="message-details-2 border border-1 mt-4 p-4">
                                <h3 class="text-start mb-3">Welcome Message</h3>

                                <p class="text-start">Dear Students, Faculty, and Friends,</p>
                                <p class="text-start">It is my pleasure to extend to you this warm welcome to Manipur
                                    International University. Being the Pro Vice Chancellor, I have the honour to be part of
                                    this excellent academic society and I want to show you some of the exciting prospects
                                    that lie ahead for you here.

                                </p>
                                <p class="text-start">At MIU, it is our privilege to embrace and foster a culture of
                                    success, innovation and advocacy in learning, research and the wider community. Our aim
                                    is to offer quality education that can be instrumental in the student's achievement of
                                    their dreams and play a significant role of bringing value in the whole society.

                                </p>
                                <p class="text-start">It is through this vision that we strive to excel in all we do -
                                    whether it is the academic experience we provide in our academic programs; the research
                                    that students and faculty undertake through innovative programs; or the environment that
                                    is welcoming and inclusive of all students at the campus. We are always in a position to
                                    transform with a view of offering our students the necessary preparation in order to be
                                    in a position to meet the expectations of the society in the global nation.

                                </p>
                                <p class="text-start">The office of the Pro Vice Chancellor aims at improving scholars'
                                    performance as well as efficiency in all aspects of MIU's performance and advancing the
                                    university's position in the realm of higher learning. We are strongly committed to
                                    ensuring our students, faculty, and staff to foster a special commitment towards
                                    cultivating an educational community of learners, scholars, and workers with the purpose
                                    of learning and personal development.

                                </p>
                                <p class="text-start">Please, take your time and go through the information provided in this
                                    site, as it will help you learn more about our academic programs, research
                                    opportunities, and student life on our campus. Please feel free to contact us and find
                                    out more on how MIU can assist you achieve your dreams of education and career.

                                </p>

                                <div class="regards">
                                    <p class="text-start mb-0 font-weight-bold"> Sincerely,</p>
                                    <p class="text-start mb-0 font-weight-bold"> Prof. Dr. Potsangbam Kumar Singh </p>
                                    <p class="text-start mb-0 font-weight-bold"> Pro Vice Chancellor </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="message-details-3 border border-1 mt-4 p-4">
                                <h3 class="text-start mb-3"> About Prof. Dr. Potsangbam Kumar Singh </h3>

                                <p class="text-start">Professor Potsangbam Kumar Singh is a renowned academician with over
                                    30 years of experience in teaching and research in the field of Life Sciences.

                                </p>
                                <p class="text-start">He has held the position of Professor at Manipur University in the
                                    Department of Life Science and is currently the Pro-Vice Chancellor at Manipur
                                    International University (MIU).

                                </p>
                                <p class="text-start">His academic and research work has focused on areas such as
                                    ethnobotany, medicinal plants, and the flora of India, supported by more than 200
                                    research articles published in various journals and book chapters. He has authored more
                                    than 10 books both individually and in collaboration with other eminent scientists.

                                </p>
                                <p class="text-start">His outstanding contribution in taxonomic work got recognition by
                                    honouring the name of a new species — Trichodesma kumareum — that bears his title which
                                    his team discovered during 2019.

                                </p>

                                <div class="regards">
                                    <p class="text-start mb-0 font-weight-bold"> Contact Information</p>
                                    <p class="text-start mb-0 font-weight-bold"> Mobile <a href="tel:+91 8837274998">+91
                                            8837274998</a></p>
                                    <p class="text-start mb-0 font-weight-bold"> Email <a
                                            href="mailto:provc@miu.edu.in">provc@miu.edu.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
@section('scripts')
@endsection
