<?php

session_start();
unset($_SESSION["login"]); 
header('Location: http://localhost/sacn/login.php');

?>
