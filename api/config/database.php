<?php

class Database {

    private $conn;

    private $host;
    private $db_name;
    private $username;
    private $password;

    public function __construct() {
        $this->host = "localhost";
        $this->db_name = "a1032910_memuran";
        $this->username = "root";
        $this->password = "";
    }

    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}


function newDatabase() {
    include_once 'connect-data.php';
    return new Database($host, $db_name, $username, $password);
}

?>