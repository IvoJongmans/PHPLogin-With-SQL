<!DOCTYPE html >
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-sm-offset-3 col-sm-6 text-right">
        <i class="fab fa-joomla fa-3x" style="padding-top:25px;padding-bottom:25px;"></i>
    </div>
</div>
<div class="container">
    <div class="col-sm-offset-3 col-sm-9">
  <h2>Login</h2>
    </div>
  <form class="form-horizontal" method="post" action="controle.php">
    <div class="form-group">
      <label class="control-label col-sm-3" for="user_id">Username:</label>
      <div class="col-sm-6 col-sm-offset-right-3">
        <input type="text" class="form-control" id="user_id" name="user_id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="user_pass">Password:</label>
      <div class="col-sm-6 col-sm-offset-right-3">          
        <input type="password" class="form-control" id="user_pass" password" name="user_pass" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-default">Login</button>
        <!-- hier moet nog een reset button bij -->
      </div>
    </div>
  </form>
</div>
<div class="container">
    <div class="col-sm-offset-3 col-sm-6">
        <p>New to our page? Click <a href=createuser.html>here</a> to create an account</p>
    </div>
</div>
</body>
</html>

