<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
include('login_common.php');

try {
    $email = "andrewtran312+guest" . bin2hex(random_bytes(8)) . "@gmail.com";
    $password = bin2hex(random_bytes(16));
    $token = generateToken();
    DB::insert('users', array(
        'email' => $email,
        'pass_hash' => password_hash($password, PASSWORD_DEFAULT),
        'token' => $token
    ));
    loginWithToken($token);
} catch (Exception $exception) {
    die($exception->getMessage());
}