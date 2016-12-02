<?php
try
{
	$bdd = new PDO('mysql:host=89.40.114.42;dbname=Metallicorne;charset=utf8', 'root', 'iut', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


if((!empty($_POST['Nom_camp'])) AND (!empty($_POST['Adresse_camp'])) AND  (!empty($_POST['Ville_camp']))){


	if (((!trim($_POST['Ville_camp']) == '')) AND (!trim($_POST['Adresse_camp']) == '') AND (!trim($_POST['Nom_camp']) == '')){
		echo 'bjr';
	$stmt = $bdd->prepare("INSERT INTO camp(Nom_Camp,Adresse_Camp,Ville_Camp) VALUES(:nom, :ad, :ville)");
		$stmt->execute(array(
			'nom' =>$_POST['Nom_camp'],
			'ad' =>$_POST['Adresse_camp'],
			'ville' =>$_POST['Ville_camp']));
	}else{
		echo 'Champ non valide';}

}else{
	echo 'Veuillez remplir tout les champs';
	}

?>
