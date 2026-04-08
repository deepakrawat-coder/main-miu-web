@extends('web.layouts.main')
@section('title', '| All Blogs ')
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
                        <h1 class="breadcumb-title">All Blogs</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="blog-arae-3 overflow-hidden space" id="blog-sec">

        <div class="container th-container4">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start"><span class="sub-title text-anim">LATEST NEWS
                            & BLOGS</span>
                        <h2 class="sec-title text-anim2">Get Latest <span class="text-theme">News</span> & Blogs
                        </h2>
                    </div>
                </div>
                {{-- <div class="col-auto align-self-end">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".2s"><a href="blog.html"
                            class="th-btn style-border1 th-icon">Explore All</a></div>
                </div> --}}
            </div>


            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card wow fadeInUp border-0" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="blog-img position-relative p-3 pb-0">
                                <a href="/blog/{{ $blog->slug }}">
                                    <div class="blog-img-box position-relative overflow-hidden">
                                        <img src="{{ asset($blog->image) }}" alt="blog image">
                                        <img src="{{ asset($blog->image) }}" alt="blog image">
                                    </div>
                                </a>
                                <div class="blog-date">
                                    <h5 class="blog-date-title">
                                        {{ \Carbon\Carbon::parse($blog->published_date)->format('d') }}</h5>
                                    <p class="blog-date-text">
                                        {{ \Carbon\Carbon::parse($blog->published_date)->format('M, Y') }}</p>
                                </div>
                            </div>
                            <div class="blog-content pt-0 px-3">
                                <h3 class="box-title"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
                                <p class="box-text">{{ $blog->short_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-12 col-md-4">
                    <div class="blog-card blog-card2 mb-4">
                        <div class="blog-img2 position-relative"><a href="/blog-details">
                                <div class="blog-img-box2 position-relative"><img src="{{ asset('/new-miu/about/11.jpg') }}"
                                        alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">june, 25</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="/blog-details"> - By Admin
                                </a>
                            </div>
                            <h3 class="box-title">
                                <a href="/blog-details">How Motivated When Learning Something New</a>
                            </h3>
                            <p class="box-text">
                                At Stadum University we are committed to providing a high-quality education...</p>
                            <div class="btn-wrap">
                                <a href="/blog-details" class="th-btn th-icon style-border1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="blog-card blog-card2 mb-4">
                        <div class="blog-img2 position-relative"><a href="/blog-details">
                                <div class="blog-img-box2 position-relative"><img src="{{ asset('/new-miu/about/11.jpg') }}"
                                        alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">june, 25</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="/blog-details"> - By Admin
                                </a>
                            </div>
                            <h3 class="box-title">
                                <a href="/blog-details">How Motivated When Learning Something New</a>
                            </h3>
                            <p class="box-text">
                                At Stadum University we are committed to providing a high-quality education...</p>
                            <div class="btn-wrap">
                                <a href="/blog-details" class="th-btn th-icon style-border1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="blog-card blog-card2 mb-4">
                        <div class="blog-img2 position-relative"><a href="/blog-details">
                                <div class="blog-img-box2 position-relative"><img src="{{ asset('/new-miu/about/11.jpg') }}"
                                        alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">june, 25</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="/blog-details"> - By Admin
                                </a>
                            </div>
                            <h3 class="box-title">
                                <a href="/blog-details">How Motivated When Learning Something New</a>
                            </h3>
                            <p class="box-text">
                                At Stadum University we are committed to providing a high-quality education...</p>
                            <div class="btn-wrap">
                                <a href="/blog-details" class="th-btn th-icon style-border1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="blog-card blog-card2 mb-4">
                        <div class="blog-img2 position-relative"><a href="/blog-details">
                                <div class="blog-img-box2 position-relative">
                                    <img src="{{ asset('/new-miu/about/11.jpg') }}" alt="blog image"></div>
                            </a>
                            <div class="blog-date">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">june, 25</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="/blog-details"> - By Admin
                                </a>
                            </div>
                            <h3 class="box-title">
                                <a href="/blog-details">How Motivated When Learning Something New</a>
                            </h3>
                            <p class="box-text">
                                At Stadum University we are committed to providing a high-quality education...</p>
                            <div class="btn-wrap">
                                <a href="/blog-details" class="th-btn th-icon style-border1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>



        </div>
    </section>




@endsection
