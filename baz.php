<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'volodya_10');
$query = mysqli_query($connect, "INSERT INTO tweet (logo, title, text, img) VALUES ('images/post2.png', 'Обычный твит', '" . $_POST['insert'] . "', 'images/habr.jpg')");
	header('Location: http://hhhhhhhhhhhhhello/index.php')
 ?>