<?php
function import($path) {
    include $_SERVER["DOCUMENT_ROOT"] . '/' . $path;
}

require_once 'meekrodb.2.3.class.php';
require_once 'config.php';

DB::$user = $config['database']['username'];
DB::$password = $config['database']['password'];
DB::$dbName = $config['database']['database'];

$mysqli = DB::get();

try {
    $mysqli->query('UPDATE `statistics` SET `value`=`value`+1 WHERE name="views"');
} catch (Exception $e) {
    die("Failed to add view. " . $e->getMessage());
}