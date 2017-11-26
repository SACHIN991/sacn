	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
	<body>
		<?php 
		session_start();
		if(isset($_SESSION["login"])) {
     echo '<p>already login click to <a href="/sacn/logout.php">logout</a></p>';
} else {
    header('Location: http://localhost/sacn/login.php');
}
		?>

	<form action="insert.php" method="post">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	  <label for="">Name:</label>
	  <input type="text" class="form-control" name="name">
	  <label for="">E-mail:</label>
	  <input type="email" class="form-control" name="email">
	  <label for="">Message:</label>
	  <input type="text" class="form-control" name="message">
	  <input type="submit" value="submit" name="">
	</div>
	</div>
	</div>
	</form>

	</body>
	</html>