<?php
// rappelle tes class de 2 manière :

// require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'Creneau.php';
// ou 
   require_once "../class/Creneau.php"; 

// new Creneau est une instance de la class Creneau dans la variable $creneau
$creneau = new Creneau(9, 12);
$creneau2 = new Creneau(14, 16);
// intersect, toHTML et inclusHeur sont des function créer dans la class Creneau
$creneau->intersect($creneau2);

echo $creneau->toHTML();
var_dump($creneau->intersect($creneau2));
var_dump($creneau->inclusHeure(10),$creneau2->inclusHeure(10));





?>