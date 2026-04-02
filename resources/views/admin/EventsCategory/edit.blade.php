<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Events Category</h4>
        <small class="text-muted">Update category and SEO details</small>
    </div>

    <form id="events-category-edit-form"
          action="{{ route('events.update', $category->id) }}"
          method="POST"
          class="row g-3">

        @csrf
        @method('POST')

        <!-- Category Name -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Category Name <span class="text-danger">*</span>
            </label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ $category->name }}"
                   required>
        </div>

        <!-- SEO Card -->
        <div class="col-12 mt-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <h6 class="text-primary mb-3">
                        <i class="bi bi-search"></i> SEO Settings (Optional)
                    </h6>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text"
                                   name="meta_title"
                                   id="edit_meta_title"
                                   class="form-control"
                                   maxlength="60"
                                   value="{{ $category->meta_title }}">
                            <small class="text-muted">
                                <span id="editTitleCount">
                                    {{ strlen($category->meta_title ?? '') }}
                                </span>/60 characters
                            </small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text"
                                   name="meta_keywords"
                                   class="form-control"
                                   value="{{ $category->meta_keywords }}">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description"
                                      id="edit_meta_description"
                                      rows="3"
                                      maxlength="160"
                                      class="form-control">{{ $category->meta_description }}</textarea>
                            <small class="text-muted">
                                <span id="editDescCount">
                                    {{ strlen($category->meta_description ?? '') }}
                                </span>/160 characters
                            </small>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4">
                Update
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>
<script>
$(function () {

    // Character Counter
    $('#edit_meta_title').on('input', function() {
        $('#editTitleCount').text($(this).val().length);
    });

    $('#edit_meta_description').on('input', function() {
        $('#editDescCount').text($(this).val().length);
    });

    $("#events-category-edit-form").submit(function(e) {
        e.preventDefault();
        $(':input[type="submit"]').prop('disabled', true);

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',

            success: function(response) {
                $(':input[type="submit"]').prop('disabled', false);

                if (response.status === 'success') {
                    toastr.success(response.message);
                    $(".modal").modal('hide');
                    $('#events-table').DataTable().ajax.reload();
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
</script>
