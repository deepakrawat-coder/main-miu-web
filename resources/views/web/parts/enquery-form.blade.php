  <form id="enquiryForm"  >
      @csrf

      <!-- Full Name -->
      <div class="form-group">
          <label class="mb-0 pb-0"><i class="fas fa-user-graduate"></i> Full Name <span class="required-star">*</span></label>
          <input type="text" name="name" id="name" placeholder="e.g. Rohan Sharma" value="{{ old('name') }}"
              required>
          @error('name')
              <small style="color:#e53e3e; font-size:0.7rem;">{{ $message }}</small>
          @enderror
      </div>

      <!-- Email -->
      <div class="form-group">
          <label class="mb-0 pb-0"><i class="fas fa-envelope"></i> Email Address <span class="required-star">*</span></label>
          <input type="email" name="email" id="email" placeholder="rohan@example.com"
              value="{{ old('email') }}" required>
          @error('email')
              <small style="color:#e53e3e; font-size:0.7rem;">{{ $message }}</small>
          @enderror
      </div>

      <!-- Phone -->
      <div class="form-group">
          <label class="mb-0 pb-0"><i class="fas fa-phone-alt"></i> Phone Number <span class="required-star">*</span></label>
          <input type="tel" name="phone" id="phone" placeholder="+91 98765 43210" value="{{ old('phone') }}"
              required>
          @error('phone')
              <small style="color:#e53e3e; font-size:0.7rem;">{{ $message }}</small>
          @enderror
      </div>

      <!-- City + State in same row -->
      <div class="row-2col">
          <div class="form-group">
              <label class="mb-0 pb-0"><i class="fas fa-city"></i> City <span class="required-star">*</span></label>
              <input type="text" name="city" id="city" placeholder="e.g. Mumbai" value="{{ old('city') }}"
                  required>
              @error('city')
                  <small style="color:#e53e3e; font-size:0.7rem;">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label class="mb-0 pb-0"><i class="fas fa-map-marker-alt"></i> State <span class="required-star">*</span></label>
              <input type="text" name="state" id="state" placeholder="e.g. Maharashtra"
                  value="{{ old('state') }}" required>
              @error('state')
                  <small style="color:#e53e3e; font-size:0.7rem;">{{ $message }}</small>
              @enderror
          </div>
      </div>

      <button type="submit" class="btn-submit">
          <i class="fas fa-paper-plane"></i> Submit Enquiry
      </button>

      <div id="formSuccessMessage" class="success-message">
          <i class="fas fa-check-circle"></i> Thank you! Our team will contact you soon.
      </div>
      <div id="formErrorMessage" class="error-message">
          <i class="fas fa-exclamation-triangle"></i> Please fix the errors above.
      </div>
  </form>
