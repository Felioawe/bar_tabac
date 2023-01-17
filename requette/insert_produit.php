<?php
require_once "../requette/config.php";
var_dump($_POST);

if (isset($_POST['id_categorie']) && isset($_POST['id_user']) && isset($_POST['marque']) && isset($_POST['produit']) && isset($_POST['nb']) && isset($_POST['prix']) && isset($_POST['unite'])  && isset($_POST['tva']) && isset($_POST['ttc'])
&& !empty($_POST['id_categorie']) && !empty($_POST['id_user']) && !empty($_POST['marque']) && !empty($_POST['produit']) && !empty($_POST['nb']) && !empty($_POST['prix']) && !empty($_POST['unite']) && !empty($_POST['tva']) && !empty($_POST['ttc'])) {
    
    echo'envoi';
    $id_categorie = $_POST['id_categorie'];
    $id_user = $_POST['id_user'];
    $marque = $_POST['marque'];
    $produit = $_POST['produit'];
    $nb = $_POST['nb'];
    $unite = $_POST['unite'];
    $prix = $_POST['prix'];
    $tva = $_POST['tva'];
    $ttc = $_POST['ttc'];
    $date = $_POST['date'];

    

    $sql = "INSERT INTO produit (id_categorie, id_user, marque, produit, nb, unite, prix, tva, ttc, date ) VALUES (:id_categorie, :id_user, :marque, :produit, :nb, :unite, :prix, :tva, :ttc, :date)";



    $req = $db->prepare($sql);
    
    $req->execute([
        
        ':id_categorie' => $id_categorie,
        ':id_user' => $id_user,
        ':marque' => $marque,
        ':produit' => $produit,
        ':nb' => $nb,
        ':unite' => $unite,
        ':prix' => $prix,
        ':tva' => $tva,
        ':ttc' => $ttc,
        ':date' => $date
    ]);

    

    if ($req) {
        header("location: ../stock.php?mod=2&success=2");
        echo'envoi';
    }
    else {
        echo"erreur d'envoi";
        header("location: ../stock.php?mod=2&erreur=2");
    }

}


?>