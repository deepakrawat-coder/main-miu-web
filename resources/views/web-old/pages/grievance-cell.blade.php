@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
    <style>
        .page-header {
            background: #0d6efd;
            color: #fff;
            padding: 40px 0;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 26px;
            font-weight: 600;
        }

        .info-boxss {
            border: 1px solid #dee2e6;
            padding: 25px;
            border-radius: 6px;
            background: #f8f9fa;
        }

        .info-boxss h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .download-btn {
            margin: 20px 0;
        }

        table thead th {
            background: #f1f3f5;
            font-weight: 600;
        }

        .page-header {
            background: linear-gradient(135deg, #083d77, #d1143e);
            padding: 90px 0 60px;
            color: #fff;
            position: relative;
        }

        .page-header::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 120px;
            height: 4px;
            background: #ffc107;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .page-title {
            font-size: 34px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 15px;
        }

        .page-title span {
            font-weight: 400;
            font-size: 26px;
            display: block;
        }

        .term-text {
            font-size: 16px;
            margin-bottom: 8px;
            opacity: 0.95;
        }

        .approval-text {
            font-size: 14px;
            opacity: 0.9;
            max-width: 700px;
            /* margin: 0 auto; */
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 26px;
            }

            .page-title span {
                font-size: 20px;
            }
        }

        .cutompadding {
            padding-top: 70px;
        }

        .blog-style4-area {
            background: white;
        }

        table {
            border-collapse: separate;
        }

        table thead tr th {
            background: #d21841;
            color: white;
        }

        table tbody tr td {
            background: #17345a29;
            color: black;
        }
          /* Contact Details Section Styles */
    .contact-details-section {
        background: linear-gradient(135deg, #083d77, #d1143e);
        color: white;
        position: relative;
        overflow: hidden;
    }
    
    .contact-details-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.05);
        z-index: 1;
    }
    
    .contact-details-section .container {
        position: relative;
        z-index: 2;
    }
    
    .contact-main-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }
    
    .title-divider {
        width: 100px;
        height: 4px;
        background: #ffd166;
        margin: 15px auto 20px;
        border-radius: 2px;
    }
    
    .contact-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Contact Box Styles */
    .contact-box {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        transition: transform 0.4s ease;
        height: 100%;
    }
    
    .contact-box:hover {
        transform: translateY(-10px);
    }
    
    .box-header {
        background: #17345a;
        padding: 30px 25px;
        text-align: center;
        color: white;
    }
    
    .office-contact-box .box-header {
        background: #17345a;
    }
    
    .header-icon {
        font-size: 3rem;
        margin-bottom: 15px;
        opacity: 0.9;
    }
    
    .box-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 5px;
    }
    
    .box-role {
        font-size: 1rem;
        opacity: 0.9;
        margin: 0;
    }
    
    .box-body {
        padding: 30px 25px;
    }
    
    .contact-info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 1px solid #eee;
    }
    
    .contact-info-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    
    .icon-wrapper {
        width: 45px;
        height: 45px;
        background: #17345a;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .office-contact-box .icon-wrapper {
        background: #17345a;
    }
    
    .icon-wrapper i {
        color: white;
        font-size: 1.2rem;
    }
    
    .info-content {
        flex: 1;
    }
    
    .info-label {
        display: block;
        font-size: 0.9rem;
        color: #7f8c8d;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }
    
    .info-value {
        color: #2c3e50;
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
        display: block;
    }
    
    .info-value:hover {
        color: #3498db;
        text-decoration: underline;
    }
    
    .address-text {
        line-height: 1.6;
        margin: 0;
    }
    
    .box-footer {
        background: #f8f9fa;
        padding: 20px 25px;
        border-top: 1px solid #eee;
    }
    
    .footer-note {
        margin: 0;
        color: #7f8c8d;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }
    
    .footer-note i {
        margin-right: 10px;
        color: #ff7e5f;
    }
    
    .office-contact-box .footer-note i {
        color: #36d1dc;
    }
    
    /* Quick Actions Styles */
    .quick-actions-box {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .actions-title {
        color: white;
        font-size: 1.8rem;
        font-weight: 700;
    }
    
    .actions-title i {
        color: #ffd166;
        margin-right: 10px;
    }
    
    .action-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 25px 15px;
        background: white;
        border-radius: 10px;
        text-decoration: none;
        color: #2c3e50;
        transition: all 0.3s ease;
        height: 100%;
        text-align: center;
    }
    
    .action-btn:hover {
        transform: translateY(-5px);
        text-decoration: none;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .action-btn i {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .action-btn span {
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    .email-btn i { color: #e74c3c; }
    .call-btn i { color: #2ecc71; }
    .info-btn i { color: #3498db; }
    
    /* Responsive Styles */
    @media (max-width: 991px) {
        .contact-main-title {
            font-size: 2.3rem;
        }
        
        .contact-box {
            margin-bottom: 30px;
        }
    }
    
    @media (max-width: 767px) {
        .contact-main-title {
            font-size: 2rem;
        }
        
        .contact-subtitle {
            font-size: 1rem;
        }
        
        .box-header {
            padding: 25px 20px;
        }
        
        .box-body {
            padding: 25px 20px;
        }
        
        .contact-info-item {
            flex-direction: column;
        }
        
        .icon-wrapper {
            margin-right: 0;
            margin-bottom: 15px;
        }
        
        .quick-actions-box {
            padding: 20px;
        }
    }
    
    @media (max-width: 575px) {
        .contact-details-section {
            padding: 50px 0;
        }
        
        .contact-main-title {
            font-size: 1.8rem;
        }
        
        .contact-info-item {
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    }
    </style>
@endsection
@section('content')
    <section class="page-header">
        <div class="container text-start cutompadding">

            <span class="badge badge-light mb-3 d-inline-block px-3 py-2">
                Student Support
            </span>

            <h1 class="page-title text-white">
                STUDENT GRIEVANCE REDRESSAL COMMITTEE
            </h1>

            <p class="approval-text text-white mt-3">
                Welcome to the Grievance Cell of Manipur International University.
                Our mission is to provide a fair and transparent mechanism for
                addressing and resolving grievances and complaints from students,
                faculty and staff.
            </p>

            <p class="approval-text text-white">
                The Grievance Cell is committed to upholding the principles of
                justice and ensuring that all grievances are handled with integrity
                and respect.
            </p>

        </div>
    </section>
    <section class="explore-future-area bg-white py-5 pb-0">
        <div class="container">
            <div class="about-style8-content-two">
                <div class="statements-content-box">
                    <div class="sec-title">
                        <h2>Objectives</h2>
                    </div>

                    <div class="statements-content-box__inner">
                        <div class="item">

                            <div class="single-statements-item">
                                <div class="icon"></div>
                                <div class="text">
                                    <h3>Our Objectives</h3>
                                    <p>
                                        To provide a structured and accessible platform for lodging
                                        complaints and grievances.
                                    </p>
                                </div>
                            </div>

                            <div class="single-statements-item">
                                <div class="icon"></div>
                                <div class="text">
                                    <h3></h3>
                                    <p>
                                        To ensure timely and fair resolution of issues in line with
                                        UGC guidelines.
                                    </p>
                                </div>
                            </div>

                            <div class="single-statements-item">
                                <div class="icon"></div>
                                <div class="text">
                                    <h3></h3>
                                    <p>
                                        To maintain transparency throughout the grievance redressal
                                        process.
                                    </p>
                                </div>
                            </div>

                            <div class="single-statements-item">
                                <div class="icon"></div>
                                <div class="text">
                                    <h3></h3>
                                    <p>
                                        To promote a positive and supportive environment within the
                                        university community.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore-future-area bg-white py-5 pb-0">
        <div class="container">
            <div class="mb-4">
                <!-- Scope of Grievance Section -->
                <div class="sec-title pb-3">
                    <h2 class="mb-0 pb-0">SCOPE OF GRIEVANCE</h2>
                </div>

                <!-- Type of Issues Table -->
                <div class="mb-5">
                    <h4 class="section-subheading mb-3">Type of Issues</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="30%">Type of Issue</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Academic Concerns</strong></td>
                                    <td>Grading disputes, academic misconduct</td>
                                </tr>

                                <tr>
                                    <td><strong>Administrative Matters</strong></td>
                                    <td>Delays in service, procedural issues</td>
                                </tr>

                                <tr>
                                    <td><strong>Disciplinary Issues</strong></td>
                                    <td>Various disciplinary concerns</td>
                                </tr>

                                <tr>
                                    <td><strong>Harassment & Discrimination</strong></td>
                                    <td>Any form of harassment or discrimination</td>
                                </tr>

                                <tr>
                                    <td><strong>Other Concerns</strong></td>
                                    <td>Any other issues impacting university experience</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Student Grievance Redressal Committee -->
                <div class="pb-3">
                    <div class="sec-title pb-2">
                        <h2>STUDENT GRIEVANCE REDRESSAL COMMITTEE</h2>
                        <a href="#" class="btn btn-primary btn-sm mt-4">
                            <i class="fas fa-download"></i> Download Notification
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="25%">Position</th>
                                    <th>Name</th>
                                    <th width="25%">Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ombudsperson</td>
                                    <td>Retd. Prof. T. Umabati Devi</td>
                                    <td>Retired Associate Professor</td>
                                </tr>

                                <tr>
                                    <td>Chairperson</td>
                                    <td>Prof. S. James</td>
                                    <td>Faculty Member</td>
                                </tr>

                                <tr>
                                    <td>Vice Chairperson</td>
                                    <td>Prof N Ibohal Singh</td>
                                    <td>Faculty Member</td>
                                </tr>

                                <tr>
                                    <td>Coordinator</td>
                                    <td>Prof. W. Sushma Devi</td>
                                    <td>Dean Students Welfare</td>
                                </tr>

                                <tr>
                                    <td>Member</td>
                                    <td>Dr. Kh. Mukta Singh</td>
                                    <td>Faculty Member</td>
                                </tr>

                                <tr>
                                    <td>Member</td>
                                    <td>Dr. Chandibai Potsangbam</td>
                                    <td>Faculty Member</td>
                                </tr>

                                <tr>
                                    <td>PG Student's Representative</td>
                                    <td>Mr L. Viswanath Singh</td>
                                    <td>PG Student</td>
                                </tr>

                                <tr>
                                    <td>PhD Student's Representative</td>
                                    <td>Ms Th. Nirmala Devi</td>
                                    <td>PhD Student</td>
                                </tr>

                                <tr>
                                    <td>Local Govt. Representative</td>
                                    <td>Mr Sinam Rahul Singh</td>
                                    <td>Local Government</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-style1-area features-style1-area--style2">
        <div class="features-style1-area-shape" style="background-image: url(assets/images/shape/thm-shape-1.png);">
        </div>
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <h2>PROCEDURE FOR FILING A GRIEVANCE</h2>
            </div>

            <ul class="row features-style1__content-box">

                <!-- Box 1: Submission of Grievance -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-file-text-o"></span>
                            </div>
                            <div class="counting-box">01</div>
                        </div>
                        <div class="text-holder">
                            <h3>Submission of Grievance</h3>
                            <p><strong>Online Portal:</strong> Submit your grievance through our online grievance portal</p>
                            <p><strong>Written Submission:</strong> Submit a written complaint to the Grievance Cell office
                                at MIU Administrative office, Ghari, Airport road, Imphal West, Manipur -795140 or via email
                                at miugrievance@miu.edu.in</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

                <!-- Box 2: Required Information -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1 style2">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-info-circle"></span>
                            </div>
                            <div class="counting-box">02</div>
                        </div>
                        <div class="text-holder">
                            <h3>Required Information</h3>
                            <p>When filing a grievance, provide:</p>
                            <ul>
                                <li>Full name and contact details</li>
                                <li>Details of the grievance</li>
                                <li>Any supporting documents or evidence</li>
                            </ul>
                            <p>Complete information helps in faster resolution.</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

                <!-- Box 3: Acknowledgment -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1 style3">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-check-circle-o"></span>
                            </div>
                            <div class="counting-box">03</div>
                        </div>
                        <div class="text-holder">
                            <h3>Acknowledgment</h3>
                            <p>Upon receipt, you will receive an acknowledgment of your grievance within the specified time
                                frame.</p>
                            <p>This acknowledgment confirms that your complaint has been received and is being processed by
                                the Grievance Cell.</p>
                            <p>Keep the acknowledgment for future reference.</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

                <!-- Box 4: Review and Investigation -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="counting-box">04</div>
                        </div>
                        <div class="text-holder">
                            <h3>Review and Investigation</h3>
                            <p>The Grievance Cell will review your complaint and, if necessary, conduct an investigation.
                            </p>
                            <p>This process will be completed within 15 working days from the date of acknowledgment.</p>
                            <p>All investigations are conducted impartially and confidentially.</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

                <!-- Box 5: Resolution -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1 style2">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-gavel"></span>
                            </div>
                            <div class="counting-box">05</div>
                        </div>
                        <div class="text-holder">
                            <h3>Resolution</h3>
                            <p>You will be informed of the resolution or decision made regarding your grievance.</p>
                            <p>If you are not satisfied with the resolution, you have the right to appeal the decision.</p>
                            <p>Resolutions aim to be fair and just for all parties involved.</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

                <!-- Box 6: Appeal Process -->
                <li class="col-xl-4 col-lg-4 col-md-6 single-features-box-style1 style3">
                    <div class="single-features-box-style1__inner">
                        <div class="top">
                            <div class="icon-holder">
                                <span class="fa fa-balance-scale"></span>
                            </div>
                            <div class="counting-box">06</div>
                        </div>
                        <div class="text-holder">
                            <h3>Appeal Process</h3>
                            <p>If you wish to appeal the decision, submit your appeal to the higher authority within the
                                specified time frame from the date of the resolution.</p>
                            <p>Appeals must be filed within 15 days of receiving the resolution.</p>
                            <p>The appeal will be reviewed by a higher committee for final decision.</p>
                        </div>
                    </div>
                </li>
                <!--End Single Features Box Style1-->

            </ul>

        </div>
    </section>


    <section class="contact-details-section py-5">
    <div class="container">
        <div class="row">
            
            <!-- Main Heading -->
            <div class="col-12 text-center mb-5">
                <h2 class="contact-main-title sec-title pb-3">Contact Information</h2>
                <div class="title-divider"></div>
                <p class="contact-subtitle">Get in touch with the Grievance Redressal Committee</p>
            </div>
            
        </div>
        
        <div class="row justify-content-center">
            
            <!-- Ombudsperson Contact Box -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="contact-box ombudsperson-box">
                    <div class="box-header">
                        <div class="header-icon">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <h3 class="box-title text-white">Ombudsperson</h3>
                        <p class="box-role">Impartial Mediator & Advisor</p>
                    </div>
                    <div class="box-body">
                        <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Direct Contact:</span>
                                <a href="tel:+918974056543" class="info-value">+91 8974056543</a>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Official Email:</span>
                                <a href="mailto:Ombudsperson@miu.edu.in" class="info-value">Ombudsperson@miu.edu.in</a>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Availability:</span>
                                <span class="info-value">By Appointment</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <p class="footer-note"><i class="fa fa-info-circle"></i> For confidential consultations and impartial advice</p>
                    </div>
                </div>
            </div>
            
            <!-- Office Contact Box -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="contact-box office-contact-box">
                    <div class="box-header">
                        <div class="header-icon">
                            <i class="fa fa-university"></i>
                        </div>
                        <h3 class="box-title text-white">Grievance Cell Office</h3>
                        <p class="box-role">Official Communication Channel</p>
                    </div>
                    <div class="box-body">
                        <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Office Address:</span>
                                <p class="info-value address-text">
                                    MIU Administrative Office, Ghari<br>
                                    Airport Road, Imphal West<br>
                                    Manipur - 795140
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Grievance Email:</span>
                                <a href="mailto:miugrievance@miu.edu.in" class="info-value">miugrievance@miu.edu.in</a>
                            </div>
                        </div>
                        
                        {{-- <div class="contact-info-item">
                            <div class="icon-wrapper">
                                <i class="fa fa-building-o"></i>
                            </div>
                            <div class="info-content">
                                <span class="info-label">Office Hours:</span>
                                <span class="info-value">Mon-Fri: 9:00 AM - 5:00 PM</span>
                            </div>
                        </div> --}}
                    </div>
                    <div class="box-footer">
                        <p class="footer-note"><i class="fa fa-paper-plane"></i> Submit written grievances & official correspondence</p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Quick Actions -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="quick-actions-box">
                    <h4 class="actions-title text-center mb-4">
                        <i class="fa fa-bolt"></i> Quick Actions
                    </h4>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <a href="mailto:miugrievance@miu.edu.in" class="action-btn email-btn">
                                <i class="fa fa-envelope"></i>
                                <span>Email Grievance</span>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="tel:+918974056543" class="action-btn call-btn">
                                <i class="fa fa-phone"></i>
                                <span>Call Ombudsperson</span>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#grievance-procedure" class="action-btn info-btn">
                                <i class="fa fa-info-circle"></i>
                                <span>View Procedure</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection
@section('scripts')
<script>
     $(document).ready(function() {
        // Add animation to contact boxes
        $('.contact-box').each(function(i) {
            $(this).css({
                'opacity': '0',
                'transform': 'translateY(30px)'
            });
            
            setTimeout(() => {
                $(this).animate({
                    'opacity': '1',
                    'transform': 'translateY(0)'
                }, 600);
            }, i * 300);
        });
        
        // Hover effect for action buttons
        $('.action-btn').hover(
            function() {
                $(this).css({
                    'background': 'linear-gradient(135deg, #fdfcfb, #e2d1c3)'
                });
            },
            function() {
                $(this).css({
                    'background': 'white'
                });
            }
        );
        
        // Smooth scroll for info button
        $('a[href^="#"]').on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                const hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 80
                }, 800);
            }
        });
    });
</script>
@endsection
