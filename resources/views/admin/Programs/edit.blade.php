<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Course</h4>
        <small class="text-muted">Update course details carefully</small>
    </div>

    <form id="course-edit-form" action="{{ route('admin.programs.update', $programs->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" id="edit_school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {{ $programs->school_id == $school->id ? 'selected' : '' }}>
                        {{ $school->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Category - Will show after school selection -->
        <div class="mb-3" id="edit_category_div"
            style="{{ $programs->category_id ? 'display: block;' : 'display: none;' }}">
            <label class="form-label">Category <span class="text-danger">*</span></label>
            <select name="category_id" id="edit_category_id" class="form-select">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $programs->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Course Name -->
        <div class="mb-3">
            <label class="form-label">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $programs->name }}" required>
        </div>

        <!-- Duration -->
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" value="{{ $programs->duration }}">
        </div>

        <!-- Eligibility -->
        <div class="mb-3">
            <label class="form-label">Eligibility</label>
            <textarea name="eligibility" id="edit_eligibility" class="form-control" rows="3">{{ $programs->eligibility }}</textarea>
        </div>

        <!-- Short Description -->
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="edit_short_description" class="form-control" rows="3">{{ strip_tags($programs->short_description) }}</textarea>
        </div>

        <!-- Meta Title -->
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $programs->meta_title }}">
        </div>

        <!-- Meta Description -->
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" rows="2">{{ $programs->meta_description }}</textarea>
        </div>

        <!-- Content -->
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="edit_content" class="form-control" rows="3">{{ strip_tags($programs->content) }}</textarea>
        </div>

        <!-- School Course Name -->
        <div class="mb-3">
            <label class="form-label">School Course Name</label>
            <input type="text" name="program_course_name[]" class="form-control"
                value="{{ $programs->program_course_name ? implode(', ', json_decode($programs->program_course_name, true) ?? []) : '' }}">
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control">
            @if ($programs->image)
                <div class="mt-2">
                    <img src="{{ asset($programs->image) }}" width="80" class="rounded border">
                    <small class="text-muted d-block">Leave empty to keep existing image</small>
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">School Course Name</label>
            <input type="number" name="order" class="form-control" value="{{ $programs->order }}"
                placeholder="Enter order number (lower = higher priority)">
        </div>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let editShortEditor;
    let editContentEditor;

    $(document).ready(function() {

        // ========== SCHOOL CHANGE - LOAD CATEGORIES ==========
        $('#edit_school_id').on('change', function() {
            var schoolId = $(this).val();
            var categoryDiv = $('#edit_category_div');
            var categorySelect = $('#edit_category_id');

            if (schoolId) {
                categoryDiv.show();
                categorySelect.html('<option value="">Loading...</option>');

                $.ajax({
                    url: "{{ route('admin.programs.getCategoriesBySchool') }}",
                    type: "GET",
                    data: {
                        school_id: schoolId
                    },
                    dataType: "json",
                    success: function(response) {
                        categorySelect.html('<option value="">Select Category</option>');

                        if (response.status == 'success' && response.categories.length >
                            0) {
                            $.each(response.categories, function(key, category) {
                                var selected = (category.id ==
                                        {{ $programs->category_id ?? 0 }}) ?
                                    'selected' : '';
                                categorySelect.append('<option value="' + category
                                    .id + '" ' + selected + '>' + category
                                    .name + '</option>');
                            });
                        } else {
                            categorySelect.html(
                                '<option value="">No categories found for this school</option>'
                                );
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr);
                        categorySelect.html(
                            '<option value="">Error loading categories</option>');
                    }
                });
            } else {
                categoryDiv.hide();
                categorySelect.html('<option value="">Select Category</option>');
            }
        });

        // ========== CKEDITOR INITIALIZATION ==========
        if (document.querySelector('#edit_short_description')) {
            ClassicEditor
                .create(document.querySelector('#edit_short_description'))
                .then(editor => {
                    editShortEditor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        }

        if (document.querySelector('#edit_content')) {
            ClassicEditor
                .create(document.querySelector('#edit_content'))
                .then(editor => {
                    editContentEditor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // ========== AJAX UPDATE SUBMIT ==========
        $("#course-edit-form").submit(function(e) {
            e.preventDefault();

            // CKEditor data set before submit
            if (editShortEditor) {
                $('textarea[name="short_description"]').val(editShortEditor.getData());
            }
            if (editContentEditor) {
                $('textarea[name="content"]').val(editContentEditor.getData());
            }

            let formData = new FormData(this);

            // Add _method for PUT
            // formData.append('_method', 'PUT');

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(res) {
                    if (res.status == 'success') {
                        toastr.success(res.message);
                        $(".modal").modal('hide');
                        $('#courses-table').DataTable().ajax.reload();
                    } else {
                        toastr.error(res.message);
                    }
                },
                error: function(err) {
                    let message = err.responseJSON?.message || 'Something went wrong!';
                    if (err.responseJSON?.errors) {
                        $.each(err.responseJSON.errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error(message);
                    }
                }
            });
        });

    });

    // Cleanup on modal close
    $(document).on('hidden.bs.modal', '.modal', function() {
        if (editShortEditor) {
            editShortEditor.destroy();
            editShortEditor = null;
        }
        if (editContentEditor) {
            editContentEditor.destroy();
            editContentEditor = null;
        }
    });
</script>
