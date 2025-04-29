<?php
require_once '../config/app.php';

class StudentController
{
    private $conn;

    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function validateInput($input)
    {
        return mysqli_real_escape_string($this->conn, trim($input));
    }

    public function addStudent($name, $email, $course, $phone)
    {
        $name = $this->validateInput($name);
        $email = $this->validateInput($email);
        $course = $this->validateInput($course);
        $phone = $this->validateInput($phone);

        $query = "INSERT INTO students (name, email, course, phone) 
                  VALUES ('$name', '$email', '$course', '$phone')";
        return $this->conn->query($query);
    }

    public function getAllStudents()
    {
        $query = "SELECT * FROM students";
        return $this->conn->query($query);
    }

    public function getStudentById($id)
    {
        $id = $this->validateInput($id);
        $query = "SELECT * FROM students WHERE id = '$id' LIMIT 1";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function updateStudent($id, $name, $email, $course, $phone)
    {
        $id = $this->validateInput($id);
        $name = $this->validateInput($name);
        $email = $this->validateInput($email);
        $course = $this->validateInput($course);
        $phone = $this->validateInput($phone);

        $query = "UPDATE students SET 
                    name = '$name', 
                    email = '$email', 
                    course = '$course', 
                    phone = '$phone' 
                  WHERE id = '$id'";
        return $this->conn->query($query);
    }

    public function deleteStudent($id)
    {
        $id = $this->validateInput($id);
        $query = "DELETE FROM students WHERE id = '$id'";
        return $this->conn->query($query);
    }
}
