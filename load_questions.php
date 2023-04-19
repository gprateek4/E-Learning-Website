

 
<?php
session_start();
include "db_conn.php" ;

$que = "" ;
$queNo = $_GET["queNo"] ;
$option1 = "" ;
$option2 = "" ;
$option3 = "" ;
$option4 = "" ;
$rightAns = "" ;
$ans = "" ;
$quizid = $_SESSION["qid"] ;
//echo "queNo " . $queNo ;
if(isset( $_SESSION["option"][$queNo] )) {
  $ans = $_SESSION["option"][$queNo] ;
}

$query = "select * from  ques where quiz_id =  $quizid  && queno = $queNo ;";
$res = mysqli_query( $conn, $query ) ;
$count = mysqli_num_rows($res) ;

if($count == 0 ) {
  echo "over" ;
}

if($count == 1 ) {
  while($row = mysqli_fetch_array($res)) {
    $que = $row["question"] ;
    $option1 = $row["op1"] ;
    $option2 = $row["op2"] ;
    $option3 = $row["op3"] ;
    $option4 = $row["op4"] ;
    $rightAns = $row["answer"] ;
  }
  ?>

  <table> <tr> <td class="m-2" >
  <?php echo $queNo . " " . $que ?>   
  </tr></td>
  </table>

  <hr>  <!---  answers below ---->

  <table> 
  
  <tr> 
    <td>
      <label> 
        
            <input type="radio"  name = <?php echo $queNo ; ?> value ="op1" 
                onclick="saveOption(this.value, <?php echo $queNo; ?>)" 
                <?php
                    if( $ans == "op1" ) echo "checked" ;
                ?>
            >
        <?php echo  $option1 ; ?>

      </label > 
    </td>
  </tr>
  
  
  <tr> 
    <td>
      <label> 
        
            <input type="radio"  name = <?php echo $queNo ; ?> value ="op2" 
                onclick="saveOption(this.value, <?php echo $queNo; ?>)" 
                <?php
                    if( $ans == "op2" ) echo "checked" ;
                ?>
            >
        <?php echo  $option2 ; ?>

      </label > 
    </td>
  </tr>

  
  <tr> 
    <td>
      <label> 
        
            <input type="radio"  name = <?php echo $queNo ; ?> value ="op3" 
                onclick="saveOption(this.value, <?php echo $queNo; ?>)" 
                <?php
                    if( $ans == "op3" ) echo "checked" ;
                ?>
            >
        <?php echo  $option3 ; ?>

      </label > 
    </td>
  </tr>

  <tr> 
    <td>
      <label> 
        
            <input type="radio"  name =<?php echo $queNo ; ?>  value ="op4" 
                onclick="saveOption(this.value, <?php echo $queNo; ?>)" 
                <?php
                    if( $ans == "op4" ) echo "checked" ;
                ?>
            >
        <?php echo  $option4 ; ?>

      </label > 
    </td>
  </tr>
</table>



<script type="text/javascript">



/*
function saveOption(radioValue , queno) {
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("q").innerHTML = currQue + " ";
            document.getElementById("optns").innerHTML += this.responceText ;
            this.responseText;

        }
    };
    
    xhttp.open("GET", "save_options.php?queNo=" + queno +"&value=" + radioValue , true);
    xhttp.send( null );
}
*/
</script>
  <?php
  
}

?>

