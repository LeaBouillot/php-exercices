<?php
// phpinfo(); //verifier pod install : cmd f : pod
// exit;
//MySQL PDO
//connecter DB 
$servername = "localhost";
$username = "root";
$password = "";
//3 façons pr connect DB
// $conn = new mysqli($servername,$username,$password);
// $conn = mysqli_connect($servername,$username,$password);
//PDO EXTENTION

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //error msg
  
    echo "<p>Connected successfully.</p>";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

try {
// $sql = "CREATE DATABASE firstdb1";
$sql = "DROP DATABASE firstdb1";

$conn ->exec($sql); // SQL statement executed
echo "DELETE FROM firstdb1";
// echo "firstdb created successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}
$conn = null;
