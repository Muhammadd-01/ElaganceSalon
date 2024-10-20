@extends('users.pages.template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hair Salon Login Form</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap');

    .login-form-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      max-width: 400px;
      width: 100%;
      margin: auto;
      animation: fadeIn 1s ease-out;
      transition: transform 0.3s;
    }

    .login-form-container:hover {
      transform: scale(1.02);
    }

    h2 {
      text-align: center;
      color: #d35400;
      font-weight: 600;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
      position: relative;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 2px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      transition: border-color 0.3s;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #d35400;
      outline: none;
    }

    button.submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #d35400;
      border: none;
      border-radius: 8px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s, box-shadow 0.3s;
    }

    button.submit-btn:hover {
      background-color: #e67e22;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .signup-link {
      text-align: center;
      margin-top: 15px;
    }

    .signup-link a {
      color: #d35400;
      text-decoration: none;
      font-weight: 500;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* Fade-in animation */
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <br>
  <div class="login-form-container">
    <h2>Login to Hair Salon</h2>
    <form id="loginForm" onsubmit="validateLoginForm(); return false;">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <div class="form-group">
        <button type="submit" class="submit-btn">Login</button>
      </div>

      <div class="signup-link">
        <p>Don't have an account? <a href="/signup">Create one</a></p>
      </div>
    </form>
  </div>
  <br>
  <script src="script.js"></script>
</body>
<script>
  function validateLoginForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email == "" || password == "") {
      alert("Please fill out all fields");
      return false;
    }

    if (!validateEmail(email)) {
      alert("Please enter a valid email address");
      return false;
    }

    if (password.length < 8) {
      alert("Password must be at least 8 characters long");
      return false;
    }

    alert("Login successful!");
    return true;
  }

  function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }
</script>
</html>
@endsection
