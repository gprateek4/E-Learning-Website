<?php 
session_start();
if( isset($_SESSION['user_name'])){
    $userid = $_SESSION['user_name'] ;
}
  $user_Prof_Link = "./userprofile.php" ;
if (isset($_SESSION['uid']) && isset($_SESSION['user_name'])) {
    //echo "user id " . $userid ;
} else {
    //echo "unset ";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectwork</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- https://developer.mozilla.org/en-US/docs/Web/CSS -->
      
      <!-- Page content -->
      <header style="display: flex; justify-content: left ;align-items: baseline;"><h1 style="font-family: cursive;">&emsp;SyncXcel....</h1></header>
        
      <nav>
          <a href="./start_page.php" class="menu"><i class="fa fa-home"></i>HOME</a>
          <a href="./java.php" class="menu">JAVA</a>
          <a href="./HTML.php" class="menu">HTML</a>
          <a href="./CSS.php" class="menu">CSS</a>
          <a href="contact.php" class="menu">HELP</a>
          <?php
               if (isset($_SESSION['uid']) && isset($_SESSION['user_name'])) {
                echo "<a href=./userprofile.php class='log' >" . $userid.  "</a>"  ;
               } else {
                echo "<a href=./signup.php class='log' >Login/SignUp  </a>";
               }
          ?>
          <!---<a href="./login.php" class="log">LOGIN/SIGNUP</a> --->
        </nav>
        <main>
                <section class="one">
                    <div style="display: flex; flex-direction: column; align-items: center;"> 
                        <h3>JAVA</h3>
                        <p style="font-size: medium ;font-weight: bold;">The programming language</p>
                        <br/>
                        <a href="./java.php" class="btn" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;"> Learn JAVA </a>
                        <br/>
                        <a href="https://www.oracle.com/in/java/" class="btn1" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;">JAVA References</a>
                        <style>
                            .btn{
                                transition-duration: 0.25s;
                                background-color: #04AA6D;
                            }
                            .btn:hover{
                                transform: scale(1.1);
                                background-color: #01925b;
                            }
                        </style>
                        <style>
                            .btn1{
                                transition-duration: 0.25s;
                                background-color: rgb(19, 17, 17);
                            }
                            .btn1:hover{
                                transform: scale(1.1);
                                background-color:black; 
                            }
                        </style>
                    </div>
                    <!-- <p>Java is a popular programming language.
                        <br>
                        Java is used to develop mobile apps, web apps, desktop apps, games and much more.
                        <br>
                        Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA),meaning that compiled Java code can run on all platforms that support Java without the need for recompilation. Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client–server web applications, with a reported 9 million developers.
                        <br>
                        <h5> Designed by : James Gosling</h5>
                        <h5>Developer : Oracle Corporation</h5>
                        <br>
                        <a href="#" class="ht">Learn JAVA</a>
                        <br>
                        <br>
                        
                    </p> -->
                    <div style="height: 75%; background-color: rgb(204, 210, 216); width: 50%; display: flex;justify-content: center;text-align: left;align-items: center;">
                        <div style="height: 75%; width: 90%; background-color: white; display: flex;align-items: center; justify-content: center;" >
                            <pre>
                            public class Main
                            {
                                &emsp;&emsp;public static void main(String[] args)
                                &emsp;&emsp;{
                                    &emsp;&emsp;&emsp;&emsp;System.out.println("Hello World");
                                &emsp;&emsp;}
                            }
                            </pre>
 
                       </div>
                    </div>
                </section>
                <section class="two">
                    <div style="display: flex; flex-direction: column; align-items: center;"> 
                        <h3>HTML</h3>
                        <p style="font-size: medium ;font-weight: bold;">The language for building web pages</p>
                        <br/>
                        <a href="./HTML.php" class="btn" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;"> Learn HTML </a>
                        <br/>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" class="btn1" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;">HTML References</a>
                        <style>
                            .btn{
                                transition-duration: 0.25s;
                                background-color: #04AA6D;
                            }
                            .btn:hover{
                                transform: scale(1.1);
                                background-color: #01925b;
                            }
                        </style>
                        <style>
                            .btn1{
                                transition-duration: 0.25s;
                                background-color: rgb(19, 17, 17);
                            }
                            .btn1:hover{
                                transform: scale(1.1);
                                background-color:black; 
                            }
                        </style>
                    </div>
                    <!--<h3><span>HTML</span></h3>
                    <p>HTML is the standard markup language for Web pages.
            <br>
            With HTML you can create your own Website.
            <br>
            The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.
            Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
            HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as image tag and input tag directly introduce content into the page. Other tags such as p tag surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.
            <h5>Designed by : Tim Berners-Lee</h5>
            <h5>Developed by : WHATWG</h5>
            <br>
            <br>
            
        </p> -->
        <div style="height: 75%; background-color: rgb(204, 210, 216); width: 50%; display: flex;justify-content: center;text-align: left;align-items: center;">
            <div style="height: 75%; width: 90%; background-color: white; display: flex;align-items: center; justify-content: center;" >
                <pre>
                    <! DOCTYPE html >
                    < html >
                    < title > HTML Tutorial < / title >
                    < body >

                    &emsp;< h1 >This is a heading< / h1 >
                    &emsp;< p >This is a paragraph.< / p >

                    < / body >
                    < / html >
                </pre>

           </div>
        </div>
    </section>
    <section class="three">
        <div style="display: flex; flex-direction: column; align-items: center;"> 
            <h3>CSS</h3>
            <p style="font-size: medium ;font-weight: bold;">The language for styling web pages</p>
            <br/>
            <a href="./CSS.php" class="btn" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;"> Learn CSS </a>
            <br/>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" class="btn1" style="text-decoration: none;  height: fit-content;padding: 2%;font-size: 1.5em;;  width: fit-content; border-radius: 20px; color: white;font-weight: 500;">CSS References</a>
            <style>
                .btn{
                    transition-duration: 0.25s;
                    background-color: #04AA6D;
                }
                .btn:hover{
                    transform: scale(1.1);
                    background-color: #01925b;
                }
            </style>
            <style>
                .btn1{
                    transition-duration: 0.25s;
                    background-color: rgb(19, 17, 17);
                }
                .btn1:hover{
                    transform: scale(1.1);
                    background-color:black; 
                }
            </style>
        </div>
        <!--<h3><span>CSS</span></h3>
        <P>
            CSS is the language we use to style an HTML document.
            <br>
            CSS describes how HTML elements should be displayed.
            <br>
            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
            
            CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.
            Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device.
            The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.
            The CSS specifications are maintained by the World Wide Web Consortium (W3C)
            <h5>Developed by : World Wide Web Consortium(W3C)</h5>
        </P>
        <br>

        <a href="#" class="ht">Learn CSS</a>
        <br>
        <br>-->
        <div style="height: 75%; background-color: rgb(204, 210, 216); width: 50%; display: flex;justify-content: center;text-align: left;align-items: center;">
            <div style="height: 75%; width: 90%; background-color: white; display: flex;align-items: center; justify-content: center;" >
                <pre>
                    body {
                        &emsp;background-color: lightblue;
                      }
                      
                      h1 {
                        &emsp;color: white;
                        &emsp;text-align: center;
                      }
                </pre>

           </div>
        </div>
    </section>
</main>

<footer>
    <a href="#">FAQ</a>
    <a href="#">Contact US</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#" class="copyright">&copy;</a>
</footer>

</body>

</html>