console.log('test');
$(".butUpdate").each(function () {
    $(this).on("click", function () {
        var tdValues = $(this).closest("tr").find("td");       
        tdValues.each(function () {
            let targetId = $(this).data("target");
            console.log(targetId);
             $("input#" + targetId).val($(this).html());
        })
    })
});


function openAddLogin() {
    
    $('.ButAddLogin').on('click', () => {
        
        $('.AddLogin').toggle();
        $('.AddLogin').html(`  
        
        <form id="form_AddLogin" class="cadre-or w-100" action="./requette/insert_user.php" enctype="multipart/form-data" method="POST">
            <div class="text-white text-uppercase w-100 px-5 py-3">
                <h2 class="text-center border-b-or pb-2">Inscription</h2>
                <div>
                    <label for="name">Non :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="name" id="Login_name" placeholder="Enter name">
                </div>
                <div>
                    <label for="user">User :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="user" id="Login_user" placeholder="Enter user">
                </div>
                <div>
                    <label for="tel">Téléphone :</label>
                    <input class="bg-gray text-white w-100" type="text" name="tel" id="Login_tel" placeholder="Enter tel">
                </div>
                <div>
                    <label for="email">Mail :</label>
                    <input class="bg-gray text-white w-100" type="email" name="email" id="Login_email" placeholder="Enter email">
                </div>
                <div>
                    <label for="email">Comfirmer :</label>
                    <input class="bg-gray text-white w-100" type="email" placeholder="Confirm email">
                </div>
                <div>
                    <label for="mdp">Password :</label><br>
                    <input class="bg-gray text-white w-100" type="text" name="mdp" id="Login_mdp" placeholder="Enter password">
                </div>
                <div>
                    <label for="mdp">Comfirmer :</label><br>
                    <input class="bg-gray text-white w-100" type="text" placeholder="Confirm password">
                </div>
                <div class="text-center">
                    <p class="erreur_AddLogin text-black w-100 py-2 m-0">.</p>
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
        </form>`);

        $('#form_AddLogin').on('submit', function(e) {
            e.preventDefault();
            var name = $('#Login_name').val();
            var user = $('#Login_user').val();
            var tel = $('#Login_tel').val();
            var email = $('#Login_email').val();
            var mdp = $('#Login_mdp').val();
    
            if (name === '' || user === '' || tel === '' || email === '' || mdp === '') {
                // alert('Veuillez remplir tous les champs');
                $('.erreur_AddLogin').html(`
    
                    <p class="text-red w-100 m-0">Remplissez tous les champs</p>
                
                `);
            } else {
                $(this).unbind('submit').submit();
            }
        });

        const searchParams = new URLSearchParams(window.location.search);
        const paramValue = searchParams.get("erreur");
    
        if (paramValue == 1) {
            $(".erreur_AddLogin").html(`
            
                <p class="text-red w-100 m-0">user est disponible</p>
            
            `);
        }
    });   
    
    
}

openAddLogin();







function openUpadateLogin() {

    $('.ButUpdateLogin').on('click', () => {
        
        $('.UpdateLogin').toggle()
        
        $('#form_UpdateLogin').on('submit', function(e) {
            e.preventDefault();
            var name = $('#Update_name').val();
            var user = $('#Update_user').val();
            var tel = $('#Update_tel').val();
            var email = $('#Update_email').val();
            var mdp = $('#Update_mdp').val();
    
            if (name === '' || user === '' || tel === '' || email === '' || mdp === '') {
                // alert('Veuillez remplir tous les champs');
                $('.erreur_UpdateLogin').html(`
    
                    <p class="text-red w-100 m-0">Remplissez tous les champs</p>
                
                `);
            } else {
                $(this).unbind('submit').submit();
            }
        });

        const searchParams = new URLSearchParams(window.location.search);
        const paramValue = searchParams.get("erreur");
    
        if (paramValue == 1) {
            $(".erreur_AddLogin").html(`
            
                <p class="text-red w-100 m-0">user est disponible</p>
            
            `);
        }
    });
}

openUpadateLogin();

function openAddStock() {
    
    $('.ButAddStock').on('click', () => {
        
        $('.AddStock').toggle();
        
    });
}

openAddStock();

function openUpadateStok() {

    $('.ButUpdateStock').on('click', () => {
        
        $('.UpdateStock').toggle()

    });
}

openUpadateStok();

