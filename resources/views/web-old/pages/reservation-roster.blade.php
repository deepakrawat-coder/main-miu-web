@extends('web.layouts.main')
@section('title', '| Reservation Roster')
@section('description',
    'Committed to upholding the principles of equity, inclusion, and social justice through
    effective implementation of reservation policies')

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
                            <h2> Reservation Roster </h2>
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


    <section class="blog-style1-area mb-5">
        <div class="container">
            <div class="sec-title ">
                <h2> About the Reservation Roster </h2>
                <p>
                    Manipur International University (MIU) is committed to upholding the principles of equity, inclusion,
                    and social justice through the effective implementation of reservation policies as mandated by the
                    Government of India and relevant statutory bodies. The university maintains a comprehensive Reservation
                    Roster to ensure transparency and fairness in admissions, faculty recruitment, and other institutional
                    processes.
                </p>
                <p>
                    MIU adheres to the prescribed reservation norms for Scheduled Castes (SC), Scheduled Tribes (ST), Other
                    Backward Classes (OBC), Economically Weaker Sections (EWS), and Persons with Disabilities (PWD). The
                    roster system provides a structured mechanism for allocating reserved seats and positions, thereby
                    ensuring compliance with constitutional and regulatory mandates.
                </p>
                <p class="mb-4">
                    The Reservation Roster is regularly updated and monitored to reflect the latest policy directives and to
                    track the fulfilment of category-wise quotas. This enables the university to promote equal opportunity
                    and inclusive representation across all academic and administrative domains.
                </p>
            </div>

            <div class="sec-title ">
                <h2> Key Features of MIU's Reservation Roster </h2>
                <ul class="ml-3">
                    <li>1. Ensures equitable distribution of reserved seats and positions across categories.</li>
                    <li>2. Updated periodically to incorporate changes in reservation policies and guidelines.</li>
                    <li>3. Enhances transparency in recruitment, admissions, and institutional appointments.</li>
                    <li>4. Facilitates compliance with national and state-level reservation regulations.</li>
                </ul>
            </div>

            <div class="sec-title ">
                <h2> The 100-Point Roster Framework </h2>
                <p class="mb-5">
                    The 100-point roster is a statutory framework used to ensure proportional representation of reserved
                    categories in recruitment and admissions. Each point in the cycle corresponds to a sanctioned post or
                    seat, and the category assigned to that point is determined by the percentage of reservation mandated
                    for each group.
                </p>

                <h2>Applicable Reservation Percentages</h2>
                <p class="mb-4">As per Central Government norms:</p>
                <div class="ugc-jrf mb-5">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-info">
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Reservation %</th>
                                    <th scope="col">Points in 100-Cycle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">SC</th>
                                    <th>15%</th>
                                    <th>15 points</th>
                                </tr>
                                <tr>
                                    <th scope="row">ST</th>
                                    <th>7.5%</th>
                                    <th>7-8 points</th>
                                </tr>
                                <tr>
                                    <th scope="row">OBC</th>
                                    <th>27%</th>
                                    <th>27 points</th>
                                </tr>
                                <tr>
                                    <th scope="row">EWS</th>
                                    <th>10%</th>
                                    <th>10 points</th>
                                </tr>
                                <tr>
                                    <th scope="row">UR</th>
                                    <th>40.3%</th>
                                    <th>40-41 points</th>
                                </tr>
                                <tr>
                                    <th scope="row">PWD</th>
                                    <th>10%</th>
                                    <th>Applied across categories (not fixed points)</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <p><span class="text-warning">Note:</span> PWD reservation is horizontal, meaning it cuts across all categories and is implemented within each group (e.g., 4% of SC seats must be for PWD candidates).</p>

                <h3 class="mb-1">For further information regarding the Reservation Roster, students, faculty members, and stakeholders are encouraged to contact:</h3>
                <p class="mb-1">Office of the Registrar</p>
                <p>Manipur International University</p>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
