<?php
require './controller/StudentConteroller.php';

$student = new StudentController();
$students = $student->getAllStudents();
include './includes/header.php';
?>

<div class="container-fluid px-4">

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-4">
                    <h4 style="font-size: 40px;">Student List</h4>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Phone</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($student = $students->fetch_assoc()): ?>
                            <tr>
                                <td><?= $student['id']; ?></td>
                                <td><?= $student['name']; ?></td>
                                <td><?= $student['email']; ?></td>
                                <td><?= $student['course']; ?></td>
                                <td><?= $student['phone']; ?></td>
                                <td class="text-center">
                                    <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm px-4 me-3">Edit</a>
                                    <a href="student-delete.php?id=<?= $student['id']; ?>" class="btn btn-danger btn-sm px-3" onclick="return confirm('Delete this student?');">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<?php include './includes/footer.php'; ?>
<?php include './includes/scripts.php'; ?>







