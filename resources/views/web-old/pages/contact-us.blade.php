@extends('web.layouts.main')
@section('title', '| Contact Us')
@section('description', 'Contact')

@section('styles')
    <style>
        .custom-image {
            background-position: center;
        }
    </style>
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
                            <h2> We would Love to Hear from You </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Contact </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->




    <!--Start Contact Info Style4 Area-->
    <section class="contact-info-style4-area">
        <div class="container">
            <h2 class="mb-2"> Welcome to Manipur International University! </h2>
            <p> You can contact us by phone, email, or through our social channels. Our dedicated staff will be in touch
                with you shortly to assist with your inquiry and help you discover the opportunities that await at MIU. </p>
            <div class="row mt-5">

                <!--Start Single Contact Info Style4-->
                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-contact-info-style4">
                        <div class="icon">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('/assets/images/instructor/shape/about-v4-shape4.png') }});">
                            </div>
                            <div class="top-arrow">
                                <img src="{{ asset('/assets/images/instructor/shape/about-v4-shape3.png') }}" alt="">
                            </div>
                            <span class="flaticon-telephone"></span>
                        </div>
                        <div class="text">
                            <h3>Make a Call</h3>
                            <p>Make a call for your general enquiries.</p>
                            <a href="tel:8899788788">+91 8899788788</a>,
                            <a href="tel:9036983337">+91 9036983337</a>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Info Style4-->

                <!--Start Single Contact Info Style4-->
                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-contact-info-style4">
                        <div class="icon">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('/assets/images/instructor/shape/about-v4-shape4.png') }});">
                            </div>
                            <div class="top-arrow">
                                <img src="{{ asset('/assets/images/instructor/shape/about-v4-shape3.png') }}" alt="">
                            </div>
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="text">
                            <h3>Send a Mail</h3>
                            <p>Send your mail for general enquiries.</p>
                            <a href="mailto:info@miu.edu.in">info@miu.edu.in</a>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Info Style4-->

                <!--Start Single Contact Info Style4-->
                <div class="col-xl-4 col-lg-4 d-flex align-items-stretch">
                    <div class="single-contact-info-style4">
                        <div class="icon">
                            <div class="icon-bg"
                                style="background-image: url({{ asset('/assets/images/instructor/shape/about-v4-shape4.png')}});">
                            </div>
                            <div class="top-arrow">
                                <img src="{{ asset('/assets/images/instructor/shape/about-v4-shape3.png') }}" alt="">
                            </div>
                            <span class="flaticon-location"></span>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>MIU Administrative Office, Ghari, Airport Road, Imphal West, Manipur - 795140</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Info Style4-->
            </div>
        </div>
    </section>
    <!--End Contact Info Style4 Area-->


    <!--Start Main Contact Form Style2 Area-->
    <section class="main-contact-form-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-info-box-style3">
                        <div class="sec-title">
                            <h2>University Officials</h2>
                        </div>
                        <ul>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Chancellor</h3>
                                        <p> Mail: <a href="mailto:chancellor@miu.edu.in">chancellor@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Pro Vice-Chancellor (VC In-charge)</h3>
                                        <p> Mail: <a href="mailto:provc@miu.edu.in">provc@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Registrar</h3>
                                        <p> Mail: <a href="mailto:registrar@miu.edu.in">registrar@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Director, College Development Council</h3>
                                        <p> Mail: <a href="mailto:director@miu.edu.in">director@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Administrator cum Finance Officer</h3>
                                        <p> Mail: <a href="mailto:administrator@miu.edu.in">administrator@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-details-style2-single">
                                    <div class="icon"> <span class="icon-email"></span> </div>
                                    <div class="text">
                                        <h3>Front Office</h3>
                                        <p> Mail: <a href="mailto:helpdesk@miu.edu.in">helpdesk@miu.edu.in</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sec-title-style5 text-start pb-3 mt-5">
                <h2> Stay Connected </h2>
                <div class="btns-box mt-43">
                    <a class="btn-one" href="https://www.facebook.com/ManipurInternationalUniversityOfficial">
                        <span class="txt">
                            Follow us on Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Contact Form Style2 Area-->


@endsection
@section('scripts')
@endsection
