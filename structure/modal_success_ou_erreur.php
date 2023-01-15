<div id="mod2" class="overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="title-mod" style="display: none;">
  <div class="mod js-stop w-25 m-auto">
    <form class="cadre-or" action="./requette/select_user.php" method="POST">
      <button class="js-modal-close butDeleteModal m-2">X</button>
      <div class="text-center text-uppercase pb-5">
        <?php if (isset($_GET['erreur']) && !empty($_GET['erreur'])) : ?>
          <?php $erreur = $_GET['erreur']; ?>

          <?php if ($erreur == "1") : ?>
            <p class="text-red w-100 m-0 p-0">Ajouter en echec</p>
          <?php elseif ($erreur == "2") : ?>
            <p class="text-red w-100 m-0 p-0">Modifier en echec</p>
          <?php elseif ($erreur == "3") : ?>
            <p class="text-red w-100 m-0 p-0">Erreur de Suppréssion</p>
          <?php endif; ?>
        <?php elseif (isset($_GET['success']) && !empty($_GET['success'])) : ?>
          <?php $success = $_GET['success']; ?>

          <?php if ($success == "1") : ?>
            <p class="text-green w-100 m-0 p-0">Connexion réussie</p>
          <?php elseif ($success == "2") : ?>
            <p class="text-green w-100 m-0 p-0">Ajouter avec success</p>
          <?php elseif ($success == "3") : ?>
            <p class="text-green w-100 m-0 p-0">Modifier avec success</p>
          <?php elseif ($success == "4") : ?>
            <p class="text-green w-100 m-0 p-0">Supprimer avec success</p>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </form>
  </div>
</div>