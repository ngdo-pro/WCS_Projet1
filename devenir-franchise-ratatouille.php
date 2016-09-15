<?php
	$titre = "Devenez franchisé Ratatouille";
	include('layout/header.php');

?>
<div class="container">
    <section id="section_possibilities_franchise" class="first_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>DEVENEZ FRANCHISÉ <br />RATATOUILLE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Des possibilités de <br />développement infinies</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">Créés en 2014, les restaurants Ratatouille se sont ouverts à la franchise en 2016, après avoir pris
                        le temps de consolider la marque et son concept. Immédiatement reconnaissable grâce à un
                        positionnement fort et à un concept unique : la Ratatouille.Les restaurants Ratatouille se développent en France. 4 nouvelles ouvertures de restaurant sont prévues pour fin d'année 2016.</p>
                </div>
            </div>
            <div class="row franchise-checklist">
                <div class="col-md-6">
                    <ul>
                        <li><strong>Vous avez envie de relever un challenge</strong></li>
                        <li><strong>Vous avez une bonne connaissance de votre région, du bassin d'activité dans lequel vous voulez
                            vous implanter</strong></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><strong>Vous êtes entrepreneur</strong></li>
                        <li><strong>Vous souhaitez vous lancer dans votre propre aventure, être autonome et pouvoir vous appuyer sur une structure solide</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="section_advantages_franchise">
        <h2 class="text-center">Rejoignez le réseau des restaurants Ratatouille</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/ratatouille-vignette-page-franchise.jpg" class="img-responsive">
                </div>
                <div class="col-md-7">
                    <ul>
                        <li><strong>Une marque forte et cohérente, qui différencie l'enseigne de la concurrence.</strong></li>
                        <li><strong>Un positionnement unique grâce à un concept différent, innovant et, par définition, modulable.</strong></li>
                        <li><strong>Un savoir-faire éprouvé sur lequel vous pouvez compter pour vous déployer.</strong></li>
                        <li><strong>Des produits de qualité provenant de producteurs locaux suivant le protocole bio.</strong></li>
                        <li><strong>La force de travailler avec une équipe dynamique et créative.</strong></li>
                        <li><strong>L'opportunité de s'inscrire dans un projet ambitieux et d'y participer activement.</strong></li>
                        <li><strong>Une formation initiale et un accompagnement continu pour être toujours à vos côtés.</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="section_form_franchise">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center">Contactez-nous !</h2>
                    <form>
                        <div class="form-group">
                            <label for="InputLastName">Nom</label>
                            <input type="text" class="form-control" id="InputLastName" placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group">
                            <label for="InputFirstName">Prénom</label>
                            <input type="text" class="form-control" id="InputFirstName" placeholder="Entrez votre prénom">
                        </div>
                        <div class="form-group">
                            <label for="InputCity">Ville</label>
                            <input type="text" class="form-control" id="InputCity" placeholder="Entrez le nom de votre ville">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Adresse mail</label>
                            <input type="email" class="form-control" id="InputEmail" placeholder="Entrez votre adresse email">
                        </div>
                        <div class="form-group">
                            <label for="InputPhoneNumber">Numéro de téléphone</label>
                            <input type="tel" class="form-control" id="InputCity" placeholder="Entrez votre numéro de téléphone">
                        </div>
                        <div class="form-group">
                            <label for="InputStudies">Quel est votre niveau d'études ?</label>
                            <select class="form-control">
                                <option>inférieur au Bac</option>
                                <option selected>Bac</option>
                                <option>Bac + 2</option>
                                <option>Bac + 3</option>
                                <option>Bac + 5</option>
                                <option>supérieur à Bac + 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputPlace">Avez-vous un local ?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="place_yes" value="yes" checked>
                                    Oui
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="place_no" value="no">
                                    Non
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputProjectAdvancement">A quel niveau êtes-vous de votre projet ?</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputDate">Date d’ouverture de projet de franchise</label>
                            <input type="date" class="form-control" id="InputDate" placeholder="Date d’ouverture de projet de franchise">
                        </div>
                        <div class="form-group">
                            <label for="InputMoney">Quel est le montant de votre apport financier ?</label>
                            <select class="form-control">
                                <option>< 25k €</option>
                                <option selected>25k € < 50k €</option>
                                <option>50k € < 75k €</option>
                                <option>75k € < 100k €</option>
                                <option>100k € < 125k €</option>
                                <option>125k € < 150k €</option>
                                <option>> 150k €</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="InputExp">Avez-vous une expérience de restaurateur ?</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="exp_yes" value="yes" checked>
                                    Oui
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="exp_no" value="no">
                                    Non
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputComments">Avez vous autre chose à nous communiquer ?</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="section_record_franchise" class="last_section">
        <div class="container">
            <h2 class="text-center">Témoignage d'une franchisée</h2>
            <div class="row">
                <div class="col-md-2 card">
                    <img src="assets/img/ratatouille-franchise-photo-jenny.jpg" alt="photo franchisee restaurants ratatouille"class="img-responsive img-circle" width="140px" height="140px">
                </div>
                <div class="col-md-10 card">
                    <h3><strong>Jenny, manager du restaurant Ratatouille Fontainebleau</strong></h3>
                    <p>
                        “Je n’avais pas le souhait initial de me lancer avec une enseigne en franchise, jusqu’à ce que je
                        découvre les Restaurants Ratatouille sur Internet, puis au Salon de la Franchise de Paris en 2015.
                        L’élément clé a été pour moi l’importance accordée à la qualité des produits, des produits locaux
                        et bio.”
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php

	include('layout/footer.php');

?>