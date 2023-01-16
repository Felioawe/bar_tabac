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
                        <th class="text-red ps-2 py-2" scope="col">id</th>
                        <th class="text-or ps-2 py-2" scope="col">Nom</th>
                        <th class="text-or ps-2 py-2" scope="col">user</th>
                        <th class="text-or ps-2 py-2" scope="col">telephone</th>
                        <th class="text-or ps-2 py-2" scope="col">email</th>
                        <th class="text-or ps-2 py-2" scope="col">Status</th>
                        <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi' ) : ?>
                            <th class="text-capitalize ps-2" scope="col"><button class="ButAddLogin butAdd my-2">inscription</button></th>    
                        <?php endif; ?>
                    </tr>
                </thead>
                <?php foreach ($results as $user) : ?>
                    <tbody>
                        <tr>
                            <td data-target="id-user" class="fw-bold text-red text-capitalize ps-2"><?= $user['id_user']; ?></td>
                            <td data-target="Update_name" class="text-muted text-capitalize ps-2 py-2"><?= $user['name']; ?></td>
                            <td data-target="Update_user" class="text-muted text-capitalize ps-2 py-2"><?= $user['user']; ?></td>
                            <td data-target="Update_tel" class="text-muted text-capitalize ps-2 py-2"><?= $user['tel']; ?></td>
                            <td data-target="Update_email" class="text-muted text-capitalize ps-2 py-2"><?= $user['email']; ?></td>
                            <td class="text-muted text-uppercase pe-2 py-2"><?= $user['status']; ?></td>
                            <?php if ($_SESSION['connect'] == 1 && $_SESSION['status'] == 'admi' ) : ?>
                                <td class="text-muted"><button class="ButUpdateLogin butUpdate ps-2 my-2 text-capitalize">Modifier</button></td>
                                <td class="text-muted"><a class="butDelete ps-2 py-1" href="./requette/delete_user.php?id=<?= $user['id_user']; ?>">Supprimer</a></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                <?php endforeach; ?>

            </table>
        </div>
        <div class="col-3">
            <div class="UpdateLogin">
                <form id="form_UpdateLogin" class="cadre-or w-100" action="./requette/update_user.php" enctype="multipart/form-data" method="POST">
                    <div class="text-white text-uppercase w-100 px-5 py-3">
                        <h2 class="text-center border-b-or pb-2">Modifier</h2>
                        <div>
                            <input type="hidden" name="id-user" id="id-user">
                        </div>
                        <div>
                            <label for="name">Non :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="name" id="Update_name" placeholder="Change name">
                        </div>
                        <div>
                            <label for="user">User :</label><br>
                            <input class="bg-gray text-white w-100" type="text" name="user" id="Update_user" placeholder="Change user">
                        </div>
                        <div>
                            <label for="tel">Téléphone :</label>
                            <input class="bg-gray text-white w-100" type="text" id="Update_tel" name="tel" placeholder="Change tel">
                        </div>
                        <div>
                            <label for="email">Mail :</label>
                            <input class="bg-gray text-white w-100" type="email" id="Update_email" name="email" placeholder="Change email">
                        </div>
                        <div>
                            <label for="email">Comfirmer :</label>
                            <input class="bg-gray text-white w-100" type="email" placeholder="confirm email">
                        </div>
                        <div>
                            <label for="mdp">Mots de passe :</label><br>
                            <input class="bg-gray text-white w-100" type="text" id="Update_mdp" name="mdp" placeholder="Change password">
                        </div>
                        <div>
                            <label for="mdp">Comfirmer :</label><br>
                            <input class="bg-gray text-white w-100" type="text" placeholder="confirm password">
                        </div>
                        <div class="text-center">
                            <p class="erreur_UpdateLogin text-black w-100 py-2 m-0">.</p>
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