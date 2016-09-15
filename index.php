<?php
	$titre = "Accueil";
	include ('layout/header.php');
?>
<!-- Header de la page, avec un visuel et le slogan--> 
<section id="section_aboutus">
	<h1 class="text-center">LES RESTAURANTS RATATOUILLE <br /><small>Redécouvrez les saveurs de la cuisine du soleil !</small></h1>
	<button class="btn btn-default">Qui sommes-nous ?</button>
</section>
<section id="section_events" >
	<div class="container-fluid">
		<h2 class="text-center">Les événements et actualités</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/ratatouille-Photo-homepage1.jpg" alt="actualite Ratatouille" class="img-circle" width="140px" height="140px"/>
						<h3>Nouveautés automne 2016</h3>
						<p>L’été touche bientôt à sa fin. L’automne pointe le bout de son nez et sonne le glas de la fin des apéros entre amis en terrasse ...</p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/ratatouille-Photo-homepage2.jpg" alt="actualite Ratatouille" class="img-circle" width="140px" height="140px"/>
						<h3>Soirée à La Loupe</h3>
						<p>L’équipe du restaurant de La Loupe a fêté la rentrée avec les clients sélectionnés suite au concours organisé en juillet dernier ...</p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/ratatouille-Photo-homepage3.jpg" alt="actualite ratatouille" class="img-circle" width="140px" height="140px"/>
						<h3>Nouvelle carte Lyon</h3>
						<p>Le restaurant Ratatouille de Lyon a ouvert ses portes en septembre dernier. Après avoir dévoilé ses fabuleux locaux ...</p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
			</div>
			<div class="row button_news">	
			<div class="col-md-4 col-md-offset-4 text-center">
				<button class="btn btn-default">Toutes les actualités</button>
			</div>
		</div>
		</div>
		
	</div>
</section>
<section id="section_franchise">
	<h2 class="text-center">Rejoignez l'aventure Ratatouille !</h2>
	<button class="btn btn-default">Devenez franchisé</button>
</section>

<?php
	include ('layout/footer.php');
