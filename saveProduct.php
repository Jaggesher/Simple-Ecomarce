<?php

	!include "phpCode.php";

	if(is_auth()=="yes"){
		$name=$_POST["name"];
		$price=$_POST["price"];
		$mobile=$_POST["mobile"];
		$category=$_POST["category"];
		$id=GetLastID()+1;
		$code="";
		if($category=="men") $code="EEM".$id;
		else if($category=="women") $code="EEW".$id;
		else if($category=="children") $code="EEC".$id;
		else if($category=="electronics") $code="EEE".$id;

		if($name!="" && $price!=null && $mobile!="" && $category!=""){
			$target_dir = "UploadImage/";
			$target_file = basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$target_file=$id.".".$imageFileType;
			$target_file=$target_dir.$target_file;
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}

			if ($_FILES["fileToUpload"]["error"]==1) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}

			if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			    echo "Sorry, only JPG, JPEG, PNG  files are allowed.";
			    $uploadOk = 0;
			}

			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			}else if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
				$result=InserIntotable($id,$name,$price,$code,$mobile,$target_file,$category);
				if($result=="OK"){
					echo "Complete";
				}
				else echo $result;
			}
		}
	}
?>