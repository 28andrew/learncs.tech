<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Articles - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>Articles</h1>
    <h3><a href="what-is-cs.php">What Exactly is Computer Science?</a></h3>
    <br/>
    <h3><a href="a-cs-major.php">A Computer Science Major and Related Majors</a></h3>
    <br/>
    <h3><a href="careers-in-cs.php">Careers in Computer Science</a></h3>
    <br/>
    <h3><a href="things-to-do-in-hs.php">Things To Do in High School to Learn Computer Science</a></h3>
    <br/>
    <h3><a href="different-types-of-languages.php">Many Different Programming Languages and Why Are There So Many</a></h3>
</div>
<?php import('footer.php') ?>
</body>
</html>