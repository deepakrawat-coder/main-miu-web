<div class="modal-body">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-primary">Add Specialization</h4>
    </div>

    <form id="specialization-form" action="{{ route('specialization.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <!-- Program -->
        <div class="mb-3">
            <label>Program *</label>
            <select name="program_id" class="form-select" required>
                <option value="">Select Program</option>
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Name -->
        <div class="mb-3">
            <label>Name *</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="enter-custom-slug">
        </div>

        <!-- Descriptions -->
        <div class="mb-3">
            <label>Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

        <!-- Meta -->
        <div class="mb-3">
            <label>Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Meta Description</label>
            <textarea name="meta_description" class="form-control"></textarea>
        </div>

        <!-- Image -->
        <div class="mb-4">
            <label>Main Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <!-- WHY CHOOSE SPECIALIZATION -->
        <h5>Why Choose Specialization</h5>
        <div id="why-choose-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addWhyChoose()">+ Add Why Choose Specialization</button>

        <hr>

        <!-- SUCCESS RATE -->
        <h5>Success Rate</h5>
        <div id="success-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addSuccess()">+ Add Success</button>

        <hr>

        <!-- CAREER -->
        <h5>Career Opportunity</h5>
        <div id="career-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addCareer()">+ Add Career</button>

        <hr>

        <!-- RECRUITER -->
        <h5>Recruiter Partner</h5>
        <div id="recruiter-wrapper"></div>
        <button type="button" class="btn btn-sm btn-success mb-3" onclick="addRecruiter()">+ Add Recruiter</button>

        <div class="text-end mt-4">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    // Fix for slug generation - changed from 'name' to 'title'
    document.querySelector('input[name="title"]').addEventListener('keyup', function() {
        let slug = this.value.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');
        document.querySelector('input[name="slug"]').value = slug;
    });
</script>
<script>
    let shortEditor, descEditor, contentEditor;
    let whyChooseIndex = 0;
    let successIndex = 0;
    let careerIndex = 0;
    let recruiterIndex = 0;
    
    $(document).ready(function() {
        // Initialize CKEditors
        ClassicEditor.create(document.querySelector('#short_description'))
            .then(editor => shortEditor = editor)
            .catch(error => console.error(error));

        ClassicEditor.create(document.querySelector('#description'))
            .then(editor => descEditor = editor)
            .catch(error => console.error(error));

        ClassicEditor.create(document.querySelector('#content'))
            .then(editor => contentEditor = editor)
            .catch(error => console.error(error));

        // Add initial empty fields
        addWhyChoose(); // Add first why choose field
        addSuccess();
        addCareer();
        addRecruiter();

        // Form submission
        $("#specialization-form").submit(function(e) {
            e.preventDefault();

            // Update textareas with CKEditor data
            if (shortEditor) {
                $('textarea[name="short_description"]').val(shortEditor.getData());
            }
            if (descEditor) {
                $('textarea[name="description"]').val(descEditor.getData());
            }
            if (contentEditor) {
                $('textarea[name="content"]').val(contentEditor.getData());
            }

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
                    if ($('#specializations-table').length) {
                        $('#specializations-table').DataTable().ajax.reload();
                    }
                },
                error: function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    } else {
                        toastr.error("Something went wrong!");
                    }
                }
            });
        });
    });

    // WHY CHOOSE SPECIALIZATION
    function addWhyChoose() {
        $('#why-choose-wrapper').append(`
            <div class="border p-3 mb-3 rounded position-relative">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                        onclick="this.parentElement.remove()">×</button>
                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="why_choose[${whyChooseIndex}][title]"
                           class="form-control" placeholder="Enter title" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Content</label>
                    <textarea name="why_choose[${whyChooseIndex}][content]"
                           class="form-control" placeholder="Enter content" rows="3" required></textarea>
                </div>
                <div>
                    <label class="form-label">Image</label>
                    <input type="file" name="why_choose[${whyChooseIndex}][image]"
                           class="form-control" accept="image/*">
                </div>
            </div>
        `);
        whyChooseIndex++;
    }

    // SUCCESS RATE
    function addSuccess() {
        $('#success-wrapper').append(`
            <div class="border p-3 mb-3 rounded position-relative">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                        onclick="this.parentElement.remove()">×</button>
                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="success_rate[${successIndex}][title]"
                           class="form-control mb-2" placeholder="Enter title">
                </div>
                <div class="mb-2">
                    <label class="form-label">Content</label>
                    <textarea name="success_rate[${successIndex}][content]"
                           class="form-control mb-2" placeholder="Enter content" rows="3"></textarea>
                </div>
                <div>
                    <label class="form-label">Percentage</label>
                    <input type="number" name="success_rate[${successIndex}][number]"
                           class="form-control" placeholder="Enter percentage" min="0" max="100" step="0.01">
                </div>
            </div>
        `);
        successIndex++;
    }

    // CAREER OPPORTUNITY
    function addCareer() {
        $('#career-wrapper').append(`
            <div class="border p-3 mb-3 rounded position-relative">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                        onclick="this.parentElement.remove()">×</button>
                <div class="mb-2">
                    <label class="form-label">Image</label>
                    <input type="file" name="career[${careerIndex}][image]"
                           class="form-control mb-2" accept="image/*">
                </div>
                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="career[${careerIndex}][title]"
                           class="form-control mb-2" placeholder="Enter title">
                </div>
                <div class="mb-2">
                    <label class="form-label">Package</label>
                    <input type="text" name="career[${careerIndex}][package]"
                           class="form-control mb-2" placeholder="Enter package (e.g., ₹5-10 LPA)">
                </div>
                <div>
                    <label class="form-label">Skills</label>
                    <textarea name="career[${careerIndex}][skill]"
                           class="form-control" placeholder="Enter required skills" rows="3"></textarea>
                </div>
            </div>
        `);
        careerIndex++;
    }

    // RECRUITER PARTNER
    function addRecruiter() {
        $('#recruiter-wrapper').append(`
            <div class="border p-3 mb-3 rounded position-relative">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                        onclick="this.parentElement.remove()">×</button>
                <div class="mb-2">
                    <label class="form-label">Title</label>
                    <input type="text" name="recruiter[${recruiterIndex}][title]"
                           class="form-control mb-2" placeholder="Enter company name">
                </div>
                <div>
                    <label class="form-label">Logo</label>
                    <input type="file" name="recruiter[${recruiterIndex}][image]"
                           class="form-control" accept="image/*">
                </div>
            </div>
        `);
        recruiterIndex++;
    }
</script>