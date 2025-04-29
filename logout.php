<?php
session_start();
unset($_SESSION['authenticated']);
unset($_SESSION['auth_user']);
session_destroy();

$_SESSION['message'] = "Logged out successfully!";
header("Location: login.php");
exit(0);
