
<?php

	if($_POST){
		
		$Teacherfirstname=$_POST['Teacherfirstname'];
		$Teacherpassword=$_POST['Teacherpassword'];
		
		$mysqli = new mysqli("localhost", "root", "root", "collegedb");
		
		if(mysqli_connect_errno()){
			
			echo "Error connecting to database";
			
		}
			else{
				
				$query = "SELECT * FROM teacher WHERE Teacherfirstname = '{$Teacherfirstname}'";
				
				$results = mysqli_query($mysqli, $query);
				
				$numberOfRows = mysqli_num_rows($results);
				
				if($numberOfRows == 1){
					
					while($array = mysqli_fetch_array($results)){
						
						$dbPassword = $array['Teacherpassword'];
						
						if($dbPassword == $Teacherpassword){
							
							session_start();

								$_SESSION['Teacherfirstname'] = $Teacherfirstname;
								
								header('Location: index.php');
								
						}
						
					}
					
				}
				
			}
			
		
	}
	?>