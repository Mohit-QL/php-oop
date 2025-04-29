<?php
require './controller/StudentConteroller.php';

$controller = new StudentController();

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($controller->deleteStudent($id)) {
        header("Location: student-view.php");
        exit;
    } else {
        echo "Failed to delete student.";
    }
} else {
    echo "No ID provided.";
}
