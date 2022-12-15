<?php
require '../Classes/User.php';
if (isset($_POST["submit"]))
{     //Grapping the data
    $email = $_POST["fLoginEmail"];
    $password = $_POST["fLoginPsd"];
    if(User::getUser($email, $password)==0){
        header("location: http://localhost/Gestion-des-Rendez-Vous-Hopital/Dashboard/admin/Dashboard.php");
        // header("location:dashboard.php");
    } else if (User::getUser($email, $password) == 1) {
        header("location: http://localhost/Gestion-des-Rendez-Vous-Hopital/Dashboard/patient/Dashboard.php");
    } else if (User::getUser($email, $password) == 2) {
        header("location: http://localhost/Gestion-des-Rendez-Vous-Hopital/Dashboard/doctor/Dashboard.php");
    }else{
        echo"Rien";
    }

}