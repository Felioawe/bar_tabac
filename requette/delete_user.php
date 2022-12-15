<?php require_once "./config.php"?>

<?php var_dump($_GET['id']);  ?>
<?php if (isset($_GET['id']) && !empty($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id_user = :id";

    $req = $db->prepare($sql);

    $req->execute([":id" => $id]);

    if ($req) {
        header("location: ../compte.php?succes= 1" );
    }
    else {
        header("location: ../compte.php?erreur= 0" );
    }
}