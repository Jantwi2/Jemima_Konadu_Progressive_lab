<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['customer_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      height: 100vh;
    }

    /* Navbar styles */
    .navbar {
      background: #007BFF;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      height: 60px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .navbar .logo {
      font-size: 20px;
      font-weight: bold;
      color: #fff;
    }

    .navbar .nav-links {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background 0.3s ease;
    }

    .navbar a:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    .navbar .logout {
      background: #dc3545;
      font-weight: bold;
    }

    .navbar .logout:hover {
      background: #a71d2a;
    }

    /* Content */
    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 60px);
      text-align: center;
    }

    .content h1 {
      color: #333;
      font-size: 28px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">E-commerce Lab</div>
    <div class="nav-links">
      <!-- Add more menu links here later -->
      <a href="actions/logout.php" class="logout">Logout</a>
    </div>
  </div>

  <div class="content">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['customer_name']); ?>!</h1>
  </div>
</body>
</html>
