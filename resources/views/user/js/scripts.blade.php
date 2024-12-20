<script>
    $(document).ready(function() {
      // Handle form submission via AJAX
      $('#registerForm').on('submit', function(e) {
          e.preventDefault(); // Prevent default form submission
  
          let form = $(this);
          let action = form.attr('action'); // Form action
          let method = form.attr('method'); // Form method
  
          $.ajax({
              url: action,
              method: method,
              data: form.serialize(), // Serialize form data
              success: function(response) {
                  // Handle success, e.g., show success message, etc.
                  alert('Registration successful.');
                  // Optionally redirect to home or other page
                  window.location.href = '{{ route("home") }}';
              },
              error: function(xhr) {
                  // Handle errors and show error messages
                  if (xhr.status === 422) { // Validation errors
                      let errors = xhr.responseJSON.errors;
                      for (let field in errors) {
                          $('#' + field).next('.text-danger').text(errors[field][0]);
                      }
                  } else {
                      alert('An error occurred.');
                  }
              }
          });
      });
  });
  </script>