<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}



</style>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".dropdown-content a").on('click', function(){
	var elementID = $(this).attr("id");
	//alert(elementID);
    $.ajax({type: "POST",url: "fetchDB.php", data:{elementID},success: function(data){
	  $("#div1").append(data);
	  $("#div1").html(data);
    }});
  });
});

</script>
</head>
<body>

	<div id="myDropDown" class='dropdown'>
		<button class='dropbtn'>Select Table</button>
			<div class='dropdown-content'>
				<a id ='flyStock'>Fly Stocks</a>
				<a id ='primaryStock'>Primary Antibodies</a>
				<a id ='secondaryStock'>Secondary Antibodies</a>	
			</div>
	</div>
	





</body>
</html>


<?php

	include_once "connect.php";
	
	session_start(); // need this to work with sessions
	

		
	writeMessage($conn);
	
	
	function writeMessage($conn) {
	
		if(isset($_POST['1'])){
			if(isset($_SESSION['user']) && $_SESSION['displayTable']==true) {
				$sql = "SELECT * FROM `fly stocks` Limit 0,1000";
				$result = $conn->query($sql) or die("Bad Query:$sql");
				$_SESSION['displayTable'] = false;
				
						 
					if ($result->num_rows > 0) {
						
						echo"<div id='div1'>";

						// output data of each row
						echo"<table border = '1'>";
						echo"<tr><th>Genotype (=Label)</th><th>Short Description</th><th>Stock</th><th>Stock.</th>
						
						<th>Box</th><th>Position(A,B,C)</th><th>Position(1-13)</th><th>Status</th>
						
						<th>Status Comment</th><th>Originl User</th><th>Current User</th><th>Genetic Description</th>
						
						<th>Chromosome</th><th>Components and genes</th><th>Associated genes</th><th>Category</th>
						
						<th>Description</th><th>Citation (original)</th><th>tested</th><th>Phenotype</th><th>Comments</th>
						
						<th>published</th><th>Publication</th><th>Flybase ID</th><th>Flybase web link</th><th>Database DB</th>
						
						<th>Database ID</th><th>Status Comment</th><th>Stock comments</th><th>Donor</th><th>Donor ID</th>
						
						<th>Original Donor</th><th>Link</th>		
						
						</tr>";
						$result->fetch_assoc();
						while($row = $result->fetch_assoc()) {
							echo"<tr><td>{$row['Genotype (=Label)']}</td><td>{$row['Short Description']}</td><td>{$row['Stock']}</td> 
							
							
							<td>{$row['Stock.']}</td><td>{$row['Box']}</td><td>{$row['Position (A,B,C)']}</td><td>{$row['Position (1-13)']}</td> 
							
							<td>{$row['Status']}</td><td>{$row['Status Comment']}</td> <td>{$row['Original User']}</td><td>{$row['Current User']}</td> 
							
							<td>{$row['Genetic Description']}</td><td>{$row['Chromosome']}</td><td>{$row['Components and genes']}</td>

							<td>{$row['Associated genes']}</td><td>{$row['Category']}</td><td>{$row['Description']}</td><td>{$row['Citation (original)']}</td>
							
							<td>{$row['tested']}</td><td>{$row['Phenotype']}</td><td>{$row['Comments']}</td><td>{$row['published']}</td><td>{$row['Publication']}</td>
							
							<td>{$row['Flybase ID']}</td><td>{$row['FlyBase web link']}</td> <td>{$row['DatabaseDB']}</td><td>{$row['Database ID']}</td> 
							
							<td>{$row['Status Comment']}</td><td>{$row['Stock comments']}</td><td>{$row['Donor']}</td><td>{$row['Donor ID']}</td>  
							
							<td>{$row['Original donor']}</td><td>{$row['Link']}</td> 
							</tr>";#<br>
						}
						echo"</table>";
						echo"</div>";
				} else {
					echo"0 results";
				}
				

			}else {
				header("Location: login.php?error"); // forward to login site
				exit();
			}

		
		}
		else if(isset($_POST['2'])){
			if(isset($_SESSION['user']) && $_SESSION['displayTable']==true){
			$sql = "SELECT * FROM `primary antibodies` Limit 0,1000";
			$result = $conn->query($sql) or die("Bad Query:$sql");
			$_SESSION['displayTable']=false;
				if ($result->num_rows > 0) {
					// output data of each row
					echo"<div id='div1'>";
					echo"<table border = '1'>";
					echo"<tr><th>Antibody (=Label)</th><th>Antigen</th>   <th>Antigen(abbrevation)</th><th>Box</th><th>Species</th>   <th>Clonality</th><th>Status 1</th><th>Quantity</th>   <th>Status 2</th><th>Aliquots</th><th>Dilution</th>   <th>Storage</th><th>Freezer</th><th>Original User</th>   <th>Current User</th><th>Donor</th><th>Donor ID</th>   <th>Short description</th><th>Comments</th><th>Product form</th>  <th>Citation(original)</th><th>Uniprot ID</th><th>Entrez Gene ID</th>  <th>Antibody Registry ID</th><th>Link</th></tr>";

					while($row = $result->fetch_assoc()) {
						echo"<tr><td>{$row['Antibody (=Label)']}</td><td>{$row['Antigen']}</td>    
						<td>{$row['Antigen (abbrevation)']}</td><td>{$row['Box .']}</td><td>{$row['Species']}</td>
						<td>{$row['Clonality']}</td><td>{$row['Status 1']}</td><td>{$row['Quantity']}</td>
						
						
						<td>{$row['Status 2']}</td><td>{$row['Aliquots (mu l)']}</td><td>{$row['Dilution']}</td>
						<td>{$row['Storage']}</td><td>{$row['Freezer']}</td><td>{$row['Original User']}</td>
						<td>{$row['Current User']}</td><td>{$row['Donor']}</td><td>{$row['Donor ID']}</td>
						
						
						<td>{$row['Short description']}</td><td>{$row['Comments']}</td><td>{$row['Product form']}</td>
						<td>{$row['Citation (original)']}</td><td>{$row['Uniprot ID']}</td><td>{$row['Entrez Gene ID']}</td>
						
						<td>{$row['Antibody Registry ID']}</td><td>{$row['Link']}</td>
						
						</tr>";#<br>
					}
					echo"</table>";
					echo"</div>";
				} else {
					echo"0 results";
				}
			
			

			}
			else {
				header("Location: login.php?error"); // forward to login site
				exit();
			}
			
		
		
		}
		else if(isset($_POST['3'])){
			if(isset($_SESSION['user']) && $_SESSION['displayTable']==true) {
			$sql = "SELECT * FROM `secondary antibodies` Limit 0,1000";
			$result = $conn->query($sql) or die("Bad Query:$sql");
			$_SESSION['displayTable']= false;
				if ($result->num_rows > 0) {
					echo"<div id='div1'>";
					// output data of each row
					echo"<table border = '1'>";
					echo"<tr><th>Antibody (=Label)</th><th>Antigen</th>   <th>Antigen (abbrevation)</th><th>Species</th>   <th>Clonality</th><th>Status 1</th><th>Quantity</th>   <th>Status 2</th><th>Aliquots</th><th>Dilution</th>   <th>Storage</th><th>Freezer</th><th>Original User</th>   <th>Current User</th><th>Donor</th><th>Donor ID</th>   <th>Short description</th><th>Comments</th><th>Product form</th>  <th>Citation(original)</th><th>Uniprot ID</th><th>Entrez Gene ID</th>  <th>Antibody Registry ID</th><th>Link</th></tr>";
					while($row = $result->fetch_assoc()) {
						echo"<tr><td>{$row['Antibody (=Label)']}</td><td>{$row['Antigen']}</td>    
						<td>{$row['Antigen abbr']}</td><td>{$row['Species']}</td>
						<td>{$row['Clonality']}</td><td>{$row['Status 1']}</td><td>{$row['Quantity']}</td>
						
						
						<td>{$row['Status 2']}</td><td>{$row['Aliquots (mu l)']}</td><td>{$row['Dilution']}</td>
						<td>{$row['Storage']}</td><td>{$row['Freezer']}</td><td>{$row['Original User']}</td>
						<td>{$row['Current User']}</td><td>{$row['Donor']}</td><td>{$row['Donor ID']}</td>
						
						
						<td>{$row['Short description']}</td><td>{$row['Comments']}</td><td>{$row['Product form']}</td>
						<td>{$row['Citation (original)']}</td><td>{$row['Uniprot ID']}</td>
						<td>{$row['Entrez Gene ID']}</td><td>{$row['Antibody Registry ID']}</td><td>{$row['Link']}</td>
						
						</tr>";#<br>
					}
					echo"</table>";
					echo"</div>";
				} else {
					echo"0 results";
				}
				
			
			

			}else {
				header("Location: login.php?error"); // forward to login site
				exit();
			}

		}

	}	
	
	
	
	
	
	
	$conn->close();
?>


