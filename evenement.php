<?php $title = "NOS EVENEMENTS"; ?>
<?php
require_once "./structure/header.php";
require_once "./requette/config.php";
require_once "./structure/function.php";
?>

<section class="la-carte shadow1 p-3 w-85 m-auto">
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
        <section class="w-85 m-auto">
            <div class="d-flex flex-column cadre-or text-white p-4 my-5">
                <form action="./requette/insert_article.php" enctype="multipart/form-data" method="POST">
                    <div class="w-25 m-auto text-center">
                        <h2 class="afert1 m-0 pb-2">Article</h2>
                        <h2 class="afert2"></h2>
                    </div>
                    <div class="d-flex flex-column">
                        <div>
                            <label for="titre">Titre :</label><br>
                            <input class="bg-gray text-white" type="text" name="titre" id="titre">
                        </div>
                        <div>
                            <label for="mes">Votre message :</label><br>
                            <textarea class="bg-gray text-white w-100" name="mes" id="mes" cols="30" rows="10"></textarea>
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
                            <input class="butAdd bg-gray rounded-2 w-100" type="submit" value="Ajouter">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
<?php require_once "./structure/footer.php";
