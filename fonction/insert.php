<?php
session_start();

	include("connex.php");
	include("crud.php");
	include("requet.php");	

function setUpload( $target_dir , $name , $file ){
	$target_file = $target_dir . $name ;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($name)) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		echo "</br></br></br>".$_FILES["fileToUpload"]["tmp_name"]."</br></br></br>".$target_file ;
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br>";
			// echo "<img src='uploads/".$name;
			return true ;
			
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}	
	
}


	
if(isset($_GET["add"]) && $_GET["add"] =="rubrique" ){
	
	// echo $_GET["nom"].$_GET["detail"].$_GET["image"];
	echo $_POST["nom"].$_POST["name"].$_POST["detail"];
	
	// setUpload(  "../uploads/" , $_POST["name"] , $_FILES["fileToUpload"]);
	$add = setUpload(  "../front/assets/img/" , $_POST["name"] , $_FILES["fileToUpload"]);
	
	if($add){
		insertRubrique( $_POST["nom"] ,$_POST["name"], $_POST["detail"] ) ;
	}
	
	// echo "<img src='uploads/".basename( $_FILES["fileToUpload"]["name"])."' />";
}

if(isset($_GET["add"]) && $_GET["add"] =="post" ){
	// CURRENT_TIME()
	// echo $_GET["nom"].$_GET["detail"].$_GET["image"];
	echo $_SESSION["id"].$_POST["idrubrique"].$_POST["titre"];
	echo $_POST["detail"].$_POST["tag"].$_POST["name"];
	
	$add = setUpload(  "../front/assets/img/blog/" , "post-".$_POST["name"] , $_FILES["fileToUpload"]);
	
	if($add){
		// function insertPost( $idadmine , $idrubrique , $titre , $detail , $tag , $image ){
		insertPost( $_SESSION["id"] , $_POST["idrubrique"] , $_POST["titre"] , $_POST["detail"] , $_POST["tag"] , "post-".$_POST["name"] ) ;
	}
}

?>