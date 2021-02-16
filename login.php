<?php
	session_start();
	
	$username = $_GET['username'];
	$password = $_GET['password'];
	
	//echo $username . " " . $password;
	
	//1. Connect to the DB
	
	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "mydb";
	$db_connection = mysqli_connect($host, $db_user, $db_password, $db_name);
	
	
	if ($db_connection === false) {
		die("Error: Cannot connect to the database");
	}
	
	//filter username
	$sql = "SELECT * FROM `user` WHERE user_name='".$username."' AND user_password='".$password."'";
	$result = mysqli_query($db_connection, $sql);
	$count = mysqli_num_rows($result);
	if ($count >= 1) {
		$_SESSION['user_name'] = $username;
		//filter username
			$sql = "SELECT * FROM `user` WHERE user_name='".$_SESSION['user_name']."'";
			$result = mysqli_query($db_connection, $sql);
			
			//break down the record into columns
			// $record = mysqli_fetch_array($result);
			// $_SESSION['image'] =  $record['image'];
		
		header("Location: search.php");
	} else {
		header("Location: index.php");
		
	}
	
	/*
		and (&&) = kapag false, false na yun
		or (||) = kapag true, true na yun
		not (!) = kabaliktaran 
		< = true if the left side is less than
		> = true if the left side is greater than
		== = (loosely equal) true if both sides equal
		<= = true if both sides equal or left side is less than
		=> = true if both sides equal or right side is less than
		=== = (strictly equal) true if both sides are equal value and datatype
	*/
	
?>
