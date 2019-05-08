<?php
	
	include("fonction/connex.php");
	include("fonction/crud.php");
	include("fonction/requet.php");

//Tableau rubrique
$rubrique = readtab("rubrique");
	
	
?>


<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Lifestyle - Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="front/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="front/assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="front/assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="front/assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="front/assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="front/assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
		-->
		
    </head>
    <body>
		<div id="body-bg">
		
			<?php
				include("front/page/other.php");
				include("front/page/menu.php");
			?>
			
			<!--
			<div id="post_header" class="container" style="height:340px">
            </div>
            <div id="content-top-border" class="container">
            </div>
			-->
			
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
				<?php
					// include("front/page/home.php");
					// include("front/page/rubrique.php");
					// include("front/page/post.php");
					
					if( isset( $_GET["page"] ) ){
						include("front/page/".$_GET["page"].".php");
					} else {
						include("front/page/home.php");
					// include("front/page/post.php");
					}
					
				?>
			</div>
			<!-- === END CONTENT === -->
			<!-- === BEGIN FOOTER === -->
				<?php
					include("front/page/footer.php");
					include("front/page/script.php");
				?>
			<!-- === END FOOTER === -->
			
		</div>
    </body>
</html>
<!-- === END FOOTER === -->