<?php

	$con = mysqli_connect('localhost','root','');

	if(!$con){
		echo 'Not connected';
	}
	if(!mysqli_select_db($con,'test')){

	echo 'Database not selected';
	}

	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$sql = "INSERT INTO person (name,subject,phone,email,message) Values('$name','$subject','$phone','$email','$message')";

	if(!mysqli_query($con,$sql)){
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
?>
