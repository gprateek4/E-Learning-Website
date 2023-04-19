<?php
    session_start();

    $link = mysqli_connect('localhost', 'root');
    mysqli_select_db($link, 'projwork') ;
        if( ! $link ) {
            die("connection FAILURE : " . mysqli_connect_error() );

        } //else echo "connected ";
    
        unset($_SESSION["option"]) ;
        $quizId = $_GET['qid'];
        $userid = "anonymas" ;
    if( isset($_SESSION['user_name'])) {
        $userid = $_SESSION['user_name'];
    }
    //echo "quizId " . $quizId ;
    $_SESSION['qid'] = $quizId ;

    $count = 0;
    
    $res = mysqli_query( $link ,  "select * from ques where quiz_id = $quizId" ) or die ("conn fail". mysqli_connect_error() );
    $count = mysqli_num_rows($res);
    //echo "count " . $count ;

    $query = "SELECT * FROM results WHERE user = '$userid' && quizid = $quizId ; " ;
    $res = mysqli_query($link , $query);
 
    if( mysqli_num_rows($res) > 0){ 
        ?>
        <script type="text/javascript" >
        alert("Already Attempted.");
        history.back();
        </script>
        <?php
    	//header("Location: http://localhost/projectwork-main/start_page.php"  );
        
    }


    ?>
<html><head> 
  <title>Bootstrap Example</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
    <style>
        td {
            padding : 10px ;
            rows : "2";
        }
    </style>
 </head> 
 <body> 
    

        <nav>
            <a href="./start_page.php" class="menu"><i class="fa fa-home"></i>HOME</a>
            <a href="./java.php" class="menu">JAVA</a>
            <a href="./HTML.php" class="menu">HTML</a>
            <a href="./CSS.php" class="menu">CSS</a>
            <a href="https://www.google.com/search?q=google&oq=google&aqs=chrome..69i57j69i59j69i60l3j69i65l2.3379j0j7&sourceid=chrome&ie=UTF-8" class="menu">HELP</a>
            <?php
                 if (isset($_SESSION['uid']) && isset($_SESSION['user_name'])) {
                  echo "<a href=./userprofile.php class='log' >" . $userid.  "</a>"  ;
                 } else {
                  echo "<a href=./userprofile.php class='log' >Login/SignUp  </a>";
                 }
            ?>
            <!---<a href="./login.php" class="log">LOGIN/SIGNUP</a> --->
          </nav>
    <section style="background-color: #eee;">
    <div class="container py-5" id="containerMain">
        <div class = "card" style="min-height: 300px " >
            <div class = "card-body" >
                <div id = "q" >
                    Questions and options are displayed here 
                </div>
            </div>
        </div>
        
        <div class="buttons my-3" >
            <input type="button" id="prevbtn"  class= "btn  btn-light " onclick = "loadPrevious()" value="Prev Que">
              &nbsp
            <input type="button" id="nextbtn" class= "btn btn-info" onclick = "loadNext()" value="Next Que" >
        </div>       
        
        <div>
        </div>
        <div class = "card card-body " > 
          <div class="col-sm-2 mx-auto">
            <input type="button" id="submitBTN" class= "btn btn-success" onclick = "getResul()" value="Submit" >
          </div>
        </div>
    </div>
    </section>
    </body>
    </html>
    
<script type="text/javascript">

    var currQue = 0;

    loadNext(currQue);


    function loadQuetion(currQue) {
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("q").innerHTML = currQue + " ";
                document.getElementById("q").innerHTML =
                this.responseText;
            }
        };
        
        xhttp.open("GET", "load_questions.php?queNo=" + currQue  , true);
        xhttp.send( null );
    }

    function loadPrevious() {
        currQue = currQue - 1 ;
        document.getElementById("prevbtn").style.display = "inline";
        document.getElementById("nextbtn").style.display = "inline";

        if( currQue == 1) {
            document.getElementById("prevbtn").style.display = "none";
        }
        if( currQue == 5 ) {
            document.getElementById("nextbtn").style.display = "none";
        }
        loadQuetion(currQue);
    }

    function loadNext() {
        currQue = currQue+1 ;
        document.getElementById("prevbtn").style.display = "inline";

        if( currQue == 1) {
            document.getElementById("prevbtn").style.display = "none";
        }
        if( currQue == <?php echo $count ?> ) {
            document.getElementById("nextbtn").style.display = "none";
        }
        loadQuetion(currQue);
    }

    function getResul() {
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("q").innerHTML = currQue + " ";
                document.getElementById("containerMain").innerHTML =
                this.responseText;
            }
        };
        
        xhttp.open("GET", "get_result.php?queNo=" + currQue  , true);
        xhttp.send( null );
    }

    function saveOption(radioValue , queno) {
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("q").innerHTML = currQue + " ";
            document.getElementById("optnEntered").innerHTML += 
            this.responseText;

        }
    };
    
    xhttp.open("GET", "save_options.php?queNo=" + queno +"&value=" + radioValue , true);
    xhttp.send( null );
    }

</script>
    <?php
/*
    while( $itr = mysqli_fetch_assoc( $res )) {
        echo "Q". ++$count . " " . $itr["question"] . "<br>"; 
    }
    */
?>
