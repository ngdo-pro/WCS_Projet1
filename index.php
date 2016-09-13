<?php
	$titre = "Accueil";
	include ('layout/header.php');
?>
<!-- Header de la page, avec un visuel et le slogan--> 
<section id="section_aboutus">
	<h1>Les restaurants Ratatouille <small>Entrez dans le monde de la cuisine du soleil !</small></h1>
	<button class="btn btn-default">Qui sommes-nous ?</button>
</section>
<section id="section_events">
	<div class="container-fluid">
		<h2>Les événements et actualités</h2>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4"><img src="assets/img/food.jpg" class="img-responsive img-thumbnail"></div>
				<div class="col-xs-8">
					<ul class="list-unstyled">
						<li>
							<h3>Evenement 1</h3> <p>
								Lorem ipsum
							</p>
						</li>
						<li>
							<h3>Evenement 2</h3> <p>
								Lorem ipsum
							</p>
						</li><li>
							<h3>Evenement 3</h3> <p>
								Lorem ipsum
							</p>
						</li><li>
							<h3>Evenement 4</h3> <p>
								Lorem ipsum
							</p>
						</li>
					</ul>
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
	<h2>Rejoignez l'aventure Ratatouille !</h2>
	<button class="btn btn-default">Devenez franchisé</button>
</section>

<?php
	include ('layout/footer.php');
