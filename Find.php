<!doctype html>
<html>
	<head>
		<title>Find your camp</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="public/reset.css" />
		<link rel="stylesheet" type="text/css" href="public/style_find.css" />
		<link rel="stylesheet" type="text/css" href="public/simplegrid.css" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/style_header.css" />

	</head>
	<?php
	//Connection to the database

	$pdo=new PDO("mysql:host=localhost;port=22;dbname=Metallicorne","root","iut");

	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->query("SET NAMES UTF8");
	?>
	<body>
		<?php include "includes/header.php" ?>
		<?php include "includes/ListCamp.php" ?>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
