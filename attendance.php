<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{

echo "
<html>
<form name = 'addstudent' action = 'add_attendance.php' method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>

<form role='form' class='center-block'>
<div class = 'col-md-4 col-md-offset-4'>



<div class =form-group>
<label for = 'Name'>Class:</label>
<select class='form-control' name='class'>
	<option value='class10'>class 10</option>
	<option value='class12'>class 12</option>
	
</select>
<div class = form-group>
<button type='submit' class='btn btn-primary'>Add add_attendance</button><br>
</div>
</div>
</div>


    
    </form>
    </body>" ;
}
else
{
	require 'redirect_login.php';
}

