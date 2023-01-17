<?php $title = "STOCK"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>
<?php


$sql1 = "SELECT * FROM produit_categorie";

$req1 = $db->prepare($sql1);

$req1->execute();

$results1 = $req1->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT produit.id_produit, produit_categorie.categorie, produit_categorie.id_categorie, produit.produit, produit.nb, produit.prix, produit.tva, produit.ttc, produit.date FROM produit_categorie INNER JOIN produit ON produit.id_categorie = produit_categorie.id_categorie ORDER BY date DESC";


$req2 = $db->prepare($sql2);

$req2->execute();

$results2 = $req2->fetchAll(PDO::FETCH_ASSOC);

?>
<section class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="AddStock">

                <form id="form_AddStock" class="cadre-or w-100" action="./requette/insert_produit.php" method="POST">
                    <div class="text-white text-uppercase w-100 px-5 py-3">
                        <h2 class="text-center border-b-or pb-2">Ajouter</h2>
                        <div>
                            <input type="hidden" name="id_user" id="id-user" value="<?= $_SESSION['id_user'] ?>">
                        </div>
                        <div>
                            <label for="categorie">Catégorie :</label><br>
                            <select class="w-100" name="id_categorie" id="Stock_categorie">
                                <option value="">Catégorie</option>
                                <?php foreach ($results1 as $produit) : ?>
                                    <option value="<?= $produit['id_categorie'] ?>"><?= $produit['categorie'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label for="marque">Marque :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="marque" id="Stock_marque">
                        </div>
                        <div>
                            <label for="produit">Produit :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="produit" id="Stock_produit">
                        </div>
                        <div>
                            <label for="nb">nb :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="nb" id="Stock_nb">
                        </div>
                        <div>
                            <label for="unite">Prix uniter :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="unite" id="Stock_unite">
                        </div>
                        <div>
                            <label for="prix">Prix :</label>
                            <input class="bg-gray text-white w-100" type="text" name="prix" id="Stock_prix">
                        </div>
                        <div>
                            <label for="tva">Tva :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="tva" id="Stock_tva">
                        </div>
                        <div>
                            <label for="ttc">ttc :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="ttc" id="Stock_ttc">
                        </div>
                        <div class="text-center">
                            <p class="erreur_AddStock text-black w-100 py-2 m-0">.</p>
                        </div>
                        <div>
                            <input type="hidden" id="date" name="date" value="<?= date('Y/m/d') ?>">
                        </div>
                        <div class="mt-2">
                            <input class="bg-gray butAdd rounded-2 w-100" type="submit" value="Ajouter">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-6">
        <form class="cadre-or d-flex justify-content-between p-2" action="./stock_catégorie.php">
            <select class="butConnect rounded-3" name="id_categorie" id="Stock_categorie">
                <option class="bg-black" value="">Recherche Catégorie</option>
                <?php foreach ($results1 as $produit) : ?>
                    <option class="bg-black" value="<?= $produit['id_categorie'] ?>"><?= $produit['categorie'] ?></option>
                <?php endforeach; ?>
            </select>
            <button class="butConnect rounded-3" type="submit">Recherche</button>
        </form>
            <div class="cadre-or border-bottom-0">
                <h1 class="text-uppercase fs-4 text-center m-0 py-2">Stock</h1>
            </div>
            <table class="cadre-or text-center w-100">
                <thead>
                    <tr class="text-uppercase text-or">
                        <th class="ps-2 py-2" scope="col">id</th>
                        <th class="ps-2 py-2" scope="col">Catégorie</th>
                        <th class="ps-2 py-2" scope="col">Produit</th>
                        <th class="ps-2 py-2" scope="col">nb</th>
                        <th class="ps-2 py-2" scope="col">Prix</th>
                        <th class="ps-2 py-2" scope="col">Ttc</th>
                        <th class="ps-2 py-2" scope="col">date</th>
                        <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi') : ?>
                            <th class="text-capitalize" scope="col"><button class="ButAddStock butAdd my-2">Ajouter</button></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <?php foreach ($results2 as $produit) : ?>
                    <tbody>
                        <tr class="cadre-or">
                            <td data-target="Update_id-produit" class="text-red text-capitalize fw-bold ps-2 py-2 px-0" scope="row"><?= $produit['id_produit'] ?></td>
                            <td data-target="Update_categorie" class="text-muted text-capitalize ps-2 py-2"><?= $produit['categorie'] ?></td>
                            <td data-target="Update_produit" class="text-muted text-capitalize ps-2 py-2"><?= $produit['produit'] ?></td>
                            <td data-target="Update_nb" class="text-muted text-capitalize ps-2 py-2"><?= $produit['nb'] ?></td>
                            <td data-target="Update_prix" class="text-muted text-capitalize ps-2 py-2"><?= $produit['prix'] ?></td>
                            <td data-target="Update_ttc" class="text-muted text-capitalize ps-2 py-2"><?= $produit['ttc'] ?></td>
                            <td data-target="Update_date" class="text-muted text-capitalize ps-2 py-2"><?= $produit['date'] ?></td>
                            <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi') : ?>
                                <td class="text-muted"><button class="ButUpdateStock butUpdate ms-2 my-2">Modifier</button></td>
                                <td class="text-muted">
                                    <form id="form_delete_user" action="./stock.php" method="get">
                                        <input type="hidden" name="id" value="<?= $produit['id_produit'] ?>">
                                        <input type="hidden" name="mod" value="3">
                                        <button class="butDelete ps-2 py-1"type="submit">Supprimer</button>
                                    </form>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
        <div class="col-3">
            <div class="UpdateStock">
                <form id="form_UpdateStock" class="cadre-or w-100" action="./requette/update_produit.php" method="POST">
                    <div class="text-white text-uppercase w-100 px-5 py-3">
                        <h2 class="text-center border-b-or pb-2">Modifier</h2>
                        <div>
                            <input type="hidden" name="id_produit" id="Update_id-produit">
                        </div>
                        <div>
                            <input type="hidden" name="id_user" id="id-user" value="<?= $_SESSION['id_user'] ?>">
                        </div>
                        <div>
                            <label for="categorie">Catégorie :</label><br>
                            <select class="w-100" name="id_categorie" id="Stock_categorie">
                                <option value="">Catégorie</option>
                                <?php foreach ($results1 as $produit) : ?>
                                    <option value="<?= $produit['id_categorie'] ?>"><?= $produit['categorie'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label for="marque">Marque :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="marque" id="Update_marque">
                        </div>
                        <div>
                            <label for="produit">Produit :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="produit" id="Update_produit" placeholder="Change Produit">
                        </div>
                        <div>
                            <label for="nb">nb :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="nb" id="Update_nb" placeholder="Change NB">
                        </div>
                        <div>
                            <label for="unite">Prix uniter :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="unite" id="Update_unite" placeholder="Change unite">
                        </div>
                        <div>
                            <label for="prix">Prix :</label>
                            <input class="bg-gray text-white w-100" type="text" name="prix" id="Update_prix" placeholder="Change Prix">
                        </div>
                        <div>
                            <label for="tva">Tva :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="tva" id="Update_tva" placeholder="Change TVA">
                        </div>
                        <div>
                            <label for="ttc">ttc :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="ttc" id="Update_ttc" placeholder="Change TTC">
                        </div>
                        <div>
                            <input type="hidden" id="Update_date" name="date" value="<?= date('Y/m/d') ?>">
                        </div>
                        <div class="text-center">
                            <p class="erreur_UpdateStock text-black w-100 py-2 m-0">.</p>
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