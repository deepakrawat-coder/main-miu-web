<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Course</h4>
        <small class="text-muted">Fill course details carefully</small>
    </div>

    <form id="course-form" action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
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
            <input name="eligibility" id="eligibility" class="form-control" rows="3"></input>
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

        <div class="mb-3">
            <label class="form-label">School Course Name</label>
            <input name="program_course_name[]" class="form-control" rows="2" />
        </div>
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

        // AJAX Submit
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
                    } else {
                        toastr.error(res.message);
                    }
                },
                error: function(err) {
                    toastr.error(err.responseJSON?.message || 'Something went wrong!');
                }
            });
        });

    });
</script>

<!-- <script>
    $(document).ready(function() {

        $("#course-form").submit(function(e) {
            e.preventDefault();

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
                    } else {
                        toastr.error(res.message);
                    }
                },
                error: function(err) {
                    toastr.error(err.responseJSON?.message || 'Something went wrong!');
                }
            });
        });

    });
</script> -->
