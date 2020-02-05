<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
include('logincheck.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Tutorials - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php');

$completed = DB::query("SELECT * FROM `tutorial_completions` WHERE user=%s", $userId);
$completedIds = [];
if ($completed != null && !empty($completed)) {
    foreach($completed as $row) {
        array_push($completedIds, $row['tutorial']);
    }
}

function checkIfDone($id) {
    global $completedIds;
    if (in_array($id, $completedIds)) {
        ?>
        &#10004;
        <?php
    }
}

?>
<div class="container">
    <h1>Tutorials</h1>
    <p>All tutorials on this site utilize an embedded version of the free PaizaCloud IDE for running Java code.</p>
    <p>Tutorials marked as completed will have a check mark</p>

    <h3><a href="0-code-editor.php"><?php checkIfDone(0)?>Tutorial 0 - Using the Code Editor and Basic Java</a></h3>
    <br/>
    <h3><a href="1-boolean-logic.php"><?php checkIfDone(1) ?>Tutorial 1 - Boolean Logic</a></h3>
    <br/>
    <h3><a href="2-basic-types.php"><?php checkIfDone(2) ?>Tutorial 2 - Basic Types</a></h3>
    <br/>
    <h3><a href="3-basic-objects.php"><?php checkIfDone(3) ?>Tutorial 3 - Basic Objects</a></h3>
    <br/>
    <h3><a href="4-recursion.php"><?php checkIfDone(4) ?>Tutorial 4 - Recursion</a></h3>
    <br/>
    <h3><a href="5-arrays.php"><?php checkIfDone(5) ?>Tutorial 5 - Arrays</a></h3>
    <br/>
    <h3><a href="6-user-input.php"><?php checkIfDone(6) ?>Tutorial 6 - Manipulating User Input</a></h3>
    <br/>
</div>
<?php import('footer.php') ?>
</body>
</html>