<?php

	include_once "connect.php";
	
	
	session_start(); // need this to work with sessions
	
	//get values passe from from in login.php file
	$username = $_POST["user"];
	$password = $_POST["pass"];
	
	//to prevent mysql injection
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);
	
	//connect to the server and select database
	mysqli_connect("localhost","root","") or die("Unable to connect");;
	mysqli_select_db($conn,"agfiala");
	
	//query the database for user_error
	$result = mysqli_query($conn,"select * from userinfo where username = '$username'  and password ='$password'") or die("Failed to query database".mysql_error()); 
	$row = mysqli_fetch_array($result);		
	if($row["username"]==$username && $row["password"]==$password){
		$_SESSION['user'] = $username;
		//$_SESSION['logAdmin']=true;
		//$_SESSION['isLoggedIn']=true;
		//$_SESSION['displayTable']=true;
		//echo "<script type='text/javascript'>";
	    //echo "alert('Successfully logged in!!!');";
	    echo "</script>";
		if($row['userType']==='Student')
			header( "refresh:1; url=selection.php" );
			//include('selection.php');
		else
			header( "refresh:1; url=selectionAdmin.php" );
			//include('selectionAdmin.php');
		
 
	}
	else{
		echo "<h2>Failed Login</h2>";
	}
	
	
?>

