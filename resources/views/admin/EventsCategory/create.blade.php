<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Events Category</h4>
        <small class="text-muted">Fill in category and optional SEO details</small>
    </div>

    <form id="events-category-form" action="{{ route('events.store') }}" method="POST" class="row g-3">
        @csrf

        <!-- Category Name -->
        <div class="col-md-12">
            <label class="form-label fw-semibold">
                Category Name <span class="text-danger">*</span>
            </label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Workshop, Seminar, Conference"
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
                            <input type="text" name="meta_title" id="meta_title" class="form-control" maxlength="60">
                            <small class="text-muted">
                                <span id="titleCount">0</span>/60 characters
                            </small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control"
                                placeholder="workshop, seminar">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" rows="3" maxlength="160"
                                class="form-control"></textarea>
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
            <button type="submit" id="saveBtn" class="btn btn-primary px-4">
                Save
            </button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
            </button>
        </div>

    </form>
</div>


<script>
    $(function() {

         $('#meta_title').on('input', function() {
        $('#titleCount').text($(this).val().length);
    });

    $('#meta_description').on('input', function() {
        $('#descCount').text($(this).val().length);
    });

    $("#events-category-form").submit(function(e) {
        e.preventDefault();
        $(':input[type="submit"]').prop('disabled', true);

        var formData = new FormData(this);
        formData.append("_token", "{{ csrf_token() }}");

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
