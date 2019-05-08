<?php
	// date_default_timezone_set("Asia/Jakarta");
	session_start();
	// echo sha1("Tsiry");
	// echo "Admin-Id:".$_SESSION["id"];

	// $_SESSION["d"] = date("Y-m-d H:i:s");
	
	// echo $_SESSION["d"];
	
	include("fonction/connex.php");
	include("fonction/crud.php");
	include("fonction/requet.php");	
	
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
	<?php include("back/page/header.php"); ?>

<body>


	<?php
		if( isset($_SESSION["user"]) && isset($_SESSION["password"] ) ) {
	?>

			<div id="wrapper">

				<!-- Navigation -->
				<?php include("back/page/nav.php"); ?>
				
				
				<!-- Page Content -->
				<div id="page-wrapper">
					<div class="container-fluid">

						<div class="row">
							<div class="col-lg-12">
								<h1 class="page-header">Page Title</h1>
							</div>
						</div>

						<!-- Rubrique -->
						<?php
							if( isset( $_GET["page"] ) ) {
								include("back/page/contenue/".$_GET["ref"].".php") ;
							} else {
								include("back/page/contenue/dash.php") ;
							}
						?>
						
					</div>
				</div>

			</div>
	
	<?php
		} 
		else {
			include("back/page/contenue/login.php") ;
		}  
		
	?>
			
    <!-- Script -->
	<?php include("back/page/script.php"); ?>

</body>
</html>
