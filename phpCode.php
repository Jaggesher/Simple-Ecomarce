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
        	return '<h1 style="margin-top=450px; color: red; height:100vh; text-aligh:center">Product Aren\'t Available.</h1>';
        }
	}

	function Is_auth(){
		return "yes";
	}
	// echo InserIntotable(6,"kjm",123,"MKN","123213","dsfsdfsd","Sfsdf");
	// echo GetLastID();
?>