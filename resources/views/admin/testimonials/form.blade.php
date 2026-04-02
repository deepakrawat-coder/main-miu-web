<div class="row">
    <!-- Name -->
    <div class="col-md-6 mb-3">
        <label>Name *</label>
        <input type="text" name="name" class="form-control" value="{{ $testimonial->name ?? '' }}" required>
    </div>

    <!-- Subtitle -->
    <div class="col-md-6 mb-3">
        <label>Subtitle *</label>
        <input type="text" name="subtitle" class="form-control" value="{{ $testimonial->subtitle ?? '' }}" required>
    </div>
</div>

<div class="row">
    <!-- Rating -->
    <div class="col-md-6 mb-3">
        <label>Rating (1-5)</label>
        <input type="number" name="rating" class="form-control" min="1" max="5" value="{{ $testimonial->rating ?? '' }}">
    </div>

    <!-- Slug -->
    <div class="col-md-6 mb-3">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ $testimonial->slug ?? '' }}">
    </div>
</div>

<div class="row">
    <!-- Company -->
    <div class="col-md-6 mb-3">
        <label>Company</label>
        <input type="text" name="company" class="form-control" value="{{ $testimonial->company ?? '' }}">
    </div>

    <!-- Package -->
    <div class="col-md-6 mb-3">
        <label>Package</label>
        <input type="text" name="package" class="form-control" value="{{ $testimonial->package ?? '' }}">
    </div>
</div>

<div class="row">
    <!-- Passing Year -->
    <div class="col-md-6 mb-3">
        <label>Passing Year</label>
        <input type="text" name="passing_year" class="form-control" value="{{ $testimonial->passing_year ?? '' }}">
    </div>

    <!-- Page Type -->
    <div class="col-md-6 mb-3">
        <label>Page Type</label>
        <select name="page_type" class="form-select" onchange="toggleSchoolField(this.value)">
            <option value="home" {{ (isset($testimonial) && $testimonial->page_type == 'home') ? 'selected' : '' }}>Home</option>
            <option value="school" {{ (isset($testimonial) && $testimonial->page_type == 'school') ? 'selected' : '' }}>School</option>
            <option value="school-details" {{ (isset($testimonial) && $testimonial->page_type == 'school-details') ? 'selected' : '' }}>School Details</option>
            <option value="specialization-details" {{ (isset($testimonial) && $testimonial->page_type == 'specialization-details') ? 'selected' : '' }}>Specialization Details</option>
        </select>
    </div>
</div>

<div class="row" id="school-field" style="{{ (isset($testimonial) && $testimonial->page_type == 'school-details') ? '' : 'display: none;' }}">
    <!-- School -->
    <div class="col-md-12 mb-3">
        <label>School</label>
        <select name="school_id" class="form-select">
            <option value="">Select School</option>
            @foreach ($schools as $school)
            <option value="{{ $school->id }}" {{ (isset($testimonial) && $testimonial->school_id == $school->id) ? 'selected' : '' }}>{{ $school->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row" id="specialization-field" style="{{ (isset($testimonial) && $testimonial->page_type == 'specialization-details') ? '' : 'display: none;' }}">
    <!-- Specialization -->
    <div class="col-md-12 mb-3">
        <label>Specialization</label>
        <select name="specialization_id" class="form-select">
            <option value="">Select Specialization</option>
            @foreach ($specializations as $specialization)
            <option value="{{ $specialization->id }}" {{ (isset($testimonial) && $testimonial->specialization_id == $specialization->id) ? 'selected' : '' }}>{{ $specialization->title }}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- Message -->
<div class="mb-3">
    <label>Message *</label>
    <textarea name="message" id="testimonial_message" class="form-control" rows="4" required>{{ $testimonial->message ?? '' }}</textarea>
</div>

<!-- Image -->
<div class="mb-4">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(isset($testimonial) && $testimonial->image)
    <div class="mt-2">
        <img src="/{{ $testimonial->image }}" width="80" class="rounded border">
    </div>
    @endif
</div>