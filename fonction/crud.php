<?php


function create(){		
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			// $query = "insert into rubrique VALUES ( null ,'Science' , 'science-logo.jpg' , 'Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.' )";			
			// $query = "insert into rubrique VALUES ( null ,'Sport' , 'sport-logo.jpg' , 'Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.' )";			
			$conn->query($query);
			$db->Close();
		}
		else{
			echo $conn;
		}
		
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}

function createreq( $query ){		
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$conn->query($query);
			$db->Close();
		}
		else{
			echo $conn;
		}
		
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}


function read(){
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$query = "SELECT * FROM rubrique";
			$result  = $conn->query($query);
			// foreach ($result as $row) {
				// echo $row['nom'] . "<br>";
				// echo $row['image'] . "<br>";
				// echo $row['detail'] . "<br>";
			// }
			$db->Close();
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


function readtab( $table ){
	try{
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$query = "SELECT * FROM ".$table;
			$result  = $conn->query($query);
			// foreach ($result as $row) {
				// echo $row['nom'] . "<br>";
				// echo $row['image'] . "<br>";
				// echo $row['detail'] . "<br>";
			// }
			$db->Close();
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


function readreq( $query){
	try{
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$result  = $conn->query($query);
			// foreach ($result as $row) {
				// echo $row['nom'] . "<br>";
				// echo $row['image'] . "<br>";
				// echo $row['detail'] . "<br>";
			// }
			$db->Close();
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




function detele( $tab , $col , $val ){		
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){
			$query = " delete from ".$tab." where ".$col." = '".$val."'" ;			
			$conn->query($query);
			$db->Close();
		}
		else{
			echo $conn;
		}
		
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}


function detelereq( $query ){		
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){			
			$conn->query($query);
			$db->Close();
		}
		else{
			echo $conn;
		}
		
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}



function updateereq( $query ){		
	try{
	 
		$db = new DB();
		$conn = $db->Open();
		if($conn){			
			$conn->query($query);
			$db->Close();
		}
		else{
			echo $conn;
		}
		
	}
	catch(PDOException $ex){
		echo $ex->getMessage();
	}
}

// insert into rubrique VALUES ( 1 ,'Science' , 'science-logo.jpg' , 'Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.')

?>