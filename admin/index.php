<?php

session_start();

?>

<!--
   1. create a file inside admin folder and name it (index.php)
   2. Create a DIV class of container-fluid. for DIV tag
      -inside it create a DIV class of 12-column division
      -Inside the 12-column division, create a row
      -Inside the row, divided the division into two columns (col-md-2 with style of margin-left:-30px) and (col-md-10)
      - Inside (col-md-2), created a DIV tag with class (list-group and bg-info) and a style of height 90vh
        .inside the DIV, created anchor tags <a></a> with class elements like (list-group-item)(list-group-item-action)
         (bg-info)(text-center)(text-white), also create a redirect reference called href (ex: href="index.php") inside the <a></a>
         NB: This <a></a>, can be duplicated as many as you want to list
   3.  You can create another file and name it (sidenav.php) and paste your code in it and reference the file here as seen as

       include("sidenav.php");
        ?>

   4.  Inside the (col-md-10) division, another column of 12 division (col-md-10) was created to ensure whatever display set in it
       will take the full length of (col-md-10).
       -inside the (col-md-12), a row class was created
       - now, inside the row class, we have to divide the (col-md-12) into the number of division we want (that mean any division base on 12 divisible of 2)
       . The first division was 3 (col-md-3), and given class of (bg-success mx-2) and style (height: 130px)
       .. The second division was 3 (col-md-3), and given class of (bg-info mx-2) and style (height: 130px)
        .. The third division was 3 (col-md-3), and given class of (bg-warning mx-2) and style (height: 130px)
        .. The first division was 3 (col-md-3), and given class of (bg-danger mx-2) and style (height: 130px)
        - Now, inside of each divsion of 3 (col-md-3), we create another division of 12 (col-md-12) in it to ensure the display fit well inside the division of 3
          .And create a class of ROW
           . Inside the ROW create divisions that will match the 12 division set, (col-md-9) and (col-md-3)
           .Each of the division will contain a text inside
  5. Write PHP Code inside where you want to display the records in (col-md-8) inside the (col-md-10)
     - include the PHP connection file
     - use mysqli_query, to connect to the database and query from the table
     - use mysqli_num_rows to check available data in the table and display the variable


-->

<!DOCTYPE html>
<html lang="en">
      <head>
           <title>Admin Dasboard</title>
      </head>
<body>

<?php

/*including the header file which contains the menus. Double dots means (step out of its folder, & access the header.php file in another folder*/
include("../include/header.php");
/*including the header file which contains the menus. Double dots means (step out of its folder, & access the header.php file in another folder*/
include("../include/connection.php");
?>


<!--The container-fluid occupies full width of the screen -->
<div class="container-fluid">
      <div class="col-md-12"><!--setting the element to the total length columns of a browser-->
          <!--.-->
          <div class="row">
                 <!---->
                 <div class="col-md-2" style="margin-left: -30px">

                     <!--Sidenav-->
                    <!-- <div class="list-group bg-info" style="height: 90vh">
                         <a href="index.php" class="list-group-item list-group-item-action bg-info text-center">Dashboard</a>
                         <a href="admin.php" class="list-group-item list-group-item-action bg-info text-center">Administrators</a>
                         <a href="" class="list-group-item list-group-item-action bg-info text-center">Doctors</a>
                         <a href="" class="list-group-item list-group-item-action bg-info text-center">Patients</a>
                     </div>-->
                     <!--END Sidenav-->
                     <?php
                        /*pasted the above in a different file.*/
                         include("sidenav.php");
                     ?>


                 </div>

              <!--This is the second column created -->
              <div class="col-md-10">
                     <!--Giving a title description to Columns-->
                     <h4 class="my-2">Admin Dashboard</h4>

                  <!--Inside the 2nd Column for the dashboard, we set a column divider to total 12-->
                     <div class="col-md-12 my-1">
                         <!--bootstrap row to arrange items in rows-->
                          <div class="row">
                              <!--First row for the parent column is set to Medium 3, gave it a success colour, and an interval of 2px-->
                               <div class="col-md-3 bg-success mx-2" style=" height: 130px">
                                     <!---->
                                      <div class="col-md-12">
                                            <div class="row">
                                                  <div class="col-md-8">
                                                      <?php
                                                         $ad = mysqli_query($con, "SELECT * FROM admin");
                                                         $num = mysqli_num_rows($ad);
                                                      ?>
                                                        <!--<h5 class="my-2 text-white" style="font-size:30px">0</h5>-->
                                                      <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num?></h5>
                                                        <h5>Total</h5>
                                                        <h5>Admin</h5>
                                                  </div>

                                                   <div class="col-md-4">
                                                       <a href="admin.php"><i class="fa fa-users-cog fa-3x my-4" style="color: white"></i></a>
                                                   </div>

                                            </div>
                                      </div>
                               </div>

                              <div class="col-md-3 bg-info mx-2" style="height: 130px">
                                       <!--After Accepting/rejecting Application using the code in (ajax_approve.php)
                                           (ajax_reject.php)(ajax_show_jo_request.php) to either (reject) or (accept),
                                            it will update each of the request in the database table named (doctors) from (Pending) to (Approve)
                                            or (Pending) to (Reject)

                                        -->
                                  <?php
                                     $doctor = mysqli_query($con, "SELECT * FROM doctors WHERE status='Approved'");
                                     $num2  = mysqli_num_rows($doctor);
                                  ?>
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">
                                              <!--<h5 class="my-2 text-white" style="font-size:30px">0</h5>-->
                                              <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num2?></h5>
                                              <h5>Total</h5>
                                              <h5>Doctors</h5>
                                          </div>

                                          <div class="col-md-4">
                                              <a href="doctor.php"><i class="fa fa-user-md fa-3x my-4" style="color: white"></i></a>
                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col-md-3 bg-warning mx-2" style="height: 130px">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">
                                              <?php
                                                  $p = mysqli_query($con, "SELECT * FROM patient");
                                                  $pp = mysqli_num_rows($p);
                                              ?>

                                              <h5 class="my-2 text-white" style="font-size:30px"><?php echo $pp?></h5>
                                              <h5>Total</h5>
                                              <h5>Patients</h5>
                                          </div>

                                          <div class="col-md-4">
                                              <a href="patient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white"></i></a>
                                          </div>

                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px">

                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">

                                              <?php
                                                $re = mysqli_query($con, "SELECT * FROM report");

                                                $rep = mysqli_num_rows($re);
                                              ?>
                                              <h5 class="my-2 text-white" style="font-size:30px"><?php echo $rep ?></h5>
                                              <h5>Total</h5>
                                              <h5>Reports</h5>
                                          </div>

                                          <div class="col-md-4">
                                              <a href="report.php"><i class="fa fa-flag fa-3x my-4" style="color: white"></i></a>
                                          </div>

                                      </div>
                                  </div>

                              </div>

                              <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px">
                                  <!--This section in regard to PHP code is was written after finishing (doctorlogin.php) & (apply.php)-->
                                  <?php

                                     $job = mysqli_query($con, "SELECT * FROM doctors WHERE status='Pending'");
                                     $num1 = mysqli_num_rows($job);

                                     ?>

                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">
                                              <!--<h5 class="my-2 text-white" style="font-size:30px">0</h5>-->
                                              <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num1?></h5>
                                              <h5>Total</h5>
                                              <h5>Job Request</h5>
                                          </div>

                                          <div class="col-md-4">
                                              <a href="job_request.php"><i class="fa fa-book-open fa-3x my-4" style="color: white"></i></a>
                                          </div>

                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">

                                               <?php

                                                $in = mysqli_query($con, "SELECT sum(amount_paid) as profit FROM income");
                                                $row = mysqli_fetch_array($in);
                                                $inc = $row['profit'];
                                              ?>
                                              <h5 class="my-2 text-white" style="font-size:30px"><?php echo "GHC $inc"; ?></h5>
                                              <h5>Total</h5>
                                              <h5>Income</h5>
                                          </div>

                                          <div class="col-md-4">
                                              <a href="income.php"><i class="fa fa-money-check-alt fa-3x my-4" style="color: white"></i></a>
                                          </div>

                                      </div>
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







.
