<?php 
include "DbConnection.php";
class Signup { 
    public static function setUser($cin, $fname, $lname, $teleNumber, $email, $password, $address,  $date)
    {
        $conn=DbConnection::connect();
        
        $stmt = $conn->prepare('INSERT INTO patient(`cin`, `firstName`, `lastName`, `teleNumber`,`email`, `password`, `address`, `birthday`) VALUES (?,?,?,?,?,?,?,?);');
        // $hashedpwd= password_hash($password, PASSWORD_DEFAULT);

        $stmt->execute(array($cin,$fname, $lname,$teleNumber, $email, $password, $address,  $date));
            header("location:../login.php");
        exit();
      // print_r('error');
    }

}





?>