<?php
spl_autoload_register(function($className) {
    $file = '../Classes'.$className.'.php';
    if (file_exists($file)) {
        require $file;
    }
});
 if (isset($_POST["submit"]))
{     //Grapping the data
    $email = $_POST["fLoginEmail"];
    $password = $_POST["fLoginPsd"];
  
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
