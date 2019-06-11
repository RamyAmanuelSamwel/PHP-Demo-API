<?php
class Database{
 
    // specify your own database credentials
    private $host = "188.121.44.180:3306";
    private $db_name = "api_db";
    private $username = "Admin";
    private $password = "F4k9p?4s";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
