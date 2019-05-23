<?php  
session_start();
header('Content-type: application/json; charset=utf-8');
require('dbconnect.php');
$username = $_SESSION['user'];
$sqlgetuserdata = "SELECT * FROM $username";
$getuserdata = $conn->prepare($sqlgetuserdata);
$getuserdata->execute();
$fetch = array();
  while($row = $getuserdata->fetch(PDO::FETCH_ASSOC)) {
    $fetch = $row;
  }
  echo json_encode($fetch);  
?>