@extends('web.layouts.main')
@section('title', '| Terms and Conditions')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
<style>
    .terms-section {
        padding: 60px 0;
        background: #fff;
    }
    
    .terms-container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.05);
        padding: 40px;
        margin-top: 30px;
    }
    
    .terms-title {
        font-size: 32px;
        font-weight: 700;
        color: #1a2b4c;
        margin-bottom: 15px;
    }
    
    .terms-subtitle {
        font-size: 22px;
        font-weight: 600;
        color: #1a2b4c;
        margin: 30px 0 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
    }
    
    .terms-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    
    .terms-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 20px;
    }
    
    .terms-list li {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }
    
    .terms-list li:before {
        content: "•";
        color: #1a2b4c;
        font-weight: bold;
        position: absolute;
        left: 8px;
    }
    
    .contact-info {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin-top: 30px;
    }
    
    .contact-info p {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
        line-height: 1.8;
    }
    
    .contact-info strong {
        color: #1a2b4c;
        min-width: 80px;
        display: inline-block;
    }
    
    .alert-box {
        background: #fff3cd;
        border: 1px solid #ffeeba;
        color: #856404;
        padding: 15px 20px;
        border-radius: 8px;
        margin: 20px 0;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .terms-container {
            padding: 25px;
        }
        .terms-title {
            font-size: 28px;
        }
        .terms-subtitle {
            font-size: 20px;
        }
        .contact-info {
            padding: 20px;
        }
    }
    
    @media (max-width: 576px) {
        .terms-section {
            padding: 40px 0;
        }
        .terms-container {
            padding: 20px;
        }
        .terms-title {
            font-size: 24px;
        }
        .terms-subtitle {
            font-size: 18px;
        }
    }
</style>
@endsection

@section('content')
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>Terms and Conditions</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Terms and Conditions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms and Conditions Content Section -->
    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-container">
                        <h1 class="terms-title">Manipur International University (MIU)</h1>
                        
                        <p class="terms-text">Welcome to the official website of Manipur International University (MIU). By accessing or using this website, you agree to comply with and be bound by the following Terms and Conditions. If you do not agree, please refrain from using the website.</p>
                        
                        <h2 class="terms-subtitle">1. General Use of Website</h2>
                        <p class="terms-text">This website is intended to provide information about:</p>
                        <ul class="terms-list">
                            <li>Academic programs</li>
                            <li>Admissions</li>
                            <li>Research initiatives</li>
                            <li>Events and announcements</li>
                            <li>University policies</li>
                        </ul>
                        <p class="terms-text">Users agree to use the website for lawful purposes only and in a manner that does not infringe upon the rights of others.</p>
                        
                        <h2 class="terms-subtitle">2. Intellectual Property Rights</h2>
                        <p class="terms-text">All content on this website, including but not limited to:</p>
                        <ul class="terms-list">
                            <li>Text</li>
                            <li>Logos</li>
                            <li>Images</li>
                            <li>Graphics</li>
                            <li>Videos</li>
                            <li>Course materials</li>
                            <li>Design and layout</li>
                        </ul>
                        <p class="terms-text">is the property of Manipur International University unless otherwise stated.</p>
                        <p class="terms-text">Unauthorized reproduction, distribution, modification, or commercial use of any content without prior written permission is strictly prohibited.</p>
                        
                        <h2 class="terms-subtitle">3. Admission and Application Information</h2>
                        <p class="terms-text">While MIU strives to ensure that all information regarding courses, eligibility, fees, and deadlines is accurate and updated, the university reserves the right to:</p>
                        <ul class="terms-list">
                            <li>Modify program structures</li>
                            <li>Revise eligibility criteria</li>
                            <li>Update fee structures</li>
                            <li>Change admission timelines</li>
                        </ul>
                        <p class="terms-text">Applicants are advised to verify details with the official admission office before making decisions.</p>
                        <p class="terms-text">Submission of an application does not guarantee admission.</p>
                        
                        <h2 class="terms-subtitle">4. Fee Payments</h2>
                        <ul class="terms-list">
                            <li>All fees must be paid as per the notified schedule.</li>
                            <li>Payment once made is subject to the university's Refund Policy.</li>
                            <li>MIU reserves the right to withhold services or enrollment confirmation in case of non-payment or incomplete documentation.</li>
                        </ul>
                        
                        <h2 class="terms-subtitle">5. User Conduct</h2>
                        <p class="terms-text">Users of the website agree not to:</p>
                        <ul class="terms-list">
                            <li>Upload or transmit harmful or malicious content</li>
                            <li>Attempt unauthorized access to university systems</li>
                            <li>Misuse forms or provide false information</li>
                            <li>Engage in activities that disrupt website functionality</li>
                        </ul>
                        <p class="terms-text">Legal action may be taken against misuse.</p>
                        
                        <h2 class="terms-subtitle">6. Accuracy of Information</h2>
                        <p class="terms-text">While reasonable efforts are made to ensure accuracy, MIU does not guarantee that:</p>
                        <ul class="terms-list">
                            <li>Website content is free from errors</li>
                            <li>Information is always current</li>
                            <li>The website will be uninterrupted or error-free</li>
                        </ul>
                        <p class="terms-text">The university reserves the right to update content at any time without prior notice.</p>
                        
                        <h2 class="terms-subtitle">7. External Links</h2>
                        <p class="terms-text">The website may contain links to third-party websites for informational purposes. MIU is not responsible for the content, privacy policies, or practices of external websites.</p>
                        
                        <h2 class="terms-subtitle">8. Limitation of Liability</h2>
                        <p class="terms-text">Manipur International University shall not be liable for:</p>
                        <ul class="terms-list">
                            <li>Direct or indirect damages arising from website use</li>
                            <li>Technical issues beyond its control</li>
                            <li>Decisions made based on website information</li>
                        </ul>
                        <p class="terms-text">Users access and use the website at their own discretion.</p>
                        
                        <h2 class="terms-subtitle">9. Privacy</h2>
                        <p class="terms-text">Use of this website is also governed by the university's Privacy Policy. Users are encouraged to review it separately.</p>
                        
                        <h2 class="terms-subtitle">10. Governing Law and Jurisdiction</h2>
                        <p class="terms-text">These Terms & Conditions shall be governed by the laws of India. Any disputes arising from the use of this website shall be subject to the jurisdiction of the appropriate courts in Manipur.</p>
                        
                        <h2 class="terms-subtitle">11. Changes to Terms</h2>
                        <p class="terms-text">MIU reserves the right to update or modify these Terms & Conditions at any time. Continued use of the website after changes implies acceptance of the revised terms.</p>
                        
                        <h2 class="terms-subtitle">12. Contact Information</h2>
                        <p class="terms-text">For any questions regarding these Terms & Conditions, please contact:</p>
                        
                        <div class="contact-info">
                            <p class="mb-2"><strong>Manipur International University</strong></p>
                            <p class="mb-2"><strong>Official Address:</strong> </p>
                            <p class="mb-2"><strong>Email:</strong> </p>
                            <p class="mb-2"><strong>Phone:</strong> </p>
                            <p class="mb-0"><strong>Website:</strong> </p>
                        </div>
                        
                        <div class="alert-box">
                            <strong>Note:</strong> By continuing to use this website, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection