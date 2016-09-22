<?php

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	# code...
$host_name = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$connection = mysqli_connect($host_name,$user,$password,$database);
if ($connection) {
	//echo "Connected to the DB";
	# code...
}
else
{
	//echo "Not Connected";
}
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection , $username);
$password = mysqli_real_escape_string($connection , $password);
$sql = "SELECT * FROM login where username = '$username' and password = '$password'";
$result = mysqli_query($connection,$sql);
$count = mysqli_num_rows($result);
if ($count == 1) {

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header("location:selection.php");
}

else
{
	echo "Wrong username or Password";
}
}
else
{
	require 'redirect_login.php';
}
?>