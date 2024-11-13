@extends('users.pages.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Male Hair Salon Register Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: #e9ecef; /* Light grey background for a clean look */
      font-family: 'Arial', sans-serif; /* Clean font */
    }
    .login-form-container {
      border-radius: 15px; /* Rounded corners */
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2); /* Soft shadow */
      background-color: #ffffff; /* White background for contrast */
      padding: 40px; /* Padding around the card */
      margin-top: 5%; /* Margin from the top */
      width: 700px; /* Fixed width */
      margin-left: auto; /* Centering */
      margin-right: auto; /* Centering */
      margin-bottom: 5%;
    }
    .login-form-container h2 {
      color: #343a40; /* Dark grey color for the heading */
      font-weight: bold; /* Bold text for emphasis */
      margin-bottom: 25px; /* Space below heading */
      text-align: center; /* Center the heading */
    }
    .form-control:focus {
      border-color: #343a40; /* Dark grey focus border color */
      box-shadow: 0 0 0.2rem rgba(52, 58, 64, 0.25); /* Focus shadow */
    }
    .btn-primary {
      background-color: #007bff; /* Classic blue for the button */
      border: none; /* Remove border */
      border-radius: 8px; /* Rounded button */
      padding: 12px 20px; /* Padding for button */
      transition: background-color 0.3s; /* Transition effect */
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Darker blue on hover */
    }
    .invalid-feedback {
      font-size: 0.9em; /* Smaller error message */

    }
    .create-account {
      text-align: center; /* Centered text */
      margin-top: 20px; /* Space above */
    }
    a {
      color: #007bff; /* Link color */
      text-decoration: none; /* No underline */
    }
    a:hover {
      text-decoration: underline; /* Underline on hover */
    }
    .form-control {
    border-radius: 8px; /* Rounded input fields */
    box-shadow: inset 0 2px 5px rgba(255, 252, 252, 0.1); /* Subtle inner shadow */
    border: 1px solid #343a40; /* Dark grey border */
    background-color: white; /* Black background for dropdown */
    color: black; /* White text color */
}

.form-control option {
    background-color: black; /* Ensure options have black background */
    color: white; /* White text for options */
}

.form-control:hover,
.form-control:focus {
    background-color: #5a5a5a; /* Darker grey on hover */
    color: white; /* Maintain white text on hover */
    border-color: black; /* Border color on focus */
    box-shadow: 0 0 0.2rem rgba(52, 58, 64, 0.25); /* Focus shadow */
}
.custom-btn {
    background-color: black; /* Black background */
    color: white; /* White text color */
    border: none; /* Remove border */
    border-radius: 8px; /* Rounded button */
    padding: 12px 20px; /* Padding for button */
    transition: background-color 0.3s; /* Transition effect */
    cursor: pointer; /* Pointer cursor */
}

.custom-btn:hover {
    background-color: #333; /* Darker shade on hover */
}

.custom-link {
    color: black; /* White text color for the link */
    text-decoration: none; /* No underline */
}
  </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
            <div class="card login-form-container">
                <h2>{{ __('Register') }}</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name Field -->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mobile Field -->
                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}</label>
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile">
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Age Field -->
                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" autocomplete="age">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- Gender Field -->
<div class="row mb-3">
    <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
    <div class="col-md-6">
        <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender">
            <option value="">{{ __('Select Gender') }}</option>
            <option value="Male">{{ __('Male') }}</option>
            <option value="Female">{{ __('Female') }}</option>
            <option value="Other">{{ __('Other') }}</option>
        </select>
        @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


                        <!-- Address Field -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit Button and Login Link -->
                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-4 d-flex align-items-center">
                                <button type="submit" class="btn custom-btn">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{ route('login') }}" class="ms-3 custom-link">{{ __('Already have an account? Login') }}</a>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
