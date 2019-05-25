<?php  
session_start();
header('Content-type: application/json; charset=utf-8');
require('dbconnect.php');
$username = $_SESSION['user'];
$message = $_POST['new_chat'];
if ($_POST['new_chat'] == "") {
  echo "ik ben leeg";
}
else {
$date = date("Y-m-d"); 
$sql = "INSERT INTO chats (username, message, date) VALUES ('$username', '$message', '$date')";
$chat = $conn->prepare($sql);
$chat->execute();
}
?>
