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
    </style>
</head>
<body>
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
        <a class="optt" href="./quiz.php?qid=31">Quiz1</a>
        <a class="optt" href="./quiz.php?qid=32">Quiz2</a>
        <a class="optt" href="./index.html">Back</a>

      </div>
      
      <!-- Page content -->
      <div class="main">
        <div >
            <h1 class="title">CSS</h1>
        </div>
    <div class="content" >
        <p >
            CSS is the language we use to style an HTML document.
            <p> CSS describes how HTML elements should be displayed.
            Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
            
            CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts. This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.
            Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device.
            The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.
            The CSS specifications are maintained by the World Wide Web Consortium (W3C)</p>
            <br>
            <h5 style="text-align: center;">Developed by : World Wide Web Consortium(W3C)</h5>
        </p>
    </div>
      <script>
          const javaOptions=['HowTo','Color','Background','Margin','Padding','Overflow','Links','Text','Fonts','Specificity']
          const Jcontent={
            HowTo: "<br/><hr/><h3>How To</h3><strong>Three ways to insert CSS</strong><br/>There are three ways of inserting a style sheet:<br/>&emsp;&emsp;-> External CSS<br/>&emsp;&emsp;-> Internal CSS<br/>&emsp;&emsp;-> Inline CSS<br/><br/><hr/><h3>External CSS</h3>With an external style sheet, you can change the look of an entire website by changing just one file!<br/>Each HTML page must include a reference to the external style sheet file inside the <link> element, inside the head section.<br/><br/>Example:<br/>< !DOCTYPE html ><br/>< html ><br/>< head ><br/>< link rel=''stylesheet'' href=''mystyle.css'' ><br/>< /head ><br/>< body ><br/><br/>< h1 >This is a heading< /h1 ><br/>< p >This is a paragraph.< /p ><br/><br/>< /body ><br/>< /html ><br/><br/>An external style sheet can be written in any text editor, and must be saved with a .css extension.<br/>The external .css file should not contain any HTML tags<br/><br/><hr/><h3>Internal CSS</h3>An internal style sheet may be used if one single HTML page has a unique style.<br/>The internal style is defined inside the < style > element, inside the head section.<br/><br/>Example:<br/>Internal styles are defined within the < style > element, inside the <head> section of an HTML page:<br/>< !DOCTYPE html ><br/>< html ><br/>< head ><br/>< style ><br/>body {<br/>  background-color: linen;<br/>}<br/><br/>h1 {<br/>  color: maroon;<br/>  margin-left: 40px;<br/>}<br/>< /style ><br/>< /head ><br/>< body ><br/><br/>< h1 >This is a heading< /h1 ><br/>< p >This is a paragraph.< /p ><br/><br/>< /body ><br/>< /html ><br/><br/><hr/><h3>Inline CSS</h3>An inline style may be used to apply a unique style for a single element.<br/>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.<br/><br/>Example:<br/>Inline styles are defined within the ''style'' attribute of the relevant element:<br/>< !DOCTYPE html ><br/>< html ><br/>< body ><br/><br/>< h1 style=''color:blue;text-align:center;'' >This is a heading< /h1 ><br/>< p style=''color:red;'' >This is a paragraph.< /p ><br/><br/>< /body ><br/>< /html ><br/><br/><hr/><h3>Cascading order</h3>What style will be used when there is more than one style specified for an HTML element?<br/><br/>All the styles in a page will ''cascade'' into a new ''virtual'' style sheet by the following rules, where number one has the highest priority:<br/>&emsp;&emsp;-> Inline style (inside an HTML element)<br/>&emsp;&emsp;-> External and internal style sheets (in the head section)<br/>&emsp;&emsp;-> Browser default<br/><br/>So, an inline style has the highest priority, and will override external and internal styles and browser defaults.",
            Color:"<br/><hr/><h3>CSS Color</h3><strong>Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.</strong><br/><br/><hr/><h3>CSS Color Names</h3>In CSS, a color can be specified by using a predefined color name:<br/>&emsp;&emsp;->Tomato<br/>&emsp;&emsp;->Orange<br/>&emsp;&emsp;->DodgerBlue<br/>&emsp;&emsp;->MediumSeaGreen<br/>&emsp;&emsp;->Gray<br/>&emsp;&emsp;->SlateBlue<br/>&emsp;&emsp;->Violet<br/>&emsp;&emsp;->LightGray<br/><br/>CSS/HTML support 140 standard color names.<br/><br/><hr/><h3>CSS Background Color</h3>You can set the background color for HTML elements.<br/><br/>Example:<br/>< h1 style=''background-color:DodgerBlue;'' >Hello World< /h1 ><br/>< p style=''background-color:Tomato;'' >Lorem ipsum...<  /p ><br/>",
            Background:"<br/><hr/><h3>CSS Background</h3>The CSS background properties are used to add background effects for elements.<br/><br/>In these , you will learn about the following CSS background properties:<br/>&emsp;&emsp;->background-color<br/>&emsp;&emsp;->background-image<br/>&emsp;&emsp;->background-repeat<br/>&emsp;&emsp;->background-attachment<br/>&emsp;&emsp;->background-position<br/>&emsp;&emsp;->background (shorthand property)<br/><br/><hr/><h3>CSS Background-Color</h3>The background-color property specifies the background color of an element.<br/><br/>Example:<br/>The background color of a page is set like this:<br/>body {<br/>}  background-color: lightblue;<br/>}<br/><br/>With CSS, a color is most often specified by:<br/>&emsp;&emsp;->a valid color name - like ''red''<br/>&emsp;&emsp;->a HEX value - like ''#ff0000''<br/>&emsp;&emsp;->an RGB value - like ''rgb(255,0,0)''<br/><br/><hr/><h3>CSS Background-Image</h3>The background-image property specifies an image to use as the background of an element.<br/>By default, the image is repeated so it covers the entire element.<br/><br/>Example<br/>Set the background image for a page: <br/>body {<br/> background-image: url(''paper.gif''');<br/>}<br/><br/>The background image can also be set for specific elements, like the <p> element:<br/><br/><hr/><h3>CSS Background-Repeat</h3>By default, the background-image property repeats an image both horizontally and vertically.<br/>Some images should be repeated only horizontally or vertically, or they will look strange, like this:<br/><br/>Example<br/>body {<br/>  background-image: url(''gradient_bg.png'');<br/>}<br/><br/>If the image above is repeated only horizontally (background-repeat: repeat-x;), the background will look better<br/><br/><hr/><h3>CSS Background Shorthand</h3>To shorten the code, it is also possible to specify all the background properties in one single property. This is called a shorthand property.<br/><br/>Instead of writing:<br/><br/>body {<br/>background-color: #ffffff;<br/>background-image: url(''img_tree.png'');<br/>background-repeat: no-repeat;<br/> background-position: right top;<br/>}<br/><br/>You can use the shorthand property background:<br/><br/>Example:<br/>Use the shorthand property to set the background properties in one declaration:<br/>body {<br/>background: #ffffff url(''img_tree.png'') no-repeat right top;<br/>}",
            Margin:"<br/><hr/><h3>CSS Margin</h3>The CSS margin properties are used to create space around elements, outside of any defined borders.<br/>With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and left).<br/><br/><hr/><h3>CSS Margin</h3>CSS has properties for specifying the margin for each side of an element:<br/>&emsp;&emsp;->margin-top<br/>&emsp;&emsp;->margin-right<br/>&emsp;&emsp;->margin-bottom<br/>&emsp;&emsp;->margin-left<br/><br/>All the margin properties can have the following values:<br/>&emsp;&emsp;->auto - the browser calculates the margin<br/>&emsp;&emsp;->length - specifies a margin in px, pt, cm, etc.<br/>&emsp;&emsp;->% - specifies a margin in % of the width of the containing element<br/>&emsp;&emsp;->inherit - specifies that the margin should be inherited from the parent element<br/><br/><strong>Tip</strong>: Negative values are allowed.<br/><br/>Example:<br/>Set different margins for all four sides of a < p > element:<br/>p {<br/>  margin-top: 100px;<br/>  margin-bottom: 100px;<br/>  margin-right: 150px;<br/>  margin-left: 80px;<br/>}",
            Padding:"<br/><hr/><h3>CSS Padding</h3>Padding is used to create space around an element's content, inside of any defined borders.<br/><br/>The CSS padding properties are used to generate space around an element's content, inside of any defined borders.<br/>With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element (top, right, bottom, and left).<br/><br/><hr/><h3>Padding - Individual Sides</h3>CSS has properties for specifying the padding for each side of an element:<br/>&emsp;&emsp;->padding-top<br/>&emsp;&emsp;->padding-right<br/>&emsp;&emsp;->padding-bottom<br/>&emsp;&emsp;->padding-left<br/><br/>All the padding properties can have the following values:<br/>&emsp;&emsp;->length - specifies a padding in px, pt, cm, etc.<br/>&emsp;&emsp;->% - specifies a padding in % of the width of the containing element<br/>&emsp;&emsp;->inherit - specifies that the padding should be inherited from the parent element.<br/><br/>Example<br/>Set different padding for all four sides of a < div > element:  <br/>div {<br/> padding-top: 50px;<br/>  padding-right: 30px; <br/> padding-bottom: 50px; <br/> padding-left: 80px;  <br/>}",
            Overflow:"<br/><hr/><h3>CSS Overflow</h3>The CSS overflow property controls what happens to content that is too big to fit into an area.<br/>he overflow property specifies whether to clip the content or to add scrollbars when the content of an element is too big to fit in the specified area.<br/><br/>The overflow property has the following values:<br/>&emsp;&emsp;->visible - Default. The overflow is not clipped. The content renders outside the element's box<br/>&emsp;&emsp;->hidden - The overflow is clipped, and the rest of the content will be invisible<br/>&emsp;&emsp;->scroll - The overflow is clipped, and a scrollbar is added to see the rest of the content<br/>&emsp;&emsp;->auto - Similar to scroll, but it adds scrollbars only when necessary<br/><br/><strong>Note:</strong> The overflow property only works for block elements with a specified height.<br/><br/><hr/><h3>Overflow:visible</h3>By default, the overflow is visible, meaning that it is not clipped and it renders outside the element's box.<br/><br/>Example<br/>div {<br/> width: 200px;<br/>  height: 65px;<br/> background-color: coral;<br/>  overflow: visible;<br/>}<br/><br/><hr/><h3>Overflow:hidden</h3>With the hidden value, the overflow is clipped, and the rest of the content is hidden.<br/><br/>Example:<br/>div {<br/> overflow: hidden;<br/>}<br/><br/><hr/><h3>Overflow:scroll</h3>Setting the value to scroll, the overflow is clipped and a scrollbar is added to scroll inside the box. Note that this will add a scrollbar both horizontally and vertically (even if you do not need it).<br/><br/>Example:<br/>div {<br/> overflow: scroll;<br/>}<br/><br/><hr/><h3>Overflow:auto</h3>The auto value is similar to scroll, but it adds scrollbars only when necessary.<br/><br/>Example:<br/>div {<br/> overflow: auto;<br/>}<br/><br/><hr/><h3>Overflow-x and Overflow-y</h3>The overflow-x and overflow-y properties specifies whether to change the overflow of content just horizontally or vertically (or both):<br/><br/>overflow-x specifies what to do with the left/right edges of the content.<br/>overflow-y specifies what to do with the top/bottom edges of the content.<br/><br/>Example:<br/>div {<br/> overflow-x: hidden;&emsp;/* Hide horizontal scrollbar */<br/>  overflow-y: scroll;&emsp; /* Add vertical scrollbar */<br/>}",
            Links:"<br/><hr/><h3>CSS Links</h3>With CSS, links can be styled in many different ways.<br/><br/><hr/><h3>Styling Links</h3>Links can be styled with any CSS property (e.g. color, font-family, background, etc.).<br/><br/>Example<br/>a {<br/>  color: hotpink;<br/>}<br/><br/><hr/>In addition, links can be styled differently depending on what state they are in.<br/><br/>The four links states are:<br/>&emsp;&emsp;->a:link - a normal, unvisited link<br/>&emsp;&emsp;->a:visited - a link the user has visited<br/>&emsp;&emsp;->a:hover - a link when the user mouses over it<br/>&emsp;&emsp;->a:active - a link the moment it is clicked<br/><br/>Example:<br/>/* unvisited link */<br/>a:link {<br/>  color: red;<br/>}<br/><br/>/* visited link */<br/>a:visited {<br/>  color: green;<br/>}<br/><br/>/* mouse over link */<br/>a:hover {<br/>  color: hotpink;<br/>}<br/><br/>/* selected link */<br/>a:active {<br/>  color: blue;<br/>}<br/><br/>When setting the style for several link states, there are some order rules:<br/>&emsp;&emsp;->a:hover MUST come after a:link and a:visited<br/>&emsp;&emsp;->a:active MUST come after a:hover",
            Text:"<br/><hr/><h3>CSS Text</h3>CSS has a lot of properties for formatting text.<br/><br/><hr/><h3>Text Colors</h3>The color property is used to set the color of the text. The color is specified by:<br/>&emsp;&emsp;->a color name - like ''red''<br/>&emsp;&emsp;->a HEX value - like ''#ff0000''<br/>&emsp;&emsp;->an RGB value - like ''rgb(255,0,0)''<br/><br/>The default text color for a page is defined in the body selector.<br/><br/>Example:<br/>body {<br/>  color: blue;<br/>}<br/>h1 {<br/>  color: green;<br/>}<br/><br/><hr/><h3>Text Color and Background Color</h3>In this example, we define both the background-color property and the color property:<br/><br/>Example:<br/>body {<br/>  background-color: lightgrey;<br/>  color: blue;<br/>}<br/><br/>h1 {<br/>  background-color: black;<br/>  color: white;<br/>}<br/><br/>div {<br/>  background-color: blue;<br/>  color: white;<br/>}",
            Fonts:"<br/><hr/><h3>CSS Fonts</h3>Choosing the right font for your website is important!<br/><br/><hr/><h3>Font Selection is Important</h3>Choosing the right font has a huge impact on how the readers experience a website.<br/>The right font can create a strong identity for your brand.<br/>Using a font that is easy to read is important. The font adds value to your text. It is also important to choose the correct color and text size for the font.<br/><br/><hr/><h3>The CSS font-family Property</h3>In CSS, we use the font-family property to specify the font of a text.<br/><br/><strong>Note:</strong> If the font name is more than one word, it must be in quotation marks, like: ''Times New Roman''.<br/><br/>ExampleSpecify some different fonts for three paragraphs:<br/>.p1 {<br/>  font-family: ''Times New Roman'', Times, serif;}<br/>.p2 {<br/>  font-family: Arial, Helvetica, sans-serif;<br/>}<br/>.p3 {<br/>  font-family: ''Lucida Console'', ''Courier New'', monospace;<br/>}<br/><br/><hr/><h3>The CSS Font Property</h3>To shorten the code, it is also possible to specify all the individual font properties in one property.<br/><br/>The font property is a shorthand property for:<br/>&emsp;&emsp;->font-style<br/>&emsp;&emsp;->font-variant<br/>&emsp;&emsp;->font-weight<br/>&emsp;&emsp;->font-size/line-height<br/>&emsp;&emsp;->font-family<br/><br/><strong> Note</strong>: The font-size and font-family values are required. If one of the other values is missing, their default value are used.<br/><br/>Example:<br/>Use font to set several font properties in one declaration:<br/>p.a {<br/>  font: 20px Arial, sans-serif;<br/>}<br/>p.b {<br/>  font: italic small-caps bold 12px/30px Georgia, serif;<br/>}",
            Specificity:"<br/><hr/><h3>CSS Specificity</h3>If there are two or more CSS rules that point to the same element, the selector with the highest specificity value will ''win'', and its style declaration will be applied to that HTML element.<br/><br/>Think of specificity as a score/rank that determines which style declaration are ultimately applied to an element<br/><br/>Look at the following examples:<br/><br/>In this example, we have used the ''p'' element as selector, and specified a red color for this element. The text will be red:<br/>< html ><br/>< head ><br/> < style ><br/>   p {color: red;}<br/> < /style ><br/>< /head ><br/>< body ><br/>< p >Hello World!< /p ><br/>< /body ><br/>< /html ><br/><br/>Now, look at example 2:<br/><br/>Example 2:<br/>In this example, we have added a class selector (named ''test''), and specified a green color for this class. The text will now be green (even though we have specified a red color for the element selector ''p''. This is because the class selector is given higher priority:<br/>< html ><br/>< head ><br/> < style ><br/>    .test {color: green;}<br/>    p {color: red;}<br/>  < /style ><br/>< /head ><br/>< body ><br/>< p class=''test''' >Hello World!< /p ><br/>< /body ><br/>< /html ><br/><br/>Now, look at example 3:<br/><br/>Example 3:<br/>In this example, we have added the id selector (named ''demo''). The text will now be blue, because the id selector is given higher priority:<br/>< html ><br/>< head ><br/>  < style ><br/>    #demo {color: blue;}<br/>    .test {color: green;}<br/>    p {color: red;}<br/>  < /style ><br/>< /head ><br/>< body ><br/>< p id=''demo'' class=''test'' >Hello World!< /p ><br/>< /body ><br/>< /html ><br/><br/><hr/><h3>Specificity Hierarchy</h3>Every CSS selector has its place in the specificity hierarchy.<br/><br/>There are four categories which define the specificity level of a selector:<br/>&emsp;&emsp;-><strong>Inline styles</strong> - Example: < h1 style=''color: pink;'' ><br/>&emsp;&emsp;-><strong>IDs</strong> - Example: #navbar<br/>&emsp;&emsp;-><strong>Classes, pseudo-classes, attribute selectors</strong> - Example: .test, :hover, [href<br/>&emsp;&emsp;-><strong>Elements and pseudo-elements</strong> - Example: h1, :before",
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