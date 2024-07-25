<?php
// phpinfo(); //verifier pod install : cmd f : pod
// exit;
//MySQL POO
//connecter DB 
$servername = "localhost";
$username= "root";
$password ="";
//3 façons pr connect DB
// $conn = new mysqli($servername,$username,$password);
// $conn = mysqli_connect($servername,$username,$password);

try {
    $conn = new PDO("mysql:host=$servername", $username,$password);  
    echo "Connecting to server ";
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
}
?>