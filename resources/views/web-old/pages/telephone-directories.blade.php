@extends('web.layouts.main')
@section('title', '| Document Verification')
@section('description',
    'Experience seamless academic credential verification at Manipur International University. Our
    cutting-edge digital platform ensures secure, fast, and reliable document authentication for your professional and
    educational needs')

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
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Telephone Directories </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Telephone Directories </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-style4-area">
        <div class="container">
            <div class="">
                <div class="sec-title pb-2 text-center">
                    <h2> Telephone Directory</h2>
                </div>
                <h3 class="section-subheading mb-3 text-center">Manipur International University</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="8%">Name</th>
                                <th>Mobile No.</th>
                                <th width="20%">Designation</th>
                                <th width="20%">Email</th>
                                <th width="20%">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. Harikumar Pallathadka</td>
                                <td>8142093775</td>
                                <td>Chancellor</td>
                                <td>chancellor@miu.edu.in</td>
                                <td>Chancellor</td>
                            </tr>
                            <tr>
                                <td>Dr.Telem Kamalabati Devi</td>
                                <td>7005331806</td>
                                <td>Professor, Controller of Examination (HOD)</td>
                                <td>tkamalabati@miu.edu.in</td>
                                <td>Indian Languages (Hindi)</td>
                            </tr>
                            <tr>
                                <td>Dr. Yuhlung Cheithou Charles</td>
                                <td>9862552550</td>
                                <td>Professor, Dean of Social Sciences and Humanities</td>
                                <td>dr.charles@miu.edu.in</td>
                                <td>Sociology</td>
                            </tr>
                            <tr>
                                <td>Dr. Nonie Lourembam</td>
                                <td>9774293528</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>nonie.lourembam@miu.edu.in</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>Dr. Salam Anand Singh</td>
                                <td>7085602359</td>
                                <td>Associate Professor & Research Officer</td>
                                <td>dr.anandsalam@miu.edu.in</td>
                                <td>History</td>
                            </tr>
                            <tr>
                                <td>Dr. Yumlembam Bidyananda Singh</td>
                                <td>9612318891</td>
                                <td>Assistant Professor and Research Officer</td>
                                <td>dr.bidyananda@miu.edu.in</td>
                                <td>Performing Arts</td>
                            </tr>
                            <tr>
                                <td>Dr. S. James</td>
                                <td>7980506093</td>
                                <td>Professor, Dean of Humanities and Law</td>
                                <td>drjames23@miu.edu.in</td>
                                <td>Law/Defence Studies</td>
                            </tr>
                            <tr>
                                <td>Dr. Thokchom Laxmi Devi</td>
                                <td>9774073389 / 7005328926</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>laxmithok@miu.edu.in</td>
                                <td>Geology</td>
                            </tr>
                            <tr>
                                <td>Dr. Chandibai Potsangbam</td>
                                <td>9774800960</td>
                                <td>Associate Professor & Research Officer, Assistant Registrar</td>
                                <td>dr.chandibai@miu.edu.in</td>
                                <td>Management Studies</td>
                            </tr>
                            <tr>
                                <td>Dr. Thokchom Chandramani Singh</td>
                                <td>7005652568</td>
                                <td>Dean & Professor, Directorate of Regional Indian Languages</td>
                                <td>dr.chandramani@miu.edu.in</td>
                                <td>Linguistics</td>
                            </tr>
                            <tr>
                                <td>Dr. Khadangbam Mukta Singh</td>
                                <td>7085383690</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>dr.khadangbammukta@miu.edu.in</td>
                                <td>Yoga</td>
                            </tr>
                            <tr>
                                <td>Dr.RK Sujata Devi</td>
                                <td>9856910930 / 7005916145</td>
                                <td>Professor & Research Officer</td>
                                <td>rk.sujata@miu.edu.in</td>
                                <td>Education Studies</td>
                            </tr>
                            <tr>
                                <td>Prof. Takhelchangbam Brajeshwari</td>
                                <td>9862879287</td>
                                <td>Registrar</td>
                                <td>brajeshwari@miu.edu.in</td>
                                <td>Physics</td>
                            </tr>
                            <tr>
                                <td>Huidrom Jayantakumar Singh</td>
                                <td>9402882073</td>
                                <td>Professor & Research Officer, Chairman (Exam)</td>
                                <td>jayantakumar@miu.edu.in</td>
                                <td>Statistics</td>
                            </tr>
                            <tr>
                                <td>Dr. Pratibha Huidrom</td>
                                <td>9401281423</td>
                                <td>Associate Professor & Research Officer</td>
                                <td>dr.pratibhahuidrom@miu.edu.in</td>
                                <td>Microbiology</td>
                            </tr>
                            <tr>
                                <td>Dr. Manoharmayum Vishwanath Sharma</td>
                                <td>8305801124</td>
                                <td>Associate Professor & Research Officer, Assistant Registrar</td>
                                <td>manoharmayum@miu.edu.in</td>
                                <td>Environmental Science</td>
                            </tr>
                            <tr>
                                <td>Prof. Potsangbam Kumar Singh</td>
                                <td>9774011289</td>
                                <td>Senior Professor & Research Officer, Chairman Faculty Research Committee</td>
                                <td>dr.pkumar@miu.edu.in</td>
                                <td>Life Sciences</td>
                            </tr>
                            <tr>
                                <td>Dr. Ajit Kumar Ng</td>
                                <td>9485227590 / 9436696691</td>
                                <td>Associate Professor, Dean of Biological Sciences & Post-Doctoral Studies</td>
                                <td>dr.ajitng@miu.edu.in</td>
                                <td>Zoology</td>
                            </tr>
                            <tr>
                                <td>Dr. Bijyalaxmi Athokpam</td>
                                <td>9611187749</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>bijyalaxmi.a@miu.edu.in</td>
                                <td>Chemistry</td>
                            </tr>
                            <tr>
                                <td>Dr. Nongthombam Grihalakshmi Devi</td>
                                <td>9774526966</td>
                                <td>Associate Professor & Research Officer</td>
                                <td>dr.grihalakshmi@miu.edu.in</td>
                                <td>Biotechnology</td>
                            </tr>
                            <tr>
                                <td>Dr. Thoudam Basanta Singh</td>
                                <td>8787740321</td>
                                <td>Professor, Dean of Physical Science and Engineering</td>
                                <td>dr.basanta@miu.edu.in</td>
                                <td>Physics</td>
                            </tr>
                            <tr>
                                <td>Dr. Mutum Bidyarani Devi</td>
                                <td>9774770034</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>dr.bidyarani@miu.edu.in</td>
                                <td>Computer Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Lairenjam Obiroy</td>
                                <td>9962762220</td>
                                <td>Assistant Professor & Research Officer, Assistant Controller of Examination</td>
                                <td>obiroylai@miu.edu.in</td>
                                <td>Computer Science</td>
                            </tr>
                            <tr>
                                <td>Rajesh Chenchiwadi</td>
                                <td>829677379</td>
                                <td>Professor</td>
                                <td>dr.rajeshchenchiwadi@miu.edu.in</td>
                                <td>Computer Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Sonali Banerjee</td>
                                <td>9131820712</td>
                                <td>Professor & Research Officer</td>
                                <td>dr.sonalibanerjee@miu.edu.in</td>
                                <td>Nursing</td>
                            </tr>
                            <tr>
                                <td>Prof. Irom Tomba</td>
                                <td>9862275312</td>
                                <td>Senior Professor & Dean of Mathematic Sciences</td>
                                <td>dr.iromtomba@miu.edu.in</td>
                                <td>Mathematics</td>
                            </tr>
                            <tr>
                                <td>Dr. Irom Shirly</td>
                                <td>9854844515</td>
                                <td>Professor & Research Officer</td>
                                <td>dr.iromshirly@miu.edu.in</td>
                                <td>Social Work</td>
                            </tr>
                            <tr>
                                <td>Dr. Rathinam Babu</td>
                                <td>8095980273</td>
                                <td>Senior Professor</td>
                                <td>rathinambabu@miu.edu.in</td>
                                <td>Nursing</td>
                            </tr>
                            <tr>
                                <td>Dr. Anand Kumar Gyanendra Singh Wahengbam</td>
                                <td>7042335048</td>
                                <td>Assistant Professor & Research Officer</td>
                                <td>akgyanendra@miu.edu.in</td>
                                <td>Anthropology</td>
                            </tr>
                            <tr>
                                <td>Dr. Wahengbam Sushma Devi</td>
                                <td>9818705195</td>
                                <td>Associate Professor</td>
                                <td>dr.sushma@miu.edu.in</td>
                                <td>Sociology</td>
                            </tr>
                            <tr>
                                <td>Dr. Mayengbam Bidyarani Devi</td>
                                <td>9774338607</td>
                                <td>Professor and Coordinator</td>
                                <td>dr.mayengbidyarani@miu.edu.in</td>
                                <td>Linguistics</td>
                            </tr>
                            <tr>
                                <td>Dr. Seram Raghumani Singh</td>
                                <td>7308150914</td>
                                <td>Senior Professor</td>
                                <td>dr.raghumani@miu.edu.in</td>
                                <td>Botany</td>
                            </tr>
                            <tr>
                                <td>Dr. Thoudam Kheroda</td>
                                <td>7760950972</td>
                                <td>Associate Professor</td>
                                <td>thoudamkheroda@miu.edu.in</td>
                                <td>Nursing</td>
                            </tr>
                            <tr>
                                <td>Dr. Nongthombam Ibohal Singh</td>
                                <td>9436891381</td>
                                <td>Senior Professor</td>
                                <td>dr.ibohal@miu.edu.in</td>
                                <td>Yoga</td>
                            </tr>
                            <tr>
                                <td>Dr. Thokchom Debala Devi</td>
                                <td>8974710781</td>
                                <td>Associate Professor</td>
                                <td>dr.devla@miu.edu.in</td>
                                <td>Geology</td>
                            </tr>
                            <tr>
                                <td>Dr. Sanabam Gunajit</td>
                                <td>8794959921</td>
                                <td>Research Officer</td>
                                <td>sanabamgunajit@miu.edu.in</td>
                                <td>Political Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Rk Indira</td>
                                <td>9856459154</td>
                                <td>Professor</td>
                                <td>dr.rkindira@miu.edu.in</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>Dr. Chingangbam Sadananda Singh</td>
                                <td>6009662488</td>
                                <td>Associate Professor</td>
                                <td>chingangbam.sadananda@gmail.com</td>
                                <td>Environmental Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Senjam Jinus Singh</td>
                                <td>6009073539</td>
                                <td>Associate Professor</td>
                                <td>singhsenjam@gmail.com</td>
                                <td>Agriculture</td>
                            </tr>
                            <tr>
                                <td>Dr. Md Kheiruddin Shah</td>
                                <td>9774935464</td>
                                <td>Professor</td>
                                <td>mdkheiruddinshah@miu.edu.in</td>
                                <td>Commerce</td>
                            </tr>
                            <tr>
                                <td>Dr. Phungchamnao Ranreiphi Kharei</td>
                                <td>8415925917</td>
                                <td>Assistant Professor (Guest Faculty)</td>
                                <td>mediastudiesranreiphi@gmail.com</td>
                                <td>Journalism & Mass Communication</td>
                            </tr>
                            <tr>
                                <td>Dr. Nongmaithem Bijayalakshmi</td>
                                <td>7308345996</td>
                                <td>Associate Professor (Guest Faculty)</td>
                                <td>nbijayalakshmi@gmail.com</td>
                                <td>Zoology</td>
                            </tr>
                            <tr>
                                <td>Dr. Wahengbam Rorrkychand Singh</td>
                                <td>8794719282</td>
                                <td>Assistant Professor</td>
                                <td>wahengbamrorrkychand@miu.edu.in</td>
                                <td>Journalism & Mass Communication</td>
                            </tr>
                            <tr>
                                <td>Mairembam Sangita Devi</td>
                                <td>8119065515</td>
                                <td>Guest Faculty</td>
                                <td>mairembamsangita@miu.edu.in</td>
                                <td>Education Studies</td>
                            </tr>
                            <tr>
                                <td>Dr. Nongthombam Saphabi Devi</td>
                                <td>8794510532 / 9967455633</td>
                                <td>Senior Professor</td>
                                <td>nongthombamSaphabi@miu.edu.in</td>
                                <td>Nursing</td>
                            </tr>
                            <tr>
                                <td>Dr. Saikhom Debina Chanu</td>
                                <td>7005536258</td>
                                <td>Assistant Professor</td>
                                <td>debinasaikhom22@gmail.com</td>
                                <td>Home Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Th Madhuri Devi</td>
                                <td>9862241435</td>
                                <td>Senior Professor</td>
                                <td>thmadhuri@miu.edu.in</td>
                                <td>Library Science</td>
                            </tr>
                            <tr>
                                <td>Dr. Yumnam Surjit Singh</td>
                                <td>9615117918</td>
                                <td>Guest Faculty (Associate Professor)</td>
                                <td>yumnamsurjitsingh@miu.edu.in</td>
                                <td>Education Studies</td>
                            </tr>
                            <tr>
                                <td>Dr. Gurumayum Asharani Devi</td>
                                <td>9402880479</td>
                                <td>Associate Professor</td>
                                <td>gurumayumasharanidevi@miu.edu.in</td>
                                <td>Cultural Studies</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
