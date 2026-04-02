@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')

@endsection
@section('content')

    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image" style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Schools</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Schools</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Our Academic School</h2>
                <div class="sub-title">
                    <p>
                        A wide range of School dedicated to excellence in education,
                        research, and professional development.
                    </p>
                </div>
            </div>
            <div class="row">

                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-budget"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Accounting</a>
                                    <div class="text">
                                        <p>To take a trivial example which of us
                                            ever undertakes laborious physical exercise
                                            to obtain some advantage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-1.jpg') }});">
                            </div>
                        </div>

                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Accounting Management</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-portfolio"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Business</a>
                                    <div class="text">
                                        <p>Indignation and dislike men who
                                            beguileds and all demoralized by that
                                            of pleasure of the moment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-2.jpg') }});">
                            </div>
                        </div>

                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Business Management</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-keyboard"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Computer</a>
                                    <div class="text">
                                        <p>To take a trivial example which of us
                                            ever undertakes laborious physical exercise
                                            to obtain some advantage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-3.jpg') }});">
                            </div>
                        </div>

                        <div class="single-department-box-style2__ovarlay-content left">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Computer Science</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single Departments Box Style2-->


                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-test-tube"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Health Sciences</a>
                                    <div class="text">
                                        <p>Our power of choice is when
                                            nothing prevent our being able to do
                                            what we like best.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-4.jpg') }});">
                            </div>
                        </div>
                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Health Sciences</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-leaf"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Plant Sciences</a>
                                    <div class="text">
                                        <p>To take a trivial example which of us
                                            ever undertakes laborious physical exercise
                                            to obtain some advantage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-5.jpg') }});">
                            </div>
                        </div>

                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Plant Sciences</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-fire-extinguisher"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Public Safety</a>
                                    <div class="text">
                                        <p>Indignation and dislike men who
                                            beguileds and all demoralized by that
                                            of pleasure of the moment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-6.jpg') }});">
                            </div>
                        </div>
                        <div class="single-department-box-style2__ovarlay-content left">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Public Safety</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->


                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-fire-extinguisher"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Public Safety</a>
                                    <div class="text">
                                        <p>Indignation and dislike men who
                                            beguileds and all demoralized by that
                                            of pleasure of the moment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-7.jpg') }});">
                            </div>
                        </div>
                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Public Safety</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-test-tube"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Health Sciences</a>
                                    <div class="text">
                                        <p>Our power of choice is when
                                            nothing prevent our being able to do
                                            what we like best.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-8.jpg') }});">
                            </div>
                        </div>
                        <div class="single-department-box-style2__ovarlay-content">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Health Sciences</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->
                <!--Start Single Departments Box Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-departments-box single-department-box-style2">
                        <div class="single-department-box-style2__inner text-center">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="icon-leaf"></span>
                                    <div class="round-box"></div>
                                </div>
                                <div class="text-holder">
                                    <a href="#">Plant Sciences</a>
                                    <div class="text">
                                        <p>To take a trivial example which of us
                                            ever undertakes laborious physical exercise
                                            to obtain some advantage.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-box"
                                style="background-image: url({{ asset('/assets/images/resources/departments-9.jpg') }});">
                            </div>
                        </div>

                        <div class="single-department-box-style2__ovarlay-content left">
                            <div class="inner">
                                <h5>Undergraduate</h5>
                                <h3>Plant Sciences</h3>
                                <p>The claims of duty or the obligations business it will frequently.</p>
                                <ul>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Business Administration</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dot-box"></div>
                                        <div class="inner-text">
                                            <h4>Bachelor of Commerce (Honours)</h4>
                                            <a href="#"><span class="fa fa-file-pdf-o"></span> Syllabus.pdf</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one btn-one--style2" href="/programs">
                                        <span class="txt">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Departments Box Style2-->

            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
