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
		
    include 'connection.php';
    $id = $_GET["id"];

    if(isset($id)){
    	$sql = " SELECT * FROM stu WHERE id='$id'";
    	$result = $conn->query($sql);
    	if($result->num_rows > 0) {

    	$row = $result->fetch_assoc();	
    	}
    ?>
    <form action="update.php" method="post">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<input type="hidden" name="id" value="<?php echo $row['id']?>">
	  <label for="">Name:</label>
	  <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
	  <label for="">E-mail:</label>
	  <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>">
	  <label for="">Message:</label>
	  <input type="text" class="form-control" name="message" value="<?php echo $row['message']?>">
	  <input type="submit" value="submit" name="">
	</div>
	</div>
	</div>
	</form>
	<?php
}
else {
	echo "error";
}
?>

	</body>
	</html>