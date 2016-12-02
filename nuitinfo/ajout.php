<?php
/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=iper2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}*/
echo $_POST['Nom_camp'] . '<br/> ' . $_POST['Adresse_camp'] . '<br/> ' . $_POST['Ville_camp'] ;
if(!empty($_POST['Nom_camp']) AND !empty($_POST['Adresse_camp']) AND  !empty($_POST['Ville_camp'])){

	if (trim($_POST['Ville_camp']) ==''){
		echo 'Ville n est pas valide' . '<br/>' ;
		$fg = False;
	}
	else
		$fg = True;
	if (trim($_POST['Adresse_camp']) ==''){
		echo 'Adresse n est pas valide' . '<br/>' ;
		$fg = False;
	}
	else
		$fg = True;
	
	if (trim($_POST['Nom_camp']) ==''){
		echo 'Nom n est pas valide' . '<br/>' ;
		$fg = False;
	}
	else
		$fg = True;
	
	if ($fg){
	/*$stmt = $bdd->prepare("INSERT INTO camp(Nom_camp,Adresse_camp,Ville_camp) VALUES(:nom, :ad, :ville)");
		$stmt->execute(array(
			'nom' =>$_POST['Nom_camp'],
			'ad' =>$_POST['Adresse_camp'],
			'ville' =>$POST['Ville_camp']));
			*/
	}else 
		echo 'Non non non';

}else{

	}
	
?>