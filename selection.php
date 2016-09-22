<html>
<head>
<title>SELECTION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="C:\xampp\htdocs\Attendance CMS\bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
</html>
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

echo "<html>
<form name = 'select_class'  method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>
<div class = 'container' style = 'background-image : url('http://images.clipartpanda.com/classroom-clipart-empty-classroom-clipart.jpg');'>
</div>

<form role='form' class='center'><br>
<div class = 'center-block'>
<div class = 'row'>
<div class='col-sm-2'>
<button type='submit' class='btn btn-primary center-block' formaction='add_student.php'>Add Students</button>
</div>

<div class = 'col-sm-2'>
<button type='submit' class='btn btn-primary center-block' formaction='view_student.php'>View Students</button>
</div>


<div class = 'col-sm-2'>
<button type='submit' class='btn btn-primary center-block' formaction='attendance.php'>Add Attendance</button>
</div>


<div class = 'col-sm-2'>
<button type='submit' class='btn btn-primary center-block' formaction='select_attendance.php'>See Attendance</button>
</div>

<div class = 'col-sm-2'>
<button type='submit' class='btn btn-primary center-block' formaction='update_select_class.php'>update Attendance</button>
</div>
</div>


 </form>
 </body>";
}
else
{
	require 'redirect_login.php';
	/*echo "<html>
<head>
<title>Login Needed</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='bootstrap.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>
<body>
<div class='col-md-12 center-block'>
<div class='jumbotron'>
        <h1 align='center'>Login Needed!</h1>
        <p class='lead' align='center'>You need to Login to use Attendance Management System.</p>
        <div class = form-group>
		<button type='submit' class='btn btn-primary center-block' role = 'button' formaction='main_login.php'>Login</button><br>
		</div>
      </div>
      </div>

</html>";*/
	
	//header('Location : redirect_login.php');
	//exit();
}
	
?>
