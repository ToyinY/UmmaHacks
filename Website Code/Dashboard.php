<?php

	session_start();//starts session from signin.php
	
	//connects to database
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName= "Ummaconnect";

	$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

	// fetches the User's name based on their user_id
	$user = $_SESSION['user_id'];
	$sql = "SELECT * from User where User_id = '$user';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	echo $row['name'];