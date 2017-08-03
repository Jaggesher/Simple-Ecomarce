<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="Jqury/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="CSS/index.css">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="men.php">MEN</a></li>
        <li><a href="women.php">WOMEN</a></li>
        <li><a href="children.php">CHILDREN</a></li>
        <li><a href="electronics.php">Electronics</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="height: 50px;width: 100%; background-color: rgb(0,66,144);"></div>
<div class="container text-center">    
  <h3><i>MEN ITEMS</i></h3><br>
  
  <?php
    !include "phpCode.php";
    echo showResult("men");
  ?>

</div>

<footer class="container-fluid text-center">
  <p>Ecomarce-Web-Site</p>
</footer>

</body>
</html>