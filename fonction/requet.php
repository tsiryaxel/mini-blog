<?php

function valide( $mail , $pass ){
	try{
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$query = "select count(*) as num from admine where gmail = '".$mail."' and mdp='".$pass."'";
			echo $query ;
			// $query = "select count(*) as num from admine where gmail = 'tsiryandriamahafaly@gmail.com' and mdp='Tsiry'" ;
			// $result  = $conn->query($query)->rowCount();
			$result  = $conn->query($query)->fetchColumn();
			// echo "<br>".$result ;
			return $result ;
		}
		else{
			echo $conn;
		}
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}

function valideInfo( $mail , $pass ){
	try{
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$query = "select * from admine where gmail = '".$mail."' and mdp='".$pass."'";
			echo $query ;
			// $query = "select count(*) as num from admine where gmail = 'tsiryandriamahafaly@gmail.com' and mdp='Tsiry'" ;
			// $result  = $conn->query($query)->rowCount();
			$result  = $conn->query($query);
			// echo "<br>".$result ;
			return $result ;
		}
		else{
			echo $conn;
		}
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}


function insertRubrique( $nom , $image , $detail ){
	$query = "insert into rubrique VALUES ( null ,'".$nom."' , '".$image."' , '".str_replace("'","\'",$detail)."')";
	createreq( $query );
}



// +------------+-------------+------+-----+---------+----------------+
// | Field      | Type        | Null | Key | Default | Extra          |
// +------------+-------------+------+-----+---------+----------------+
// | id         | int(11)     | NO   | PRI | NULL    | auto_increment |
// | idadmine   | int(11)     | NO   | MUL | NULL    |                |
// | idrubrique | int(11)     | NO   | MUL | NULL    |                |
// | titre      | varchar(50) | NO   |     | NULL    |                |
// | datepost   | timestamp   | YES  |     | NULL    |                |
// | detail     | text        | NO   |     | NULL    |                |
// | tag        | varchar(50) | YES  |     | NULL    |                |
// | image      | varchar(50) | YES  |     | NULL    |                |
// +------------+-------------+------+-----+---------+----------------+



function insertPost( $idadmine , $idrubrique , $titre , $detail , $tag , $image ){
	$query = "insert into post VALUES ( null ,".$idadmine.",".$idrubrique.",'". str_replace("'","\'",$titre) ."', CURRENT_TIME() ,'".str_replace("'","\'",$detail)."','".$tag."','".$image."')" ;
	echo "<br>".$query."<br>";
	createreq( $query );
}



// function getRubPost( $tab ){
	// $query = "select * from post where nom = '".$tab."'" ;
	// return readreq($query);
// }


function getRubPost( $tab ){
	// $query = "select id , idadmine , idrubrique , titre , datepost , detail , tag , image from post where nom = '".$tab."'" ;
	$query = "select post.id as id , post.idadmine as idadmine , post.idrubrique as idrubrique, post.titre as titre , post.datepost as datepost , post.detail as detail , post.tag  as tag , post.image from post join rubrique on post.idrubrique = rubrique.id where nom = '".$tab."'" ;
	return readreq($query);
}


?>