<?php

session_start();
?>



<!DOCTYPE html>
<html>

<head>
  <title>Patient Dashboard</title>
</head>

<body>
  <?php

    include ("../include/header.php");
    include ("../include/connection.php")

?>

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left: -30px">
          <?php
            include ("sidenav.php");
          ?>
        </div>
        <div class="col-md-10">
          <div class="my-3">Patient Dashboard</div>


          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 bg-info" style="height: 150px">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="text-white my-4">My Profile</h5>
                    </div>
                    <div class="col-md-4">
                      <a href="profile.php">
                        <i class="fa fa-user-circle fa-3x my-4" style="color: white"></i>
                      </a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-4 bg-warning" style="height: 150px">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="text-white my-4">Book Appointment</h5>
                    </div>
                    <div class="col-md-4">
                      <a href="appointment.php">
                        <i class="fa fa-calendar fa-3x my-4" style="color: white"></i>
                      </a>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-4 bg-success" style="height: 150px">

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-8">
                      <h5 class="text-white my-4">My Invoice</h5>
                    </div>
                    <div class="col-md-4">
                      <a href="invoice.php">
                        <i class="fa fa-file-invoice-dollar fa-3x my-4" style="color: white"></i>
                      </a>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <?php

                        if (isset($_POST['send'])){

                            $title = $_POST['send'];
                            $message = $_POST['message'];

                            if (empty($title)){

                            }elseif (empty($message)){

                            }else{
                                $user = $_SESSION['patient'];

                                $query = "INSERT INTO report(title,message,username,date_send) VALUES('$title','$message','$user',NOW())";

                                $res = mysqli_query($con, $query);

                                if ($res){

                                    echo "<script>alert('You have sent Your Report')</script>";
                                }
                            }
                        }
                      ?>

          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">

              </div>
              <div class="col-md-12 jumbotron bg-info my-5">
                <h3 class="text-center text-white">Send A Report</h3>
                <form action="" method="post">
                  <label for="" style="font-size:25px; color: #fff"><strong>Title</strong></label>
                  <input type="text" name="title" autocomplete="off" class="form-control"
                    placeholder="Enter Title of the report" style="margin-bottom:40px">
                  <label for="" style="font-size:25px; color: #fff"><strong>Message</strong></label>
                  <textarea type=" text" name="message" autocomplete="off" class="form-control"
                    placeholder="Enter Message" cols="30" rows="10"></textarea>
                  <input type="submit" name="send" value="Send Report" class="btn btn-success my-2">


                </form>

              </div>
            </div>

          </div>


        </div>
      </div>
    </div>

  </div>
</body>

</html>