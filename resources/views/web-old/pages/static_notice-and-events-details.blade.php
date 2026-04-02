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

                        <div class="blog-details-page__img-box">
                            <img src="{{ asset('/assets/images/web-image/ne1.jpeg') }}" class="w-100 img-fluid mb-4"
                                alt="image">
                        </div>

                        <div class="blog-details-page__text-3">
                            <span class="badge badge-info"> January 27, 2026 </span>
                            <span class="badge badge-danger mb-3">MIU Official</span>

                            <h3>Patriotic Run – Veterans India</h3>
                            <div class="inner-text">
                                <p>
                                    A successful Patriotic Run by Veteran India in collaboration with Manipur
                                    International University, followed by fun-filled games with students and
                                    faculty—celebrating unity, teamwork, and national pride!
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="blog-details-page__prev-next-option">
                        <div class="single-box left">
                            <div class="icon-box">
                                <a href="#">
                                    <span class="icon-right-arrow-1"></span>
                                </a>
                            </div>
                            <div class="title-box">
                                <h3>
                                    <a href="#">A Core Commitment to Liberal<br> Arts and Sciences</a>
                                </h3>
                            </div>
                        </div>
                        <div class="single-box right">
                            <div class="icon-box">
                                <a href="#">
                                    <span class="icon-right-arrow-1"></span>
                                </a>
                            </div>
                            <div class="title-box">
                                <h3>
                                    <a href="#">University College Appoints<br> Dean of Humanities</a>
                                </h3>
                            </div>
                        </div>
                    </div> --}}


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

                                    <!--Start Single Testimonial Style9-->
                                    <div class="single-testimonial-style9 p-0">
                                        <div class="single-blog-style1">
                                            <div class="img-holder">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/images/web-image/ne1.jpeg') }}"
                                                        class="w-100 img-fluid" alt="image">
                                                </div>
                                                <div class="category-box">
                                                    <div class="dot-box"></div>
                                                    <p>MIU Official</p>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <h3><a href="/notice-and-events-details">Patriotic Run – Veterans
                                                        India</a></h3>
                                                <div class="text pt-0">
                                                    <p>A successful Patriotic Run by Veteran India in collaboration with
                                                        Manipur
                                                        International University, followed by fun-filled games with
                                                        students and...
                                                    </p>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="btn-box">
                                                        <a href="/notice-and-events-details"> <span
                                                                class="icon-right-arrow-1"></span>Read
                                                            More... </a>
                                                    </div>
                                                    <div class="meta-info">
                                                        <ul>
                                                            <li><span class="icon-calendar"></span><a
                                                                    href="/notice-and-events-details"> 27
                                                                    January
                                                                    2026 </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-testimonial-style9 p-0">
                                        <div class="single-blog-style1">
                                            <div class="img-holder">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/images/web-image/ne2.jpg') }}"
                                                        class="w-100 img-fluid" alt="image">
                                                </div>
                                                <div class="category-box">
                                                    <div class="dot-box"></div>
                                                    <p>MIU Official</p>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <h3><a href="/notice-and-events-details">Reception of Our Champions</a>
                                                </h3>
                                                <div class="text pt-0">
                                                    <p>A proud day for MIU! Our scholar from the Department of Yoga &
                                                        Physical
                                                        Education has made history by winning...</p>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="btn-box">
                                                        <a href="/notice-and-events-details"> <span
                                                                class="icon-right-arrow-1"></span>Read
                                                            More... </a>
                                                    </div>
                                                    <div class="meta-info">
                                                        <ul>
                                                            <li><span class="icon-calendar"></span><a
                                                                    href="/notice-and-events-details"> 03
                                                                    September
                                                                    2025 </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-testimonial-style9 p-0">
                                        <div class="single-blog-style1">
                                            <div class="img-holder">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/images/web-image/ne3.jpg') }}"
                                                        class="w-100 img-fluid" alt="image">
                                                </div>
                                                <div class="category-box">
                                                    <div class="dot-box"></div>
                                                    <p>MIU Official</p>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <h3><a href="/notice-and-events-details">Reviving Traditional Utong
                                                        Ngari Production</a>
                                                </h3>
                                                <div class="text pt-0">
                                                    <p>A heartfelt thank you to everyone who joined the Program on
                                                        Reviving
                                                        Traditional Utong Ngari Production. We are deeply honoured...
                                                    </p>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="btn-box">
                                                        <a href="/notice-and-events-details"> <span
                                                                class="icon-right-arrow-1"></span>Read
                                                            More... </a>
                                                    </div>
                                                    <div class="meta-info">
                                                        <ul>
                                                            <li><span class="icon-calendar"></span><a
                                                                    href="/notice-and-events-details"> 14
                                                                    July
                                                                    2025 </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-testimonial-style9 p-0">
                                        <div class="single-blog-style1">
                                            <div class="img-holder">
                                                <div class="inner">
                                                    <img src="{{ asset('/assets/images/web-image/ne4.jpg') }}"
                                                        class="w-100 img-fluid" alt="image">
                                                </div>
                                                <div class="category-box">
                                                    <div class="dot-box"></div>
                                                    <p>MIU Official</p>
                                                </div>
                                            </div>
                                            <div class="text-holder">
                                                <h3><a href="/notice-and-events-details">City Farming and Space
                                                        Utilisation</a></h3>
                                                <div class="text pt-0">
                                                    <p>Congratulations to Prof. P. Kumar, (Pro- Vice Chancellor), Prof.
                                                        Ajit Kumar
                                                        Ng(Dean of the School of Biological Sciences)and Associate
                                                        Professor...</p>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="btn-box">
                                                        <a href="/notice-and-events-details"> <span
                                                                class="icon-right-arrow-1"></span>Read More... </a>
                                                    </div>
                                                    <div class="meta-info">
                                                        <ul>
                                                            <li><span class="icon-calendar"></span><a
                                                                    href="/notice-and-events-details">
                                                                    07 July
                                                                    2025 </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="add-comment-box">
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
                                                <input type="text" name="fname" value="" placeholder="" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <div class="field-label">
                                                    <p>Email*</p>
                                                </div>
                                                <input type="email" name="femail" value="" placeholder="" required="">
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
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


@endsection
@section('scripts')
@endsection
