<?php
spl_autoload_register(function($className) {
    $file = '../Classes/'.$className.'.php';
    require $file;

});
    $functionNam=$_POST['functionName'];
    if($functionNam=="getlAppointement"){
        getAppointmentData();
    }else if ($functionNam=="canculAppointement"){
        canculAppointement();
    }

    function getAppointmentData() {
        $arr= Array();
        foreach(Appointement::getlAppointement() as $row){
            $arr=array('id'=>$row['id'],
                'sessionid'=>$row['sessionid'],
                'appdate'=>$row['appdate'],
                'patid'=>$row['patid'],
                'doctorid'=>$row['doctorid'],
                'doctorFirstName'=>$row['doctorFirstName'],
                'DoctorLastName'=>$row['DoctorLastName'],
                'PatientFirstName'=>$row['PatientFirstName'],
                'PatientLastName'=>$row['PatientLastName'],
                'title'=>$row['title']
            );

        }

        $data['AppointementData']=$arr;
        echo json_encode($data);
    }
    function canculAppointement(){
        $id=$_GET['appId'];
        if(Appointement::canculAppointement($id)){
            echo "true";
        }else{
            echo "false";
        };
    }
