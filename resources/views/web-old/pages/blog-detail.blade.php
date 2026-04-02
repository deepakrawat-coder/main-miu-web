@extends('web.layouts.main')
@section('title', '| ' . ($blog->meta_title ?? $blog->title))
@section('description', $blog->meta_description ?? $blog->short_description)

@section('styles')
<style>
    .custom-image {
        background-position: center;
    }

    .blog-content img {
        max-width: 100%;
        height: auto;
    }
</style>
@endsection

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg custom-image" style="background-image: url(/assets/images/about/about.jpg);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                        <h2>{{ $blog->title }}</h2>
                    </div>
                    <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/blog">Blogs</a></li>
                            <li class="active text-white">{{ $blog->title }}</li>
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
                        @if($blog->image)
                        <div class="blog-details-page__img-box">
                            <img src="{{ asset($blog->image) }}" class="img-fluid w-100" alt="{{ $blog->title }}">
                        </div>
                        @endif

                        <div class="blog-info my-3">
                            <span class="text-muted"><i class="fa fa-calendar"></i> {{ $blog->published_date ? $blog->published_date->format('M d, Y') : 'N/A' }}</span>
                        </div>

                        <div class="blog-content mb-5">
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>
            </div>

            <!--Start Thm Sidebar Box (Optional/Placeholder)-->
            <div class="col-xl-3 col-lg-5">
                <div class="thm-sidebar-box">
                    <div class="single-sidebar-box">
                        <div class="sidebar-title">
                            <div class="dot-box"></div>
                            <h3>Recent Blogs</h3>
                        </div>
                        <div class="sidebar-blog-post">
                            <ul class="blog-post">
                                {{-- You can pass recent blogs here if needed --}}
                                <p class="text-muted small">Stay updated with our latest news.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Thm Sidebar Box-->

        </div>
    </div>
</section>
<!--End Blog Details Page -->

@endsection