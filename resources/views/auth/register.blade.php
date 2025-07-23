<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Register</title>
  <style>
    /* Basic reset */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .register-container {
      background: white;
      padding: 2.5rem 3rem;
      border-radius: 10px;
      box-shadow: 0 12px 25px rgba(0,0,0,0.1);
      width: 360px;
      text-align: center;
    }
    .register-container h2 {
      margin-bottom: 1.8rem;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding: 0.9rem 1rem;
      font-size: 1rem;
      border: 1.8px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
      outline-offset: 2px;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007BFF;
      outline: none;
    }
    button {
      background-color: #007BFF;
      color: white;
      padding: 1rem;
      font-size: 1.1rem;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #0056b3;
    }
    .login-link {
      margin-top: 1rem;
      font-size: 0.9rem;
    }
    .login-link a {
      color: #007BFF;
      text-decoration: none;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Create Account</h2>
    <form action="/register" method="POST">
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
      <button type="submit">Register</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="/login">Login here</a>
    </div>
  </div>
</body>
</html>
