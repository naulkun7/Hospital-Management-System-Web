<?php
session_start();
include "include/connection.php";
if (isset($_POST["login"])) {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $error = [];

    if (empty($username)) {
        $error["admin"] = "Enter Username";
    } elseif (empty($password)) {
        $error["admin"] = "Enter Password";
    }

    if (count($error) == 0) {
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>
alert('You have logged in As an Admin')
</script>";

            $_SESSION["admin"] = $username;

            header("Location:admin/index.php");
            exit();
        } else {
            echo "<script>
alert('Invalid Username or Password')
</script>";
        }
    }
}
?>

<style>
<?php include("asset/css/style.css");
include("asset/css/base.css");
include("asset/css/doctorlogin.css") ?>
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Login Page</title>
</head>

<body style="background: #eff2f5">
  <?php include "include/header.php"; ?>
  <div class="section1">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6 jumbotron" style="background: #fff; border-radius:15px; margin-bottom:30px">
            <form method="post" action="" class="my-5">
              <h3>ADMIN LOGIN</h3>
              <div>
                <?php
                if (isset($error["admin"])) {
                    $sh = $error["admin"];
                    $show = "<h4 class='alert alert-danger'>$sh</h4>";
                } else {
                    $show = "";
                }
                echo $show;
                ?>
              </div>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
              </div>

              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" autocomplete="off"
                  placeholder="Enter Username  ">
              </div>

              <input type="submit" name="login" class="btn btn-success button" value="Login">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


<div>

</div>