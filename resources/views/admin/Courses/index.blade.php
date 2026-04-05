@extends('layouts.main')
@section('content')
    <main class="app-wrapper">
        <div class="app-container">

            <!-- Page title -->
            <div class="hstack flex-wrap gap-3 mb-5">
                <div class="flex-grow-1">
                    <h4 class="mb-1 fw-semibold">Courses</h4>
                    <nav>
                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">Academic</li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Table -->
            <div class="row g-4">
                <div class="col-12">
                    <div class="card mb-0 h-100">
                        <div class="card-body ">
                            <div class="table-responsive">
                                <table id="courses-table" class="table table-hover align-middle  w-100">
                                    <thead class="bg-light bg-opacity-30">
                                        <tr>
                                            <th>No.</th>
                                            <th>School</th>
                                            <th>Name</th>
                                            <th>School Course Name</th>
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

        </div>
    </main>
@endsection
@section('scripts')
    <script>
        $(function() {

            const addButton = {
                text: 'Add Course',
                className: 'add-new btn btn-primary mb-3 mb-md-0',
                attr: {
                    'onclick': "add('{{ route('courses.create') }}', 'modal-lg')"
                }
            };

            var table = $('#courses-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('courses.index') }}",
                responsive: true,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'school.name',
                        name: 'school.name'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'program_course_name',
                        name: 'program_course_name',
                        render: function(data) {
                            if (!data) return '-';
                            // Agar data comma seperated string hai like "Commerce, Engineering, Arts"
                            var coursesName = data.split(',');
                            var badges = '';
                            for (var i = 0; i < coursesName.length; i++) {
                                badges += '<span class="badge bg-primary me-1">' + coursesName[
                                    i] + '</span>';
                            }
                            return badges;
                        }
                    },
                    {
                        data: 'short_description',
                        name: 'short_description'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false,
                        searchable: false,
                        render: function(data) {
                            if (!data) return '-';
                            return `<img src="${data}" width="50" height="50" class="rounded">`;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full) {
                            var checked = data == 1 ? 'checked' : '';
                            var label = data == 1 ? 'Active' : 'Inactive';

                            return `<div class="form-check form-switch form-switch-success">
                        <input class="form-check-input" type="checkbox" ${checked}
                            onclick="updateActiveStatus('courses/status/${full.id}','schools-table')">
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
                        <button class="btn btn-sm btn-light-primary" onclick="edit('/courses/edit/${full.id}','modal-lg')">
                            <i class="ri-pencil-line"></i>
                        </button>
                        <button class="btn btn-sm btn-light-danger" onclick="destroy('/courses/delete/${full.id}','courses-table')">
                            <i class="ri-delete-bin-line"></i>
                        </button>
                    </div>`;
                        }
                    }
                ],
                scrollX: true, // ✅ IMPORTANT (horizontal scroll)

                autoWidth: false,
                order: [
                    [0, 'desc']
                ],
                responsive: true,
                pageLength: 10,
                dom: '<"d-flex justify-content-between mb-2"<"dataTables_filter"f><"add_button"B>>rt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                buttons: [addButton],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Courses..."
                }
            });

        });
    </script>
@endsection
