<?php

session_start();
$posted = array();
$att_array = array();
$name_array = array();
$roll_array = array();
/*$day = date('d');
$month = date('m');
$year = date('Y');*/

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

					$day = $_SESSION['day'];
					$month = $_SESSION['month'];
					$year = $_SESSION['year'];
	

					$name_array = $_SESSION['name_array'];
					$roll_array = $_SESSION['roll_array'];
					

						foreach ($_SESSION['radioKeys'] as $radioKey) {
							# code...
						if (isset($_POST[$radioKey])) {
						    $posted[$radioKey] = $_POST[$radioKey];
						  }
						}

						$_SESSION['radio'] = $posted;
						foreach ($_SESSION['radio'] as $radioKey => $radioValue)
						{  
								//var_dump($radioValue);
							$att_array[] = $radioValue;
							
						}
						

					if (!empty($name_array) && !empty($roll_array) && !empty($att_array) && !empty($day) && !empty($month) && !empty($year) ) {

							$host_name = 'localhost';
							$user = 'root';
							$password = '';
							$database = 'attendance';

							$connection = mysqli_connect($host_name,$user,$password,$database);
							if ($connection) {
								//echo "Connected to the DB <br>";
								# code...
							}
							else
							{
								echo "Not Connected".mysqli_error($connection);
							}

							$name_values = array();
							$roll_values = array();
							$att_values = array();

							if ($_SESSION['class'] == 'class10') {	

								
							

							foreach ($name_array as $key => $name_values) {
							
							$name_values = mysqli_real_escape_string($connection,$name_values);
							$roll_values = mysqli_real_escape_string($connection,$roll_array[$key]);
							$att_values = mysqli_real_escape_string($connection,$att_array[$key]);
							echo $name_values."<br>";
							echo $att_values."<br>";
							echo $roll_values."<br>";
							$sql= "UPDATE `aclass10` SET Name='".$name_values."',attendance='".$att_values."',RollNo='".$roll_values."',day='".$day."',month='".$month."',year='".$year."'WHERE RollNo='".$roll_values."'";
							$result = mysqli_query($connection,$sql);
						}
							
						

								# code...
							}
							
							if ($_SESSION['class'] == 'class12') {
								


							foreach ($name_array as $key => $name_values) {
							
							$name_values = mysqli_real_escape_string($connection,$name_values);
							$roll_values = mysqli_real_escape_string($connection,$roll_array[$key]);
							$att_values = mysqli_real_escape_string($connection,$att_array[$key]);
							echo $name_values."<br>";
							echo $att_values."<br>";
							echo $roll_values."<br>";
							$sql= "UPDATE `aclass12` SET Name='".$name_values."',attendance='".$att_values."',RollNo='".$roll_values."',day='".$day."',month='".$month."',year='".$year."'WHERE RollNo='".$roll_values."'";
							$result = mysqli_query($connection,$sql);
						}
							
						


								# code...
							}

						

						if($result)
							{
								echo "Attendance Succesfully added";

							}
							else
							{
								echo "Data Not added".mysqli_error($connection);
							}
						
						

					}



		
}
else
{
	require 'redirect_login.php';
}


?>

