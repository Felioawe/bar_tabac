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
            <div class="cont-article-card radius-11 overflow-hidden shadow2">
                <div class="article-card position-relative">
                <img class="w-100 h-300" src="./upload/'.$add['img'].'" alt="">
                    <div class="article-card-h position-absolute d-flex flex-column justify-content-center align-items-center">
                        <h4 class="text-uppercase text-or">'.$add['titre'].'</h4>
                        <a href="#"><i class="fa fa-plus text-white"></i></a>
                    </div>
                </div>
                <div class="bg-white px-3 py-2">
                    <h4 class="text-black text-ellipsis">'.$add['titre'].'</h3>
                    <p class="text-black text-ellipsis">'.$add['mes'].'</p>
                </div>
            </div>
        </div>';

}
?>