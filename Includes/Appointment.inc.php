<?php
spl_autoload_register(function($className) {
    $file = '../Classes/'.$className.'.php';
    require $file;

});
getAppointmentData();
    $functionNam=$_POST['functionName'];
    if($functionNam=="getlAppointement"){

    }else if ($functionNam=="canculAppointement"){
        canculAppointement();
    }

    function getAppointmentData() {
        $arr= array();
        foreach(Appointement::getlAppointement() as $row){
            $arr[]=array('id'=>$row['id'],
                'sessionid'=>$row['sessionid'],
                'appdate'=>$row['appdate'],
                'patid'=>$row['patid'],
                'doctorid'=>$row['doctorid'],
                'doctorFirstName'=>$row['doctorFirstName'],
                'DoctorLastName'=>$row['DoctorLastName'],
                'PatientFirstName'=>$row['PatientFirstName'],
                'PatientLastName'=>$row['PatientLastName'],
                'title'=>$row['title'],
                'sessdate'=>$row['sessdate']
            );

        }

        $data['AppointementData']=$arr;
        echo json_encode($data);
    }
    function canculAppointement(){
        $id=$_POST['appId'];
        if(Appointement::canculAppointement($id)){
            echo "true";
        }else{
            echo "false";
        }
    }
