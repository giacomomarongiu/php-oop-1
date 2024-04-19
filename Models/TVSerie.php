<?php
require_once __DIR__ . '/Production.php';
class TVSerie extends Production
{
    public $seasons;

    //Creo un metodo per settare le stagione
    public function setSeasons($seasons){
        $this->seasons=$seasons;
    }

}

//Faccio un tentativo
$defaultTV = new TVSerie("Pippo", "Arabo", 5,"Serie", new Genre("Comedy", "Lorem"));

//Stampo
//var_dump($defaultTV);