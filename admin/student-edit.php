<?php
require './controller/StudentConteroller.php';

$controller = new StudentController();

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $student = $controller->getStudentById($id);

    if (!$student) {
        echo "Student not found!";
        exit;
    }
} else {
    echo "No ID provided!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $controller->validateInput($_POST['name']);
    $email = $controller->validateInput($_POST['email']);
    $course = $controller->validateInput($_POST['course']);
    $phone = $controller->validateInput($_POST['phone']);

    if ($controller->updateStudent($id, $name, $email, $course, $phone)) {
        header("Location: student-view.php");
        exit;
    } else {
        echo "Update failed!";
    }
}
include './includes/header.php';

?>

<div class="container-fluid px-4">

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-4">
                    <h4 style="font-size: 40px;">Edit Student</h4>
                </div>
                <div class="card-body">
                    <form method="POST">

                        <div class="mb-3">
                            <label class="pb-1">Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $student['name'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $student['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Course</label>
                            <input type="text" name="course" class="form-control" value="<?= $student['course'] ?>">
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?= $student['phone'] ?>">
                        </div>
                        <button type="submit" name="update_student" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include './includes/footer.php'; ?>
<?php include './includes/scripts.php'; ?>