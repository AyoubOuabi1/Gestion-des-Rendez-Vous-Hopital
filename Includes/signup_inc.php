<?php
include "../Classes/Signup_classes.php";

 if (isset($_POST["submit"]))
{     //Grapping the data
    $fname= $_POST["firstName"];
    $lname=$_POST["lastName"];
    $telephone = $_POST["telephone"];
    $address = $_POST["fAddress"];
    $cin = $_POST["fCin"];
    $date = $_POST["fDate"];
    $email = $_POST["fSgnEmail"];
    $password = $_POST["fSgnpsd"];
    //Instantiate SignupContr class
  Signup::setUser($cin, $fname, $lname, $telephone, $email, $password, $address,  $date);
    // Runnig error handerls and user signup
    $signupp-> signupUser();
    //Going to back to front page
//  header("location:../index.php?error=one");
}




?>