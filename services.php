<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($_GET['id'])){
		$id = $_GET['id'];
		if($id == 0)
			echo 'web development';
		else if($id == 1)
			echo 'desktop programming';
		else if($id == 2)
			echo 'mobile development';
		else
			echo 'page not found';
	} else {
		echo 'Services';	
	}?></title>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="includes/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="includes/grayscale.js" ></script>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
</head>

<body id="services">
<div class="main_container">
	<?php 
		if(isset($id) && ($id > 2 || $id < 0)){
			echo '<center><h2>Page not found :(</h2></center>';
			die();
		}
	?>
	<?php include_once("includes/header.php"); ?>
    
    <?php
    	if(isset($id)){
			if($id == 0)
				include_once("includes/webdev.php");
			else if($id == 1)
				include_once("includes/deskdev.php");
			else if($id == 2)
				include_once("includes/mobdev.php");
		} else {
			include_once("includes/webdev.php");
			include_once("includes/deskdev.php");
			include_once("includes/mobdev.php");
		}
	?>
    
    <?php include_once("includes/footer.php"); ?>
</div> <!-- Main container ends here-->
</body>
</html>