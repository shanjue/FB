<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "shanjue@gmail.com" && $password=="123456") {
  $_SESSION['auth']=true;
  $_SESSION['id']="Admin";

}
header("location:index.php");

?>
