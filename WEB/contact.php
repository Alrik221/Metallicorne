<?php
 $pdo= new PDO("mysql:host=localhost;port=3306;dbname=Metallicorne","root","");
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
    
	$stmt=$pdo->prepare("SELECT Adresse_Camp,ville_camp,telephone FROM camp where nom_camp=:i");
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
?>
<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5663025.518063102!2d-2.278444500821994!3d46.127858229936685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sfr!2sfr!4v1480648261100" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



