<?php 
require_once "./config.php";


if (isset($_POST['name']) && isset($_POST['first_name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['msg'] )
&& !empty($_POST['name']) && !empty($_POST['first_name']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['msg'])) {
echo "test";


    $name = $_POST['name']; 
    $first_name = $_POST['first_name']; 
    $tel = $_POST['tel']; 
    $email = $_POST['email']; 
    $sujet = $_POST['sujet'];
    $msg = $_POST['msg']; 
    $date = $_POST['date']; 
    
    $sql = "INSERT INTO contact (name, first_name, tel, email, sujet, msg, date) VALUES (:name, :first_name, :tel, :email, :sujet, :msg, :date)";

    $req = $db->prepare($sql);
    
    $req->execute([

        ':name' => $name,
        ':first_name' => $first_name,
        ':tel' => $tel,
        ':email' => $email,
        ':sujet' => $sujet,
        ':msg' => $msg,
        ':date' => $date

        ]);


    if ($req) {
        
        header("location: ../contact.php?mod=2&success=6");
        echo 'requette envoyer';
    }
    
    else {
        
        header("location: ../contact.php?mod=2&erreur=4");
        echo "erreur d'envoie";
    }
}


?>