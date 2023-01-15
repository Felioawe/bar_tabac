<?php
require_once "./config.php";

var_dump($_POST);

if (isset($_POST['user']) && isset($_POST['mdp'])
&& !empty($_POST['user']) && !empty($_POST['mdp'])) {

    $user = $_POST['user'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM user WHERE user = :user";

    $req = $db->prepare($sql);

    $req->execute([':user' => $user]);

    $count_user = $req->rowCount();

    $result = $req->fetch(PDO::FETCH_ASSOC);

    if ($count_user > 0 ) {
        if (password_verify($mdp, $result['mdp'])){
            session_start();
            $_SESSION['id_user'] = $result['id_user'];
            $_SESSION['img_user'] = $result['img_user'];
            $_SESSION['user'] = $result['user'];
            $_SESSION['status'] = $result['status'];
            $_SESSION['connect'] = 1;

            header('location: ../index.php?mod=2&success=1');
        }
        
        else {
            header('location: ../index.php?mod=1&erreur=1');
        }
    }
    else {
        header('location: ../index.php?mod=1&erreur=1');
    }

}
else {
    header('location: ../index.php?mod=1&erreur=2');
}





?>