<?php $title = "CONTACT";?>
<?php require_once "./structure/header.php";?>
<?php require_once "./requette/config.php";?>



<section class="section-2 la-carte w-75 m-auto my-5 p-5">
    <div class="bg-black text-white text-center pb-5">
        <img class="logo" src="./assets/logo_bar_tabc_2.png" alt="logo_loup">
    </div>
    <div class="row text-white g-0">
        <div class="col-4 bg-or px-5 py-2">
            <div class="row">
                <div>
                    <h5>Coordonnées :</h5>
                    <p>Tel: 06 XX XX XX XX</p>
                    <p>Mail: .....@.....com</p>
                </div>
                <div>
                    <h5>Adresse : </h5>
                    <p>......................<br>......................</p>
                </div>
                <div>
                    <h5>Notre équipe</h5>
                    <p>......................<br>......................</p>
                </div>
                <div>
                    <div>
                        <img class="photo2-contact" src="./assets/profil1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 px-5">
            <form action="" method="$_POST">
                <div class="row">
                    <div class="col-7 position-relative">
                        <input class=" w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25 border-0" type="text" id="name" name="user_name" placeholder="Votre nom">
                    </div>
                    <div class="col-5 position-relative">
                        <input class="w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25 border-0" type="text" id="first_name" name="first_name" placeholder="Votre prénom">

                    </div>
                </div>
                <div class="row">
                    <div class="col-5 position-relative">
                        <input class="w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25 border-0" type="text" id="telephone" name="user_telephone" placeholder="Votre telephone">

                    </div>
                    <div class="col-7 position-relative">
                        <input class="w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25 border-0" type="email" id="email" name="user_email" placeholder="Votre email">
                    </div>
                    <div class="col-12 position-relative">
                        <input class="w-100 mb-3 p-1 bg-secondary p-2 text-white bg-opacity-25 border-0" type="text" id="sujet" name="user_sujet" placeholder="Sujet">
                    </div>
                    <div class="col-12 position-relative">
                        <textarea class="w-100 mb-4 p-1 bg-secondary p-2 text-white bg-opacity-25 border-0" id="msg" name="user_message" rows="10" placeholder="Votre message" style="resize: none;"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" class="contact-but text-uppercase py-1 px-3">envoyer</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once "./structure/footer.php";?>