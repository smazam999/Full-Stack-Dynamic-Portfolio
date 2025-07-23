<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 2.5rem 3rem;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 1.5rem;
      color: #333;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding: 0.8rem 1rem;
      font-size: 1rem;
      border: 1.5px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007BFF;
      outline: none;
    }

    button {
      background: #007BFF;
      color: white;
      font-weight: 600;
      padding: 0.9rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #0056b3;
    }

    .forgot-password {
      margin-top: 0.8rem;
      font-size: 0.9rem;
    }

    .forgot-password a {
      color: #007BFF;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Register</button>
    </form>
    <div class="forgot-password">
      <a href="#">Forgot Password?</a>
    </div>
  </div>
</body>
</html>