
<!doctype html>

<html>
	<head>
		<title>METALLICORNE</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="public/simplegrid.css" />
		<link rel="stylesheet" type="text/css" href="public/reset.css" />
		<link rel="stylesheet" type="text/css" href="public/style_header.css" />
		<link rel="stylesheet" type="text/css" href="public/style_contact.css" />

	</head>
	<body>
		<?php include "includes/header.php" ?>

		<div id="conteneur">
			<div id="contenu">

				<?php
				 $pdo= new PDO("mysql:host=localhost;port=22;dbname=Metallicorne","root","iut");
					$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					$pdo->query("SET NAMES UTF8");


					echo '<form method="post" action="contact.php">';
					echo '<select name="Camp">';
					echo '<option value="">Camp</option>';
					$stmt=$pdo->query("SELECT Nom_camp FROM camp ORDER BY Nom_camp");

					while($r=$stmt->fetch(PDO::FETCH_NUM))
						echo "<option value=${r[0]}>${r[0]}</option>";


					echo '</select>';
					echo '<input type="submit" value="Valid" />';
					echo '</form>';

					$stmt=$pdo->prepare("SELECT Adresse_Camp,ville_camp,telephone,localisation FROM camp where nom_camp=:i");
					$stmt->execute(array(':i'=>$_POST['Camp']));
					$data = $stmt->fetch(PDO::FETCH_ASSOC);
					echo 'Address : ';
					echo( $data['Adresse_Camp']);
					echo'<br/>';
					echo 'City Name :';
					echo($data['ville_camp']);
					echo'<br/>';
					echo 'Phone Number : ';
					echo( $data['telephone']);
					//if(isset($_POST['Camp'])) echo "$stmt";
					echo'<br/>';
					echo( $data['localisation']);
				?>
			</div>
		</div>
	</body>
</html>
