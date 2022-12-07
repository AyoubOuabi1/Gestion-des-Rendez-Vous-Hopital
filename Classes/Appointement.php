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

    function canculAppointement(){
        $qry=DbConnection::connect()->prepare("Delete from Appointement where id=?");
        $qry->execute([$this->getAppId()]);
        if($qry>0){
            return true;
        }else{
            return false;
        }

    }
    function getlAppointement(){
        $apps=DbConnection::connect()->prepare("select * from appointment");
        $apps->execute();
        return $apps->fetchAll(PDO::FETCH_ASSOC);
    }
}