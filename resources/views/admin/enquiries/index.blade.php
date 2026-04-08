@extends('layouts.main')
@section('content')
    <main class="app-wrapper">
        <div class="app-container">

            <!-- Page title -->
            <div class="hstack flex-wrap gap-3 mb-5">
                <div class="flex-grow-1">
                    <h4 class="mb-1 fw-semibold">Enquiry Management</h4>
                    <nav>
                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">CMS</li>
                            <li class="breadcrumb-item active">Enquiries</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="card mb-0 h-100">
                        <div class="card-body">
                            <table id="enquiry-table" class="table table-hover align-middle table-nowrap w-100">
                                <thead class="bg-light bg-opacity-30">
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Enquiry For</th>
                                        <th>Source Page</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enquiries as $enquiry)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $enquiry->name }}</td>
                                            <td>{{ $enquiry->email }}</td>
                                            <td>{{ $enquiry->phone }}</td>

                                            <!-- ✅ Enquiry For (School / Program Name) -->
                                            <td>
                                                @if ($enquiry->school)
                                                    <span class="badge bg-primary">{{ $enquiry->school->name }}</span>
                                                @elseif ($enquiry->program)
                                                    <span class="badge bg-success">{{ $enquiry->program->name }}</span>
                                                @else
                                                    <span class="badge bg-secondary">N/A</span>
                                                @endif
                                            </td>
                                            <!-- ✅ Source Page -->
                                            <td>
                                                <span class="badge bg-info text-capitalize">
                                                    {{ str_replace('-', ' ', $enquiry->source_page) }}
                                                </span>
                                            </td>

                                            <td>{{ $enquiry->created_at->format('d M, Y') }}</td>

                                            <!-- ✅ Status -->
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input change-status" type="checkbox"
                                                        role="switch" data-id="{{ $enquiry->id }}"
                                                        {{ $enquiry->status ? 'checked' : '' }}>

                                                    <label class="form-check-label">
                                                        {{ $enquiry->status ? 'Contacted' : 'New' }}
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#enquiry-table').DataTable({
                responsive: true,
                order: [
                    [5, 'desc']
                ]
            });

            // Handle status change
            $(document).on('change', '.change-status', function() {
                let id = $(this).data('id');
                let $label = $(this).siblings('.form-check-label');
                $.ajax({
                    url: "{{ url('admin/enquiries/toggle-status') }}/" + id,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            $label.text(response.status ? 'Contacted' : 'New');
                        } else {
                            toastr.error('Failed to update status.');
                        }
                    },
                    error: function() {
                        toastr.error('Something went wrong!');
                    }
                });
            });
        });
    </script>
@endsection
