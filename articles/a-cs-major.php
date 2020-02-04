<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('A Computer Science Major and Related Majors - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>A Computer Science Major and Related Majors</h1>
    <h4><i>Andrew Tran 1/29/2020</i></h4>

    <p>
      As mentioned in my article <a href="what-is-cs.php">What is Computer Science?</a>, it is very interdisciplinary and hence many majors can be categorized as
            being related to computer science. The most obvious major that comes to mind is simply a Computer Science
            major but there are many other related majors, especially ones that are more specialized, that are options
            for someone who is interested in computer science. Also they may major in Computer Science but also minor in
            the minor equivalent of one of these majors. Additionally, many of the topics in these other related majors
            can be taken by those in a Computer Science major in elective courses. Those other related majors include
    </p>
    <p>
        A computer science major involves learning how to make computer programs that humans will be interacting with
        ("Major: Computer"). This can take many
        forms such as making websites, such as this one, making software like Microsoft Word, testing it, and much more.
        There are so many places where code can be used like robots or life-saving biomedical devices like a pacemaker.
        Many of the next requirements also apply to related majors, due to how related they are. Common programming
        languages learned in this major include C, C++, Java, Javascript, PHP (that’s the language this site is
        programmed in!), and Python ("The Languages"). In my
        article about what
        <a href="what-is-cs.php">What is Computer Science?</a>, I elaborate on why multiple programming languages exist.
    </p>
    <p>
        In addition to learning programming, computer science majors also usually have to go through a math requirement
        that involves calculus (Pincus). Linear
        algebra is also useful for some topics in computer science such as vision processing and 3D graphics.
    </p>
    <p>
        Some computer science major specific courses may include some involved with algorithms, operating systems,
        databases, artificial intelligence, and data structures.
        ("Computer Science"). Algorithms are specific steps that tell a computer
        to make it do something (<i>HowStuffWorks</i>). These steps can
        be very complicated, such as depending on certain conditions to determine what exactly they do. An example of an
        algorithm is one that tries to find the shortest path in a maze given two endpoints (see: A*). Operating systems
        are complicated pieces of software that run when your computer turns on. Popular consumer operating systems are
        Windows, Mac, and various distributions of Linux. The way they’re programmed almost always has to involve
        dealing with programming hardware because they’re one of the first pieces of software a computer runs after
        turning on. The aforementioned operating systems are usually made to support a wide range of hardware as the
        consumers have different computers from one another. Additionally, databases are an important concept to learn
        as databases they are how a lot of data is stored and organized in software. Artificial intelligence involves
        training computers to do a certain task that a human would be able to do while traditional software being able
        to do it well. Speech recognition is one very common application of artificial intelligence
        (Tegmark). Data structures in computer
        science are important to learn because it is how data is represented in programming languages. For example, a
        common data structure is a queue
        (Carnes),
        which functions similar to a queue in a supermarket as elements are taken from the front and some are added to
        the back. In the case of a supermarket, this element would be the shoppers.
    </p>
    <p>
        A related major to a computer science major is a major in Information Sciences. Those in this major will learn
        how to “create systems for finding and storing data”
        ("Major: Information"). They may also
        have similar career choices to a computer science major including being a computer programmer, a professor, a
        database administrator, or even a software engineer
        (CollegeXpress and Ward).
         See my next article on careers in computer science for more detail
    </p>

    <p>
        <a href="index.php">Back to articles</a>
    </p>
</div>
<?php import('footer.php') ?>
</body>
</html>