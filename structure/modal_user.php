<div id="mod1" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
    <div class="mod js-stop w-50 m-auto p-5">
        <button class="js-modal-close px-2">x</button>
        <form class="bg-white" action="./requette/select_user.php" method="POST">
            <div class="border border-dark p-5">
                <h2 class="text-center">connection</h2>
                <div>
                    <label for="user">User :</label><br>
                    <input class="w-100" type="text" name="user" id="user">
                </div>
                <div>
                    <label for="mdp">Password</label><br>
                    <input class="w-100" type="text" name="mdp" id="mdp">
                </div>
                <div class="mt-5">
                    <input class="w-100" type="submit" value="Connect">
                </div>
                <div class="text-center">
                    <a class="js-modal" href="#mod2">Inscription</a>
                </div>
            </div>
        </form>
    </div>
</div>