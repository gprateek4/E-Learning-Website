<?php
session_start();
include "db_conn.php" ;

$radioVal = $_GET['value'];
$qno = $_GET['queNo'];

$_SESSION["option"][$qno] = $radioVal ;
/*
if( isset( $_SESSION["option"][1])) {
    echo " " . $qno . " :" . $radioVal . " |";

}
*/
?>