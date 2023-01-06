<?php $title = "COMPTE"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>
<?php


$sql = "SELECT * FROM user";

$req = $db->prepare($sql);

$req->execute();

$results = $req->fetchAll(PDO::FETCH_ASSOC);

$id = "";
$col1 = "d-none";
$col2 = "col-12";
$col3 = "d-none";
$w_80_m_auto = "w-80 m-auto";

if (isset($_GET["insription"]) && !empty($_GET["insription"])) {
    $col3 = "col-lg-4";
    $col2 = "col-lg-8";
    $w_80_m_auto = "";
}

if (isset($_GET["id"]) && !empty($_GET["id"])) {
   $col1 = "col-lg-4";
   $col2 = "col-lg-8";
   $w_80_m_auto = "";
}
?>
<section class="container-compte row <?= $w_80_m_auto ?>">
    <div class="<?= $col1 ?>">
        <?php require_once "./structure/update_user.php"; ?>
    </div>
    <div class="<?= $col3 ?>">
        <?php require_once "./structure/inscription.php"; ?>
    </div>
    <div class="<?= $col2 ?>">
    <div class="cadre-or border-bottom-0">
        <h1 class="text-uppercase fs-4 text-center m-0 py-2">Compte</h1>
    </div>
        <table class="cadre-or text-center w-100">
            <thead class="cadre-or">
                <tr class="bg-muted text-uppercase">
                    <th class="text-or p-3" scope="col">id</th>
                    <th class="text-or p-3" scope="col">Nom</th>
                    <th class="text-or p-3" scope="col">user</th>
                    <th class="text-or p-3" scope="col">telephone</th>
                    <th class="text-or p-3" scope="col">email</th>
                    <th class="text-or p-3" scope="col">mdp</th>
                    <th class="text-or p-3" scope="col">Status</th>
                    <th class="text-capitalize p-3" scope="col"><a class="butAdd px-2 py-1" href="./compte.php?insription=1">inscription</a></th>
                </tr>
            </thead>
            <?php foreach ($results as $user) : ?>
                <tbody>
                    <tr>
                        <td class="fw-bold text-red py-3 px-0"><?= $user['id_user']; ?></td>
                        <td class="text-muted py-3 px-0"><?= $user['name']; ?></td>
                        <td class="text-muted py-3 px-0"><?= $user['user']; ?></td>
                        <td class="text-muted py-3 px-0"><?= $user['tel']; ?></td>
                        <td class="text-muted py-3 px-0"><?= $user['email']; ?></td>
                        <td class="text-muted py-3 px-0"><?= /* $user['mdp']*/ '...' ?></td> 
                        <td class="text-muted text-uppercase py-3 px-0"><?= $user['status']; ?></td>
                        <td class="text-muted py-3 px-2"><a class="butUpdate px-2 py-1" href="./compte.php?id=<?= $user['id_user']; ?>">Modifier</a></td>
                        <td class="text-muted py-3 px-2"><a class="butDelete px-2 py-1" href="./requette/delete_user.php?id=<?= $user['id_user']; ?>">Supprimer</a></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</section>






<?php require_once "./structure/footer.php"; ?>