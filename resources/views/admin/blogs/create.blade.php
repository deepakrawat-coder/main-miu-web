<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Blog</h4>
        <small class="text-muted">Fill in blog details and optional SEO settings</small>
    </div>

    <form id="blog-form" action="{{ route('admin-blogs.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf

        <!-- Title -->
        <div class="col-md-8">
            <label class="form-label fw-semibold">
                Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="blog_title" class="form-control" required>
        </div>

        <!-- Published Date -->
        <div class="col-md-4">
            <label class="form-label">Published Date</label>
            <input type="date" name="published_date" class="form-control">
        </div>

        <!-- Short Description -->
        <div class="col-md-12">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" rows="2" class="form-control"></textarea>
        </div>

        <!-- Content -->
        <div class="col-md-12">
            <label class="form-label">Content</label>
            <textarea name="content" id="blog_content" rows="5" class="form-control"></textarea>
        </div>

        <!-- Image -->
        <div class="col-md-12">
            <label class="form-label">Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <!-- Status -->
        <div class="col-md-12">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="status" value="1" checked>
                <label class="form-check-label">Published Status</label>
            </div>
        </div>

        <!-- SEO Card -->
        <div class="col-12 mt-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body bg-light bg-opacity-50">

                    <h6 class="text-primary mb-3">
                        <i class="bi bi-search"></i> SEO Settings (Optional)
                    </h6>

                    <div class="row g-3">

                        <div class="col-md-12">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" maxlength="60" class="form-control">
                            <small class="text-muted">
                                <span id="titleCount">0</span>/60 characters
                            </small>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" maxlength="160" rows="3" class="form-control"></textarea>
                            <small class="text-muted">
                                <span id="descCount">0</span>/160 characters
                            </small>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4">
                Save Blog
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let contentEditor;

    $(document).ready(function() {

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#blog_content'))
            .then(editor => {
                contentEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // Meta title counter
        $('#meta_title').on('input', function() {
            $('#titleCount').text($(this).val().length);
        });

        // Meta description counter
        $('#meta_description').on('input', function() {
            $('#descCount').text($(this).val().length);
        });

        // Form Submit
        $("#blog-form").on('submit', function(e) {
            e.preventDefault();

            let submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true);

            // ✅ Update textarea BEFORE FormData
            if (contentEditor) {
                $('#blog_content').val(contentEditor.getData());
            }

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',

                success: function(response) {
                    submitBtn.prop('disabled', false);

                    if (response.status === 'success') {
                        toastr.success(response.message);
                        $(".modal").modal('hide');
                        $('#blogs-table').DataTable().ajax.reload();
                    } else {
                        toastr.error(response.message);
                    }
                },

                error: function(xhr) {
                    submitBtn.prop('disabled', false);

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error('Something went wrong!');
                    }
                }
            });

        });

    });
</script>