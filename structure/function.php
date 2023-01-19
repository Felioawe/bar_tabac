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
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user ORDER BY date DESC LIMIT $nb";
        
        $req = $db->prepare($sql);
        
        $req->execute(); 

        return  $req->fetchAll(PDO::FETCH_ASSOC);
    } 

    elseif ($id !== "" && $nb == "") {
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user WHERE id_blog = :id";
        
        $req = $db->prepare($sql);
        
        $req->execute([':id' => $id]); 
       
        return  $req->fetch(PDO::FETCH_ASSOC);
    } 
    
    else {
    
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user ORDER BY date DESC";
        
        $req = $db->prepare($sql);
        
        $req->execute();
        
        return  $req->fetchAll(PDO::FETCH_ASSOC);
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
    $output = '<div class="col-12 col-md-6 col-lg-4 col-xl-3 p-3">
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
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="cards-date">'.$add['date'].'</p>';
                if (isset($_SESSION['connect']) && $_SESSION['connect'] == 1 && isset($_SESSION['status']) && $_SESSION['status'] == 'admi') { 
                            $output .= '<form id="form_delete_article" action="./evenement.php" method="get">
                                            <input type="hidden" name="id" value="'.$add['id_blog'].'">
                                            <input type="hidden" name="mod" value="3">
                                            <button class="butDelete ps-2 py-1"type="submit">Supprimer</button>
                                        </form>';}
                $output .= 
                       '</div>
                    </div>
                </div>
               </div>';
    return $output;
}

?>
                                    