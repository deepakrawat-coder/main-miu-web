<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add FAQ</h4>
    </div>

    <form id="faq-form" action="{{ route('faqs.store') }}" method="POST">
        @csrf

        <!-- Page Type -->
        <div class="mb-3">
            <label class="form-label fw-bold">Page Type *</label>
            <select name="page_type" id="page_type_select" class="form-select" required>
                <option value="home">Home</option>
                <option value="school-details">School Details</option>
                <option value="specialization-details">Specialization Details</option>
            </select>
        </div>

        <!-- School -->
        <div class="mb-3 d-none" id="school-field-container">
            <label class="form-label fw-bold">Select School</label>
            <select name="school_id" class="form-select">
                <option value="">Select School</option>
                @foreach ($schools as $school)
                <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Specialization -->
        <div class="mb-3 d-none" id="specialization-field-container">
            <label class="form-label fw-bold">Select Specialization</label>
            <select name="specialization_id" class="form-select">
                <option value="">Select Specialization</option>
                @foreach ($specializations as $specialization)
                <option value="{{ $specialization->id }}">{{ $specialization->title }}</option>
                @endforeach
            </select>
        </div>

        <hr>

        <div class="d-flex justify-content-between mb-3">
            <h5>FAQ Items</h5>
            <button type="button" class="btn btn-sm btn-primary" id="add-faq-btn">
                + Add FAQ
            </button>
        </div>

        <div id="faq-items-wrapper"></div>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary" id="submit-btn">Save</button>
        </div>
    </form>
</div>
<script>
    // Create mode → always start from 0
    let currentFaqIndex = 0;

    function toggleFaqFields(value) {
        $('#school-field-container').toggleClass('d-none', value !== 'school-details');
        $('#specialization-field-container').toggleClass('d-none', value !== 'specialization-details');
    }

    function getFaqHtml(index) {
        return `
        <div class="card mb-3 faq-item-row" id="faq-row-${index}">
            <div class="card-header d-flex justify-content-between align-items-center">
                <strong>FAQ #${index + 1}</strong>
                <button type="button" class="btn btn-sm btn-danger remove-faq">
                    Remove
                </button>
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <label class="form-label">Question *</label>
                    <input type="text" name="faqs[${index}][question]" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Answer *</label>
                    <textarea name="faqs[${index}][answer]" class="form-control" rows="3" required></textarea>
                </div>
                <div class="row">                    
                    <div class="col-md-12">
                        <label class="form-label">Order</label>
                        <input type="number" name="faqs[${index}][order]" class="form-control" value="${index}">
                    </div>
                </div>
            </div>
        </div>`;
    }

    $(document).ready(function() {

        // Page type toggle
        toggleFaqFields($('#page_type_select').val());

        $('#page_type_select').on('change', function() {
            toggleFaqFields(this.value);
        });

        // Add FAQ
        $('#add-faq-btn').on('click', function() {
            $('#faq-items-wrapper').append(getFaqHtml(currentFaqIndex));
            currentFaqIndex++;
        });

        // Remove FAQ
        $(document).on('click', '.remove-faq', function() {
            $(this).closest('.faq-item-row').remove();
        });

        // Submit Form
        $('#faq-form').on('submit', function(e) {
            e.preventDefault();

            let submitBtn = $('#submit-btn');
            submitBtn.prop('disabled', true).text('Saving...');

            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(res) {
                    toastr.success(res.message || 'Saved successfully');
                    $('.modal').modal('hide');
                    location.reload();
                },
                error: function(xhr) {
                    toastr.error(xhr.responseJSON?.message || 'Error occurred');
                    submitBtn.prop('disabled', false).text('Save');
                }
            });
        });

    });
</script>