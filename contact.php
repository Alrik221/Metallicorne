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
    echo '<input type="submit" value="Tester" />';
    echo '</form>';

	$stmt=$pdo->prepare("SELECT Adresse_Camp,ville_camp,telephone,localisation FROM camp where nom_camp=:i");
	$stmt->execute(array(':i'=>$_POST['Camp']));
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
	echo 'Adresse: ';
	echo( $data['Adresse_Camp']);
	echo'<br/>';
	echo($data['ville_camp']);
	echo'<br/>';
	echo 'Numero de téléphone: ';
	echo( $data['telephone']);
    //if(isset($_POST['Camp'])) echo "$stmt";
	echo'<br/>';
	echo( $data['localisation']);
?>
