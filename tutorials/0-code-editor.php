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
    title('Tutorial 0 - Using the Code Editor');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 0 - Using the Code Editor</h1>
    <p>
        This tutorial is just meant to familiarize you with the code editor used on this website. The chosen programming language for these tutorials is Java as it is object oriented, a recurrent theme in computer science. Anyways, the concepts in these tutorials are very language-agnostic or easily adaptable to other languages. </p>
    <p>
        The starting point of all Java programs starts in a method called <code>main</code>. Methods are pieces of code that can be ran and be reused. In some programming languages, they are called functions. The definition of this method (how you specify the specifics about a method) is on Line 4 in the editor below.
    </p>

    <p>
        In Line 5, that is where the first code in your program that is to be ran may be put. A very common way to test out a new programming language is to print <code>Hello World</code> to the output. Replace <code>//
            You can put your java code here.</code> with the following code to do so:
    </p>
<pre><code class="java">System.out.println("Hello World");
</code></pre>
    <p>
        Then press the Run button (or use the shortcut Ctrl+Enter) to run the code. A new output tab should show up with
        your output. Try editing the message from <code>Hello World</code> to something else. Keep in mind some special characters
        may need to be typed differently (see Escape Sequences in this <a href="https://docs.oracle.com/javase/tutorial/java/data/characters.html">Oracle doc</a>).
    </p>
    <div class="card bg-dark">
        <div class="card-body">
            <h5 class="card-title text-white">Interactive Code Editor</h5>
            <iframe src="https://paiza.io/projects/e/rSuXLoQsuwo-y_GL3idhXw?theme=vibrant_ink" width="100%"
                    height="500" seamless></iframe>
        </div>
    </div>
</div>

<?php import('footer.php') ?>
<?php
create_checkbox($userId, 0);
?>
</body>
</html>