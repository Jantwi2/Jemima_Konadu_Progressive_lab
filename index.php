<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
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
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 300px;
    }

    h1 {
      margin-bottom: 10px;
      color: #333;
    }

    p {
      margin-bottom: 20px;
      color: #555;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 8px;
      border: none;
      border-radius: 6px;
      background-color: #007BFF;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
    }

    .btn:active {
      transform: translateY(0);
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Welcome</h1>
    <p>Please choose an option:</p>
    <a href="view/login.php" class="btn">Login</a>
    <a href="view/register.php" class="btn">Register</a>
  </div>
</body>
</html>
