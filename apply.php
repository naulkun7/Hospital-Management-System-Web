<?php
include "include/connection.php"; /*Referencing The Database*/

if (isset($_POST["apply"])) {
    $firstname =
        $_POST[
            "fname"
        ]; /*Create variable to save each INPUT from this field. What's in the $_POST array is the (name) given to this field..Repeat this for all field*/
    $surname = $_POST["sname"];
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $password = $_POST["pass"];
    $confirm_password = $_POST["con_pass"];

    $error = []; /*Create a Variable to save an ARRAY Method in it. */

    if (empty($firstname)) {
        $error["apply"] = "Enter Firstname";
    } elseif (empty($surname)) {
        $error["apply"] = "Enter Surname";
    } elseif (empty($username)) {
        $error["apply"] = "Enter Username";
    } elseif (empty($email)) {
        $error["apply"] = "Enter Email Address";
    } elseif ($gender == "") {
        $error["apply"] = "Select Your Gender";
    } elseif (empty($phone)) {
        $error["apply"] = "Enter Phone Number";
    } elseif ($country == "") {
        $error["apply"] = "Select Country";
    } elseif (empty($password)) {
        $error["apply"] = "Enter Password";
    } elseif ($confirm_password != $password) {
        $error["apply"] = "Both Password do not match";
    }

    if (count($error) == 0) {
        $query = "INSERT INTO doctors(firstname,surname,username,email,gender,phone,country,password,salary,data_reg,status,profile) VALUES('$firstname',
                                                '$surname','$username', '$email','$gender','$phone','$country','$password', '0', NOW(), 'Pending','doctor.jpg') ";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>alert('You have successfully Applied')</script>";

            header("Location: doctorlogin.php");
        } else {
            echo "<script>alert('Failed')</script>";
        }
    }
}

if (isset($error["apply"])) {
    $s = $error["apply"];

    $show = "<h5 class='text-center alert alert-danger'>$s</h5>";
} else {
    $show = "";
}
?>


<!DOCTYPE html>
<html>

<body style="background-image: url(img/dogtor.jpg); background-size: cover; background-repeat: no-repeat">

  <!--Referencing the HEADER in this Page-->
  <?php include "include/header.php"; ?>
  <!--Creating Main Fluid Container to contain The entire content-->
  <div class="container-fluid">
    <div class="col-md-12">
      <!--SETTING The Page to standard of 12px-->
      <div class="row">
        <!--After setting Page seen Above, You need to set ROW to allow you divide the 12px into sections-->
        <div class="col-md-3">
          <!--The Division of 12px for this section if (3px & 6px)-->

        </div>
        <div class="col-md-6 jumbotron">
          <!--2nd section if (6px) which will contain the Application Form for DOCTORS-->
          <h5 class="text-center-center">Apply Now..!!</h5>
          <!--Text Description for the Form & Centered-->
          <div>
            <?php echo $show; ?>
          </div>
          <form method="post" action="">
            <!--Form tag using HTTP Request(POST) which will POST Data into the database Table siting on the serve  -->
            <div class="form-group">
              <!--1st Form Group-->
              <label for="">First Name</label>
              <!--Label Text Name form-->

              <!--The value introduced in the input tag allows users to have whatever they typed in the field showing assuming they make error during typing and needs changes-->
              <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname"
                value="<?php if (isset($_POST["fname"])) {
                    echo $_POST["fname"];
                } ?>">
            </div>

            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname" value="<?php if (isset($_POST["sname"])) {
                    echo $_POST["sname"];
                } ?>">
            </div>

            <div class="form-group">
              <label for="">UserName</label>
              <input type="text" pattern="^[^\s]*$" name="uname" class="form-control" autocomplete="off"
                placeholder="Enter Username" value="<?php if (isset($_POST["uname"])) {
                    echo $_POST["uname"];
                } ?>">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter Email" value="<?php if (isset($_POST["email"])) {
                    echo $_POST["email"];
                } ?>">
            </div>

            <div class="form-group">
              <label for="">Select Gender</label>
              <select name="gender" id="" class="form-control">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Male">Female</option>
                <option value="Male">Other</option>
              </select>
            </div>


            <div class="form-group">
              <label for="">Phone Number </label>
              <input type="number" name="phone" pattern="[^0-9]+" class="form-control" autocomplete="off"
                placeholder="Enter Phone Number" value="<?php if (isset($_POST["phone"])) {
                    echo $_POST["phone"];
                } ?>">
            </div>

            <div class="form-group">
              <label for="">Select Country</label>
              <select name="country" id="" class="form-control">
                <option value="">Select Country</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="Mexico">Mexico</option>
                <option value="Brazil">Brazil</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Spain">Spain</option>
                <option value="Japan">Japan</option>
                <option value="Australia">Australia</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">
            </div>

            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="password" name="con_pass" class="form-control" autocomplete="off"
                placeholder="Enter Confirm Password">
            </div>

            <input type="submit" name="apply" value="Apply Now" class="btn btn-success">

            <p>I already have an account <a href="doctorlogin.php">Click Here..!!</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

</html>