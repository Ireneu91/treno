<?php

class Wagon{

    // proprietà della classe, che diventeranno dell'oggetto
    private int $totalePosti;
    private int $totalePasseggeri = 0;
    private int $postiDisponibili;
    private string $classe;

    // il costruttore serve a creare l'oggetto
    public function __construct($totalePosti=null, $classe = "seconda") 
    {   
        if(is_numeric($totalePosti) && ($classe == "seconda" || $classe == "prima")){
            $this->totalePosti = $totalePosti;
            $this->postiDisponibili = $totalePosti;
            $this->classe = $classe;
        }
        if($totalePosti == null){
            throw new InvalidArgumentException("Devi passare almeno un argomento!\n");
        }
        if(!is_int($totalePosti) || $totalePosti < 0){
            throw new InvalidArgumentException("Il primo argomento deve essere un numero positivo!\n");
        }
        if($classe && ($classe != "prima" && $classe != "seconda")){
            throw new InvalidArgumentException("Il secondo argomento, se c'è, deve essere una stringa: prima o seconda\n");
        }
        //costruttore viene chiamato tutte le volte che fo new Nomeclasse
        
    }

    public function passengers_count(): int{
        return $this->totalePasseggeri;
    }

    public function seats_count(): int{
        return $this->totalePosti;
    }

    public function add_passengers(int $number): int{
        $differenza = $this->postiDisponibili - $number;
        if($differenza >= 0){
            $this->postiDisponibili = $this->postiDisponibili - $number;
            $this->totalePasseggeri = $this->totalePasseggeri + $number;
            return 0;
        }else{
            $this->totalePasseggeri = $this->totalePosti;
            $esclusi = $number - $this->postiDisponibili;
            $this->postiDisponibili = 0;
            return $esclusi;
        }
    }

    public function remove_passengers(int $number): int{
        $differenza = $this->totalePasseggeri - $number;
        if($differenza >= 0){
            $this->totalePasseggeri = $this->totalePasseggeri - $number;
            $this->postiDisponibili = $this->postiDisponibili + $number;
            return 0;
        }else{
            $this->totalePasseggeri = 0;
            $this->postiDisponibili = $this->totalePosti;
            return -$differenza;
        }
    }

    public function seats_available(): int{
        return $this->postiDisponibili;
    }

    public function get_class(): string{
        return $this->classe;
    }

}

