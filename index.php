<!DOCTYPE html>
<html>
<head>
	<title>htmlSaveComplete DEMO</title>
</head>
<body>

	<?php
		if (isset($_GET['e'])) {
			echo $_GET['e'] . '<hr>';
		}
	?>
	
	<?php
		if (isset($_GET['s'])) {
			echo '<a href="output.html" target="__blank">Visit Saved Page</a>' . '<hr>';
		}
	?>	


	<form action="saveCompletePage.php" method="post">
		<p>
			<label for="url">Enter URL</label>
			<input type="url" id="url" name="url" required>
		</p>
		<p>
			<label for="content">Fetch Main Content Only</label>
			<input type="checkbox" name="content" id="content">
		</p>
		<p>
			<label for="javascript">Keep Javascript</label>
			<input type="checkbox" name="javascript" id="javascript">
		</p>
		<p>
			<label for="compress">Compress Output</label>
			<input type="checkbox" name="compress" id="compress">
		</p>
		
		<input type="submit" name="submit" value="Fetch Complete Page">
	</form>



</body>
</html>
