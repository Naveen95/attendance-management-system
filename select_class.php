<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

echo "<html>
<form name = 'select_class' action = '' method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>

<form role='form' class='center'>


    
 <button type='submit' class='btn btn-primary center-block' formaction='add_student.php'>Add Students</button><br>
 <button type='submit' class='btn btn-primary center-block' formaction='view_students.php'>View Students</button><br>
 <button type='submit' class='btn btn-primary center-block' formaction='.php'>Attendance</button>
 </form>
 </body>";
}
else
{
	require 'redirect_login.php';
}
