<?php
spl_autoload_register(function($className) {
    $file = '../Classes'.$className.'.php';
    if (file_exists($file)) {
        require $file;
    }
});
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

}
