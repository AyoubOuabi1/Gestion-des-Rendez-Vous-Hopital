<?php 
include "DbConnection.php";
class login_classes { 
    public static function getUser($email, $password)
    {
        $conn=DbConnection::connect();
        $admin = $conn->prepare('SELECT `email`, `password` FROM admin WHERE email=:mail AND password=:pas;');
        $doctor = $conn->prepare('SELECT `email`, `password` FROM doctor WHERE email=:mail AND password=:pas;');
        $user = $conn->prepare('SELECT `email`, `password` FROM patient WHERE email=:mail AND password=:pas;');

        if($user->execute(array(':mail' => $email, ':pas' => $password))>0){
            return 0;
        } else if($admin->execute(array(':mail' => $email, ':pas' => $password)) > 0) {
            return 1;
        }else if ($doctor->execute(array(':mail' => $email, ':pas' => $password)) > 0){
            return 2;
        }else {
            return 4;
        }  
     }
        
    }
   

   





