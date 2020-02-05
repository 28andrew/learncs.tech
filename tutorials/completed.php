<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');

if (isset($_POST['checked']) && isset($_POST['token']) && isset($_POST['tutorial'])) {
    $checked = $_POST['checked'] == 'true';
    $token = $_POST['token'];
    $tutorial = $_POST['tutorial'];
    $user = DB::queryFirstRow("SELECT * FROM `users` WHERE token=%s", $token);
    if ($user == null || empty($user)) {
        return;
    }
    $userId = $user['id'];

    if ($checked) {
        //insert update
        DB::insertUpdate('tutorial_completions',
            [
                'user' => $userId,
                'tutorial' => $tutorial
            ]
        );
        $mysqli = DB::get();

        try {
            $mysqli->query('UPDATE `statistics` SET `value`=`value`+1 WHERE name="completions"');
        } catch (Exception $e) {
            die("Failed to add completion. " . $e->getMessage());
        }
    } else {
        DB::delete('tutorial_completions', 'user=%s AND tutorial=%s', $userId, $tutorial);
    }
}