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
$res = $train->get_wagons_of_class("prima");
echo $train->add_passengers(50, "prima"); //restituisce 0

$train->add_passengers(50, "prima"); //restituisce 0


