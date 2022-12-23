<?php $title = "STOCK"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 AddStock UpdateStock">

        </div>
        <div class="col-9 mx-auto">
            <div class="cadre-or border-bottom-0">
                <p class="text-uppercase fw-bold fs-4 text-center m-0 py-2">Stock</p>
            </div>
            <table class="cadre-or text-center w-100">
                <thead>
                    <tr class="text-uppercase text-or">
                        <th class="p-3" scope="col">id</th>
                        <th class="p-3" scope="col">Produits</th>
                        <th class="p-3" scope="col">nb</th>
                        <th class="p-3" scope="col">Prix u</th>
                        <th class="p-3" scope="col">Prix</th>
                        <th class="p-3" scope="col">Tva</th>
                        <th class="p-3" scope="col">Tcc</th>
                        <th class="text-capitalize p-3" scope="col"><button class="ButAddStock butAdd px-2 py-1">Ajouter</button></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="cadre-or">
                        <th class="text-red p-3" scope="row"><?= '...' ?></th>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-0"><?= '...' ?></td>
                        <td class="text-muted py-3 px-2"><button class="ButUpdateStock butUpdate px-2 py-1">Modifier</button></td>
                        <td class="text-muted py-3 px-2"><a class="butDelete px-2 py-1" href="#">Supprimer</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once "./structure/footer.php"; ?>