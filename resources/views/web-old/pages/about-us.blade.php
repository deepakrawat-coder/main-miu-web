@extends('web.layouts.main')
@section('title', '| About Us')
@section('description', 'About')

@section('styles')
<style>
    .justify {
        text-align: justify;
    }
    .course-layout-content-box-inner p {
        color: black;
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
                            <h2>About Our University</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start About Style1 Area-->
    <section class="about-style1-area pb-5">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12">
                    <div class="sec-title text-start">
                        <h2> Manipur International University </h2>
                        <h4 class="mt-3">माणिपुर अंतर्राष्ट्रीय विश्वविद्यालय</h4>
                        <div class="sub-title">
                            <p class="text-info">Excellence • Innovation • Transformation</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-style1-content pr-2">
                        <p class="justify">
                            Manipur International University (MIU)of Imphal, established in 2018 under the
                            Manipur International University Ordinance, 2018 (Ordinance No.1 of 2018),
                            promulgated by Her Excellency the Governor of Manipur is a State Private University.
                            It holds the prestigious recognition from the University Grants Commission (UGC),
                            Ministry of Education, Government of India under Section 2(f) and Section 22 of the
                            UGC Act, 1956 as a State Private University.
                        </p>

                        <p class="justify">
                            We ensure our learners receive internationally recognized qualifications, enhance
                            quality education and innovative research works. The University represents a
                            transformative vision in higher education, seamlessly blending traditional wisdom
                            with modern pedagogical approaches.
                        </p>

                        <p class="justify">
                            Manipur International University (MIU) is an Autonomous Public International
                            University of State Importance and Excellence. It is institutionally established and
                            recognized by the State Government of Manipur and recognized and listed by the
                            University Grants Commission (UGC), Ministry of Education, Government of India under
                            Section 2(f) and Section 22 of the UGC Act, 1956 of the UGC Act, 1956 as a State
                            Private University. It is empowered to award degrees under. It has been declared as
                            an "International Institution of Excellence" and an "Institution of State
                            Importance," as incorporated in the Manipur State Gazette Notification vide no. 458
                            dated February 14, 2019 by the Government of Manipur.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('/assets/images/about/about.jpg') }}" class="img-fluid mb-3" alt="image">
                    <img src="{{ asset('/assets/images/web-image/y4.jpeg') }}" class="img-fluid mb-3" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!--End About Style1 Area-->


    <section class="blog-style4-area">
        <div class="container">
            <div class="sec-title pb-3">
                <h2>Our Prestigious Recognitions</h2>
            </div>
            <div class="row text-center">

                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb1.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                International Institution of Excellence
                            </h3>
                            <div class="text">
                                <p>Recognized for maintaining world-class academic standards and fostering global
                                    partnerships</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb2.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Institution of State Importance
                            </h3>
                            <div class="text">
                                <p>Acknowledged for significant contributions to the educational and socio-economic
                                    development of Manipur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb3.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                State Research Institute
                            </h3>
                            <div class="text">
                                <p>Designated as a premier research hub driving innovation and scholarly excellence</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="wrapper_years text-center">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style4">
                            <div class="single-blog-style4__inner">
                                <h3 class="blog-title text-info"> 2018 </h3>
                                <div class="text">
                                    <p>Year Established</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style4">
                            <div class="single-blog-style4__inner">
                                <h3 class="blog-title text-info">UGC </h3>
                                <div class="text">
                                    <p>Recognized & Listed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style4">
                            <div class="single-blog-style4__inner">
                                <h3 class="blog-title text-info"> 2020 </h3>
                                <div class="text">
                                    <p>NEP Compliant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-curriculum-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="course-curriculum-content-box">
                        <div class="course-layout-content-box">
                            <div class="inner-title">
                                <h4>Our Founding Journey</h4>
                                <p> The establishment of Manipur International University represents a remarkable journey of
                                    vision, determination, and legislative excellence. Our founding story is a testament to
                                    the collaborative efforts of visionary leaders, dedicated legislators, and the
                                    unwavering support of the people of Manipur. </p>
                            </div>
                            <ul class="accordion-box">
                                <!--Start accordion -->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="course-layout-title-box">
                                            <h4>
                                                June 26, 2018
                                            </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                Genesis of Vision: The Manipur International University Ordinance, 2018
                                                (Ordinance No.1 of 2018) was promulgated by Her Excellency the Governor of
                                                Manipur. This historic document, published in the Extraordinary Gazette of
                                                the State Government, marked the official beginning of our institution after
                                                rigorous official processes, comprehensive vetting, thorough verification,
                                                and unanimous approval by the State Government, including the State Cabinet.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <!--End accordion -->
                                <!--Start accordion -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>July 23, 2018 </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">Legislative Triumph: The monsoon session of the Manipur State
                                                Legislative Assembly created history by unanimously passing the Manipur
                                                International University Bill, 2018 (Bill No. 8 of 2018). This unanimous
                                                vote demonstrated the collective commitment of all political parties to
                                                advancing higher education in the state.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>December 21, 2018 </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">Refinement and Perfection: The winter session of the Manipur
                                                State Legislative Assembly once again unanimously passed the Manipur
                                                International University Bill, 2018, this time incorporating necessary
                                                amendments and refinements based on extensive deliberations and expert
                                                consultations.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>January 23, 2019 </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">Royal Assent: The Manipur International University Act, 2018
                                                (Manipur Act No. 2 of 2019) received the gracious approval of Her Excellency
                                                the Governor of Manipur, transforming our vision into legal reality.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>February 14, 2019 </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">Official Notification: The Law and Legislative Affairs
                                                Department of the State Government of Manipur officially notified the
                                                university's establishment in the official Gazette extraordinary, marking
                                                the completion of all legal formalities and our official recognition by the
                                                UGC.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style4-area">
        <div class="container">
            <div class="sec-title pb-3">
                <h2>Academic Excellence & Innovation</h2>

                <p>At MIU, we believe in nurturing minds that will shape the future. Our academic philosophy is rooted in
                    the ancient Indian tradition of "Vasudhaiva Kutumbakam" (the world is one family) while embracing
                    cutting-edge technological advancements and global best practices in education.</p>

                <h3> Our Academic Pillars</h3>

            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb4.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Research Excellence
                            </h3>
                            <div class="text">
                                <p> State-of-the-art research facilities and partnerships with international institutions to
                                    drive innovation and discovery </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb5.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Global Perspective
                            </h3>
                            <div class="text">
                                <p> International collaborations, exchange programs, and multicultural learning environments
                                    that prepare students for global careers </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb6.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Innovation Hub
                            </h3>
                            <div class="text">
                                <p> Entrepreneurship incubation centers, startup support programs, and technology transfer
                                    initiatives</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb7.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Cultural Heritage
                            </h3>
                            <div class="text">
                                <p>Preservation and promotion of Manipuri culture, arts, and traditions through dedicated
                                    academic programs </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4">
                        <div class="single-blog-style4__inner">
                            <img src="{{ asset('/assets/images/web-image/abb8.png') }}" class="img-fluid" width="80" height="80" alt="image">
                            <h3 class="blog-title">
                                Sustainable Development
                            </h3>
                            <div class="text">
                                <p>Green campus initiatives, environmental research, and commitment to UN Sustainable
                                    Development Goals </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </section>


    <section class="blog-style4-area bg-white">
        <div class="container">
            <div class="sec-title pb-3">
                <h2>The Sacred Symbolism of Our Logo</h2>

                <p>The logo of Manipur International University is far more than a mere visual identifier—it is a profound
                    synthesis of ancient wisdom, cultural heritage, and universal values. Every element has been carefully
                    chosen to reflect our institution's commitment to excellence, spiritual growth, and global harmony.</p>

                <p>At its heart, our logo portrays two majestic elephants standing as eternal guardians of the Ashoka
                    Chakra, representing the Dharma Chakra (Wheel of Dharma). This central wheel, adorned with 24 spokes,
                    symbolically represents the Dharma—the righteous way of living, cosmic law and order, and the four noble
                    truths of life as taught by Lord Buddha.</p>

                <p>The design also incorporates the ancient shortened version of Pakhangbha Paphal, representing the supreme
                    deity of the Meitei tradition of Manipur, thus honoring our deep cultural roots while embracing
                    universal spiritual principles.</p>

                <h3> Sacred Linguistic Elements </h3>
            </div>
            <div class="row mb-3">

                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                "Jnanam Anantam" <br> (ज्ञानम् अनन्तम्)
                            </h3>
                            <div class="text">
                                <p> A Sanskrit phrase written in Devanagari script meaning "Knowledge is Infinite." This
                                    profound statement reflects our belief that learning is a lifelong journey without
                                    boundaries, encouraging continuous exploration and discovery. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                "Fiat Lux"
                            </h3>
                            <div class="text">
                                <p> A Latin phrase meaning "Let there be light." Found in both the Rigveda and the Book of
                                    Genesis, this divine expression symbolizes the illumination of knowledge and the
                                    dispelling of ignorance through education. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                "Inveniam Viam"
                            </h3>
                            <div class="text">
                                <p> Latin for "I shall find a way," derived from the ancient verse "Aut inveniam viam aut
                                    faciam" (I shall either find a way or make one). This embodies our spirit of
                                    determination and innovation in overcoming challenges. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h3> Mystical and Cultural Symbols </h3>
            <div class="row mt-3">
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Trinity Knot (Triquetra)
                            </h3>
                            <div class="text">
                                <p> An ancient Celtic symbol representing the interconnectedness of mind, body, and spirit;
                                    past, present, and future; or creation, preservation, and transformation. It symbolizes
                                    the holistic approach to education at MIU. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Chinese "Lu" Symbol (禄)
                            </h3>
                            <div class="text">
                                <p> An auspicious Chinese character resembling the Hindu Swastika, representing prosperity,
                                    fortune, and wealth—not just material, but intellectual and spiritual abundance. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Chinese "Fu" Symbol (福)
                            </h3>
                            <div class="text">
                                <p> A traditional Chinese character symbolizing good fortune, blessings, and happiness. It
                                    represents our wish for all students to achieve fulfillment and success in their
                                    endeavors. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Rhinoceros Head
                            </h3>
                            <div class="text">
                                <p> Symbolizing gentleness combined with strength, unconventional thinking, peaceful yet
                                    powerful personalities, steadiness in purpose, and the agility to adapt to changing
                                    circumstances. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Shankha (Sacred Conch Shell)
                            </h3>
                            <div class="text">
                                <p> The sacred emblem of Lord Vishnu, praised in Hindu scriptures as a giver of fame,
                                    longevity, and prosperity. It's also the abode of Goddess Lakshmi, representing wealth
                                    of knowledge and wisdom. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-item-stretch">
                    <div class="single-blog-style4 shadow-sm border border-1 border-info">
                        <div class="single-blog-style4__inner p-3">
                            <h3 class="blog-title">
                                Manipura Chakra
                            </h3>
                            <div class="text">
                                <p> The third primary chakra in Vedic tradition, associated with fire and the power of
                                    transformation. It represents our commitment to transforming students through the fire
                                    of knowledge and wisdom. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-style4-area pt-2 bg-white">
        <div class="container">
            <div class="sec-title pb-3">
                <h2>The Guardian Elephants</h2>
                <p>The two elephants facing each other with their trunks raised upward are profound symbols in both Buddhist
                    and Hindu traditions. They represent:</p>
            </div>
            <ul class="mb-5">
                <li> <strong>1. Wisdom and Memory: </strong> Elephants are revered for their intelligence and ability to
                    remember, symbolizing the retention and application of knowledge.</li>
                <li> <strong>2. Strength and Protection: </strong> As guardians of the Dharma Chakra, they protect the
                    sacred knowledge and traditions of our institution.</li>
                <li> <strong>3. Good Fortune: </strong> Upward-facing trunks traditionally symbolize prosperity, academic
                    success, and positive energy.</li>
                <li> <strong>4. Leadership: </strong> Elephants naturally lead their herds with wisdom and compassion,
                    qualities we instill in our graduates.</li>
                <li> <strong>5. Fertility of Mind: </strong> Representing the fertile ground of education where ideas grow
                    and flourish.</li>
            </ul>

            <h3>The Eternal Wheel</h3>
            <p>The outer Dharma Chakra represents the continuous cycle of learning, growth, and progress. Its 24 spokes
                symbolize the 24 hours of dedicated learning and the continuous journey of academic and spiritual
                development that never ceases.</p>

            <h3>Linguistic Heritage</h3>
            <p>The two banners below the central shield carry the name "Manipur International University" in both Meitei
                Mayek (the ancient Manipuri script) and English, representing our commitment to preserving local heritage
                while embracing global communication. This logo graces all our certificates, official stationery,
                commemorative items, and the exteriors of all university buildings, serving as a constant reminder of our
                values and mission.</p>


            <div class="sec-title pb-3 mt-5">
                <h2>Important Documents</h2>
                <p>Access our official documents and legal recognitions:</p>

                <div class="btns-box">
                    <a class="btn-one" href="#">
                        <span class="txt">
                            Download UGC Recognition Letter
                        </span>
                    </a>
                    <a class="btn-one style2" href="#">
                        <span class="txt">
                            Download Manipur International University Act, 2018
                        </span>
                    </a>
                </div>

                <p> <span class="text-danger"> * </span> These documents validate our legal status and accreditation </p>
            </div>
        </div>
    </section>


    <section class="course-curriculum-area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="course-curriculum-content-box">
                        <div class="course-layout-content-box">
                            <div class="inner-title">
                                <h4>FAQs</h4>
                                <p> Need Help? </p>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="course-layout-title-box">
                                            <h4>
                                                Where is MIU located?
                                            </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">
                                                The Administrative Headquarters of the University is located at MIU Palace,
                                                Ghari, Airport Road, Imphal, Manipur – 795140, which is a 2 minutes drive
                                                from Bir Tikendrajit International Airport.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>Is MIU recognised by UGC?</h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">MIU is recognised by the University Grants Commission (UGC),
                                                MHRD, Government of India under Section 2(f) and Section 22 of UGC Act,
                                                1956.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>Is MIU a state University? </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">Yes, Manipur International University (MIU) is an Autonomous
                                                State International University situated in the scenic State of Manipur in
                                                India. It is a Statutory University established and recognised by the State
                                                Government of Manipur by an Act of the State. Declared as an “International
                                                University of Excellence” and as an “Institution of State Importance” by the
                                                State</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4>How many campuses does MIU have? </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">The headquarters of the University is at the heart of the
                                                city of Imphal. The University aims to have 15 campuses across the state.
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="course-layout-title-box">
                                            <h4> What is the Meaning of MIU logo? </h4>
                                            <div class="icon-outer">
                                                <i class="icon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="acc-content">
                                        <div class="course-layout-content-box-inner">
                                            <p class="p-3">The logo portrays two elephants guarding the Ashoka Chakra
                                                representing the Dharma Chakra (Wheel of Dharma; a wheel represented with 24
                                                spokes symbolically representing the Dharma, the right way of living, cosmic
                                                law and order, four noble truths of life by Lord Buddha or simply the life)
                                                and Ancient shortened version of Pakhangbha Paphal representing the supreme
                                                God of the Meitei tradition of State of Manipur.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
@endsection
