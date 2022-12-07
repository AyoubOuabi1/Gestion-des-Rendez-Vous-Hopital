<?php
spl_autoload_register(function($className) {
    $file = '../Classes/'.$className.'.php';
    require $file;

});
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
