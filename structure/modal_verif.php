<div id="mod3" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
    <div class="mod js-stop w-100 m-auto">
    <?php if ($title == "NOS EVENEMENTS") : ?>
        <form class="cadre-or m-0 w-25 m-auto" action="./requette/delete_article.php" method="get">
    <?php elseif ($title == "COMPTE") : ?>
        <form class="cadre-or m-0 w-25 m-auto" action="./requette/delete_user.php" method="get">
    <?php elseif ($title == "STOCK") : ?>
        <form class="cadre-or m-0 w-25 m-auto" action="./requette/delete_produit.php" method="get">
    <?php endif; ?>
            <div class="text-center text-uppercase pt-2 px-2">
                <p class="m-0 text-blue">Confirmez-vous la suppréssion ?</p>
                <input type="hidden" id="id" name="id" value="<?= isset($_GET['id']) ? $_GET["id"] : NULL;  ?>">
            </div>
            <div class="d-flex justify-content-evenly align-items-center pb-2 px-2">
                <button type="submit" class="butDelete m-2">Supprimer</button>
                <button class="js-modal-close butDelete m-2">Annuler</button>
            </div>
        </form>
    </div>
</div>