<?php 
session_start();
  $userid = $_SESSION['user_name'] ;
  $user_Prof_Link = "./userprofile.php" ;


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="style.css">
    <style>
      nav{
    background-color: rgb(53, 54, 54);
    overflow: hidden;
    display: flexbox;
    position: sticky;
    top: 0;
    height: 20%;
  }
nav a{
    display: block;
    
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    float: left;
    font-weight: 300;
}
a.menu:hover{
  color: rgb(0, 0, 0);
  background-color: rgb(255, 255, 255);
}

    </style>
</head>
<body>
  <nav>
    <a href="./start_page.php" class="menu"><i class="fa fa-home"></i>HOME</a>
    <a href="./java.php" class="menu">JAVA</a>
    <a href="./HTML.php" class="menu">HTML</a>
    <a href="./CSS.php" class="menu">CSS</a>
    <a href="./contact.php" class="menu">HELP</a>
    
    <?php
               if (isset($_SESSION['uid']) && isset($_SESSION['user_name'])) {
                echo "<a href=./userprofile.php class='log' >" . $userid.  "</a>"  ;
               } else {
                echo "<a href=./signup.php class='log' >Login/SignUp  </a>";
               }
    ?>
  </nav>
    <div class="sidenav">
        <a class="optt"  href="#">About</a>
        <a class="optt" href="#">Services</a>
        <a class="optt" href="#">Clients</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="#">Contact</a>
        <a class="optt" href="./quiz.php?qid=11">Quiz1</a>
        <a class="optt" href="./quiz.php?qid=12">Quiz2</a>
        <a class="optt" href="./start_page.php">Back</a>

      </div>
      
      <!-- Page content -->
      <div class="main">
        <div >
            <h1 class="title">JAVA</h1>
        </div>
    <div class="content">
        <p  ><p>Java is a popular programming language.
          <br>
        <p> Java is used to develop mobile apps, web apps, desktop apps, games and much more.</p>
          <p> Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA),meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client–server web applications, with a reported 9 million developers.</p>
          <br>
          <h5 style="text-align: center;"> Designed by : James Gosling</h5>
          <h5 style="text-align: center;">Developer : Oracle Corporation</h5>
          <br>
          <br>
          <br>
          
      </p>
            </p>
        </div>
      
      <script>
          const javaOptions=['ifElse','forLoop','whileLoop','Methods','OOP','ClassObject','Constructor','Encapsulation','Packages','Exception']
          const Jcontent={
            ifElse: "<br/><hr/><h3>The if Statement</h3>Use the if statement Use the if statement to specify a block of Java code to be executed if a condition is true .<br/><br/>Syntax:<br/>if (condition) {<br/>// block of code to be executed if the condition is true<br/>}<br/>Note that if is in lowercase letters. Uppercase letters (If or IF) will generate an error.<br/><br/><hr/><h3>The else Statement</h3>Use the else statement to specify a block of code to be executed if the condition is false.<br/><br/>Syntax:<br/>if (condition) {<br/>// block of code to be executed if the condition is true<br/>} else {<br/>// block of code to be executed if the condition is false<br/>}<br/><br/><hr/><h3>Short Hand If...Else (Ternary Operator)</h3>There is also a short-hand if else, which is known as the ternary operator because it consists of three operands. It can be used to replace multiple lines of code with a single line. It is often used to replace simple if else statements:<br/><br/>Syntax:<br/>variable = (condition) ? expressionTrue :  expressionFalse;",
            forLoop: "<br/><hr/><h3>Java forLoop</h3>When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop:<br/><br/>Syntax:<br/><br/>for (statement 1; statement 2; statement 3) {<br/>// code block to be executed<br/>}<br/><h4>Statement 1</h4> is executed (one time) before the execution of the code block.<br/><h4>Statement 2</h4> defines the condition for executing the code block.<br/><h4>Statement 3</h4> is executed (every time) after the code block has been executed.<br/><br/><h5>The example below will print the numbers 0 to 4:</h5>for (int i = 0; i < 5; i++) {<br/> System.out.println(i);<br/>}",
            whileLoop: "<br/><hr/><h3>Java whileLoop</h3>Loops can execute a block of code as long as a specified condition is reached.<br/>Loops are handy because they save time, reduce errors, and they make code more readable.<br/>The while loop loops through a block of code as long as a specified condition is true:<br/><br/>Syntax:<br/><br/>while (condition) { <br/> // code block to be executed<br/>}<br/><br/>In the example below, the code in the loop will run, over and over again, as long as a variable (i) is less than 5:<br/><br/>int i = 0;<br/>while (i < 5) {<br/>System.out.println(i);<br/> i++;<br/>}<br/>Note: Do not forget to increase the variable used in the condition, otherwise the loop will never end!<br/><br/><hr/><h3>Java Do/While Loop</h3>The do/while loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.<br/><br/>Syntax:<br/><br/>do {<br/> // code block to be executed<br/>}<br/>while (condition);<br/><br/>The example below uses a do/while loop. The loop will always be executed at least once, even if the condition is false, because the code block is executed before the condition is tested:<br/><br/>int i = 0;<br/>do {<br/> System.out.println(i);<br/> i++;<br/>}<br/>while (i < 5);",
            Methods:"<br/><hr/><br/>A method is a block of code which only runs when it is called.<br/>You can pass data, known as parameters, into a method.<br/>Methods are used to perform certain actions, and they are also known as functions.<br/>Why use methods? To reuse code: define the code once, and use it many times.<br/><br/><hr/><h3>Create a Method</h3>A method must be declared within a class. It is defined with the name of the method, followed by parentheses (). Java provides some pre-defined methods, such as System.out.println(), but you can also create your own methods to perform certain actions:<br/><br/>Create a method inside Main:<br/><br/>public class Main {<br/>  static void myMethod(){<br/>// code to be executed<br/>}<br/>}<br/><br/><hr/><h3>Call a Method</h3>To call a method in Java, write the method's name followed by two parentheses () and a semicolon;<br/>In the following example, myMethod() is used to print a text (the action), when it is called:<br/><br/>Inside main, call the myMethod() method:<br/>public class Main {<br/>static void myMethod() {<br/>System.out.println(''I just got executed!'');<br/>}<br/>public static void main(String[] args) {<br/>myMethod();<br/>}<br/>}<br/>// Outputs 'I just got executed!'<br/><br/>A method can also be called multiple times:<br/>public class Main {<br/>static void myMethod() {<br/>System.out.println(''I just got executed'');<br/>}<br/>public static void main(String[] args) {<br/>myMethod();<br/>myMethod();<br/>myMethod();<br/>}<br/>}<br/>// I just got executed!<br/>// I just got executed!<br/>// I just got executed!",
            OOP:"<br/><hr/><h3>Java - What is OOP?</h3>OOP stands for Object-Oriented Programming.<br/>Procedural programming is about writing procedures or methods that perform operations on the data, while object-oriented programming is about creating objects that contain both data and methods.<br/><br/>Object-oriented programming has several advantages over procedural programming:<br/>OOP is faster and easier to execute<br/>OOP provides a clear structure for the programs<br/>OOP helps to keep the Java code DRY ''Don't Repeat Yourself'', and makes the code easier to maintain, modify and debug<br/>OOP makes it possible to create full reusable applications with less code and shorter development time<br/><br/>Tip: The ''Don't Repeat Yourself'' (DRY) principle is about reducing the repetition of code. You should extract out the codes that are common for the application, and place them at a single place and reuse them instead of repeating it.<br/><br/><hr/><h3>Java - What are Classes and Objects?</h3>Classes and objects are the two main aspects of object-oriented programming.<br/>Look at the following illustration to see the difference between class and objects:<br/>Class={Fruit}<br/>Object={ Apple,Banana,Mango}<br/>So,a class is a template for objects, and an object is an instance of a class.<br/>When the individual objects are created, they inherit all the variables and methods from the class.",
            ClassObject:"<br/><hr/><h3>Java Classes/Objects</h3>Java is an object-oriented programming language.<br/><br/>Everything in Java is associated with classes and objects, along with its attributes and methods. For example: in real life, a car is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.<br/><br/>A Class is like an object constructor, or a ''blueprint'' for creating objects.<br/><br/><hr/><h3>Create a Class</h3>To create a class, use the keyword class:<br/><br/>Create a class named ''Main'' with a variable x:<br/><br/>public class Main {<br/>int x = 5;<br/>}<br/><br/><strong>Remember from the Java Syntax chapter that a class should always start with an uppercase first letter, and that the name of the java file should match the class name.</strong><br/><br/><hr/><h3>Create a Object</h3>n Java, an object is created from a class. We have already created the class named Main, so now we can use this to create objects.<br/><br/>To create an object of Main, specify the class name, followed by the object name, and use the keyword new:<br/><br/>Create an object called ''myObj'' and print the value of x:<br/><br/>public class Main {<br/>int x = 5;<br/>public static void main(String[] args) {<br/>Main myObj = new Main();<br/>System.out.println(myObj.x);<br/>}<br/>}",
            Constructor:"<br/><hr/><h3>Java Contructors</h3>A constructor in Java is a special method that is used to initialize objects. The constructor is called when an object of a class is created. It can be used to set initial values for object attributes:<br/><br/>Create a constructor:<br/><br/>// Create a Main class<br/>public class Main {<br/>int x;&emsp;&emsp;// Create a class attribute<br/><br/>// Create a class constructor for the Main class<br/>public Main() {<br/>x = 5; &emsp;&emsp; // Set the initial value for the class attribute x<br/>}<br/>public static void main(String[] args) {<br/>Main myObj = new Main(); &emsp;&emsp;// Create an object of class Main (This will call the constructor)<br/>System.out.println(myObj.x); &emsp;&emsp;// Print the value of x<br/>}<br/>}<br/><br/>// Outputs 5<br/><br/><strong>Note that the constructor name must match the class name, and it cannot have a return type (like void).<br/>Also note that the constructor is called when the object is created.<br/>All classes have constructors by default: if you do not create a class constructor yourself, Java creates one for you. However, then you are not able to set initial values for object attributes.</strong><br/><br/><hr/><h3>Constructor Parameters</h3>Constructors can also take parameters, which is used to initialize attributes.<br/>The following example adds an int y parameter to the constructor. Inside the constructor we set x to y (x=y). When we call the constructor, we pass a parameter to the constructor (5), which will set the value of x to 5:<br/><br/>Example:<br/>public class Main {<br/>int x;<br/><br/>public Main(int y) {<br/>x = y;<br/>}<br/><br/>public static void main(String[] args) {<br/>Main myObj = new Main(5);<br/>System.out.println(myObj.x);<br/>}<br/>}<br/><br/>// Outputs 5<br/><br/><strong>You can have as many parameters as you want.</strong>",
            Encapsulation:"<br/><hr/><h3>Java Encapsulation</h3>The meaning of Encapsulation, is to make sure that ''sensitive'' data is hidden from users. To achieve this, you must:<br/>&emsp;&emsp;-> declare class variables/attributes as private<br/>&emsp;&emsp;-> provide public get and set methods to access and update the value of a private variable<br/><br/><hr/><h3>Get and Set</h3>You learned from the previous chapter that private variables can only be accessed within the same class (an outside class has no access to it). However, it is possible to access them if we provide public get and set methods.<br/><br/>The get method returns the variable value, and the set method sets the value.<br/><br/>Syntax for both is that they start with either get or set, followed by the name of the variable, with the first letter in upper case:<br/><br/>public class Person {<br/>private String name; // private = restricted access<br/><br/>// Getter<br/>public String getName() {<br/>return name;<br/>}<br/><br/>// Setter<br/>public void setName(String newName) {<br/>this.name = newName;<br/>}<br/>}<br/><br/><strong>Example explained:</strong><br/>The get method returns the value of the variable name.<br/>The set method takes a parameter (newName) and assigns it to the name variable. The this keyword is used to refer to the current object.<br/>However, as the name variable is declared as private, we cannot access it from outside this class.<br/><br/><hr/><h3>Why Encapsulation?</h3>-> Better control of class attributes and methods.<br/>-> Class attributes can be made read-only (if you only use the get method), or write-only (if you only use the set method)<br/>-> Flexible: the programmer can change one part of the code without affecting other parts<br/>-> Increased security of data<br/>",
            Packages:"<br/><hr/><h3>Java Packages&API</h3>A package in Java is used to group related classes. Think of it as a folder in a file directory. We use packages to avoid name conflicts, and to write a better maintainable code. Packages are divided into two categories:<br/>&emsp;&emsp;-> Built-in Packages (packages from the Java API)<br/>&emsp;&emsp;-> User-defined Packages (create your own packages)<br/><br/><hr/><h3>Built-in Packages</h3>The Java API is a library of prewritten classes, that are free to use, included in the Java Development Environment.<br/><br/>The library contains components for managing input, database programming, and much much more. The complete list can be found at Oracles website: https://docs.oracle.com/javase/8/docs/api/.<br/><br/>The library is divided into packages and classes. Meaning you can either import a single class (along with its methods and attributes), or a whole package that contain all the classes that belong to the specified package.<br/><br/>To use a class or a package from the library, you need to use the import keyword:<br/><br/>Syntax:<br/>import package.name.Class;  &emsp;&emsp; // Import a single class<br/>import package.name.*;  &emsp;&emsp; // Import the whole package<br/><br/><hr/><h3>Import a Class</h3>If you find a class you want to use, for example, the Scanner class, which is used to get user input, write the following code:<br/><br/>Example<br/>import java.util.Scanner;<br/><br/>In the example above, java.util is a package, while Scanner is a class of the java.util package.<br/><br/>To use the Scanner class, create an object of the class and use any of the available methods found in the Scanner class documentation. In our example, we will use the nextLine() method, which is used to read a complete line:<br/><br/>Example:<br/>Using the Scanner class to get user input:<br/>import java.util.Scanner;<br/>class MyClass {<br/>public static void main(String[] args) {<br/>Scanner myObj = new Scanner(System.in);<br/>System.out.println(''Enter username'');<br/>String userName = myObj.nextLine();<br/>System.out.println(''Username is: '' + userName);<br/>}<br/>}",
            Exception:"<br/><hr/><h3>Java Exceptions</h3>When executing Java code, different errors can occur: coding errors made by the programmer, errors due to wrong input, or other unforeseeable things.<br/>When an error occurs, Java will normally stop and generate an error message. The technical term for this is: Java will throw an exception (throw an error).<br/><br/><hr/><h3>Java try and catch</h3>The try statement allows you to define a block of code to be tested for errors while it is being executed.<br/><br/>The catch statement allows you to define a block of code to be executed, if an error occurs in the try block.<br/><br/>The try and catch keywords come in pairs:<br/><br/>Syntax:<br/>try {<br/>&emsp;&emsp;//  Block of code to try<br/>}<br/>catch(Exception e) {<br/>&emsp;&emsp;//  Block of code to handle errors<br/>}<br/><br/>If an error occurs, we can use try...catch to catch the error and execute some code to handle it.<br/><br/><hr/><h3>Finally</h3>The finally statement lets you execute code, after try...catch, regardless of the result:<br/><br/>Example<br/>public class Main {<br/>public static void main(String[] args) {<br/>try {<br/>int[] myNumbers = {1, 2, 3};<br/>System.out.println(myNumbers[10]);<br/>} <br/>catch (Exception e) {<br/>System.out.println(''Something went wrong.'');<br/>} <br/>finally {<br/>System.out.println(''The 'try catch' is finished.'');<br/>}<br/>}<br/>}<br/><br/><hr/><h3>The throw keyword</h3>The throw statement allows you to create a custom error.<br/><br/>The throw statement is used together with an exception type. There are many exception types available in Java:<br/>ArithmeticException, FileNotFoundException, ArrayIndexOutOfBoundsException, SecurityException, etc:<br/><br/>Example:<br/>Throw an exception if age is below 18 (print ''Access denied''). If age is 18 or older, print ''Access granted'':<br/>public class Main {<br/>static void checkAge(int age) {<br/>if (age < 18) {<br/>throw new ArithmeticException(''Access denied - You must be at least 18 years old.'');<br/>}<br/>else {<br/>System.out.println(''Access granted - You are old enough!'');<br/>}<br/>}<br/><br/>public static void main(String[] args) {<br/>checkAge(15); // Set age to 15 (which is below 18...)<br/>}<br/>}<br/><br/>The output will be:<br/>Exception in thread ''main'' java.lang.ArithmeticException: Access denied - You must be at least 18 years old.<br/>at Main.checkAge(Main.java:4)<br/>at Main.main(Main.java:12)<br/><br/>If age was 20, you would not get an exception.",
          }
          const options=document.getElementsByClassName('optt');
        const title=document.getElementsByClassName('title')[0]
        const cont=document.getElementsByClassName('content')[0]
        var i=0;
        javaOptions.map(opt=>{options[i++].innerHTML=opt})
        var arr = Array.from(options);
        var k;
        arr.map(opt=>{opt.addEventListener('click',()=>{
            title.innerHTML=opt.innerHTML
            k=opt.innerHTML
            cont.innerHTML=""
            cont.innerHTML=Jcontent[k]
        })})
      </script>

<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact US</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#" class="copyright">&copy;</a>
</footer>
      </div>
</body>
</html>
