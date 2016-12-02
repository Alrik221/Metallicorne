<!doctype html>
<html>
	<head>
		<title>Services</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="public/reset.css" />
	</head>
	<?php
	//Connection to the database
	$pdo=new PDO("mysql:host=localhost;port=3306;dbname=metallicorne","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->query("SET NAMES UTF8");
	?>
	<body>
		<?php
				// Print data from database
		if(!empty($_POST['Choix'])){
			$stmt=$pdo->query('SELECT service.nom_service,service.description,proposition.heuredeb,proposition.heurefin FROM proposition,service WHERE $_POST["choix"]=proposition.ID_Cp ');
			if($stmt->rowCount()>0){
				while($r=$stmt->fetch(PDO::FETCH_NUM)){
					echo "<tr>
							<td>${r[0]}</td>
						</tr>
						<tr>
							<td>${r[1]}</td>
						</tr>
						<tr>
							<td>Ce service est disponible de ${r[2]} heure à ${r[3]} heure</td>
						</tr>";
				}
			}
		}
		
		
?>
	</body>
</html>
