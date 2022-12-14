<?php

class Appointement
{
    private $appId;
    private $sessionId;
    private $date;
    private $patientId;

    /**
     * @param $appId
     * @param $sessionId
     * @param $date
     * @param $patientId
     */
    public function __construct($appId, $sessionId, $date, $patientId)
    {
        $this->appId = $appId;
        $this->sessionId = $sessionId;
        $this->date = $date;
        $this->patientId = $patientId;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     */
    public function setSessionId($sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * @param mixed $patientId
     */
    public function setPatientId($patientId): void
    {
        $this->patientId = $patientId;
    }

    public static function canculAppointement($id){
        $con=DbConnection::connect();
        $qry1=$con->prepare("select sessionid from appointmentdata where id ='$id'");
        $qry1->execute();
        $session=$qry1->fetch();
        $qry2=$con->prepare("select maxNumber from session where id='$session'");
        $qry2->execute();
        $max=$qry2->fetch();
        $qry3=$con->prepare("update session set maxNumber='$max'+1 where id='$session'");
        $qry3->execute();
        $qry=$con->prepare("Delete from Appointment where id='$id'");
        $con=null;
        if($qry->execute()){
            return true;
        }else{
            return false;
        }


    }
    public static function getlAppointement(){
        $con=DbConnection::connect();
        $apps=$con->prepare("select * from appointmentdata where date");
        $apps->execute();
        $con=null;
        return $apps->fetchAll();
    }
}