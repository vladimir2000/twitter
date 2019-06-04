<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body class="bg-light">

	<!-- Навигация -->
	<div class="header">
 		<div class="container-fluid">
 			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row mt-2">
			<!-- Первая колонка -->
				<div class="col-3">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<!-- Вторая колонка -->
				<div class="col-6">
					<div>
						<form method="POST" action="baz.php">
							<input name="insert" class="form-control form-control-sm" type="text" placeholder="tweet">
							<button class="btn btn-outline-success">Tweet</button>
						</form>
					</div>
					<div class="col-12">
						 <?php 
						 $connect = mysqli_connect('127.0.0.1' , 'root' , '', 'volodya_10');
						 $query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC'); ?>
					<?php for ($i=0; $i < $query->num_rows; $i++) 
					{
						$logo = $query->fetch_assoc();
					?>
				<div class="row">
							<!--Это кол 2 где картинку вставлять надо-->
							<div class="col-2">
								<a href="#">
									<?php
										echo '<img class="rounded-circle" src = "' . $logo['logo'] . '">';
									?>				
								</a>
							</div>
							<!--Это кол 10 где тексты разные-->
							<div class="col-10">
								<div class="d-flex">
									<h2>
										<?php echo $logo['title'] ?>
									</h2>
								</div>
								<div class="d-flex">
									<p>
										<?php echo $logo['text'] ?>
									<p>
								</div>
								<div class="d-flex">
									<?php echo '<img class = "w-100 h-100" src="' . $logo['img'] . '">'; ?>
								</div>

								<div class="d-flex">
									<div class="col-3"><img src="images/comment.png"></div>
									<div class="col-3"><img src="images/retweet.png"></div>
									<div class="col-3"><img src="images/like.png"></div>
									<div class="col-3"><img src="images/envelope.png"></div>
								</div>

							</div>

							<form action="delete.php" method="POST">
								<?php echo '<input type="hidden" name="id" value=" ' . $logo['id'] . '"> '; ?>
								<button class="btn btn-outline-danger">Delete</button>
							</form> 

							<form method="POST" action="UPDATE.php"> 
								<?php 
								echo '<input type="hidden" name="id" value=" ' . $logo['id'] . '"> '; 
								echo '<input type="hidden" name="text" value=" ' . $logo['text'] . '"> ';  
								echo '<input type="hidden" name="title" value=" ' . $logo['title'] . '"> ';  
								?>
								<button class="btn btn-outline-warning">Update</button>
							</form>						   
				</div>
	<?php } ?>

						</div>										
				</div> 

				
			<!-- Третья колонка -->

				<div class="col-3">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
</body>
</html>