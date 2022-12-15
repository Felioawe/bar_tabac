<?php $title = "STOCK"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>
<?php



?>

<div class="w-80 m-auto">
    <table class="bg-gray border-white text-center text-white text-uppercase w-100">
        <thead>
            <tr class="border-white text-red">
                <th class="p-3" scope="col">id</th>
                <th class="p-3" scope="col">Produits</th>
                <th class="p-3" scope="col">nb</th>
                <th class="p-3" scope="col">Prix u</th>
                <th class="p-3" scope="col">Prix</th>
                <th class="p-3" scope="col">Tva</th>
                <th class="p-3" scope="col">Tcc</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-white">
                <th class="text-primary p-3" scope="row"><?= '...' ?></th>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-0"><?= '...' ?></td>
                <td class="py-3 px-2"><a class="text-decoration-none text-white border-white radius-11 px-2 py-1" href="./modifier_inscription.php?id=<?= '...' ?>">Modifier</a></td>
                <td class="py-3 px-2"><a class="text-decoration-none text-white border-white radius-11 px-2 py-1" href="./requette/delete2.php?id=<?= '...' ?>">Supprimer</a></td>
            </tr>
        </tbody>
    </table>
</div>




<?php require_once "./structure/footer.php"; ?>