<?php

require_once 'models/Wagon.php';
require_once 'models/Train.php';

try{
    $wagon1 = new Wagon(40);
    $wagon2 = new Wagon(40, "prima");
    $wagon3 = new Wagon(40);
}catch(InvalidArgumentException $e){
    echo $e->getMessage();
}

$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);
$train->add_passengers(41);
$train->add_passengers(10, "prima");
$train->report();
$train->remove_passengers(16);
echo "\n";
$train->report();





