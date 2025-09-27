<?php
require_once 'settings/core.php';
?>
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

    .nav {
      width: 100%;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
      padding: 16px 0;
      position: fixed;
      top: 0;
      left: 0;
      text-align: center;
      z-index: 100;
    }
    .nav .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 0 8px;
      border: none;
      border-radius: 6px;
      background-color: #007BFF;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      text-decoration: none;
    }
    .nav .btn:hover {
      background-color: #0056b3;
      transform: translateY(-2px);
    }
    .nav .btn:active {
      transform: translateY(0);
    }

    .card {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 300px;
      margin-top: 100px;
    }

    h1 {
      margin-bottom: 10px;
      color: #333;
    }

    p {
      margin-bottom: 20px;
      color: #555;
    }
  </style>
</head>
<body>
  <nav class="nav">
    <?php if (!isLoggedIn()): ?>
      <a href="view/register.php" class="btn">Register</a>
      <a href="view/login.php" class="btn">Login</a>
    <?php elseif (isAdmin()): ?>
      <a href="actions/logout.php" class="btn">Logout</a>
      <a href="admin/category.php" class="btn">Category</a>
    <?php else: ?>
      <a href="actions/logout.php" class="btn">Logout</a>
    <?php endif; ?>
  </nav>
  <div class="card">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['customer_name']); ?>!</h1>
  </div>
</body>
</html>