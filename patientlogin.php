<?php
session_start();

include("include/connection.php");

if (isset($_POST['login'])){

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if (empty($uname)){
        echo "<script>alert('Enter Username')</script>";
    }elseif (empty($pass)){
        echo "<script>alert('Enter Password')</script>";
    }else{

        $query = "SELECT * FROM patient WHERE username='$uname' AND password='$pass'";
        $res = mysqli_query($con, $query);

        if (mysqli_num_rows($res)==1){
            header("Location: patient/index.php");

            $_SESSION['patient'] = $uname;
        }else{
            echo "<script>alert('Invalid Account')</script>";
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
<html>

<head>
  <title>Patient Login Page</title>
</head>

<body style="background-image: url(img/back.jpg); background-repeat: no-repeat; background-size: cover">

  <?php
  include("include/header.php");
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
              <h3>PATIENT LOGIN</h3>
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

              <p>I don't have an account <a href="patientaccount.php"> Register</a></p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>