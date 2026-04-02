@extends('web.layouts.main')
@section('title', '| Privacy Policy')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
<style>
    .privacy-section {
        padding: 60px 0;
        background: #fff;
    }
    
    .privacy-container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.05);
        padding: 40px;
        margin-top: 30px;
    }
    
    .privacy-title {
        font-size: 32px;
        font-weight: 700;
        color: #1a2b4c;
        margin-bottom: 15px;
    }
    
    .privacy-subtitle {
        font-size: 22px;
        font-weight: 600;
        color: #1a2b4c;
        margin: 30px 0 15px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
    }
    
    .privacy-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    
    .privacy-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 20px;
    }
    
    .privacy-list li {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }
    
    .privacy-list li:before {
        content: "•";
        color: #1a2b4c;
        font-weight: bold;
        position: absolute;
        left: 8px;
    }
    
    .privacy-list.alpha-list {
        counter-reset: alpha-counter;
        list-style: none;
    }
    
    .privacy-list.alpha-list li {
        counter-increment: alpha-counter;
        padding-left: 35px;
    }
    
    .privacy-list.alpha-list li:before {
        content: counter(alpha-counter, lower-alpha) ")";
        color: #1a2b4c;
        font-weight: 600;
        left: 0;
    }
    
    .privacy-list.number-list {
        counter-reset: number-counter;
        list-style: none;
    }
    
    .privacy-list.number-list li {
        counter-increment: number-counter;
        padding-left: 35px;
    }
    
    .privacy-list.number-list li:before {
        content: counter(number-counter) ".";
        color: #1a2b4c;
        font-weight: 600;
        left: 0;
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
    
    @media (max-width: 768px) {
        .privacy-container {
            padding: 25px;
        }
        .privacy-title {
            font-size: 28px;
        }
        .privacy-subtitle {
            font-size: 20px;
        }
        .contact-info {
            padding: 20px;
        }
    }
    
    @media (max-width: 576px) {
        .privacy-section {
            padding: 40px 0;
        }
        .privacy-container {
            padding: 20px;
        }
        .privacy-title {
            font-size: 24px;
        }
        .privacy-subtitle {
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
                            <h2>Privacy Policy</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content Section -->
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-container">
                        <h1 class="privacy-title">Manipur International University (MIU)</h1>
                        
                        <p class="privacy-text">Manipur International University ("MIU", "we", "our", or "us") is committed to protecting the privacy and personal information of students, applicants, faculty, staff, alumni, and visitors to our website.</p>
                        
                        <p class="privacy-text">This Privacy Policy explains how we collect, use, store, and protect your information when you visit our official website or interact with our online services.</p>
                        
                        <h2 class="privacy-subtitle">1. Information We Collect</h2>
                        <p class="privacy-text">We may collect the following types of information:</p>
                        
                        <h3 class="h5 font-weight-bold mb-3">a) Personal Information</h3>
                        <ul class="privacy-list">
                            <li>Full name</li>
                            <li>Contact details (email address, phone number, address)</li>
                            <li>Date of birth</li>
                            <li>Educational qualifications</li>
                            <li>Identity proof details (if required for admission)</li>
                            <li>Uploaded documents (mark sheets, certificates, etc.)</li>
                        </ul>
                        
                        <h3 class="h5 font-weight-bold mb-3">b) Academic Information</h3>
                        <ul class="privacy-list">
                            <li>Course preferences</li>
                            <li>Application details</li>
                            <li>Admission and enrollment information</li>
                        </ul>
                        
                        <h3 class="h5 font-weight-bold mb-3">c) Technical Information</h3>
                        <ul class="privacy-list">
                            <li>IP address</li>
                            <li>Browser type</li>
                            <li>Device information</li>
                            <li>Pages visited on our website</li>
                            <li>Cookies and usage data</li>
                        </ul>
                        
                        <h2 class="privacy-subtitle">2. How We Use Your Information</h2>
                        <p class="privacy-text">MIU may use the collected information for:</p>
                        <ul class="privacy-list">
                            <li>Processing admissions and applications</li>
                            <li>Communicating academic updates and notifications</li>
                            <li>Providing course and program information</li>
                            <li>Managing student records</li>
                            <li>Improving website functionality and user experience</li>
                            <li>Responding to inquiries and feedback</li>
                            <li>Complying with legal and regulatory requirements</li>
                        </ul>
                        <p class="privacy-text">We do not sell or rent your personal information to third parties.</p>
                        
                        <h2 class="privacy-subtitle">3. Cookies and Tracking Technologies</h2>
                        <p class="privacy-text">Our website may use cookies to:</p>
                        <ul class="privacy-list">
                            <li>Enhance user experience</li>
                            <li>Analyze website traffic</li>
                            <li>Remember user preferences</li>
                        </ul>
                        <p class="privacy-text">Users may disable cookies through their browser settings; however, some website features may not function properly.</p>
                        
                        <h2 class="privacy-subtitle">4. Data Sharing and Disclosure</h2>
                        <p class="privacy-text">MIU may share information only in the following circumstances:</p>
                        <ul class="privacy-list">
                            <li>With authorized university departments for academic and administrative purposes</li>
                            <li>With regulatory authorities (UGC, Government bodies, etc.) when required</li>
                            <li>With service providers assisting in website hosting or application processing</li>
                            <li>When required by law or court order</li>
                        </ul>
                        <p class="privacy-text">All third-party service providers are required to maintain confidentiality and data protection standards.</p>
                        
                        <h2 class="privacy-subtitle">5. Data Security</h2>
                        <p class="privacy-text">MIU implements appropriate technical and organizational security measures to protect personal data against:</p>
                        <ul class="privacy-list">
                            <li>Unauthorized access</li>
                            <li>Data loss</li>
                            <li>Misuse or alteration</li>
                        </ul>
                        <p class="privacy-text">While we strive to protect your information, no online transmission can be guaranteed to be 100% secure.</p>
                        
                        <h2 class="privacy-subtitle">6. Data Retention</h2>
                        <p class="privacy-text">We retain personal information only for as long as necessary to:</p>
                        <ul class="privacy-list">
                            <li>Fulfill academic and administrative purposes</li>
                            <li>Comply with legal obligations</li>
                            <li>Maintain institutional records</li>
                        </ul>
                        
                        <h2 class="privacy-subtitle">7. Your Rights</h2>
                        <p class="privacy-text">Depending on applicable laws, users may have the right to:</p>
                        <ul class="privacy-list">
                            <li>Access their personal data</li>
                            <li>Request correction of inaccurate information</li>
                            <li>Request deletion of personal data (subject to legal limitations)</li>
                            <li>Withdraw consent where applicable</li>
                        </ul>
                        <p class="privacy-text">Requests may be submitted to the university's official contact email.</p>
                        
                        <h2 class="privacy-subtitle">8. External Links</h2>
                        <p class="privacy-text">Our website may contain links to third-party websites. MIU is not responsible for the privacy practices or content of external websites.</p>
                        
                        <h2 class="privacy-subtitle">9. Policy Updates</h2>
                        <p class="privacy-text">MIU reserves the right to update this Privacy Policy periodically. Any changes will be posted on this page with a revised effective date.</p>
                        
                        <h2 class="privacy-subtitle">10. Contact Information</h2>
                        <p class="privacy-text">For questions or concerns regarding this Privacy Policy, please contact:</p>
                        
                        <div class="contact-info">
                            <p class="mb-2"><strong>Manipur International University</strong></p>
                            <p class="mb-2"><strong>Address:</strong> </p>
                            <p class="mb-2"><strong>Email:</strong> </p>
                            <p class="mb-2"><strong>Phone:</strong> </p>
                            <p class="mb-0"><strong>Website:</strong> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection