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
<div class = 'container'>
					 	<table class='table table-hover'>
					 	<thead>
      <tr>
        <th>Roll Number</th>
        <th>Name</th>
        <th>Attendance</th>
      </tr>
    </thead>

<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
{

							


							if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['class'])) 
							{
								
								$day = $_POST['day'];
								$month = $_POST['month'];
								$year = $_POST['year'];
								$class = $_POST['class'];
							

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
											echo "Not Connected".mysqli_error($connection);
										}

							if ($class == 'class10') 

							{
								# code...
							

							$sql = "SELECT * FROM `aclass10` WHERE `day` = $day && `month` =$month && `year` =$year";  
							$result = mysqli_query($connection,$sql);
							if ($result)
							{

								if (mysqli_num_rows($result)>0) 

							{		
									echo "<tbody>";

									while ($row = mysqli_fetch_assoc($result)) 
							{
										echo "<tr>";
					 					echo "<td>".$row["RollNo"]."</td>";
					 					echo "<td>".$row["Name"]."</td>";
					 					echo "<td>".$row['attendance']."</td>";
					 					echo "</tr>";

										//echo "Name :".$row['Name']. " Roll No:".$row['RollNo']. " Attendance:" .$row['attendance']."<br>";
										
							}
									# code...
							}
							}

							}

								elseif ($class == 'class12') {

									$sql = "SELECT * FROM `aclass12` WHERE `day` = $day && `month` =$month && `year` =$year";  
							$result = mysqli_query($connection,$sql);
							if ($result)
							{

								if (mysqli_num_rows($result)>0) 

							{


									while ($row = mysqli_fetch_assoc($result)) 
							{
										echo "<tr>";
					 					echo "<td>".$row["RollNo"]."</td>";
					 					echo "<td>".$row["Name"]."</td>";
					 					echo "<td>".$row['attendance']."</td>";
					 					echo "</tr>";
										

										//echo "Name :".$row['Name']. " Roll No:".$row['RollNo']. " Attendance:" .$row['attendance']."<br>";
										
							}

							echo "</tbody>";
							echo "</div>";
							echo "</table>";


							echo"<div class = 'center-block'>
								<div class = 'row'>
								<div class='col-sm-6'>
								<button type='submit' class='btn btn-primary center-block' formaction='selection.php'>Main Menu</button>
								</div>";


							echo "<div class = 'col-sm-6'>
							<button type='submit' class='btn btn-primary center-block' formaction='select_attendance.php'>Go back</button>
							</div>";

							echo "</div>";
							echo "</div>";
									
							}
							}
									


								}

								else
								{
									echo "Error occured".mysqli_error($connection);
								}

								# code...
							

	}

}

					else
					{
						require 'redirect_login.php';
					}


							




?>