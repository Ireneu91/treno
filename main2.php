<?php

require_once 'models/Wagon.php';
require_once 'models/Train.php';

$wagon1 = new Wagon(40, "prima");
$wagon2 = new Wagon(40);
$wagon3 = new Wagon(40, "prima");

$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);

$train->add_passengers(50, "prima");

var_dump($train->passengers_distribution());
