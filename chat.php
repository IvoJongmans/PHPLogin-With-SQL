<?php  
session_start();
header('Content-type: application/json; charset=utf-8');
require('dbconnect.php');
$username = $_SESSION['user'];
$message = $_POST['new_chat'];
$date = date("Y-m-d"); 

$sql = "INSERT INTO chats (username, message, date) VALUES ('$username', '$message', '$date')";
$chat = $conn->prepare($sql);
$chat->execute();
$getsql = "SELECT * FROM chats;";
$returnchat = $conn->prepare($getsql);
$returnchat->execute();
$fetch = array();
  while($row = $returnchat->fetch(PDO::FETCH_ASSOC)) {
    $fetch = $row;
  }
  echo json_encode($fetch); 
?>