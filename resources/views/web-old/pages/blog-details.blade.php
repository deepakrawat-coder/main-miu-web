@extends('web.layouts.main')
@section('title', '| Blogs Details')
@section('description', 'Blogs Details')

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
                            <h3 class="text-white"> Title: {{ $blog->title }} </h3>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Manipur International University  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Blog Details Page -->
    <section class="blog-details-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-9">
                    <div class="blog-details-page__content">
                        <div class="blog-details-page__content__inner">
                            @if(!empty($blog->image))
                               <div class="blog-details-page__img-box">
                                <img src="{{ asset($blog->image) }}" class="img-fluid" alt="image">
                            </div>
                            @endif
                           
                            <div class="my-4">
                                <h2>{{ $blog->title }}</h2>
                                <p>{!! $blog->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Thm Sidebar Box-->
                <div class="col-xl-3 col-lg-5">
                    @if(!empty($otherBlogs) && count($otherBlogs) > 0)
                    <div class="thm-sidebar-box">
                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <div class="dot-box"></div>
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="sidebar-blog-post">
                                <ul class="blog-post">
                                    @foreach($otherBlogs as $otherBlog)
                                    <li>
                                        <div class="inner">
                                            <div class="img-box ">
                                                <img src="{{ asset($otherBlog->image) }}" class="img-fluid h-100"
                                                    alt="image">
                                                <div class="overlay-content">
                                                    <a href="/blog/{{ $otherBlog->slug }}" class="link">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <div class="post-date">
                                                    <span class="icon-date"></span> {{ date('M d, Y', strtotime($otherBlog->created_at)) }}
                                                </div>
                                                <h4>
                                                    <a href="/blog/{{ $otherBlog->slug }}">
                                                        {{ substr($otherBlog->title,0,30) }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!--End Thm Sidebar Box-->

            </div>
        </div>
    </section>
    <!--End Blog Details Page -->


@endsection
@section('scripts')
@endsection
