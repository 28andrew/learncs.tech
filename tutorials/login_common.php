<?php
function loginWithToken($token)
{
	// expire in 30 days
    setcookie("token", $token, time() + 30 * 24 * 60 * 60);
    header("Location: https://learncs.tech/tutorials");
}

function generateToken()
{
    try {
        return bin2hex(random_bytes(32));
    } catch (Exception $e) {
        die ($e->getMessage());
    }
}

function getUserByEmail($email)
{
    return DB::queryFirstRow("SELECT * FROM `users` WHERE `email`=%s", $email);
}

function alert($message)
{
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $message ?>
    </div>
    <?php
}