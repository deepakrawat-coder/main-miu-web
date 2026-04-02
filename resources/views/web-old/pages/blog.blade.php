@extends('web.layouts.main')
@section('title', '| Blog')
@section('description', 'Blog')

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

        .single-blog-style2__img-holder .inner img {
    height: 270px;
        }

        @media (max-width: 990px) {
            .single-blog-style2__img-holder .inner img {
    height: auto;
        }
        }
    </style>
@endsection
@section('content')


    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url(/assets/images/about/about.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Recent Blogs </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> MIU Scholarship Policy </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

     @if(!empty($blogs))
    <section class="blog-page-two">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="blog-page-two__content">
                        <div class="row">
                            @foreach ($blogs as $blog)
                            <div class="col-lg-12">
                                <div class="single-blog-style2 ">
                                    <div class="single-blog-style2__img-holder  h-100 border-none shadow-none bg-white">
                                        <div class="inner h-100 border-none shadow-none bg-white">
                                            <img src="{{ asset($blog->image) }}" class="img-fluid h-100"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="single-blog-style2__text-holder">
                                        <div class="top">
                                            <div class="category-box">
                                                <div class="dot-box"></div>
                                                <p>Manipur International University</p>
                                            </div>
                                        </div>
                                        <h3 class="blog-title">
                                            <a
                                                href="/blog/{{ $blog->slug }}">
                                              {{ $blog->title }}
                                            </a>
                                        </h3>
                                        <div class="text">
                                            <p>{{ $blog->short_description }}</p>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="btn-box">
                                                <a
                                                    href="/blog/{{ $blog->slug }}">
                                                    <span class="icon-right-arrow-1"></span>Read More
                                                </a>
                                            </div>
                                            <div class="meta-info">
                                                <ul>
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <a
                                                            href="/blog/{{ $blog->slug }}">{{ $blog->created_at->format('M d, Y') }}</a>
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
     @endif

@endsection
@section('scripts')
@endsection