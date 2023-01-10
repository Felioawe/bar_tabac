<?php 

// le fait de creer en 2 fonction permet au code d'etre plus lisible et plus simple à comprendre pour d'autre.
/**
 * Cette fonction permet de selectinner un nombre limiter ou tous les 
 * article ou encore un seul en rapport à son id via une requette.
 * @param PDO $db ceci est la connection
 * @param mixed $nb entrer un nombre  limité 
 * @param string $id entrer l'integer de l'id 
 * @return $req->fetchAll() ou un fetch(PDO::FETCH_ASSOC)
 */
function get_article(PDO $db, $nb, $id = "") {

    if ($nb > 0 && $id == "") {
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user LIMIT $nb";
        
        $req = $db->prepare($sql);
        
        $req->execute(); 

        return  $req->fetchAll();
    } 

    elseif ($id !== "" && $nb == "") {
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user WHERE id_blog = :id";
        
        $req = $db->prepare($sql);
        
        $req->execute([':id' => $id]); 
       
        return  $req->fetch(PDO::FETCH_ASSOC);
    } 
    
    else {
    
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user";
        
        $req = $db->prepare($sql);
        
        $req->execute();
        
        return  $req->fetchAll();
    }
    
}

/**
 * Cette fonction permet de selectinner une ligne d'une table grâce à son id.
 * @param PDO $db ceci est la connection
 * @param mixed $tab entrer une table
 * @param mixed $key entrer la clé de l'id
 * @param mixed $id entrer l'integer de l'id 
 * @return $req->fetch(PDO::FETCH_ASSOC);
 */
function Select_id_table(PDO $db, $tab, $key, $id) {

    $sql = "SELECT * FROM $tab WHERE $key = $id";

    $req = $db->prepare($sql);

    $req->execute();

    return $req->fetch(PDO::FETCH_ASSOC);
}



function article($add) {
    return '<div class="col-12 col-md-6 col-lg-4 col-xl-3 p-3">
                <div class="cards">
                    <div class="cards-img">
                        <img class="w-100 h-250" src="./upload/'.$add['img'].'" alt="">
                        <a href="./article.php?id='.$add['id_blog'].'" class="cards-h">
                             <h4>'.$add['titre'].'</h4>
                        </a>
                    </div>
                    <div class="cards-text">
                       <h5 class="cards-titre">'.$add['titre'].'</h5>
                        <p class="cards-mes">'.$add['mes'].'</p>
                        <p class="cards-date">'.$add['date'].'</p>
                        <a class="butDelete px-2 py-1" href="./requette/delete_user.php?id='.$add['id_blog'].'">Supprimer</a>
                    </div>
                </div>
            </div>';

}
?>