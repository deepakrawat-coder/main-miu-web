@extends('web.layouts.main')
@section('title', '| Schools and Departments Details')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
@endsection
@section('content')


    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $school->name }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>{{ $school->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="space-top space-extra-bottom">
        <div class="container ">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="page-single">
                        <div class="page-img global-img"><img src="{{ asset($school->image) }}" alt="Event Image">
                            {{-- <p class="tag"><span class="tag-number">12</span>june</p> --}}
                        </div>

                        <h3 class="h3 mt-n2">About the School of Science</h3>
                        <p class="mb-30">
                            {{ $school->content }}
                        </p>




                    </div>
                </div>
                {{-- <div class="col-lg-4">
                 
                </div> --}}
            </div>
        </div>
    </section>


    <section class="cat-area-1 position-relative overflow-hidden space">
        <div class="shape-mockup" data-top="0%" data-left="0%"><img
                src="{{ asset('/assets/img/shape/feature-shep-home-1.png') }}" alt="Stadum"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-10 col-md-10">
                            <div class="title-area"><span class="sub-title text-anim">COURSES</span>
                                <h2 class="sec-title text-anim2"> School of Science Disciplines & Specializations </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                        <!-- Card 1 -->
                        @foreach ($course as $course)
                            <div class="col">
                                <div class="academic-card p-0 border-0"
                                    style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                    <div class="academic-img mb-0">
                                        <a href="/course/{{ $course->slug }}"><img src="{{ asset($course->image) }}"
                                                alt="School of Commerce"></a>
                                    </div>
                                    <div class="academic-content border-0 pb-0 mb-0 px-0 py-3">
                                        <h3 class="box-title"><a href="/course/{{ $course->slug }}">{{ $course->name }}</a></h3>
                                        <p class="box-text style2 my-2"
                                            style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            {!! substr($course->short_description, 0, 50) !!}...
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="cat-shape shape-mockup jump" data-bottom="15%" data-left="10%"><img src="assets/img/shape/cat-3-1.png"
                alt="Stadum"></div>
        <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="assets/img/shape/feature-shep-2-home-1.png"
                alt="Stadum"></div> --}}
    </section>


@endsection
