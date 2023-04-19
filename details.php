<?php
session_start();
include "db_conn.php" ;
if( isset($_GET["heade"])) {
  $_SESSION["heade"] = $_GET["heade"] ;
  $heade = $_GET["heade"];
} else {
   $heade = $_SESSION["heade"];
}

$userid = $_SESSION['user_name'];
$insert = 1;
$query = "SELECT * FROM details WHERE userId = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);

    if(  mysqli_num_rows($res) == 1) {

      while( $row = mysqli_fetch_array($res)) {
        $id = $row["id"];
        $name = $row["userId"] ;
        $mobile = $row['mobile'] ;
        $dob = $row["dob"] ;
        $email = $row["email"] ;
        $gender = $row["gender"];
      }    
    }
$name = $userid;
$id = $mobile = $dob = $email = $gender = "" ;
//$_SERVER["REQUEST_METHOD"]  == "WAIT" ;
?>

<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="styleee.css">

    <style>
        .error {color: #FF0000;}
        *{
            font-size : 1.1em ;
        }
    </style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $insert = 0;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $insert = 0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $insert = 0;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $insert = 0;
    }
  }
  /*
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }*/

  if (empty($_POST["mobile"])) {
    $mobile = "";
  } else {
    
    $mobile = test_input($_POST["mobile"]);
    if(strlen($mobile) != 10 || $mobile != ctype_digit($mobile)) {
       $mobilerr = "Invalid Mobile number";
       $insert = 0;
    }
    
   // $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["dob"])) {
    $dob = "";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $insert = 0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($email != "") {
  $query = "INSERT INTO  details (`id`, `userId`, `email`, `mobile`, `dob`, `gender`) VALUES ( null , '$name','$email',$mobile, '$dob', '$gender' );";
  mysqli_query($conn , $query);
  header("Location: http://localhost/projectwork-main/start_page.php.");
  
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h2><?php echo $heade ; ?></h2> 

<div class="form-group">
  Name: <span class="error">* <?php echo $nameErr;?></span>
  <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
</div>

<div class="form-group">
  E-mail: <span class="error">* <?php echo $emailErr;?></span>
  <input type="text" name="email"  class="form-control" value="<?php echo $email;?>">
</div>

<div class="form-group">
  Mobile: <input type="number" name="mobile"  class="form-control" value="<?php echo $mobile;?>">
  <span class="error"> <?php echo $nameErr;?></span>
</div>
  <!---
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br> --->
  <div class="form-group">
  Date of Birth:<input type="date" name="dob"  class="form-control" value="<?php echo $dob;?>">
</div>
<div class="form-label">  
  Gender:<span class="error">* <?php echo $genderErr;?></span>
</div>
<div class="radio px-5">
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
</div>

<div class="radio px-5">
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
</div>

<div class="radio px-5"> 
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
</div>
  
<input type="submit" name="submit" class="btnn" value="Submit">
</form>


</div>
</div>
</div>
</div>
</section>


<?php
/*echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
*/

if( $id != "" )
if( $insert == 1) {
  $query = "SELECT * FROM details WHERE userId = '$userid'  ; " ;
    $res = mysqli_query($conn , $query);

  if(  mysqli_num_rows($res) == 1) {

   $query = "UPDATE `details` SET `userId`='$name',`email`= '$email',`mobile`= $mobile ,`dob`= '$dob' ,`gender`= '$gender' WHERE   id = $id ;" ;
   mysqli_query($conn , $query);
    ?>
    <script type="text/javascript" >
      alert("Details saved");
    </script>
    <?php
    $insert = 0;
    header("location: start_page.php");
  }
  else if(mysqli_num_rows($res) == 0 ) {
    if( $email != "") {
      $query = "INSERT INTO  details (`id`, `userId`, `email`, `mobile`, `dob`, `gender`) VALUES ( null , '$name','$email',$mobile, '$dob' , '$gender' );";
      mysqli_query($conn , $query);
    }
    
    ?>
    <script type="text/javascript">
      alert("details saved");
    </script>
    <?php
    $insert = 0;
    header("Location: http://localhost/projectwork-main/start_page.php.");

    exit();    
  } else {
    ?>
    <script type="text/javascript">
      alert("failed");
    </script>
    <?php
  }

} else {
?>
<script type="text/javascript">
  alert("invalid entry");
</script>
<?php  
}


?>

</body>
</html>