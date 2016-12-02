
<table class="table table-hover">
	<tr>
		<h1>Choose a camp if you want more details</h1>
	</tr>
	
	<tr class="danger">
		<td>Camp name</td>
		<td>Camp address</td>
		<td>Camp city</td>
	</tr>
	<?php
	// Print camps from database
	$stmt=$pdo->query('SELECT * FROM camp');
	if($stmt->rowCount()>0){
		while($r=$stmt->fetch(PDO::FETCH_NUM)){
			echo "<tr>
				<td><a href='ServicesCamp.php?id=${r[0]}'>${r[1]}</a></td>
				<td>${r[2]}</td>
				<td>${r[3]}</td> 
				</tr>";
		}
	}

	?>
</table>
