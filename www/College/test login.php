<?php
	$pageTitle = "Local College";
	include "structure/includes/header.php"
?>

<main>

<div id="loginform">
<form method="post" action="loginScript.php">
<label>Username:</label><br/>
<input type="text" name="studentUsername"><br/>
<label>password:</label><br/>
<input type="password" name="studentPassword"><br/>
<input type="submit" name="submit" value="submit">
</form>
</div>

</main>
<?php include "structure/includes/footer.php";?>