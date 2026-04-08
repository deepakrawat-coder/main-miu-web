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
                            <table id="programs-table" class="table table-hover align-middle  w-100">
                                <thead class="bg-light bg-opacity-30">
                                    <tr>
                                        <th>No.</th>
                                        <th>School</th>
                                        <th>Category
                                        <th>Name</th>
                                        <th>Program Courses</th>
                                        <th>Order</th>
                                        <th>Short Description</th>
                                        <th>image</th>
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
                    'onclick': "add('{{ route('admin.programs.create') }}', 'modal-lg')"
                }
            };

            var table = $('#programs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.programs.index') }}",

                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'SchoolName',
                        name: 'SchoolName',
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'CategoryName',
                        name: 'CategoryName',
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'program_course_name',
                        name: 'program_course_name',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'order',
                        name: 'order'
                    },
                    {
                        data: 'short_description',
                        name: 'short_description'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false,
                        searchable: false
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

                order: [
                    [3, 'asc']
                ], // Order by name column
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
