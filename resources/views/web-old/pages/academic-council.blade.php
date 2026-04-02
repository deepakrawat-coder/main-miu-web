@extends('web.layouts.main')

@section('title', '| Academic Council')
@section('description', 'Academic Council of Manipur International University')

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
            padding: 70px 0 60px;
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
    </style>
@endsection

@section('content')
    {{-- <section class="breadcrumb-area">
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
    </section> --}}
    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="container text-start cutompadding ">
            <span class="badge badge-light mb-3 d-inline-block px-3 py-2">
                Academic Council
            </span>

            <h1 class="page-title text-white">
                IInd Academic Council<br>
                <span>Manipur International University</span>
            </h1>

            <p class="term-text">
                Term: <strong>21st December 2024 – 31st December 2027</strong>
            </p>

            <p class="approval-text text-start">
                As per amended guidelines approved by the Executive Council meeting<br>
                held on <strong>16th October 2024</strong>
            </p>
            <div class="text-center download-btn">
                <a href="#" class="btn btn-warning btn-lg">
                    <i class="fa fa-download"></i> Download Notification
                </a>
            </div>
        </div>
    </section>
    <section class="blog-style4-area">
        <div class="container">
            <div class=" mb-4">
                <div class="sec-title m-0 p-0 mb-3">
                    <h2>Composition of the Academic Council (Total Members: 60)</h2>
                </div>
                <ul class="mb-3">
                    <li>MIU Faculties – <strong>25</strong></li>
                    <li>Government Nominees – <strong>03</strong></li>
                    <li>Academicians & Experts (National / Central Universities) – <strong>04</strong></li>
                    <li>Academicians & Experts (Local) – <strong>09</strong></li>
                    <li>Industry Experts – <strong>12</strong></li>
                    <li>Social Category Representatives – <strong>03</strong></li>
                    <li>Student Representatives – <strong>03</strong></li>
                    <li>Member Secretary – <strong>01</strong></li>
                </ul>

                <p class="mb-0 text-center">
                    <strong class="text-dark">Approved by:</strong> Executive Council Meeting on <strong
                        class="text-dark">16th October 2024</strong>
                </p>
            </div>
        </div>
    </section>
    <section class="blog-style4-area">
        <div class="container">
            <div class="mb-4">
                <div class="sec-title">
                    <h2> List of Members (21 Dec 2024 – 20 Dec 2027)</h2>
                </div>
                <h3 class="section-subheading mb-3">State Government Nominee Members</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="8%">Sl No</th>
                                <th>Name and Address</th>
                                <th width="20%">Designation</th>
                                <th width="20%">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>Prof. Harikumar Pallathadka VC</td>
                                <td>Chairperson</td>
                                <td>6909970067</td>
                            </tr>

                            <tr>
                                <td>1.</td>
                                <td>Prof. P Kumar Singh Pro - Vice Chancellor</td>
                                <td>Vice Chairperson</td>
                                <td>
                                    9774011289<br>
                                    dr.pkumar@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>2.</td>
                                <td>Prof. Irom Tomba Singh, Dean School of Mathematical Sciences</td>
                                <td>Member</td>
                                <td>
                                    9862275312<br>
                                    dr.iromtomba@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>3.</td>
                                <td>Prof. S James Dass, Dean School of Law, Defence and Strategic Studies</td>
                                <td>Member</td>
                                <td>
                                    7980506093<br>
                                    Dr.james@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>4.</td>
                                <td>Prof. Charles Yuhung, Dean School of Social Sciences</td>
                                <td>Member</td>
                                <td>
                                    9862522550<br>
                                    dr.charles@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>5.</td>
                                <td>Prof. R Sanghun Singh, Dean School of Arts and Allied Sciences</td>
                                <td>Member</td>
                                <td>
                                    7308150914<br>
                                    dr.sanghun@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>6.</td>
                                <td>Prof. Ng Ajitkumar, Dean School of Biological Sciences</td>
                                <td>Member</td>
                                <td>
                                    9485227590<br>
                                    dr.ajitkumar@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>7.</td>
                                <td>Prof. Th Basanta Singh, Dean School of Physical Sciences and Engineering</td>
                                <td>Member</td>
                                <td>
                                    8787403321<br>
                                    dr.basanta@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>8.</td>
                                <td>Prof. N Nobal Singh, Dean School of Human and Health Sciences</td>
                                <td>Member</td>
                                <td>
                                    9436891381<br>
                                    dr.nobal@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>9.</td>
                                <td>Prof. Md Khurshid Shah, Dean School of Commerce and Management Sciences</td>
                                <td>Member</td>
                                <td>
                                    9774935464<br>
                                    prof.khurshid@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>10.</td>
                                <td>Dr Rajesh Chinchwad, Dean School of Innovation and Skill</td>
                                <td>Member</td>
                                <td>
                                    8287873679<br>
                                    dr.rajeshchinchwad@miu.edu.in<br>
                                    richchwad@yahoo.com
                                </td>
                            </tr>

                            <tr>
                                <td>11.</td>
                                <td>Prof. R K Indira Devi, Dean School of Humanities</td>
                                <td>Member</td>
                                <td>
                                    9856491544<br>
                                    dr.rkindira@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>12.</td>
                                <td>Prof. W Sushma Devi, Dean Students Welfare</td>
                                <td>Member</td>
                                <td>
                                    9818705195<br>
                                    dr.sushma@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>13.</td>
                                <td>Prof. H Prativa, Professor</td>
                                <td>Member</td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>14.</td>
                                <td>Prof. R K Sujita, Professor</td>
                                <td>Member</td>
                                <td>
                                    9856910930<br>
                                    dr.sujita@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>15.</td>
                                <td>Prof. Mayengbam Bidyarani Devi, Professor</td>
                                <td>Member</td>
                                <td>
                                    9774328607<br>
                                    dr.mayengbambidyarani@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>16.</td>
                                <td>Prof. Irom Shilly, Professor</td>
                                <td>Member</td>
                                <td>
                                    9854844515<br>
                                    dr.iromshilly@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>17.</td>
                                <td>Prof. Chanchal Potsangbam, Professor</td>
                                <td>Member</td>
                                <td>
                                    9774800960<br>
                                    dr.chanchal@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>18.</td>
                                <td>Dr M Bidyarani Devi, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    9774770034<br>
                                    dr.bidyarani@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>19.</td>
                                <td>Dr Ghralson Devi, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    9774526966<br>
                                    dr.ghralson@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>20.</td>
                                <td>Dr K Misha Singh, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    7085383890<br>
                                    dr.kmishasingh@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>21.</td>
                                <td>Dr A Bijayalaxmi, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    9611187749<br>
                                    dr.bijayalaxmi@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>22.</td>
                                <td>Dr L Nonia, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    9774293528<br>
                                    nonia.louramba@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>23.</td>
                                <td>Dr Salam Anand, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    7085602359<br>
                                    dr.anandsalam@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>24.</td>
                                <td>Dr Yumlembam Bidyananda, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    9612318891<br>
                                    dr.bidyananda@miu.edu.in
                                </td>
                            </tr>

                            <tr>
                                <td>25.</td>
                                <td>Dr Senjam Jinus Singh, Associate Professor</td>
                                <td>Member</td>
                                <td>
                                    6900973539, 6900973539<br>
                                    singhsenjam@gmail.com
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="mb-4">
                <!-- State Government Nominee Members Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">State Government Nominee Members</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>26.</td>
                                    <td>The Director of University & Higher Education nominee</td>
                                    <td>Nominee Member</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>27.</td>
                                    <td>The Director of Technical Education nominee</td>
                                    <td>Nominee Member</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>28.</td>
                                    <td>The Director of AYUSH nominee</td>
                                    <td>Nominee Member</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Eminent Experts and Academicians from National Universities or Institutes Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Eminent Experts and Academicians from National Universities or
                        Institutes</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>29.</td>
                                    <td>Dr Ngangkham Joykumar Singh H O D College of Food Technology, Department of Food
                                        Processing Technology, Central Agricultural University CAU Imphal</td>
                                    <td>Advisory member</td>
                                    <td>5612168301</td>
                                </tr>

                                <tr>
                                    <td>30.</td>
                                    <td>Dr Thiyam David Singh H O D Department of Chemistry National Institute of
                                        Technology, NIT Imphal</td>
                                    <td>Advisory member</td>
                                    <td>8305981124</td>
                                </tr>

                                <tr>
                                    <td>31.</td>
                                    <td>Rtd Professor Y Hemanta Kumar, Department of Rabindra Sangit Dance and Drama,
                                        Visva
                                        Bharti University, Santiniketan</td>
                                    <td>Advisory member</td>
                                    <td>8918709842</td>
                                </tr>

                                <tr>
                                    <td>32.</td>
                                    <td>Dr. Sohisamjung Dangmei, Asst Professor Political Science Department, IG
                                        National
                                        Tribal University Manipur</td>
                                    <td>Advisory member</td>
                                    <td>9402791931</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- VC's Nominees - Eminent Experts / Academicians (Local) Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">VC's Nominees - Eminent Experts / Academicians (Local)</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>33.</td>
                                    <td>Prof (Rtd) H Tombi Singh (BioSciences), (Rtd) VC Manipur University and Rtd
                                        Director
                                        (BSD)</td>
                                    <td>Advisory member</td>
                                    <td>8837455762</td>
                                </tr>

                                <tr>
                                    <td>34.</td>
                                    <td>Dr Th Asha Sinha, Principal Hind Teacher Training College Govt of Manipur</td>
                                    <td>Advisory member</td>
                                    <td>8837321064</td>
                                </tr>

                                <tr>
                                    <td>35.</td>
                                    <td>Dr Th Munirno Singh, Rtd Director Planning Department, Govt of Manipur
                                        (Development
                                        concerns)</td>
                                    <td>Advisory member</td>
                                    <td>9366004178</td>
                                </tr>

                                <tr>
                                    <td>36.</td>
                                    <td>Dr Patsangbam Latsheh, MD Orthopedics, (Rtd) SAG Equiv to IG, BSFJ (Active
                                        Service
                                        and Health Sciences)</td>
                                    <td>Advisory member</td>
                                    <td>9435387007</td>
                                </tr>

                                <tr>
                                    <td>37.</td>
                                    <td>Dr A Momon Singh MD Forensic Medicine, Rtd HOD RMIS and Rtd Principal
                                        Melamvathur
                                        Aadhiparasahakti Institute of Medical Sciences, Tamil Nadu, (Forensic and Health
                                        Sciences)</td>
                                    <td>Advisory member</td>
                                    <td>9894837896</td>
                                </tr>

                                <tr>
                                    <td>38.</td>
                                    <td>Dr Ch Manglem Singh, MD Obs and Gynaecology, Rtd Professor JNIMS and CEO Impal
                                        Hospital, Lamphai, Imphal</td>
                                    <td>Advisory member</td>
                                    <td>9612164351</td>
                                </tr>

                                <tr>
                                    <td>39.</td>
                                    <td>Dr Th Bien (Mathematical Sciences) Rtd Principal Oriental Autonomous College
                                    </td>
                                    <td>Advisory member</td>
                                    <td>8787638956</td>
                                </tr>

                                <tr>
                                    <td>40.</td>
                                    <td>Dr S Gunadhor Singh, Education, Rtd Reader Impal College and Rtd Principal RK
                                        Sanatombi Devi College of Education, Imphal Education</td>
                                    <td>Advisory member</td>
                                    <td>8413942282</td>
                                </tr>

                                <tr>
                                    <td>41.</td>
                                    <td>Dr M Makhonmari Rtd Asst Professor (Culture and Performing Arts) Manipur
                                        University
                                    </td>
                                    <td>Advisory member</td>
                                    <td>9612221823</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Eminent Experts of the Industry Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Eminent Experts of the Industry</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>42.</td>
                                    <td>Dr Rajeev Kangadam, Manipur Technology Innovation Hub, Imphal</td>
                                    <td>Advisory Member</td>
                                    <td>9615111595</td>
                                </tr>

                                <tr>
                                    <td>43.</td>
                                    <td>Dr Naorem Chaoba Singh, (Yoga Science) President, Manipur Yogasana Sports
                                        Association, Imphal West</td>
                                    <td>Advisory Member</td>
                                    <td>8774473940</td>
                                </tr>

                                <tr>
                                    <td>44.</td>
                                    <td>Khan Gopendra Singh, Rajya Prabhati, Patanjali Yoga Society of the Bharat Swabhiman
                                        Trust Manipur Prant and Secretary Manipur Yoga Society</td>
                                    <td>Advisory Member</td>
                                    <td>9612167022</td>
                                </tr>

                                <tr>
                                    <td>45.</td>
                                    <td>S Sanath Singh, CEO SS Electronics, Khurai Thangjam Leirak Imphal Manipur, Imphal
                                        East</td>
                                    <td>Advisory Member</td>
                                    <td>8974571965</td>
                                </tr>

                                <tr>
                                    <td>46.</td>
                                    <td>Dr Premjit Meitei, MMVON Company Pvt Ltd Imphal West</td>
                                    <td>Advisory Member</td>
                                    <td>7005365041</td>
                                </tr>

                                <tr>
                                    <td>47.</td>
                                    <td>Dr Mohammad Rakibuddin, CEO JR Hospital Imphal East</td>
                                    <td>Advisory Member</td>
                                    <td>6009079600</td>
                                </tr>

                                <tr>
                                    <td>48.</td>
                                    <td>Ch Miranda Devi Principal Kangla Health Care Institutional Foundation Imphal West
                                    </td>
                                    <td>Advisory Member</td>
                                    <td>9863309810</td>
                                </tr>

                                <tr>
                                    <td>49.</td>
                                    <td>Sayed A/math Coordinator JR Institute of Health Sciences, Imphal East</td>
                                    <td>Advisory Member</td>
                                    <td>8131001739</td>
                                </tr>

                                <tr>
                                    <td>50.</td>
                                    <td>Mr Telam Dara Singh President Nongpok Pukkel Organic Producers Company Private Ltd
                                        Imphal East</td>
                                    <td>Advisory Member</td>
                                    <td>9862734580</td>
                                </tr>

                                <tr>
                                    <td>51.</td>
                                    <td>Glashwar Yumman Proprietor Green Biotech, Imphal West</td>
                                    <td>Advisory Member</td>
                                    <td>9774250870</td>
                                </tr>

                                <tr>
                                    <td>52.</td>
                                    <td>Elizabeth Yarbom Proprietor Dewilens Tea, Imphal West</td>
                                    <td>Advisory Member</td>
                                    <td>9954189418</td>
                                </tr>

                                <tr>
                                    <td>53.</td>
                                    <td>Aran Proprietor Hortiflor Foods, Wino Bazar Ukhrul</td>
                                    <td>Advisory Member</td>
                                    <td>8415925917</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Social Category Representative Members Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Social Category Representative Members</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>54.</td>
                                    <td>Mr Deasnan Pamoni Sheela Tite nominee</td>
                                    <td>Advisory Member</td>
                                    <td>7085791931</td>
                                </tr>

                                <tr>
                                    <td>55.</td>
                                    <td>Mr Yumkhabam James Meitei Schedule Casta nominee</td>
                                    <td>Advisory Member</td>
                                    <td>8787577409</td>
                                </tr>

                                <tr>
                                    <td>56.</td>
                                    <td>Dr Sapam Jaewants PVMs nominee (Visual Imp)<br>Sapamjaewants299@gmail.com</td>
                                    <td>Advisory Member</td>
                                    <td>9612157246</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Students Representatives Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Students Representatives</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>57.</td>
                                    <td>Mr H Tapashree (PS English Dept)<br>PhD courses representatives</td>
                                    <td>Student Representative</td>
                                    <td>9612655467</td>
                                </tr>

                                <tr>
                                    <td>58.</td>
                                    <td>Mr L Viswanath Singh (PG Envt Sci)<br>PG courses representatives</td>
                                    <td>Student Representative</td>
                                    <td>9205615018</td>
                                </tr>

                                <tr>
                                    <td>59.</td>
                                    <td>Mr Rabiya Begum (BSc MLT JR)<br>UG Courses representatives</td>
                                    <td>Student Representative</td>
                                    <td>6005743784</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Member Secretary Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Member Secretary</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>60.</td>
                                    <td>Prof T Brajeshwari Devi, Registrar MJU<br>registrar@mju.edu.in</td>
                                    <td>Member Secretary</td>
                                    <td>9862879287</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Invitees Section -->
                <div class="mb-5">
                    <h3 class="section-subheading mb-3">Invitees</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="8%">Sl No</th>
                                    <th>Name and Address</th>
                                    <th width="20%">Designation</th>
                                    <th width="20%">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>61.</td>
                                    <td>Prof T Kamalabati Devi, Controller of Examinations</td>
                                    <td>Permanent Invitee</td>
                                    <td>kkamalabati@mju.edu.in</td>
                                </tr>

                                <tr>
                                    <td>62.</td>
                                    <td>Ningombam Amarjit Singh, Director MJU</td>
                                    <td>......</td>
                                    <td>9612123121</td>
                                </tr>

                                <tr>
                                    <td>63.</td>
                                    <td>Thokchom Lenin Singh, Librarian MJU</td>
                                    <td>......</td>
                                    <td>8014761077</td>
                                </tr>

                                <tr>
                                    <td>64.</td>
                                    <td>Kiran Soraisam, Finance Officer</td>
                                    <td>......</td>
                                    <td>6009149750</td>
                                </tr>

                                <tr>
                                    <td>65.</td>
                                    <td>Prof (Retd) T Umabati Devi Ombudsperson, Students Grievances Redressal Committee,
                                        Khurai, Imphal East</td>
                                    <td>......</td>
                                    <td>8974056543</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="text-center my-3">
                <span class="badge badge-success px-4 py-2">
                    MIU Academic Council – II
                </span>
                <p class="mt-2 mb-0 text-muted">
                    Tenure: <strong>21 December 2024 – 31 December 2027</strong>
                </p>
            </div>

    </section>
@endsection

@section('scripts')
@endsection
