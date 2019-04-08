<?php
if(!isset($_SESSION)){
	session_start();
}
 
if(isset($_SESSION['user']) && $_SESSION['isLoggedIn']==true){
	$_SESSION['isLoggedIn']=false;
}
else{
	header("Location: login.php?error");
    exit(); // <-- terminates the current script
} 

?>

<!DOCTYPE html>
<html>
<title>Select Table</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey"><!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  width:80%;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


div.container {
    height: 10em;
    position: relative 
    margin: 0;
    position: absolute;
    top: 25%;
    left: 50%;
    margin-right: -10%;
    transform: translate(-50%, -50%)
	}

</style>
</head>



<body>


<div class="container">
<h2>Databse Table Options</h2>
<p>Click on the option below to display the desired table:</p>


<form action="displayTables.php" method="post">
<button id = "tbl1" class="button" name="1">Fly Stocks</button>

<button id = "tbl2" class="button" name="2">Primary Antibodies</button>

<button id = "tbl3" class="button" name="3">Secondary Antibodies</button>
</form>

</div>




</body>
</html>

