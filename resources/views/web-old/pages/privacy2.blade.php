


@extends('web.layouts.main')
@section('title', '| Privacy Policy')
@section('description', 'Manipur International University is committed to protecting the privacy and personal information of students, applicants, faculty, staff, alumni, and visitors.')

@section('styles')
<style>
    .privacy-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }
    
    /* Creative Background Elements */
    .privacy-section::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: rgba(209, 20, 62, 0.03);
        border-radius: 50%;
        z-index: 0;
    }
    
    .privacy-section::after {
        content: '';
        position: absolute;
        bottom: -150px;
        left: -150px;
        width: 400px;
        height: 400px;
        background: rgba(23, 52, 90, 0.03);
        border-radius: 50%;
        z-index: 0;
    }
    
    .privacy-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 1;
    }
    
    .privacy-header h1 {
        font-size: 42px;
        font-weight: 800;
        color: #17345a;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }
    
    .privacy-header h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #d1143e, #17345a);
        border-radius: 2px;
    }
    
    .privacy-header p {
        font-size: 18px;
        color: #666;
        max-width: 700px;
        margin: 20px auto 0;
    }
    
    .privacy-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(23, 52, 90, 0.1);
        padding: 50px;
        position: relative;
        z-index: 2;
        /* border: 1px solid rgba(209, 20, 62, 0.1); */
        transition: all 0.3s ease;
    }
    
    .privacy-card:hover {
        box-shadow: 0 30px 60px rgba(209, 20, 62, 0.15);
    }
    
    /* Decorative elements */
    .privacy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #d1143e, #17345a);
        border-radius: 20px 20px 0 0;
    }
    
    .university-badge {
        background: linear-gradient(135deg, #17345a, #1e4a7a);
        color: white;
        padding: 20px 30px;
        border-radius: 15px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(23, 52, 90, 0.3);
    }
    
    .university-badge::before {
        /* content: 'MIU'; */
        position: absolute;
        top: -20px;
        right: 20px;
        font-size: 120px;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.1);
        pointer-events: none;
    }
    
    .university-badge h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 5px;
        position: relative;
        z-index: 1;
    }
    
    .university-badge p {
        font-size: 16px;
        opacity: 0.9;
        margin-bottom: 0;
        position: relative;
        z-index: 1;
    }
    
    .section-title {
        font-size: 26px;
        font-weight: 700;
        color: #17345a;
        margin: 40px 0 20px;
        padding-left: 20px;
        position: relative;
        display: inline-block;
    }
    
    .section-title::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 35px;
        background: linear-gradient(135deg, #d1143e, #ff4d6d);
        border-radius: 4px;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 20px;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, #d1143e, transparent);
    }
    
    .subsection-title {
        font-size: 20px;
        font-weight: 600;
        color: #d1143e;
        margin: 25px 0 15px;
        padding-left: 15px;
        position: relative;
    }
    
    .subsection-title::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 6px;
        height: 25px;
        background: #17345a;
        border-radius: 3px;
    }
    
    .privacy-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
        padding: 0 15px;
    }
    
    .highlight-text {
        background: linear-gradient(135deg, rgba(209, 20, 62, 0.05), rgba(23, 52, 90, 0.05));
        padding: 20px 25px;
        border-radius: 12px;
        border-left: 4px solid #d1143e;
        margin: 20px 0;
        font-weight: 500;
    }
    
    .privacy-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 12px;
    }
    
    .privacy-list li {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        padding: 12px 20px 12px 45px;
        background: #f8f9fa;
        border-radius: 8px;
        position: relative;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    
    .privacy-list li:hover {
        background: white;
        border-color: rgba(209, 20, 62, 0.2);
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .privacy-list li::before {
        content: '→';
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #d1143e;
        font-weight: bold;
        font-size: 18px;
    }
    
    .privacy-list.number-list {
        display: block;
    }
    
    .privacy-list.number-list li {
        margin-bottom: 12px;
        display: block;
        width: 100%;
    }
    
    .privacy-list.number-list li::before {
        content: counter(item) ".";
        counter-increment: item;
        color: #17345a;
        font-weight: 700;
        font-size: 16px;
    }
    
    .privacy-list.number-list {
        counter-reset: item;
    }
    
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }
    
    .info-card {
        background: linear-gradient(135deg, #ffffff, #f8f9fa);
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        border: 1px solid #eee;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #d1143e, #17345a);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }
    
    .info-card:hover::before {
        transform: scaleX(1);
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(209, 20, 62, 0.15);
    }
    
    .info-card i {
        font-size: 40px;
        margin-bottom: 15px;
        color: #d1143e;
    }
    
    .info-card h4 {
        font-size: 18px;
        font-weight: 600;
        color: #17345a;
        margin-bottom: 10px;
    }
    
    .contact-box {
        background: linear-gradient(135deg, #17345a, #1e3f6e);
        padding: 40px;
        border-radius: 20px;
        margin-top: 40px;
        position: relative;
        overflow: hidden;
    }
    
    .contact-box::before {
        content: '📞';
        position: absolute;
        bottom: -20px;
        right: -20px;
        font-size: 150px;
        opacity: 0.1;
        transform: rotate(-15deg);
    }
    
    .contact-box h3 {
        color: white;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 25px;
        position: relative;
        z-index: 1;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        position: relative;
        z-index: 1;
    }
    
    .contact-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 12px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }
    
    .contact-item:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }
    
    .contact-item strong {
        display: block;
        color: #d1143e;
        font-size: 16px;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .contact-item p {
        color: white;
        margin: 0;
        font-size: 16px;
        opacity: 0.9;
    }
    
    .floating-badge {
        position: absolute;
        top: 20px;
        right: 30px;
        background: #d1143e;
        color: white;
        padding: 8px 20px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 5px 15px rgba(209, 20, 62, 0.3);
        z-index: 10;
    }
    
    @media (max-width: 768px) {
        .privacy-section {
            padding: 60px 0;
        }
        .privacy-card {
            padding: 30px;
        }
        .privacy-header h1 {
            font-size: 32px;
        }
        .section-title {
            font-size: 22px;
        }
        .university-badge h2 {
            font-size: 26px;
        }
        .contact-box {
            padding: 30px;
        }
        .contact-box h3 {
            font-size: 24px;
        }
        .privacy-list {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .privacy-card {
            padding: 20px;
        }
        .floating-badge {
            position: relative;
            top: 0;
            right: 0;
            display: inline-block;
            margin-bottom: 20px;
        }
        .university-badge {
            padding: 20px;
        }
        .university-badge h2 {
            font-size: 22px;
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

    <!-- Privacy Policy Content Section with Creative Design -->
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-header">
                        <h1>Privacy Policy</h1>
                        <p>Your privacy is important to us. Learn how we protect and manage your data</p>
                    </div>
                    
                    <div class="privacy-card">
                        {{-- <div class="floating-badge">Last Updated: 2024</div> --}}
                        
                        <div class="university-badge">
                            <h2 class="text-white">Manipur International University (MIU)</h2>
                            <p>Excellence in Education • Innovation in Learning</p>
                        </div>
                        
                        <p class="privacy-text highlight-text">Manipur International University ("MIU", "we", "our", or "us") is committed to protecting the privacy and personal information of students, applicants, faculty, staff, alumni, and visitors to our website.</p>
                        
                        <p class="privacy-text">This Privacy Policy explains how we collect, use, store, and protect your information when you visit our official website or interact with our online services.</p>
                        
                        <h2 class="section-title">1. Information We Collect</h2>
                        <p class="privacy-text">We may collect the following types of information:</p>
                        
                        <h3 class="subsection-title">a) Personal Information</h3>
                        <ul class="privacy-list">
                            <li>Full name</li>
                            <li>Contact details (email address, phone number, address)</li>
                            <li>Date of birth</li>
                            <li>Educational qualifications</li>
                            <li>Identity proof details (if required for admission)</li>
                            <li>Uploaded documents (mark sheets, certificates, etc.)</li>
                        </ul>
                        
                        <h3 class="subsection-title">b) Academic Information</h3>
                        <ul class="privacy-list">
                            <li>Course preferences</li>
                            <li>Application details</li>
                            <li>Admission and enrollment information</li>
                        </ul>
                        
                        <h3 class="subsection-title">c) Technical Information</h3>
                        <ul class="privacy-list">
                            <li>IP address</li>
                            <li>Browser type</li>
                            <li>Device information</li>
                            <li>Pages visited on our website</li>
                            <li>Cookies and usage data</li>
                        </ul>
                        
                        <h2 class="section-title">2. How We Use Your Information</h2>
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
                        <p class="privacy-text highlight-text">We do not sell or rent your personal information to third parties.</p>
                        
                        <div class="info-grid">
                            <div class="info-card">
                                <i>🍪</i>
                                <h4>Cookies Usage</h4>
                                <p>Enhance user experience & analyze traffic</p>
                            </div>
                            <div class="info-card">
                                <i>🔒</i>
                                <h4>Data Security</h4>
                                <p>Advanced protection measures</p>
                            </div>
                            <div class="info-card">
                                <i>📋</i>
                                <h4>Your Rights</h4>
                                <p>Access, correct & delete data</p>
                            </div>
                        </div>
                        
                        <h2 class="section-title">3. Cookies and Tracking Technologies</h2>
                        <p class="privacy-text">Our website may use cookies to:</p>
                        <ul class="privacy-list">
                            <li>Enhance user experience</li>
                            <li>Analyze website traffic</li>
                            <li>Remember user preferences</li>
                        </ul>
                        <p class="privacy-text">Users may disable cookies through their browser settings; however, some website features may not function properly.</p>
                        
                        <h2 class="section-title">4. Data Sharing and Disclosure</h2>
                        <p class="privacy-text">MIU may share information only in the following circumstances:</p>
                        <ul class="privacy-list">
                            <li>With authorized university departments for academic and administrative purposes</li>
                            <li>With regulatory authorities (UGC, Government bodies, etc.) when required</li>
                            <li>With service providers assisting in website hosting or application processing</li>
                            <li>When required by law or court order</li>
                        </ul>
                        <p class="privacy-text">All third-party service providers are required to maintain confidentiality and data protection standards.</p>
                        
                        <h2 class="section-title">5. Data Security</h2>
                        <p class="privacy-text">MIU implements appropriate technical and organizational security measures to protect personal data against:</p>
                        <ul class="privacy-list">
                            <li>Unauthorized access</li>
                            <li>Data loss</li>
                            <li>Misuse or alteration</li>
                        </ul>
                        <p class="privacy-text highlight-text">While we strive to protect your information, no online transmission can be guaranteed to be 100% secure.</p>
                        
                        <h2 class="section-title">6. Data Retention</h2>
                        <p class="privacy-text">We retain personal information only for as long as necessary to:</p>
                        <ul class="privacy-list">
                            <li>Fulfill academic and administrative purposes</li>
                            <li>Comply with legal obligations</li>
                            <li>Maintain institutional records</li>
                        </ul>
                        
                        <h2 class="section-title">7. Your Rights</h2>
                        <p class="privacy-text">Depending on applicable laws, users may have the right to:</p>
                        <ul class="privacy-list">
                            <li>Access their personal data</li>
                            <li>Request correction of inaccurate information</li>
                            <li>Request deletion of personal data (subject to legal limitations)</li>
                            <li>Withdraw consent where applicable</li>
                        </ul>
                        <p class="privacy-text">Requests may be submitted to the university's official contact email.</p>
                        
                        <h2 class="section-title">8. External Links</h2>
                        <p class="privacy-text">Our website may contain links to third-party websites. MIU is not responsible for the privacy practices or content of external websites.</p>
                        
                        <h2 class="section-title">9. Policy Updates</h2>
                        <p class="privacy-text">MIU reserves the right to update this Privacy Policy periodically. Any changes will be posted on this page with a revised effective date.</p>
                        
                        <h2 class="section-title">10. Contact Information</h2>
                        <p class="privacy-text">For questions or concerns regarding this Privacy Policy, please contact:</p>
                        
                        <div class="contact-box">
                            <h3>Get in Touch</h3>
                            <div class="contact-grid">
                                <div class="contact-item">
                                    <strong>Address</strong>
                                    <p>Manipur International University</p>
                                </div>
                                <div class="contact-item">
                                    <strong>Email</strong>
                                    <p>info@miu.edu</p>
                                </div>
                                <div class="contact-item">
                                    <strong>Phone</strong>
                                    <p>+91 1234567890</p>
                                </div>
                                <div class="contact-item">
                                    <strong>Website</strong>
                                    <p>www.miu.edu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection