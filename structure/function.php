<?php 


function get_article($db,$nb) {
    if ($nb > 0) {
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user LIMIT $nb";
        
        $req = $db->prepare($sql);
        
        $req->execute([':nb' => $nb]); 
    } 
    
    else {
    
        $sql = "SELECT blog.id_blog, blog.titre, blog.img, user.img_user, user.user, blog.mes, blog.date FROM user INNER JOIN blog ON user.id_user = blog.id_user";
        
        $req = $db->prepare($sql);
        
        $req->execute();
    }
    return  $req->fetchAll();
}



function article($add) {
    return '<div class="col-12 col-lg-3 p-3">
                <div class="cards">
                    <div class="cards-img">
                        <img class="w-100 h-250" src="./upload/'.$add['img'].'" alt="">
                        <a href="#" class="cards-h">
                             <h4>'.$add['titre'].'</h4>
                        </a>
                    </div>
                    <div class="cards-text">
                       <h4>'.$add['titre'].'</h3>
                        <p>'.$add['mes'].'</p>
                        <p>'.$add['date'].'</p>
                    </div>
                </div>
            </div>';

}
?>