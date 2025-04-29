<?php
include 'config/app.php';
include './includes/header.php';
include './includes/navbar.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    $_SESSION['message'] = "Login to access the Profile page.";
    header("Location: login.php");
    exit(0);
}
?>

<div class="py-5">
    <div class="container">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['auth_user']['fname'] . ' ' . $_SESSION['auth_user']['lname']); ?>...</h1>
        <h1>Email : <?= htmlspecialchars($_SESSION['auth_user']['email']) ?></h1>
        <p>This is your profile page.</p>
    </div>
</div>

<?php
include './includes/footer.php';
?>