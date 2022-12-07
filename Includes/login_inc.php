<?php
 if (isset($_POST["submit"]))
{     //Grapping the data
    $email = $_POST["fLoginEmail"];
    $password = $_POST["fLoginPsd"];
  
    include "../Classes/login_classes.php";
    if(login_classes::getUser($email, $password)==1){
        echo '</br> admin';
        // header("location:dashboard.php");
    } else if (login_classes::getUser($email, $password) == 0) {
        echo '</br> user';
    } else if (login_classes::getUser($email, $password) == 2) {
        echo '</br> doctor';
    }else{
        echo"Rien";
    }
    
}
