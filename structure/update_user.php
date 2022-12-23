<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql2 = "SELECT * FROM user WHERE id_user = $id";

    $req2 = $db->prepare($sql2);

    $req2->execute();

    $up_user = $req2->fetch(PDO::FETCH_ASSOC);
}
?>
<form class="cadre-or w-100" action="./requette/update_user.php?id=<?= $id ?>" enctype="multipart/form-data" method="POST">
    <div class="text-white text-uppercase w-100 px-5 py-3">
        <h2 class="text-center border-b-or pb-2">Modifier</h2>
        <div>
            <label for="name">Non :</label><br>
            <input class="bg-gray text-white w-100" type="text" name="name" id="name" value="<?= $up_user['name']; ?>">
        </div>
        <div>
            <label for="user">User :</label><br>
            <input class="bg-gray text-white w-100" type="text" name="user" id="user" value="<?= $up_user['user']; ?>">
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input class="bg-gray text-white w-100" type="text" id="tel" name="tel" value="<?= $up_user['tel']; ?>">
        </div>
        <div>
            <label for="email">Mail :</label>
            <input class="bg-gray text-white w-100" type="email" id="email" name="email" value="<?= $up_user['email']; ?>">
        </div>
        <div>
            <label for="email">Comfirmer :</label>
            <input class="bg-gray text-white w-100" type="email">
        </div>
        <div>
            <label for="mdp">Mots de passe :</label><br>
            <input class="bg-gray text-white w-100" type="text" name="mdp" id="mdp" value="">
        </div>
        <div>
            <label for="mdp">Comfirmer :</label><br>
            <input class="bg-gray text-white w-100" type="text">
        </div>
        <div>
            <input class="my-2" type="file" name="img" id="img">
        </div>
        <div>
            <label for="admi">Administrateur:</label><br>
            <input class="w-25" type="checkbox" name="admi" id="admi" value="admi">
        </div>
        <div>
            <input class="bg-gray butUpdate rounded-2 w-100" type="submit" value="Modifier">
        </div>
    </div>
</form>