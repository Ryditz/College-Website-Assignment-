<?php
	$pageTitle = "Local College";
	include "structure/includes/header.php"
?>
<!--This form allow one to select a file and upload it to a local folder called 'uploads'-->
<main>
  <form action="uploads.php" method="POST" enctype="multipart/form-data">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</main>

<?php include "structure/includes/footer.php";?>