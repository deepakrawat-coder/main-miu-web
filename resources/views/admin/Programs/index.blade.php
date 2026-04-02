@extends('layouts.main')
@section('content')

<main class="app-wrapper">
    <div class="app-container">

        <!-- Page title -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Programs</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item active">Programs</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Table -->
        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-0 h-100">
                    <div class="card-body">
                        <table id="programs-table" class="table table-hover align-middle table-nowrap w-100">
                            <thead class="bg-light bg-opacity-30">
                                <tr>
                                    <th>No.</th>
                                    <th>Course</th>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                    <th>Image</th>
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
            text: 'Add Program',
            className: 'add-new btn btn-primary mb-3 mb-md-0',
            attr: {
                'onclick': "add('{{ route('programs.create') }}', 'modal-lg')"
            }
        };

        var table = $('#programs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('programs.index') }}",

            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },

                // ✅ Course Name (relationship)
                {
                    data: 'courses',
                    name: 'courses',
                    orderable: false,
                    searchable: false
                },

                {
                    data: 'name',
                    name: 'name'
                },

                // ✅ Short Description (strip HTML)
                {
                    data: 'short_description',
                    name: 'short_description'
                },

                // ✅ Image
                {
                    data: 'image',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        if (data) {
                            return `<img src="/${data}"
                                style="width:60px;height:60px;object-fit:cover;border-radius:6px;">`;
                        }
                        return '-';
                    }
                },

                // ✅ Status Toggle
                {
                    data: 'status',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full) {

                        var checked = data == 1 ? 'checked' : '';
                        var label = data == 1 ? 'Active' : 'Inactive';

                        return `<div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" ${checked}
                                onclick="updateActiveStatus('programs/status/${full.id}','programs-table')">
                            <label class="form-check-label">${label}</label>
                        </div>`;
                    }
                },

                // ✅ Action Buttons
                {
                    data: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full) {
                        return `<div class="hstack gap-2">
                            <button class="btn btn-sm btn-light-primary"
                                onclick="edit('programs/edit/${full.id}','modal-lg')">
                                <i class="ri-pencil-line"></i>
                            </button>
                            <button class="btn btn-sm btn-light-danger"
                                onclick="destroy('programs/delete/${full.id}','programs-table')">
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
                searchPlaceholder: "Search Programs..."
            }
        });

    });
</script>
@endsection