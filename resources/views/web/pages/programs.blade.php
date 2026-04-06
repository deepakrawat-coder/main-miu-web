@extends('web.layouts.main')
@section('title', '| Schools and Departments ')
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
                        <h1 class="breadcumb-title">Programs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>Programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="popular-course-area-1 space shape-mockup-wrap ">
        <div class="container ">
            <div class="row justify-content-xl-between justify-content-center align-items-center">
                <div class="col-xl-6 col-12">
                    <div class="title-wrap">
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title text-anim">MIU PROGRAMS</span>
                            <h2 class="sec-title text-anim2">Choose Your Path <span class="d-block">at Manipur
                                    International University</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-auto align-self-end">
                    <div class="sec-btn">
                        <ul class="nav nav-tabs course-tabs popularcourse-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active th-btn style-border1" id="diploma-tab" data-bs-toggle="tab"
                                    data-bs-target="#diplomaTab" type="button" role="tab"
                                    aria-selected="true">Diploma</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="ug-tab" data-bs-toggle="tab"
                                    data-bs-target="#ugTab" type="button" role="tab" aria-selected="false">UG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="pg-tab" data-bs-toggle="tab"
                                    data-bs-target="#pgTab" type="button" role="tab" aria-selected="false">PG</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link th-btn style-border1" id="phd-tab" data-bs-toggle="tab"
                                    data-bs-target="#phdTab" type="button" role="tab"
                                    aria-selected="false">PhD</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>         
            <div class="tab-content">

                {{-- Diploma --}}
                <div class="tab-pane fade show active" id="diplomaTab">
                    <div class="row g-4">
                        @foreach ($programs['Diploma'] ?? [] as $program)
                            @foreach ($program->specializations as $course)
                                <div class="col-md-4">
                                    <div class="academic-card p-0">
                                        <div class="academic-img">
                                            <img src="{{ asset($course->image ?? 'assets/img/academic/default.jpg') }}">
                                        </div>

                                        <div class="p-3">
                                            <h5>{{ $course->title }}</h5>
                                            <p>
                                                {{ Str::limit($course->description ?? 'Course details available', 50) }}
                                            </p>

                                            <a href="/program/{{ $course->slug }}" class="th-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>

                {{-- UG --}}
                <div class="tab-pane fade" id="ugTab">
                    <div class="row g-4">
                        @foreach ($programs['UG'] ?? [] as $program)
                            @foreach ($program->specializations as $course)
                                <div class="col-md-4">
                                    <div class="academic-card p-0">
                                        <div class="academic-img">
                                            <img src="{{ asset($course->image ?? 'assets/img/academic/default.jpg') }}">
                                        </div>

                                        <div class="p-3">
                                            <h5>{{ $course->title }}</h5>
                                            <p>{{ Str::limit($course->description ?? '', 50) }}</p>
                                            <a href="/program/{{ $course->slug }}" class="th-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>

                {{-- PG --}}
                <div class="tab-pane fade" id="pgTab">
                    <div class="row g-4">
                        @foreach ($programs['PG'] ?? [] as $program)
                            @foreach ($program->specializations as $course)
                                <div class="col-md-4">
                                    <div class="academic-card p-0">
                                        <div class="academic-img">
                                            <img src="{{ asset($course->image ?? 'assets/img/academic/default.jpg') }}">
                                        </div>

                                        <div class="p-3">
                                            <h5>{{ $course->title }}</h5>
                                            <p>{{ Str::limit($course->description ?? '', 50) }}</p>
                                            <a href="/program/{{ $course->slug }}" class="th-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>

                {{-- PhD --}}
                <div class="tab-pane fade" id="phdTab">
                    <div class="row g-4">
                        @foreach ($programs['PHD'] ?? [] as $program)
                            @foreach ($program->specializations as $course)
                                <div class="col-md-4">
                                    <div class="academic-card p-0">
                                        <div class="academic-img">
                                            <img src="{{ asset($course->image ?? 'assets/img/academic/default.jpg') }}">
                                        </div>

                                        <div class="p-3">
                                            <h5>{{ $course->title }}</h5>
                                            <p>{{ Str::limit($course->description ?? '', 80) }}</p>
                                            <a href="/program/{{ $course->slug }}" class="th-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
