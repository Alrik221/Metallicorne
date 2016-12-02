<!doctype html>
<html>
	<head>
		<title>Find your camp</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="public/reset.css" />
		<link rel="stylesheet" type="text/css" href="public/style_find.css" />
	</head>
	<?php
	//Connection to the database
	$pdo=new PDO("mysql:host=localhost;port=3306;dbname=metallicorne","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->query("SET NAMES UTF8");
	?>
	<body>
		<?php include "includes/ListCamp.php" ?>
	</body>
</html>
