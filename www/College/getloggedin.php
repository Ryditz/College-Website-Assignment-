<?php
$password = $_POST['password'];
$user = $_POST['username'];
$numRows = 0;

//Some material from McGrath PHP and SQL p151
$servername = "localhost";
$username = "root";
$dbpassword = "root"; /* Needed ONLY for uWamp! */

// Create connection
$conn = mysqli_connect($servername, $username, $dbpassword);

// Check connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}


mysqli_select_db($conn,"collegedb");

$sql = "SELECT StudentID FROM student WHERE StudentID = '$user' AND password = '$password'";

$result = mysqli_query($conn, $sql);

$numRows = mysqli_num_rows($result);

if($numRows == 1){
   
header("Location: homepage.html");

}
else {

  echo "You need to sign up not in!!";
}


   
mysqli_close($conn);


?>