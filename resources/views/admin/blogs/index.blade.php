@extends('layouts.main')
@section('content')

<main class="app-wrapper">
    <div class="app-container">

        <!-- Page title -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Blog Management</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item active">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-0 h-100">
                    <div class="card-body">
                        <table id="blogs-table" class="table table-hover align-middle table-nowrap w-100">
                            <thead class="bg-light bg-opacity-30">
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Published Date</th>
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
            text: 'Add Blog',
            className: 'add-new btn btn-primary mb-3 mb-md-0',
            attr: {
                'onclick': "add('{{ route('admin.blogs.create') }}', 'modal-lg')"
            }
        };

        var table = $('#blogs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.blogs.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'published_date',
                    name: 'published_date'
                },
                {
                    data: 'status',
                    name: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
            columnDefs: [{
                targets: -1,
                render: function(data, type, full) {
                    return `<div class="hstack gap-2">
                                <button class="btn btn-sm btn-light-primary"
                                    onclick="edit('admin.blogs.edit/${full.id}', 'modal-lg')">
                                    <i class="ri-pencil-line"></i>
                                </button>
                                <button class="btn btn-sm btn-light-danger"
                                    onclick="destroy('admin.blogs.delete/${full.id}', 'blogs-table')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>`;
                }
            }],
            order: [
                [0, 'desc']
            ],
            responsive: true,
            pageLength: 10,
            dom: '<"d-flex justify-content-between mb-2"<"dataTables_filter"f><"add_button"B>>rt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            buttons: [addButton],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search Blogs..."
            }
        });

        // Handle status change
        $(document).on('change', '.change-status', function() {
            let id = $(this).data('id');
            $.ajax({
                url: `{{ url('admin.blogs/status') }}/${id}`,
                type: 'GET',
                success: function(response) {
                    if (response.status === 'success') {
                        toastr.success(response.message);
                        table.ajax.reload();
                    } else {
                        toastr.error(response.message);
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