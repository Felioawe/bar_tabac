<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./structure/feuille.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script defer src="./structure/modal.js"></script>
    <script defer src="./structure/burger.js"></script>

    <title><?= $title ?: "Home"; ?></title>

</head>

<body>

    <?php require_once "./structure/function.php"; ?>
    <?php require_once "./requette/config.php"; ?>
    <?php require_once "modal_user.php"; ?>
    <?php require_once "modal_inscription.php"; ?>
    <header>
        <nav class="menu">
            <div class="navbar d-flex  m-auto w-85">
                <div>
                    <img class="logo" src="./assets/logo_bar_tabc_2.png" alt="logo_loup">
                </div>
                <div class="navbar">
                    <i class="fa fa-mobile text-white"></i>
                    <p class="m-0 px-3 text-or"> 06 XX XX XX</p>
                    <i class="fa fa-envelope text-white"></i><a class="m-0 mb-1 text-or px-3 text-decoration-none" href="mailto:contact@pandao.eu"> contact@pandao.eu</a>
                    <?php $butAdmi = ''; ?>
                    <?php if (isset($_SESSION['connect']) && !empty($_SESSION['connect'])) : ?>
                        <?php if ($_SESSION['connect'] == 1) : ?>
                            <?php $butAdmi = '<button class="butBurger p-3"></button>'; ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php $butAdmi = '<a class="text-decoration-none text-white text-or-h text-uppercase fs-6 js-modal" href="#mod1">login</a>'; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="bg-gray d-flex">
                <div class="w-80 m-auto ms-128 text-center py-2">
                    <a class="text-decoration-none text-white text-or-h text-uppercase me-5 position-relative" href="./index.php">Home</a>
                    <a class="text-decoration-none text-white text-or-h text-uppercase mx-5" href="">Services</a>
                    <a class="text-decoration-none text-white text-or-h text-uppercase ms-5" href="./evenement.php">Evenement</a>
                    <a class="text-decoration-none text-white text-or-h text-uppercase mx-5" href="./contact.php">Contact</a>
                </div>
                <div class="me-128 align-self-center">
                    <?= $butAdmi; ?>
                </div>
            </div>
        </nav>

        <div class="h-116">
        </div>
        <div class="burger">
            <div class="bg-black menuAdmi d-flex flex-column">
                <div class="text-center mt-3">
                    <img class="logo-profil radius-100" src="img_profil/<?= $_SESSION['img_user']; ?>">
                </div>
                <div class="text-center my-3">
                    <a class="text-decoration-none text-white text-uppercase" href="./profil.php"><?= $_SESSION['user']; ?></a>
                </div>
                <div class="text-center mb-3">
                    <a class="butDisconnect" href="./requette/disconnect.php">Disconnect</a>
                </div>
                <img class="w-100" src="./assets/after_bar_tabc.png" alt="after">
                <div class="container-sous-menu">
                    <div class="container-menu-secondaire-1">
                        <div class="menu-secondaire-1">
                            <a href="stock.php">Stock</a>
                        </div>
                        <div class="sous-menu-1">
                            <a href="#">#</a>
                            <a href="#">#</a>
                            <a href="#">#</a>
                        </div>
                    </div>
                    <div class="container-menu-secondaire-2">
                        <div class="menu-secondaire-2">
                            <a href="compte.php">Compte</a>
                        </div>
                        <div class="sous-menu-2">
                            <a href="#">#</a>
                            <a href="#">#</a>
                        </div>
                    </div>
                    <div class="container-menu-secondaire-3">
                        <div class="menu-secondaire-3">
                            <a class="" href="">Comptabilité</a>
                        </div>
                        <div class="sous-menu-3">
                            <a href="#">#</a>
                            <a href="#">#</a>
                            <a href="#">#</a>
                            <a href="#">#</a>
                        </div>
                    </div>
                    <div class="container-menu-secondaire-4">
                        <div class="menu-secondaire-4">
                            <a class="" href="">#</a>
                        </div>
                    </div>
                    <div class="container-menu-secondaire-5">
                        <div class="menu-secondaire-5">
                            <a href="./evenement.php">Evenement</a>
                        </div>
                        <div class="sous-menu-5">
                            <a href="#">#</a>
                        </div>
                    </div>
                    <div class="container-menu-secondaire-6">
                        <div class="menu-secondaire-6">
                            <a href="#">#</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section1 mb-5">
            <div class="row w-0 g-0">
                <div class="col-3 row g-0 d-flex flex-column">
                    <div class="col-4 img-svf1">
                        <div class="h-black">
                            <p>Alcool</p>
                        </div>
                    </div>
                    <div class="col-4 img-svf2">
                        <div class="h-black">
                            <p>Bière</p>
                        </div>
                    </div>
                    <div class="col-4 img-svf3">
                        <div class="h-black">
                            <p>Non-alcool</p>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/istockphoto-157435413-1024x1024.jpg" class="h-645 w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/istockphoto-688451514-1024x1024.jpg" class="h-645 w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/tonneau.jpg" class="h-645 w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>