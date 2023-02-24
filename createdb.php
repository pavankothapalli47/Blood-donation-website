<?php
	$conn = mysqli_connect('localhost','root','');

	if($conn)
		echo "Connection Established<br>";

	$sql = "create database users";
	mysqli_query($conn,$sql);

	mysqli_select_db($conn,"users");

	$q = "create table register(
	name varchar(30) not null,
	email varchar(30) not null,
	phone varchar(10) not null,
	blood varchar(5) not null,
	gender varchar(7) not null,
	city varchar(15) not null,
	pwd varchar(16) not null,
	pswd varchar(16) not null,
	primary key(email)
	)";

	if(mysqli_query($conn,$q))
		header("Location: loginpage.html");
?>