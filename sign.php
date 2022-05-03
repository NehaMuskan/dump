<?php
$email=$_POST['email'];
$password=$_POST['password'];

$host="localhost";
$user="root";
$pass="";
$db="contact";
$con= new mysqli($host,$user,$pass,$db);

	
	if (!$con)
	{
		die("Connection failed!" . mysqli_connect_error());
	}
	//This below line is a code to Send form entries to database
	$sql = "INSERT INTO sign( email, password) VALUES ('$email','$password')";
  //fire query to save entries and check it with if statement
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo "Successfully saved";
	}
  //connection closed.
	mysqli_close($con);

?>