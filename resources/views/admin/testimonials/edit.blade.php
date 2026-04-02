<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Testimonial</h4>
    </div>

    <form id="testimonial-form" action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <!-- Name -->
            <div class="col-md-6 mb-3">
                <label>Name *</label>
                <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}" required>
            </div>

            <!-- Subtitle -->
            <div class="col-md-6 mb-3">
                <label>Subtitle *</label>
                <input type="text" name="subtitle" class="form-control" value="{{ $testimonial->subtitle }}" required>
            </div>
        </div>

        <div class="row">
            <!-- Rating -->
            <div class="col-md-6 mb-3">
                <label>Rating (1-5)</label>
                <input type="number" name="rating" class="form-control" min="1" max="5" value="{{ $testimonial->rating }}">
            </div>

            <!-- Slug -->
            <div class="col-md-6 mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ $testimonial->slug }}">
            </div>
        </div>

        <div class="row">
            <!-- Company -->
            <div class="col-md-6 mb-3">
                <label>Company</label>
                <input type="text" name="company" class="form-control" value="{{ $testimonial->company }}">
            </div>

            <!-- Package -->
            <div class="col-md-6 mb-3">
                <label>Package</label>
                <input type="text" name="package" class="form-control" value="{{ $testimonial->package }}">
            </div>
        </div>

        <div class="row">
            <!-- Passing Year -->
            <div class="col-md-6 mb-3">
                <label>Passing Year</label>
                <input type="text" name="passing_year" class="form-control" value="{{ $testimonial->passing_year }}">
            </div>

            <!-- Page Type -->
            <div class="col-md-6 mb-3">
                <label>Page Type</label>
                <select name="page_type" class="form-select" onchange="toggleSchoolField(this.value)">
                    <option value="home" {{ $testimonial->page_type == 'home' ? 'selected' : '' }}>Home</option>
                    <option value="school" {{ $testimonial->page_type == 'school' ? 'selected' : '' }}>School</option>
                    <option value="school-details" {{ $testimonial->page_type == 'school-details' ? 'selected' : '' }}>School Details</option>
                    <option value="specialization-details" {{ $testimonial->page_type == 'specialization-details' ? 'selected' : '' }}>Specialization Details</option>
                </select>
            </div>
        </div>

        <div class="row" id="school-field" style="{{ $testimonial->page_type == 'school-details' ? '' : 'display: none;' }}">
            <!-- School -->
            <div class="col-md-12 mb-3">
                <label>School</label>
                <select name="school_id" class="form-select">
                    <option value="">Select School</option>
                    @foreach ($schools as $school)
                    <option value="{{ $school->id }}" {{ $testimonial->school_id == $school->id ? 'selected' : '' }}>{{ $school->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row" id="specialization-field" style="{{ $testimonial->page_type == 'specialization-details' ? '' : 'display: none;' }}">
            <!-- Specialization -->
            <div class="col-md-12 mb-3">
                <label>Specialization</label>
                <select name="specialization_id" class="form-select">
                    <option value="">Select Specialization</option>
                    @foreach ($specializations as $specialization)
                    <option value="{{ $specialization->id }}" {{ $testimonial->specialization_id == $specialization->id ? 'selected' : '' }}>{{ $specialization->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Message -->
        <div class="mb-3">
            <label>Message *</label>
            <textarea name="message" id="testimonial_message" class="form-control" rows="4" required>{{ $testimonial->message }}</textarea>
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($testimonial->image)
            <div class="mt-2">
                <img src="/{{ $testimonial->image }}" width="80" class="rounded border">
            </div>
            @endif
        </div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<script>
    function toggleSchoolField(value) {
        document.getElementById('school-field').style.display = (value === 'school-details') ? 'block' : 'none';
        document.getElementById('specialization-field').style.display = (value === 'specialization-details') ? 'block' : 'none';
    }

    $(document).ready(function() {
        // Slug generation
        $('input[name="name"]').on('keyup', function() {
            let slug = $(this).val().toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');
            $('input[name="slug"]').val(slug);
        });

        // Form submission
        $("#testimonial-form").submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {
                    toastr.success(res.message);
                    $(".modal").modal('hide');
                    if ($('#testimonials-table').length) {
                        $('#testimonials-table').DataTable().ajax.reload();
                    }
                },
                error: function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong!");
                    }
                }
            });
        });
    });
</script>