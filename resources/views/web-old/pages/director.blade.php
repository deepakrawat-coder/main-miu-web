@extends('web.layouts.main')
@section('title', '| Director')
@section('description', 'Director')

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
                            <h2> Director </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Director </li>
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

                <img src="{{ asset('/assets/images/web-image/director.jpg') }}"
                    class="img-fluid messageimage border border-info my-4" alt="image">

                <h2> Ningombam Amarjit Singh </h2>
                <h3 class="mt-2 text-info"> Director </h3>


                <div class="message-details my-5">
                    <div class="message-details-2 border border-1 mt-4 p-4">
                        <h3 class="text-start mb-3">Welcome Message from the Director</h3>

                        <p class="text-start">Dear Students, Faculty, and Friends,</p>
                        <p class="text-start">We are glad for joining Manipur International University as a institution that has a passion of creating an environment that calls for academic achievement, creativity and camaraderie. It is my honour as the Director of this prestigious institution to welcome any virtual visitor to our home on the world wide web.
                        </p>
                        <p class="text-start">Indeed at Manipur International University, it is our belief that the individual aspires to the maximum capacity. You are welcome here wherever you are in your academic journey whether as a first-time student, a researcher, or a member of the community.
                        </p>
                        <p class="text-start">In terms of educational effectiveness, our university can be consider as one of the best private university in Manipur. This is more apparent when going through the website where you can learn more about the programs, research, and college life. We would however like to assure you of the numerous opportunities around and the potential of the link. Regardless of whether you are considering applying to the University or are already a member of our institution or a former student, know that you are an essential part of the Manipur International Univerity future development.
                        </p>
                        <p class="text-start">I appreciate being here and getting everyone’s support. Welcome once again and we trust that you will be perfectly positioned to accomplish all that is desired of you and more through a healthy interaction with us.
                        </p>

                        <div class="regards">
                            <p class="text-start mb-0 font-weight-bold"> Warm Regards,</p>
                            <p class="text-start mb-0 font-weight-bold"> N. Amarjit Singh </p>
                            <p class="text-start mb-0 font-weight-bold"> Director, MIU </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
@section('scripts')
@endsection
