<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Edit Specialization</h4>
    </div>

    <form id="specialization-form" action="{{ route('specialization.update', $specialization->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}

        <!-- Program -->
        <div class="mb-3">
            <label>Program *</label>
            <select name="program_id" class="form-select" required>
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}"
                        {{ $program->id == $specialization->program_id ? 'selected' : '' }}>
                        {{ $program->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Title -->
        <div class="mb-3">
            <label>Title *</label>
            <input type="text" name="title" value="{{ $specialization->title }}" class="form-control"
                id="title-input" required>
        </div>

        <!-- Slug -->
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $specialization->slug }}" class="form-control"
                id="slug-input">
        </div>

        <!-- Descriptions -->
        <div class="mb-3">
            <label>Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control">{{ $specialization->short_description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" id="description" class="form-control">{{ $specialization->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" id="content" class="form-control">{{ $specialization->content }}</textarea>
        </div>

        <!-- Meta -->
        <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" value="{{ $specialization->meta_title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control">{{ $specialization->meta_description }}</textarea>
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label>Main Image</label>
            <input type="file" name="image" class="form-control mb-2">

            @if ($specialization->image)
                <img src="{{ $specialization->image }}" width="120" class="rounded border">
            @endif
        </div>

        <hr>

        <!-- WHY CHOOSE SPECIALIZATION -->
        <h5>Why Choose Specialization</h5>
        <div id="why-choose-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addWhyChoose()">+ Add Why Choose
            Specialization</button>

        <hr>

        <!-- SUCCESS RATE -->
        <h5>Success Rate</h5>
        <div id="success-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addSuccess()">+ Add Success</button>

        <hr>

        <!-- CAREER OPPORTUNITY -->
        <h5>Career Opportunity</h5>
        <div id="career-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addCareer()">+ Add Career</button>

        <hr>

        <!-- RECRUITER PARTNER -->
        <h5>Recruiter Partner</h5>
        <div id="recruiter-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addRecruiter()">+ Add Recruiter</button>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
{{-- <script>
    // Initialize CKEditor instances
    let shortEditor, descEditor, contentEditor;
    let whyChooseIndex = 0;
    let successIndex = 0;
    let careerIndex = 0;
    let recruiterIndex = 0;

    // Get features data from PHP
    let oldFeatures = @json($features ?? []);
    console.log(oldFeatures);

    $(document).ready(function() {
        // Initialize CKEditors
        if (document.querySelector('#short_description')) {
            ClassicEditor.create(document.querySelector('#short_description'))
                .then(editor => shortEditor = editor)
                .catch(error => console.error('Short Description CKEditor error:', error));
        }

        if (document.querySelector('#description')) {
            ClassicEditor.create(document.querySelector('#description'))
                .then(editor => descEditor = editor)
                .catch(error => console.error('Description CKEditor error:', error));
        }

        if (document.querySelector('#content')) {
            ClassicEditor.create(document.querySelector('#content'))
                .then(editor => contentEditor = editor)
                .catch(error => console.error('Content CKEditor error:', error));
        }

        // Slug auto generate from title
        $('#title-input').on('keyup', function() {
            let slug = $(this).val().toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');
            $('#slug-input').val(slug);
        });

        // Load existing features
        loadFeatures();
    });

    function loadFeatures() {
        // Load Why Choose Specialization
        if (oldFeatures && oldFeatures.why_choose && oldFeatures.why_choose.length > 0) {
            oldFeatures.why_choose.forEach(item => addWhyChoose(item));
        } else {
            addWhyChoose(); // Add one empty row by default
        }

        // Load Success Rate
        if (oldFeatures && oldFeatures.success_rate && oldFeatures.success_rate.length > 0) {
            oldFeatures.success_rate.forEach(item => addSuccess(item));
        } else {
            addSuccess(); // Add one empty row by default
        }

        // Load Career Opportunities
        if (oldFeatures && oldFeatures.career && oldFeatures.career.length > 0) {
            oldFeatures.career.forEach(item => addCareer(item));
        } else {
            addCareer(); // Add one empty row by default
        }

        // Load Recruiter Partners
        if (oldFeatures && oldFeatures.recruiter && oldFeatures.recruiter.length > 0) {
            oldFeatures.recruiter.forEach(item => addRecruiter(item));
        } else {
            addRecruiter(); // Add one empty row by default
        }
    }

    // WHY CHOOSE SPECIALIZATION
    function addWhyChoose(data = {}) {
        if (data.image) {
            imageHtml = `
        <div class="mb-2">
            <label class="form-label">Current Image:</label>
            <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
            <input type="hidden" 
                   name="why_choose[${whyChooseIndex}][old_image]" 
                   value="${data.image}">
        </div>
           `;
        } else {
            imageHtml = '';
        }

        let html = `
            <div class="border p-3 mb-3 rounded position-relative" id="why-choose-row-${whyChooseIndex}">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                    onclick="removeRow('why-choose-row-${whyChooseIndex}')">×</button>

                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="why_choose[${whyChooseIndex}][title]"
                        value="${data.title || ''}"
                        class="form-control" placeholder="Enter title">
                </div>

                <div class="mb-2">
                    <label class="form-label">Content</label>
                    <textarea name="why_choose[${whyChooseIndex}][content]"
                        class="form-control" placeholder="Enter content" rows="3">${data.content || ''}</textarea>
                </div>

                <div class="mb-2">
                    <label class="form-label">Image</label>
                    ${imageHtml}
                    <input type="file" name="why_choose[${whyChooseIndex}][image]" 
                           class="form-control" accept="image/*">
                </div>
            </div>
        `;

        $('#why-choose-wrapper').append(html);
        whyChooseIndex++;
    }

    // SUCCESS RATE
    function addSuccess(data = {}) {
        let html = `
            <div class="border p-3 mb-3 rounded position-relative" id="success-row-${successIndex}">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                    onclick="removeRow('success-row-${successIndex}')">×</button>

                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="success_rate[${successIndex}][title]"
                        value="${data.title || ''}"
                        class="form-control" placeholder="Enter title">
                </div>

                <div class="mb-2">
                    <label class="form-label">Content</label>
                    <textarea name="success_rate[${successIndex}][content]"
                        class="form-control" placeholder="Enter content" rows="3">${data.content || ''}</textarea>
                </div>

                <div class="mb-2">
                    <label class="form-label">Percentage</label>
                    <input type="number" name="success_rate[${successIndex}][number]"
                        value="${data.number || ''}"
                        class="form-control" placeholder="Enter percentage" min="0" max="100" step="0.01">
                </div>
            </div>
        `;

        $('#success-wrapper').append(html);
        successIndex++;
    }

    // CAREER OPPORTUNITY
    function addCareer(data = {}) {
        if (data.image) {
            imageHtml = `
        <div class="mb-2">
            <label class="form-label">Current Image:</label>
            <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
            <input type="hidden" 
                   name="career[${careerIndex}][old_image]" 
                   value="${data.image}">
        </div>
          `;
        }else {
            imageHtml = '';
        }


        let html = `
            <div class="border p-3 mb-3 rounded position-relative" id="career-row-${careerIndex}">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                    onclick="removeRow('career-row-${careerIndex}')">×</button>

                <div class="mb-2">
                    <label class="form-label">Image</label>
                    ${imageHtml}
                    <input type="file" name="career[${careerIndex}][image]" 
                           class="form-control mb-2" accept="image/*">
                </div>

                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="career[${careerIndex}][title]"
                        value="${data.title || ''}"
                        class="form-control" placeholder="Enter title">
                </div>

                <div class="mb-2">
                    <label class="form-label">Package</label>
                    <input type="text" name="career[${careerIndex}][package]"
                        value="${data.package || ''}"
                        class="form-control" placeholder="Enter package (e.g., ₹5-10 LPA)">
                </div>

                <div class="mb-2">
                    <label class="form-label">Skills</label>
                    <textarea name="career[${careerIndex}][skill]"
                        class="form-control" placeholder="Enter required skills" rows="3">${data.skill || ''}</textarea>
                </div>
            </div>
        `;

        $('#career-wrapper').append(html);
        careerIndex++;
    }

    // RECRUITER PARTNER
    function addRecruiter(data = {}) {
       if (data.image) {
        imageHtml = `
        <div class="mb-2">
            <label class="form-label">Current Logo:</label>
            <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
            <input type="hidden" 
                   name="recruiter[${recruiterIndex}][old_image]" 
                   value="${data.image}">
        </div>
         `;
        } else {
            imageHtml = '';
         }


        let html = `
            <div class="border p-3 mb-3 rounded position-relative" id="recruiter-row-${recruiterIndex}">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                    onclick="removeRow('recruiter-row-${recruiterIndex}')">×</button>

                <div class="mb-2">
                    <label class="form-label">Company Name</label>
                    <input type="text" name="recruiter[${recruiterIndex}][title]"
                        value="${data.title || ''}"
                        class="form-control" placeholder="Enter company name">
                </div>

                <div class="mb-2">
                    <label class="form-label">Logo</label>
                    ${imageHtml}
                    <input type="file" name="recruiter[${recruiterIndex}][image]" 
                           class="form-control" accept="image/*">
                </div>
            </div>
        `;

        $('#recruiter-wrapper').append(html);
        recruiterIndex++;
    }

    function removeRow(rowId) {
        $('#' + rowId).remove();
    }

    // Form submission with CKEditor data
    $(document).on('submit', '#specialization-form', function(e) {
        // Update textareas with CKEditor content before submit
        if (shortEditor) {
            $('textarea[name="short_description"]').val(shortEditor.getData());
        }
        if (descEditor) {
            $('textarea[name="description"]').val(descEditor.getData());
        }
        if (contentEditor) {
            $('textarea[name="content"]').val(contentEditor.getData());
        }
    });
</script> --}}
<script>
    // CKEditor instances
    let shortEditor, descEditor, contentEditor;

    let whyChooseIndex = 0;
    let successIndex = 0;
    let careerIndex = 0;
    let recruiterIndex = 0;

    // Get features from controller
    let oldFeatures = @json($features ?? []);
    $(document).ready(function() {

        /* ================= CKEDITOR ================= */

        if ($('#short_description').length) {
            ClassicEditor.create(document.querySelector('#short_description'))
                .then(editor => shortEditor = editor)
                .catch(error => console.error(error));
        }

        if ($('#description').length) {
            ClassicEditor.create(document.querySelector('#description'))
                .then(editor => descEditor = editor)
                .catch(error => console.error(error));
        }

        if ($('#content').length) {
            ClassicEditor.create(document.querySelector('#content'))
                .then(editor => contentEditor = editor)
                .catch(error => console.error(error));
        }

        /* ================= SLUG AUTO GENERATE ================= */

        $('#title-input').on('keyup', function() {
            let slug = $(this).val()
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');

            $('#slug-input').val(slug);
        });

        /* ================= LOAD OLD FEATURES ================= */

        loadFeatures();
    });


    function loadFeatures() {

        // WHY CHOOSE
        if (oldFeatures?.why_choose?.length) {
            oldFeatures.why_choose.forEach(item => addWhyChoose(item));
        } else {
            addWhyChoose();
        }

        // SUCCESS RATE
        if (oldFeatures?.success_rate?.length) {
            oldFeatures.success_rate.forEach(item => addSuccess(item));
        } else {
            addSuccess();
        }

        // CAREER
        if (oldFeatures?.career?.length) {
            oldFeatures.career.forEach(item => addCareer(item));
        } else {
            addCareer();
        }

        // RECRUITER
        if (oldFeatures?.recruiter?.length) {
            oldFeatures.recruiter.forEach(item => addRecruiter(item));
        } else {
            addRecruiter();
        }
    }

    /* ================= WHY CHOOSE ================= */

    function addWhyChoose(data = {}) {

        let imageHtml = data.image ? `
            <div class="mb-2">
                <label class="form-label">Current Image:</label>
                <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
                <input type="hidden" name="why_choose[${whyChooseIndex}][old_image]" value="${data.image}">
            </div>
        ` : '';

        let html = `
        <div class="border p-3 mb-3 rounded position-relative" id="why-choose-row-${whyChooseIndex}">
            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                onclick="removeRow('why-choose-row-${whyChooseIndex}')">×</button>

            <div class="mb-2">
                <label class="form-label">Title</label>
                <input type="text" name="why_choose[${whyChooseIndex}][title]"
                    value="${data.title || ''}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Content</label>
                <textarea name="why_choose[${whyChooseIndex}][content]"
                    class="form-control" rows="3">${data.content || ''}</textarea>
            </div>

            <div class="mb-2">
                <label class="form-label">Image</label>
                ${imageHtml}
                <input type="file" name="why_choose[${whyChooseIndex}][image]" 
                    class="form-control" accept="image/*">
            </div>
        </div>`;

        $('#why-choose-wrapper').append(html);
        whyChooseIndex++;
    }

    /* ================= SUCCESS RATE ================= */

    function addSuccess(data = {}) {

        let html = `
        <div class="border p-3 mb-3 rounded position-relative" id="success-row-${successIndex}">
            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                onclick="removeRow('success-row-${successIndex}')">×</button>

            <div class="mb-2">
                <label class="form-label">Title</label>
                <input type="text" name="success_rate[${successIndex}][title]"
                    value="${data.title || ''}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Content</label>
                <textarea name="success_rate[${successIndex}][content]"
                    class="form-control" rows="3">${data.content || ''}</textarea>
            </div>

            <div class="mb-2">
                <label class="form-label">Percentage</label>
                <input type="number" name="success_rate[${successIndex}][number]"
                    value="${data.number || ''}"
                    class="form-control" min="0" max="100" step="0.01">
            </div>
        </div>`;

        $('#success-wrapper').append(html);
        successIndex++;
    }

    /* ================= CAREER ================= */

    function addCareer(data = {}) {

        let imageHtml = data.image ? `
            <div class="mb-2">
                <label class="form-label">Current Image:</label>
                <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
                <input type="hidden" name="career[${careerIndex}][old_image]" value="${data.image}">
            </div>
        ` : '';

        let html = `
        <div class="border p-3 mb-3 rounded position-relative" id="career-row-${careerIndex}">
            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                onclick="removeRow('career-row-${careerIndex}')">×</button>

            <div class="mb-2">
                <label class="form-label">Image</label>
                ${imageHtml}
                <input type="file" name="career[${careerIndex}][image]" 
                    class="form-control mb-2" accept="image/*">
            </div>

            <div class="mb-2">
                <label class="form-label">Title</label>
                <input type="text" name="career[${careerIndex}][title]"
                    value="${data.title || ''}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Package</label>
                <input type="text" name="career[${careerIndex}][package]"
                    value="${data.package || ''}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Skills</label>
                <textarea name="career[${careerIndex}][skill]"
                    class="form-control" rows="3">${data.skill || ''}</textarea>
            </div>
        </div>`;

        $('#career-wrapper').append(html);
        careerIndex++;
    }

    /* ================= RECRUITER ================= */

    function addRecruiter(data = {}) {

        let imageHtml = data.image ? `
            <div class="mb-2">
                <label class="form-label">Current Logo:</label>
                <img src="${data.image}" width="80" class="mb-2 border rounded d-block">
                <input type="hidden" name="recruiter[${recruiterIndex}][old_image]" value="${data.image}">
            </div>
        ` : '';

        let html = `
        <div class="border p-3 mb-3 rounded position-relative" id="recruiter-row-${recruiterIndex}">
            <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                onclick="removeRow('recruiter-row-${recruiterIndex}')">×</button>

            <div class="mb-2">
                <label class="form-label">Company Name</label>
                <input type="text" name="recruiter[${recruiterIndex}][title]"
                    value="${data.title || ''}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label class="form-label">Logo</label>
                ${imageHtml}
                <input type="file" name="recruiter[${recruiterIndex}][image]" 
                    class="form-control" accept="image/*">
            </div>
        </div>`;

        $('#recruiter-wrapper').append(html);
        recruiterIndex++;
    }

    function removeRow(id) {
        $('#' + id).remove();
    }

    /* ================= SUBMIT CKEDITOR DATA ================= */

    $(document).on('submit', '#specialization-form', function() {

        if (shortEditor) {
            $('textarea[name="short_description"]').val(shortEditor.getData());
        }

        if (descEditor) {
            $('textarea[name="description"]').val(descEditor.getData());
        }

        if (contentEditor) {
            $('textarea[name="content"]').val(contentEditor.getData());
        }
    });
</script>
