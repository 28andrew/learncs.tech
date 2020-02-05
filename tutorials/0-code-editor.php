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
    title('Tutorial 0 - Using the Code Editor and Basic Java');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 0 - Using the Code Editor and Basic Java</h1>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
       aria-controls="collapse">
        Toggle Text
    </a>
    <div class="collapse show" id="collapse">
        <p>
            This tutorial is just meant to familiarize you with the code editor used on this website. The chosen
            programming language for these tutorials is Java as it is object oriented, a recurrent theme in computer
            science. Anyways, the concepts in these tutorials are very language-agnostic or easily adaptable to other
            languages.
        </p>
        <p>
            The starting point of all Java programs starts in a method called <code>main</code>. <b>Methods</b> are pieces of
            code that can be ran and be reused. In some programming languages, they are called functions. The definition
            of this method (how you specify the specifics about a method) is on Line 4 in the editor below.
        </p>

        <p>
            These tutorials can act as a supplement to the in-depth <a href="https://docs.oracle.com/javase/tutorial/"> Java guides by Oracle</a>. However, these tutorials focus more on the broader language-agnostic computer science topics than language-specific nit-picky detail.
        </p>

        <p>
            In Line 5, that is where the first code in your program that is to be ran may be put. A very common way to
            test out a new programming language is to print <code>Hello World</code> to the output. Replace <code>//
                You can put your java code here.</code> with the following code to do so:
        </p>
        <pre><code class="java">System.out.println("Hello World");
</code></pre>
        <p>
            Then press the Run button (or use the shortcut Ctrl+Enter) to run the code. A new output tab should show up
            with
            your output. Try editing the message from <code>Hello World</code> to something else. Keep in mind some
            special characters
            may need to be typed differently (see Escape Sequences in this <a
                    href="https://docs.oracle.com/javase/tutorial/java/data/characters.html">Oracle doc</a>).
        </p>

        <p>
            Wonder why the first tutorial is indexed as 0 instead of 1? Well in many programming languages, the first
            element by design has an index of 0 as opposed to 1. This design is to accommodate things such as memory
            location (Cook).
        </p>

        <p>
            Lastly, the code editor has an Input tab at the bottom for passing user input into programs. This won't be
            touched on much until <a href="6-user-input.php">Tutorial 6</a>.
        </p>
    </div>

    <h3>Basic Java</h3>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
       aria-controls="collapse2">
        Toggle Text
    </a>
    <div class="collapse" id="collapse2">
        <p>
            The line <code>System.out.println("Hello World!");</code> is called a <b>statement</b>. Statements do one task
            which is execute code. A group of statements make up a method, as mentioned earlier. All statements are
            ended in a semicolon (;). A method may have arguments which are values passed to them. The argument for the <code>main</code> function is an array of strings <code>args</code>. In this case, and in most uses of <code>public static void main(String[] args)</code>, that String array (array is a list of items) represents the user input delimited by spaces.
        </p>
        <p>
            <b>Variables</b> in Java, and other languages, can hold a value. In Java, and other statically-typed languages, a variable usually can only be of one type. A value is an <b>expression</b>. In fact, an expression could even be another variable. To define a variable, you write a statement and the syntax is as follows:
        </p>
        <pre><code class="java">&lt;type&gt; &lt;name&gt; = &lt;value&gt;;</code></pre>
        Try the following code to print Hello World, using a variable instead. (quotes are you define a String literal, which is a text)
<pre><code class="java">String text = "Hello World!";
System.out.println(text);
</code> </pre>
    </div>

    <br/>
    <div class="card bg-dark">
        <div class="card-body">
            <h5 class="card-title text-white">Interactive Code Editor</h5>
            <iframe src="https://paiza.io/projects/e/rSuXLoQsuwo-y_GL3idhXw?theme=vibrant_ink" width="100%"
                    height="500" seamless></iframe>
        </div>
    </div>

    <p>
        <a href="index.php">Back to tutorial index</a>
    </p>
</div>

<?php import('footer.php') ?>
<?php
create_checkbox($userId, 0);
?>
</body>
</html>