<?php

require_once 'models/Wagon.php';

class Train {
    private int $passengers;
    private int $seats;
    private array $wagon = [];

    public function __construct()
    {
        // lo lascio vuoto perché non passo niente al nuovo treno
    }

    // questo dà 0
    public function passengers_count(){   

    }

    // questo dà 120, ovvero il numero totale di posti
    public function seats_count()
    {
        
    }

     // questo restituisce il numero di passeggeri che avanzano, in questo caso 0. I paggeggeri vengono alloggiati nel primo vagone fino ad esaurirlo, poi nel secondo fino ad esaurirlo e così via
    public function add_passengers(): int
    {
        
    }
        
    // questo restituisce una lista con la distribuzione dei passeggeri nei vagono, in questo caso [10, 0, 0]
    public function passengers_distribution()  
    {
        
    }

    // i passeggeri vengono rimossi dall'ultimo vagone fino a svuotarlo, poi si passa al penultimo e così via
    public function remove_passengers(): int 
    {
        
    }

    // $vagone è un oggetto di classe Wagon (infatti in alto l'abbiamo richiamata)
    public function add_wagon(Wagon $vagone){

         // ogni nuovo oggetto verrà aggiunto all'array della proprietà wagon che abbiamo dichiarato all'inizio, che fa parte di questa istanza ($this->)
        $this->wagon[] = $vagone;
    }

}