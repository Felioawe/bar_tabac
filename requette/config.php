<?php 
define("BDHOST", "localhost");
define("BDUSER", "root");
define("BDPASS", "");
define("BDNAME", "bar_bistrot");

$dsn = "mysql:host=".BDHOST.";dbname=". BDNAME;

try {
    
    $db = new PDO($dsn, BDUSER, BDPASS);
   
}

catch(PDOException $e){
    die("erreur de connexion".$e->getMessage());
}
?>