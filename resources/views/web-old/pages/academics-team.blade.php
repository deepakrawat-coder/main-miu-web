@extends('web.layouts.main')
@section('title', '| Academics Team')
@section('description', 'Academics Team')

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

        .py-80 {
            padding: 80px 0 50px 0;
        }

        .dept {
            width: 15rem;
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
                            <h2> Faculty Directory </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active"> Manipur International University </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="contact-info-style4-area pb-5">
        <div class="container">
            <div class="sec-title-style5 text-center d-none">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"> <span class="flaticon-search"></span>
                                </span>
                            </div>
                            <input type="text" class="form-control"
                                placeholder="Search by name, designation or department..." aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Departments
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Education (Guidance & Counselling & Mental
                                    Testing)</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al1.png') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80 px-3">
                                <div class="title">
                                    <h3>Prof R K Indira Devi</h3>
                                    <p> DEAN, School of Humanities </p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                        English
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al2.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof S James</h3>
                                    <p> DEAN, School of Law & Strategic Studies </p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Law/Hindi
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al3.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Charles Yuhlung</h3>
                                    <p> DEAN, School of Social Sciences </p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                        Sociology
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al4.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof MD Kheiruddin Shah</h3>
                                    <p> DEAN, School of Commerce & Management </p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Commerce
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al5.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Raghumani Singh</h3>
                                    <p> DEAN, School of Agri & Allied Sciences</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Botany
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al6.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Ng Ajitkumar</h3>
                                    <p>DEAN, School of Biological Sciences</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                      Zoology
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al7.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof N Ibohal Singh</h3>
                                    <p>DEAN, School of Human & Health Sciences</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                      Yoga
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al8.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Thoudam Basanta Singh</h3>
                                    <p>DEAN, School of Physical Sciences & Engineering</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Physics
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al9.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Rajesh Chinchewadi</h3>
                                    <p>DEAN, School of Innovation & Skill</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Computer science
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al10.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof Wahengbam Sushma Devi</h3>
                                    <p>Dean of Students</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                      Sociology
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al11.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Dr. Chandibai Potsangbam</h3>
                                    <p>Assistant Registrar</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                       Management
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-center">
                        <div class="alt">
                            <img src="{{ asset('/assets/images/web-image/al12.jpg') }}"
                                class="img-fluid messageimage border border-info my-4" alt="image">
                        </div>
                        <div class="border border-1 shadow-sm">
                            <div class="text-center py-80">
                                <div class="title">
                                    <h3>Prof. RK Sujata</h3>
                                    <p>Professor & Research Officer, NEP Coordinator</p>
                                </div>
                                <div class="mb-2">
                                    <div class="badge badge-info text-wrap p-2 dept">
                                      Education
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary"> View Profile </a>
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
