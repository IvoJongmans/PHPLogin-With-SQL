<?php  
require('dbconnect.php');
if (isset($_POST['new_user_id']) and isset($_POST['new_user_pass'])){	
$newusername = $_POST['new_user_id'];
$newpassword = $_POST['new_user_pass'];
$newname = $_POST['new_user_name'];
$newlastname = $_POST['new_user_lastname'];
$newstreet = $_POST['new_user_street'];
$newzcode = $_POST['new_user_zcode'];
$newcity = $_POST['new_user_city'];
$newemail = $_POST['new_user_email'];

// $sqlcreatetable = "CREATE TABLE TEST (
//     name varchar(255) NOT NULL,
//     lastname varchar(255) NOT NULL,
//     street varchar(255) NOT NULL,
//     zipcode varchar(255) NOT NULL,
//     city varchar(255) NOT NULL,
//       email varchar(255) NOT NULL,
//       lastname varchar(255) NOT NULL
//   )";
// $createtable = $conn->prepare($sqlcreatetable);
// $createtable->execute();
// $sqlstorenewuser = "INSERT INTO '$newusername' (name, lastname, street, 
//                     zipcode, city, email) values ('$newname', '$newlastname', 
//                     '$newstreet', '$newzcode', '$newcity', '$newemail')";
// $storenewuser = $conn->prepare($sqlstorenewuser);
// $storenewuser->execute();
$sql = "INSERT INTO userdata (username, password) VALUES ('$newusername', '$newpassword')";
$addnewuser = $conn->prepare($sql);
// Ik moet de parameters nog binden. Excuus.
$addnewuser->execute();
$count = $addnewuser->rowCount();
if ($count == 1){
echo "<script type='text/javascript'>alert('$newusername')</script>";
$sqlcreatetable = "CREATE TABLE $newusername (
    name varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    street varchar(255) NOT NULL,
    zipcode varchar(255) NOT NULL,
    city varchar(255) NOT NULL,
      email varchar(255) NOT NULL
  )";
  $createtable = $conn->prepare($sqlcreatetable);
  $createtable->execute();
  $sqlstorenewuser = "INSERT INTO $newusername (name, lastname, street, 
                    zipcode, city, email) values ('$newname', '$newlastname', 
                    '$newstreet', '$newzcode', '$newcity', '$newemail')";
  $storenewuser = $conn->prepare($sqlstorenewuser);
  $storenewuser->execute();
}
else{
echo "<script type='text/javascript'>alert('This user already exists:(')</script>";
}
}
?>