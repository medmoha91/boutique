<?php
require 'navBar.php';
require 'connexionBdD.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
    <title>Galaxy Games | Votre spécialiste du jeux vidéos - Accueil</title>
</head>

<body>
    <!-- Intro -->
    <div class="container-fluid bg-light p-0">
        <div class="jumbotron bg-primary">
            <h1 class="display-4">Galaxy Games</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus expedita tenetur sint iste officia excepturi porro quia reprehenderit inventore alias, laboriosam in mollitia vero facilis accusamus illum neque, labore saepe.</p>
            <hr class="my-4">
            <p>Le meilleur du jeu vidéo !</p>
        </div>
    </div>
    <!-- Intro -->

    <!-- Affichage produits / Cards produits
    <div class="container mt-3 p-0">
        <div class="row">
            <div class="card-deck">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="images/uncharted4.jpg" class="card-img-top" alt="Jeu PS4 - Uncharted 4">
                        <div class="card-body">
                            <h5 class="card-title">Uncharted 4</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum architecto totam quis debitis perspiciatis explicabo beatae expedita, labore accusamus earum consequuntur, cupiditate animi magnam dolores saepe minima ex molestias consequatur.</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="images/spiderMan.jpg" class="card-img-top" alt="Jeu PS4 - Marvel's Spider-Man">
                        <div class="card-body">
                            <h5 class="card-title">Marvel's Spider-Man</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam temporibus voluptate repellendus consectetur ducimus quisquam nulla possimus reiciendis, obcaecati iure beatae nemo saepe ab placeat ipsa similique reprehenderit minima nostrum!</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="images/acOdyssey.jpg" class="card-img-top" alt="Jeu PS4 - Assassin Creed Odyssey">
                        <div class="card-body">
                            <h5 class="card-title">Assassin Creed's Odyssey</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam temporibus voluptate repellendus consectetur ducimus quisquam nulla possimus reiciendis, obcaecati iure beatae nemo saepe ab placeat ipsa similique reprehenderit minima nostrum!</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="card">
                        <img src="images/ghost-of-tsushima-jeu-ps4.jpg" class="card-img-top" alt="Jeu PS4 - Uncharted 4">
                        <div class="card-body">
                            <h5 class="card-title">Ghost Of Tsushima</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum architecto totam quis debitis perspiciatis explicabo beatae expedita, labore accusamus earum consequuntur, cupiditate animi magnam dolores saepe minima ex molestias consequatur.</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="card">
                        <img src="images/star-wars-jedi-fallen-order-jeu-ps4.jpg" class="card-img-top" alt="Jeu PS4 - Marvel's Spider-Man">
                        <div class="card-body">
                            <h5 class="card-title">Star Wars Jedi Fallen Order</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam temporibus voluptate repellendus consectetur ducimus quisquam nulla possimus reiciendis, obcaecati iure beatae nemo saepe ab placeat ipsa similique reprehenderit minima nostrum!</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-5">
                    <div class="card">
                        <img src="images/TLOU.jpg" class="card-img-top" alt="Jeu PS4 - Assassin Creed Odyssey">
                        <div class="card-body">
                            <h5 class="card-title">The Last Of Us Part. II</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam temporibus voluptate repellendus consectetur ducimus quisquam nulla possimus reiciendis, obcaecati iure beatae nemo saepe ab placeat ipsa similique reprehenderit minima nostrum!</p>
                            <form>
                                <div class="form-row">
                                    <div class="col-4">
                                        <input type="number" min="0" value="1" class="form-control bfh-number">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Affichage produits / Cards produits -->
    <div class="container mt-3 p-0">
        <div class="row">
            <div class="card-deck">

                <?php
                $requete = $dbh->prepare('SELECT * FROM PRODUIT');
                $requete->execute();
                $produits = $requete->fetchAll(PDO::FETCH_ASSOC);

                foreach ($produits as $produit) {
                    ?>
                    <div class="col-lg-4">
                        <div class="card">
                            <img src='<?= $produit['img'];?>' alt="Illustration du produit" class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title"><?= $produit['nom_produit']?></h5>
                                <p class="card-text"><?= $produit['description']?></p>
                                <form>
                                    <div class="form-row">
                                        <div class="col-4">
                                            <input type="number" min="0" value="1" class="form-control bfh-number">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <!-- Affichage produits / Cards produits -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
