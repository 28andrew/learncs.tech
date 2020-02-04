<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
            import('head.php');
            title('About - LearnCS!');
        ?>
    </head>
    <body>
        <?php
            $active = 'about';
            import('navbar.php')
        ?>
        <?php import('footer.php') ?>
    </body>
</html>