<?php
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Chat!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="getuserdata.js" defer></script>
    <script src="jqueryfunctions.js" defer></script>
</head>
<body>    
<div class="container-fluid">
    <div class="row" id="toprow">
        <div class="col-sm-6 col-xs-3">
            <ul id="hamburger">
                <li><i id="hamburgericon" class="fas fa-list-ul fa-3x"></i></li>
            </ul>
            <ul id="navlist">
                <li><a href="succes.php">Home</a></li>
                <li>About Us</li>
                <li><a href="chat.php">Chat</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-xs-9 text-right">
        <ul id="iconlist">
                <li><i id="usericon" class="far fa-user fa-2x"></i></li>
                <li><i class="fab fa-joomla fa-2x""></i></li>
            </ul>
            <!-- <i class="fab fa-joomla fa-2x""></i> -->
        </div>
    </div>
</div>

<div id="dropdownicon" class="toggle">
    <ul id="dataname">
        <li id="ad">Account Details</li>
    </ul>
</div>

<div id="dropdownmenu">
    <ul id="menucontent">
    <li>Home</li>
    <li>About Us</li>
    <li>Chat</li>
    <li>Contact</li
    </ul>
</div>

<div class="container toggle" id="accdet">
    <ul>
        <li v-for="item in items">{{item}}</li>
    </ul>
    <button>EDIT</button>
</div>

<div class="container toggle" id="chatcontainer">
<div class="row">
<form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <div class="col-sm-4 col-sm-offset-2 col-xs-10">
        <input type="text" class="form-control" id="new_chat" name="new_chat">
      </div>
      <button class="btn btn-info col-sm-2 col-sm-offset-right-4 col-xs-2" type="submit" name='AddChat'>POST!</button>
    </div>
</form>
</div>
<div class="container chatcontainer">
        
</div>
</div>


<?php
if(isset($_POST['AddChat'])) {
    require('addchat.php');
    header('Location: chat.php');
}
?>

<div class="push">
    
</div>

<div class="footer">
    <p>Sitemap | End user license agreement | FAQ | Help</p>
</div>

</body>
</html>