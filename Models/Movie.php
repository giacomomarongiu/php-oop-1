<?php
require_once __DIR__ . '/Production.php';
//Creo la mia nuova classe con exteds per ereditare le proprietà e i metodi di Production
class Movie extends Production
{
    //Aggiungo le proprietà extra che mi servono
    //Assegno un valore di default per ora
    public $profits = "test";
    public $duration = "Altro test";

    public function setProfits($profits){
        $this->profits = $profits;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }
}

//Faccio un tentativo
//$defaultMovie = new Movie("Pippo", "Arabo", 5,"Movie", new Genre("Comedy", "Lorem"));

//Stampo
//var_dump($defaultMovie);