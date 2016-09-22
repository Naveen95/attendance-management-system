<?php



if (isset($_POST['username']) && isset($_POST['password'])) {
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

		if (!empty($username)&&!empty($password)) 

	{

		$host_name = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'attendance';

	$connection = mysqli_connect($host_name,$user,$password,$database);
	if ($connection) {
		//echo "Connected to the DB";
		
	}
	else
	{
		//echo "Not Connected".mysqli_error($connection);
	}

	$sql= "INSERT INTO `login` (username , password) VALUES ('$username' , '$password')";

		$result = mysqli_query($connection,$sql);
		if($result>0){

			echo "<center>User Registered<br>";
			echo "You can login from here<br>";
			echo "<a href='main_login.php'>Login</a>";
		}


	}
	else{

		echo "<div class = 'container>";	
		echo "<h1>";
		echo "<p class = 'text-danger text-center'>";
		echo "PLEASE FILL ALL THE FIELDS";
		echo "</h1>";
		echo "</p>";
		echo"</div>";
	}

	

}


?>