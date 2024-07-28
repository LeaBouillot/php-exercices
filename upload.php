<?php
//cours3.php
print_r($_FILES);

// echo $_FILES['ufile']['name'];


//Lire File
$file = 'index.txt';

if (file_exists($file)) {
    $pf = fopen($file, 'r');
    if ($pf) {
        $fz = $filesiza($file);
        $fr = fread($pf, $fz);
        echo $fr;
    } else {
        echo 'File ne peut pas ouvrir!';
    }
} else {
    echo 'File not found!';
}
