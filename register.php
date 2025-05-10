<?php
// register.php
include('includes/header.php');
include('config/db_config.php');
include('includes/auth_functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Register user
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    register_user($pdo, $username, $email, $password);
    header('Location: login.php');
}
?>


<div class="container register-container">


</div>

<?php include('includes/footer.php'); ?>