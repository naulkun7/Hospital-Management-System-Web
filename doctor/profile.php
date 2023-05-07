<?php
session_start();

error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctors Profile Page</title>
</head>

<body>
  <?php include "../include/header.php"; ?>

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left: -30px">
          <?php
          include "sidenav.php";
          include "../include/connection.php";
          ?>
        </div>
        <div class="col-md-10">
          <div class="container-fluid">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <?php
                  $doc = $_SESSION["doctor"];
                  $query = "SELECT * FROM doctors WHERE username='$doc'";

                  $res = mysqli_query($con, $query);
                  $row = mysqli_fetch_array($res);

                  //print_r($row);

                  if (isset($_POST["upload"])) {
                      $img = $_FILES["img"]["name"];
                      if (empty($img)) {
                      } else {
                          $query = "UPDATE doctors SET profile='$img' WHERE username='$doc'";
                          $res = mysqli_query($con, $query);

                          //print_r($res);

                          if ($res) {
                              move_uploaded_file(
                                  $_FILES["img"]["tmp_name"],
                                  "img/$img"
                              );
                          }
                      }
                  }
                  ?>

                  <form action="" method="post" enctype="multipart/form-data">
                    <?php echo "<img src='img/" .
                    $row["profile"] .
                    "' alt='joy' style='height: auto; width:200px; object-fit: cover;'>"; ?>
                    <input type="file" name="img" class="form-control my-2">
                    <input type="submit" name="upload" class="btn btn-info" value="Update Profile"
                      style="margin-bottom: 30px">
                  </form>

                  <div class="my-3">
                    <table class="table table-bordered">

                      <tr>
                        <th colspan="2" class="text-center">Details</th>
                      </tr>

                      <tr>
                        <td>Firstname</td>
                        <td><?php echo $row["firstname"]; ?></td>
                      </tr>

                      <tr>
                        <td>Surname</td>
                        <td><?php echo $row["surname"]; ?></td>
                      </tr>

                      <tr>
                        <td>Firstname</td>
                        <td><?php echo $row["username"]; ?></td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><?php echo $row["email"]; ?></td>
                      </tr>

                      <tr>
                        <td>Phone</td>
                        <td><?php echo $row["phone"]; ?></td>
                      </tr>

                      <tr>
                        <td>Gender</td>
                        <td><?php echo $row["gender"]; ?></td>
                      </tr>

                      <tr>
                        <td>Country</td>
                        <td><?php echo $row["country"]; ?></td>
                      </tr>

                      <tr>
                        <td>Salary</td>
                        <td><?php echo $row["salary"]. "VND" . ""; ?></td>
                      </tr>



                    </table>
                  </div>

                </div>
                <div class="col-md-6">
                  <h5 class="text-center my-2">Change Username</h5>

                  <?php if (isset($_POST["change_uname"])) {
                      $uname = $_POST["uname"];
                      if (empty($uname)) {
                      } else {
                          $query = "UPDATE doctors SET username='$uname' WHERE username='$doc'";
                          $res = mysqli_query($con, $query);
                          if ($res) {
                              $_SESSION["doctor"] = $uname;
                          }
                      }
                  } ?>
                  <form action="" method="post">
                    <label for="">Change Username</label>
                    <input type="text" name="uname" class="form-control" autocomplete="off"
                      placeholder="Enter Username">
                    <br>
                    <input type="submit" name="change_uname" class="btn btn-success" value="Change Username">

                  </form>

                  <br><br>
                  <h5 class="text-center my-2">Change Password</h5>

                  <?php if ($_POST["change_pass"]) {
                      $old = $_POST["old_pass"];
                      $new = $_POST["new_pass"];
                      $cons = $_POST["con_pass"];

                      $ol = "SELECT * FROM doctors WHERE username='$doc'";
                      $ols = mysqli_query($con, $ol);
                      $row = mysqli_fetch_array($ols);

                      if ($old != $row["password"]) {
                      } elseif (empty($new)) {
                      } elseif ($cons != $new) {
                      } else {
                          $query = "UPDATE doctors SET password='$new'WHERE username='$doc' ";
                          mysqli_query($con, $query);
                      }
                  } ?>
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="">Old Password</label>
                      <input type="password" name="old_pass" class="form-control" autocomplete="off"
                        placeholder="Enter Old Password">
                    </div>
                    <div class="form-group ">
                      <label for="">New Password</label>
                      <input type="password" name="new_pass" class="form-control" autocomplete="off"
                        placeholder="Enter New Password">
                    </div>

                    <div class="form-group ">
                      <label for="">Confirm Password</label>
                      <input type="password" name="con_pass" class="form-control" autocomplete="off"
                        placeholder="Enter Confirm Password">

                    </div>
                    <input type="submit" name="change_pass" class="btn btn-info" value="Change Password">

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>