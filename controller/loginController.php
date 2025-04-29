<?php
class LoginController
{
    public $conn;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function login($email, $password)
    {
        $checkLogin = "SELECT * FROM `users` WHERE email = '$email' LIMIT 1";
        $result = $this->conn->query($checkLogin);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if ($password === $user['password']) {
                $_SESSION['authenticated'] = true;
                $_SESSION['auth_role'] = $user['role_as'];
                $_SESSION['auth_user'] = [
                    'id' => $user['id'],
                    'fname' => $user['fname'],
                    'lname' => $user['lname'],
                    'email' => $user['email'],
                ];
                return true;
            } else {
                $_SESSION['message'] = "Invalid password!";
                return false;
            }
        } else {
            $_SESSION['message'] = "Email not registered!";
            return false;
        }
    }
}
