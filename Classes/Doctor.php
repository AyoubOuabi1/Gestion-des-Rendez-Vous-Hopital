<?php
include_once "DbConnection.php";
include_once "User.php";


if (isset($_GET['id'])) {
    Doctor::deleteDoctor();

}
if (isset($_GET['idview'])) {
    Doctor::displayDoctor();
}
class Doctor  extends User
{
    private $nationalCode;
    private $speciality;
    private $telenumber;
    private $cin;
     public function __construct($cin,$nationalCode, $speciality, $telenumber, $firstName, $lastName, $email, $password){
         $this->nationalCode = $nationalCode;
         $this->speciality = $speciality;
         $this->telenumber = $telenumber;
         $this->cin = $cin;
         parent::__construct($firstName, $lastName, $email, $password);

     }

    // public function __construct()
    // {
    // }
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
        $conn = DbConnection::connect();
        // $cin = $_POST["cin"];
        // $nationalCode = $_POST["Ncode"];
        // $fname = $_POST["firstName"];
        // $lname = $_POST["lastName"];
        $lastName= $this->getLastName();
        $firstName= $this->getFirstName();
         $email = $this->getEmail();
         $password=$this->getPassword();
        // $password = $_POST["password"];
        // $speciality = $_POST["speciality"];
        // $telenumber = $_POST["pNumber"];
        $stmt = $conn->prepare("INSERT INTO `doctor`(`cin`, `nationalCode`, `firstName`, `lastName`, `email`, `password`, `speciality`, `teleNumber`) VALUES ('$this->cin','$this->nationalCode','$firstName','$lastName','$email','$password','$this->speciality','$this->telenumber')");
        if($stmt->execute()>0){
            return true;
        }else {
            return false;
        }
     }
    public function updateDoctor(){
       
    }
    public static function deleteDoctor(){
        $conn = DbConnection::connect();
        $id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM `doctor` WHERE id=$id");
        if ($stmt->execute(array('id' => $id)) > 0) {
            return true;
            // echo "deleted" ;
        } else {
            return false;
            // echo "error" ;
        }
    }
    public static function selecetDoctors(){
        $conn = DbConnection::connect();
        $stmt = $conn->query("SELECT * FROM doctor");
        $allData = $stmt->fetchAll();
         return $allData;
    //     var_dump($allData);
    }
    public static function displayDoctor(){
        $id = $_GET['idview'];
        $conn = DbConnection::connect();
        $stmt = $conn->query("SELECT * FROM doctor WHERE id=$id");
        $allData = $stmt->fetchAll();
        return $allData;
    }
    // public function countDoctors()
    // {    $conn = DbConnection::connect();
    //     $sql = $conn->prepare("SELECT count(*) FROM doctor");
    //     if($result = $sql->execute()){

    //     };
    //     $row = mysqli_fetch_array($result);
    //     echo  $row[0];
    // }
  
   




    // $stmt = $conn->prepare('SELECT `cin`, `nationalCode`, `firstName`, `lastName`, `email`, `password`, `speciality`, `teleNumber` FROM `doctor` ');
    //      $data= $stmt->execute(array());
    //      $allData=$data->fetchAll();
}



