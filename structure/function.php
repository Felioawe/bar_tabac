<?php 


function get_article($db,$nb,$id) {
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
                    </div>
                </div>
            </div>';

}
?>