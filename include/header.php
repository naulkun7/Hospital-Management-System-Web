<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hospital Database Management</title>
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-info bg-info">
    <h5 class="text-white">Hospital Management System</h5>
    <div class="mr-auto"></div>
    <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["admin"])) {
          $user = $_SESSION["admin"];
          echo '
            <li class="nav-item"><a href="./adminlogin.php" class="nav-link text-white">' . $user . '</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
          ';
        } elseif (isset($_SESSION["doctor"])) {
          $user = $_SESSION["doctor"];
          echo '
            <li class="nav-item"><a href="./adminlogin.php" class="nav-link text-white">' . $user . '</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
          ';
        } elseif (isset($_SESSION["patient"])) {
          $user = $_SESSION["patient"];
          echo '
            <li class="nav-item"><a href="./adminlogin.php" class="nav-link text-white">' . $user . '</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">logout</a></li>
          ';
        } else {
          echo '
            <li class="nav-item"><a href="index.php" class="nav-link text-white">Home</a></li>     
            <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">Admin</a></li>
            <li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></li>
            <li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>
          ';
        }
      ?>
    </ul>
  </nav>
</body>

</html>