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
    title('Tutorial 4 - Recursion');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 4 - Recursion</h1>
    <p>
        Sometimes a method may want to call (run) itself again to perform a task that must be done repetitively. WHen a method calls itself, this is called <b>recursion</b>. A popular mathematical recursive function defines the Fibonacci sequence and we can easily implement that in Java and other programming languages. The Fibonacci sequence is 0, 1, 1, 2, 3, 5, 8, 13...
    </p>

    <p>
        Let's start off by defining the method after our <code>main</code> method. It will take in an integer, n, and output an integer, the n-th fibonacci number.The whole Main.java file looks as follows:
    </p>
<pre><code class="java">import java.util.*;

public class Main {
    public static void main(String[] args) throws Exception {
        // You can put your java code here.
    }

    public static int fibbonaci(int n) {

    }
}
</code></pre>
    <p>
        Defining the fibonacci sequence as being the sum of the element before the element before that one does not work when n is 1 or 0. When n is 1 or 0, it must return 1 or 0 respectively. Therefore we can use a condition to see when it's 1 or 0 and return accordingly (now the example code will only shown the method <code>fibonacci</code>). <code>return</code> ends the method and returns the specified value.
    </p>

<pre><code class="java">public static int fibbonaci(int n) {
    if (n <= 1) {
        return n;
    }
}
</code></pre>

    <p>
        Then we can finally return the value of the sum of the element before n and the element before that one. Using your knowledge of operators and calling methods, see if you can figure out how to implement it.
    </p>

    <a class="btn btn-primary" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
       aria-controls="collapse">
        Show Answer
    </a>
    <div class="collapse" id="collapse">
<pre><code class="java">public static int fibbonaci(int n) {
    if (n <= 1) {
        return n;
    }
    return fibonacci(n-1) + fibonacci(n-2);
}
</code></pre>
    </div>

    <p>
        Finally we can call the fibonacci method in our <code>main</code> method and print out the value it returns. Let's print out the 10th fibonacci number. As follows is code inside the main method:
    </p>

<pre><code class="java">int result = fibonacci(10);
System.out.println(result);
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
create_checkbox($userId, 4);
?>
</body>
</html>