<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit School / Department</h4>
        <small class="text-muted">Update details and optional features/highlights</small>
    </div>

    <form id="school-edit-form" action="{{ route('schools.update', $school->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $school->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input type="text" name="short_description" class="form-control" value="{{ $school->short_description }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Full Description</label>
            <textarea name="description" id="description-edit" class="form-control" rows="4">{{ $school->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if($school->image)
                <div class="mt-2">
                    <img src="{{ asset($school->image) }}"
                         alt="Current Image"
                         style="width:120px; border-radius:6px;">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="file" name="icon" class="form-control">
            @if($school->icon)
                <div class="mt-2">
                    <img src="{{ asset($school->icon) }}"
                         alt="Current Icon"
                         style="width:60px; border-radius:6px;">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Features (comma separated)</label>
            <input type="text" name="features[]" class="form-control"
                value="{{ $school->features ? implode(', ', json_decode($school->features)) : '' }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Highlights (comma separated)</label>
            <input type="text" name="highlights[]" class="form-control"
                value="{{ $school->highlights ? implode(', ', json_decode($school->highlights)) : '' }}">
        </div>

        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
let editEditor;

$(document).ready(function() {

    // Initialize CKEditor 5
    ClassicEditor
        .create(document.querySelector('#description-edit'))
        .then(editor => {
            editEditor = editor;
        })
        .catch(error => {
            console.error(error);
        });

    // AJAX Submit
    $("#school-edit-form").submit(function(e){
        e.preventDefault();

        // Get CKEditor data
        const descriptionData = editEditor.getData();
        $('textarea[name="description"]').val(descriptionData);

        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(res){
                if(res.status == 'success'){
                    toastr.success(res.message);
                    $(".modal").modal('hide');
                    $('#schools-table').DataTable().ajax.reload();
                } else {
                    toastr.error(res.message);
                }
            },
            error: function(err){
                toastr.error(err.responseJSON?.message || 'Something went wrong!');
            }
        });
    });

});
</script>
