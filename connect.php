<?php
//connect to server
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "agfiala";// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname) or die("Unable to connect");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

?>