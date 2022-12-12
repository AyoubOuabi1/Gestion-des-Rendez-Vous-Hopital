<?php
spl_autoload_register(function ($className) {
    $file = '../Classes/' . $className . '.php';
    require $file;
});

//addDoctor();
$functionName=$_GET['functionName'];

if($functionName="delete"){
    delete();
}else {
    addDoctor();
}

function delete(){
    $id=$_GET["id"];
    if(Doctor::deleteDoctor($id)){
        echo 'true';
    }
}




function addDoctor(){
   
        $doctor=new Doctor($_POST["cin"], $_POST["Ncode"], $_POST["speciality"], $_POST["pNumber"],$_POST["firstName"], $_POST["lastName"], $_POST["email"], $_POST["password"]);
        if($doctor->addDoctor()){
            echo 'true';
        }else {
            echo 'false';
        }
}