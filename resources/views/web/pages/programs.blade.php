@extends('web.layouts.main')
@section('title', 'Programs | MIU University')
@section('description', 'MIU University offers various UGC-certified programs across multiple disciplines.')

@section('content')
    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
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

    <section class="popular-course-area-1 space shape-mockup-wrap">
        <div class="container">
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
                            @foreach ($categories as $index => $category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link th-btn style-border1 {{ $index == 0 ? 'active' : '' }}"
                                        id="{{ Str::slug($category->name) }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ Str::slug($category->name) }}Tab" type="button" role="tab">
                                        {{ $category->name }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content">
                @foreach ($categories as $index => $category)
                    <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                        id="{{ Str::slug($category->name) }}Tab">
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                            @php
                                $categoryPrograms = $groupedPrograms[$category->name] ?? [];
                            @endphp
                            @foreach ($categoryPrograms as $program)
                                <div class="col">
                                    <div class="academic-card p-0"
                                        style="border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; height: 100%;">
                                        <div class="academic-img mb-0">
                                            <a href="program-details.html"><img
                                                    src="{{ asset($program->image ?? 'assets/img/academic/default.jpg') }}"
                                                    alt="School of Engineering"></a>
                                        </div>
                                        <div class="academic-content border-0 pb-0 mb-0 px-3 py-3">
                                            <h3 class="box-title"><a href="program-details.html">{{ $program->name }}</a>
                                            </h3>
                                            <p class="box-text style2 my-2"
                                                style="line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                {{ Str::limit($program->short_description ?? 'Program details available', 50) }}
                                            </p>
                                            <div class="d-flex justify-content-between mt-2 mb-2">
                                                <a href="javascript:void(0);" onclick="openEnquiryModal('program',  {{ $program->id }} )"  class="btn text-secondary custom_apply">Apply Now</a>
                                                <a href="/program/{{ $program->slug }}"
                                                    class="th-btn style-border1 th-icon">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
