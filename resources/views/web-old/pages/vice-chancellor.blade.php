@extends('web.layouts.main')
@section('title', '| Vice Chancellor')
@section('description', 'Vice Chancellor')

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
                            <h2> Vice Chancellor </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Vice Chancellor </li>
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

                <img src="{{ asset('/assets/images/web-image/chancellor.jpg') }}"
                    class="img-fluid messageimage border border-info my-4" alt="image">

                <h2> Dr. Harikumar Pallathadka </h2>
                <h3 class="mt-2 text-info"> Vice-Chancellor </h3>


                <div class="message-details my-5">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active border border-1 mr-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true"> Vice-Chancellor's Message </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border border-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false"> About Vice-Chancellor </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="message-details-2 border border-1 mt-4 p-4">
                            <h3 class="text-start mb-3">Welcome Message</h3>

                            <p class="text-start">Dear Students, Faculty, Staff, and Visitors,</p>
                            <p class="text-start">Welcome to Manipur International University!</p>
                            <p class="text-start">Being the Vice-Chancellor of such a prestigious institution is a great honor. At MIU, we focus on creating an environment where innovation, inclusivity, and excellence guide our actions.</p>
                            <p class="text-start">Our university has a rich history of accomplishments and firm dedication to shaping future leaders. We offer a supportive setting that fosters personal and professional development. Our esteemed faculty members serve as educators, mentors, and trailblazers, spearheading cutting-edge research.</p>
                            <p class="text-start">We believe education transforms lives and communities. Our diverse campus provides opportunities for collaboration, exploration, and progress. You will encounter a community that values creativity, critical thinking, and continuous learning.</p>
                            <p class="text-start">We are dedicated to upholding our legacy of excellence by introducing innovative programs, forging interdisciplinary partnerships, and striving for societal impact.</p>
                            <p class="text-start">Feel free to explore our website to discover more about our programs, research projects, and vibrant campus atmosphere.</p>
                            <p class="text-start">We appreciate your interest in Manipur International University. Let's work together towards a brighter future.</p>

                            <div class="regards">
                                <p class="text-start mb-0 font-weight-bold"> Best wishes,</p>
                                <p class="text-start mb-0 font-weight-bold"> Dr. Harikumar Pallathadka</p>
                                <p class="text-start mb-0 font-weight-bold"> Vice-Chancellor   </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="message-details-3 border border-1 mt-4 p-4">
                            <h3 class="text-start mb-3"> About Dr. Harikumar Pallathadka </h3>

                            <p class="text-start">Dr. Harikumar Pallathadka is an eminent professor and scientist who holds the rare distinction of Post-Doctoral degrees in both Law and Management.</p>
                            <p class="text-start">His profound expertise is evident through over 500 published research papers in prestigious journals. As a respected authority in Constitutional Law and the innovative field of Machine Learning and Artificial Intelligence, his work consistently bridges theoretical knowledge with practical application.</p>
                            <p class="text-start">Professor Pallathadka's extensive accomplishments include hundreds of national and international patents, marking him as an inspirational figure and leading intellectual voice. He is actively engaged in social activism through RTI and public interest interventions.</p>
                            <p class="text-start">His unwavering dedication to both academic excellence and social causes demonstrates his commitment to creating positive change in society.</p>

                            <div class="regards">
                                <p class="text-start mb-0 font-weight-bold"> Contact Information</p>
                                <p class="text-start mb-0 font-weight-bold"> Mobile <a href="tel:+91 6909970067">+91 6909970067</a></p>
                                <p class="text-start mb-0 font-weight-bold"> Email <a href="mailto:vc@miu.edu.in">vc@miu.edu.in</a></p>
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
