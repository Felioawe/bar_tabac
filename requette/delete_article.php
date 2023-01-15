<?php require_once "./config.php"?>

<?php var_dump($_GET['id']);  ?>
<?php if (isset($_GET['id']) && !empty($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM blog WHERE id_blog = :id";

    $req = $db->prepare($sql);

    $req->execute([":id" => $id]);

    if ($req) {
        header("location: ../evenement.php?mod=2&success=4" );
    }
    else {
        header("location: ../evenement.php?mod=2&erreur=3" );
    }
}

else {
    header("location: ../evenement.php?mod=2&erreur=3" );
}