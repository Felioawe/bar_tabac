<?php require_once "./config.php"?>

<?php var_dump($_GET['id']);  ?>
<?php if (isset($_GET['id']) && !empty($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id_user = :id";

    $req = $db->prepare($sql);

    $req->execute([":id" => $id]);

    if ($req) {
        header("location: ../compte.php?mod=2&success=4" );
    }
    elseif ($req == false) {
        header("location: ../compte.php?mod=2&erreur=3" );
    }
}
else {
    header("location: ../compte.php?mod=2&erreur=3" );
}