<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add School / Department</h4>
        <small class="text-muted">Fill in details and optional features/highlights</small>
    </div>

    <form id="school-form" action="{{ route('schools.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Full Description</label>
            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="6"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image <span class="text-danger">*</span></label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="file" name="icon" class="form-control">
        </div>

        <!-- Features & Highlights JSON -->
        <div class="mb-3">
            <label class="form-label">Features (comma separated)</label>
            <input type="text" name="features[]" class="form-control" placeholder="Feature1, Feature2">
        </div>

        <div class="mb-3">
            <label class="form-label">Highlights (comma separated)</label>
            <input type="text" name="highlights[]" class="form-control" placeholder="Highlight1, Highlight2">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    let descriptionEditor;
    let contentEditor;
    let shortDescriptionEditor;

    $(document).ready(function() {

        // Short Description Editor
        ClassicEditor
            .create(document.querySelector('#short_description'))
            .then(editor => {
                shortDescriptionEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // Full Description Editor
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                descriptionEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // Content Editor
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                contentEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // AJAX Form Submit
        $("#school-form").submit(function(e) {
            e.preventDefault();

            // Set all editor data before submit
            $('textarea[name="short_description"]').val(shortDescriptionEditor.getData());
            $('textarea[name="description"]').val(descriptionEditor.getData());
            $('textarea[name="content"]').val(contentEditor.getData());

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
                        $('#schools-table').DataTable().ajax.reload();
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