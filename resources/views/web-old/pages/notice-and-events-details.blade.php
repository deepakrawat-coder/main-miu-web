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
                            <h2> Notice and Events Details </h2>
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


    <section class="blog-details-page">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="blog-details-page__content">
                        <div class="blog-details-page__content__inner">
                            @if (!empty($post->image))
                                <div class="blog-details-page__img-box">
                                    <img src="{{ asset($post->image) }}" class="w-100 img-fluid mb-4"
                                        alt="{{ $post->title }}">
                                </div>
                            @endif

                            <div class="blog-details-page__text-3">                               
                                {{-- Date --}}
                                @if ($post->publish_date)
                                    <span class="badge badge-info">
                                        {{ $post->publish_date->format('F d, Y') }}
                                    </span>
                                @endif

                                {{-- Category --}}
                                <span class="badge badge-danger mb-3">
                                    {{ $post->category->name ?? 'MIU Official' }}
                                </span>

                                {{-- Title --}}
                                <h3>{{ $post->title }}</h3>

                                {{-- Description --}}
                                <div class="inner-text">
                                    {!! $post->description !!}
                                </div>

                            </div>
                        </div>

                      
                        @if($categoryName !=='Notice')
                        <div class="sec-title">
                            <h2>Similar Posts</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonial-style1-content">
                                    <div class="theme_carousel testimonial-carousel-nine owl-nav-style-one owl-theme owl-carousel"
                                        data-options='{
                                    "loop": true,
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

                                        @forelse($similarPosts as $similar)
                                            <div class="single-testimonial-style9 p-0">
                                                <div class="single-blog-style1">
                                                    @if (!empty($similar->image))
                                                        <div class="img-holder">
                                                            <div class="inner">
                                                                <img src="{{ asset($similar->image) }}"
                                                                    class="w-100 img-fluid" alt="{{ $similar->title }}">
                                                            </div>

                                                            <div class="category-box">
                                                                <div class="dot-box"></div>
                                                                <p>{{ $similar->category->name ?? 'MIU Official' }}</p>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="text-holder">

                                                        <h3>
                                                            <a href="{{ route('post.details', $similar->slug) }}">
                                                                {{ Str::limit($similar->title, 60) }}
                                                            </a>
                                                        </h3>

                                                        <div class="text pt-0">
                                                            <p>
                                                                {{ Str::limit(strip_tags($similar->short_description ?? $similar->description), 120) }}
                                                            </p>
                                                        </div>

                                                        <div class="bottom-box">
                                                            <div class="btn-box">
                                                                <a href="{{ route('post.details', $similar->slug) }}">
                                                                    <span class="icon-right-arrow-1"></span> Read More...
                                                                </a>
                                                            </div>

                                                            <div class="meta-info">
                                                                <ul>
                                                                    <li>
                                                                        <span class="icon-calendar"></span>
                                                                        {{ $similar->publish_date?->format('d F Y') }}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="text-center p-4">
                                                <p>No similar posts available.</p>
                                            </div>
                                        @endforelse


                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="add-comment-box">
                            <div class="inner-title">
                                <h2>Leave a Reply</h2>
                                <p> Your email address will not be published. Required fields are marked <span
                                        class="text-danger">*</span></p>
                            </div>
                            <form id="add-comment-form" action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="input-box">
                                                    <div class="field-label">
                                                        <p>Comments</p>
                                                    </div>
                                                    <textarea name="fcomments" placeholder="" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <div class="field-label">
                                                        <p>Name*</p>
                                                    </div>
                                                    <input type="text" name="fname" value="" placeholder=""
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-box">
                                                    <div class="field-label">
                                                        <p>Email*</p>
                                                    </div>
                                                    <input type="email" name="femail" value="" placeholder=""
                                                        required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="checked-box2">
                                                    <input type="checkbox" name="skipper1" id="skipper" checked="">
                                                    <label for="skipper"><span></span> Save my name, email, and website in
                                                        this browser for the next time I comment.</label>
                                                </div>
                                                <div class="button-box">
                                                    <button class="btn-one" type="submit">
                                                        <span class="txt">Post Comment</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div> --}}
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
