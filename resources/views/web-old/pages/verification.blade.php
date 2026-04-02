@extends('web.layouts.main')
@section('title', '| Document Verification')
@section('description',
    'Experience seamless academic credential verification at Manipur International University. Our
    cutting-edge digital platform ensures secure, fast, and reliable document authentication for your professional and
    educational needs')

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

        .hw100 {
            width: 100px;
            height: 100px;
        }

        .rounded10 {
            border-radius: 10px;
        }

        .ugc-jrf .thead-info {
            background-color: #17a2b8;
            color: #ffffff;
        }

        .contact-form form .nice-select {
            width: 100% !important;
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
                            <h2> Document Verification </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Manipur International University </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="blog-style1-area mb-3 pb-1">
        <div class="container">
            <div class="sec-title text-start pb-1">
                <h2> Document Verification </h2>
                <p>
                    Experience seamless academic credential verification at Manipur International University. Our
                    cutting-edge digital platform ensures secure, fast, and reliable document authentication for your
                    professional and educational needs.
                </p>
            </div>

        </div>
    </section>

    <section class="main-contact-form-area py-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-form">
                        <h3 class="h3">Submit Verification Request</h3>
                        <form id="contact-form" name="contact_form" class="default-form2 mt-4" action="#"
                            method="post">

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Full Name <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <input type="text" name="form_parent_name" id="formParentName"
                                                placeholder="Enter Your Full Name" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Phone Number <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" id="formPhone"
                                                placeholder="+91 XXXXX XXXXX">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Email Address <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <input type="email" name="form_email" id="formEmail"
                                                placeholder="example@gmail.com" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Roll Number / Student ID <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <input type="text" name="form_child_name" id="formChildName"
                                                placeholder="Enter Your Student ID" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Year of Graduation <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <select id="graduationYear" name="graduationYear" required="">
                                                <option value="">Select Graduation Year</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="other">Other (Specify in comments)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Document Type <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <select id="documentType" name="documentType" required="">
                                                <option value="">Choose Document Type</option>
                                                <option value="degree"> Degree Certificate</option>
                                                <option value="transcript"> Academic Transcript</option>
                                                <option value="diploma"> Diploma Certificate</option>
                                                <option value="enrollment"> Enrollment Verification</option>
                                                <option value="graduation"> Graduation Verification</option>
                                                <option value="conference"> Research Conference Certificate</option>
                                                <option value="migration"> Migration Certificate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 mb-3">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Service Type <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <select id="requestType" name="requestType" required="">
                                                <option value="">Choose Service Speed</option>
                                                <option value="standard"> Standard (4-5 days) - ₹300</option>
                                                <option value="urgent"> Express (1-2 days) - Premium rates</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Document to Verify <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <p class="text-info">Click to upload your document (Formats: PDF, JPG, PNG |
                                                Max size: 5MB)</p>
                                            <input type="file" name="form_child_name" id="formChildName"
                                                placeholder="Enter Your Student ID" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Payment Receipt <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <p class="text-info">Upload payment confirmation (Screenshot or receipt of ₹300
                                                payment)</p>
                                            <input type="file" name="form_child_name" id="formChildName"
                                                placeholder="Enter Your Student ID" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group margintop">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Purpose of Verification <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <textarea name="form_message" id="formMessage" placeholder="" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group margintop">
                                        <div class="input-field-label">
                                            <p class="font-weight-bold">Additional Information <span
                                                    class="text-danger font-weight-bold">*</span></p>
                                        </div>
                                        <div class="input-box">
                                            <textarea name="form_message" id="formMessage" placeholder="" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                            type="hidden" value="">
                                        <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                            <span class="txt">
                                                Submit Verification Request
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="contact-form">
                        <h3 class="h3 mb-4">Verification Services</h3>

                        <h3 class="mb-3">Why Verify Your Documents?</h3>
                        <ul class="mb-5">
                            <li> <strong>Employers:</strong> Build trust with verified educational credentials</li>
                            <li> <strong>Universities:</strong> Streamline admission processes worldwide</li>
                            <li> <strong>Professional Bodies:</strong> Meet licensing requirements with confidence</li>
                            <li> <strong>Graduates:</strong> Showcase authentic academic achievements</li>
                        </ul>

                        <h3 class="mb-3">Available Document Types</h3>
                        <ul class="mb-5 ml-3">
                            <li>- Degree Certificates & Diplomas</li>
                            <li>- Academic Transcripts & Mark Sheets</li>
                            <li>- Enrollment & Graduation Verification</li>
                            <li>- Research Conference Certificates</li>
                            <li>- Migration & Transfer Certificates</li>
                            <li>- Professional Course Certificates</li>
                        </ul>

                        <div class="bg-light text-center border border-1 border-danger p-4 rounded10 mb-4">
                            <h3>Verification Investment</h3>
                            <h3 class="h3 my-3 font-weight-bold text-success">₹300</h3>
                            <p class="mb-2">Per Document Verification</p>
                            <p class="mb-2"> Multiple Payment Options: UPI • IMPS • NEFT • Cash</p>
                        </div>

                        <div class="upiimg mb-5">
                            <h3>Instant UPI Payment</h3>
                            <div class="upi my-2">
                                <img src="https://placehold.co/300x300" alt="image">
                            </div>
                            <span class="text-success">Compatible with Google Pay, PhonePe, Paytm & all UPI apps</span>
                        </div>

                        <div class="bg-light border border-1 border-danger p-4 rounded10 mb-4">
                            <img src="{{ asset('/assets/images/web-image/clock.png') }}" class="img-fluid mb-3"
                                alt="image" width="80" height="80">
                            <h3> Processing Timeline </h3>
                            <p class="mb-2"> <strong>Standard Service:</strong> 4-5 working days</p>
                            <p class="mb-2"> <strong>Express Service:</strong> 1-2 working days (premium rates apply)</p>
                        </div>

                        <div class="mb-2">
                            <h3>Need Assistance?</h3>
                            <a href="/contact-us"> Connect with Expert Support </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
