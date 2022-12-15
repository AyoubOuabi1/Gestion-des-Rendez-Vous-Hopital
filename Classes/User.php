<?php
include "DbConnection.php";
session_start();
class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    public $test;

    /**
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $password
     */
    public function __construct($id, $firstName, $lastName, $email, $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    public static function getUser($email, $password)
    {
        $conn=DbConnection::connect();
        $admin = $conn->prepare('SELECT `id` FROM admin WHERE email=? AND password=?');
        $doctor = $conn->prepare('SELECT `id` FROM doctor WHERE email=? AND password=?');
        $user = $conn->prepare('SELECT `id` FROM patient WHERE email=? AND password=?');
        $admin->execute(array($email,$password));
        $user->execute(array($email,$password));
        $doctor->execute(array($email,$password));
        if($admin->rowCount()>0){
            $_SESSION['adminId'] = $admin->fetch();
            $conn=null;
            return 0;

        } else if($user->rowCount() > 0) {
            $conn=null;
            $_SESSION['patientId'] = $user->fetch();
           return 1;

        }else if ($doctor->rowCount() > 0){

            $conn=null;
            $_SESSION['doctorId']=$doctor->fetch();
            return 2;

        }else {
            return 3;
        }
    }

    public static function logOut() {
        session_start();
        session_unset();
        session_destroy();
        header("location: http://localhost/Gestion-des-Rendez-Vous-Hopital");
    }

}