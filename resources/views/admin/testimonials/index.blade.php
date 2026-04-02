@extends('layouts.main')
@section('content')

<main class="app-wrapper">
    <div class="app-container">

        <!-- Page title -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Testimonials</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Table -->
        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-0 h-100">
                    <div class="card-body table-responsive">
                        <table id="testimonials-table" class="table table-hover align-middle w-100">
                            <thead class="bg-light bg-opacity-30">
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Subtitle</th>
                                    <th>Page Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
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
    $(function() {
        const addButton = {
            text: 'Add Testimonial',
            className: 'add-new btn btn-primary mb-3 mb-md-0',
            attr: {
                'onclick': "add('{{ route('testimonials.create') }}', 'modal-lg')"
            }
        };

        var table = $('#testimonials-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('testimonials.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'image',
                    name: 'image',
                    render: function(data) {
                        return data ? `<img src="/${data}" width="50" class="rounded">` : 'No Image';
                    }
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'subtitle',
                    name: 'subtitle'
                },
                {
                    data: 'page_type',
                    name: 'page_type'
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full) {
                        var checked = data == 1 ? 'checked' : '';
                        var label = data == 1 ? 'Active' : 'Inactive';
                        console.log(data);
                        return `<div class="form-check form-switch form-switch-success">
                        <input class="form-check-input" type="checkbox" ${checked}
                            onclick="updateActiveStatus('testimonials/status/${full.id}','testimonials-table')">
                        <label class="form-check-label">${label}</label>
                    </div>`;
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full) {
                        return `<div class="hstack gap-2">
                                <button class="btn btn-sm btn-light-primary"
                                    onclick="edit('/testimonials/edit/${full.id}','modal-lg')">
                                    <i class="ri-pencil-line"></i>
                                </button>
                                <button class="btn btn-sm btn-light-danger"
                                    onclick="destroy('/testimonials/delete/${full.id}','testimonials-table')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>`;
                    }
                }
            ],
            order: [
                [0, 'desc']
            ],
            responsive: true,
            pageLength: 10,
            dom: '<"d-flex justify-content-between mb-2"<"dataTables_filter"f><"add_button"B>>rt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            buttons: [addButton],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search Testimonials..."
            }
        });
    });
</script>
@endsection