<?php

	$con = mysqli_connect('localhost','root');
	if($con)
	{
		echo "Connection Successfull";
	}
	else
	{
		echo "No Connection";
	}

	mysqli_select_db($con,'contact');

	$user = $_POST['name'];
	$mobile = $_POST['num'];
	$email = $_POST['email'];
	$comments = $_POST['message'];

	$query = "insert into userinfodata (name, num, email, message) values ('$name','$num','$email','$message')";

	echo "query";
	mysqli_query($con, $query);
	header('location:index.html#contact');

?>