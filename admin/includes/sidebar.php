<div id="layoutSidenav">
    <nav class="sb-sidenav accordion sb-sidenav-dark p-0" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav" style="margin-right: 98px;">
                <div class="sb-sidenav-menu-heading">Core</div>

                <a class="nav-link" href="../admin/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStudent" aria-expanded="false" aria-controls="collapseStudent">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                    Student
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseStudent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../admin/student_add.php">Add Student</a>
                        <a class="nav-link" href="../admin/student-view.php">View Students</a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>