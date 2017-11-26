<?php include 'connection.php';


$name= $_POST["name"]; 
$email= $_POST["email"];
$message= $_POST["message"];
echo $name,$email,$message;

$sql = "INSERT INTO stu (name, email,message)
VALUES ('$name','$email','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>