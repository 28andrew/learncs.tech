<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Careers in Computer Science - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'articles';
import('navbar.php')
?>
<div class="container">
    <h1>Careers in Computer Science</h1>
    <h4><i>Andrew Tran 1/29/2020</i></h4>

    <p>
        Computer science majors and related majors have a variety of career choices to look into. They may even switch
        careers at some point in their professional lives due to the changing dynamics of what they are interested in,
        their values and priorities, and what technologies are currently trending or in high demand.
    </p>
    <p>
        A software developer or computer programmer is generally the first job that comes to mind when someone thinks of
        a job related to a computer science major. They create software that you may use everyday or, on the other end
        of the spectrum, software that is used in the behind the scenes of businesses for their day to day operations.
        Either way, with the current reach of technology in the world, the software that these developers write affect
        your life to some extent. Even seemingly mundane electronic devices like a computer mouse that have some sort of
        processor or microcontroller inside them need software to run. They need to be very familiar with various
        programming languages related to their task at hand and be effective at communicating in order to collaborate
        with colleagues (Profita). It is rare to
        see software in a company written by a single person, instead, software is usually written collaboratively using
        systems called version control.
    </p>

    <p>
        Another job that computer science majors may pursue is being a database administrator. They design and execute
        the software needed to store vast amounts of data
        (Profita). It’s also important to store
        the data in such a way that the data that is needed is easily retrievable. A popular software used by database
        administrators is MySQL which is a database software that structures data into tables and implements SQL, which
        stands for Structured Query Language ("What is Database?"). It's even used in this website. SQL allows
        programmers and others to retrieve data by giving queries that are similar to natural language. One example of
        an SQL query is “SELECT * FROM `users` WHERE `name`=’Andrew’ AND `age`>=20” . This query would find all rows in
        the users table that have the name of Andrew and an age of more than or equal to 20.
    </p>

    <p>
        Another job that computer science majors is being a web developer, which is a specialized type of software
        developer. They create and design websites, for an average yearly salary in the US of about $70,000
        ("Web Developers"). They must meet with clients to
        discuss specifications for website projects ("Web Developers"). A distinction for
        a web developer may be whether they know how to do the frontend or backend of a website, or in the case of a
        full-stack web developer both. The frontend of a website is what the user sees and interacts with and includes
        things like the images, fonts, graphics, and website style. The programming languages generally associated with
        frontend include HTML, CSS and Javascript. The backend of a website is more involved with logic
        and what happens behind the scenes such as checking that a user is not a robot or if the email and password
        combination they entered is valid for authentication. The programming languages associated with backend include
        PHP, Java, Ruby, Python, and many more. Similar to software developers in general, they must also collaborate,
        usually in teams, to create a final product. A website tends to be very modularized with many different pages
        and each page having different functions while at the same time having each page being integrated in some
        ways with other pages (Czech).
    </p>

    <p>
        <a href="index.php">Back to articles</a>
    </p>
</div>
<?php import('footer.php') ?>
</body>
</html>