<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password']))
{

echo "<html>
<form name = 'viewstudent' action = 'update_class_attendance.php' method ='POST'>
<head>
<link rel='stylesheet' type='text/css' href='bootstrap.css'>
</head>
<body>

<form role='form' class='center'>


<div class =form-group>
<label for = 'Name'>Class:</label>
<select class='form-control' name='class'>
	<option value='class10'>class 10</option>
	<option value='class12'>class 12</option>
	
</select><br>

<select class ='form-control' name='month'>
	<option> - Month - </option>
	<option value='01'>January</option>
	<option value='02'>Febuary</option>
	<option value='03'>March</option>
	<option value='04'>April</option>
	<option value='05'>May</option>
	<option value='06'>June</option>
	<option value='07'>July</option>
	<option value='08'>August</option>
	<option value='09'>September</option>
	<option value='10'>October</option>
	<option value='11'>November</option>
	<option value='12r'>December</option>
</select><br>

<select class ='form-control' name='day'>
	<option> - Day - </option>
	<option value='01'>01</option>
	<option value='02'>02</option>
	<option value='03'>03</option>
	<option value='04'>04</option>
	<option value='05'>05</option>
	<option value='06'>06</option>
	<option value='07'>07</option>
	<option value='08'>08</option>
	<option value='09'>09</option>
	<option value='10'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
	<option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18</option>
	<option value='19'>19</option>
	<option value='20'>20</option>
	<option value='21'>21</option>
	<option value='22'>22</option>
	<option value='23'>23</option>
	<option value='24'>24</option>
	<option value='25'>25</option>
	<option value='26'>26</option>
	<option value='27'>27</option>
	<option value='28'>28</option>
	<option value='29'>29</option>
	<option value='30'>30</option>
	<option value='31'>31</option>
</select><br>

<select class ='form-control' name='year'>
	<option> - Year - </option>
	<option value='2015'>2015</option>
	<option value='2016'>2016</option>
	<option value='2017'>2017</option>
	<option value='2018'>2018</option>
	
	
</select><br>
</div>


    <button type='submit' class='btn btn-primary center-block'>Get Student List</button><br>
    </form>
    </body>";
}
else
{
	require 'redirect_login.php';
}

