<?php
include './includes/header.php';
include './includes/navbar.php';
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-groupp mb-3">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-groupp mb-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-groupp mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="form-groupp mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="form-groupp mb-3">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Enter Confirm Password">
                            </div>
                            <div class="form-groupp mb-3">
                                <button type="submit" class="btn btn-primary">Register Now</button>
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