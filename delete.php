<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
$delete = mysqli_query( $connect , "DELETE FROM tweet WHERE id = '" . $_POST['id'] . "'");

	header('Location: http://hhhhhhhhhhhhhello/index.php')
?>