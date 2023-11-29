<?php
/**
 * Database - class that handle connection to database.
 * @param: $host, $username, $password, $dbname.
 * @functions: __construct.
 */
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "123";
    private $dbname = "bakery";
    public $conn;

    /**
     * __construct - function that create connection to database.
     * Return: connection to database.
     */
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>