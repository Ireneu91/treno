<?php

class Wagon{
    private int $totalePosti;
    private int $totalePasseggeri;
    private int $postiDisponibili;

    public function __construct($totalePosti)
    {
        $this->totalePosti = $totalePosti;
    }

    public function passengers_count(): int{

    }

    public function seats_count(): int{

    }

    public function add_passengers(){

    }

    public function remove_passengers(){

    }
}