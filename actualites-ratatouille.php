<?php
    $titre = "Actualités";
    include ('layout/header.php');
?>

<section id="section_news_list">
    <div class="container">
        <h1>Les Actualités Ratatouille</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="news_card">
                    <div class="container">
                        <div class="col-md-2">
                            <img src="assets/img/food2.jpg" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-10">
                            <h3>Titre Actualités</h3>
                            <p class="text-justify"><?php echo $lorem; ?></p>
                            <div class="news_card_button">
                                <button class="btn btn-default">Lire la suite</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="news_card">
                    <div class="container">
                        <div class="col-md-2">
                            <img src="assets/img/food2.jpg" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-10">
                            <h3>Titre Actualités</h3>
                            <p class="text-justify"><?php echo $lorem; ?></p>
                            <div class="news_card_button">
                                <button class="btn btn-default">Lire la suite</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="news_card">
                    <div class="container">
                        <div class="col-md-2">
                            <img src="assets/img/food2.jpg" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-10">
                            <h3>Titre Actualités</h3>
                            <p class="text-justify"><?php echo $lorem; ?></p>
                            <div class="news_card_button">
                                <button class="btn btn-default">Lire la suite</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php

    include ('layout/footer.php');