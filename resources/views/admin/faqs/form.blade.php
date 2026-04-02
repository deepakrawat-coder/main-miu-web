<div class="row">
    <!-- Page Type -->
    <div class="col-md-12 mb-3">
        <label class="form-label fw-bold">Page Type *</label>
        <select name="page_type" id="page_type_select" class="form-select" onchange="toggleFaqFields(this.value)" required>
            <option value="home" {{ (isset($faq) && $faq->page_type == 'home') ? 'selected' : '' }}>Home</option>
            <option value="school-details" {{ (isset($faq) && $faq->page_type == 'school-details') ? 'selected' : '' }}>School Details</option>
            <option value="specialization-details" {{ (isset($faq) && $faq->page_type == 'specialization-details') ? 'selected' : '' }}>Specialization Details</option>
        </select>
    </div>
</div>

<div class="row" id="school-field-container" style="display: none;">
    <!-- School -->
    <div class="col-md-12 mb-3">
        <label class="form-label fw-bold">Select School</label>
        <select name="school_id" class="form-select">
            <option value="">Select School</option>
            @foreach ($schools as $school)
            <option value="{{ $school->id }}" {{ (isset($faq) && $faq->school_id == $school->id) ? 'selected' : '' }}>{{ $school->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row" id="specialization-field-container" style="display: none;">
    <!-- Specialization -->
    <div class="col-md-12 mb-3">
        <label class="form-label fw-bold">Select Specialization</label>
        <select name="specialization_id" class="form-select">
            <option value="">Select Specialization</option>
            @foreach ($specializations as $specialization)
            <option value="{{ $specialization->id }}" {{ (isset($faq) && $faq->specialization_id == $specialization->id) ? 'selected' : '' }}>{{ $specialization->title }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <!-- Status -->
    <div class="col-md-12 mb-3">
        <label class="form-label fw-bold">Overall Module Status</label>
        <select name="status" class="form-select">
            <option value="1" {{ (isset($faq) && $faq->status == 1) ? 'selected' : '' }}>Active</option>
            <option value="0" {{ (isset($faq) && $faq->status == 0) ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
</div>

<hr>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">FAQ Items</h5>
    <button type="button" class="btn btn-sm btn-primary" onclick="addFaqItem()">+ Add FAQ</button>
</div>

<div id="faq-items-wrapper">
    @if(isset($faqItems) && count($faqItems) > 0)
    @foreach($faqItems as $index => $item)
    <div class="card mb-3 faq-item-row" id="faq-row-{{ $index }}">
        <div class="card-header bg-light d-flex justify-content-between align-items-center py-2">
            <span class="fw-bold">FAQ #{{ $index + 1 }}</span>
            <button type="button" class="btn btn-sm btn-outline-danger border-0" onclick="removeFaqItem({{ $index }})">
                <i class="ri-delete-bin-line"></i>
            </button>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Question</label>
                <input type="text" name="faqs[{{ $index }}][question]" class="form-control" value="{{ $item['question'] ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Answer</label>
                <textarea name="faqs[{{ $index }}][answer]" class="form-control" rows="3" required>{{ $item['answer'] ?? '' }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="faqs[{{ $index }}][status]" class="form-select">
                        <option value="1" {{ ($item['status'] ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ ($item['status'] ?? 1) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="faqs[{{ $index }}][order]" class="form-control" value="{{ $item['order'] ?? 0 }}">
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>

<script>
    var currentFaqIndex = {
        {
            isset($faqItems) ? count($faqItems) : 0
        }
    };

    function toggleFaqFields(value) {
        const schoolContainer = document.getElementById('school-field-container');
        const specContainer = document.getElementById('specialization-field-container');

        if (schoolContainer) schoolContainer.style.display = (value === 'school-details') ? 'block' : 'none';
        if (specContainer) specContainer.style.display = (value === 'specialization-details') ? 'block' : 'none';
    }

    window.addFaqItem = function() {
        const wrapper = document.getElementById('faq-items-wrapper');
        const div = document.createElement('div');
        div.className = 'card mb-3 faq-item-row';
        div.id = `faq-row-${currentFaqIndex}`;
        div.innerHTML = `
            <div class="card-header bg-light d-flex justify-content-between align-items-center py-2">
                <span class="fw-bold">FAQ #${currentFaqIndex + 1}</span>
                <button type="button" class="btn btn-sm btn-outline-danger border-0" onclick="removeFaqItem(${currentFaqIndex})">
                    <i class="ri-delete-bin-line"></i>
                </button>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Question</label>
                    <input type="text" name="faqs[${currentFaqIndex}][question]" class="form-control" placeholder="Enter question" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Answer</label>
                    <textarea name="faqs[${currentFaqIndex}][answer]" class="form-control" placeholder="Enter answer" rows="3" required></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="faqs[${currentFaqIndex}][status]" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="faqs[${currentFaqIndex}][order]" class="form-control" value="0">
                    </div>
                </div>
            </div>
        `;
        wrapper.appendChild(div);
        currentFaqIndex++;
    };

    window.removeFaqItem = function(index) {
        const item = document.getElementById(`faq-row-${index}`);
        if (item) item.remove();
    };

    // Initialize toggle state
    $(document).ready(function() {
        const select = document.getElementById('page_type_select');
        if (select) {
            toggleFaqFields(select.value);
        }

        // Add one empty FAQ if creating new and none exist

        addFaqItem();

    });
</script>