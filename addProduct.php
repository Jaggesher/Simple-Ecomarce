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
        <li ><a href="men.php">MEN</a></li>
        <li><a href="women.php">WOMEN</a></li>
        <li><a href="children.php">CHILDREN</a></li>
        <li><a href="electronics.php">Electronics</a></li>

        <li class="dropdown active">
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
<div class="container text-center">    
    <h3><i>ADD ITEM</i></h3>
    <h4><i>Admin Panel</i></h4><br>
    <div class="col-md-8 col-md-offset-2 jumbotron cls1">
        <form action="saveProduct.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-md-3 control-label">Product Name:</label>
                <div class="col-md-8">
                    <input  class="form-control" type="text" name="name" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Product Price:</label>
                <div class="col-md-8">
                    <input  class="form-control" type="number" name="price" placeholder="Enter Price" min="0" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Product Category:</label>
                <div class="col-md-8">
                   <select name="category" class="form-control" required>
                   <option value="" disabled selected hidden>Select Category.</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="children">Children</option>
                    <option value="electronics">Electronics</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">Contact Number:</label>
                <div class="col-md-8">
                    <input  class="form-control" type="text" name="mobile" placeholder="Enter Mobile" maxlength="11" required>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group col-md-3" >
                    <input type="file" name="fileToUpload" id="fileToUpload" class="file" accept="image/jpg, image/jpeg, image/png" required>
                </div>

                <div class="input-group col-sm-8">
                    <span class="input-group-addon" style="padding-right: 18px;"><i class="glyphicon glyphicon-picture"></i></span>
                    <input id="displayFileName" type="text" class="form-control" value="" readonly placeholder="Upload Image">
                    <span class="input-group-btn">
                        <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-folder-open"></i></button>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <button class="btn btn-primary pull-right " type="submit" style="width: 140px;"> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
  <p>Ecomarce-Web-Site</p>
</footer>

<!-- Internal Script Section -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('click', '.browse', function() {
                var file = $(this).parent().parent().parent().find('.file');
                file.trigger('click');
            });
            $(document).on('change', '.file', function() {
                $("#displayFileName").val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        });
    </script>

</body>
</html>