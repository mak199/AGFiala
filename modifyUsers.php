<?php


	include_once "connect.php";

	if(!isset($_SESSION)){
		session_start();
	}


	//get values passe from from in login.php file
	
	$username = $_POST["user"];
	$password = $_POST["pass"];
	$userType = $_POST["usersMenu"];
	
	//to prevent mysql injection
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);
	
	//connect to the server and select database
	mysqli_connect("localhost","root","") or die("Unable to connect");;
	mysqli_select_db($conn,"agfiala");
	
	//if(isset($_SESSION['user']) && $_SESSION['isLoggedIn']==true) {

		if(isset($_POST['add'])){
			//query the database for user_error
			$sql = "INSERT INTO userinfo (username, password, userType)
			VALUES ('$username', '$password', '$userType')";

			if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully";
				if ($_POST)
				{
				  echo "<script type='text/javascript'>";
				  echo "alert('New record created successfully!!!');";
				  echo "</script>";
				}
				$_SESSION['logAdmin']=true;
				header( "refresh:0; url=adminOption.php" );
				//header("Location: adminOption.php?error"); // forward to login site
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
		}
		else if(isset($_POST['remove'])){
			//query the database for user_error
			$sql = "DELETE FROM userinfo WHERE username = '$username'  AND password = '$password'";
			

			if (mysqli_query($conn, $sql)) {
				if ($_POST)
				{
				  echo "<script type='text/javascript'>";
				  echo "alert('Record Deleted successfully!!!');";
				  echo "</script>";
				}
				$_SESSION['logAdmin']=true;
				header( "refresh:0; url=adminOption.php" );
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
		else if(isset($_POST['change'])){
			//query the database for user_error
			$sql = "UPDATE userinfo SET password = '$password' WHERE username = '$username';";
			

			if (mysqli_query($conn, $sql)) {
				if ($_POST)
				{
				  echo "<script type='text/javascript'>";
				  echo "alert('Password changed successfully!!!');";
				  echo "</script>";
				}
				$_SESSION['logAdmin']=true;
				header( "refresh:0; url=adminOption.php" );
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}

	//}

	mysqli_close($conn);
	
?>


