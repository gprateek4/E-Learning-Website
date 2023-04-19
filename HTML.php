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
.zindx {
  z-index: 5 ;
}
    </style>
</head>
<body>
  <nav>
    <a href="./start_page.php" class="menu"><i class="fa fa-home"></i>HOME</a>
    <a href="./java.php" class="menu">JAVA</a>
    <a href="#" class="menu">HTML</a>
    <a href="./CSS.php" class="menu">CSS</a>
    <a href="contact.php" class="menu">HELP</a>
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
        <a class="optt" href="./quiz.php?qid=22">Quiz1</a>
        <a class="optt" href="./quiz.php/qid=22">Quiz2</a>
        <a class="optt" href="./index.html">Back</a>

      </div>
      
      <!-- Page content -->
      <div class="main">
        <div >
            <h1 class="title" >HTML</h1>
        </div>
    <div class="content" >
        <p >
          <p>HTML is the standard markup language for Web pages.
  <br>
  With HTML you can create your own Website.
  <br>
  The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.
  Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
  HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as image tag and input tag directly introduce content into the page. Other tags such as p tag surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.
  <h5 style="text-align: center;">Designed by : Tim Berners-Lee</h5>
  <h5 style="text-align: center;">Developed by : WHATWG</h5>
  <br>
  
  
        </p>
    </div>
      <script>
          const javaOptions=['Elements','Attribute','Headings','Paragraphs','Formatting','Comments','Class','Symbols','Quiz1','Quiz2']
          const Jcontent={
            Elements:"<br/><hr/><h3>HTML Elements</h3>The HTML element is everything from the start tag to the end tag:<br/><strong>< tagname >Content goes here...< /tagname ></strong><br/><br/>Examples of some HTML elements:<br/>< h1 >My First Heading< /h1 ><br/>< p >My first paragraph.< /p ><br/><br/><strong>Note:</strong> Some HTML elements have no content (like the element). These elements are called empty elements. Empty elements do not have an end tag!<br/><br/><hr/><h3>Nested HTML Elements</h3>HTML elements can be nested (this means that elements can contain other elements).<br/>All HTML documents consist of nested HTML elements.<br/>The following example contains four HTML elements (< html >, < body >, < h1 > and < p >):<br/><br/>Example:<br/>< !DOCTYPE html ><br/>< html ><br/>< body ><br/>< h1 >My First Heading< /h1 ><br/>< p >My first paragraph.< /p ><br/>< /body ><br/>< /html ><br/><br/><h4>Example Explained:</h4>The < html > element is the root element and it defines the whole HTML document.<br/>It has a start tag < html > and an end tag </html>.<br/><br/>Then, inside the < html > element there is a < body > element<br/>< body ><br/>< h1 >My First Heading< /h1 ><br/>< p >My first paragraph.< /p ><br/>< /body ><br/>he < body > element defines the document's body.<br/>It has a start tag < body > and an end tag < /body >.<br/>Then, inside the < body > element there are two other elements: < h1 > and < p >.<br/><br/>The < h1 > element defines a heading.<br/>It has a start tag < h1 > and an end tag < /h1 ><br/><br/>The < p > element defines a paragraph.<br/>It has a start tag < p > and an end tag < /p ><br/><br/><h5>Never Skip the End Tag</h5>",
            Attribute:"<br/><hr/><h3>HTML Attribute</h3>HTML attributes provide additional information about HTML elements.<br/><br/>&emsp;&emsp;->All HTML elements can have attributes<br/>&emsp;&emsp;->Attributes provide additional information about elements<br/>&emsp;&emsp;->Attributes are always specified in the start tag<br/>&emsp;&emsp;->Attributes usually come in name/value pairs like: name=''value''<br/><br/><hr/><h3>The href Attribute</h3>The <a> tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:<br/>Example <br/>< a href=''https://www.SyncXcel.com''>Visit SyncXcel< /a ><br/><br/><hr/><h3>The src Attribute</h3>The <img> tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:<br/>Example:<br/>< img src=''img_girl.jpg'' ><br/><br/>There are two ways to specify the URL in the src attribute:<br/><strong>1. Absolute URL </strong>- Links to an external image that is hosted on another website. Example: src=''https://www.w3schools.com/images/img_girl.jpg''.<br/><br/><strong>Notes:</strong> External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.<br/><br/><strong>2. Relative URL </strong>- Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src=''img_girl.jpg''. If the URL begins with a slash, it will be relative to the domain. Example: src=''/images/img_girl.jpg''.<br/><br/><strong>Tip:</strong> It is almost always best to use relative URLs. They will not break if you change domain.",
            Headings:"<br/><hr/><h3>HTML Headings</h3>HTML headings are titles or subtitles that you want to display on a webpage.<br/><br/>Example:<br/><h1>Heading 1</h1><h4>Heading 2</h4><h5>Heading 3</h5> <h6>Heading 4</h6>HTML headings are defined with the < h1 > to < h6 > tags.<br/>< h1 > defines the most important heading. < h6 > defines the least important heading.<br/><br/><strong>Note:</strong>Browsers automatically add some white space (a margin) before and after a heading.<br/><br/><hr/><h3>Headings Are Important</h3>Search engines use the headings to index the structure and content of your web pages.<br/>Users often skim a page by its headings. It is important to use headings to show the document structure.<br/>< h1 > headings should be used for main headings, followed by < h2 > headings, then the less important < h3 >, and so on.<br/><br/><strong>Note:</strong>Use HTML headings for headings only. Don't use headings to make text BIG or bold.",
            Paragraphs:"<br/><hr/><h3>HTML Paragraphs</h3>Yhe HTML < p > element defines a paragraph.<br/>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.<br/><br/>Example:<br/>< p >This is a paragraph.< /p ><br/>< p >This is another paragraph.< /p ><br/><br/><hr/><h3>HTML Display</h3>You cannot be sure how HTML will be displayed.<br/>Large or small screens, and resized windows will create different results.<br/>With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.<br/>The browser will automatically remove any extra spaces and lines when the page is displayed:<br/><br/>Example:<br/>< p ><br/>This paragraph<br/>contains a lot of lines<br/>in the source code,<br/>but the browser<br/>ignores it.<br/>< /p ><br/>< p ><br/>This paragraph<br/>contains   &emsp;      a lot of spaces<br/>in the source    &emsp;     code,<br/>but the   &emsp;     browser<br/>ignores it.<br/>< /p ><br/><br/><hr/><h3>Solution - The HTML < pre > Element</h3>The HTML < pre > element defines preformatted text.<br/>The text inside a < pre > element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:<br/><br/>Example:<br/>< pre ><br/>  My Bonnie lies over the ocean.<br/>  My Bonnie lies over the sea.<br/>  My Bonnie lies over the ocean.<br/>  Oh, bring back my Bonnie to me.<br/>< /pre >",
            Formatting:"<br/><hr/><h3>HTML Text Formatting</h3>HTML contains several elements for defining text with a special meaning.<br/><br/>Example:<br/><strong>This text is bold</strong><br/><hr/><h3>HTML Formatting Elements</h3>Formatting elements were designed to display special types of text:<br/>&emsp;< b > - Bold text<br/>&emsp;< strong > - Important text<br/>&emsp;< i > - Italic text<br/>&emsp;< em > - Emphasized text<br/>&emsp;< mark > - Marked text<br/>&emsp;< small > - Smaller text<br/>&emsp;< del > - Deleted text<br/>&emsp;< ins > - Inserted text<br/>&emsp;< sub > - Subscript text<br/>&emsp;< sup > - Superscript text<br/><br/><hr/><h3>HTML < b > and < strong > Elements</h3>The HTML < b > element defines bold text, without any extra importance.<br/>Example:<br/>< b >This text is bold< /b ><br/><br/>The HTML < strong > element defines text with strong importance. The content inside is typically displayed in bold.<br/>Example<br/>< strong >This text is important!< /strong ><br/><br/><hr/><h3>HTML < i > and < em > Elements</h3>The HTML < i > element defines a part of text in an alternate voice or mood. The content inside is typically displayed in italic.<br/><strong>Tip:</strong> The < i > tag is often used to indicate a technical term, a phrase from another language, a thought, a ship name, etc.<br/>Example:<br/>< i >This text is italic< /i ><br/><br/>The HTML < em > element defines emphasized text. The content inside is typically displayed in italic.<br/><strong>Tip:</strong> A screen reader will pronounce the words in < em > with an emphasis, using verbal stress.<br/>Example:<br/>< em >This text is emphasized< /em >",
            Comments:"<br/><hr/><h3>HTML Comments</h3>HTML comments are not displayed in the browser, but they can help document your HTML source code.<br/><br/><hr/><h3>HTML Comment Tag</h3>You can add comments to your HTML source by using the following syntax:<br/><br/>< !-- Write your comments here -- ><br/><br/>Notice that there is an exclamation point (!) in the start tag, but not in the end tag.<br/><strong>Notes:</strong>Comments are not displayed by the browser, but they can help document your HTML source code.<br/><br/><hr/><h3>Add Comments</h3>With comments you can place notifications and reminders in your HTML code:<br/><br/>Example:<br/>< !-- This is a comment -- ><br/>< p >This is a paragraph.< /p ><br/>< !-- Remember to add more information here -- ><br/><br/><hr/><h3>Hide Content</h3>Comments can be used to hide content.<br/>Which can be helpful if you hide content temporarily:<br/><br/>Example:<br/>< p >This is a paragraph.< /p ><br/>< !-- < p >This is another paragraph < /p > -- ><br/>< p >This is a paragraph too.< /p ><br/><br/>You can also hide more than one line, everything between the <!-- and the --> will be hidden from the display.<br/>Comments are also great for debugging HTML, because you can comment out HTML lines of code, one at a time, to search for errors.",
            Class:"<br/><hr/><h3>HTML class Attribute</h3>The HTML class attribute is used to specify a class for an HTML element.<br/>Multiple HTML elements can share the same class.<br/><br/><hr/><h3>Using The class Attribute</h3>The class attribute is often used to point to a class name in a style sheet. It can also be used by a JavaScript to access and manipulate elements with the specific class name.<br/>In the following example we have three < div > elements with a class attribute with the value of ''city''. All of the three < div > elements will be styled equally according to the .city style definition in the head section:<br/><br/>Example:<br/>< !DOCTYPE html ><br/>< html ><br/>< head ><br/>< style ><br/>.city {<br/> background-color: tomato;<br/> color: white;<br/> border: 2px solid black;<br/> margin: 20px;<br/> padding: 20px;<br/>}<br/>< /style ><br/>< /head ><br/>< body ><br/>< div class=''city'' ><br/>  < h2 >London< /h2 ><br/> < p >London is the capital of England.< /p ><br/>< /div ><br/>< div class=''city'' ><br/>  < h2 >Paris< /h2 ><br/>  < p >Paris is the capital of France.< /p ><br/>< /div ><br/>< div class=''city'' ><br/>  < h2 >Tokyo< /h2 ><br/>  < p >Tokyo is the capital of Japan.< /p ><br/>< /div ><br/>< /body ><br/>< /html ><br/><hr/><h3>Multiple Classes</h3>HTML elements can belong to more than one class.<br/>To define multiple classes, separate the class names with a space, e.g. < div class=''city main'' >. The element will be styled according to all the classes specified.<br/>In the following example, the first < h2 > element belongs to both the city class and also to the main class, and will get the CSS styles from both of the classes:<br/><br/>Example:<br/>< h2 class=''city''>Tokyo< /h2 ><br/>< h2 class=''city''>Tokyo< /h2 ><br/>< h2 class=''city''>Tokyo< /h2 >",
            Symbols:"<br/><hr/><h3>HTML Symbols</h3>Symbols that are not present on your keyboard can also be added by using entities.<br/><br/><hr/><h3>HTML Symbols Entities</h3>HTML entities were described in the previous chapter.<br/>Many mathematical, technical, and currency symbols, are not present on a normal keyboard.<br/>To add such symbols to an HTML page, you can use the entity name or the entity number (a decimal or a hexadecimal reference) for the symbol.<br/>Example:<br/>Display the euro sign, €, with an entity name, a decimal, and a hexadecimal value:<br/>< p >I will display & euro;< /p ><br/>< p >I will display & #8364;< /p ><br/>< p >I will display & #x20AC;< /p ><br/><br/>Will display as:<br/>I will display €<br/>I will display €<br/>I will display €<br/><br/><hr/><h3>Some Mathematical Symbols Supported by HTML</h3><strong>Char</strong>&emsp;&emsp;<strong>Number</strong>&emsp;&emsp;<strong>Entity</strong>&emsp;&emsp;<strong>Description</strong><br/>Α	&emsp;&emsp;& #913;&emsp;&emsp;	& Alpha;&emsp;&emsp;	GREEK CAPITAL LETTER ALPHA<br/>Β&emsp;&emsp;	& #914;&emsp;&emsp;	& Beta;&emsp;&emsp;	GREEK CAPITAL LETTER BETA	<br/>Γ	&emsp;&emsp;& #915;&emsp;&emsp;	& Gamma;&emsp;&emsp;	GREEK CAPITAL LETTER GAMMA	<br/>Δ	&emsp;&emsp;& #916;&emsp;&emsp;	& Delta;&emsp;&emsp;	GREEK CAPITAL LETTER DELTA	<br/>Ε	&emsp;&emsp;& #917;&emsp;&emsp;	& Epsilon;&emsp;&emsp;GREEK CAPITAL LETTER EPSILON	<br/>Ζ	&emsp;&emsp;& #918;&emsp;&emsp;	& Zeta;	&emsp;&emsp;GREEK CAPITAL LETTER ZETA<br/>∈&emsp;&emsp;	& #8712;	&emsp;&emsp;& isin;&emsp;&emsp;	ELEMENT OF	<br/>∉	&emsp;&emsp;& #8713;	&emsp;&emsp;& notin;&emsp;&emsp;	NOT AN ELEMENT OF	<br/>∋	&emsp;&emsp;& #8715;	&emsp;&emsp;& ni;&emsp;&emsp;	CONTAINS AS MEMBER	<br/>∏	&emsp;&emsp;& #8719;	&emsp;&emsp;& prod;&emsp;&emsp;	N-ARY PRODUCT",
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

      
<footer class="zindx" >
    <a href="#">FAQ</a>
    <a href="#">Contact US</a>
    <a href="#">Terms of Use</a>
    <a href="#">Privacy Policy</a>
    <a href="#" class="copyright">&copy;</a>
</footer>
</div>
</body>
</html>