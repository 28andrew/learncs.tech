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
    <div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;">
        <iframe src="//jsfiddle.net/skelly/FX44w/embedded/"
                style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;"
                allowfullscreen></iframe>
    </div>
</div>
<?php import('footer.php') ?>
</body>
</html>