<?php
// Connecting to the database
// We want a way for this class to be instanciated within each model
namespace App\Config;
class Database
{
    private $host = 'localhost';
    private $db_name = 'inventory';
    //linux db details
    //private $username = 'dylanm';
    //private $password = '';

    // mac db details
    private $username = 'root';
    private $password = 'Xosurk36';
    public $conn;

    // get database connection
    public function getConnection()
    {
        $this->conn = null;

        try{

            $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);

            $this->conn->exec("set names utf8");

       } catch( \PDOException $exception) {
           echo "connection error: " . $exception->getMessage();

       }

       return $this->conn;

    }
}
