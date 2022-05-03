<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$recycle = $_POST['recycle'];
	
	
	$host="localhost";
$user="root";
$pass="";
$db="contact";
$con= new mysqli($host,$user,$pass,$db);

	//check connection if it is working or not
	if (!$con)
	{
		die("Connection failed!" . mysqli_connect_error());
	}
	//This below line is a code to Send form entries to database
	$sql = "INSERT INTO form (id, name, email, mobile,address,recycle) VALUES ('1', '$name', '$email', '$mobile','$address','$recycle')";
  //fire query to save entries and check it with if statement
	$rs = mysqli_query($con, $sql);
	if($rs)
	{
		echo "Successfully saved";
	}
  //connection closed.
	mysqli_close($con);

?>