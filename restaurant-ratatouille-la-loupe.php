<!-- HEADER-->
<?php
	$titre = "Nos restaurants Ratatouille";
	include ('layout/header.php');
?>



<!-- SECTIONS -->
<body>
	<div class="container-fluid">
		<section id="section_restaurantlaloupe">
			<h1>RESTAURANT RATATOUILLE <br />LA LOUPE</h1>
		</section>
	</div>

	<div class="container">
		<div class="page_loupe">
			<section id="section_chefloupe">	
				<div class="row"> 	<!-- Part 1 Un concept unique -->
					<div class="col-sm-12 col-md-6 col-md-push-6">
						<div class="blocs_de_textes">
							<h2 class="featurette-heading"> Le chef de la Loupe <br/></h2>
							<p class="text-justify">Noël Flantier.<br/>Voici notre étoile à nous. Digne héritier des plus grands chefs français. Noël a fait ses classes dans les prestigieux restaurants DellaBlankett du Caire et de Rio. De retour en France il y a 2 ans, il pose ses valises à la Loupe et relève le défi de décliner la ratatouille dans la carte du restaurant Ratatouille de La Loupe. Généreux et attachant, Eric est de ces personnes qui marquent les esprits des personnes qu'il croise. Vous apprécierez sa créativité et sa touche personnelle.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-md-pull-6">
						<img class="img-responsive" src="assets/img/page-type-restaurant-visuel5.jpg" alt="photo chef Flantier restaurant La Loupe" >
					</div>		
				</div>
			</section>
			
			<section id="section_lacarte">		
				<div class="row"> 	<!-- Part 2 Tradition, savoir-faire -->
					<div class="col-sm-12 col-md-6">
						<div class="blocs_de_textes">
							<h2 class="featurette-heading"> La carte du restaurant <br/></h2>
							<p class="text-justify">Retrouvez la carte de notre restaurant. </p>
							<button class="btn btn-default">Télécharger la carte</button>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<img class="img-responsive" src="assets/img/page-type-restaurant-visuel4.jpg" alt="photo la carte restaurant La Loupe">
					</div>
				</div>
			</section>		

			<section id="section_horaires_acces">
				<div class="row"> 
					<div class="col-sm-12 col-md-6 col-md-push-6">
						<div class="blocs_de_textes">
							<h2 class="featurette-heading">Adresse et horaires</h2> 
							<p class="adresse_loupe text-justify">18 Rue de la gare<br/>
							28240 La Loupe<br/>
							04 75 09 67 87<br/>
							Accès Gare SNCF à 50 mètres,<br/>
							Ligne Paris Montparnasse / Le Mans<br/></p>	
							<p class="horaires_loupe">Lundi 19h 21h<br/>Mardi 19h 21h<br/>Vendredi 19h 23h<br/>Samedi 19h 23h<br/>Fermé les mercredi, jeudi et dimanche </p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-md-pull-6">
						<img class="img-responsive" src="assets/img/page-type-restaurant-visuel6.jpg" alt="photo horaires restaurant Ratatouille La Loupe">
					</div>		
				</div>
			</section>
		</div>
	</div>
		<div class="container">
			<div class="row"> 
				<section id="api_googlemaps">


				</section>
			</div>
		</div>
	</div>
</body>

<!-- FOOTER-->
<?php
	include ('layout/footer.php');
?>