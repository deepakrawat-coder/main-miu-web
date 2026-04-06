<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit School / Department</h4>
        <small class="text-muted">Update details and optional features/highlights</small>
    </div>

    <form id="school-edit-form" action="{{ route('admin.category.update', $category->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Schools <span class="text-danger">*</span></label>
            <select name="school_id[]" id="school_id" class="form-select" multiple required>
                @foreach ($schools as $school)
                    <option value="{{ $school->id }}"
                        {{ in_array($school->id, $category->schools->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $school->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>



        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).on('shown.bs.modal', '.modal', function() {

        let modal = $(this);
        let select = modal.find('#school_id');

        if ($.fn.select2 && select.length) {

            if (select.hasClass("select2-hidden-accessible")) {
                select.select2('destroy');
            }

            select.select2({
                dropdownParent: modal,
                width: '100%',
                placeholder: "Select Schools"
            });
        }
    });


    // ✅ EDIT FORM SUBMIT
    $(document).on('submit', '#category-edit-form', function(e) {
        e.preventDefault();

        let form = $(this);
        let formData = new FormData(this);

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res) {
                if (res.status === 'success' || res.status === 1) {

                    toastr.success(res.message || 'Updated successfully');

                    $('.modal').modal('hide');
                    $('#category-table').DataTable().ajax.reload();

                } else {
                    toastr.error(res.message || 'Update failed');
                }

            },
            error: function(err) {
                toastr.error(err.responseJSON?.message || 'Something went wrong!');
            }
        });
    });


    // ✅ CLEANUP
    $(document).on('hidden.bs.modal', '.modal', function() {

        let select = $(this).find('#school_id');

        if ($.fn.select2 && select.hasClass("select2-hidden-accessible")) {
            select.select2('destroy');
        }

    });
</script>
