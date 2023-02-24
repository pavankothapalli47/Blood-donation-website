<?php
	
	if( isset($_GET["id"]))
    {
        $id = $_GET["id"];
		
		if(isset($_POST["submit"]))
		{
			$fn = $_POST["fullname"];
			$bg = $_POST["bloodgroup"];
			$ph = $_POST["phone"];
			include_once("connect.php");
			$add = "UPDATE users SET fullname='$fn', bloodgroup='$bg' , phone='$ph'  WHERE id = '$id' ";
			mysqli_query($con , $add);
			echo "<h1 align='center'>DATA ADDED OR UPDATED SUCCESSFULLY</h1>"."<br>"."<br>";
		}
		
		echo "<a href = 'Home.html' ><h1 align='center'>Go To Home</h1></a>"."<br>";
    }
?>