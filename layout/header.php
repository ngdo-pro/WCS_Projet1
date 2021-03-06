<?php
	$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin justo vel blandit consequat. Suspendisse sollicitudin pharetra lorem in ullamcorper. Nunc venenatis lacus vel mauris imperdiet dignissim. Cras rutrum magna mi, eu sodales ipsum facilisis a. Morbi eleifend leo vel tortor tincidunt, ut auctor enim mattis. Vivamus pretium est augue, quis vulputate libero interdum sed. Mauris posuere quam quis faucibus mollis. Cras hendrerit eu massa semper imperdiet.";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ratatouille <?php if (isset($titre)){?>| <?php echo $titre;}?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
		<link rel="icon" type="image/png" href="assets/img/favicon-16x16.png"/>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
	</head>
	<body>
		<!-- Conteneur de la page pour permettre l'utilisation de bootstrap-->
		<div class="container-fluid">
			<div class="navbar-fixed-top">
				<!-- Première navbar, avec les réseaux sociaux et le drapeau de langage -->
				<nav class="navbar navbar-default" id="social-navbar">
					<!-- Conteneur de la navbar -->
					<div class="container-fluid">
						<!-- Liste des liens de la navbar-->
						<ul class="nav navbar-nav pull-right">
							<li>
								<a href="#"><strong>En</strong></a>
							</li>
							<li>
								<a href="#"><img src="assets/img/Ratatouille-button-facebook.png"></a>
							</li>
							<li>
								<a href="#"><img src="assets/img/Ratatouille-button-twitter.png"></a>
							</li>
							<li>
								<a href="#"><img src="assets/img/Ratatouille-button-instagram.png"></a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- Seconde navbar, c'est la principale -->
				<nav class="navbar navbar-default" id="main-nav">
				<!-- Header de la navbar, avec le logo et le menu hamburger -->
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-left" href="index.php"><img src="assets/img/logo-ratatouille-header-420x115.png"></a>
						</div>
						<!-- partie cachée dans le menu hamburger en mode mobile, visible sur les autres support-->
						<div class="collapse navbar-collapse" id="main-nav-collapse">
							<ul class="nav navbar-nav pull-right">
								<li>
									<a href="concept-ratatouille.php" class="text-right">Le concept Ratatouille</a>
								</li>
								<li>
									<a href="devenir-franchise-ratatouille.php" class="text-right">Devenir franchisé</a>
								</li>
								<li>
									<a href="actualites-ratatouille.php" class="text-right">Nos actualités</a>
								</li>
								<li>
									<a href="les-restaurants-ratatouille.php" class="text-right">Les restaurants Ratatouille</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>