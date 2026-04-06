<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Course</h4>
        <small class="text-muted">Update course details carefully</small>
    </div>

    <form id="course-edit-form" action="{{ route('admin.programs.update', $programs->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <!-- @method('PUT') -->

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {{ $programs->school_id == $school->id ? 'selected' : '' }}>
                        {{ $school->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Course Name -->
        <div class="mb-3">
            <label class="form-label">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $programs->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Eligibility</label>
            <input type="text" name="eligibility" class="form-control" value="{{ $programs->eligibility }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" value="{{ $programs->duration }}">
        </div>
        <!-- Short Description -->
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="edit_short_description" class="form-control" rows="4">{{ strip_tags($programs->short_description) }}</textarea>
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
        @php
            $decodedNames = json_decode($programs->program_course_name, true);

            if (is_array($decodedNames)) {
                // agar array me ek hi string hai
                if (count($decodedNames) == 1) {
                    $programsNames = explode(',', $decodedNames[0]);
                } else {
                    $programsNames = $decodedNames;
                }
            } else {
                $programsNames = explode(',', $programs->program_course_name);
            }

            // clean data
            $programsNames = array_filter(array_map('trim', $programsNames));

            $programsNamesString = implode(', ', $programsNames);
        @endphp

        {{-- Input --}}
        <div class="mb-3">
            <label class="form-label">School Course Name</label>
            <input type="text" name="program_course_name[]" class="form-control" value="{{ $programsNamesString }}">
        </div>

        {{-- Badges --}}
        @foreach ($programsNames as $name)
            <span class="badge bg-primary me-1 mb-1">{{ $name }}</span>
        @endforeach

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="edit_content" class="form-control" rows="4">{{ strip_tags($programs->content) }}</textarea>
        </div>
        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control">

            @if ($programs->image)
                <div class="mt-2">
                    <img src="{{ asset($programs->image) }}" width="80" class="rounded border">
                </div>
            @endif
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
    let contentEditor;
    $(document).on('shown.bs.modal', '.modal', function() {

        if (document.querySelector('#edit_short_description') && !editShortEditor) {

            ClassicEditor
                .create(document.querySelector('#edit_short_description'))
                .then(editor => {
                    editShortEditor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        }
        if (document.querySelector('#edit_content') && !contentEditor) {

            ClassicEditor
                .create(document.querySelector('#edit_content'))
                .then(editor => {
                    contentEditor = editor;
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });

    $(document).on('hidden.bs.modal', '.modal', function() {
        if (editShortEditor) {
            editShortEditor.destroy();
            editShortEditor = null;
        }
    });

    // AJAX Update
    $(document).on('submit', '#course-edit-form', function(e) {
        e.preventDefault();

        if (editShortEditor) {
            $('#edit_short_description').val(editShortEditor.getData());
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
                if (res.status === 'success') {
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
</script>

<!--
<script>
    $(document).ready(function() {

        $("#course-edit-form").submit(function(e) {
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
                    if (res.status === 'success') {
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
