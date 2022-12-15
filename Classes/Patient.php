<?php
include 'User.php';



class Patient extends User
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

    public static function selectPatient(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT id, firstName, lastName, cin, telephone, email, birthday FROM patient " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetchAll() ;
        return $data ;
    }

    public static function selectPatientsOfDoctor(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT DISTINCT patient.id, patient.firstName, patient.lastName, patient.cin, patient.birthday, patient.email, patient.telephone  FROM `patient` JOIN `session` ON session.doctorid = 1 JOIN `appointment` ON appointment.sessionid = 1 AND patient.id = 4" ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetchAll() ;
        return $data ;
    }

    public static function getInfosOfPatient(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $patientId  = 1 ;  
        $query      = " SELECT * FROM `patient` WHERE id = $patientId " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetch() ;
        return $data ;
        
    }

    public static function deletePatient(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $patientId  = $_GET['patientId'] ;
        $query      = " DELETE FROM `patient` WHERE id = $patientId " ;
        $stmt       = $connection->query($query) ;
        header("location: ../login.php") ;
    }

    // public static function addPatient(){

    // }

    public static function updatePatient(){
        $patientId  = $_POST['patientId'] ;
        $firstname  = $_POST['firstname'] ;
        $lastname   = $_POST['lastname'] ;
        $cin        = $_POST['cin'] ;
        $email      = $_POST['email'] ;
        $phone      = $_POST['phone'] ;
        $address    = $_POST['address'] ;
        $birthday   = $_POST['birthday'] ;
        $password   = $_POST['password'] ;
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " UPDATE `patient` SET `firstName` = '$firstname', `lastname` = '$lastname', `cin` = '$cin', `email` = '$email', `telephone` = '$phone', `address` = '$address', `birthday` = '$birthday', `password` = '$password' WHERE id = $patientId  " ;
        $stmt       = $connection->query($query) ;
        header("location: ../dashboard/patient/dashboard.php") ;
    }

    public static function countPatient(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT COUNT(id) as numberOfPatients FROM patient " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetch() ;
        return $data ;
    }

    public static function countPatientsOfDoctor(){
        $connection = new DbConnection ;
        $connection = $connection->connect() ;
        $query      = " SELECT count(*) as numberPatientsOfDoctor FROM patient, appointment WHERE appointment.patid IN (2) AND appointment.doctorid In (1) " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetch() ;
        return $data ;
    }



}

if(isset($_POST['updatePatient'])){
    Patient::updatePatient() ;
}

if(isset($_GET['patientId'])){
    Patient::deletePatient() ;
}