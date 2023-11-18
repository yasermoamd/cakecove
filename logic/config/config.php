<?php
class Database {
    private $host = "";
    private $username = "";
    private $password = "";
    private $dbname = "";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}


?>