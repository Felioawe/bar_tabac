<?php $title = "BLOG"; ?>
<?php
require_once "./structure/header.php";
require_once "./requette/config.php";
require_once "./structure/function.php";
?>

<section class="la-carte shadow1 p-3 mt-5 w-85 m-auto">
    <h2 class="w-25 text-center m-auto text-white afert1 pb-2 px-0">Nos Evenements</h2>
    <h2 class="w-25 m-auto afert2"></h2>
    <?php $result = get_article($db, 0); ?>
    <div class="container-fluid bg-or my-5">
        <div class="row">
            <?php foreach ($result as $add) : ?>
                <?php echo article($add); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if (isset($_SESSION['connect']) && !empty($_SESSION['connect'])) : ?>
    <?php if ($_SESSION['connect'] == 1) : ?>
        <div class="w-50 m-auto">
            <div class="d-flex flex-column cadre-or text-white p-4 my-5">
                <form action="./requette/insert_article.php" enctype="multipart/form-data" method="POST">
                    <h1 class="text-center">Article</h1>
                    <div class="d-flex flex-column">
                        <div>
                            <label for="titre">Titre :</label><br>
                            <input type="text" name="titre" id="titre">
                        </div>
                        <div>
                            <label for="mes">Votre message :</label><br>
                            <textarea class="w-100" name="mes" id="mes" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
                        </div>
                        <div>
                            <input type="hidden" name="date" id="date" value="<?= date("d/m/Y"); ?>">
                        </div>
                        <div>
                            <input class="my-4" type="file" name="img" id="img">
                        </div>
                        <div>
                            <input class="w-100" type="submit" value="Ajouter">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php require_once "./structure/footer.php";