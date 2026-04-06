<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Programs</h4>
        <small class="text-muted">Fill course details carefully</small>
    </div>

    <form id="course-form" action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" id="school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Category - Will show after school selection -->
        <div class="mb-3" id="category_div" style="display: none;">
            <label class="form-label">Category <span class="text-danger">*</span></label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="">Select Category</option>
            </select>
        </div>

        <!-- Course Name -->
        <div class="mb-3">
            <label class="form-label">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" id="duration" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Eligibility</label>
            <textarea name="eligibility" id="eligibility" class="form-control" rows="3"></textarea>
        </div>

        <!-- Short Description -->
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="3"></textarea>
        </div>

        <!-- Meta Title -->
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
        </div>

        <!-- Meta Description -->
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" rows="2"></textarea>
        </div>

        <!-- School Course Name (can add multiple dynamically) -->
        

        <!-- Content -->
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="3"></textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let shortDescriptionEditor;
    let contentEditor;
    
    $(document).ready(function() {

        // Initialize CKEditor for Short Description
        ClassicEditor
            .create(document.querySelector('#short_description'))
            .then(editor => {
                shortDescriptionEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
            
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                contentEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // ========== SCHOOL CHANGE - LOAD CATEGORIES ==========
        $('#school_id').on('change', function() {
            var schoolId = $(this).val();
            var categoryDiv = $('#category_div');
            var categorySelect = $('#category_id');
            
            if (schoolId) {
                // Show loading state
                categoryDiv.show();
                categorySelect.html('<option value="">Loading...</option>');
                
                $.ajax({
                    url: "{{ route('admin.programs.getCategoriesBySchool') }}",
                    type: "GET",
                    data: { school_id: schoolId },
                    dataType: "json",
                    success: function(response) {
                        categorySelect.html('<option value="">Select Category</option>');
                        
                        if (response.status == 'success' && response.categories.length > 0) {
                            $.each(response.categories, function(key, category) {
                                categorySelect.append('<option value="' + category.id + '">' + category.name + '</option>');
                            });
                        } else {
                            categorySelect.html('<option value="">No categories found for this school</option>');
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr);
                        categorySelect.html('<option value="">Error loading categories</option>');
                    }
                });
            } else {
                categoryDiv.hide();
                categorySelect.html('<option value="">Select Category</option>');
            }
        });

        // ========== ADD MORE COURSE NAME FIELDS ==========
    

        // ========== AJAX SUBMIT ==========
        $("#course-form").submit(function(e) {
            e.preventDefault();

            // CKEditor data set before submit
            if (shortDescriptionEditor) {
                $('textarea[name="short_description"]').val(shortDescriptionEditor.getData());
            }
            if (contentEditor) {
                $('textarea[name="content"]').val(contentEditor.getData());
            }

            let formData = new FormData(this);

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
                        
                        // Reset form
                        $('#course-form')[0].reset();
                        $('#category_div').hide();
                        $('#course_names_div').html('<div class="input-group mb-2">' +
                            '<input type="text" name="program_course_name[]" class="form-control" placeholder="Enter course name">' +
                            '<button type="button" class="btn btn-success add-course-btn">+</button>' +
                            '</div>');
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
</script>