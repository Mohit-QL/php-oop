<?php
require './controller/StudentConteroller.php';

$controller = new StudentController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $controller->validateInput($_POST['name']);
    $email = $controller->validateInput($_POST['email']);
    $course = $controller->validateInput($_POST['course']);
    $phone = $controller->validateInput($_POST['phone']);

    if ($controller->addStudent($name, $email, $course, $phone)) {
        header("Location: student-view.php");
        exit;
    } else {
        echo "Failed to add student.";
    }
}
include './includes/header.php';
?>

<div class="container-fluid px-4">

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-4">
                    <h4 style="font-size: 40px;">Student Add</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="pb-1">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Course</label>
                            <input type="text" name="course" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="pb-1">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <button type="submit" name="add_student" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include './includes/footer.php'; ?>
<?php include './includes/scripts.php'; ?>