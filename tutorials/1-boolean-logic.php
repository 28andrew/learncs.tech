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
    title('Tutorial 1 - Boolean Logic');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 1 - Boolean Logic</h1>
    <p>
        The last program in Tutorial 0 just did one thing and then finished. A lot of the time, it is desirable to have a program do different things depending on the state of different variables. Your code can branch off to do different statements depending on a <b>condition</b>. This can be done through if-then (<code>if (condition) { }</code>)and if-then-else statements (<code>if (condition) { } else { }</code>)in Java and many other languages. Try this example of a condition (it compares a number, so try comparing the number and see what happens to the output):
    </p>
<pre><code class="java">int number = 99;
if (number >= 100) {
    System.out.println("3 digits or more");
} else {
    System.out.println("Less than 3 digits");
}
</code></pre>
    <p>
        Also try changing the condition. The <code>>=</code> is considered an <b>operator</b>. Operators perform tasks on variables. In this case, the greater than or equal to operator compares two values and returns <b>true</b> if the first value (left-hand side) is greater or equal to the second value (right-hand side). Similar operators include equal to (<code>==</code>), not equal to (<code>!=</code>),
        greater than (<code>></code>), less than (<code><</code>), and less than or equal to (<code><=</code>). For a full list of operators, refer to the <a href="https://docs.oracle.com/javase/tutorial/java/nutsandbolts/op1.html">Oracle docs</a>.
    </p>
    <p>
        For math with numbers, common operators include <code>+</code>, <code>-</code>, <code>*</code>, and
        <code>/</code>.
    </p>
    <p>
        A useful operator is the modulo operator. The modulus function finds the integer remainder after dividing. For example, 10 mod 2 is 0 as 2 divides 10 perfectly into 5. In Java, the modulo operator is represented by a <code>%</code>. Let's use two operators to see if a number is even. Try this code, and try adjusting the number:
    </p>
<pre><code class="java">int number = 44;
if (number % 2 == 0) {
    System.out.println("The number is even");
} else {
    System.out.println("The number is odd");
}
</code></pre>
    <p>
        Sometimes more than one condition may be needed for an if statement. For example, one may want both of two conditions to be true or either of those conditions to be true. The <code>||</code> operator can be used in cases where "or" is needed and <code>&&</code> for cases where "and" is needed. <code>&</code> and <code>|</code> would work too but they do not have a special feature called short-circuiting which stops checking conditions when needed. For example, with an "or" between two conditions, the second condition does not need to be checked if the first one is true as only one of them needs to be true. Put <code>&&</code> and <code>||</code> between two conditions to utilize this new knowledge. They can also be combined by grouping them in parenthesis or just daisy chaining them, for example see this code for checking if a number is even, also less than 333, and EITHER a multiple of 4 or a multiple of 3.
    </p>
<pre><code class="java">int number = 88;
if (number % 2 == 0 && number < 333 && (number % 4 == 0 || number % 3 == 0 ) {
    System.out.println("This number meets our conditions!");
}
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
create_checkbox($userId, 1);
?>
</body>
</html>