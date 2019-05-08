<?php
	session_start();
	
	include("connex.php");
	include("requet.php");	

	if( isset($_POST["email"]) && isset($_POST["password"]) ){
		$res = valideInfo( $_POST["email"] , sha1( $_POST["password"] ) ) ;
		if( $res->rowCount()  == "1" ) {		
		
			foreach ($res as $row) {
				$_SESSION["id"] = $row["id"];
				$_SESSION["user"] = $_POST["email"];
				$_SESSION["password"] = $_POST["password"];
			}
		
			header ('location:dash');
			
		}
	} else {
		session_destroy(); 
		header ('location:dash');
	}

?>