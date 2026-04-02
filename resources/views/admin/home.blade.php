@extends('layouts.main')

@push('styles')
<style>
    .education-dashboard .card { transition: transform 0.2s ease-in-out; }
    .education-dashboard .card:hover { transform: translateY(-2px); }
    .avatar-item { display: flex; align-items: center; justify-content: center; }
    .hover-shadow:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,.08);
        transition: all .3s ease;
    }
</style>
@endpush

@section('content')
<main class="app-wrapper">
    <div class="app-container">

        <!-- Page Header -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Dashboard</h4>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
            </div>
        </div>

        <div class="education-dashboard">

            <!-- Stats Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Total Students</h6>
                            <h4>1,250</h4>
                            <small class="text-success">+120 this month</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Total Courses</h6>
                            <h4>45</h4>
                            <small class="text-success">30 active</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Total Revenue</h6>
                            <h4>₹ 8,50,000</h4>
                            <small class="text-success">+12% this month</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>Universities</h6>
                            <h4>12</h4>
                            <small class="text-muted">28 departments</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row g-4 mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Revenue Analytics</div>
                        <div class="card-body">
                            <div id="revenue-analytics-chart" style="height:300px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Student Admissions</div>
                        <div class="card-body">
                            <div id="student-admissions-chart" style="height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Students -->
            <div class="row g-4 mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Recent Students</div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Ali Khan</td>
                                    <td>BCA</td>
                                    <td>12 Jan 2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Rahul Sharma</td>
                                    <td>MCA</td>
                                    <td>10 Jan 2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Sara Ahmed</td>
                                    <td>BBA</td>
                                    <td>08 Jan 2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Course Distribution -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Course Distribution</div>
                        <div class="card-body">
                            <div id="course-distribution-chart" style="height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
new ApexCharts(document.querySelector("#revenue-analytics-chart"), {
    chart: { type: 'area', height: 300 },
    series: [
        { name: 'Revenue', data: [50, 60, 70, 80, 90, 100] }
    ],
    xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun'] }
}).render();

new ApexCharts(document.querySelector("#student-admissions-chart"), {
    chart: { type: 'line', height: 300 },
    series: [
        { name: 'Admissions', data: [20, 30, 25, 40, 45, 60] }
    ],
    xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun'] }
}).render();

new ApexCharts(document.querySelector("#course-distribution-chart"), {
    chart: { type: 'donut', height: 300 },
    series: [40, 25, 20, 15],
    labels: ['BCA', 'MCA', 'MBA', 'BBA']
}).render();
</script>
