<?php 

include 'connect.php';
error_reporting(0);
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$content = $_POST['content'];
    $sql = "INSERT INTO contact (name, email, phone, content) VALUES ('$name', '$email', '$phone', '$content')";
    $result = mysqli_query($conn, $sql);}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="contact.css" />
  <script src="https://kit.fontawesome.com/a8ab30b9ae.js" crossorigin="anonymous"></script>
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
  <title>Contact</title>
</head>

<body>
  <section class="contact">
    <div class="content">
      <h2>Contact Us</h2>
    </div>
    <div class="container">
      <div class="contactInfo">
        <div class="box">
          <div class="icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="text">
            <h3>Address</h3>
            <p style="font-weight:700">NBH 3 ,B.M.S Hostel <br> 3rd floor, Room no:304<br>
          Basavanagudi </p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-phone-square"></i>
          </div>
          <div class="text">
            <h3>Phone</h3>
            <p style="font-weight:700"> (Prajjwal)<br>
          8088756029 (Prajwal)<br>
        9508531139 (Prateek) </p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="far fa-envelope"></i></div>
          <div class="text">
            <h3>E-mail</h3>
            <p style="font-weight:700">prajjwal.cs20@bmsce.ac.in <br>
              prateek.cs20@bmsce.ac.in <br>
              prajwalpp.cs20@bmsce.ac.in</p>
          </div>
        </div>
      </div>
      <div class="contactForm">
        <form action="" method="POST">
          <h2>Send Message</h2>
          <div class="inputbox">
            <input type="text" name="name" required="required">
            <span>Full Name</span>
          </div>
          <div class="inputbox">
            <input type="email" name="email" required="required">
            <span>E-mail</span>
          </div>
          <div class="inputbox">
            <input type="number" name="phone" required="required"  placeholder="">
            <span>Phone</span>
          </div>
          <div class="inputbox">
            <textarea required="required" name="content"></textarea>
            <span>Type Here</span>
          </div>
          <div class="inputbox">
          <button name="submit" class="btn">Send</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>