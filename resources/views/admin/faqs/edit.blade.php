<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit FAQ</h4>
    </div>

    <form id="faq-form" action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @csrf

        @include('admin.faqs.form')

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $("#faq-form").submit(function(e) {
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
                    if ($('#faqs-table').length) {
                        $('#faqs-table').DataTable().ajax.reload();
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