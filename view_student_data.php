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
      </tr>
    </thead>
    
    
    
   

<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	# code...

if (isset($_POST['class'])) 
{

	$class = $_POST['class'];
	
	if (!empty($class)) 

	{

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

		if ($class == 'class10') 
		{

				$sql = "SELECT  RollNo , Name  FROM class10 ";
				$result = mysqli_query($connection,$sql);
				if (mysqli_num_rows($result) > 0) 
				{
					echo "<tbody>";

					while ($row = mysqli_fetch_assoc($result))
					 {
					 	
					 	
					 	echo "<tr>";
					 	echo "<td>".$row["RollNo"]."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "</tr>";
					 	
					}

			
				}
			}

			elseif ($class == 'class12') 
		{

				$sql = "SELECT  RollNo , Name  FROM class12 ";
				$result = mysqli_query($connection,$sql);
				if (mysqli_num_rows($result) > 0) 
				{

					while ($row = mysqli_fetch_assoc($result))
					 {
					 	echo "<tr>";
					 	echo "<td>".$row["RollNo"]."</td>";
					 	echo "<td>".$row["Name"]."</td>";
					 	echo "</tr>";
		
		//echo "<strong>Roll No</strong> :".$row["RollNo"]."&nbsp"."<strong>Name</strong> :".$row["Name"]."&nbsp"."<br><br>";
					}

							echo "</tbody>";
							echo "</div>";
							echo "</table>";

							
				}
			}
		}
	}
	
	}

	else
	{
		require 'redirect_login.php';
	}



?>
</html>