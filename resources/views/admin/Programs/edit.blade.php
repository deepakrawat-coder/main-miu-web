<div class="modal-header">
    <h5 class="modal-title">Edit Program</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
    <form id="edit-program-form"
        action="{{ route('programs.update', $program->id) }}"
        method="POST"
        enctype="multipart/form-data">

        @csrf


        {{-- Courses --}}
        <div class="mb-3">
            <label class="form-label">Courses *</label>
            <select name="course_id[]" id="edit_course_ids" class="form-select" multiple required>
                @foreach($courses as $course)
                <option value="{{ $course->id }}"
                    {{ $program->courses->contains($course->id) ? 'selected' : '' }}>
                    {{ $course->name }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Name --}}
        <div class="mb-3">
            <label class="form-label">Program Name *</label>
            <input type="text"
                name="name"
                value="{{ $program->name }}"
                class="form-control"
                required>
        </div>

        {{-- Short Description --}}
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description"
                id="edit_short_description"
                class="form-control">{{ $program->short_description }}</textarea>
        </div>

        {{-- Current Image --}}
        @if($program->image)
        <div class="mb-3">
            <label class="form-label">Current Image</label>
            <div>
                <img src="{{ asset($program->image) }}"
                    style="max-height:100px;">
            </div>
        </div>
        @endif

        {{-- New Image --}}
        <div class="mb-3">
            <label class="form-label">New Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Meta Title --}}
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text"
                name="meta_title"
                value="{{ $program->meta_title }}"
                class="form-control">
        </div>

        {{-- Meta Description --}}
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description"
                class="form-control">{{ $program->meta_description }}</textarea>
        </div>




        <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

{{-- CKEditor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {

        // Select2
        $('#edit_course_ids').select2({
            dropdownParent: $('#edit-program-form'),
            width: '100%'
        });

        // CKEditor
        let editor;
        ClassicEditor
            .create(document.querySelector('#edit_short_description'))
            .then(e => editor = e);

        // AJAX Submit
        $('#edit-program-form').submit(function(e) {
            e.preventDefault();

            if (editor) {
                $('textarea[name="short_description"]').val(editor.getData());
            }

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status === 'success') {
                        toastr.success(res.message);
                        $(".modal").modal('hide');

                        if ($.fn.DataTable && $.fn.DataTable.isDataTable('#programs-table')) {
                            $('#programs-table').DataTable().ajax.reload();
                        }
                    } else {
                        toastr.error(res.message);
                    }
                },
                error: function(xhr) {
                    toastr.error('Update failed');
                }
            });
        });

    });
</script>