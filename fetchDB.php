

<?php

	include_once "connect.php";
	
	session_start(); // need this to work with sessions
	


	
	if(isset($_POST['elementID'])&&$_POST['elementID']=='flyStock'){
			$sql = "SELECT * FROM `fly stocks` Limit 0,1000";
			$result = $conn->query($sql) or die("Bad Query:$sql");
			$_SESSION['displayTable'] = false;
			
					 
				if ($result->num_rows > 0) {
					
					

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
			} else {
				echo"0 results";
			}
			

	
	}
	else if(isset($_POST['elementID'])&&$_POST['elementID']=='primaryStock'){
		$sql = "SELECT * FROM `primary antibodies` Limit 0,1000";
		$result = $conn->query($sql) or die("Bad Query:$sql");
		$_SESSION['displayTable']=false;
			if ($result->num_rows > 0) {
				// output data of each row
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
			} else {
				echo"0 results";
			}
		
		


		
	
	
	}
	else if(isset($_POST['elementID'])&&$_POST['elementID']=='secondaryStock'){
		$sql = "SELECT * FROM `secondary antibodies` Limit 0,1000";
		$result = $conn->query($sql) or die("Bad Query:$sql");
		$_SESSION['displayTable']= false;
			if ($result->num_rows > 0) {
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
			} else {
				echo"0 results";
			}
			
	
	}


	
	
	
	
	
	
	$conn->close();
?>

