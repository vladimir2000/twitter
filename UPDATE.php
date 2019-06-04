<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="Update1.php">
		<button class="btn btn-outline-success">Update</button>
		<?php 		
		echo '<input type="" name="text" value=" ' . $_POST['text'] . '">';
		echo '<input type="hidden" name="id" value=" ' . $_POST['id'] . '">';
		?>
	</form>
</body>
</html>
