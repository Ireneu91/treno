<?php

require_once 'models/Wagon.php';

class Train {
    private int $passengers;
    private int $seats;
    private array $wagons = [];

    public function __construct()
    {
        
    }

    // questo dà 0
    public function passengers_count(){   
        $vagoni = $this->wagons;
        $totale = 0;
        foreach($vagoni as $vagone){
            $totale_vagone = $vagone->passengers_count();
            $totale = $totale + $totale_vagone;
        }
        $this->passengers = $totale;
        return $totale;
    }

    // questo dà 120, ovvero il numero totale di posti
    public function seats_count()
    {
        $vagoni = $this->wagons;
        $totalePosti = 0;
        foreach($vagoni as $vagone){
            $totale_posti_vagone = $vagone->seats_count();
            $totalePosti = $totalePosti + $totale_posti_vagone;
        }
        $this->seats = $totalePosti;
        return $totalePosti;
    }

     // questo restituisce il numero di passeggeri che avanzano, in questo caso 0. I paggeggeri vengono alloggiati nel primo vagone fino ad esaurirlo, poi nel secondo fino ad esaurirlo e così via
    public function add_passengers(int $num): int
    {

        
    }
        
    // questo restituisce una lista con la distribuzione dei passeggeri nei vagono, in questo caso [10, 0, 0]
    public function passengers_distribution(): array
    {
        
        
    }

    // i passeggeri vengono rimossi dall'ultimo vagone fino a svuotarlo, poi si passa al penultimo e così via
    public function remove_passengers($num): int 
    {
        return $this->passengers = $this->passengers - $num;
    }

    // $vagone è un oggetto di classe Wagon (infatti in alto l'abbiamo richiamata)
    public function add_wagon(Wagon $vagone){

         // ogni nuovo oggetto verrà aggiunto all'array della proprietà wagon che abbiamo dichiarato all'inizio, che fa parte di questa istanza ($this->)
        $this->wagons[] = $vagone;
    }

}