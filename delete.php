<?php

		session_start();
		if(isset($_SESSION["login"])) {
    
} else {
    header('Location: http://localhost/sacn/login.php');
}
		
include 'connection.php';
$id = $_GET["id"];
$sql = "DELETE from stu WHERE id ='$id'";
if ($conn->query($sql) === TRUE){
	echo "Record delete successfully";
	header('Location:http://localhost/sacn/');
}
else {
	echo "error deleting record:" .$conn->error;
}
?>