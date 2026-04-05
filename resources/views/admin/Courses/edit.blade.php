<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Course</h4>
        <small class="text-muted">Update course details carefully</small>
    </div>

    <form id="course-edit-form" action="{{ route('courses.update', $course->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <!-- @method('PUT') -->

        <!-- School -->
        <div class="mb-3">
            <label class="form-label">School <span class="text-danger">*</span></label>
            <select name="school_id" class="form-select" required>
                <option value="">Select School</option>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {{ $course->school_id == $school->id ? 'selected' : '' }}>
                        {{ $school->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Course Name -->
        <div class="mb-3">
            <label class="form-label">Course Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Eligibility</label>
            <input type="text" name="eligibility" class="form-control" value="{{ $course->eligibility }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" value="{{ $course->duration }}">
        </div>
        <!-- Short Description -->
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="edit_short_description" class="form-control" rows="4">{{ strip_tags($course->short_description) }}</textarea>
        </div>

        <!-- Meta Title -->
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{ $course->meta_title }}">
        </div>

        <!-- Meta Description -->
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" rows="2">{{ $course->meta_description }}</textarea>
        </div>
        @php
            $decodedNames = json_decode($course->program_course_name, true);

            // agar JSON hai → array ko string me convert karo
            if (is_array($decodedNames)) {
                $courseNames = $decodedNames;
                $courseNamesString = implode(', ', $decodedNames);
            } else {
                // agar already string hai
                $courseNames = explode(',', $course->program_course_name);
                $courseNamesString = $course->program_course_name;
            }
        @endphp

        <div class="mb-3">
            <label class="form-label">School Course Name</label>
            <input type="text" name="program_course_name[]" class="form-control"
                placeholder="e.g. Commerce, Engineering, Arts" value="{{ $courseNamesString }}">
        </div>

        {{-- Display as badges --}}
        @if (!empty($courseNames))
            @foreach ($courseNames as $name)
                <span class="badge bg-primary me-1">{{ trim($name) }}</span>
            @endforeach
        @endif
        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control">

            @if ($course->image)
                <div class="mt-2">
                    <img src="{{ asset($course->image) }}" width="80" class="rounded border">
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
