<?php

session_start();

?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Admin Dasboard</title>
    </head>
    <body>

    <?php


    include("../include/header.php");
    include("include/connection.php");
    ?>



    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px">
                    <?php

                    include("sidenav.php");
                    ?>


                </div>
                <div class="col-md-10">
                    <h4 class="my-2">Admin Dashboard</h4>
                    <div class="col-md-12 my-1">
                        <div class="row">
                            <div class="col-md-3 bg-success mx-2" style="height: 130px">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Admin</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-users-cog fa-3x my-4" style="color: white"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-info mx-2" style="height: 130px">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Doctors</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-user-md fa-3x my-4" style="color: white"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 130px">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Patients</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-procedures fa-3x my-4" style="color: white"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Reports</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-flag fa-3x my-4" style="color: white"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Job Request</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-book-open fa-3x my-4" style="color: white"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="my-2 text-white" style="font-size:30px">0</h5>
                                            <h5>Total</h5>
                                            <h5>Income</h5>
                                        </div>

                                        <div class="col-md-4">
                                            <a href=""><i class="fa fa-money-check-alt fa-3x my-4" style="color: white"></i></a>
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
<?php
