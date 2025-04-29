<?php

class DatabaseConnection
{
    public $conn;
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if ($conn->connect_error) {
            die("<h1>Database Connection Failed</h1>");
        }
        return $this->conn = $conn;
    }
}


// class DatabaseConnection
// {
//     private $conn;

//     public function __construct()
//     {
//         $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

//         if ($this->conn->connect_error) {
//             die("<h1>Database Connection Failed: " . $this->conn->connect_error . "</h1>");
//         }
//     }
// }
