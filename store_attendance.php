<?php

session_start();
$posted = array();
$att_array = array();
$name_array = array();
$roll_array = array();
$time = time();
$day = date('d');
$month = date('m');
$year = date('Y');

if(isset($_SESSION['username']) && isset($_SESSION['password']))
{
	

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

								/*$day_check = "SELECT * FROM `aclass10` WHERE `day` = '".$day."' && `month` = '".$month."' && `year` = '".$year."' ";
								$check_day = mysqli_query($connection,$day_check);
								if ($check_day) {
									echo "Attendance already added";     //this is to restrict if the attendance is already added for the present day.
									die();
								}
								else
								{*/
							

							foreach ($name_array as $key => $name_values) {
							
							$name_values = mysqli_real_escape_string($connection,$name_values);
							$roll_values = mysqli_real_escape_string($connection,$roll_array[$key]);
							$att_values = mysqli_real_escape_string($connection,$att_array[$key]);
							$sql= "INSERT INTO `aclass10` (Name , attendance , RollNo , day , month , year) VALUES ('$name_values' , '$att_values' , '$roll_values' ,'$day' , '$month' , '$year')";
							$result = mysqli_query($connection,$sql);
						}
							
						#}

								# code...
							}
							
							if ($_SESSION['class'] == 'class12') {
								/*$day_check = "SELECT * FROM `aclass12` WHERE `day` = '".$day."' && `month` = '".$month."' && `year` = '".$year."' ";
								$check_day = mysqli_query($connection,$day_check);
								if ($check_day) {
									echo "Attendance already added";
									die();
								}
								else
								{*/


							foreach ($name_array as $key => $name_values) {
							
							$name_values = mysqli_real_escape_string($connection,$name_values);
							$roll_values = mysqli_real_escape_string($connection,$roll_array[$key]);
							$att_values = mysqli_real_escape_string($connection,$att_array[$key]);
							$sql= "INSERT INTO `aclass12` (Name , attendance , RollNo , day , month , year) VALUES ('$name_values' , '$att_values' , '$roll_values' ,'$day' , '$month' , '$year')";
							$result = mysqli_query($connection,$sql);
						}
							
						#}


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

