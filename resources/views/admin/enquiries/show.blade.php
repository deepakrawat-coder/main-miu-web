@extends('layouts.main')
@section('content')

<main class="app-wrapper">
    <div class="app-container">

        <!-- Page title -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Enquiry Details</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('enquiries.index') }}">Enquiries</a></li>
                        <li class="breadcrumb-item active">View Detail</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('enquiries.index') }}" class="btn btn-primary hstack gap-1">
                <i class="ri-arrow-left-line"></i>
                <span>Back to List</span>
            </a>
        </div>

        <div class="row g-4">
            <div class="col-xl-8">
                <div class="card h-100">
                    <div class="card-header border-bottom">
                        <h5 class="card-title mb-0">Message / Query</h5>
                    </div>
                    <div class="card-body">
                        <p class="fs-15 text-muted mb-0">
                            {{ $enquiry->message ?? 'No message provided.' }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card h-100">
                    <div class="card-header border-bottom">
                        <h5 class="card-title mb-0">Lead Information</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Name</span>
                                <span class="fw-semibold text-dark">{{ $enquiry->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Email</span>
                                <span class="fw-semibold text-dark">{{ $enquiry->email }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Phone</span>
                                <span class="fw-semibold text-dark">{{ $enquiry->phone }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Source Page</span>
                                <span class="badge bg-info text-capitalize">{{ str_replace('-', ' ', $enquiry->source_page) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Submission Date</span>
                                <span class="fw-semibold text-dark">{{ $enquiry->created_at->format('M d, Y H:i A') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <span class="text-muted">Status</span>
                                <span class="badge {{ $enquiry->status ? 'bg-success' : 'bg-warning' }}">
                                    {{ $enquiry->status ? 'Contacted' : 'New Lead' }}
                                </span>
                            </li>
                        </ul>

                        @if($enquiry->school)
                        <div class="mt-4 pt-2">
                            <h6 class="fs-14 fw-semibold text-uppercase mb-3">Interested School</h6>
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ $enquiry->school->name }}</h6>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($enquiry->specialization)
                        <div class="mt-4 pt-2">
                            <h6 class="fs-14 fw-semibold text-uppercase mb-3">Interested Specialization</h6>
                            <div class="d-flex align-items-center p-3 border rounded">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ $enquiry->specialization->title }}</h6>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection