<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "Creneau.php";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "Visiteur.php";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "Heritage.php";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "MyClass.php";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . "MyClass2.php";


require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'objet' . DIRECTORY_SEPARATOR . "fonction.php";





// $date1 = new DateTime('2014-01-31');
// $date2 = new DateTime('2019-01-01');
// $interval = $date1->diff($date2, true);

// $date = new DateTime();
// $date->modify('+1 month'); //ajoute 1 mois en objet avec modify('+1 month')
// $time = time();
// $time = strtotime('+1 month', $time); //ajoute 1 mois en procedural avec strtotime('+1 month')

// echo "Affichage en objet " . $date->format('d/m/y');
// echo "<br>";
// echo "Affichage en procedural " . date('d/m/y', $time);
// echo "<br>";

// echo '<pre>';
// echo var_dump($interval) ;
// echo '</pre>';

// echo "<br>";

// $date1 = $date1->format('y/m/d');
// $date2 = $date2->format('y/m/d');

// $y = ($interval->y > 1) ? "s" :  "";
// $m = ($interval->m > 1) ? "s" :  "";
// $d = ($interval->days > 1) ? "s" :  "";


// echo "entre le $date1 et le $date2 il y a $interval->y an$y $interval->m moi$m $interval->days jour$d";

// echo '<pre>';
// var_dump($date);
// echo '</pre>';

// echo "<br>";
// echo "<br>";


/******************** introduction objet********************/

/********************  example 1 ********************/
// echo "<br>";
?>

<h2 style="text-align: center;">Les objets</h2>

<?php

// $creneau est une instanciation de la class Creneau
$creneau1 = new Creneau(9, 12);
echo '<pre>';
//var_dump($creneau1);
echo '</pre>';
// $creneau2 est une instanciation de la class Creneau
$creneau2 = new Creneau(14, 16);
echo '<pre>';
//var_dump($creneau2);
echo '</pre>';

echo "<br>";
echo $creneau1->toHTML();
echo "<br>";
echo $creneau2->toHTML();

echo "<br>";
echo "<br>";
echo "<h2>inclusHeure</h2>";
var_dump($creneau1->inclusHeure(9));
echo "<h2>intercection</h2>";
var_dump($creneau1->intersect($creneau2));
echo "<br>";
echo "<br>";

/********************  example 2 ********************/

$visiteur1 = new Visiteur;
$heritage1 = new Heritage;
$obj = new MyClass();
$obj2 = new MyClass2();



$visiteur1->set_nom('class Visiteur "propriété PUBLIC" vador ');
$visiteur1->set_prenom('class Visiteur "propriété PRIVATE"  dark ');

$heritage1->set_nom('class Heritage "propriété PUBLIC" skywalker ');
$heritage1->set_prenom('class Heritage "propriété PRIVATE"   Luc');



echo $visiteur1->get_prenom();
echo "<br>";
echo $visiteur1->nom;
echo "<br>";
echo "<hr>";

echo $heritage1->get_prenom();
echo "<br>";
echo $heritage1->nom;
echo "<hr>";

dump($heritage1);

echo "<hr>";
echo "<h3> La class MyClass</h3>";
echo $obj->public . "<br>"; // Fonctionne
// echo $obj->protected; // Erreur fatale
//echo $obj->private; // Erreur fatale
$obj->printHello(); // Affiche Public, Protected et Private

echo "<hr>";
echo "<h3> La class MyClass2 herité de MyClass</h3>";
echo $obj2->public . "<br>"; // Fonctionne
//echo $obj2->protected; // Erreur fatale
//echo $obj2->private; // Indéfini
$obj2->printHello(); // Affiche Public2, Protected2 et Undefined (Indéfini)

?>