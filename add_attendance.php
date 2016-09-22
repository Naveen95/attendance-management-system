<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	echo "<html>
<head>
<title>Add Attendance</title>
<form name = 'review' action ='store_attendance.php' method='POST'>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>";

	
		$time = time();
		$day = date('d');
		$month = date('m');
		$year = date('Y');
		?>

<?php echo "<body>


<div class='row'>
<div class='col-sm-4'>
<select class ='form-control' name='month'>
<option>"; echo htmlspecialchars($month); ?><?php echo"</option>	
</select>
</div>

<div class='col-sm-4'>
<select class ='form-control' name='day'>
<option>"; echo htmlspecialchars($day); ?><?php echo"</option>
</select>
</div>

<div class='col-sm-4'>
<select class ='form-control' name='year'>
<option>"; echo htmlspecialchars($year); ?><?php echo"</option><br>
</select><br>
</div>
</div>

<div class = 'container'>
					 	<table class='table table-hover'>
					 	<thead>
      <tr>
        <th>Roll Number</th>
        <th>Name</th>
        <th>Attendance</th>
      </tr>
    </thead>";

if (isset($_POST['class'])) 
{

	$_SESSION['class'] = $_POST['class'];
		
	if (!empty($_SESSION['class'])) 

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

					 	echo "<tr>";
					 	echo "<td>".$row["RollNo"]."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "<td><input type ='radio' name = '".$row['RollNo']."' value = 'present'>Present<br> <input type ='radio' name = '".$row['RollNo']."' value = 'absent'>absent<br></td>";
					 	echo "</tr>";
					 	$name_array[] = $row["Name"];
					 	$_SESSION['name_array'] = $name_array;
					 	$roll_array[] = $row["RollNo"];
					 	$_SESSION['roll_array'] = $roll_array;

					 	

					 	$_SESSION['radioKeys'] = $radio_arr;
					 	isset($radio_arr);
		
		
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
					 	echo "<tbody>";


					while ($row = mysqli_fetch_assoc($result))
					 {

					 	array_push($radio_arr, $radio);

					 	echo "<tr>";
					 	echo "<td>".$row["RollNo"]."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "<td><input type ='radio' name = '".$row['RollNo']."' value = 'present'>Present<br> <input type ='radio' name = '".$row['RollNo']."' value = 'absent'>absent<br></td>";
					 	echo "</tr>";
					 	$name_array[] = $row["Name"];
					 	$_SESSION['name_array'] = $name_array;
					 	$roll_array[] = $row["RollNo"];
					 	$_SESSION['roll_array'] = $roll_array;

					 	

					 	$_SESSION['radioKeys'] = $radio_arr;
					 	isset($radio_arr);
		
		
						$radio++;



					 
					}

					
					echo "<button type='submit' class='btn btn-primary center-block'>Add Attendance</button><br>";
					echo "<html>";


				}
			}
		}
	}
}


else{

	require 'redirect_login.php';
}
	



?>

