<?php

class Database
{
    // Uncomment for Local Server
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "devjobsafrica";

    // Uncomment for Live Server
    // private $hostname = "localhost";
    // private $username = "devjobsafrica_user";
    // private $password = "devjobsafrica@2024";
    // private $dbname = "devjobsafrica";
    private $conn;


    // Uncomment this for Live Connection

    // private $hostname = "localhost";
    // private $username = "coinhabo_user";
    // private $password = "user@2024";
    // private $dbname = "coinhabo_db";
    // private $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "Connection failed: " . $th->getMessage();
            die();
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
