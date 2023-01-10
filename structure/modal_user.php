<div id="mod1" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
    <div class="mod js-stop w-50 m-auto p-5">
        <form class="cadre-or" action="./requette/select_user.php" method="POST">
            <button class="js-modal-close butDeleteModal m-2">X</button>
            <div class="border border-dark p-5">
                <h2 class="text-center">connection</h2>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="user">
                </div>
                <div>
                    <label for="mdp">Password</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="mdp" id="mdp">
                </div>
                <div class="mt-5 text-center">
                    <input class=" butConnect rounded-2 w-25" type="submit" value="Connect">
                </div>
            </div>
        </form>
    </div>
</div>