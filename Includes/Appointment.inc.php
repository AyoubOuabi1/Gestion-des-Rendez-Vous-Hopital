<?php
    // to autoload classes that use
    spl_autoload_register(function($className) {
        $file = '../Classes/'.$className.'.php';
        require $file;
    });
    //for know the function will be called
    $functionNam=$_POST['functionName'];
    if($functionNam=="getAdminAppointmentData"){
        getAdminAppointmentData();
    }else if ($functionNam=="canculAppointement"){
        canculAppointement();
    }else if ($functionNam=="getDoctorAppointmentData"){
        getDoctorAppointmentData();
    }
    session_start();
    //get All appointment data
    function getAdminAppointmentData() {
        $arr= array();
        foreach(Appointement::getlAppointement() as $row){
            $arr = getArr($row, $arr);
        }
        $data['AppointementData']=$arr;
        echo json_encode($data);
    }
    //get specific appointment by doctor
    function getDoctorAppointmentData() {
        $arr= array();
        foreach(Appointement::getlAppointement() as $row){
            if($_SESSION["doctorId"]==$row["doctorId"]){
                $arr = getArr($row, $arr);
            }

        }
        $data['AppointementData']=$arr;
        echo json_encode($data);
    }
    //function with array in return to stock data
    function getArr(array $row, array $arr)
    {
        $arr[] = array('id' => $row['id'],
            'sessionid' => $row['sessionid'],
            'appdate' => $row['appdate'],
            'patid' => $row['patid'],
            'doctorid' => $row['doctorid'],
            'doctorFirstName' => $row['doctorFirstName'],
            'DoctorLastName' => $row['DoctorLastName'],
            'PatientFirstName' => $row['PatientFirstName'],
            'PatientLastName' => $row['PatientLastName'],
            'title' => $row['title'],
            'sessdate' => $row['sessdate']
        );
        return $arr;
    }
    //to cancel the appointment
    function canculAppointement(){
        $id=$_POST['appId'];
        if(Appointement::canculAppointement($id)){
            echo "true";
        }else{
            echo "false";
        }
    }
