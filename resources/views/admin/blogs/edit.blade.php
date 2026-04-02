<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Blog</h4>
        <small class="text-muted">Modify blog details and SEO settings</small>
    </div>

    <form id="blog-form-edit" action="{{ route('admin-blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf
        @method('POST') {{-- Using POST with AJAX and FormData --}}

        <!-- Title -->
        <div class="col-md-8">
            <label class="form-label fw-semibold">
                Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="blog_title_edit" class="form-control" value="{{ $blog->title }}" required>
        </div>

        <!-- Published Date -->
        <div class="col-md-4">
            <label class="form-label">Published Date</label>
            <input type="date" name="published_date" class="form-control" value="{{ $blog->published_date ? $blog->published_date->format('Y-m-d') : '' }}">
        </div>

        <!-- Short Description -->
        <div class="col-md-12">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" rows="2" class="form-control">{{ $blog->short_description }}</textarea>
        </div>

        <!-- Content -->
        <div class="col-md-12">
            <label class="form-label">Content</label>
            <textarea name="content" id="blog_content_edit" rows="5" class="form-control">{{ $blog->content }}</textarea>
        </div>

        <!-- Image -->
        <div class="col-md-12">
            <label class="form-label">Blog Image</label>
            @if($blog->image)
            <div class="mb-2">
                <img src="{{ asset($blog->image) }}" alt="Blog Image" class="img-thumbnail" style="height: 100px;">
            </div>
            @endif
            <input type="file" name="image" class="form-control">
            <small class="text-muted">Leave empty to keep existing image</small>
        </div>

        <!-- Status -->
        <div class="col-md-12">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="status" value="1" {{ $blog->status ? 'checked' : '' }}>
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
                            <input type="text" name="meta_title" id="meta_title_edit" maxlength="60" class="form-control" value="{{ $blog->meta_title }}">
                            <small class="text-muted">
                                <span id="titleCountEdit">{{ strlen($blog->meta_title) }}</span>/60 characters
                            </small>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description_edit" maxlength="160" rows="3" class="form-control">{{ $blog->meta_description }}</textarea>
                            <small class="text-muted">
                                <span id="descCountEdit">{{ strlen($blog->meta_description) }}</span>/160 characters
                            </small>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4">
                Update Blog
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let contentEditorEdit;

    $(document).ready(function() {

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#blog_content_edit'))
            .then(editor => {
                contentEditorEdit = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // Meta title counter
        $('#meta_title_edit').on('input', function() {
            $('#titleCountEdit').text($(this).val().length);
        });

        // Meta description counter
        $('#meta_description_edit').on('input', function() {
            $('#descCountEdit').text($(this).val().length);
        });

        // Form Submit
        $("#blog-form-edit").on('submit', function(e) {
            e.preventDefault();

            let submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true);

            // ✅ Update textarea BEFORE FormData
            if (contentEditorEdit) {
                $('#blog_content_edit').val(contentEditorEdit.getData());
            }

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST', // Always use POST for FormData with method override if needed
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