<?php

echo"Hoeveel Activiteiten wil je toevoegen?".PHP_EOL;
$hoeveelheid = readline();

$info = Array();

for ($i=0; $i <= $hoeveelheid-1 ; $i++){
    echo"Wat wil je toevoegen aan je bucketlist?".PHP_EOL;
    $droomen = readline();
    array_push ($info , $droomen);
} 

for ($i =0; $i <= $info ; $i++){
    echo $info[$i].PHP_EOL;
}



?>