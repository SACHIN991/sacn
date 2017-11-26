<?php
session_start();
include 'connection.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM user WHERE name='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['login']="loggedin";
    unset($_SESSION["loginerror"]); 
    header('Location: http://localhost/sacn/index.php');
    }
else {
	$_SESSION['loginerror']="incoorect username or password";
	header('Location: http://localhost/sacn/login.php');
    echo "0 results";
}
$conn->close();
?>