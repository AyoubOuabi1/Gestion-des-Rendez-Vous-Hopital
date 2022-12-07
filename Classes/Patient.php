<?php
include 'DbConnection.php' ;
class Patient
{
    private $birthDay;
    private $address;
    private $cin;

    // public function __construct($birthDay, $address, $cin,$id, $firstName, $lastName, $email, $password)
    // {
    //     $this->birthDay = $birthDay;
    //     $this->address = $address;
    //     $this->cin = $cin;
    //     // parent::__construct($id, $firstName, $lastName, $email, $password);
    // }

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
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT firstName, lastName, cin, telephone, email, birthday FROM patient " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetchAll() ;
        return $data ;
    }

    


    public function deletePatient(){

    }
    public function addPatient(){

    }
    public function updatePatient(){

    }

    public function countPatient(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT COUNT(id) as numberOfPatients FROM patient " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt -> fetch() ;
        return $data ;
    }

}

    // $count = new Patient ;
    // $row    = $count->countPatient() ;