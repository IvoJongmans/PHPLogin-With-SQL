<?php  
session_start();
header('Content-type: application/json; charset=utf-8');
require('dbconnect.php');
$getsql = "SELECT * FROM chats";
$returnchat = $conn->prepare($getsql);
$returnchat->execute();
$fetch = array();
  while($row = $returnchat->fetch(PDO::FETCH_ASSOC)) {
    $fetch[] = $row;
  }
  echo json_encode($fetch); 
?>