<!doctype html>
<html lang="en-GB">
<head>
	<title><?php echo("$pageTitle");?></title> <!--Echos title of the page in the tab on sites-->
	<meta charset="utf-8">
	<meta name="description" content="Walker College"> <!--Descrition of the site-->
	<meta name="keywords" content="HTML,CSS"> 
	<meta name="author" content="Ryan Walker"> <!--Name of Author-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Structure/css/style.css"> <!--Link to stylesheet-->
	<script src="structure/js/script.js"></script> <!--Link to Javascript file if required-->
	<script src="../js/script.js"></script>
	<noscript>You're Browser Doesn't Support JavaScript!</noscript>
</head>
<body>
<header>

   
            <h1><a href="index.php">Walker College</a></h1>
			
			<nav>
			<ul>
			<li><a href="aboutUs.php">About Us</a></li>
			<li><a href="contactUs.php">Contact Us</a></li>
			</ul>
			</nav><br/>
  
	<?php SESSION_start(); ?>
<?php if(isset($_SESSION['Teacherfirstname'])){ ?>
	<p id="login">Welcome, <?php echo $_SESSION['Teacherfirstname'];?> </p> </br>
  <a id="login" href="logout.php" >Logout</a>
<?php }else{ ?>
  <a id="login" href="login.php" >Login</a>
<?php } ?>

</header>