<?php

require_once 'models/Wagon.php';
require_once 'models/Train.php';

try {
    $wagon1 = new Wagon(40);
    $wagon2 = new Wagon(40, "prima");
    $wagon3 = new Wagon(40);

    $train = new Train();
    $train->add_wagon($wagon1);
    $train->add_wagon($wagon2);
    $train->add_wagon($wagon3);
    $res = $train->get_wagons_of_class("prima");
    $train->add_passengers(40, "seconda"); //restituisce 0
    $train->add_passengers(80); // di default in seconda classe

    $train->passengers_distribution(); //[40,0,10];

    $train->remove_passengers(-2, "prima");

    echo "\n ciao \n";
    echo $train->report($wagon1);

} catch (TypeError $e) {
    echo "Attenzione: i valori inseriti non sono corretti (inserisci un numero)";
} catch (InvalidArgumentException $e) {
    echo "Attenzione: " . $e->getMessage();
} catch (Throwable $t) {
    // Questo cattura qualsiasi altro tipo di errore non previsto
    echo "Si è verificato un errore imprevisto: " . $t->getMessage();
}

