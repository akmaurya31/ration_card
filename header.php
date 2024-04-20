<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  py-1" style="background-image:linear-gradient( 
                to right, #00bfff, #00ffd5);">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">Your Logo</a>

      <!-- Navbar toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav text-sm me-auto">
          <li class="nav-item text-xl">
            <a class="nav-link text-danger text-xl" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rationCard.php">New Ration Card Req</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php">Fill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="cscDropdown" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
              CSC Service
            </a>
            <ul class="dropdown-menu" aria-labelledby="cscDropdown">
              <li><a class="dropdown-item" href="#">Option 1</a></li>
              <li><a class="dropdown-item" href="#">Option 2</a></li>
              <li><a class="dropdown-item" href="#">Option 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rationList.php">Ration List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay.php">Plan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userList.php">User List</a>
          </li>
        </ul>
      </div>

      <!-- Right-side Navbar -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link bg-white text-dark rounded p-1 px-3 font-weight-bold" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</body>
</html>
