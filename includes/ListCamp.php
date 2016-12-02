<table>
	<tr>
		<h1>Choose one or more camp for further details</h1>
	</tr>
	
	<tr>
		<td>Camp name</td>
		<td>Camp address</td>
		<td>Camp city</td>
	</tr>
	<form method="POST" action="ServicesCamp.php">
	<?php
	// Print camps from database
	$stmt=$pdo->query('SELECT * FROM camp');
	if($stmt->rowCount()>0){
		while($r=$stmt->fetch(PDO::FETCH_NUM)){
			echo "<tr>
				<td>${r[1]}</td>
				<td>${r[2]}</td>
				<td>${r[3]}</td> 
				<td><input type=\"checkbox\" name=\"choix\" value=\"${r[0]}\"></td>
				</tr>";
				
		}
	}

	?>
	<tr>
		<td></td>
		<td><input type="submit" name="Validate" value="Go !"></td>
	</tr>

	</form>
</table>
