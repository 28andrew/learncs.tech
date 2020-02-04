<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('What Exactly is Computer Science? - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>What Exactly is Computer Science?</h1>
    <h4><i>Andrew Tran 1/28/2020</i></h4>

    <p>
        Computer science is the study of computers themselves and is split into many different areas. Software is the
        code that runs on a computer whereas hardware is the physical parts that make up the computer. Computer science
        mainly involves the software side of a computer.
    </p>
    <p>
        Computer science is a very broad term that is often oversimplified and encompasses many disciplines. It can be
        erroneously defined and thought as as simply the usage of computers but it is much more than that. This
        erroneous definition better fits the term computer literacy ("Defining Computer").
    </p>
    <p>
        Some of these numerous areas include “artificial intelligence, computer systems and networks, security, database
        systems, human computer interaction, vision and graphics, numerical analysis, programming languages, software
        engineering, bioinformatics and theory of computing” ("What Is Computer").
        Active research and development that affects our everyday lives exists in each of these areas. Artificial
        intelligence powers the “Recommended for You” sections in video streaming services that you may use. It also
        powers voice recognition and digital assistants such as Apple’s Siri and Amazon’s Alexa.
    </p>
    <p>
        Additionally, security is very important although often taken for granted. With our lives ever increasingly
        being coupled with technology, the importance of security only rises.
    </p>
    <p>
        Database systems are involved with how our data is stored on a large scale. Vision and graphics are the keystone
        behind how users interact with graphical interfaces. They are also involved with emerging technologies such as
        computer vision processing which can detect what is happening in images, such as checking if a bottle is filled
        properly in a factory via a camera automatically.
    </p>
    <p>
        Numerical analysis is very important when working with big data sets where seeing the bigger picture or trend is
        very valuable. An example of this is figuring out what products consumers are buying the most in a warehouse
        depending on time of the year and ordering more stock ahead of time, being informed by a computer model that
        analyzes the past.
    </p>
    <p>
        Programming languages are how people can express what they want a computer to do in a textual or graphical form.
        There are many different programming languages as each is better suited for certain tasks, as certain tasks are
        more easily represented in certain ways. For example, R is a programming language that is very commonly used in
        statistically heavy applications ("What Is R?"). If one were to use a different
        programming language than one that fits R, then they may find that they have to implement their own math
        functions, while R has them built-in. One may want to use a well-known programming language like Java as it is
        supported by many operating systems and has extensive documentation and support. It may not be as specialized as
        other programming languages like R but with how long it has been out, many people and companies have written
        software called “libraries” that add functionality that programmers can import into their project and use. For
        example, someone dealing with Linear Algebra may import a library that allows them to easily to easily represent
        and manipulate matrices and vectors ("Software Library")
    </p>

    <p>
        <a href="index.php">Back to articles</a>
    </p>
</div>
<?php import('footer.php') ?>
</body>
</html>