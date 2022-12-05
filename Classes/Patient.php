<?php

class Patient
{
    private $birthDay;
    private $address;
    private $cin;

    public function __construct($birthDay, $address, $cin,$id, $firstName, $lastName, $email, $password)
    {
        $this->birthDay = $birthDay;
        $this->address = $address;
        $this->cin = $cin;
        parent::__construct($id, $firstName, $lastName, $email, $password);
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
    }

    public function selectPatient(){

    }
    public function deletePatient(){

    }
    public function addPatient(){

    }
    public function updatePatient(){

    }

}