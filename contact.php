<?php $title = "CONTACT"; ?>
<?php require_once "./structure/header.php"; ?>
<?php require_once "./requette/config.php"; ?>



<section class="la-carte w-75 m-auto my-5 p-5">
    <div class="bg-black text-white text-center pb-5">
        <img class="logo" src="./assets/logo_le_bistrot.png" alt="logo_loup">
    </div>
    <div class="container-fluid g-0">
        <div class="row g-0 text-white g-0">
            <div class="col-12 col-lg-4 bg-or px-5 mt-5 py-2">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-12">
                        <h5>Coordonnées :</h5>
                        <p>Tel: 06 XX XX XX XX</p>
                        <p>Mail: .....@.....com</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-12">
                        <h5>Adresse : </h5>
                        <p>......................<br>......................</p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-12">
                        <h5>Notre équipe</h5>
                        <p>......................<br>......................</p>
                    </div>
                    <div class="col-12">
                        <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1327.4966035871378!2d5.1674216723691035!3d43.475409979932266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3bf54a86c779214!2sBar%20Tabac%20PMU%20Le%20Bistrot!5e0!3m2!1sfr!2sfr!4v1664117008575!5m2!1sfr!2sfr" width="100%" height="200" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 px-3 mt-5">
                <form id="#form_contact" action="./requette/insert_contact.php" method="post">
                    <div class="row">
                        <div class="col-12 col-sm-7 position-relative">
                            <input class="input-contact w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25" type="text" id="name" name="name" placeholder="Votre nom">
                        </div>
                        <div class="col-12 col-sm-5 position-relative">
                            <input class="input-contact w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25" type="text" id="first_name" name="first_name" placeholder="Votre prénom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-5 position-relative">
                            <input class="input-contact w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25" type="text" id="tel" name="tel" placeholder="Votre telephone">

                        </div>
                        <div class="col-12 col-sm-7 position-relative">
                            <input class="input-contact w-100 mb-3 bg-secondary p-2 text-white bg-opacity-25" type="email" id="email" name="email" placeholder="Votre email">
                        </div>
                        <div class="col-12 position-relative">
                            <input class="input-contact w-100 mb-3 p-1 bg-secondary p-2 text-white bg-opacity-25" type="text" id="sujet" name="sujet" placeholder="Sujet">
                        </div>
                        <div class="col-12 position-relative">
                            <textarea class="input-contact w-100 mb-4 p-1 bg-secondary p-2 text-white bg-opacity-25" id="msg" name="msg" rows="10" placeholder="Votre message" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" id="date" name="date" value="<?= date('Y/m/d');?>">
                    </div>
                    <div class="icon2 position-relative py-5">
                    
                    </div>
                    <div>
                        <input type="submit" class="input-contact contact-but text-uppercase py-1 place px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once "./structure/footer.php"; ?>