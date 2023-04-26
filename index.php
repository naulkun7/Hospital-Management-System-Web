<?php
  include("include/header.php")
?>

<style>
<?php include("asset/css/style.css");
include("asset/css/base.css") ?>
</style>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>HMS Home Page</title>
</head>

<body>
  <div class="section1">
    <div class="row d-flex">
      <div class="col-6">
        <div class="box1">
          <h4 class="title">
            WELCOME TO OUR PROJECT
          </h4>
          <h1 class="sub-title">
            Hospital Management System
          </h1>
          <a class="button button-yellow" href="#">GO</a>
        </div>
      </div>
      <div class="col-6">
        <div class="box2">
          <img src="img/product1.jpg" class="image" alt="picture-sec1">
        </div>
      </div>
    </div>
  </div>



  <div class="container">
    <!--Start setting the browser screen at standard width division of 12-->
    <div class="col-md-12">
      <div class="row d-flex justify-content-center">
        <div class="col-md-3 mx-1 shadow">
          <h5 class="text-center">Click on the button for more information</h5>
          <!--Anchor Tag to make the button clickable and to redirect the link -->
          <a href="#">
            <button class="btn btn-success my-3" style="margin-left: 20%">More Information</button>
          </a>

        </div>

        <!--2nd division set at (col-md-3) and margin/gap in horizontal line set to (mx-1), and adding bootstrap (shadow) to element -->
        <div class="col-md-3 mx-1 shadow">
          <!-- design this division with an image   -->
          <img src="img/patient.jpeg" alt="" style="width: 100%; height: 190px">
          <!--a description for the image, and bootstrap class to center the image-->
          <h5 class="text-center">Create Account so that we can take good care of you</h5>
          <!--Anchor Tag to make the button clickable and to redirect the link -->
          <a href="./nav/patientaccount.php">
            <button class="btn btn-success my-3" style="margin-left: 30%">Create Account..!!</button>
          </a>

        </div>

        <!--3rd division set at (col-md-3) and margin/gap in horizontal line set to (mx-1), and adding bootstrap (shadow) to element -->
        <div class="col-md-3 mx-1 shadow">
          <!-- design this division with an image   -->
          <img src="img/hospital.jpeg" alt="" style="width: 100%; height: 190px">
          <!--a description for the image, and bootstrap class to center the image-->
          <h5 class="text-center">We are looking for Doctors</h5>
          <a href="./nav/apply.php">
            <button class="btn btn-success my-3" style="margin-left: 30%">Apply Now..!!</button>
          </a>
        </div>
      </div>
    </div>
    <!--Start setting the browser screen at standard width division of 12-->
  </div>
</body>

</html>