<?php $title = "COMPTE"; ?>
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
            <div class="AddLogin">

            </div>
        </div>
        <div class="col-6">
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
                        <th class="text-or p-3" scope="col">Status</th>
                        <th class="text-capitalize p-3" scope="col"><button class="ButAddLogin butAdd px-2 py-1">inscription</button></th>
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
                            <td class="text-muted text-uppercase py-3 px-0"><?= $user['status']; ?></td>
                            <td class="text-muted py-3 px-2"><button class="ButUpdateLogin butUpdate px-2 py-1">Modifier</button></td>
                            <td class="text-muted py-3 px-2"><a class="butDelete px-2 py-1" href="./requette/delete_user.php?id=<?= $user['id_user']; ?>">Supprimer</a></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
        <div class="col-3">
            <div class="UpdateLogin">
            <form class="cadre-or w-100" action="./requette/update_user.php" enctype="multipart/form-data" method="POST">
            <div class="text-white text-uppercase w-100 px-5 py-3">
                <h2 class="text-center border-b-or pb-2">Modifier</h2>
                <div>
                    <label for="name"><span class="text-red">ID</span> User :</label><br>
                    <input class="bg-gray text-red w-100" type="text" name="id-user" id="id-user" placeholder="Enter ID user" value="<?= $user['id_user'] ?>">
                </div>
                <div>
                    <label for="name">Non :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="name" id="name" placeholder="Change name">
                </div>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="user" placeholder="Change user">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input class="bg-gray text-white w-100" type="text" id="tel" name="tel" placeholder="Change tel">
                </div>
                <div>
                    <label for="email">Mail :</label>
                    <input class="bg-gray text-white w-100" type="email" id="email" name="email" placeholder="Change email">
                </div>
                <div>
                    <label for="email">Comfirmer :</label>
                    <input class="bg-gray text-white w-100" type="email" placeholder="confirm email">
                </div>
                <div>
                    <label for="mdp">Mots de passe :</label><br>
                    <input class="bg-gray text-white w-100" type="text" id="mdp" name="mdp" placeholder="Change password">
                </div>
                <div>
                    <label for="mdp">Comfirmer :</label><br>
                    <input class="bg-gray text-white w-100" type="text" placeholder="confirm password">
                </div>
                <div>
                    <input class="my-2" type="file" name="img" id="img">
                </div>
                <div>
                    <label for="admi">Administrateur:</label><br>
                    <input class="w-25" type="checkbox" name="admi" id="admi" value="admi">
                </div>
                <div>
                    <input class="bg-gray butAdd rounded-2 w-100" type="submit" value="Modifier">
                </div>
            </div>
        </form>

            </div>
        </div>
    </div>
</section>






<?php require_once "./structure/footer.php"; ?>