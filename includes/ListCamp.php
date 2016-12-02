<table align="center">
	<form method="POST" action="">
		<tr>
			<td>Camp name</td>
			<td>Camp address</td>
			<td>Camp city</td>
		</tr>
		<?php
		// Print data from database
		$stmt=$pdo->query('SELECT * FROM camp');
		if($stmt->rowCount()>0){
			while($r=$stmt->fetch(PDO::FETCH_NUM)){
				echo "<tr>
					<td>${r[1]}</td>
					<td>${r[2]}</td>
					<td>${r[3]}</td> 
					<td><input type=\"submit\" name=\"camp\" value=\"Choisir ce camp\"</td> 
					</tr>";
			}
		}

?>
	</form>
</table>