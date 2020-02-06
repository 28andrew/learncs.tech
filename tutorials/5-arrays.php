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
    title('Tutorial 5 - Arrays');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 5 - Arrays</h1>
    <p>
        Arrays are very important data structure in computer science. Arrays are another type that a variable may be, on top of primitives and objects. In fact, an array can hold primitives and or objects. An array holds multiple of one type; in other words, it holds more than one element. If a primitive is put into an object array, it is automatically converted into an Object. The syntax for defining arrays is as follows:
    </p>

<pre><code class="java"><type>[] variable = new &lt;type&gt;[&lt;arraySize&gt;];
</code></pre>

    <p>And the syntax to preload an array with values</p>

<pre><code class="java">&lt;type&gt;[] variable = new &lt;type&gt;[&lt;arraySize&gt;]{&lt;values separated by a comma&gt;};
</code></pre>

    <p>
        Either specify array size or preloaded values but not both as array size can be inferred from the preloaded values.
    </p>

    <p>
        If we wanted a String array with the elements of "Apple", "Banana", and "Tree" we would do:
    </p>

<pre><code class="java">String[] array = new String[]{"Apple","Banana","Tree"};
</code></pre>

    <p>If we wanted an int (primitive form of Integer) array that is 5 elements in length but empty, we can do:</p>

<pre><code class="java">int[] thiscanbeanyname = new int[5];
</code></pre>

    <p>As mentioned earlier, many programming languages love to index things from 0. The first element is index 0, the second element is index 1 and so on. To set a value in an array, the syntax is as follows:</p>

<pre><code class="java">&lt;array name&gt;[&lt;index&gt;] = &lt;value&gt;;
</code></pre>

    <p>For example to set the first element of the int[] array from above to 99:</p>

    <pre><code class="java">int[] thiscanbeanyname = new int[5];
thiscanbeanyname[0] = 99;
</code></pre>

    <p>The left hand of the statement setting the value is an expression that can be used to get specific elements out of an array. For example, to print the first element of that array.</p>

    <pre><code class="java">int[] thiscanbeanyname = new int[5];
thiscanbeanyname[0] = 99;
System.out.println(thiscanbeanyname[0]); //should make 99 show up in the output
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
create_checkbox($userId, 5);
?>
</body>
</html>