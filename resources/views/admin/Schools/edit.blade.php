<div class="modal-body">

    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit School / Department</h4>
        <small class="text-muted">Update details and optional features/highlights</small>
    </div>

    <form id="school-edit-form" action="{{ route('schools.update', $school->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $school->name }}" required>
        </div>

        <!-- Short Description -->
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description_edit" class="form-control" rows="3">
                {!! $school->short_description !!}
            </textarea>
        </div>

        <!-- Full Description -->
        <div class="mb-3">
            <label class="form-label">Full Description</label>
            <textarea name="description" id="description_edit" class="form-control" rows="4">
                {!! $school->description !!}
            </textarea>
        </div>

        <!-- Content -->
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" id="content_edit" class="form-control" rows="6">
                {!! $school->content !!}
            </textarea>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if($school->image)
            <div class="mt-2">
                <img src="{{ asset($school->image) }}" style="width:120px; border-radius:6px;">
            </div>
            @endif
        </div>

        <!-- Icon -->
        <div class="mb-3">
            <label class="form-label">Icon</label>
            <input type="file" name="icon" class="form-control">
            @if($school->icon)
            <div class="mt-2">
                <img src="{{ asset($school->icon) }}" style="width:60px; border-radius:6px;">
            </div>
            @endif
        </div>

        <!-- Features -->
        <div class="mb-3">
            <label class="form-label">Features (comma separated)</label>
            <input type="text" name="features[]" class="form-control"
                value="{{ $school->features ? implode(', ', json_decode($school->features)) : '' }}">
        </div>

        <!-- Highlights -->
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
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    let shortDescriptionEditEditor;
let descriptionEditEditor;
let contentEditEditor;

$(document).ready(function() {

    ClassicEditor.create(document.querySelector('#short_description_edit'))
        .then(editor => { shortDescriptionEditEditor = editor; })
        .catch(error => { console.error(error); });

    ClassicEditor.create(document.querySelector('#description_edit'))
        .then(editor => { descriptionEditEditor = editor; })
        .catch(error => { console.error(error); });

    ClassicEditor.create(document.querySelector('#content_edit'))
        .then(editor => { contentEditEditor = editor; })
        .catch(error => { console.error(error); });

    $("#school-edit-form").submit(function(e){
        e.preventDefault();

        // Set updated editor values
        $('textarea[name="short_description"]').val(shortDescriptionEditEditor.getData());
        $('textarea[name="description"]').val(descriptionEditEditor.getData());
        $('textarea[name="content"]').val(contentEditEditor.getData());

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
