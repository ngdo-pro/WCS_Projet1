<!-- HEADER-->
<?php
	$titre = "Nos restaurants Ratatouille";
	include ('layout/header.php');
?>

<!-- BODY -->
<!-- BODY -->
<body>
	<div class="container"> 
		<section id="current_restaurants">	
			<div class="container">
				<div class="row"> 	<!-- H1 + LOGO -->
					<div id="top_page_restaurants">
						<div class="col-sm-12 col-md-6">
							<h1 class="text-left">TROUVER UN RESTAURANT RATATOUILLE</h1>
							<p class="text-left">Nos équipes vous attendent dans l'un de nos 7 restaurants.</p>	
						</div>
					</div>

				</div>
			</div>

			<!--  LISTING RESTAURANTS -->						
			<div class="container">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4">
							<div id="ratatouille_laloupe">
								<img src="assets/img/Ratatouille-restaurant-la-loupe.jpg" alt="restaurant ratatouille ville de La Loupe" width="180" height="180">
								<p>18 Rue de la gare <br/>28240 La Loupe<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_chartres">
								<img src="assets/img/Ratatouille-restaurant-chartres.jpg" alt="restaurant ratatouille ville de Chartres" width="180" height="180">
								<p>3 rue Charles Brune<br/>28110 Lucé<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_fontainebleau">
								<img src="assets/img/Ratatouille-restaurant-fontainebleau.jpg" alt="Restaurant ratatouille ville de Fontainebleau" width="180" height="180">
								<p>35 rue Saint Honoré<br/>77300 Fontainebleau<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_orleans">
								<img class="img-rounded" src="assets/img/Ratatouille-restaurant-orleans.jpg" alt="Restaurant ratatouille ville de Orleans" width="180" height="180">
								<p>1 Avenue du champ de Mars<br/>45100 Orléans<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_bordeaux">
								<img class="img-rounded" src="assets/img/Ratatouille-restaurant-orleans.jpg" alt="Restaurant ratatouille ville de Orleans" width="180" height="180">
								<p>15 Place Canteloup<br/>33800 Bordeaux<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_lyon">
								<img src="assets/img/Ratatouille-restaurant-lyon.jpg" alt="restaurant ratatouille ville de Lyon" width="180" height="180">
								<p>17 rue Delandine<br/>69002 Lyon<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
						<div class="col-md-4">
							<div id="ratatouille_toulouse">
								<img src="assets/img/Ratatouille-restaurant-toulouse.jpg" alt="Restaurant ratatouille ville de Toulouse" width="180" height="180">
								<p>1 place de la Bourse <br/>31000 Toulouse<br/>0475096787</p>
								<button class="btn btn-default">Accès au site</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!--  PROCHAINES OUVERTURES -->			
		<section id="next_restaurants">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h2>Nos prochaines ouvertures</h2>
						<p>texte</p>
					</div>
				</div>


			<div class="container">		
				<div class="row">
					<div class="col-md-4">
						<div id="ratatouille_paris">
							<img src="assets/img/Ratatouille-restaurant-toulouse.jpg" alt="Restaurant ratatouille ville de Toulouse" width="180" height="180">
							<p>Ouverture prochainement</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
























<!-- FOOTER-->
<?php
	include ('layout/footer.php');
?>
