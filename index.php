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

  <div class="section9">
    <div class="container">
      <div class="row row2">
        <div class="col-lg-4 col-md-6">
          <div class="tag" id="moreinfo">
            <img src="./img/moreinfo.jpg" alt="blog-item-01" />
            <div class="tag-content">
              <a href="#" class="title">More information</a>
              <p class="desc">
                Click on the button to read report and all features of our project
              </p>
              <a href="#" class="button button-yellow">READ MORE</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="tag" id="register">
            <img src="./img/registerpatient.jpg" alt="blog-item-01" alt="blog-item-02" />
            <div class="tag-content">
              <a href="#" class="title">Register Patient</a>
              <p class="desc">
                Create an account which we can support and take good care of you.
              </p>
              <a href="./nav/patientaccount.php" class="button button-yellow">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="tag">
            <img src="./img/contactus.jpg" alt="blog-item-01" alt="blog-item-02" />

            <div class="tag-content">
              <a href="#" class="title">Contact Us</a>
              <p class="desc">
                All information about us!
              </p>
              <a href="#" class="button button-yellow">DANGER</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>