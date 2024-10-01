<?php 
session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['auth_user']);
$_SESSION['status']= "Your are logged out sucessfully";
header('Location:login.php');
?>