<?php

class Doctor extends User
{
    private $nationalCode;
    private $speciality;
    private $telenumber;
    private $cin;
    public function __construct($nationalCode, $speciality, $telenumber,$cin,$id, $firstName, $lastName, $email, $password){
        $this->nationalCode = $nationalCode;
        $this->speciality = $speciality;
        $this->telenumber = $telenumber;
        $this->cin = $cin;
        parent::__construct($id, $firstName, $lastName, $email, $password);

    }

    /**
     * @return mixed
     */
    public function getNationalCode()
    {
        return $this->nationalCode;
    }

    /**
     * @param mixed $nationalCode
     */
    public function setNationalCode($nationalCode): void
    {
        $this->nationalCode = $nationalCode;
    }

    /**
     * @return mixed
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param mixed $speciality
     */
    public function setSpeciality($speciality): void
    {
        $this->speciality = $speciality;
    }

    /**
     * @return mixed
     */
    public function getTelenumber()
    {
        return $this->telenumber;
    }

    /**
     * @param mixed $telenumber
     */
    public function setTelenumber($telenumber): void
    {
        $this->telenumber = $telenumber;
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

    public function addDoctor(){

    }
    public function updateDoctor(){

    }
    public function deleteDoctor(){

    }
    public function selecetDoctor(){

    }
}