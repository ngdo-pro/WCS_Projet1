<?php
	$titre = "Accueil";
	include ('layout/header.php');
?>
<!-- Header de la page, avec un visuel et le slogan--> 
<section id="section_aboutus">
	<h1 class="text-center">LES RESTAURANTS RATATOUILLE <br /><small>Redécouvrez les saveurs de la cuisine du soleil !</small></h1>
	<button class="btn btn-default">Qui sommes-nous ?</button>
</section>
<section id="section_events" class="first_section">
	<div class="container-fluid">
		<h2 class="text-center">Les événements et actualités</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/food2.jpg" class="img-circle" width="140px" height="140px"/>
						<h3>Titre Actu</h3>
						<p><?php echo $lorem; ?></p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/food2.jpg" class="img-circle" width="140px" height="140px"/>
						<h3>Titre Actu</h3>
						<p><?php echo $lorem; ?></p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img src="assets/img/food2.jpg" class="img-circle" width="140px" height="140px"/>
						<h3>Titre Actu</h3>
						<p><?php echo $lorem; ?></p>
						<div><button class="btn btn-default">En savoir plus</button></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-4 col-md-offset-4 text-center">
				<button class="btn btn-default">Toutes les actualités</button>
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
