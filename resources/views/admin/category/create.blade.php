<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Category</h4>
        <small class="text-muted">Fill in details and optional features/highlights</small>
    </div>

    <form id="school-form" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Schools <span class="text-danger">*</span></label>
            <select name="school_id[]" id="school_id" class="form-select" multiple required>
                @foreach ($schools as $school)
                <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        {{-- <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image <span class="text-danger">*</span></label>
            <input type="file" name="image" class="form-control" required>
        </div> --}}

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    let descriptionEditor;
    let contentEditor;
    let shortDescriptionEditor;

    $(document).ready(function() {

        // Short Description Editor
        // ClassicEditor
        //     .create(document.querySelector('#short_description'))
        //     .then(editor => {
        //         shortDescriptionEditor = editor;
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
        // // Content Editor
        // ClassicEditor
        //     .create(document.querySelector('#content'))
        //     .then(editor => {
        //         contentEditor = editor;
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
        if ($.fn.select2 && $('#school_id').length) {
            // Destroy existing Select2 instance if it exists
            if ($('#school_id').hasClass("select2-hidden-accessible")) {
                $('#school_id').select2('destroy');
            }

            // Initialize Select2 with proper dropdown parent
            $('#school_id').select2({
                dropdownParent: $('#school_id').closest('.modal'),
                width: '100%',
                placeholder: "Select Courses"
            });
        } else {
            console.log('Select2 not loaded or element not found');
        }
        // AJAX Form Submit
        $("#school-form").submit(function(e) {
            e.preventDefault();

            // Set all editor data before submit
            // $('textarea[name="short_description"]').val(shortDescriptionEditor.getData());
            // $('textarea[name="content"]').val(contentEditor.getData());

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
                        $('#category-table').DataTable().ajax.reload();
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
    $(document).on('hidden.bs.modal', function() {
        if (editorInstance) {
            editorInstance.destroy();
            editorInstance = null;
        }

        if ($.fn.select2 && $('#school_id').hasClass("select2-hidden-accessible")) {
            $('#school_id').select2('destroy');
        }
    });
</script>
