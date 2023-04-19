<?php 
session_start();

session_unset();
session_destroy();

header("Location: start_page.php");
?>