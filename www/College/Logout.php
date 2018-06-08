<?php 

	session_start();
	
	if(isset($_SESSION['Teacherfirstname'])){
		
		session_destroy();
		
		header('Location: index.php');
		
	}
	
	?>