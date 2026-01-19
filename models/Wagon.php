<?php

class Wagon{
    private int $totalePosti;
    private int $totalePasseggeri = 0;
    private int $postiDisponibili;

    public function __construct($totalePosti)
    {
        $this->totalePosti = $totalePosti;
    }

    public function passengers_count(): int{
        return $this->totalePasseggeri;
    }

    public function seats_count(): int{
        return $this->totalePosti;
    }

    public function add_passengers(){

    }

    public function remove_passengers(){

    }
}