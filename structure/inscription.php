<form class="bg-gray border-white w-100" action="./requette/insert_user.php" enctype="multipart/form-data" method="POST">
    <div class="bg-gray text-white text-uppercase w-100 px-5 py-3">
        <h2 class="text-center">Inscription</h2>
        <div>
            <label for="name">Non :</label><br>
            <input class="w-100" type="text" name="name" id="name" >
        </div>
        <div>
            <label for="user">User :</label><br>
            <input class="w-100" type="text" name="user" id="user" >
        </div>
        <div>
            <label for="tel">Téléphone :</label>
            <input class="w-100" type="text" id="tel" name="tel">
        </div>
        <div>
            <label for="email">Mail :</label>
            <input class="w-100" type="email" id="email" name="email">
        </div>
        <div>
            <label for="email">Comfirmer :</label>
            <input class="w-100" type="email">
        </div>
        <div>
            <label for="mdp">Mots de passe :</label><br>
            <input class="w-100" type="text" name="mdp" id="mdp">
        </div>
        <div>
            <label for="mdp">Comfirmer :</label><br>
            <input class="w-100" type="text">
        </div>
        <div>
            <input class="my-2" type="file" name="img" id="img">
        </div>
        <div>
            <label for="admi">Administrateur:</label><br>
            <input class="w-25" type="checkbox" name="admi" id="admi" value="admi">
        </div>
        <div>
            <input class="w-100" type="submit" value="Inscription">
        </div>
    </div>
</form>