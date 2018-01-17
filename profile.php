<?php include_once "config.php"; 
if(!isset($_SESSION["authorized"])){
	header("location:" . $sourceAPP);
}
?>
<html>
    <head>
        <?php include_once "include/head.php"; ?>
    </head>
    <body>        
        <!-- Header -->
		<?php include_once "include/header_profile.php"; ?>
		<!-- Header Ends Here -->
				
		<!-- Page -->
        <?php include_once "include/page_profile.php"; ?>                
		<!-- /Page -->
		
		<!-- Copyright -->
        <?php include_once "include/copyright.php"; ?>
    </body>
</html>