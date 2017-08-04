<?php
	
	
	function GetLastID(){
		include 'dbConnect.php';
		$sql="SELECT ID FROM product ORDER BY id DESC LIMIT 1";
		$result = $conn->query($sql);
		$row_array=$result->fetch_array();
		$conn->close();
		return $row_array["ID"];
	}

	function InserIntotable($id,$name,$price,$code,$mobile,$img,$category){
		include 'dbConnect.php';
		$sql='INSERT INTO product (ID,Name,Price,Code,Mobile,Img,Category) VALUES('.$id.',"'.$name.'",'.$price.',"'.$code.'","'.$mobile.'","'.$img.'","'.$category.'")';
		if( $conn->query($sql)===TRUE){
			$conn->close();
	  		return"OK";
	  	}else {
	  		$err=$conn->error;
	  		$conn->close();
	  		return $err;
	  	}
	}

	function showResult($category){
		include 'dbConnect.php';
		$sql='SELECT * FROM product WHERE Category="'.$category.'"';
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$data="";
            while($row = $result->fetch_assoc()) {
            	$data.= '<div class="col-sm-4">
					      <div class="thumbnail">
					        <img src="'.$row["Img"].'" class="img-responsive" style="width:100%;height: 250px;"  alt="Image">
					        <p><strong>Name: </strong>'.$row["Name"].'</p>
					        <p><strong>Price: </strong>'.$row["Price"].'tk</p>
					        <p><strong>Code: </strong>'.$row["Code"].'</p>
					        <p><strong>Call: </strong> '.$row["Mobile"].'</p>
					      </div>
					  </div>';
            }
            $conn->close();
            return $data;
        }else{
        	$conn->close();
        	return '<h1 class="alert alert-danger" style="margin-top: 50px ;text-aligh:center">Product Aren\'t Available.</h1>';
        }
	}

	function Is_auth(){
		if(isset($_SESSION["status"]) && $_SESSION["status"] == "ADMIN")
			return "yes";
		else header('location:logIn.php');
	}

	function GiveIT($code){
		include 'dbConnect.php';
			$sql='SELECT * FROM product WHERE Code="'.$code.'"';
			$result = $conn->query($sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				$data='<div class="thumbnail">
				        <img src="'.$row["Img"].'" class="img-responsive" style="width:100%;height: 250px;"  alt="Image">
				        <p><strong>Name: </strong>'.$row["Name"].'</p>
				        <p><strong>Price: </strong>'.$row["Price"].'tk</p>
				        <p><strong>Code: </strong>'.$row["Code"].'</p>
				        <p><strong>Call: </strong> '.$row["Mobile"].'</p>
				        <button class="btn btn-primary" id="delete"> Delete It.</button>
				      </div>';
				$conn->close();
				return $data;
			}else{
				return '<h3 class="alert alert-danger">Product Aren\'t Available.</h3>';
			}
	}

	function DeleteIT($code){

		include 'dbConnect.php';
		$sql='DELETE FROM product WHERE Code="'.$code.'"';
		if( $conn->query($sql)===TRUE){
			$conn->close();
	  		return '<h1 class="alert alert-success" style="text-aligh:center">Product Removed.</h1>';
	  	}else {
	  		$err=$conn->error;
	  		$conn->close();
	  		return $err;
	  	}
	}
	// echo InserIntotable(6,"kjm",123,"MKN","123213","dsfsdfsd","Sfsdf");
	// echo GetLastID();
?>