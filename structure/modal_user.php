<div id="mod1" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
    <div class="mod js-stop w-50 m-auto p-5">
        <form class="cadre-or" action="./requette/select_user.php" method="POST">
            <button class="js-modal-close butDeleteModal m-2">X</button>
            <div class="border border-dark p-5">
                <h2 class="text-center">connexion</h2>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="user">
                </div>
                <div>
                    <label for="mdp">Password</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="mdp" id="mdp">
                </div>
                <?php if (isset($_GET['erreur']) && !empty($_GET['erreur'])) : ?>
                    <?php if ($_GET['erreur'] == 1) : ?>
                        <div class="text-center mt-3">
                            <p class="text-red text-uppercase w-100">User ou Password inccorecte</p>
                        </div>
                    <?php elseif ($_GET['erreur'] == 2) : ?>
                        <div class="text-center mt-3">
                            <p class="text-red text-uppercase w-100">Remplissez tous les champs</p>
                        </div>
                    <?php endif ; ?>
                <?php endif ; ?>
                <div class="mt-5 text-center">
                    <input class="butConnect rounded-2 w-25" type="submit" value="Connect">
                </div>
            </div>
        </form>
    </div>
</div>