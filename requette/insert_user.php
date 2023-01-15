<?php 
require_once "./config.php";

var_dump($_POST);
var_dump($_FILES);


//  isset si mon champ n'est pas null ou indifine (existe)
//  empty si mon champ du formaire est vide 
// !empty si mon champ du formaire est different de vide (saisi)
if (isset($_POST['name']) && isset($_POST['user']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['mdp']) 
&& !empty($_POST['name']) && !empty($_POST['user']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
echo'test';
    // je déclare ma variable et je leurs affectes les clés de mon tableau $_POST 
    $name = $_POST['name']; 
    $user = $_POST['user']; 
    $tel = $_POST['tel']; 
    $email = $_POST['email']; 
    $mdp = $_POST['mdp'];

    if (isset($_POST["admi"]) && !empty($_POST["admi"])) {
        $status = $_POST["admi"];
    }
    else {
        $status = "emp";
    }

    $img = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];
    $size = $_FILES['img']['size'];

    move_uploaded_file($tmp_name, "../img_profil/".$img);

    // je prends ma clé et je vais la hashé grâce à la function ou methode passord_hash 
    $hash = password_hash($mdp, PASSWORD_DEFAULT);

    $sql1 = "SELECT * FROM user WHERE user = :user";

    $req1 = $db->prepare($sql1);

    $req1->execute([':user' => $user]);

    $count_user = $req1->rowCount();
    var_dump( $count_user);

    if ($count_user >= 1) {

        header("location: ../compte.php?mod=2&erreur=1");
    }
    
    else {
        
        // je définie mon langage sql et je le prepare en inserant des parametre :nom du parametre  et ? et je la stock dans une variable 
        // $sql = "INSERT INTO blog (user, mdp) VALUES (':user', '?')";
        
        $sql2 = "INSERT INTO user (img_user, name, user, tel, email, mdp, status) VALUES (:img, :name, :user, :tel, :email, :mdp, :status)";
        
        $req2 = $db->prepare($sql2);
        
        // le bindParam ou bindValue fonctionne seulement avec une requette preparer
        // grace à bindParam jaffecter ma variable a mon parametre (:user)
        // $req->bindParam(':user', $user/*, declare sont type (integer, string ...ect)*/);
    
        // grâce à bindParam j'affecter ma variable et mon parametre index 2 (?)
        // $req->bindParam(2, $hash/*, declare sont type (integer, string ...ect)*/);

        $req2->execute([
            ':img' => $img,
            ':name' => $name,
            ':user' => $user,
            ':tel' => $tel,
            ':email' => $email,
            ':mdp' => $hash,
            ':status' => $status
            ]);

        // j'execute ma requette de 2 manière :
        // sois en affectant directemen mes prametre dans mon execute
        // $req->execute([':user' => $user, 2 => $hash]);
        // sois en affectant mes prametre avant avec bindParam ou bindValue
        // $req->execute();

        if ($req2) {
            
            echo 'requette envoyer';
            header("location: ../compte.php?mod=2&success=2");
        }
        else {
            
            echo "erreur d'envoie";
            header("location: ../compte.php?mod=2&erreur=2");
        }
    }

}
else {
            
    echo "erreur d'envoie";
    header("location: ../compte.php");
}
