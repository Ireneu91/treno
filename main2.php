<?php

require_once 'models/Wagon.php';
require_once 'models/Train.php';

$wagon1 = new Wagon(40);
$wagon2 = new Wagon(40);
$wagon3 = new Wagon(40);

$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);

echo $train->add_passengers(90, "prima"); //restituisce 0
echo "\n";
$train->get_wagons_of_class("prima"); // [wagon1, wagon3];

$train->passengers_distribution(); //[40,0,10];
