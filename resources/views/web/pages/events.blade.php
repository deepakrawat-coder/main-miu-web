@extends('web.layouts.main')
@section('title', '| Events ')
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
                        <h1 class="breadcumb-title"> Events </h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li> events </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="event-area-1 position-relative space" id="event-sec">
        <div class="container th-container4">

            <div class="event-card-wrap">

                <div class="event-card style2 wow fadeInUp" data-wow-delay=".2s">
                    <div class="event-card-img global-img"><img src="{{ asset('new-miu/about/event.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">12</span>Jan</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2">
                                <a href="/event-details">Programming Languages For A
                                    Better World</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this
                                question has crucially helped humanity with achieving one of its most impressive feats
                                yet: orchestrating electric currents. Private Kansas colleges don’t have to exceed your
                                budget.</p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest
                                assured—you can afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s"><a class="location" href="#"><i
                                        class="fa-solid fa-location-dot"></i> 25 Circular Road, New York City </a><a
                                    class="date" href="#"><i class="fa-regular fa-calendar-days"></i> 25.02.2025
                                </a><a class="time" href="#"><i class="fa-solid fa-clock"></i> 09:00am - 12:00pm</a>
                            </div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a class="th-btn style-border1 th-icon"
                                href="/event-details">Details</a></div>
                    </div>
                </div>

                <div class="event-card style2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="event-card-img global-img"><img src="{{ asset('new-miu/about/event.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">07</span>Feb</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="/event-details">Center for Subjectivity
                                    Research 2009-2030</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this
                                question has crucially helped humanity with achieving one of its most impressive feats
                                yet: orchestrating electric currents. Private Kansas colleges don’t have to exceed your
                                budget.</p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest
                                assured—you can afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s"><a class="location" href="#"><i
                                        class="fa-solid fa-location-dot"></i> 25 Circular Road, New York City </a><a
                                    class="date" href="#"><i class="fa-regular fa-calendar-days"></i> 03.08.2025
                                </a><a class="time" href="#"><i class="fa-solid fa-clock"></i> 10:00am - 03:20pm</a>
                            </div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a class="th-btn style-border1 th-icon"
                                href="/event-details">Details</a></div>
                    </div>
                </div>

                <div class="event-card style2 wow fadeInUp" data-wow-delay=".6s">
                    <div class="event-card-img global-img"><img src="{{ asset('new-miu/about/event.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">22</span>Sep</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="/event-details">The Future of Archives in the
                                    Digital Age</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this
                                question has crucially helped humanity with achieving one of its most impressive feats
                                yet: orchestrating electric currents. Private Kansas colleges don’t have to exceed your
                                budget.</p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest
                                assured—you can afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s"><a class="location"
                                    href="#"><i class="fa-solid fa-location-dot"></i> 25 Circular Road, New York
                                    City </a><a class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    14.9.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    11:00am - 04:00pm</a></div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a class="th-btn style-border1 th-icon"
                                href="/event-details">Details</a></div>
                    </div>
                </div>

                <div class="event-card style2 wow fadeInUp" data-wow-delay=".8s">
                    <div class="event-card-img global-img"><img src="{{ asset('new-miu/about/event.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">23</span>Sep</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="/event-details">Programming Languages For A
                                    Better World</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this
                                question has crucially helped humanity with achieving one of its most impressive feats
                                yet: orchestrating electric currents. Private Kansas colleges don’t have to exceed your
                                budget.</p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest
                                assured—you can afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s"><a class="location"
                                    href="#"><i class="fa-solid fa-location-dot"></i> 25 Circular Road, New York
                                    City </a><a class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    14.10.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    11:00am - 04:00pm</a></div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a class="th-btn style-border1 th-icon"
                                href="/event-details">Details</a></div>
                    </div>
                </div>

                <div class="event-card style2 wow fadeInUp" data-wow-delay=".9s">
                    <div class="event-card-img global-img"><img src="{{ asset('new-miu/about/event.jpg') }}" alt="event">
                        <p class="event-card-tag"><span class="tag-number">24</span>Sep</p>
                    </div>
                    <div class="event-content">
                        <div class="event-wrapp">
                            <h3 class="box-title text-anim2"><a href="/event-details">Center for Subjectivity
                                    Research 2009-2030</a></h3>
                            <p class="box-text wow fadeInUp" data-wow-delay=".2s">Come for a quick session on how this
                                question has crucially helped humanity with achieving one of its most impressive feats
                                yet: orchestrating electric currents. Private Kansas colleges don’t have to exceed your
                                budget.</p>
                            <p class="box-text">Every traditional undergraduate student receives scholarships. Rest
                                assured—you can afford us, too.</p>
                            <div class="blog-meta wow fadeInUp" data-wow-delay=".3s"><a class="location"
                                    href="#"><i class="fa-solid fa-location-dot"></i> 25 Circular Road, New York
                                    City </a><a class="date" href="#"><i class="fa-regular fa-calendar-days"></i>
                                    14.11.2025 </a><a class="time" href="#"><i class="fa-solid fa-clock"></i>
                                    11:00am - 04:00pm</a></div>
                        </div>
                        <div class="btn-wrap wow fadeInUp" data-wow-delay=".4s"><a class="th-btn style-border1 th-icon"
                                href="/event-details">Details</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
