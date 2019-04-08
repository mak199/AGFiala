<?php

if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['user']) && $_SESSION['logAdmin']==true){
$_SESSION['logAdmin']=false;}
else{
	header("Location: login.php?error");
    exit(); // <-- terminates the current script
} 


 
// close the php tag and write your HTML :)
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
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
  width: 30%;
}

button:hover {
  opacity: 0.8;
}


div.container {
    height: 10em;
    position: relative 
    margin: 0;
    position: absolute;
    top: 20%;
    left: 50%;
    margin-right: -10%;
    transform: translate(-50%, -50%)
	}
	
select{
width: 35%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}

	
</style>
</head>
<body>

<form action="modifyUsers.php" method="post">
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
		<label>User Type:</label><br>
		<select id = "userMenu" name="usersMenu">
		<option value="Student">Student</option>
		<option value="Professor">Professor</option>
		</select>
	</p>
	
	<p>
		
		
		<button id = "btnAdd" style="width:auto;" name="add">Add User</button>	
	
		<button id = "btnRemove" style="width:auto;" name="remove">Remove User</button>	

		<button id = "btnChangePass" style="width:auto;" name="change">Change Password</button>	
	</p>

</div>
</form>




</body>
</html>


