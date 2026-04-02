@extends('web.layouts.main')
@section('title', '| Notice and Events')
@section('description', 'Notice and Events')

@section('styles')
    <style>
        .custom-image {
            background-position: center;
        }

        .messageimage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: -55px !important;
        }

        .text-start {
            text-align: start;
        }

        .py-80 {
            padding: 80px 0 50px 0;
        }

        .dept {
            width: 15rem;
        }

        .h200 {
            height: 250px;
        }

        @media (max-width: 480px) {
            .h200 {
                height: auto;
            }
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Notice and Events </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Manipur International University </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="testimonial-style9-area">
        <div class="container">
            <div class="sec-title">
                <h2>Notice and Events</h2>
                <div class="sub-title">
                    <p> Updates </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-style1-content">
                        <div class="theme_carousel testimonial-carousel-nine owl-nav-style-one owl-theme owl-carousel"
                            data-options='{
                                    {{-- "loop": true, --}}
                                        "loop": {{ $featuredPosts->count() > 1 ? 'true' : 'false' }},

                                    "margin": 30,
                                    "autoheight":true,
                                    "lazyload":true,
                                    "nav": true,
                                    "dots": false,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "smartSpeed": 500,
                                    "navText": ["<span class=\"left icon-right-arrow-1\"></span>",
                                    "<span class=\"right icon-right-arrow-1\"></span>"],
                                    "responsive":{
                                    "0" :{ "items": "1" },
                                    "600" :{ "items" : "1" },
                                    "768" :{ "items" : "2" },
                                    "992":{ "items" : "3" },
                                    "1200":{ "items" : "3" }
                                    }
                                }'>                         

                            @foreach ($featuredPosts as $post)
                                {{-- dd($featuredPosts); --}}
                                <div class="single-testimonial-style9 p-0">
                                    <div class="single-blog-style1">

                                        <div class="img-holder">
                                            <div class="inner h200">
                                                @if (!empty($post->image))
                                                    <img src="{{ asset($post->image) }}" class="w-100 img-fluid h-100"
                                                        alt="{{ $post->title }}">
                                                @endif
                                            </div>
                                            <div class="category-box">
                                                <div class="dot-box"></div>
                                                <p>{{ $post->category->name ?? 'MIU Official' }}</p>
                                            </div>
                                        </div>

                                        <div class="text-holder">
                                            <h3>
                                                <a href="{{ route('post.details', $post->slug) }}">
                                                    {{ substr($post->title, 0, 20) }}{{ strlen($post->title) > 25 ? '...' : '' }}
                                                </a>

                                            </h3>
                                            <div class="text pt-0">
                                                <p>{{ substr($post->short_description ?? $post->description, 0, 70) }}{{ strlen($post->short_description ?? $post->description) > 70 ? '...' : '' }}
                                                </p>
                                            </div>
                                            <div class="bottom-box">
                                                <div class="btn-box">
                                                    <a href="{{ route('post.details', $post->slug) }}">
                                                        <span class="icon-right-arrow-1"></span> Read More...
                                                    </a>
                                                </div>
                                                <div class="meta-info">
                                                    <ul>
                                                        <li>
                                                            <span class="icon-calendar"></span>
                                                            {{ $post->publish_date?->format('d m Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-style1-area">
        <div class="container">
            <div class="sec-title text-start">
                <h2> Recent Events</h2>
            </div>
            <div class="row">

                @forelse($recentEvents as $post)
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 mb-4">

                            <div class="img-holder">
                                <div class="inner h200">
                                    @if (!empty($post->image))
                                        <img src="{{ asset($post->image) }}" class="w-100 img-fluid h-100"
                                            alt="{{ $post->title }}">
                                    @endif
                                </div>
                            </div>

                            <div class="text-holder pt-3">

                                {{-- Publish Date --}}
                                @if ($post->publish_date)
                                    <span class="badge badge-info">
                                        {{ $post->publish_date->format('d F Y') }}
                                    </span>
                                @endif

                                {{-- New Badge --}}
                                @if ($post->is_new)
                                    <span class="badge badge-danger">New</span>
                                @endif

                                {{-- Category --}}
                                <div class="mt-1">
                                    <span class="badge badge-light text-start text-wrap">
                                        {{ $post->category->name ?? 'MIU Official' }}
                                    </span>
                                </div>

                                {{-- Title --}}
                                <h3 class="mt-2">
                                    <a href="{{ route('post.details', $post->slug) }}">
                                        {{ substr($post->title, 0, 20) }}{{ strlen($post->title) > 40 ? '...' : '' }}
                                    </a>
                                </h3>

                                {{-- Description --}}
                                <div class="text">
                                    <p>
                                        {{ substr($post->short_description ?? $post->description, 0, 70) }}{{ strlen($post->short_description ?? $post->description) > 80 ? '...' : '' }}
                                    </p>
                                </div>

                                <div class="bottom-box">
                                    <div class="btn-box">
                                        <a href="{{ route('post.details', $post->slug) }}">
                                            <span class="icon-right-arrow-1"></span> View More
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-12">
                        <p>No events found.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
    @if(!empty($recentNotices))
    <section class="instructor-courses-area gray-bg">
        <div class="container">
            <div class="sec-title-style5 text-start pb-4">
                <h2> Recent Notices </h2>
            </div>
            <div class="row">
                @foreach ($recentNotices as $post)
                    <div class="col-xl-12">
                        <a href="{{ route('post.details', $post->slug) }}">
                        <div class="single-courses-box-style4 p-3">
                            <div class="single-courses-box-style4__inner">
                                <div class="text-box ml-0">
                                    <h3 class="my-2">
                                       <a href="{{ route('post.details', $post->slug) }}">
                                           {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p class="badge  badge-success mb-0">{{ $post->publish_date->format('d F Y') }}</p>
                                    <p class="">{{ substr($post->short_description ?? $post->description, 0, 100) }}{{ strlen($post->short_description ?? $post->description) > 100 ? '...' : '' }}</p>
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

@endsection
@section('scripts')
@endsection
