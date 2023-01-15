<?php 
require_once "./config.php";

var_dump($_POST);



if (isset($_POST['id-user']) && isset($_POST['name']) && isset($_POST['user']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['mdp']) 
&& !empty($_POST['id-user']) && !empty($_POST['name']) && !empty($_POST['user']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
        echo 'test1';
    $id = $_POST['id-user'];
    $name = $_POST['name']; 
    $user = $_POST['user']; 
    $tel = $_POST['tel']; 
    $email = $_POST['email']; 
    $mdp = $_POST['mdp'];
    $status = "";

    
    $sql = "UPDATE user SET img_user = :img, name = :name , user = :user, tel = :tel, email = :email, mdp = :mdp, status = :status WHERE id_user = :id";

    $req = $db->prepare($sql);

    $req->execute([
        ':img' => $img,
        ':name' => $name,
        ':user' => $user,
        ':tel' => $tel,
        ':email' => $email,
        ':mdp' => $hash,
        ':status' => $status,
        ':id' => $id
        ]);

    if ($req) {
        echo 'requette envoyer';
        // header("location: ../compte.php");
    }
    else {
        // header("location: ../compte.php?erreur= 0");
        echo "erreur d'envoie";
    }
}


?>