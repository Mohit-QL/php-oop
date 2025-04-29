<?php
include_once './controller/registerController.php';
include './codes/authentication.php';
include './includes/header.php';
include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>


                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
                            </div>
                            <div class="form-group mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password">
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Enter Confirm Password" name="confirm_password">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary" name="register_btn">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include './includes/footer.php';
?>