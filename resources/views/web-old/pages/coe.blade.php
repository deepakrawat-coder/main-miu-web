@extends('web.layouts.main')
@section('title', '| Controller of Examinations')
@section('description', 'Controller of Examinations')

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
                            <h2> Controller of Examinations </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Controller of Examinations </li>
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

                <img src="{{ asset('/assets/images/web-image/coe.jpg') }}"
                    class="img-fluid messageimage border border-info my-4" alt="image">

                <h2> Prof. T. Kamalabati Devi </h2>
                <h3 class="mt-2 text-info"> Controller of Examinations </h3>


                <div class="message-details my-5">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active border border-1 mr-3" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                            aria-controls="pills-home" aria-selected="true"> Welcome Message </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link border border-1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                            aria-controls="pills-profile" aria-selected="false"> About Controller of Examinations </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="message-details-2 border border-1 mt-4 p-4">
                            <h3 class="text-start mb-3">Welcome Message</h3>

                            <p class="text-start">Dear Students, Faculty, and Friends,</p>
                            <p class="text-start">Manipur International University, with its campuses spread across the pristine lush green valley and blue hills in the serene environment of the unique valley of Manipur state India, is an ideal place conducive to high quality learning.</p>
                            <p class="text-start">Education and learning, the acquisition of knowledge, skills and values aids the all-round growth of the physical, mental, intellectual and spiritual aspects of an individual, leading to career growth and self-development.</p>
                            <p class="text-start">In the present Hi-tech era and globalization, technology influences occupation, working systems and lifestyle; this situation demands to the individuals a need to prepare for a space in the hi-tech competitive world and tech-savvy skills are a must for advancing their careers in the global marketplace.</p>
                            <p class="text-start">Learning, however, is complex, it is so exciting when interested and well heavy when forced, with all technical support of modern world, it has not changed much, it cannot be forced. The "National Education Policy 2020" and the "National Science, Technology and Innovation Policy 2020" emphasize Research and Innovation including multidisciplinary and interdisciplinary researches from young age to enable our academia and students compete in the global tech scenario and contribute to National growth and development.</p>
                            <p class="text-start">MIU emphasizes in inculcating scientific learning, research mindedness, creative thinking, innovations and gaining skills to suit the modern hi-tech era as well as maintain an environment to nurture talent and ignite their minds to facilitate learning with introspection which is enlightening and empowering to elevate them to ideal-character individuals.</p>
                            <p class="text-start">I hope all aspirants and research scholars will make the most of the facilities of the University to make learning enjoyable, exciting and to start a process to elevate self to the highest to become an accomplished and competent academic scholar and societal leader contributing to the betterment of the world.</p>

                            <div class="regards">
                                <p class="text-start mb-0 font-weight-bold"> Warm Regards,</p>
                                <p class="text-start mb-0 font-weight-bold"> Prof. T. Kamalabati Devi</p>
                                <p class="text-start mb-0 font-weight-bold"> Controller of Examinations   </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                         <div class="message-details-3 border border-1 mt-4 p-4">
                            <h3 class="text-start mb-3"> About Prof. T. Kamalabati Devi </h3>

                            <p class="text-start">As Registrar, she oversees the academic and administrative operations of the university, ensuring smooth functioning of all academic programs and maintaining the highest standards of educational delivery.</p>
                            <p class="text-start">Her leadership focuses on fostering a culture of innovation, research, and holistic development among students and faculty. She is dedicated to implementing progressive educational policies including the National Education Policy 2020 and promoting interdisciplinary research initiatives.</p>
                            <p class="text-start">Professor Devi's vision emphasizes creating an environment that nurtures talent, encourages scientific thinking, and prepares students for the global hi-tech competitive world while maintaining strong ethical and spiritual values.</p>

                            <div class="regards">
                                <p class="text-start mb-0 font-weight-bold"> Contact Information</p>
                                <p class="text-start mb-0 font-weight-bold"> Email <a href="mailto:coe@miu.edu.in">coe@miu.edu.in</a></p>
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
