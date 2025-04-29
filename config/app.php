<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'adminpanel');


include_once 'DatabaseConnection.php';
$db = new DatabaseConnection;
