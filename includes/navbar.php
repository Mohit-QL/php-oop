<?php
define('SITE_URL', 'http://localhost/php-oop/');

function base_url($slug = '')
{
    return SITE_URL . $slug;
}

?>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('index.php'); ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php'); ?>">Home</a>
                    </li>

                    <?php if (isset($_SESSION['authenticated'])): ?>
                        <li class="nav-item">
                            <p class="nav-link m-0" href="#">
                                Welcome, <?= $_SESSION['auth_user']['fname']; ?>
                            </p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('profile.php'); ?>">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('logout.php'); ?>">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('login.php'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('register.php'); ?>">Register</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</div>