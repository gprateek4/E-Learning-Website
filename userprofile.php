<?php
session_start();
include "db_conn.php" ;

$id = $mobile = $dob = $email = $gender = "" ;
$percent = 0 ;
$userid = $_SESSION['user_name'];
$query = "SELECT * FROM users WHERE user_name = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);

    while( $row = mysqli_fetch_array($res)) {
        $name = $row["name"] ;
        $userid = $row['user_name'] ;

    }

    $query = "SELECT * FROM details WHERE userId = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);

    //if(  mysqli_num_rows($res) == 1) {

      while( $row = mysqli_fetch_array($res)) {
        
        $mobile = $row['mobile'] ;
        $dob = $row["dob"] ;
        $email = $row["email"] ;
        $gender = $row["gender"];
      }    
    //}


    $query = "SELECT * FROM results WHERE user = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);
    $noQuizes = mysqli_num_rows($res);
$totalScore = 0;
$total = 0 ;
    while($row = mysqli_fetch_array($res)) {
        $totalScore += $row['corr'] ;
        $total += $row["totalque"];
      }
    if($total != 0)
      $percent = ($totalScore/$total)*100;
?>
<html><head> 
  <title>my profile</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&display=swap');
*{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    list-style: none;
    font-family: 'Poppins', sans-serif;
}
      header{
    padding: 10px;
    text-align: left;
    background-color: white;
    color: rgb(0, 0, 0);
    
    height: 20vh;
    min-height: 20px;
}
header h1{
    font-size: 60px;
   
}
nav{
    position: sticky;
    top: 0;
    background-color: rgb(51, 49, 49);
    overflow: hidden;
    display: flexbox;
    z-index: 2;
}
nav a{
    display: block;
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    float: left;
    font-weight: 400;
}
.log{
    float: right;
}
.zindx {
  z-index: 2 ;
}
  </style>

</head> 
 <body>
  <!-- Page content -->
  <header style="display: flex; justify-content: left ;align-items: baseline;"><h1 style="font-family: cursive;">&emsp;SyncXcel....</h1></header>
        
        <nav class = "zindx">
            <a href="./start_page.php" class="menu"><i class="fa fa-home"></i>HOME</a>
            <a href="./java.php" class="menu">JAVA</a>
            <a href="./HTML.php" class="menu">HTML</a>
            <a href="./CSS.php" class="menu">CSS</a>
            <a href="contact.php" class="menu">HELP</a>
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
   <div class="container-fluid col-md-10 py-5 content"> 
    <div class="row"> 
     <div class="col-md-4"> 
      <div class="card mb-4"> 
       <div class="card-body text-center"> 
        <img src="./user.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"> 
        <h5 class="my-3">
         <?php echo $_SESSION["user_name"] ; ?> </h5> 
        <p class="text-muted mb-1"> 
         <?php echo $name ; ?> </p> 
        <p class="text-muted mb-4"><?php echo $email ; ?></p> 
        <div class="d-flex justify-content-center mb-2">
        <!--
        <a href="./details.php?heade=Edit Details" class="menu">
          <button type="button" class="btn btn-primary" >Edit</button>
        </a>--->
        <a href="./logout.php" class="menu">
         <button type="button" class="btn btn-outline-primary ms-1">Log Out</button>
        </a>
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="col-md-8"> 
      <div class="card mb-4"> 
       <div class="card-body"> 
        <div class="row"> 
         <div class="col-sm-5"> 
          <p class="mb-0">User Name</p> 
         </div> 
         <div class="col-sm-7"> 
          <p class="text-muted mb-0"> 
           <?php echo $_SESSION["user_name"] ; ?> 
           </p> 
         </div> 
        </div> 
        <hr> 
        <div class="row"> 
         <div class="col-sm-5"> 
          <p class="mb-0">mobile</p> 
         </div> 
         <div class="col-sm-7"> 
          <p class="text-muted mb-0"> 
          <?php if($mobile!="") echo $mobile ; ?> 
            </p> 
         </div> 
        </div> 
        <hr> 
        <div class="row"> 
         <div class="col-sm-5"> 
          <p class="mb-0">Number of Quizes attempted</p> 
         </div> 
         <div class="col-sm-7"> 
          <p class="text-muted mb-0"><?php echo  $noQuizes ; ?> </p> 
         </div> 
        </div> 
        <hr> 
        <div class="row"> 
         <div class="col-sm-5"> 
          <p class="mb-0">Total score</p> 
         </div> 
         <div class="col-sm-7"> 
          <p class="text-muted mb-0">  <?php if($mobile!="") echo  $totalScore ; ?>  </p> 
         </div> 
        </div> 
        <hr> 
        <div class="row"> 
         <div class="col-sm-5"> 
          <p class="mb-0">Percentage</p> 
         </div> 
         <div class="col-sm-7"> 
          <p class="text-muted mb-0">  <?php echo $percent ; ?> % </p> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <hr>

    <!----- ---->
    <div class="container p-2"> 
     <div class="row"> 
      <div class="col-12 card card-body text-center mb-2">
        Quizes 
       <span class="text-primary font-italic me-1">assigment</span> 
      <div class="text-primary me-1"> Analysis </div>
      </div> 
     </div> 


    <div class="card mb-2"> 
      <div class="card-body">
<?php 

    $query = "SELECT * FROM results WHERE user = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);
    $noQuizes = mysqli_num_rows($res);

    while($row = mysqli_fetch_array($res)) {
        $totalScore = $row['corr'] ;
        $total = $row["totalque"];
        $wrong = $row['wrong'] ;
        $wrongPer = ($wrong/$total) *100 ;
        $percent = ($totalScore/$total)*100;
        $quizid = $row["quizid"];

        $query2 = "SELECT * FROM `quizes` WHERE quizid = $quizid ;" ;
        $res2 = mysqli_query($conn , $query2) ;
        while($quiz = mysqli_fetch_array($res2)) {
          $quizName = $quiz["quizname"];
        }

  ?>
      
       <div class="row"> 
        <div class="col-sm-3">
          <?php  echo $quizName ; ?> 
        </div> 
        <div class="col-sm-9"> 
            <div class="progress rounded mb-2" style="height: 25px;">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: <?php echo $percent ; ?>%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">
                        <?php echo $percent ; ?>%
                    </div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: <?php echo $wrongPer ; ?>%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">
                        <?php echo $wrongPer ; ?>%
                    </div>
            </div>   
        </div> 
        </div> 
       

       <hr> 
<?php
    }
?>
      </div> 
       
     </div> 
    </div> 
     
   </div> 
  </section> 
 
</body></html>