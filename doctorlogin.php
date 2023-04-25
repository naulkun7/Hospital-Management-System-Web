
<!--
1. This section is introduced after creating Login for Administrator(s) with the ff features
 - Add other Admin
 - Have dashboard to display the total number of administrators
 -delete administrators
 - Update User Profile (Username, password, image)

 2. Now for this section we doing the ff

 - Introduce basic HTML tags with body.
 -include the (header.php) in the body tag.
 -go inside (include folder)
 - scroll to the (nav links) and link the (doctorlogin.php) to the link for (Doctor)

 3. Add background image to the body tag
 4. add user inputs in a form that accept ( username and password)
 5. Provide a redirect form link below the doctor application form login, which will be clicked by a new User to redirect user to (apply.php) to create an account.
 6. (apply.php) has a form which takes (FirstName,Surname,UserName,Email,Phone Number,Select Country,Password,Confirm Password,)
     - Create a table for (No.6) & name the database table as (doctors) with columns as (id,firstname,surname,username,email,gender,phone,country,password,salary,data_reg,
       status,profile)
     - Go inside your table (doctors) in the database, click INSERT and write query.
     -Click SQL
     -click INSERT BUTTON
     -Copy everything inside the first bracket closed ,from firstName to PROFILE
      -(`firstname`, `surname`, `username`, `email`, `gender`, `phone`, `country`, `password`, `salary`, `data_reg`, `status`, `profile`)
      - Remove the quotes to, ((firstname,surname,username,email,gender,phone,country,password,salary,data_reg,status,profile))

 7.  Now, after a new User (Doctor) has registered using (apply.php) , he has to come to (doctorlogin.php) to login
 - User is suppose to enter with (username) & (password)
 - When User enters data into this form there are checks I do
    . I set the login form button by passing the (name) given to the input tag
    . Create variables within the scope to accept the various inputs the USER supply in this form
    . create an array and pass it into a variable, which will be used to check for error in the form inputs.
    . Write a query to SELECT from the TABLE the row that contains the input from the Customer , and compare the two.
    . Save the query in a variable
    . Pass the mysqli query which is saved in a variable and passed into PHP Method mysqli_query(), which takes two parameters which are (database connection variable,
      query variable)
    . Now, check if each form field is empty by passing each variable which is to contain the input from USER, in an IF condition
    . In the scope of the above IF condition, we use the variable for the array and give it an array key and pass your error message to it

 8. After checking the content of each variable for the form, we use the variable that contains the array of rows from the database table, to check
 a. we write an ELSEIF condition to check the status of the USER before proceeding to given assess to the User.
 b.  So assuming the status is not pending, the code will move to the next IF CONDITION and compare the USER input with what is in the database table,IF Matches then we
     give access

9. A condition to set the Error variable is written to allow keep the array variable to  in another variable which will be called within the html to display error if any.


-->

<?php

session_start();
include("include/connection.php");

if (isset($_POST['login'])){

    $uname = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();
// sql injection prone
    $q = "SELECT * FROM doctors WHERE username='$uname' AND password='$password'";
    $qq = mysqli_query($con,$q);

    $row = mysqli_fetch_array($qq);
  
    /*var_dump($qq);
    var_dump($_POST)*/;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Doctor Login Page</title>
</head>
<body style="background-image: url(img/hospBuild.jpg); background-size: cover; background-repeat: no-repeat">
<?php

 include("include/header.php")
?>

        <div class="container-fluid">
              <div class="col-md-12">
                   <div class="row">
                         <div class="col-md-3">

                         </div>
                       <div class="col-md-6 jumbotron my-5">
                             <h5 class="text-center my-5">Doctors Login</h5>
                             <div>
                                 <?php echo $show?>
                             </div>
                           <form method="post" action="">
                               <div class="form-group">
                                   <label for="">Username</label>
                                   <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                               </div>

                               <div class="form-group">
                                   <label for="">Password</label>
                                   <input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Username  ">
                               </div>

                               <input type="submit" name="login" class="btn btn-success" value="Login">

                               <p>I don't have an account <a href="apply.php">Apply Now..!!</a></p>

                           </form>
                       </div>
                   </div>
              </div>
        </div>
</body>
</html>
