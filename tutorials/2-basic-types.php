<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
include('logincheck.php');
include('completed_common.php')
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Tutorial 2 - Basic Types');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 2 - Basic Types</h1>
    <p>
        As mentioned in Tutorial 0, variables can have different types. Java has built in types called <b>primitive types</b> that
    </p>

    <div class="card bg-dark">
        <div class="card-body">
            <h5 class="card-title text-white">Interactive Code Editor</h5>
            <iframe src="https://paiza.io/projects/e/rSuXLoQsuwo-y_GL3idhXw?theme=vibrant_ink" width="100%"
                    height="500" seamless></iframe>
        </div>
    </div>

    <p>
        <a href="index.php">Back to tutorial index</a>
    </p>
</div>

<?php import('footer.php') ?>
<?php
create_checkbox($userId, 2);
?>
</body>
</html>