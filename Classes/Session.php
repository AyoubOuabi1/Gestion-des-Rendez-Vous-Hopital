<?php

class Session
{
    private $sessionId;
    private $doctorId;
    private $title;
    private $sessDate;
    private $maxNumber;

    /**
     * @param $sessionId
     * @param $doctorId
     * @param $sessDate
     * @param $maxNumber
     */
    public function __construct($sessionId, $doctorId, $title, $sessDate, $maxNumber)
    {
        $this->sessionId = $sessionId;
        $this->doctorId = $doctorId;
        $this->title = $title;
        $this->sessDate = $sessDate;
        $this->maxNumber = $maxNumber;
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
    public function getDoctorId()
    {
        return $this->doctorId;
    }

    /**
     * @param mixed $doctorId
     */
    public function setDoctorId($doctorId): void
    {
        $this->doctorId = $doctorId;
    }

    /**
     * @return mixed
     */
    public function getSessDate()
    {
        return $this->sessDate;
    }

    /**
     * @param mixed $sessDate
     */
    public function setSessDate($sessDate): void
    {
        $this->sessDate = $sessDate;
    }

    /**
     * @return mixed
     */
    public function getMaxNumber()
    {
        return $this->maxNumber;
    }

    /**
     * @param mixed $maxNumber
     */
    public function setMaxNumber($maxNumber): void
    {
        $this->maxNumber = $maxNumber;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function addSession(){
        $addsess = DbConnection::connect()->prepare("INSERT INTO `session`(`title`, `sessdate`, `maxNumber`, `doctorid`) VALUES ('$this->title','$this->sessDate','$this->maxNumber','$this->doctorId'");
        $addsess ->execute();
    }
    public function removeSesssion(){
        $qry = DbConnection::connect()->prepare("delete from `session` where id = '$this->sessionId'");
        $qry ->execute();
        if($qry>0){
            return true;
        }else{
            return false;
        }
    }
    public function updateSession(){
    $apdsess = DbConnection::connect()->prepare("UPDATE `session` SET `title`='$title', `sessdate`='$sessdate', `maxNumber`='$maxnumber', `doctorid`='$docid', WHERE  id = '$this->sessionId'");
    $apdsess ->execute();
    }

    public function selectSession(){
        $sess = DbConnection::connect()->prepare("select from session");
        $sess ->execute();
        return $sess->fetchAll(PDO::FETCH_ASSOC);
    }

    public function BookingSession(){

    }

}