<html>
<head>
<title>View Student List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type ="text/css" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<form name = 'review' action ='update_get_attendance.php' method='POST'>
<div class = 'container'>
					 	<table class='table table-hover'>
					 	<thead>
      <tr>
        <th>Roll Number</th>
        <th>Name</th>
        <th>attendance</th>
      </tr>
    </thead>

<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

if (isset($_POST['class']) && isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year'])) 
{

	$_SESSION['class'] = $_POST['class'];
	$_SESSION['month'] = $_POST['month'];
	$_SESSION['day'] = $_POST['day'];
	$_SESSION['year'] = $_POST['year'];
		
	if (!empty($_SESSION['class']) && !empty($_SESSION['day']) && !empty($_SESSION['month']) && !empty($_SESSION['year'])) 

	{
		$rollno = '';
		$name = '';
		$attendance = '';
		$day = '';
		$month = '';
		$year = '';
		$stu_data = '' ; 
		$name_array = array();
		isset($name_array);
		$roll_array = array();
		$att_array = array() ;
		


		$host_name = 'localhost';
		$user = 'root';
		$password = '';
		$database = 'attendance';

		$connection = mysqli_connect($host_name,$user,$password,$database);
		if ($connection)
		{
			//echo "Connected to the DB <br>";
			# code...
		}
		else
		{
			echo "Not Connected";
		}

		if ($_SESSION['class'] == 'class10') 
		{

				$sql = "SELECT  RollNo , Name  FROM class10 ";
				$result = mysqli_query($connection,$sql);
				if (mysqli_num_rows($result) > 0) 
				{
					$radio = 1;

					$radio_arr = array();

					echo "<tbody>";

					while ($row = mysqli_fetch_assoc($result))
					 {

					 	array_push($radio_arr, $radio);


					 	
					 	$name_array[] = $row["Name"];
					 	$_SESSION['name_array'] = $name_array;
					 	$roll_array[] = $row["RollNo"];
					 	$_SESSION['roll_array'] = $roll_array;

					 	

					 	$_SESSION['radioKeys'] = $radio_arr;
					 	isset($radio_arr);


					 	echo "<tr>";
					 	echo "<td>".$row['RollNo']."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "<td><input type ='radio' name = '".$row['RollNo']."' value = 'present'>Present<br> <input type ='radio' name = '".$row['RollNo']."' value = 'absent'>absent<br></td>";
					 	echo "</tr>";
		
		//echo "<strong>Roll No</strong> :".$row["RollNo"]."&nbsp"."<strong>Name</strong> :".$row["Name"]."&nbsp"."<strong>Attendance</strong> :"."<input type ='radio' name = '".$row['RollNo']."' value = 'present'>Present<br> <input type ='radio' name = '".$row['RollNo']."' value = 'absent'>absent<br>";	

						$radio++;

							



				}

				}
			}

			elseif ($_SESSION['class'] == 'class12') 
		{

				$sql = "SELECT  RollNo , Name  FROM class12 ";
				$result = mysqli_query($connection,$sql);
				if (mysqli_num_rows($result) > 0) 
				{
					$radio = 1;

					$radio_arr = array();
					 	


					while ($row = mysqli_fetch_assoc($result))
					 {

					 	array_push($radio_arr, $radio);

					 	
					 	$name_array[] = $row["Name"];
					 	$_SESSION['name_array'] = $name_array;
					 	$roll_array[] = $row["RollNo"];
					 	$_SESSION['roll_array'] = $roll_array;

					 	

					 	$_SESSION['radioKeys'] = $radio_arr;
					 	isset($radio_arr);

					 	echo "<tr>";
					 	echo "<td>".$row['RollNo']."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "<td><input type ='radio' name = '".$row['RollNo']."' value = 'present'>Present<br> <input type ='radio' name = '".$row['RollNo']."' value = 'absent'>absent<br></td>";
					 	echo "</tr>";



					 	//echo "<strong>Roll No</p></strong> :".$row["RollNo"]."&nbsp"."<strong>Name</strong> :".$row["Name"]."&nbsp"."<strong>Attendance</strong> :"."<input type ='radio' name = $radio value = 'present'>Present<br> <input type ='radio' name = $radio value = 'absent'>absent<br>";

					 
					 	
						$radio++;


					 
					}

							echo "</tbody>";
							echo "</div>";
							echo "</table>";


					/*var_dump($_SESSION['name_array']); echo "<br>";
					var_dump($_SESSION['roll_array']);*/
					



				}
			}
		}
	}
}

else{

	require 'redirect_login.php';
}
	



?>

<button type="submit" class="btn btn-primary center-block">Update attendance</button><br>

