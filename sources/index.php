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
$active = 'bibliography';
import('navbar.php')
?>
<div class="container">
    <h1>MLA Bibliography (Annotated)</h1>
    <iframe seamless style="width: 100%; height: 100%; position: absolute; overflow: visible;" src="https://docs.google.com/document/d/e/2PACX-1vQiZiYXLdL55l6MyQVYBDfxMEskfYctyFx3-AAklnHgJPLVtf5435S5MBqeVibIi3-Gih0nKQPZ4TtH/pub?embedded=true"></iframe>
</div>
<?php import('footer.php') ?>
</body>
</html>