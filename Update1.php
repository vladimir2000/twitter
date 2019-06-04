<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
	$sql = mysqli_query( $connect , "UPDATE tweet SET text = '" . $_POST['text'] . "' WHERE id = '" . $_POST['id'] . "'");
	header('Location: http://hhhhhhhhhhhhhello/index.php')
 ?>