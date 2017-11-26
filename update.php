<?php

		session_start();
		if(isset($_SESSION["login"])) {
    
} else {
    header('Location: http://localhost/sacn/login.php');
}
		
include 'connection.php';
$id = $_POST["id"];
$name = $_POST["name"];
$email =  $_POST["email"];
$message =  $_POST["message"];
$sql = "UPDATE stu set name = '$name', email = '$email', message = '$message' WHERE id ='$id'";
if ($conn->query($sql) === TRUE){
	echo "Record update successfully";
	header('Location:http://localhost/sacn/');
}
else {
	echo "error updating record:" .$conn->error;
}
?>
