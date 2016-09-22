<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	# code...
echo "
<html>
<form name = 'addstudent' action = 'add_student_data.php' method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>

<form role='form' class='center-block'>
<div class = 'col-md-4 col-md-offset-4'>

<div class ='form-group'>
	<label for = 'rollno'>Roll No:</label>
	<input type = 'text' class = 'form-control ' name = 'rollno'>
</div>
<div class =form-group>
	<label for = 'Name'>Name:</label>
	<input type = 'text' class = 'form-control' name = 'name'>
</div>

<div class =form-group>
<label for = 'Name'>Class:</label>
<select class='form-control' name='class'>
	<option value='class10'>class 10</option>
	<option value='class12'>class 12</option>
	
</select>
<div class = form-group>
<button type='submit' class='btn btn-primary'>Add Student</button><br>
</div>
</div>
</div>


    
    </form>
    </body> ";
}
else
{
	require 'redirect_login.php';
}

