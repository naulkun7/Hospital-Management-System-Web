<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Name of the website</title>
  <style>
  /* .bg-sidebar {
    background-color: #0a8c9c;
  } */
  .bg-sidebar {
    background-color: #14a2b8;
  }

  .bg-sidebar:hover {
    background-color: #14a2b8;
  }

  .bg-main {
    background-color: #14a2b8;
  }

  .list-group {
    border-radius: 0;
  }

  .list-group-item {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border: 0px;
    margin: 1px 0;
  }
  </style>
</head>

<body>
  <!--Sidenav-->
  <div class="list-group bg-main" style="height: 100vh">
    <a href="index.php" class="list-group-item list-group-item-action bg-sidebar text-white">Dashboard</a>
    <a href="profile.php" class="list-group-item list-group-item-action bg-sidebar text-white">Profile</a>
    <a href="admin.php" class="list-group-item list-group-item-action bg-sidebar text-white">Administrators</a>
    <a href="doctor.php" class="list-group-item list-group-item-action bg-sidebar text-white">Doctors</a>
    <a href="patient.php" class="list-group-item list-group-item-action bg-sidebar text-white">Patients</a>
  </div>
  <!--END Sidenav-->
</body>

</html>