<?php

class DbConnection
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$servername;dbname=cliniquedb", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            //setAttribute() method sets a new value to an attribute.
           
             return $conn;
        } catch (PDOException $e) {
            die('db error');
        }
    }
}
/* PDO::ATTR_ERRMODE
Error reporting mode of PDO. Can take one of the following values:

-->PDO::ERRMODE_SILENT
Only sets error codes.
-->PDO::ERRMODE_WARNING
Raises E_WARNING diagnostics.
-->PDO::ERRMODE_EXCEPTION
Throws PDOExceptions. 
*/