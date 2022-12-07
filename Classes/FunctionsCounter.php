<?php

class FunctionsCounter
{
    public static function getTotalDoctor() {
        $conn=DbConnection::connect();
        $sql=$conn->prepare("select count(*) as doctorCounter from doctor ");
        $sql->execute();
        //$sql->fetchAll(PDO::FETCH_ASSOC);
        $rtn=0;
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row){
            $rtn=$row['doctorCounter'];
        }
        $conn=null;
        return  $rtn;

    }

    public static function getTotalUsers(){
        $conn = DbConnection::connect();
        $sql=$conn->prepare("select count(*) as patientCounter from patients ");
        $sql->execute();
        $rtn=0;
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row){
            $rtn=$row['patientCounter'];
        }
        $conn=null;
        return $rtn;
    }
    public static function getTotalSession(){
        $conn = DbConnection::connect();
        $sql=$conn->prepare("SELECT count(*) as sessionCounter FROM `session` where date(sessdate) = CURDATE()");
        $sql->execute();
        $rtn=0;
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $row){
            $rtn=$row['sessionCounter'];
        }
        $conn=null;
        return $rtn;


    }
}