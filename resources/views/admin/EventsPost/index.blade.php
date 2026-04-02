@extends('layouts.main')
@section('content')

<main class="app-wrapper">
    <div class="app-container">

        <!-- Page title -->
        <div class="hstack flex-wrap gap-3 mb-5">
            <div class="flex-grow-1">
                <h4 class="mb-1 fw-semibold">Posts Management</h4>
                <nav>
                    <ol class="breadcrumb breadcrumb-arrow mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-12">
                <div class="card mb-0 h-100">
                    <div class="card-body">
                        <table id="posts-table" class="table table-hover align-middle table-nowrap w-100">
                            <thead class="bg-light bg-opacity-30">
                                <tr>
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Publish Date</th>
                                    <th>Featured</th>
                                    <th>New</th>
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
        text: 'Add Post',
        className: 'add-new btn btn-primary mb-3 mb-md-0',
        attr: { 'onclick': "add('{{ route('posts.create') }}', 'modal-lg')" }
    };

    var table = $('#posts-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('posts.index') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'category', name: 'category.name' },
            { data: 'title', name: 'title' },
            { data: 'publish_date', name: 'publish_date' },
            { data: 'is_featured', name: 'is_featured', orderable: false, searchable: false },
            { data: 'is_new', name: 'is_new', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        columnDefs: [

            // Featured Toggle
            {
                targets: 4,
                render: function(data, type, full) {
                    var checked = full.is_featured == 1 ? 'checked' : '';
                    return `<div class="form-check form-switch form-switch-success">
                                <input class="form-check-input" type="checkbox" ${checked}
                                    onclick="updateActiveStatus('posts/featured/${full.id}', 'posts-table')">
                            </div>`;
                }
            },

            // New Toggle
            {
                targets: 5,
                render: function(data, type, full) {
                    var checked = full.is_new == 1 ? 'checked' : '';
                    return `<div class="form-check form-switch form-switch-info">
                                <input class="form-check-input" type="checkbox" ${checked}
                                    onclick="updateActiveStatus('posts/new/${full.id}', 'posts-table')">
                            </div>`;
                }
            },

            // Action Buttons
            {
                targets: -1,
                render: function(data, type, full) {
                    return `<div class="hstack gap-2">
                                <button class="btn btn-sm btn-light-primary"
                                    onclick="edit('posts/edit/${full.id}', 'modal-lg')">
                                    <i class="ri-pencil-line"></i>
                                </button>
                                <button class="btn btn-sm btn-light-danger"
                                    onclick="destry('posts/delete/${full.id}', 'posts-table')">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </div>`;
                }
            }
        ],
        order: [[0, 'desc']],
        responsive: true,
        pageLength: 10,
        dom: '<"d-flex justify-content-between mb-2"<"dataTables_filter"f><"add_button"B>>rt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
        buttons: [addButton],
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Posts..."
        }
    });

});
</script>
@endsection
