<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Many Different Programming Languages and Why Are There So Many- LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>Many Different Programming Languages and Why Are There So Many</h1>
    <h4><i>Andrew Tran 2/1/2020</i></h4>

    <p>
        Looking at the vast amount of programming languages may be intimidating but do not fret. Every programming
        language is more specific to certain types of tasks, but there’s not one specific programming language that must
        be used for every specific task. I will break down how programming languages are classified and explain the
        purposes of some of the most common ones.
    </p>

    <p>
        JavaScript is the most popular programming language due to its flexibility and the amount of contexts that it
        can be used in from web apps to mobile apps to desktop apps
        (Hasan). In
        websites, Javascript is the main language used to make elements interactive or dynamic such as an automatically
        updating timer or moving image. With a software called NodeJS, which is relatively new, Javascript can power
        desktop applications that are cross-platform, as in running on multiple different operating systems, while
        sharing some code with the web version of the desktop application if it exists.
        (Hámori and Nemeth) This code sharing can vastly reduce development time and
        cost. However, NodeJS can be more performance heavy in some cases than writing a native application, which is
        coding in the language targeted for a single operating system.
    </p>

    <p>
        Another popular programming language is Python, which is a great language for beginners to learn
        (Hasan). It
        is commonly used with machine learning which is training a computer with data to find patterns and make
        predictions (Edwards). Programming
        languages can be described as “high-level” or “low-level”, where low-level is a program that runs very close to
        and deals with hardware. Higher level programming languages, which Python is classified as, is usually
        considered more easy to understand due to its higher level of abstraction, which is grouping things together and
        ignoring irrelevant details
        ("Difference between").
    </p>

    <p>
        An age old favorite is the Java programming language
        (Hasan).
        It’s been around for quite a while and used in a lot of commercial applications. With how long it’s been around,
        many libraries which are akin to “addons” have been made for it that add more functionality and compatibility
        with other objects like websites or hardware devices. Java is also inherently cross-platform because all Java
        code is compiled down to a special format called bytecode, then every operating system has a specific program
        that can read that bytecode and run it (Venners). With
        some other languages, like C, they usually are only compiled down to a format that only one operating system, or
        even sometimes computer type, can understand.
    </p>

    <p>
        This is not an exhaustive list of programming languages. There are so many programming languages to choose from.
        New ones come up every year. Also, the most popular programming languages are constantly changing as new ones
        shown up. Search up your task at hand to find the best options for it.
    </p>

    <p>
        <a href="index.php">Back to articles</a>
    </p>
</div>
<?php import('footer.php') ?>
</body>
</html>