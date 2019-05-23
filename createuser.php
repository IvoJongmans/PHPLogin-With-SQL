<?php  
require('dbconnect.php');
if (isset($_POST['new_user_id']) and isset($_POST['new_user_pass'])){	
$newusername = $_POST['new_user_id'];
$newpassword = $_POST['new_user_pass'];
$sql = "INSERT INTO userdata (username, password) VALUES ($newusername, $newpassword)";
$addnewuser = $conn->prepare($sql);
//Ik moet de parameters nog binden. Excuus.
$addnewuser->execute();
$count = $adduser->rowCount();
if ($count == 1){
echo "<script type='text/javascript'>alert('User added!')</script>";
}
else{
echo "<script type='text/javascript'>alert('This user already exists:(')</script>";
}
}
?>