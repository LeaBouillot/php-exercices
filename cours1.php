<?php
//sort()
$fruits = array("pomme", "poire", "peche", "ctron");
sort($fruits);
print_r($fruits);
//retour à la ligne
echo "<br>";
//$GLOBALS
$x = 75;
$y = 25;
function addition() {
    global $x, $y;
    $z = $x + $y;
    echo "La somme de x et y est: $z";
}
addition();
echo "<br>";

//$_SERVER ::obtenir les informations
//print_r($_SERVER);
echo $_SERVER['HTTP_HOST']; //nom du serveur
echo $_SERVER['SERVER_PORT']; //port du serveur
echo $_SERVER['REQUEST_URI']; //uri de la page
echo "<br><br>";

//$_GET : récupérer les données envoyées par la méthode GET

//REGULAR EXPRESSION
$string = "Hello Léa";
$pattern = '/Hello/';

preg_match($pattern, $string, $result);
var_dump($result);

echo "<br>";

//DATE()
echo date("Y-m-d H:i:s"); //2024-07-28 16:52:43

//included files contenu (or required files)
include 'connect.php'; //include_once()
echo "<br>";

//cookies
setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day
echo $_COOKIE["user"];

echo "<br>";






