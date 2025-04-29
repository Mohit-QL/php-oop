<?php
include_once './controller/registerController.php';
include_once './controller/loginController.php';

$db = new DatabaseConnection;

function validateInput($dbconn, $input)
{
    return mysqli_real_escape_string($dbconn, trim($input));
}

// Register Logic
if (isset($_POST['register_btn'])) {
    $fname = validateInput($db->conn, $_POST['fname']);
    $lname = validateInput($db->conn, $_POST['lname']);
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);
    $confirm_password = validateInput($db->conn, $_POST['confirm_password']);

    $register = new RegisterController;
    $result_password = $register->confirmPassword($password, $confirm_password);

    if ($result_password) {
        if (!$register->isUserExists($email)) {
            $result_register = $register->registration($fname, $lname, $email, $password);

            if ($result_register) {
                $_SESSION['message'] = "Registered Successfully!";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['message'] = "Something went wrong!";
                header("Location: register.php");
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Email already registered!";
            header("Location: register.php");
            exit(0);
        }
    } else {
        $_SESSION['message'] = "Passwords do not match!";
        header("Location: register.php");
        exit(0);
    }
}

// Login Logic
if (isset($_POST['login_btn'])) {
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);

    $auth = new LoginController;
    $login = $auth->login($email, $password);

    if ($login) {
        $_SESSION['message'] = "Login Successful!";
        header("Location: index.php");
        exit(0);
    } else {
        header("Location: login.php");
        exit(0);
    }
}
