@extends('users.pages.template')

@section('content')
<section class="contact-section padding">
    <form action="{{ route('feedback.store') }}" method="POST" id="ajax_form" class="form-horizontal">
        @csrf
        <div class="form-group colum-row row">
            <div class="col-sm-10">
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <textarea id="feedback" name="feedback" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button id="submit" class="default_btn" type="submit">Send Feedback</button>
            </div>
        </div>

        <!-- Message container for success/error messages -->
        <div id="form-messages" class="alert" role="alert" style="display:none;"></div>
    </form>

    <script>
        $(document).ready(function() {
            $('#ajax_form').on('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Get the form data
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        // Show the success message from the response
                        $('#form-messages').removeClass('alert alert-danger').addClass('alert alert-success');
                        $('#form-messages').text(response.message).fadeIn(); // Use the message from the server
                        $('#ajax_form')[0].reset(); // Reset the form
                    },
                    error: function(xhr) {
                        // If there's an error, show the error message
                        $('#form-messages').removeClass('alert alert-success').addClass('alert alert-danger');
                        var errors = xhr.responseJSON.errors.feedback.join(', ');
                        $('#form-messages').text(errors).fadeIn();
                    }
                });
            });
        });
        success: function(response) {
   

    </script>
</section>
@endsection
