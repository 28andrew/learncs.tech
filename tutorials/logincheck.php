<?php
if (!isset($_COOKIE['token'])) {
    loginRedirect();
} else {
    // Token is set, validate it
    $result = DB::queryFirstRow("SELECT * FROM `users` WHERE token=%s", $_COOKIE['token']);
    if ($result == null || empty($result)) {
        loginRedirect();
    }
    $userId = $result['id'];
    $userEmail = $result['email'];
    ?>
    <div class="alert alert-primary" role="alert">
        Welcome back <?=$userEmail?>
        <a href="logout.php">Logout</a>
    </div>
    <?php
}

function loginRedirect() {
    header("Location: https://learncs.tech/tutorials/login.php");
    die();
}