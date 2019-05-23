<?php
    session_start();
?>
<!DOCTYPE html >
<html>
<head>
<title>Simple Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>Simple login</h3>
    <form id="login-form" method="post" action="controle.php" >            
                <label for="user_id">Username:</label>
                <input type="text" name="user_id" id="user_id">           
                <label for="user_pass">Password:</label>
                <input type="password" name="user_pass" id="user_pass">			
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">        
    </form>
</div>

<?php
    $_SESSION['user_id'];
?>
</body>
</html>

