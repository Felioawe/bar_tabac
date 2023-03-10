<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./structure/feuille.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script defer src="./structure/modal.js"></script>
    <script defer src="./structure/burger.js"></script>
    <script defer src="./structure/form.js"></script>
    <script defer src="./structure/contact.js"></script>

    <title><?= $title ?: "HOME"; ?></title>

</head>

<body>

    <?php require_once "./structure/function.php"; ?>
    <?php require_once "./requette/config.php"; ?>
    <?php require_once "modal_user.php"; ?>
    <?php require_once "modal_success_ou_erreur.php"; ?>
    <?php require_once "modal_verif.php"; ?>
    <a class="d-none js-modal" href="#mod2"></a>
    <a class="d-none js-modal" href="#mod3"></a>
    <header>
        <nav class="menu">
            <div class="navbar navlogo d-flex m-auto w-85">
                <div>
                    <img class="logo" src="./assets/logo_Le_Bistrot.png" alt="logo_Le_Bistrot">
                </div>
                <div class="navbar">
                    <i class="fa fa-mobile text-white"></i>
                    <p class="m-0 px-3 text-or"> 06 XX XX XX</p>
                    <i class="fa fa-envelope text-white"></i><a class="m-0 mb-1 text-or px-3 text-decoration-none" href="./contact.php">contact@bistrot.com</a>

                    <?php $butAdmi = ''; ?>
                    <?php if (isset($_SESSION['connect']) && !empty($_SESSION['connect'])) : ?>
                        <?php if ($_SESSION['connect'] == 1) : ?>
                            <?php $butAdmi = '<button class="butBurger p-3"></button>'; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php $butAdmi = '<a class="text-decoration-none text-white text-or-h text-uppercase fs-6 js-modal" href="#mod1">login</a>'; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="nav-burger">
                <div>
                    <nav class="navbar navbar-dark bg-gray">
                        <div class="container-fluid">
                            <button class="navbar-toggler border-or" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon color-or"></span>
                            </button>
                            <?= $butAdmi; ?>
                        </div>
                    </nav>
                    <div class="collapse bg-gray w-100" id="navbarToggleExternalContent">
                        <div class="p-5 d-flex flex-column justify-content-between align-items-center">
                            <a class="text-decoration-none text-white text-or-h text-uppercase py-4 position-relative" href="./index.php">Home</a>
                            <a class="text-decoration-none text-white text-or-h text-uppercase py-4" href="./evenement.php">Evenement</a>
                            <a class="text-decoration-none text-white text-or-h text-uppercase py-4" href="">Services</a>
                            <a class="text-decoration-none text-white text-or-h text-uppercase py-4" href="./contact.php">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-time bg-gray d-flex">
                <div class="w-25">
                </div>
                <div class="w-35">
                    <div class="m-auto d-flex justify-content-between py-2">
                        <a class="text-decoration-none text-white text-or-h text-uppercase position-relative" href="./index.php">Home</a>
                        <a class="text-decoration-none text-white text-or-h text-uppercase" href="./evenement.php">Evenement</a>
                        <a class="text-decoration-none text-white text-or-h text-uppercase" href="">Services</a>
                        <a class="text-decoration-none text-white text-or-h text-uppercase" href="./contact.php">Contact</a>
                    </div>
                </div>
                <div class="w-25 text-end align-self-center me-5">
                    <?= $butAdmi; ?>
                </div>
            </div>
        </nav>

        <div class="h-116">
        </div>

        <div class="burger">
            <div class="bg-black menuAdmi d-flex flex-column">
                <?php if (isset($_SESSION['img_user']) && !empty($_SESSION['img_user'])) : ?>
                    <div class="text-center mt-3">
                        <img class="logo-profil radius-100" src="img_profil/<?= $_SESSION['img_user']; ?>">
                    </div>
                <?php else : ?>
                    <div class="text-center mt-3">
                        <img class="logo-profil radius-100" src="./img_profil/profil.png">
                    </div>
                <?php endif; ?>
                <div class="text-center div-Profil my-3">
                    <a class="text-decoration-none text-green text-uppercase ms-2" href="./profil.php"><?= $_SESSION['user']; ?><i class="ms-2 fa-solid fa-bars"></i></a>
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
                            <a class="" href="">Comptabilit??</a>
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

        <?php if ($title == "HOME") : ?>

            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/barista.jpg" class="grand-slider-img w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/istockphoto-688451514-1024x1024.jpg" class="grand-slider-img w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/istockphoto-157435413-1024x1024.jpg" class="grand-slider-img w-100" alt="">
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
            </section>

        <?php elseif ($title == "ARTICLE") : ?>
            <?php $id = $_GET['id']; ?>
            <?php $result = get_article($db, "", $id); ?>

            <section class="bg-bandeau">
                <img class="bandeau" src="./upload/<?= $result['img']; ?>" alt="" >
                <div class="bandeau-title">
                    <div class="header-title">
                        <h1 class="text-uppercase title-header w-50 m-auto"><?= $result['titre'] ?><img class="title-header-after w-100" src="./assets/after_bar_tabc.png" alt="after"></h1>
                    </div>
                </div>
            </section>

        <?php else : ?>

            <section class="bg-bandeau">
                <img class="bandeau" src="./assets/planche.jpg" alt="">
                <div class="bandeau-title">
                    <div class="header-title">
                        <h1 class="text-uppercase title-header w-50 m-auto"><?= $title ?><img class="title-header-after w-100" src="./assets/after_bar_tabc.png" alt="after"></h1>
                    </div>
                </div>
            </section>

        <?php endif; ?>

        <div class="bandeau-transparent1"></div>
        <div class="bandeau-transparent2"></div>
    </header>
    <main>