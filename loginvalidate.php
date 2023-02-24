<?php
	$conn = mysqli_connect("localhost","root","","users");
	if(!$conn)
		echo "Failed to Connect:".mysql_error();
	mysqli_select_db($conn,"users") or die("No Database existing:".mysql_error());
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$sql="SELECT name,pswd FROM register WHERE name='$name' and pswd='$pass'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if ($count==1){
		$row = mysqli_fetch_assoc($result);
		header("Location: enterdetails.html");
	}
	else{
		echo "<script> alert('Invalid details!');</script>";
		header( "refresh:1;url=loginpage.html" );
	}
?>