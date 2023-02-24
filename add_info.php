<?php
	$conn = mysqli_connect('localhost','root','','users');

	if($conn)
		echo "Connection Established<br>";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$blood = $_POST['blood'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];
	$pwd = $_POST['pwd'];
	$pswd = $_POST['pswd'];

	include_once("createdb.php");

	$q = "insert into register(name,email,phone,blood,gender,city,pwd,pswd)VALUES('$name','$email','$phone','$blood','$gender','$city','$pwd','$pswd')";

	if(mysqli_query($conn,$q))
		header("Location: loginpage.html");
?>