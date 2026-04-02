@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
'Glocal University is a renowned university, serving students with more than 35 UGC-certified
courses.')

@section('styles')
<link rel="stylesheet" href="/web-assets/css/about.css?=4.0">
<style>
    .subscribe-content-box,
    .subscribe-style6-area,
    .custom-textarea,
    .testimonial-style1-area {
        background-color: white;
        background: white;
    }

    .teaching-area,
    .main-slider,
    .departments-area,
    .testimonial-style1-areas {
        background-color: #e5003211 !important;
    }

    .custom-textarea {
        background-color: #d1143e !important;
    }

    .subscribe-content-box .subscribe-form input[type="text"],
    .subscribe-content-box .subscribe-form input[type="email"],
    .custom-textarea {
        border-bottom: 2px solid white !important;
    }

    .connect-input::placeholder {
        color: #ffffffa6 !important;
    }
</style>
@endsection
@section('content')
<section class="main-slider style1 nav-style2">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">

            <!-- Slide -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('/assets/images/web-image/banner1.jpg') }})">
                </div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>Welcome to Manipur <br> International University</h2>
                        </div>
                        <div class="text">
                            <p>Empowering minds, shaping futures through excellence in education and research</p>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="/about-us">
                                <span class="txt">
                                    Read More
                                </span>
                            </a>
                            <a class="btn-one style2" href="/schools-and-departments">
                                <span class="txt">
                                    Schools & Departments
                                </span>
                            </a>
                        </div>
                        {{-- <div class="video-gallery-btns-box">
                                <a class="video-popup" title="Video Gallery"
                                            href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                            <span class="icon-play"></span>
                                        </a>
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div> --}}
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('/assets/images/web-image/banner2.jpeg') }})">
                </div>
                <div class="auto-container">
                    <div class="content middle text-center">
                        <div class="big-title">
                            <h2>Best University<br> of Manipur</h2>
                        </div>
                        <div class="text">
                            <p>Victory for Resilience: Manipur International University Honored as ‘Best University of
                                Manipur’ at Grand Vijay Diwas Celebrations in New Delhi</p>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="/about-us">
                                <span class="txt">
                                    Read More
                                </span>
                            </a>
                            <a class="btn-one style2" href="/schools-and-departments">
                                <span class="txt">
                                    Schools & Departments
                                </span>
                            </a>
                        </div>
                        {{-- <div class="video-gallery-btns-box">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                    <span class="icon-play"></span>
                                </a>
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div> --}}
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="slide">
                <div class="image-layer"
                    style="background-image:url({{ asset('/assets/images/web-image/banner3.jpeg') }})">
                </div>
                <div class="auto-container">
                    <div class="content">
                        <div class="big-title">
                            <h2>World-Class<br> Education</h2>
                        </div>
                        <div class="text">
                            <p>Discover innovative programs designed for the leaders of tomorrow</p>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="/about-us">
                                <span class="txt">
                                    Read More
                                </span>
                            </a>
                            <a class="btn-one style2" href="/schools-and-departments">
                                <span class="txt">
                                    Schools & Departments
                                </span>
                            </a>
                        </div>
                        {{-- <div class="video-gallery-btns-box">
                                <a class="video-popup" title="Video Gallery"
                                    href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                    <span class="icon-play"></span>
                                </a>
                                <p>
                                    <a class="video-popup" title="Video Gallery"
                                        href="https://www.youtube.com/watch?v=bO4RoQL9H8I">
                                        360<span style="font-size: 20px;">&#176;</span> Campus Tour
                                    </a>
                                </p>
                            </div> --}}
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="teaching-area">
    <div class="auto-container">
        <div class="row">
            <div class="col-xl-6">
                <div class="teaching-content">
                    <div class="sec-title">
                        <h2>Excellence in Teaching<br> and Learning </h2>
                        <div class="sub-title">
                            <p>The Manipur International University (MIU) is an Autonomous Statutory International
                                University established, recognized, and institutionally accredited by the State
                                Government of Manipur. The university operates under the Manipur International
                                University Act, 2018 (Manipur Act No. 2 of 2019), which was approved by Her Excellency
                                the Governor of Manipur on 23rd January 2019.
                            </p>
                            <p>MIU is duly approved and listed by the University Grants Commission (UGC), Ministry of
                                Education, Government of India under section 2(f) of UGC Act, 1956 as a State Private
                                University. The university is empowered to award degrees under section 22 of the UGC
                                Act, 1956, ensuring that all degrees conferred by MIU hold national recognition and
                                validity.</p>
                            {{-- <p>
                                    As an Autonomous University, MIU stands as a beacon of educational innovation and
                                    excellence. The university operates as an aspiring research-oriented institution under
                                    the National Education Policy (NEP) 2020, focusing on interdisciplinary learning, skill
                                    development, and cutting-edge research across various domains.
                                </p>
                                <p>
                                    MIU's autonomous status allows it to design innovative curricula, establish
                                    international collaborations, conduct independent research, and implement progressive
                                    academic policies that align with global standards while addressing regional and
                                    national needs.
                                </p> --}}
                        </div>
                    </div>

                    {{-- <div class="inner-title">
                            <div class="border-line"></div>
                            <h3>Provide Endless Opportunities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="dot-box"></div>
                                A higher education qualification
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Better career prospects
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Valuable employability skills
                            </li>
                            <li>
                                <div class="dot-box"></div>
                                Personal development time
                            </li>
                        </ul> --}}
                    <div class="btns-box">
                        <a class="btn-one" href="/about-us">
                            <span class="txt">Read More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="teaching-img-box">
                    <div class="teaching-img-box__bg"
                        style="background-image: url({{ asset('/assets/images/web-image/about--image.jpg') }});"></div>
                    <div class="teaching-img-box__content-bg"></div>
                    <div class="teaching-img-box__content aos-init aos-animate" data-aos="fade-left">
                        <div class="border-line"></div>
                        <h3 style="text-align:center;"> “At Manipur International University, we empower
                            minds through quality education, impactful research,
                            and a vision for a better global future.”
                        </h3>
                        {{-- <div class="authorized-person">
                                <div class="signature">
                                     <img src="{{asset('/assets/images/resources/signature.png" alt=""> 
                                </div>
                                <h4>Dr. [President Name]</h4>
                                <p>[ President ]</p> 
                            </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="departments-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Study at Manipur International University</h2>
            <div class="sub-title">
                <p>Explore the diverse academic departments at Manipur International University</p>
            </div>
        </div>
        <div class="row">

            {{-- @foreach ($schools as $school)
                    <div class="col-xl-4 col-lg-4">

                        <div class="single-departments-box single-department-box-style2">
                            <div class="single-department-box-style2__inner text-center">
                                <div class="static-content">
                                    <div class="icon">
                                        @if (!empty($school['image']))
                                            <img src="{{ $school['image'] }}" alt="{{ $school['title'] }}"
            style="width: 100px; height: 100px; object-fit: cover; border-radius: 12px;">
            @else
            <span class="icon-budget"></span>
            <div class="round-box"></div>
            @endif
        </div>
        <div class="text-holder">
            <a href="/school-details{{ $school['link'] }}"
                style="line-height: normal; padding: 12px;">
                {{ $school['title'] }}
            </a>
            <div class="text">
                <p>
                    {!! Str::words($school['description'], 10) !!}
                </p>
            </div>
        </div>
    </div>
    <a href="/school-details{{ $school['link'] }}">
        <div class="overlay-box" style="background-image: url({{ $school['image'] }});">
        </div>
    </a>
    </div>

    <div class="single-department-box-style2__ovarlay-content">
        <div class="inner">
            <h5>Undergraduate</h5>
            <h3>{{ $school['title'] }}</h3>
            <p>
                {!! Str::words($school['description'], 10) !!}
            </p>

            <ul>
                @foreach ($school['features'] as $feature)
                <li>
                    <div class="dot-box"></div>
                    <div class="inner-text">
                        <h4>{{ $feature }}</h4>

                    </div>
                </li>
                @endforeach
            </ul>

            <div class="btn-box">
                <a class="btn-one btn-one--style2" href="/school-details{{ $school['link'] }}">
                    <span class="txt">Read More</span>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    @endforeach --}}
    @foreach ($schools as $school)
    <div class="col-xl-4 col-lg-4 mb-4">
        <a href="{{ '/schools/' . $school->slug }}" class="text-dark">
            <div class="single-involment-activities-box">
                <div class="img-box">
                    <div class="inner">
                        <img src="{{ asset($school->image) }}" alt="{{ $school->name }}"
                            style="min-height:400px;">
                    </div>

                    <div class="text-holder wtext-holder">
                        <h3>{{ substr($school->name, 0, 40) }}</h3>

                        <p>
                            {!! substr($school->short_description, 0, 50) !!}...
                        </p>

                        {{-- Features --}}
                        @if ($school->features_comma)
                        <ul>
                            @foreach (explode(', ', $school->features_comma) as $feature)
                            <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        @endif

                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    </div>
    {{-- <div class="row">
                <div class="col-xl-4 col-lg-3">
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box marginbottom text-center wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.1s">
                        <div class="icon">
                            <span class="icon-budget"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">HUMANITIES and Languages</a>
                            <div class="text">
                                <p>TThe Department of Humanities and Languages focuses on critical thinking,
                                    communication skills, cultural studies, and linguistic excellence to
                                    prepare students for global academic and professional environments.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->
                    <!--Start Single Departments Box-->
                    <div class="single-departments-box text-center wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.2s">
                        <div class="icon">
                            <span class="icon-keyboard"></span>
                            <div class="round-box"></div>
                        </div>
                        <div class="text-holder">
                            <a href="#">LAW and Strategic Studies</a>
                            <div class="text">
                                <p>This department offers comprehensive legal education combined with
                                    strategic studies, policy research, and practical exposure to develop
                                    future legal professionals and leaders.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Departments Box-->

                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="departments-img-box">
                        <img src="{{asset('/assets/images/resources/departments-img.jpg')}}" alt="">
    <div class="departments-img-box__content">
        <ul>
            <li>
                <h3><a href="#">Under Graduate</a></h3>
                <p>Minor / Major</p>
            </li>
            <li>
                <h3><a href="#">Post Baccalaureate</a></h3>
                <p>Major</p>
            </li>
            <li>
                <h3><a href="#">Graduate</a></h3>
                <p>Master of Science</p>
            </li>
            <li>
                <h3><a href="#">Diploma</a></h3>
                <p>Master of Science</p>
            </li>
        </ul>
    </div>
    </div>
    </div>

    <div class="col-xl-4 col-lg-3">
        <!--Start Single Departments Box-->
        <div class="single-departments-box marginbottom text-center wow fadeInRight" data-wow-duration="1s"
            data-wow-delay="0.1s">
            <div class="icon">
                <span class="icon-portfolio"></span>
                <div class="round-box"></div>
            </div>
            <div class="text-holder">
                <a href="#">Business</a>
                <div class="text">
                    <p>The Business department equips students with modern management,
                        entrepreneurship, finance, and leadership skills aligned with
                        industry and global business standards.</p>
                </div>
            </div>
        </div>
        <!--End Single Departments Box-->
        <!--Start Single Departments Box-->
        <div class="single-departments-box text-center wow fadeInRight" data-wow-duration="1s"
            data-wow-delay="0.2s">
            <div class="icon">
                <span class="icon-test-tube"></span>
                <div class="round-box"></div>
            </div>
            <div class="text-holder">
                <a href="#">Health Sciences</a>
                <div class="text">
                    <p>The Department of Health Sciences emphasizes medical knowledge,
                        healthcare management, and applied research to support community
                        wellbeing and healthcare innovation.</p>
                </div>
            </div>
        </div>
        <!--End Single Departments Box-->
    </div>
    </div>

    <div class="row">
        <div class="col-xl-12 text-center">
            <div class="btn-box">
                <a href="departments.html">View All Departments</a>
            </div>
        </div>
    </div> --}}

    </div>
</section>

<section class="fact-counter-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Manipur International University at a Glance </h2>
            <div class="sub-title">
                <p>Key milestones, academic strength, and infrastructure that define MIU’s excellence</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <ul class="fact-counter-box">
                    <!--Start Single Fact Counter-->
                    <li class="single-fact-counter">
                        <div class="title-holder">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="2019">0</span>
                            </div>
                            <h3>Year Established</h3>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-online"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span><span
                                    class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span
                                    class="path15"></span><span class="path16"></span><span
                                    class="path17"></span></span>
                        </div>
                    </li>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <li class="single-fact-counter single-fact-counter--style2">
                        <div class="title-holder">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="100">0</span>
                            </div>
                            <h3>Faculty Members</h3>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-office-building"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span
                                    class="path6"></span><span class="path7"></span><span
                                    class="path8"></span><span class="path9"></span><span
                                    class="path10"></span><span class="path11"></span><span
                                    class="path12"></span><span class="path13"></span><span
                                    class="path14"></span><span class="path15"></span><span
                                    class="path16"></span><span class="path17"></span><span
                                    class="path18"></span><span class="path19"></span><span
                                    class="path20"></span><span class="path21"></span><span
                                    class="path22"></span><span class="path23"></span><span
                                    class="path24"></span><span class="path25"></span><span
                                    class="path26"></span><span class="path27"></span><span
                                    class="path28"></span><span class="path29"></span><span
                                    class="path30"></span><span class="path31"></span><span
                                    class="path32"></span><span class="path33"></span><span
                                    class="path34"></span><span class="path35"></span><span
                                    class="path36"></span><span class="path37"></span><span
                                    class="path38"></span><span class="path39"></span><span
                                    class="path40"></span><span class="path41"></span><span
                                    class="path42"></span><span class="path43"></span><span
                                    class="path44"></span><span class="path45"></span><span
                                    class="path46"></span><span class="path47"></span><span
                                    class="path48"></span><span class="path49"></span><span
                                    class="path50"></span><span class="path51"></span><span
                                    class="path52"></span><span class="path53"></span><span
                                    class="path54"></span><span class="path55"></span><span
                                    class="path56"></span><span class="path57"></span><span
                                    class="path58"></span><span class="path59"></span><span
                                    class="path60"></span><span class="path61"></span><span
                                    class="path62"></span><span class="path63"></span></span>
                        </div>
                    </li>
                    <!--End Single Fact Counter-->
                </ul>

                <ul class="fact-counter-box bottom">
                    <!--Start Single Fact Counter-->
                    <li class="single-fact-counter pdt50 pdb0">
                        <div class="title-holder">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="50">0</span>
                            </div>
                            <h3>Academic Programs</h3>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-book"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span><span
                                    class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span
                                    class="path15"></span><span class="path16"></span><span
                                    class="path17"></span><span class="path18"></span><span
                                    class="path19"></span><span class="path20"></span><span
                                    class="path21"></span><span class="path22"></span><span
                                    class="path23"></span><span class="path24"></span><span
                                    class="path25"></span><span class="path26"></span><span
                                    class="path27"></span><span class="path28"></span><span
                                    class="path29"></span><span class="path30"></span><span
                                    class="path31"></span><span class="path32"></span><span
                                    class="path33"></span><span class="path34"></span></span>
                        </div>
                    </li>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <li class="single-fact-counter single-fact-counter--style2 pdt50 pdb0">
                        <div class="title-holder">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="10">0</span>
                            </div>
                            <h3>Research Centers</h3>
                        </div>
                        <div class="icon-holder">
                            <span class="icon-browser"><span class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span
                                    class="path7"></span><span class="path8"></span><span
                                    class="path9"></span><span class="path10"></span><span
                                    class="path11"></span><span class="path12"></span><span
                                    class="path13"></span><span class="path14"></span><span
                                    class="path15"></span><span class="path16"></span><span
                                    class="path17"></span><span class="path18"></span><span
                                    class="path19"></span><span class="path20"></span><span
                                    class="path21"></span><span class="path22"></span><span
                                    class="path23"></span></span>
                        </div>
                    </li>
                    <!--End Single Fact Counter-->
                </ul>

            </div>
        </div>
    </div>
</section>
@if (!empty($Testimonials))
<section class="testimonial-style1-area testimonial-style1-areas">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1__title">
                    <div class="sec-title">
                        <h2>Voices of MIU Alumni</h2>
                        <div class="sub-title">
                            <p>
                                Hear from our alumni as they share their experiences and success stories at Manipur
                                International University
                            </p>
                        </div>
                    </div>
                    {{-- <div class="btns-box">
                            <a class="btn-one" href="#">
                                <span class="txt">More Reviews</span>
                            </a>
                        </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1-content">
                    <div class="theme_carousel testimonial-carousel owl-theme owl-carousel"
                        data-options='{
                                    "loop": true, 
                                    "margin": 30, 
                                    "autoheight":true, 
                                    "lazyload":true, 
                                    "nav": false, 
                                    "dots": false, 
                                    "autoplay": true, 
                                    "autoplayTimeout": 5000, 
                                    "smartSpeed": 500, 
                                    "navText": ["<span class=\"left icon-next\"></span>",
                                    "<span class=\"right icon-next\"></span>"], 
                                    "responsive":{ 
                                    "0" :{ "items": "1" }, 
                                    "600" :{ "items" : "1" }, 
                                    "768" :{ "items" : "1" }, 
                                    "992":{ "items" : "2" }, 
                                    "1200":{ "items" : "3" }
                                }
                            }'>

                        <!--Start Single Testimonial Style1-->
                        @foreach ($Testimonials as $testimonial)
                        <div class="single-testimonial-style1">
                            <div class="border-box"></div>
                            <div class="top-box">
                                <div class="quote-iocn-box">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="inner">
                                    @if (!empty($testimonial->image))
                                    <div class="img-box">
                                        <img src="{{ asset($testimonial->image) }}" alt="">
                                    </div>
                                    @endif
                                    <div class="rating-box">
                                        <ul>

                                            @php
                                            for ($i = 0; $i < $testimonial->rating; $i++) {
                                                echo '<li><span class="icon-favourite"><span class="path1"></span><span class="path2"></span></span></li>';
                                                }

                                                @endphp

                                        </ul>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>{!! substr($testimonial->message, 0, 130) !!}...</p>
                                </div>
                            </div>
                            <div class="client-name">
                                <h3>{{ $testimonial->name }}</h3>
                                <span>{{ substr($testimonial->subtitle, 0, 30) }}</span>
                            </div>
                        </div>
                        @endforeach
                        <!--End Single Testimonial Style1-->
                        <!--Start Single Testimonial Style1-->
                        {{-- <div class="single-testimonial-style1">
                                <div class="border-box"></div>
                                <div class="top-box">
                                    <div class="quote-iocn-box">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                        alt="">
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <p>MIU provided me exposure to diverse cultures, modern infrastructure,
                        and industry-oriented education. The mentorship I received shaped
                        my confidence and professional growth.</p>
                </div>
            </div>
            <div class="client-name">
                <h3>Rohit Singh</h3>
                <span>BBA | MIU Alumni</span>
            </div>
        </div>
        <!--End Single Testimonial Style1-->
        <!--Start Single Testimonial Style1-->
        <div class="single-testimonial-style1">
            <div class="border-box"></div>
            <div class="top-box">
                <div class="quote-iocn-box">
                    <span class="icon-quote"></span>
                </div>
                <div class="inner">
                    <div class="img-box">
                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                            alt="">
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <p>The faculty at MIU are highly knowledgeable and approachable.
                        Their guidance and encouragement helped me develop analytical
                        and leadership skills essential for my career.</p>
                </div>
            </div>
            <div class="client-name">
                <h3>Priya Devi</h3>
                <span>B.Tech (Civil Engineering) | MIU Alumni</span>
            </div>
        </div>
        <!--End Single Testimonial Style1-->

        <!--Start Single Testimonial Style1-->
        <div class="single-testimonial-style1">
            <div class="border-box"></div>
            <div class="top-box">
                <div class="quote-iocn-box">
                    <span class="icon-quote"></span>
                </div>
                <div class="inner">
                    <div class="img-box">
                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <p>My journey at Manipur International University was filled with
                        learning opportunities, research exposure, and holistic development.
                        MIU truly prepares students for real-world challenges.</p>
                </div>
            </div>
            <div class="client-name">
                <h3>Amit Kumar</h3>
                <span>MBA | MIU Alumni</span>
            </div>
        </div>
        <!--End Single Testimonial Style1-->
        <!--Start Single Testimonial Style1-->
        <div class="single-testimonial-style1">
            <div class="border-box"></div>
            <div class="top-box">
                <div class="quote-iocn-box">
                    <span class="icon-quote"></span>
                </div>
                <div class="inner">
                    <div class="img-box">
                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-2.jpg') }}"
                            alt="">
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <p>MIU’s academic structure and career support system helped me
                        transition smoothly from student life to a professional role.
                        I am proud to be an MIU alumnus.</p>
                </div>
            </div>
            <div class="client-name">
                <h3>Neha Verma</h3>
                <span>M.Sc | MIU Alumni</span>
            </div>
        </div>
        <!--End Single Testimonial Style1-->
        <!--Start Single Testimonial Style1-->
        <div class="single-testimonial-style1">
            <div class="border-box"></div>
            <div class="top-box">
                <div class="quote-iocn-box">
                    <span class="icon-quote"></span>
                </div>
                <div class="inner">
                    <div class="img-box">
                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-3.jpg') }}"
                            alt="">
                    </div>
                    <div class="rating-box">
                        <ul>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                            <li>
                                <span class="icon-favourite">
                                    <span class="path1"></span><span class="path2"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text">
                    <p>Being part of MIU allowed me to explore my potential through
                        innovative learning and practical exposure. The university
                        continues to inspire me even after graduation.</p>
                </div>
            </div>
            <div class="client-name">
                <h3>Rahul Meitei</h3>
                <span>B.Tech (Mechanical Engineering) | MIU Alumni</span>
            </div>
        </div> --}}
        <!--End Single Testimonial Style1-->

    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@endif
@if (!empty($blogs))
<section class="testimonial-style1-area " style="background-color: #d1143e;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1__title">
                    <div class="sec-title">
                        <h2 class="text-white">MIU Blogs</h2>
                        <div class="sub-title">
                            <p class="text-white">
                                Stay informed with the latest news, announcements, achievements,
                                and academic updates from Manipur International University
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
                    @foreach ($blogs as $blog)
                        <a href="/blog/{{ $blog->slug }}">
        <div class="col-xl-4 col-lg-4">
            <div class="single-blog-style1">
                <div class="img-holder">
                    <div class="inner">
                        <img src="{{ asset($blog->image) }}" alt="">
                    </div>
                    <div class="category-box">

                        <p><span class="icon-calendar mr-2 text-white"></span><a href="#"
                                class="text-white">{{ date('M d, Y', strtotime($blog->created_at)) }}</a>
                        </p>
                    </div>
                </div>
                <div class="text-holder">
                    <h3>
                        <a href="blog-single.html">
                            {{ substr($blog->title, 0, 50) }}{{ strlen($blog->title) > 50 ? '...' : '' }}
                        </a>
                    </h3>
                    <div class="text">
                        <p>
                            {{ substr($blog->short_description, 0, 70) }}{{ strlen($blog->short_description) > 70 ? '...' : '' }}
                        </p>
                    </div>
                    <div class="bottom-box">
                        <div class="btn-box">
                            <a href="/blog/{{ $blog->slug }}">
                                <span class="icon-right-arrow-1"></span>Read More
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </a>
        @endforeach
    </div> --}}
    <div class="owl-carousel owl-theme blog-carousel">
        @foreach ($blogs as $blog)
        <div class="item">
            <a href="/blog/{{ $blog->slug }}">
                <div class="single-blog-style1">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{ asset($blog->image) }}" alt="">
                        </div>
                        <div class="category-box">
                            <p><span class="icon-calendar mr-2 text-white"></span>
                                <a href="#"
                                    class="text-white">{{ date('M d, Y', strtotime($blog->created_at)) }}</a>
                            </p>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>
                            <a href="blog-single.html">
                                {{ substr($blog->title, 0, 50) }}{{ strlen($blog->title) > 50 ? '...' : '' }}
                            </a>
                        </h3>
                        <div class="text">
                            <p>
                                {{ substr($blog->short_description, 0, 70) }}{{ strlen($blog->short_description) > 70 ? '...' : '' }}
                            </p>
                        </div>
                        <div class="bottom-box">
                            <div class="btn-box">
                                <a href="/blog/{{ $blog->slug }}">
                                    <span class="icon-right-arrow-1"></span>Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
</section>
@endif
@if (!empty($events))
<section class="testimonial-style1-area testimonial-style1-areas">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1__title">
                    <div class="sec-title">
                        <h2 class="">Events at Manipur International University</h2>
                        <div class="sub-title">
                            <p class="">
                                Stay updated with academic, cultural, sports, and professional events
                                happening at Manipur International University
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- @foreach ($events as $event)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-event-three">
                                <div class="single-event-three__inner">
                                    <div class="static-content">
                                        <div class="top-box">
                                            <div class="date-box">
                                                <h2>01</h2>
                                                <h4>Dec, 2024</h4>
                                            </div>                                            
                                        </div>
                                        <div class="text-holder">
                                            <h3>
                                                <a href="events-details.html">
                                                    MIU Annual Cultural Fest
                                                </a>
                                            </h3>
                                            <div class="text">
                                                <p>
                                                    A vibrant celebration of culture, talent, music, and diversity
                                                    featuring students from all departments.
                                                </p>
                                            </div>
                                         
                                        </div>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="img-bg"
                                            style="background-image: url({{ asset('/assets/images/events/event-three-1.jpg') }});">
        </div>
        <div class="button-box">
            <a class="btn-one" href="events-details.html">
                <span class="txt">Read More</span>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach --}}
    @foreach ($events as $event)
    <div class="col-xl-4 col-lg-6 col-md-6">
        <a href="{{ route('post.details', $event->slug) }}">
            <div class="single-event-three">
                <div class="single-event-three__inner">
                    <div class="static-content">
                        <div class="top-box">
                            <div class="date-box">
                                <h2>{{ \Carbon\Carbon::parse($event->publish_date)->format('d') }}</h2>
                                <h4>{{ \Carbon\Carbon::parse($event->publish_date)->format('M, Y') }}
                                </h4>
                            </div>
                        </div>

                        <div class="text-holder">
                            <h3>
                                <a href="{{ route('post.details', $event->slug) }}">
                                    {{ substr($event->title, 0, 20) }}
                                </a>
                            </h3>

                            <div class="text">
                                <p>
                                    {{ substr($event->short_description, 0, 96) }}
                                </p>
                                @if (empty($event->image))
                                <a href="{{ route('post.details', $event->slug) }}"
                                    class="text-black">
                                    <span class="txt">Read More</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if (!empty($event->image))
                    <div class="overlay-content">
                        <div class="img-bg"
                            style="background-image: url('{{ asset($event->image ?: '/assets/images/events/default.jpg') }}');">
                        </div>
                        <div class="button-box">
                            <a href="{{ route('post.details', $event->slug) }}">
                                <span class="txt">Read More</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </a>
    </div>
    @endforeach
    </div>
    </div>
</section>
@endif
<section class="subscribe-style6-area" style="background-color: #d1143e;">
    <div class="subscribe-style6-area-bg"
        style="background-image: url({{ asset('/assets/images/web-image/connect1.jpg') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="subscribe-content-box" style="background-color: #d1143e;">
                    <div class="sec-title-style6">
                        <div class="sub-title">
                            <p class="text-white">Stay Connected</p>
                        </div>
                        <h2 class="text-white">Join the MIU Community</h2>
                        <p class="text-white">
                            Get the latest updates on admissions, academic programs,
                            events, and university news from Manipur International University.
                        </p>
                    </div>
                    <form class="subscribe-form" action="{{ route('enquiry.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="source_page" value="index">
                        <div class="input-box">
                            <div class="input-label text-white">Full Name</div>
                            <input type="text" name="name" placeholder="Enter your full name"
                                class="connect-input" required="">
                        </div>
                        <div class="input-box">
                            <div class="input-label text-white">Email Address</div>
                            <input type="email" name="email" class="connect-input"
                                placeholder="Enter your email address" required="">
                        </div>
                        <div class="input-box">
                            <div class="input-label text-white">Phone Number</div>
                            <input type="text" name="phone" class="connect-input"
                                placeholder="Enter your phone number" >
                        </div>                        
                        <div class="input-box">
                            <div class="input-label text-white">Message</div>
                            <textarea name="message" cols="30" rows="1" class="w-100 custom-textarea connect-input"
                                placeholder="Write your query or message here"></textarea>
                        </div>
                        <button class="btn-one style2" type="submit">
                            <span class="txt text-white">
                                Submit Now
                            </span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@if (!empty($faq))
<section id="faq" class="course-curriculum-area testimonial-style1-areas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-curriculum-content-box">
                    <div class="course-layout-content-box">
                        <div class="inner-title">
                            <h2>FAQs</h2>
                            <div class="sub-title">
                                <p class="text-dark">Need Help?</p>
                            </div>
                        </div>
                        <ul class="accordion-box">
                            @foreach ($faq as $item)
                            <li class="accordion block ">
                                <div class="acc-btn ">
                                    <div class="course-layout-title-box">
                                        <h4>{{ $item['question'] }}</h4>
                                        <div class="icon-outer">
                                            <i class="icon-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="acc-content ">
                                    <div class="course-layout-content-box-inner">
                                        <p class="p-3">
                                            {{ $item['answer'] }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<section class="testimonial-style1-area" style="{{ (!empty($faq))? 'background-color: #d1143e;':' background-color: #e5003211 !important;'}}">
    <div class="container">
        <div class="sec-title text-center">
            <h2 class=" {{ (!empty($faq))? 'text-white':' text-black'}}">Our Esteemed Industry Partners</h2>
            <div class="sub-title">
                <p class="{{ (!empty($faq))? 'text-white':' text-black'}}">
                    Manipur International University collaborates with leading organizations
                    and industry partners to enhance learning, research, and career opportunities
                    for our students.
                </p>
            </div>
        </div>

        <div class="row">
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/asian_paints-logo_brandlogos.net_sieab.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img src="{{ asset('/assets/images/web-image/placement-logo/genpact1.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/Hero_MotoCorp_Logo.svg') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/Infosys_logo.svg.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->

            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/noida-tech-mahindra-logo-business-brand-technology-firm1.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/Tata-Motors-800x600.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img src="{{ asset('/assets/images/web-image/placement-logo/tcs.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
            <!--Start Single Partner Logo Box-->
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-partner-logo-box">
                    <a href="#"><img
                            src="{{ asset('/assets/images/web-image/placement-logo/tvs-vector-logo-free-download-11574023530akrlm14a2x1.png') }}"
                            alt="Awesome Image"></a>
                </div>
            </div>
            <!--End Single Partner Logo Box-->
        </div>

        {{-- <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="btns-box">
                        <a class="btn-one" href="about.html">
                            <span class="txt">All Partner</span>
                        </a>
                    </div>
                </div>
            </div> --}}

    </div>
</section>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.blog-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>
@endsection