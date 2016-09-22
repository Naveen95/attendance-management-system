<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{


	if (isset($_POST['rollno']) && isset($_POST['name']) && isset($_POST['class'])) 
{

	echo "<html>
<form name = 'redirect' action = 'add_student.php' method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>
<body>

<form role='form' class='center'>
<div class = 'row'>
<div class='col-md-6'>
<button type='submit' class='btn btn-primary center-block'>ADD MORE STUDENT</button><br>
</div>
<div class =  'col-md-6'>
<button type='submit' class='btn btn-primary center-block'>GO BACK</button><br>
</div>
    
    </form>
    </body>";

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$class = $_POST['class'];

	if (!empty($rollno)&&!empty($name)&&!empty($class)) 

	{

	$host_name = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'attendance';

	$connection = mysqli_connect($host_name,$user,$password,$database);
	if ($connection) {
		//echo "Connected to the DB";
		# code...
	}
	else
	{
		echo "Not Connected".mysqli_error($connection);
	}


	

	if ($class == 'class10') {

		$roll_query = mysqli_query($connection,"SELECT * FROM `class10` WHERE RollNo = '".$rollno."'");
		if (mysqli_num_rows($roll_query)>0) 
		{
			echo"Roll No already exists. Try with new roll no <br>";
			echo "<a href = 'add_student.php'>CLICK HERE TO ADD STUDENT</a>";
			die();

		}
		else
		{

		$sql = "INSERT INTO `class10` (RollNo , Name) VALUES ('$rollno' , '$name')";
		
			}
		
	}

	
	elseif ($class == 'class12') 
	{
		$roll_query = mysqli_query($connection,"SELECT * FROM `class12` WHERE RollNo = '".$rollno."'");
		if (mysqli_num_rows($roll_query)>0) 
		{
			echo"Roll No already exists. Try with new roll no <br>";
			echo "<a href = 'add_student.php'>CLICK HERE TO ADD STUDENT</a>";
			die();

		}
		else
		{

		$sql = "INSERT INTO `class12` (RollNo , Name) VALUES ('$rollno' , '$name' )";
		
	}
	}



	
	if (mysqli_query($connection,$sql) && mysqli_query($connection,$sql1))
	 {
		# code...
		echo "<h3>Student added to the class</h3>";
	}
	
	}

		

	else
	{
			
		echo "<div class = 'container>";	
		echo "<h1>";
		echo "<p class = 'text-danger text-center'>";
		echo "PLEASE FILL ALL THE FIELDS";
		echo "</h1>";
		echo "</p>";
		echo"</div>";
	}
}
}
else
{
	require 'redirect_login.php';
}


?>


