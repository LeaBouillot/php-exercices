<?php
$txt = "PHP";
echo "Salut php!";

echo "<h3>".$txt."</h3>";

echo "1";
echo("3");
print("4");

echo"<h2>PHP</h2>";
echo "Hello, World!<br>";
echo "I'm about to learn PHP!<br>";

$x=333;
var_dump($x); //$x info : int(333)

$a="bonjour lea";
$a_len=strlen($a); 
echo "longueur de $a : $a_len <br>";
echo str_word_count($a);

echo strrev("$a <br>");

$email = "eeee@eaiml.com <br>";

//strpos($email, "@") email 아ㄴ에 @ 있는지 확인
if(strpos($email, "@")){
    echo "L'email est valide <br>";
}else{
    echo "L'email est invalide<br> ";
}

//remplace le mot
$str="Je suis grande <br>";
$strl=str_replace("grande","petite",$str);
echo $strl;


$y="123abc"; //is_numeric()
if(is_numeric($y)){ //is_numeric: boolean(true)
    echo "y est un nombre <br>";
} else {
    echo "y n'est pas un nombre <br>";
}

$z=1.234; //is_float()
if(is_int($z)){ //is_int: boolean(true)
    echo "z est un entier <br>";
} else {
    echo "z n'est pas un entier <br>";
}
//random number generator
echo (pi());

//abs() 절대값
//sqrt() rooting
//round() 반올림
//rand(1, 5) nombre entre min 1 max 5
define("a", "b"); //defind est comme const, ne peut pas chonger
echo a; //b

//
$c =10;
++$c; 

//comparaison
$a=10;
$b=5;
if($a>$b){
    echo "a est plus grand";
} else if($a<$b){
    echo "a est plus petit";
} else if($a==$b){
    echo "a est égal à b";
} elseif($a!=$b){
    echo "a est différent de b";
}


//switch
$color="blue";
switch($color){
    case "red":
        echo "The color is red";
        break;
    case "blue":
        echo "The color is blue";
        break;
    case "green":
        echo "The color is green";
        break;
    default:
        echo "The color is not red, blue, or green";
}

//loop
$i=0;
while($i<5){
    echo "Number: $i <br>";
    $i++;
}

for($i=0; $i<5; $i++){
    echo "Number: $i <br>";
}

//foreach(array
// $arr = [];
//$arr= array( 1=>"1", 2=>"2", 3=>"3");

$fruits = array("apple", "banana", "cherry");
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue; //or break;
    }
    echo "Odd number: $i <br>";
}

//function
function myTest(){
    echo "Hello from a function <br>";
}
myTest();

function addNumbers($x, $y) {
    return $x + $y;
}
echo addNumbers(5, 10);

//array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like ". $cars[0]. ", ". $cars[1]. " and ". $cars[2]. ".<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is ". $age['Peter']. " years old.<br>";

//creation array
$fruits = array();
$fruits["pomme"] = "produit en France";
$fruits["orange"] = "produit en Brasil";
$fruits["banane"] = "produit en Cote d'ivoir <br>";

print_r($fruits);
/*
Array (
 [pomme] => produit en France 
 [orange] => produit en Brasil 
 [banane] => produit en Cote Ivoir 
 )
*/

 //array multidimensionnel :  array (car, quantité, vendu)
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Toyota", 35, 28)
);
echo "le nombre de produit de Volvo est ", $cars[1][1];

/* print_r($cars);
Array (
 [0] => Array (
  [0] => Volvo
  [1] => 22
  [2] => 18
  )
  */

  //array associatif
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  $age["David"] = "45";
  echo "David is ". $age['David']. " years old.<br>";

  //array avec des types différents
  $mixed = array(1, "Hello", true, 3.14);
  echo $mixed[1]; // Hello

  //array multidimensionnel avec des types différents
  $multi = array(
    array(1, "Hello", true),
    array(2, 3.14, false)
  );
  echo $multi[1][2]; // false

//loop sur array multidimensionnel
 















