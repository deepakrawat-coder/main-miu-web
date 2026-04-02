<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Gallery</h4>
        <small class="text-muted">Modify gallery details and manage images</small>
    </div>

    <form id="gallery-form-edit" action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
        @csrf

        <!-- Title -->
        <div class="col-md-8">
            <label class="form-label fw-semibold">
                Title <span class="text-danger">*</span>
            </label>
            <input type="text" name="title" id="gallery_title_edit" class="form-control" value="{{ $gallery->title }}" required>
        </div>

        <!-- Event Date -->
        <div class="col-md-4">
            <label class="form-label fw-semibold">
                Event Date <span class="text-danger">*</span>
            </label>
            <input type="date" name="event_date" class="form-control" value="{{ $gallery->event_date }}" required>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Description <span class="text-danger">*</span>
            </label>
            <textarea name="description" id="gallery_description_edit" rows="3" class="form-control" required>{{ $gallery->description }}</textarea>
        </div>

        <!-- Cover Image -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Cover Image
            </label>
            @if($gallery->cover_image)
            <div class="mb-2">
                <img src="{{ asset($gallery->cover_image) }}" alt="Cover" class="img-thumbnail" style="height: 100px;">
            </div>
            @endif
            <input type="file" name="cover_image" class="form-control" accept="image/*">
            <small class="text-muted">Leave empty to keep existing cover image.</small>
        </div>

        <!-- Existing Images -->
        @if($gallery->images && count($gallery->images) > 0)
        <div class="col-md-12">
            <label class="form-label fw-semibold">Existing Gallery Images</label>
            <div class="row g-2 mb-2 p-2 bg-light rounded shadow-sm">
                @foreach($gallery->images as $index => $img)
                <div class="col-md-2 col-sm-3 position-relative existing-image-wrapper">
                    <img src="{{ asset($img) }}" alt="image" class="img-thumbnail" style="height: 100px; width: 100%; object-fit: cover;">
                    <input type="hidden" name="existing_images[]" value="{{ $img }}">
                    <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 remove-existing-image" title="Delete Image">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                @endforeach
            </div>
            <small class="text-muted">Click the × button to remove an image from the gallery.</small>
        </div>
        @endif

        <!-- Multiple Images -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Add More Gallery Images
            </label>
            <div id="gallery-images-container-edit">
                <div class="input-group mb-2">
                    <input type="file" name="images[]" class="form-control" accept="image/*">
                    <button type="button" class="btn btn-primary add-image-row-edit">
                        <i class="ri-add-line"></i> Add
                    </button>
                </div>
            </div>
            <small class="text-muted">Select new images to add to the gallery.</small>
        </div>

        <!-- Status -->
        <div class="col-md-12">
            <div class="form-check form-switch mt-2">
                <input class="form-check-input" type="checkbox" name="status" value="1" {{ $gallery->status ? 'checked' : '' }}>
                <label class="form-check-label">Active Status</label>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4">
                Update Gallery
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
        $(document).on('click', '.add-image-row-edit', function() {
            let row = `
                <div class="input-group mb-2">
                    <input type="file" name="images[]" class="form-control" accept="image/*">
                    <button type="button" class="btn btn-danger remove-image-row-edit">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>`;
            $('#gallery-images-container-edit').append(row);
        });

        // Remove dynamic image row
        $(document).on('click', '.remove-image-row-edit', function() {
            $(this).closest('.input-group').remove();
        });

        // Remove existing image
        $(document).on('click', '.remove-existing-image', function() {
            // if (confirm('Are you sure you want to remove this image? It will be deleted when you update.')) {
            //     $(this).closest('.existing-image-wrapper').remove();
            // }
            $(this).closest('.existing-image-wrapper').remove();
        });

        // Form Submit
        $("#gallery-form-edit").on('submit', function(e) {
            e.preventDefault();

            let submitBtn = $(this).find('button[type="submit"]');
            submitBtn.prop('disabled', true);

            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
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