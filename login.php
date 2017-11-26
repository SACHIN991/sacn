 
<?php 
	session_start();
	 if(isset($_SESSION["login"])) {
	 	?>
	 	<p>already login click to <a href="/sacn/logout.php">logout</a></p>
	 	 
 <?php
 die();   
}
	?>
 <form action="login_auth.php" method="post">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<input type="hidden" name="id" >
	  <label for="">userName:</label>
	  <input type="text" class="form-control" name="username" >
	  <label for="">Password</label>
	  
	  <input type="password" class="form-control" name="password">
	  <input type="submit" value="login">
	</div>
	<?php 
	
	 if(isset($_SESSION["loginerror"])) {
	 	echo $_SESSION["loginerror"];
    
}
	?>

	</div>
	</div>
	</form>
	