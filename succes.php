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
    <script src="getuserdata.js" defer></script>
</head>
<body>    
<div class="container-fluid">
    <div class="row" id="toprow">
        <div class="col-sm-6 col-xs-1">
            <ul id="hamburger">
                <li><i class="fas fa-list-ul fa-3x"></i></li>
            </ul>
            <ul id="navlist">
                <li>Home</li>
                <li>About Us</li>
                <li>Products</li>
                <li>Contact</li>
            </ul>
        </div>
        <div class="col-sm-6 col-xs-11 text-right">
        <ul id="iconlist">
                <li><i id="usericon" class="far fa-user fa-2x"></i></li>
                <li><i class="fab fa-joomla fa-2x""></i></li>
            </ul>
            <!-- <i class="fab fa-joomla fa-2x""></i> -->
        </div>
    </div>
</div>

<div id="dropdownicon">
    <p id="dataname"></p>
</div>

<div class="footer">
    <p>Sitemap | End user license agreement | FAQ | Help</p>
</div>
</body>
</html>