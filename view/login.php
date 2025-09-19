<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
      width: 350px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    label {
      display: block;
      margin: 12px 0 6px;
      font-size: 14px;
      text-align: left;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    input:focus {
      outline: none;
      border-color: #007BFF;
      box-shadow: 0 0 4px rgba(0,123,255,0.4);
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      width: 100%;
      background: #007BFF;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #0056b3;
    }

    #loading {
      margin-top: 12px;
      color: #555;
      font-size: 14px;
    }

    #message {
      margin-top: 12px;
      font-size: 14px;
    }

    .link {
      margin-top: 15px;
      font-size: 14px;
      color: #007BFF;
    }

    .link a {
      color: #007BFF;
      text-decoration: none;
    }

    .link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Login</h1>
    <form id="loginForm">
      <label>Email:</label>
      <input type="email" name="email" required maxlength="150">

      <label>Password:</label>
      <input type="password" name="password" required minlength="6">

      <button type="submit" id="loginBtn">Login</button>
      <div id="loading" style="display:none;">Logging in...</div>
      <div id="message"></div>
    </form>
    <div class="link">
      Don’t have an account? <a href="register.html">Register</a>
    </div>
  </div>

  <script src="../js/login.js"></script>
</body>
</html>
