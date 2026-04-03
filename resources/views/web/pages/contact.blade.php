@extends('web.layouts.main')
@section('title', '| Contact ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
@endsection
@section('content')


    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner3.png') }}" alt="bg-banner"></div>
        {{-- <div class="breadcumb-shape"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="shape" class="jump"></div> --}}
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="space overflow-hidden">
        <div class="container th-container4">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">MIU Address</h3>
                            <p class="box-text">Manipur International University Imphal, Manipur India - 795001.</p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-solid fa-phone-volume"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">Phone Number</h3>
                            <p class="box-text"><a href="tel:+91 9036983337">+91 9036983337</a> <a
                                    href="tel:+91 8899788788">+91 8899788788</a></p>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="box-icon"><i class="fa-light fa-envelope"></i></div>
                        <div class="media-body">
                            <h3 class="box-title">Email Address</h3>
                            <p class="box-text"><a href="mailto:info@miu.edu.in">info@miu.edu.in</a> </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-8">
                    <div class="contact-form-v1">
                        <form action="#" method="POST" class="contact-form2 ajax-contact">
                            <div class="title-area mb-60"><span class="sub-title">For any query, contact us</span>
                                <h2 class="sec-title">Get in touch with us</h2>
                            </div>
                            <div class="row">
                                <div class="form-group style-border col-md-6"><input type="text" class="form-control"
                                        name="firstname" id="firstname2" placeholder="Enter Full Name*"></div>
                                <div class="form-group style-border col-md-6"><input type="number" class="form-control"
                                        name="number" id="number2" placeholder="Phone*"></div>
                                <div class="form-group style-border col-12"><input type="email" class="form-control"
                                        name="email" id="email2" placeholder="E-mail address*"></div>
                                         <div class="form-group style-border col-md-12"><input type="text" class="form-control"
                                        name="first" id="first" placeholder="Subject*"></div>
                                {{-- <div class="form-group style-border col-12"><select name="subject" id="subject"
                                        class="form-select">
                                        <option value="" disabled="disabled" selected="selected" hidden="">
                                            Subject
                                        </option>
                                        <option value="Computer Seince">Computer Seince</option>
                                        <option value="Astrophysics">Astrophysics</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Data Science">Data Science</option>
                                    </select></div> --}}
                                <div class="form-group style-border col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Write your message*"></textarea>
                                </div>
                                <div class="form-btn col-12 mt-15"><button class="th-btn">Send Message</button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="contact-map style3"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.4639038781843!2d93.9059048744268!3d24.7784456485362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3749261e475627a5%3A0x4387a785b093521a!2sManipur%20International%20University!5e1!3m2!1sen!2sin!4v1775191390715!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    






@endsection
