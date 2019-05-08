<?php

	include("connex.php");
	include("crud.php");
	include("requet.php");	

if( isset($_GET["tab"]) ){
	echo $_GET["tab"].$_GET["id"] ;
	header ('location:list-'.$_GET["tab"]);
}

?>