<?php  
session_start();
require('dbconnect.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){	
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$_SESSION['user'] = $username;
$sql = "SELECT * FROM userdata WHERE username='$username' and password='$password'";
$controle = $conn->prepare($sql);
//Ik moet de parameters nog binden. Excuus.
$controle->execute();
$count = $controle->rowCount();;
if ($count == 1){
echo "<script type='text/javascript'>alert('Logingegevens correct!')</script>";
header('Location: succes.php');
}
else{
echo "<script type='text/javascript'>alert('Logingegevens incorrect:(')</script>";
header('Location: createuser.html');
}
}
?>