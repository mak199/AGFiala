<?php

session_start(); // need this to work with sessions
$_SESSION['logAdmin']=true;
$_SESSION['isLoggedIn']=true;
$_SESSION['displayTable']=true;


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
}

button:hover {
  opacity: 0.8;
}



img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}


div.container {
    height: 10em;
    position: relative 
    margin: 0;
    position: absolute;
    top: 70%;
    left: 50%;
    margin-right: -10%;
    transform: translate(-50%, -50%)
	}
	
/* Center the image and position the close button */
div.imgcontainer {
  width: 50%;
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}
div.imgcontainer {
    height: 10em;
    position: relative 
    margin: 0;
    position: absolute;
    top: 20%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }	


</style>
</head>
<body>


<form action = "process.php" method = "POST">

<div class="imgcontainer">
	<img src="log_avatar.png" alt="Avatar" class="avatar">
</div>

<div class="container">

	<p>
		<label>Username:</label>
		<input type="text" id = "user" placeholder="Enter Username" name = "user" required>
	</p>
	
	<p>
		<label>Password:</label>
		<input type="password" id = "pass" placeholder="Enter Password" name="pass" required>
	</p>
		
	<p>
		<button id = "btn" style="width:auto;">Login</button>	
	</p>


</div>
</form>

</body>
</html>


