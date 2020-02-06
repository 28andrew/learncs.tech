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
    title('Tutorial 3 - Basic Objects');
    ?>
</head>
<body>
<?php
$active = 'tutorials';
import('navbar.php')
?>
<div class="container">
    <h1>Tutorial 3 - Basic Objects</h1>
    <p>
        <b>Objects</b> in Java can have methods (mentioned in Tutorial 0) on them. One such method common to all Objects is <code>toString()</code> which converts the Object into a String (such as the integer 1 to ).
    </p>

    <p>
        Every primitive has an equivalent object type.
    </p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Primitive</th>
                <th scope="col">Object Type Equivalent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>byte</td>
                <td>Byte</td>
            </tr>
            <tr>
                <td>short</td>
                <td>Short</td>
            </tr>
            <tr>
                <td>int</td>
                <td>Integer</td>
            </tr>
            <tr>
                <td>long</td>
                <td>Long</td>
            </tr>
            <tr>
                <td>float</td>
                <td>Float</td>
            </tr>
            <tr>
                <td>double</td>
                <td>Double</td>
            </tr>
            <tr>
                <td>boolean</td>
                <td>Boolean</td>
            </tr>
            <tr>
                <td>char</td>
                <td>Character</td>
            </tr>
        </tbody>
    </table>

    <p>
        For example try this code with Objects. The difference is that variables with an object type can store the value of <code>null</code>. Null is very important as it presents nothing (as in the value of <i>nothing</i>).
    </p>

<pre><code class="java">
</code></pre>

    <p>
        A common object that almost seems like it should be a primitive is the <code>String</code>. A String is simply a collection of <code>Character</code>s. String literals (<b>literals</b> are values put in the code directly as opposed to being the result of a method or some other dynamic source) are enclosed by double quotes, unlike <code>char</code>/<code>Character</code>s as mentioned earlier which are enclosed by single quotes. In Tutorial 0, you used String literals to print Hello World and other messages which are <i>literal</i>ly defined in the code.
    </p>

    <p>
        A <b>String</b> is just one instance of a built-in object type that Java offers. There are so many object types built into Java. One may even define their own by making a <b>class</b>. A class defines the structure of an object. A class can be used to <b>construct</b> some <b>instances</b> of an object.
    </p>

    <p>
        Let's make one together to start with in the editor. Start off by making a new file in the new tab of the editor. By default it is named "File1" but change it to "Person.java".
    </p>

    <p>
        Then let's start off with defining an empty class which we'll put everything in. The class name must always match with the file name (Person.java has a class name of Person). The syntax is as follows:
    </p>

<pre><code class="java">public class Person {

}
</code></pre>

    <p>
        Then let's give it some <b>fields</b>. The fields of a class are properties of it. In this case, let's have fields for name and age. It is good practice to leave fields like these "private" so that they only be accessed by methods we later define. The syntax is as follows:
    </p>

<pre><code class="java">public class Person {
    private String name;
    private int age;
}
</code></pre>

    <p>
        As mentioned earlier objects must be constructed and classes define how they are constructed by <b>constructors</b>. Let's add one to our <code>Person</code> class with the following syntax:
    </p>

<pre><code class="java">public class Person {
    private String name;
    private int age;

    public Person(String name, int age){
        this.name = name;
        this.age = age;
    }
}
</code></pre>

    <p>
        Lastly let's add <code>getter</code> and <code>setters</code> which allow the fields to be changed. Getters and setters are simply methods. Methods are defined with their return type right before their name. <code>void</code> means that the method simply only does something, without a return value and thus having no return type. The syntax is as follows:
    </p>

<pre><code class="java">public class Person {
    private String name;
    private int age;

    public Person(String name, int age){
        this.name = name;
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }
}
</code></pre>

    <p>
        Finally let's implement the toString method which all objects have. <code>toString</code> is useful as using it on objects can give a value usable for printing out. As toString is a built in method of Object, we must override its default behavior by using the <b>annotation</b> <code>@Override</code>. The previously mentioned <code>+</code> operator with numbers also can concatenate strings.
    </p>

<pre><code class="java">public class Person {
    private String name;
    private int age;

    public Person(String name, int age){
        this.name = name;
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    @Override
    public String toString() {
        return "Person with name " + name + " and an age of " + age;
    }
}
</code></pre>

    <p>
        Now go back to the Main.java tab and use the following code (in place of the comment that tells you where to place code, like in previous tutorials). This code will make a new Person with the name of Andrew and the age of 22. Then it will print this Person to the output. The <code>System.out.println</code> method automatically calls the method <code>toString</code> on our object, which we overrided earlier.
    </p>

<pre><code class="java">Person person = new Person("Andrew", 22);
System.out.println(person);
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
create_checkbox($userId, 3);
?>
</body>
</html>