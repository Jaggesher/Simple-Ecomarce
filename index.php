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
        <li><a href="men.php">MEN</a></li>
        <li><a href="women.php">WOMEN</a></li>
        <li><a href="children.php">CHILDREN</a></li>
        <li><a href="electronics.php">Electronics</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addProduct.php">Add Product</a></li>
            <li><a href="deleteProduct.php">Delete Product</a></li>
            <li><a href="LogOut.php">LogOut</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="height: 50px;width: 100%; background-color: rgb(0,66,144);"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel" height="450px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="Image/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="Image/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3><i>HOT ITEMS</i></h3><br>
  <div class="row">

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Image/laptop.jpg" class="img-responsive" style="width:100%;height: 250px;"  alt="Image">
        <p><strong>Name: </strong>Laptop</p>
        <p><strong>Price: </strong>40000tk</p>
        <p><strong>Code: </strong>MW123</p>
        <p><strong>Call: </strong> 0191*-*****4</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Image/sandle.jpg" class="img-responsive" style="width:100%;height: 250px;" alt="Image">
        <p><strong>Name: </strong>Sandle</p>
        <p><strong>Price: </strong>400tk</p>
        <p><strong>Code: </strong>MW123</p>
        <p><strong>Call: </strong> 0191*-*****4</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="Image/Tshirt-1.jpg" class="img-responsive" style="width:100%;height: 250px;" alt="Image">
        <p><strong>Name: </strong> T-shirt</p>
        <p><strong>Price: </strong>250tk</p>
        <p><strong>Code: </strong>MW123</p>
        <p><strong>Call: </strong> 0191*-*****4</p>
      </div>
    </div>

  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Ecomarce-Web-Site</p>
</footer>

</body>
</html>