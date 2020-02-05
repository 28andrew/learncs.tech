<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');

include('login_common.php');

if (isset($_POST) && isset($_POST['type'])) {
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($type == 'login') {
        $user = getUserByEmail($email);
        if ($user == null || empty($user)) {
            alert("Email not found in system");
        }
        $password_hash = $user['pass_hash'];
        if (password_verify($password, $password_hash)) {
            $token = generateToken();
            DB::update('users', array('token' => $token), 'email=%s', $email);
            loginWithToken($token);
        } else {
            alert("Invalid password");
        }
    } else if ($type == 'register') {
        $user = getUserByEmail($email);
        if ($user == null || empty($user)) {
            // Good, not in system yet
            $token = generateToken();
            DB::insert('users', array(
                'email' => $email,
                'pass_hash' => password_hash($password, PASSWORD_DEFAULT),
                'token' => $token
            ));

            $mysqli = DB::get();

            try {
                $mysqli->query('UPDATE `statistics` SET `value`=`value`+1 WHERE name="users"');
            } catch (Exception $e) {
                die("Failed to add user. " . $e->getMessage());
            }

            loginWithToken($token);
        } else {
            alert("Account with email already exists.");
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Login / Register - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorials Login/Register</h1>
    <p>
        In order to use the tutorials, registration is required to keep track of progress.
    </p>
    <p>
        <button><b><a href="guest.php">Click here for a guest account.</a></b></button>
    </p>
    <br/>
    <h3>> Login (returning users)</h3>
    <form id="loginForm" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <input type="hidden" id="type" name="type" value="login">
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <br/>
    <h3>> Register (new users)</h3>
    <form id="registerForm" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
            placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <input type="hidden" id="type" name="type" value="register">
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?php import('footer.php') ?>
</body>
</html>