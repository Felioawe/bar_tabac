<?php $title = "STOCK"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>
<?php


$sql = "SELECT * FROM user";

$req = $db->prepare($sql);

$req->execute();

$results = $req->fetchAll(PDO::FETCH_ASSOC);

?>
<section class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="AddStock">

            </div>
        </div>
        <div class="col-6">
            <div class="cadre-or border-bottom-0">
                <h1 class="text-uppercase fs-4 text-center m-0 py-2">Stock</h1>
            </div>
            <table class="cadre-or text-center w-100">
                <thead>
                    <tr class="text-uppercase text-or">
                        <th class="p-3" scope="col">id</th>
                        <th class="p-3" scope="col">Catégorie</th>
                        <th class="p-3" scope="col">Produit</th>
                        <th class="p-3" scope="col">nb</th>
                        <th class="p-3" scope="col">Prix</th>
                        <th class="p-3" scope="col">Tva</th>
                        <th class="p-3" scope="col">Ttc</th>
                        <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi') : ?>
                            <th class="text-capitalize p-3" scope="col"><button class="ButAddStock butAdd ps-2 py-1">inscription</button></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <?php foreach ($results as $user) : ?>
                    <tbody>
                        <tr class="cadre-or">
                            <th data-target="id-produit" class="text-red p-3" scope="row"><?= '...' ?></th>
                            <th data-target="categorie" class="text-muted p-3" scope="row"><?= '...' ?></th>
                            <td data-target="produit" class="text-muted py-3 px-0"><?= '...' ?></td>
                            <td data-target="nb" class="text-muted py-3 px-0"><?= '...' ?></td>
                            <td data-target="prix" class="text-muted py-3 px-0"><?= '...' ?></td>
                            <td data-target="tva" class="text-muted py-3 px-0"><?= '...' ?></td>
                            <td data-target="ttc" class="text-muted py-3 px-0"><?= '...' ?></td>
                            <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi') : ?>
                                <td class="text-muted"><button class="ButUpdateStock butUpdate ps-2 py-1">Modifier</button></td>
                                <td class="text-muted"><a class="butDelete ps-2 py-1" href="./requette/delete_user.php?id=<?= $user['id_user']; ?>">Supprimer</a></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
        <div class="col-3">
            <div class="UpdateStock">
                <form class="cadre-or w-100" action="./requette/update_stock.php" enctype="multipart/form-data" method="POST">
                    <div class="text-white text-uppercase w-100 px-5 py-3">
                        <h2 class="text-center border-b-or pb-2">Modifier</h2>
                        <div>
                            <input type="hidden" name="id-produit" id="id-produit">
                        </div>
                        <div>
                            <label for="categorie">Catégorie :</label><br>
                            <select class="w-100" name="categorie" id="categorie">
                                <option value=""></option>
                                <?php foreach ($genre['genres'] as $categorie_film) : ?>
                                    <option value="<?= $categorie_film['id'] ?>"><?= $categorie_film['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label for="produit">Produit :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="produit" id="produit" placeholder="Change Produit">
                        </div>
                        <div>
                            <label for="nb">nb :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="nb" id="nb" placeholder="Change NB">
                        </div>
                        <div>
                            <label for="prix">Prix :</label>
                            <input class="bg-gray text-white w-100" type="text" id="prix" name="prix" placeholder="Change Prix">
                        </div>
                        <div>
                            <label for="tva">Tva :</label><br>
                            <input class="bg-gray text-white w-100" type="text" id="tva" name="tva" placeholder="Change TVA">
                        </div>
                        <div>
                            <label for="ttc">ttc :</label><br>
                            <input class="bg-gray text-white w-100" type="text" id="ttc" name="ttc" placeholder="Change TTC">
                        </div>
                        <div class="mt-2">
                            <input class="bg-gray butAdd rounded-2 w-100" type="submit" value="Modifier">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once "./structure/footer.php"; ?>