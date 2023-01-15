<?php
require_once "../requette/config.php";
var_dump($_POST);

if (isset($_POST['mes']) && isset($_POST['date'])
&& !empty($_POST['mes']) && !empty($_POST['date'])) {
    echo'envoi';

    $titre = $_POST['titre'];
    $mes =  $_POST['mes'];
    $date = $_POST['date'];
    $id_user = $_POST['id_user'];
    

    $sql = "INSERT INTO blog (titre, img, id_user, mes, date ) VALUES (:titre, :img, :id_user, :mes, :date)";

    $req = $db->prepare($sql);
    
    $req->execute([
        ':titre' => $titre,
        ':mes' => $mes,
        ':id_user' => $id_user,
        ':date' => $date,
        ':img'=> $img
    ]);
    if ($req) {
        // header("location: ../evenement.php");
        echo'envoi';
    }
    else {
        echo"erreur d'envoi";
    }

}

?>