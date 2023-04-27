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
    <div class="container">
      <div class="row d-flex">
        <div class="col-6">
          <div class="box1">
            <h4 class="title">
              WELCOME TO OUR PROJECT
            </h4>
            <h1 class="sub-title">
              Hospital Management System
            </h1>
            <!-- <a class="button button-yellow" href="#">GO</a> -->
          </div>
        </div>
        <div class="col-6">
          <div class="box2">
            <img src="img/product1.jpg" class="image" alt="picture-sec1">
          </div>
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
              <a href="https://drive.google.com/drive/folders/1hQIMl28yTX1B-RTUwq1cX2lPGwLK1wGC"
                class="button button-yellow" target="_blank">READ MORE</a>
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
              <a href="patientaccount.php" class="button button-yellow">REGISTER</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="tag">
            <img src="./img/contactus.jpg" alt="blog-item-01" alt="blog-item-02" />

            <div class="tag-content">
              <a href="#" class="title" target="_blank">Contact Us</a>
              <p class="desc">
                All information <br> about us!
              </p>
              <a href="#" class="button button-yellow">DANGER</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="section3">
    <div class="container">
      <div class="inner-content">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.131719788131!2d106.79904467588085!3d10.877584789277451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8a415a9d221%3A0x550c2b41569376f9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBRdeG7kWMgVOG6vyAtIMSQ4bqhaSBo4buNYyBRdeG7kWMgZ2lhIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1682512870711!5m2!1svi!2s"
          width="600" height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div id="copyright">
            <h3>COPYRIGHT BY COOK GROUP</h3>
          </div>
        </div>
        <div class="col-6">
          <ul id="social">
            <li class="item">
              <a href="https://github.com/naulkun7/SE_Final" target="_blank">
                <i class="fa-brands fa-github">
                  GITHUB
                </i>
              </a>
            </li>
            <li class="item">
              <a href="https://www.facebook.com/ti.nguyen.75685962" target="_blank">
                <i class="fa-brands fa-facebook">
                  FACEBOOK
                </i>
              </a>
            </li>
            <li class="item">
              <a href="tel:115">
                <i class="fa-solid fa-phone">
                  Tel: 115
                </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>

</html>