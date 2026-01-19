<?php

require_once 'models/Wagon.php';
require_once 'models/Train.php';

$wagon1 = new Wagon(40);
$wagon2 = new Wagon(40);
$wagon3 = new Wagon(40);


echo $wagon1->passengers_count();
echo "\n";  // questo dà 0
echo $wagon1->seats_count();  // questo dà 40, ovvero il numero totale di posti
echo "\n"; 
echo $wagon1->add_passengers(10);  // questo restituisce il numero di passeggeri che avanzano, in questo caso 0
echo "\n"; 

echo $wagon1->passengers_count();  // adesso dà 10
echo "\n"; 
echo $wagon1->add_passengers(55);  // questo adesso restituisce 25
echo "\n"; 
echo $wagon1->passengers_count();  // adesso dà 40
echo "\n"; 
echo $wagon1->remove_passengers(15);
echo "\n"; 
die();
echo $wagon1->passengers_count();  // adesso dà 25
echo "\n"; 
echo $wagon1->remove_passengers(25);
echo "\n"; 
echo $wagon1->passengers_count();  // adesso dà 0
echo "\n"; 

 
$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);

echo $train->passengers_count();  // questo dà 0
echo "\n"; 
echo $train->seats_count();  // questo dà 120, ovvero il numero totale di posti
echo "\n"; 


echo $train->add_passengers(10);  // questo restituisce il numero di passeggeri che avanzano, in questo caso 0. I paggeggeri vengono alloggiati nel primo vagone fino ad esaurirlo, poi nel secondo fino ad esaurirlo e così via

echo "\n"; 

echo $train->passengers_count();  // questo dà 10
echo "\n"; 
echo $train->passengers_distribution();  // questo restituisce una lista con la distribuzione dei passeggeri nei vagono, in questo caso [10, 0, 0]
echo "\n"; 
die();

$train->add_passengers(100);  // questo restituisce ancora 0
$train->passengers_count();  // questo dà 110
$train->passengers_distribution();  // questo restituisce [40, 40, 30]
$train->remove_passengers(35);  // i passeggeri vengono rimossi dall'ultimo vagone fino a svuotarlo, poi si passa al penultimo e così via
$train->passengers_count();  // questo dà 75
$train->passengers_distribution();  // questo restituisce [40, 35, 0]

