<?php

	if($_POST){
		
		$studentUsername = $_POST["studentUsername"];
		$studentPassword = $_POST["studentPassword"];
		
		$mysqli = new mysqli("localhost", "root", "root", "localcollege");
		
		if(mysqli_connect_errno()){
			
			echo "Error connecting to database";
			
		}
			else{
				
				$query = "SELECT * FROM student WHERE studentUsername = '{$studentUsername}'";
				
				$results = mysqli_query($mysqli, $query);
				
				$numberOfRows = mysqli_num_rows($results);
				
				if($numberOfRows == 1){
					
					while($array = mysqli_fetch_array($results)){
						
						$dbPassword = $array['studentPassword'];
						
						if($dbPassword == $studentPassword){
							
							session_start();

								$_SESSION['studentUsername'] = $studentUsername;
								
								header('Location: index.php');
								
						}
						
					}
					
				}
				
			}
			
		
	}
	?>