<?php

class Wagon{
    public int $totalePosti;
    public int $totalePasseggeri = 0;
    public int $postiDisponibili;

    public function __construct($totalePosti)
    {
        $this->totalePosti = $totalePosti;
        $this->postiDisponibili = $totalePosti;
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

    public function remove_passengers(int $number): void{
        $differenza = $this->totalePasseggeri - $number;
        if($differenza >= 0){
            $this->totalePasseggeri = $this->totalePasseggeri - $number;
            $this->postiDisponibili = $this->postiDisponibili + $number;
        }else{
            $this->totalePasseggeri = 0;
            $this->postiDisponibili = $this->totalePosti;
        }
    }
}