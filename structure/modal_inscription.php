<div id="mod2" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
    <div class="mod js-stop w-50 m-auto px-5">
        <form class="cadre-or" action="./requette/insert_user.php" enctype="multipart/form-data" method="POST">
            <button class="js-modal-close butDeleteModal m-2">x</button>
            <div class="border border-dark px-5 py-3">
                <h2 class="text-center">inscription</h2>
                <div>
                    <label for="name">Non :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="name" id="name">
                </div>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="user">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input class="bg-gray text-white w-100" type="text" id="tel" name="tel">
                </div>
                <div>
                    <label for="email">Mail :</label>
                    <input class="bg-gray text-white w-100" type="email" id="email" name="email">
                </div>
                <div>
                    <label for="email">Comfirmer :</label>
                    <input class="bg-gray text-white w-100" type="email">
                </div>
                <div>
                    <label for="mdp">Mots de passe :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="mdp" id="mdp">
                </div>
                <div>
                    <label for="mdp">Comfirmer :</label><br>
                    <input class="bg-gray text-white w-100" type="text">
                </div>
                <div>
                    <input class="my-2" type="file" name="img" id="img">
                </div>
                <div>
                    <input type="hidden" name="admi" id="admi">
                </div>
                <div>
                    <input class="butAdd rounded-2 w-100" type="submit" value="Inscription">
                </div>
            </div>
        </form>
    </div>
</div>