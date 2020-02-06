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
    title('Tutorial 2 - Basic Types');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 2 - Basic Types</h1>
    <p>
        As mentioned in Tutorial 0, variables can have different types. Java has built in types called <b>primitive types</b>. These types make up more complicated objects. All of the primitive types are <code>byte</code>, <code>short</code>, <code>int</code>,
        <code>long</code>, <code>float</code>, <code>double</code>, <code>boolean</code>, <code>char</code> ("Primitive Data"). Many other programming languages have very similar primitive types.
    </p>

    <p>
        The <code>byte</code> represents 8 bits (a bit is a 0 or a 1) of data in the form of an integer. That means it can store an integer between -128 and 127 ("Primitive Data").
    </p>

    <p>
        The <code>short</code> represents 16 bits and thus can store an integer between -32,768 and 32,767 ("Primitive
        Data").
    </p>

    <p>
        The <code>int</code>, which is very commonly used, and thus can store an integer between -2,147,483,647 and
        2,147,483,647 ("Primitive
        Data").
    </p>

    <p>
        The <code>long</code> is less commonly used but can store an integer between as small as
        -9,223,372,036,854,775,807 and as big as 9,223,372,036,854,775,807 ("Primitive
        Data").
    </p>

    <p>
        The <code>float</code> can store decimal numbers such as <code>1.2345</code> ("Primitive
        Data").
    </p>

    <p>
        The <code>double</code> can store decimal numbers like <code>float</code> but with double the precision (64 bits instead of 32 bits)
        ("Primitive
        Data").
    </p>

    <p>
        Regarding all of these number types, most of the time only use the ones with higher capacities when they are needed as using one that is capable of storing smaller numbers saves memory.
    </p>

    <p>
        The <code>boolean</code>, which was explained in the previous tutorial (Tutorial 1) represents either <code>true</code> or <code>false</code>.
    </p>

    <p>
        Lastly, the <code>char</code> represents a character. A character is a letter or symbol, or even whitespace like a space or tab.
    </p>

    <p>
        Using the variable syntax learned in Tutorial 0 and some operators learned in Tutorial 1, try experimenting with using these primitive types. Try out a few of the code examples below to get a feel for these types:
    </p>

<pre><code class="java">byte b = 127; // try changing this to 128 and see what happens
short s = -32767; // try changing this to -32768 and see what happens
int i1 = 100 * 33;
System.out.println(i1);
float value = 1.04f; // Use of 'f' suffix is optional but it tells the compiler that this must be a float (useful for when you for sure want a float)
double value2 = 1.04d; // Use of 'd' suffix is similar to use of 'f' suffix
boolean test = true; // True or false
char c = 'X'; // Char literals are defined by using single quotes as shown
</code></pre>

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
create_checkbox($userId, 2);
?>
</body>
</html>