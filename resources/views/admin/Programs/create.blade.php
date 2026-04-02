<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->

<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Program</h4>
        <small class="text-muted">Fill program details carefully</small>
    </div>

    <form id="program-form" action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Courses <span class="text-danger">*</span></label>
            <select name="course_id[]" id="course_ids" class="form-select" multiple required>
                @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Program Name --}}
        <div class="mb-3">
            <label class="form-label">Program Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        {{-- Short Description --}}
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="4"></textarea>
        </div>

        {{-- Image --}}
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Meta Title --}}
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
        </div>

        {{-- Meta Description --}}
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <textarea name="meta_description" class="form-control" rows="3"></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let editorInstance = null;

    // Single function to initialize both Select2 and CKEditor
    function initProgramForm() {
        // Initialize Select2
        if ($.fn.select2 && $('#course_ids').length) {
            // Destroy existing Select2 instance if it exists
            if ($('#course_ids').hasClass("select2-hidden-accessible")) {
                $('#course_ids').select2('destroy');
            }

            // Initialize Select2 with proper dropdown parent
            $('#course_ids').select2({
                dropdownParent: $('#course_ids').closest('.modal'),
                width: '100%',
                placeholder: "Select Courses"
            });
        } else {
            console.log('Select2 not loaded or element not found');
        }

        // Initialize CKEditor
        if (document.querySelector('#short_description')) {
            if (editorInstance) {
                editorInstance.destroy();
            }

            ClassicEditor
                .create(document.querySelector('#short_description'))
                .then(editor => {
                    editorInstance = editor;
                })
                .catch(error => console.error(error));
        }
    }

    // Initialize when modal is shown
    $(document).on('shown.bs.modal', function() {
        initProgramForm();
    });

    // Fallback initialization if modal is already open
    setTimeout(function() {
        if ($('.modal.show').length) {
            initProgramForm();
        }
    }, 300);

    // AJAX Submit
    $(document).on("submit", "#program-form", function(e) {
        e.preventDefault();

        if (editorInstance) {
            $('textarea[name="short_description"]').val(editorInstance.getData());
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
                if (xhr.status === 422) {
                    // Validation errors
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]);
                    });
                } else {
                    toastr.error('Validation error!');
                }
                console.error(xhr);
            }
        });
    });

    // Clean up when modal is hidden
    $(document).on('hidden.bs.modal', function() {
        if (editorInstance) {
            editorInstance.destroy();
            editorInstance = null;
        }

        if ($.fn.select2 && $('#course_ids').hasClass("select2-hidden-accessible")) {
            $('#course_ids').select2('destroy');
        }
    });
</script>