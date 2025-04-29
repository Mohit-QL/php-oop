<?php
class AuthenticationController
{
    public $conn;
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function admin()
    {
        $user_id = $_SESSION['auth_user']['id'];
        $checkAdmin = "SELECT id,role_as FROM `users` WHERE id = '$user_id' AND role_as = '1'";
        $result = $this->conn->query($checkAdmin);
        if ($result->num_rows == 1) {
            return true;
        }else{
            $_SESSION['message'] = "Only Admin Can Access This Page";
            return false;
        }
    }
}
