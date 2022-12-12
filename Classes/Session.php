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
    public function __construct( $title, $sessDate, $maxNumber,$doctorId)
    {
        // $this->sessionId = $sessionId;
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

    // /**
    //  * @param mixed $sessionId
    //  */
    // public function setSessionId($sessionId): void
    // {
    //     $this->sessionId = $sessionId;
    // }

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

        $conn = DbConnection::connect();

        $stmt = $conn->prepare("INSERT INTO `session`(`title`, `sessdate`, `maxNumber`, `doctorid`) VALUES ('$this->title','$this->sessDate','$this->maxNumber','1')");
        if($stmt->execute()>0){
            return true;
        }else {
            return false;
        }
     }


        // $addsess = DbConnection::connect()->prepare();
        // $addsess ->execute();
    
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
    $apdsess = DbConnection::connect()->prepare("UPDATE `session` SET `title`='$this->title', `sessdate`='$this->sessdate', `maxNumber`='$this->maxnumber', `doctorid`='$this->docid', WHERE  id = '$this->sessionId'");
    $apdsess ->execute();
    }

    public static function selectSession(){
        $sess = DbConnection::connect()->prepare("SELECT c.id, c.title, c.sessdate, c.maxNumber, d.firstName as fn ,d.lastName as ln FROM `session` c 
        INNER JOIN doctor d on c.doctorid = d.id");
        $sess ->execute();
        return $sess->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function selectSessionDoc(){
        $sess = DbConnection::connect()->prepare("SELECT * FROM session WHERE doctorid = 1");
        $sess ->execute();
        return $sess->fetchAll(PDO::FETCH_ASSOC);
    }


    public function BookingSession(){

    }



}