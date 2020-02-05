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
import('navbar.php')
?>
<div class="container">
    <h1>Tutorials</h1>
    <p>All tutorials on this site utilize an embedded version of the free PaizaCloud IDE for code running.</p>

    <h3><a href="0-code-editor.php">Tutorial 0 - Using the Code Editor</a></h3>
    <br/>
</div>
<?php import('footer.php') ?>
</body>
</html>