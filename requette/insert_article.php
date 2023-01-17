<?php
require_once "../requette/config.php";
var_dump($_POST);
var_dump($_FILES);


if (isset($_POST['titre']) && isset($_POST['mes'])
&& !empty($_POST['titre']) && !empty($_POST['mes'])) {
    echo'envoi';

    $titre = $_POST['titre'];
    $mes =  $_POST['mes'];
    $date = $_POST['date'];
    $id_user = $_POST['id_user'];
    
    $img = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];
    $size = $_FILES['img']['size'];

    move_uploaded_file($tmp_name, "../upload/".$img);

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
        header("location: ../evenement.php?mod=2&success=2");
        echo'envoi';
    }
    else {
        echo"erreur d'envoi";
        header("location: ../evenement.php?mod=2&erreur=2");
    }

}

?>