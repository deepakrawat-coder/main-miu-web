<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Gallery</h4>
        <small class="text-muted">Fill in gallery details and upload images</small>
    </div>

    <form id="gallery-form" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf

        <!-- Title -->
        <div class="col-md-8">
            <label class="form-label fw-semibold">
                Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="gallery_title" class="form-control" required>
        </div>

        <!-- Event Date -->
        <div class="col-md-4">
            <label class="form-label fw-semibold">
                Event Date <span class="text-danger">*</span>
            </label>
            <input type="date" name="event_date" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Description <span class="text-danger">*</span>
            </label>
            <textarea name="description" id="gallery_description" rows="3" class="form-control" required></textarea>
        </div>

        <!-- Cover Image -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Cover Image <span class="text-danger">*</span>
            </label>
            <input type="file" name="cover_image" class="form-control" accept="image/*" required>
        </div>

        <!-- Multiple Images -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Gallery Images
            </label>
            <div id="gallery-images-container">
                <div class="input-group mb-2">
                    <input type="file" name="images[]" class="form-control" accept="image/*">
                    <button type="button" class="btn btn-primary add-image-row">
                        <i class="ri-add-line"></i> Add
                    </button>
                </div>
            </div>
            <small class="text-muted">You can add multiple images by clicking the add button.</small>
        </div>

        <!-- Status -->
        <div class="col-md-12">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="status" value="1" checked>
                <label class="form-check-label">Active Status</label>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4">
                Save Gallery
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>

<script>
    $(document).ready(function() {

        // Add dynamic image row
        $(document).on('click', '.add-image-row', function() {
            let row = `
                <div class="input-group mb-2">
                    <input type="file" name="images[]" class="form-control" accept="image/*">
                    <button type="button" class="btn btn-danger remove-image-row">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>`;
            $('#gallery-images-container').append(row);
        });

        // Remove dynamic image row
        $(document).on('click', '.remove-image-row', function() {
            $(this).closest('.input-group').remove();
        });

        // Form Submit
        $("#gallery-form").on('submit', function(e) {
            e.preventDefault();

            let submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true);

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
                        $('#gallery-table').DataTable().ajax.reload();
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