<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Post</h4>
        <small class="text-muted">Fill in post details and optional SEO settings</small>
    </div>

    <form id="post-form" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf

        <!-- Category -->
        <div class="col-md-6">
            <label class="form-label fw-semibold">
                Category <span class="text-danger">*</span>
            </label>
            <select name="category_id" class="form-select" required>
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Publish Date -->
        <div class="col-md-6">
            <label class="form-label">Publish Date</label>
            <input type="date" name="publish_date" class="form-control">
        </div>

        <!-- Title -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                badge <span class="text-danger">*</span>
            </label>
            <input type="text" name="badge_name" id="badge_name" class="form-control" required>
        </div>

        <!-- Short Description -->
        <div class="col-md-12">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" rows="2" class="form-control"></textarea>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
        </div>

        <!-- Image -->
        <div class="col-md-12">
            <label class="form-label">Post Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <!-- Toggles -->
        <div class="col-md-6">
            <div class="form-check form-switch mt-3">
                <input class="form-check-input" type="checkbox" name="is_featured" value="1">
                <label class="form-check-label">Featured Post</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-check form-switch mt-3">
                <input class="form-check-input" type="checkbox" name="is_new" value="1">
                <label class="form-check-label">Mark as New</label>
            </div>
        </div>

        <!-- SEO Card -->
        <div class="col-12 mt-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <h6 class="text-primary mb-3">
                        <i class="bi bi-search"></i> SEO Settings (Optional)
                    </h6>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" id="meta_title" maxlength="60" class="form-control">
                            <small class="text-muted">
                                <span id="titleCount">0</span>/60 characters
                            </small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control">
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
                Save
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    $(function() {
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                descriptionEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
        $('#meta_title').on('input', function() {
            $('#titleCount').text($(this).val().length);
        });

        $('#meta_description').on('input', function() {
            $('#descCount').text($(this).val().length);
        });

        $("#post-form").submit(function(e) {
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);

            var formData = new FormData(this);
            formData.append("_token", "{{ csrf_token() }}");
            $('textarea[name="description"]').val(descriptionEditor.getData())
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',

                success: function(response) {
                    $(':input[type="submit"]').prop('disabled', false);

                    if (response.status === 'success') {
                        toastr.success(response.message);
                        $(".modal").modal('hide');
                        $('#posts-table').DataTable().ajax.reload();
                    } else {
                        toastr.error(response.message);
                    }
                },

                error: function(xhr) {
                    $(':input[type="submit"]').prop('disabled', false);
                    toastr.error(xhr.responseJSON?.message || 'Something went wrong!');
                }
            });
        });

    });
</script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let descriptionEditor;

    $(document).ready(function () {

        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                descriptionEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });

        // Meta title counter
        $('#meta_title').on('input', function () {
            $('#titleCount').text($(this).val().length);
        });

        // Meta description counter
        $('#meta_description').on('input', function () {
            $('#descCount').text($(this).val().length);
        });

        // Form Submit
        $("#post-form").on('submit', function (e) {
            e.preventDefault();

            let submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true);

            // ✅ Update textarea BEFORE FormData
            if (descriptionEditor) {
                $('#description').val(descriptionEditor.getData());
            }

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',

                success: function (response) {
                    submitBtn.prop('disabled', false);

                    if (response.status === 'success') {
                        toastr.success(response.message);
                        $(".modal").modal('hide');
                        $('#post-form')[0].reset();
                        descriptionEditor.setData('');
                        $('#posts-table').DataTable().ajax.reload();
                    } else {
                        toastr.error(response.message);
                    }
                },

                error: function (xhr) {
                    submitBtn.prop('disabled', false);

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
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