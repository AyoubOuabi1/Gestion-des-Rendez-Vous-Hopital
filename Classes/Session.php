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
    public function __construct($sessionId, $doctorId, $sessDate, $maxNumber)
    {
        $this->sessionId = $sessionId;
        $this->doctorId = $doctorId;
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

    }
    public function removeSesssion(){

    }
    public function updateSession(){

    }

    public function selectSession(){

    }

    public function BookingSession(){

    }








}