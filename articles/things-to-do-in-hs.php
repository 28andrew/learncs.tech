<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Things To Do in High School to Learn Computer Science - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>Things To Do in High School to Learn Computer Science</h1>
    <h4><i>Andrew Tran 1/29/2020</i></h4>

    <p>
        As a high schooler, many high schools offer computer science classes, that can be taken advantage of to get
        basic background in this field. The CollegeBoard has two standard AP courses related to computer science which
        are AP Computer Science Principles and AP Computer Science A. As they are AP classes, their end of year exams
        can grant college credit at select colleges and universities. AP Computer Science A involves programming in a
        programming language called Java ("AP Computer").
        Specifically the class “explores problem solving, hardware, algorithms, and the ways in which people utilize
        computers effectively to address real-world problems”
        (Sundquist). AP Computer Science
        Principles is more about the “big ideas” of computer science and does not have a standard programming language.
        Even if your high school does not offer these AP classes, you can study these topics on your own and even still
        take the exam to get college credit (however, be aware of early registration deadlines for AP exams).
    </p>

    <p>
        Online courses are also available to learn computer science. <a href="https://online.stanford.edu/courses/soe-ycscs101-sp-computer-science-101">Stanford</a> offers computer science classes for free
        online; however, be aware they are for simply learning, not gaining credit . <a href="https://ocw.mit.edu/courses/electrical-engineering-and-computer-science/">MIT</a> also offers online computer
        science classes online for free. See
        my <a href="/resources">resources page</a> for additional age-appropriate resources.
    </p>

    <p>
        Independent programming projects are a great way to learn computer science topics. See the
        <a href="/resources">resources page</a> for many resources on getting started. Many projects’ source code is posted online that can be
            looked at for examples. A common website for posting project code on to is <a href="https://github.com">github.com</a>. Many large
            companies including Google and Microsoft post some of their code on there too. Once one is more familiar
            with a programming language and have looked at some examples of good projects, they may find something
            they’re interested in and come up with a problem to solve with programming. For those interested in video
            games, creating a modification to a video game, such as with the game Minecraft, is a good way to practice
            programming as it will share similar concepts with more serious software development. Online forums such as
            <a href="https://stackoverflow.com">StackOverflow</a> can offer advice to those getting started with programming and having problems or questions
            with how to implement a certain functionality.
    </p>

    <p>
        <a href="index.php">Back to articles</a>
    </p>
</div>
<?php import('footer.php') ?>
</body>
</html>