<?php
include './config/app.php';
class RegisterController
{
    public $conn;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($fname, $lname, $email, $password)
    {
        $registerQuery =  "INSERT INTO `users` (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
        $result = $this->conn->query($registerQuery);
        return $result;
    }

    public function isUserExists($email)
    {
        $checkUser = "SELECT email FROM `users` WHERE email = '$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function confirmPassword($password, $c_password)
    {
        if ($password == $c_password) {
            return true;
        } else {
            return false;
        }
    }
}
