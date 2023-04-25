<?php
session_start();

/*
 * 1. The Session was first initiated in adminlogin.php, which is the file for ADMIN LOGIN FORM, which keeps in session the user's name
 * 2.logout here is to SET the SESSION Variable as it contains a VALUE, and unset the Session.
 * 3. Redirect the Page from the (adminlogin.php), as before logout the (AdminPage) would have been in session, so you logout to (main webpage)
 *    (index.php)
 * */
if (isset($_SESSION['admin'])){

    unset($_SESSION['admin']);

    header("Location:../index.php");
}


?>
