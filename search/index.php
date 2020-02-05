<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Search - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'search';
import('navbar.php')
?>
<div class="container">
    <div>
        <script async src="https://cse.google.com/cse.js?cx=011742412981268798575:ip3n47owwjl"></script>
        <div class="gcse-search"></div>
    </div>
</div>
<?php import('footer.php') ?>
</body>
</html>