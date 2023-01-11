<?php $title = "ARTICLE"; ?>
<?php require_once "./structure/header.php"; ?>

<section class="w-85 m-auto">
    <div class="container-fluid g-0">
        <div class="row g-0 justify-content-end text-center m-auto py-5" style="background: no-repeat url(./upload/<?= $result['img'] ?>) left/contain; height: 500px; max-width: 960px;">
            <div class="col-12 col-sm-4 col-md-5 col-lg-5">
            </div>
            <div class="col-12 col-sm-8 col-md-7 col-lg-6 d-flex flex-column justify-content-between cadre-or shadow2">
                <div>
                    <h4 class="article-titre px-5 mt-4"><?= $result['titre'] ?></h5>
                    <p class="article-mes mx-4 my-4"><?= $result['mes'] ?></p>
                    <p class="article-date px-5"><?= $result['date'] ?></p>
                </div>
                <div class="d-flex justify-content-between align-items-center my-4">
                    <a class="butDelete ms-3 py-2 px-3" href="requette/delete_article.php?id= <?= $result['id_blog'] ?>">Supprimer</a>
                    <a class="cards-but radius-11 text-decoration-none text-uppercase mb-2 me-3" href="./contact.php">contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cadre-or shadow1 p-3 mt-5 w-85 m-auto">
    <h2 class="w-25 text-center m-auto text-white after1 pb-2 px-0">Autres Evenements</h2>
    <h2 class="w-25 m-auto after2"></h2>
    <?php $result = get_article($db, 4, ""); ?>
    <div class="container-fluid bg-or my-5">
        <div class="row">
            <?php foreach ($result as $add) : ?>
                <?php echo article($add); ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="text-center my-4">
        <a class="cards-but radius-11 text-decoration-none text-uppercase mb-2" href="./evenement.php">Evenement</a>
    </div>
</section>

<?php require_once "./structure/footer.php"; ?>