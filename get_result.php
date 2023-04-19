<?php
session_start();
include "db_conn.php" ;


$count = 1 ;
$quizId = $_SESSION["qid"] ;
$correct = 0 ;
$wrong = 0 ;
$totalQue = 0 ;
$res_String = "" ;
$testSTRING = "" ;
$query = "SELECT * FROM ques WHERE quiz_id = $quizId ; " ;
$res = mysqli_query($conn, $query) or die ();

$totalQue = mysqli_num_rows($res) ;

while( $row = mysqli_fetch_array($res)) {
     
    if( isset( $_SESSION["option"][$count] ) ) {
        $testSTRING .= $row["queno"] . " ";
        if( $row['answer'] == $_SESSION["option"][$row["queno"]] ) {
            $correct = $correct +1 ;
            $res_String = $res_String . " Q:" . $row['queno'] . " corr " ;
        } else {
            $wrong = $wrong +1;
            $res_String = $res_String . " Q:" . $row['queno'] . " wrong " ;
        }  
    } 
    $count =$count + 1;
}

?>

<h2 class = "row mx-auto" > Result </h2> <hr>
<div class = "row" >
    <div class= "col-md-5">
        Total Number of Questions
    </div>
    <div class="col-md-4">
        <?php echo $totalQue; ?>
    </div>
</div>
<br>
<div class = "row" >
    <div class= "col-md-5">
         Number of Questions Attempted
    </div>
    <div class="col-md-4">
        <?php echo $correct + $wrong ; ?>
    </div>
</div>
<br>
<div class = "row" >
    <div class= "col-md-5">
        Correct Answers
    </div>
    <div class="col-md-4">
        <?php echo $correct; ?>
    </div>
</div>
<br>
<div class = "row" >
    <div class= "col-md-5">
        Wrong Answers
    </div>
    <div class="col-md-4">
        <?php echo $wrong; ?>
    </div>
</div>


<?php
//echo $res_String ;
$userid = $_SESSION['user_name'] ;




$query = "SELECT * FROM results WHERE user = '$userid' && quizid = $quizId ; " ;
$res = mysqli_query($conn , $query);
 
if( mysqli_num_rows($res) ==0 ){ 
    
    $query = "INSERT INTO results (`id`, `user`, `quizid`, `totalque`, `corr`, `wrong`) VALUES ( null , '$userid' ,$quizId, $totalQue , $correct , $wrong ) ;" ;

    mysqli_query($conn , $query );
    ?>
    <script type="text/javascript" >
        alert("Saved your result.");
        //history.back();
    </script>
    <?php

}

/*
INSERT INTO `results`(`id`, `user`, `quizid`, `quizName`, `totalque`, `corr`, `wrong`) 
VALUES (null ,'','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')
*/

unset($_SESSION["option"]) ;
//echo $testSTRING ;
?>