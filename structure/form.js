


function openAddLogin() {
    
    $('.ButAddLogin').on('click', () => {
        
        $('.AddLogin').toggle();
        $('.AddLogin').html(`  
        
        <form class="cadre-or w-100" action="./requette/insert_user.php" enctype="multipart/form-data" method="POST">
            <div class="text-white text-uppercase w-100 px-5 py-3">
                <h2 class="text-center border-b-or pb-2">Inscription</h2>
                <div>
                    <label for="name">Non :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="name" id="name" placeholder="Enter name">
                </div>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="user" placeholder="Enter user">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input class="bg-gray text-white w-100" type="text" id="tel" name="tel" placeholder="Enter tel">
                </div>
                <div>
                    <label for="email">Mail :</label>
                    <input class="bg-gray text-white w-100" type="email" id="email" name="email" placeholder="Enter email">
                </div>
                <div>
                    <label for="email">Comfirmer :</label>
                    <input class="bg-gray text-white w-100" type="email" placeholder="confirm email">
                </div>
                <div>
                    <label for="mdp">Mots de passe :</label><br>
                    <input class="bg-gray text-white w-100" type="text" id="mdp" name="mdp" placeholder="Enter password">
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
                    <input class="bg-gray butAdd rounded-2 w-100" type="submit" value="Inscription">
                </div>
            </div>
        </form>`)
    });
}

openAddLogin();

function openUpadateLogin() {

    $('.ButUpdateLogin').on('click', () => {
        
        
        $('.UpdateLogin').toggle()

    });
}

openUpadateLogin()