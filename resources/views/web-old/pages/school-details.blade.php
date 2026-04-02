@extends('web.layouts.main')
@section('title', '| Departments')
@section('description', 'Manipur International University – Departments & Programs')

@section('styles')
<style>
</style>
@endsection

@section('content')

<!-- BREADCRUMB -->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg custom-image"
        style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <h2>{{ $school->name }}</h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">{{ $school->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PAGE NAVIGATION -->
<section class="page-contains-area stricky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 d-flex justify-content-center">
                <div class="page-contains-box ">
                    <div class="inner-title">
                        <h3>Page Contains:</h3>
                    </div>
                    <div class="page-contains-btn">
                        <ul class="navigation clearfix scroll-nav">
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#content">Requirements</a></li>
                            <li><a href="#department">Specializations</a></li>
                            <li><a href="#specialization">Programs</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#partner">Recruiter Partner</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OVERVIEW SECTION -->
<section id="overview" class="program-details-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="program-details-tab-content">
                    <div class="program-details-tab-content__img-box"
                        style="background-image: url({{ asset('/assets/images/programs/program-details-tab-content__img-box-1.png') }});">
                    </div>

                    <div class="program-details-tab-content__inner">
                        <div class="program-details-tab-content__inner__shape"
                            style="background-image: url({{ asset('/assets/images/shape/program-details-tab-content__inner-shape.png') }});">
                        </div>

                        <div class="program-details-tab-content__text">
                            <div class="sec-title">
                                {{-- <h2>School of Technology – Overview</h2> --}}
                                <h2>{{ $school->name }} – Overview</h2>
                            </div>


                            <p>{!! $school->description !!}</p>
                        </div>

                        <div class="program-details-form-box">
                            <div class="sec-title">
                                <h2>Apply for Admission</h2>
                            </div>

                            <form id="program-details-form-1" name="programDetailsForm" action="{{ route('enquiry.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="source_page" value="school-details">
                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <div class="input-box">
                                    <input type="text" name="name" id="formName"
                                        placeholder="Enter Your Full Name" required>
                                </div>

                                <div class="input-box">
                                    <input type="email" name="email" id="formEmail"
                                        placeholder="Enter Your Email Address" required>
                                </div>

                                <div class="input-box">
                                    <input type="text" name="phone" id="formPhone"
                                        placeholder="Enter Your Phone Number" required>
                                </div>

                                <div class="input-box">
                                    <textarea name="message" class="w-100 p-3" style="border: 1px solid #ced4da; border-radius: 4px;" placeholder="Write your query or message here"></textarea>
                                </div>

                                <div class="button-box">
                                    <button class="btn-one" type="submit">
                                        <span class="txt">Apply Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COURSES & SCOPE -->
<section id="content" class="testimonial-style1-area py-5 bg-white">
    <div class="container">
        <div class="school-tech-content">
            <p>{!! $school->content !!}</p>
        </div>
    </div>
</section>

<!-- DEPARTMENTS SECTION -->
<section id="department" style=" background: #17345a;" class="tech-department-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title text-white">{{ $school->name }} Disciplines & Specializations</h2>
                <p class="section-subtitle text-white">
                    {!! $school->short_description !!}
                </p>
            </div>
        </div>

        <div class="row">

            {{-- Show Programs --}}
            @if (!empty($programs) && $programs->count())

            @foreach ($programs as $program)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="dept-card">
                    <div class="dept-header">
                        <span class="dept-icon flaticon-mouse"></span>
                        <h3>{{ $program->name }}</h3>
                    </div>

                    <div class="dept-body">
                        @if ($program->courses && $program->courses->count())
                        @foreach ($program->courses as $course)
                        <span class="tag">{{ $course->name }}</span>
                        @endforeach
                        @else
                        <span class="text-muted">No courses available</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach


            {{-- Show Courses Directly --}}
            @elseif(!empty($coursesInfo) && $coursesInfo->count())
            @foreach ($coursesInfo as $course)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="dept-card">
                    <div class="dept-header">
                        <span class="dept-icon flaticon-mouse"></span>
                        <h3>{{ $course->name }}</h3>
                    </div>

                    <div class="dept-body">
                        @if ($course->duration)
                        <span class="tag">
                            <strong>Duration:</strong> {{ $course->duration }}
                        </span>
                        @endif

                        @if ($course->eligibility)
                        <span class="tag">
                            <strong>Eligibility:</strong> {{ $course->eligibility }}
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach


            {{-- No Data --}}
            @else
            <div class="col-12">
                <p class="text-center text-white">
                    No programs available for this school at the moment.
                </p>
            </div>
            @endif

        </div>
    </div>
</section>

<!-- CSE SPECIALIZATIONS -->
{{-- <section id="specialization" class="cse-specialization-section">
        <div class="container">
            
            <div class="row mb-5">
                <div class="col-12 text-center">
                 
                        @foreach ($program->courses as $course)
                            <h2 class="section-title">
                                {{ $course->name }} in {{ $program->name }}
</h2>
@endforeach
@endforeach
<p class="section-subtitle">
    Industry-oriented Specializations at Manipur International University
</p>
</div>
</div>

<!-- SPECIALIZATION CARDS -->
<div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="spec-card image-card">
            <a href="/specialization-details">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/core-cse.jpg') }}" alt="Core Computer Science">
                </div>
                <h4>Core Computer Science</h4>
                <p>Programming, Data Structures & Algorithms</p>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/ai-ml.jpg') }}" alt="AI & ML">
                </div>
                <h4>Artificial Intelligence & ML</h4>
                <p>Machine Learning & Intelligent Systems</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/cyber-security.jpg') }}" alt="Cyber Security">
                </div>
                <h4>Cyber Security</h4>
                <p>Ethical Hacking & Digital Forensics</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">

        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/data-science.jpg') }}" alt="Data Science">
                </div>
                <h4>Data Science</h4>
                <p>Big Data Analytics & Visualization</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/cloud.jpg') }}" alt="Cloud Computing">
                </div>
                <h4>Cloud Computing</h4>
                <p>Cloud Architecture & DevOps</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/iot.jpg') }}" alt="IoT">
                </div>
                <h4>Internet of Things (IoT)</h4>
                <p>Smart Devices & Embedded Systems</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/blockchain.jpg') }}" alt="Blockchain">
                </div>
                <h4>Blockchain Technology</h4>
                <p>Decentralized Apps & Smart Contracts</p>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <a href="/specialization-details">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset('assets/images/cse/fullstack.jpg') }}" alt="Full Stack">
                </div>
                <h4>Full Stack Development</h4>
                <p>Frontend, Backend & APIs</p>
            </div>
        </a>
    </div>
</div>
</div>
</section> --}}

<!-- CIVIL SPECIALIZATIONS -->
{{-- <section class="cse-specialization-section">
        <div class="container">
            <!-- TITLE -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">B.Tech in Civil Engineering</h2>
                    <p class="section-subtitle">
                        Specialized domains shaping infrastructure and sustainability
                    </p>
                </div>
            </div>

            <!-- SPECIALIZATION CARDS -->
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="/specialization-details">
                        <div class="spec-card image-card">
                            <div class="spec-img">
                                <img src="{{ asset('assets/images/civil/structural.jpg') }}"
alt="Structural Engineering">
</div>
<h4>Structural Engineering</h4>
<p>Buildings, Bridges & Structural Design</p>
</div>
</a>
</div>

<div class="col-lg-3 col-md-6 mb-4">
    <a href="/specialization-details">
        <div class="spec-card image-card">
            <div class="spec-img">
                <img src="{{ asset('assets/images/civil/geotechnical.jpg') }}"
                    alt="Geotechnical Engineering">
            </div>
            <h4>Geotechnical Engineering</h4>
            <p>Soil Mechanics & Foundation Systems</p>
        </div>
    </a>
</div>

<div class="col-lg-3 col-md-6 mb-4">
    <a href="/specialization-details">
        <div class="spec-card image-card">
            <div class="spec-img">
                <img src="{{ asset('assets/images/civil/transportation.jpg') }}" alt="Transportation">
            </div>
            <h4>Transportation Engineering</h4>
            <p>Highways, Traffic & Airports</p>
        </div>
    </a>
</div>

<div class="col-lg-3 col-md-6 mb-4">
    <a href="/specialization-details">
        <div class="spec-card image-card">
            <div class="spec-img">
                <img src="{{ asset('assets/images/civil/environmental.jpg') }}"
                    alt="Environmental Engineering">
            </div>
            <h4>Environmental Engineering</h4>
            <p>Water, Waste & Pollution Control</p>
        </div>
    </a>
</div>
</div>
</div>
</section> --}}
{{-- @foreach ($school->courses as $course)
        @foreach ($course->programs as $program)
            <section class="cse-specialization-section">
                <div class="container">

                    <!-- TITLE -->
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-title">
                                {{ $course->name }} in {{ $program->name }}
</h2>

<p class="section-subtitle">
    Industry-oriented Specializations at Manipur International University
</p>
</div>
</div>

<!-- SPECIALIZATION CARDS -->
<div class="row">

    @foreach ($specializations as $specialization)
    <div class="col-lg-3 col-md-6 mb-4">
        <a
            href="/{{ Str::slug($course->name) }}/{{ Str::slug($program->name) }}/{{ $specialization->slug }}">
            <div class="spec-card image-card">
                <div class="spec-img">
                    <img src="{{ asset($specialization->image) }}"
                        alt="{{ $specialization->title }}">
                </div>
                <h4>{{ $specialization->title }}</h4>

            </div>
        </a>
    </div>
    @endforeach

</div>
</div>
</section>
@endforeach
@endforeach --}}
@foreach ($school->courses as $course)

@foreach ($course->programs as $program)

@if($program->specializations->isNotEmpty())

<section class="cse-specialization-section">
    <div class="container">

        <!-- TITLE -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    {{ $course->name }} in {{ $school->name }}
                </h2>

                <p class="section-subtitle">
                    Industry-oriented Specializations at Manipur International University
                </p>
            </div>
        </div>

        <!-- SPECIALIZATION CARDS -->
        <div class="row">

            @foreach ($program->specializations as $specialization)
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="/{{ Str::slug($course->name) }}/{{ Str::slug($program->name) }}/{{ $specialization->slug }}">

                    <div class="spec-card image-card">
                        <div class="spec-img">
                            <img src="{{ asset($specialization->image) }}"
                                alt="{{ $specialization->title }}">
                        </div>
                        <h4>{{ $specialization->title }}</h4>
                    </div>

                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endif

@endforeach

@endforeach
<!-- TESTIMONIALS -->
{{-- <section id="testimonials" style=" background: #17345a;" class="testimonial-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1__title">
                    <div class="sec-title">
                        <h2 class="text-white">Voices of MIU Alumni</h2>
                        <div class="sub-title text-white">
                            <p>Hear from our alumni as they share their experiences and success stories</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1-content">
                    <div class="theme_carousel testimonial-carousel owl-theme owl-carousel">
                        @for ($i = 0; $i < 7; $i++) <div class="single-testimonial-style1">
                            <div class="border-box"></div>
                            <div class="top-box">
                                <div class="quote-iocn-box">
                                    <span class="icon-quote"></span>
                                </div>
                                <div class="inner">
                                    <div class="img-box">
                                        <img src="{{ asset('/assets/images/testimonial/testimonial-v1-' . ($i + 1) . '.jpg') }}"
alt="Alumni">
</div>
<div class="rating-box">
    <ul>
        @for ($j = 0; $j < 7; $j++) <li><span class="icon-favourite"></span></li>
            @endfor
    </ul>
</div>
</div>
<div class="text">
    <p>The practical approach and industry exposure at MIU prepared me perfectly for
        my career in technology.</p>
</div>
</div>
<div class="client-name">
    <h3>Alumni Name {{ $i + 1 }}</h3>
    <span>B.Tech | MIU Alumni</span>
</div>
</div>
@endfor
</div>
</div>
</div>
</div>
</div>
</section> --}}
@if (!$testimonials->isEmpty())
<section id="testimonials" class="testimonial-style1-area" style=" background: #17345a;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1__title">
                    <div class="sec-title">
                        <h2 class="text-white">Feedback of {{ $school->name }}</h2>
                        <div class="sub-title">
                            <p class="text-white">
                                Hear from our alumni as they share their experiences and success stories at Manipur
                                International University
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-style1-content">
                    <div class="theme_carousel testimonial-carousel owl-theme owl-carousel owl-loaded owl-drag"
                        data-options="{
                                    &quot;loop&quot;: true,
                                    &quot;margin&quot;: 30,
                                    &quot;autoheight&quot;:true,
                                    &quot;lazyload&quot;:true,
                                    &quot;nav&quot;: false,
                                    &quot;dots&quot;: false,
                                    &quot;autoplay&quot;: true,
                                    &quot;autoplayTimeout&quot;: 5000,
                                    &quot;smartSpeed&quot;: 500,
                                    &quot;navText&quot;: [&quot;&lt;span class=\&quot;left icon-next\&quot;&gt;&lt;/span&gt;&quot;,
                                    &quot;&lt;span class=\&quot;right icon-next\&quot;&gt;&lt;/span&gt;&quot;],
                                    &quot;responsive&quot;:{
                                    &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; },
                                    &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                    &quot;768&quot; :{ &quot;items&quot; : &quot;1&quot; },
                                    &quot;992&quot;:{ &quot;items&quot; : &quot;2&quot; },
                                    &quot;1200&quot;:{ &quot;items&quot; : &quot;3&quot; }
                                }
                            }">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2800px, 0px, 0px); transition: 0.5s; width: 4800px;">
                                @foreach ($testimonials as $testimonial)
                                <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                    <div class="single-testimonial-style1">
                                        <div class="border-box"></div>
                                        <div class="top-box">
                                            <div class="quote-iocn-box">
                                                <span class="icon-quote"></span>
                                            </div>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="{{ asset($testimonial->image) }}"
                                                        alt="">
                                                </div>
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
                                                <p>{{ $testimonial->message }}</p>
                                            </div>
                                        </div>
                                        <div class="client-name">
                                            <h3>{{ $testimonial->name }}</h3>
                                            <span>{{ $testimonial->subtitle }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation"
                                class="owl-prev"><span class="left icon-next"></span></button><button
                                type="button" role="presentation" class="owl-next"><span
                                    class="right icon-next"></span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- FAQs -->
@if (!empty($faq))
<section id="faq" class="course-curriculum-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course-curriculum-content-box">
                    <div class="course-layout-content-box">
                        <div class="inner-title">
                            <h4>FAQs</h4>
                            <p>Need Help?</p>
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
<!-- RECRUITERS -->
{{-- <section id="partner" class="course-curriculum-area">
        <div class="container" style="overflow: hidden;">
            <div class="auto-container">
                <div class="sec-title text-center mb-4">
                    <h2>Our Recruiters & Industry Partners</h2>
                    <p>Leading organizations that trust and hire our graduates</p>
                </div>
                <div class="swiper recruiters-swiper">
                    <div class="swiper-wrapper">
                        @php
                            $recruiters = ['TCS', 'Infosys', 'Wipro', 'Accenture', 'HCL', 'IBM', 'Microsoft', 'Amazon'];
                        @endphp

                        @foreach ($recruiters as $recruiter)
                            <div class="swiper-slide my-4">
                                <div class="recruiter-logo">
                                    <img src="{{ asset('/assets/images/programs/program-1.jpg') }}"
alt="{{ $recruiter }}">
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</section> --}}

@endsection

@section('scripts')
<script>
    // Swiper for recruiters
    var swiper = new Swiper(".recruiters-swiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            }
        }
    });

    // FAQ Accordion
    document.addEventListener("DOMContentLoaded", function() {
        const accBtns = document.querySelectorAll(".acc-btn");
        accBtns.forEach(btn => {
            btn.addEventListener("click", function() {
                this.classList.toggle("active");
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    });

    // Form submission
    // document.getElementById('program-details-form-1').addEventListener('submit', function(e) {
    //     e.preventDefault();
    //     alert('Application submitted successfully! We will contact you shortly.');
    //     this.reset();
    // });
</script>
@endsection