<?php
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>Welcome!</title>
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

<div class="container toggle" id="homecontainer">
    <!-- <div class="col-sm-4 text-center">
<img src="jeroen.jfif" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> <br>
</div>
<div class="col-sm-8">
    <p>Naam: Jeroen de Reus</p>
    <p>GitHub: jdereus87</p>
    <p>Followers: 6</p>
    <p>Following: 6</p>
    <p>Repositories: 12</p>
<div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div> -->
</div>



<div class="push">
    
</div>

<div class="footer">
    <p>Sitemap | End user license agreement | FAQ | Help</p>
</div>

</body>
</html>