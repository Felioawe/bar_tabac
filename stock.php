<?php $title = "STOCK"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 AddStock UpdateStock">

        </div>
        <div class="col-9 mx-auto">
            <div class="cadre-or border-bottom-0">
                <h1 class="text-uppercase fs-4 text-center m-0 py-2">Stock</h1>
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

<?php require_once "./structure/footer.php"; ?>