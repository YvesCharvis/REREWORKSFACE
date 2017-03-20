<?php 
	if (!empty($_POST)) {
		$search = $_POST;
			foreach ($search as $key) {
				header ('Location: http://google.fr/#q=site:myemw.coding-moulins.xyz '.$key);
			}
			}
 ?>





<!DOCTYPE html>
<html>
	<head>
		<title>Coding Moulins</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			 <!-- Meta pour la responsive -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="frameworks/materialize.css">
			<!-- Link du CSS de Bootstrap -->
			<link rel="stylesheet" type="text/css" href="frameworks/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="frameworks/bootstrap.min.css">
			<!-- Link du JS JQuery -->
			<script type="text/javascript" src="js/jquery.js"></script>
			<!-- Link du JS de Bootstrap -->
			<script type="text/javascript" src="js/bootstrap.js"></script>
			<!-- Link de notre CSS  -->
			<link rel="stylesheet" type="text/css" href="style/css/style.css"> 
			<!-- Coloration de Safari sur mobile -->
			<meta name="apple-mobile-web-app-capable" content="yes">
			<meta name="apple-mobile-web-app-status-bar-style" content="#24888F">
		<!-- Coloration de Google Chrome sur mobile -->
			<meta name="theme-color" content="#24888F">
		<!-- google search tags -->			
			<meta name="description" content="Coding Moulins">
  			<meta name="keywords" content="Coding Moulins">
  			<meta name="author" content="Coding Moulins">

			 <!-- Compiled and minified CSS -->
  

  <!-- Compiled and minified JavaScript -->

	</head>
<body class="container">
	<div class="row">
	<!--////////////////////////////////////HEADER\\\\\\\\\\\\\\\\\\\\\\\\\-->

							<!-- IMG FACE BORBONNAIS -->						

	<!--///////////////////////////////// Nav Accueil \\\\\\\\\\\\\\\\\\\\ -->
<header class="navbar">

	<!-- Logo & recherche -->
	<div id="top">
		<a href="index.php"><img src="img/faceimg.png" alt="Coding Moulins" /></a> 

			<form class="form-wrapper cf" action="" method="post">
				<input type="text" name="search" placeholder="Entrez votre recherche..." required>
				<button type="submit" onclick="location.href='http://www.adzuna.ru/blog/wp-content/uploads/2014/08/24.04.jpg'">Recherche</button>
			</form>
		
	</div>

	<!-- Menu / Navigation -->
	<div id="bottom" class="row">
		<div class="container">
			<nav class="navbar-header">
				<span class="text navbar-toggle">Navigation</span>
				<span class="bars navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<i class="fa fa-bars"></i>
				</span>
			</nav>

			<nav id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="index.php" title="Accueil" class="active">Accueil</a>
					</li>
					<li class="dropdown">
						<a href="presentation.php" title="Présentation" class="active">Présentation</a>
					</li>
					<li class="dropdown">
						<a href="galerie.php" title="Galerie" class="active">Galerie</a>					
					</li>
					<li class="dropdown">
						<a href="partenariat.php" title="Partenariat" class="active">Partenariat</a>				
					</li>
					<li class="dropdown">
						<a href="Contactfab.php" title="Fabrik" class="active">La Fabrik</a>
					</li>
					<li><a href="contact.php" title="Contact" class="active">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<span class="span4"></span>
<script type="text/javascript" src="js/jquery.js"></script>
