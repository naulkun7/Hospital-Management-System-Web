<?php

session_start();
include("include/connection.php");

if (isset($_POST['login'])){

    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();

    $q = "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";
    $qq = mysqli_query($con,$q);

    $row = mysqli_fetch_array($qq);
    if (empty($uname)){
        $error['login'] = "Enter Username";
    }elseif(empty($password)){
        $error['login'] = "Enter Password";
    }
    elseif ($row['status'] === "Pending"){
            $error['login'] = "Please Wait For the admin to confirm";
        }elseif ($row['status'] === "Rejected"){
            $error['login'] = "Try again Later";
        }

    /*elseif(!empty($row)) {
    if ($row['status'] === "Pending"){
        $error['login'] = "Please Wait For the admin to confirm";
    }elseif
        ($row['status'] === "Rejected"){
        $error['login'] = "Try again Later";
    }
    }*/

    if (count($error)==0){

        $query = "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res)){

            echo "<script>alert('done')</script>";
            $_SESSION['doctor'] = $uname;
            header("Location:doctor/index.php");
        }else{
            echo "<script>alert('Invalid Account')</script>";
        }

    }
}
if (isset($error['login'])){

    $l = $error['login'];
    $show = "<h5 class='text-center alert alert-danger'>$l</h5>";
}else{
    $show = "";
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
  <title> Doctor Login Page</title>
</head>

<body style="background-image: url(img/hospBuild.jpg); background-size: cover; background-repeat: no-repeat">
  <?php
  include("include/header.php")
  ?>
  <div class="section1">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6 jumbotron" style="background: #fff; border-radius:15px; margin-bottom:30px">
            <div>
              <?php echo $show?>
            </div>
            <form method="post" action="" class="my-5">
              <h3>DOCTOR LOGIN</h3>
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

              <p>I don't have an account <a href="apply.php"> Apply now..!!</a></p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>