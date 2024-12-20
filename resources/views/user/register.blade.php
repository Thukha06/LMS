@extends('user.master')

@section('title', 'LMS - Register')

@section('main')
    
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Register</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="{{ route('home') }}">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Register</span>
  </div>
</div>

<div class="site-section">
    <div class="container">
      <form id="registerForm" action="{{ route('register.post')}}" method="POST">
      @csrf
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="username">Username<span style="color: red"> *</span>
                        </label>
                        <input type="text" id="username" name="username" 
                        class="form-control form-control-lg" value="{{ old('username') }}" required>
                        <span class="text-danger" id="username-error"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="email">Email<span style="color: red"> *</span>
                        </label>
                        <input type="email" id="email" name="email" 
                        class="form-control form-control-lg" value="{{ old('email') }}" required>
                        <span class="text-danger" id="email-error"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="password">Password<span style="color: red"> *</span>
                        </label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" required><span class="text-danger" id="password-error"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="password_confirmation">Re-type Password<span style="color: red"> *</span></label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                    </div>
                </div>
            </div>
        </div>
      </form>

      
    </div>
</div>
@endsection

@push('scripts')
<script>
  $(document).ready(function() {
    // Handle form submission via AJAX
    $('#registerForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        let form = $(this);
        let action = form.attr('action'); // Form action
        let method = form.attr('method'); // Form method
        console.log('Form is being submitted via AJAX.');

        $.ajax({
            url: action,
            method: method,
            data: form.serialize(), // Serialize form data
            success: function(response) {
                // Handle success, e.g., show success message, etc.
                // alert(response.success);
                // Optionally redirect to home or other page
                window.location.href = '{{ route("home") }}';
            },
            error: function(xhr) {
                // Handle errors and show error messages
                if (xhr.status === 422) { // Validation errors
                    let errors = xhr.responseJSON.errors;
                    for (let field in errors) {
                        $('#' + field + '-error').text(errors[field][0]);
                    }
                } else {
                    alert('An error occurred.');
                }
            }
        });
    });
});
</script>
@endpush